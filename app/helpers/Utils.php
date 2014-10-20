<?php

class Utils {

    const FLASH_SUCCESS = 'success';
    const FLASH_INFO = 'info';
    const FLASH_WARNING = 'warning';
    const FLASH_ERROR = 'danger';

    public static function flash($type, $message) {
        // Forget the flash manually since Laravel doesn't forget it soon enough.
        if (Session::has('flash') && in_array('flashes', Session::get('flash')['old'])) {
            Session::forget('flashes');
            $old = Session::get('flash')['old'];
            foreach ($old as $idx => $val)
                if ($val === 'flashes')
                    unset($old[$idx]);
        }
        if(Session::has('flashes')) {
            $flash = Session::get('flashes');
            if (array_key_exists($type, $flash))
                array_push($flash[$type], $message);
            else
                $flash[$type] = [$message];
        } else
            $flash = [$type => [$message]];
        Session::flash('flashes', $flash);
    }
} 