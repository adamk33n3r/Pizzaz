<?php

class SessionsController extends \BaseController {
    public function create() {
        if (Auth::check()) return Redirect::to('/');
        return View::make('sessions.create');
    }

    public function store() {
        if (Auth::attempt(Input::only('username', 'password'), true))
            return Redirect::intended();
        else
            return Redirect::route('login')->withInput()->with('error', 'Combination not found. Try again.');
    }

    public function destroy() {
        Auth::logout();

        return Redirect::route('login');
    }


}
