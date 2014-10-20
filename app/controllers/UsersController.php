<?php

class UsersController extends \BaseController {

    protected $user;

    public function __construct(User $user) {
        $this->beforeFilter('auth', ['except' => ['create', 'store']]);
        $this->beforeFilter('admin', ['only' => ['index', 'destroy']]);
        $this->beforeFilter('mine', ['only' => 'show']);
        $this->user = $user;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $users = $this->user->all();
        return View::make('users.index')->with('users', $users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('users.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Input::all();
//        $input['password'] = Hash::make($input['password']);
        if (!$this->user->fill($input)->isValid())
            return Redirect::back()->withInput()->withErrors($this->user->messages);
        $this->user->save();
        Auth::login($this->user);
//        dd(Auth::user());
        return Redirect::route('pages.index');
//        return Redirect::route('users.show', $this->user->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {
        $user = $this->user->find($id);
        $orders = $user->orders;
        Return View::make('users.show', compact('user', 'orders'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function getRememberToken() {
        return $this->remember_token;
    }

    public function setRememberToken($value) {
        $this->remember_token = $value;
    }

    public function getRememberTokenName() {
        return 'remember_token';
    }

}
