<?php

class Type extends Eloquent {

    public function items() {
        return $this->hasMany('Item');
    }

    public static $rules = [
        'name' => ['required', 'unique:types'],
    ];

    public $messages;

//    public function isValid() {
//        $validation = Validator::make($this->attributes, static::$rules);
//        if ($validation->passes())
//            return true;
//        $this->messages = $validation->messages();
//        return false;
//    }

}
