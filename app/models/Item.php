<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Item extends Eloquent {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function place() {
        return $this->belongsTo('Place');
    }

    public function type() {
        return $this->belongsTo('Type');
    }

//    We don't really care about this info
//    public function orders() {
//        return $this->belongsToMany('Order');
//    }
}