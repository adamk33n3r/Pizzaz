<?php

class OrderItem extends Eloquent {

    public function item() {
        return $this->belongsTo('Item');
    }

    public function order() {
        return $this->hasMany('Order');
    }

    protected $forwarded_attributes = ['name', 'price', 'place'];

    public function __get($key) {
        if (in_array($key, $this->forwarded_attributes))
            return $this->item->getAttribute($key);
        else
            return parent::__get($key);
    }

}