<?php

use \Carbon\Carbon;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        // For testing
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('UserTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('OrderTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('OrderItemTableSeeder');

        // Always call these
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('PlaceTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('TypeTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('ItemTableSeeder');

    }

}

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->truncate();
        User::create(['email' => 'adamk33n3r@gmail.com', 'username' => 'adamk33n3r', 'password' => 'pass', 'admin' => true]);
        User::create(['email' => 'test@gmail.com', 'username' => 'test', 'password' => 'test']);
    }
}

class PlaceTableSeeder extends Seeder {

    public function run() {
        DB::table('places')->truncate();
        Place::create([
            'name'=>'Pizza Hut',
            'address'=>'802 NotGunnaHappen Lane,Chicago,IL',
            'phone' => '555-555-5555',
        ]);
        Place::create([
            'name'=>'Little Caesar\'s',
            'address'=>'5000 Park Way,Detroit,MI',
            'phone' => '555-555-5555',
        ]);
        Place::create([
            'name'=>'Domino\'s',
            'address'=>'4367 Main St.,Upland,CA',
            'phone' => '555-555-5555',
        ]);
        Place::create([
            'name'=>'Toppit Pizza',
            'address'=>'6696 Amy Way Drive,Gas City,IN',
            'phone' => '765-998-2701',
            'hours' => 'Sun-Thurs 11am-10pm, Fri-Sat 11am-11pm',
        ]);
    }
}

class TypeTableSeeder extends Seeder {

    public function run() {
        DB::table('types')->truncate();
        Type::create(['name' => 'Pizza']);
        Type::create(['name' => 'Drink']);
        Type::create(['name' => 'Side']);
        Type::create(['name' => 'Sauce']);
    }
}

class ItemTableSeeder extends Seeder {

    public function run() {
        DB::table('items')->truncate();
        Item::create([
            'name' => 'Pepperoni Pizza',
            'size' => '12-inch',
            'price' => 7.99,
            'type_id' => 1,
            'place_id' => 4,
        ]);
        Item::create([
            'name' => '3-Meat Pizza',
            'size' => '16-inch',
            'price' => 12.99,
            'type_id' => 1,
            'place_id' => 3,
        ]);
        Item::create([
            'name' => 'Marinara Sauce',
            'size' => null,
            'price' => 0.99,
            'type_id' => 4,
            'place_id' => 2,
        ]);
        Item::create([
            'name' => 'Cheesy Bread',
            'size' => 'small',
            'price' => 2.99,
            'type_id' => 3,
            'place_id' => 2,
        ]);
    }
}


class OrderTableSeeder extends Seeder {

    public function run() {
        DB::table('orders')->truncate();
        Order::create([
            'paid' => false,
            'delivery' => false,
            'order_time' => date('Y-m-d H:i:s'),
            'user_id' => 1,
        ]);
        Order::create([
            'paid' => true,
            'delivery' => true,
            'delivery_address' => 'My house, dur',
            'order_time' => Carbon::now()->addDay(),
            'user_id' => 1,
        ]);
    }
}

class OrderItemTableSeeder extends Seeder {

    public function run() {
        DB::table('order_items')->truncate();
        OrderItem::create([
            'count' => 2,
            'item_id' => 2,
            'order_id' => 1,
        ]);
        OrderItem::create([
            'count' => 1,
            'item_id' => 1,
            'order_id' => 1,
        ]);
        OrderItem::create([
            'count' => 3,
            'item_id' => 3,
            'order_id' => 1,
        ]);
        OrderItem::create([
            'count' => 2,
            'item_id' => 1,
            'order_id' => 2,
        ]);
        OrderItem::create([
            'count' =>1,
            'item_id' => 4,
            'order_id' => 2,
        ]);
    }
}