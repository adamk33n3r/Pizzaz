<?php

class PagesController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
//        if (!Auth::check()) {
//            Auth::loginUsingId(1, true);
//            Utils::flash(Utils::FLASH_SUCCESS, "force logged in");
//        }
        return View::make('index');
    }

    public function news() {
        return View::make('news');
    }

    public function error($type) {
        switch ($type) {
            case 'admin':
                $message = 'You do not have the permissions to perform that action.';
                break;
            default:
                $message = 'Error';
        }
        Utils::flash(Utils::FLASH_ERROR, $message);
        return Redirect::back();
    }

}
