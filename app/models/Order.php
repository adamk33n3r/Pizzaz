<?php

class Order extends Eloquent {

    protected $dates = ['order_time'];

    public function items() {
//        $items = $this->belongsToMany('Item', 'order_items');
        $items = $this->hasMany('OrderItem');
//        dd($items);
        return $items;
    }

    public function getPriceAttribute() {
        $acc = 0;
        foreach($this->items as $item) {
            $acc += $item->price * $item->count;
        }
        return $acc;
    }
}