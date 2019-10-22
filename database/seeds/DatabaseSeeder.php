<?php

use App\Product;
use App\User;
use App\Order;
use App\OrderDetail;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' =>'Super Admin',
        	'email' =>'nurazizah17b@gmail.com',
        	'email_verified_at'=> Carbon:: now(),
            'password' => bcrypt(12345678),
            'level' => '1'
        ]);
        
        $user = User::create([
        	'name' =>'Super user',
        	'email' =>'ajengp@gmail.com',
        	'email_verified_at'=> Carbon:: now(),
            'password' => bcrypt(12345678),
            'level' => '0'
        ]);

        $product = Product::create([
           'name' => 'Wedi Ireng Beach',
           'price' => 1000000
        ]);

        $product2 = Product::create([
           'name' => 'The Ijen Crater',
           'price' => 1230000
        ]);

        $order = Order::create([
            'user_id' => $user->id
        ]);

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'name' => 'Ajeng',
            'phone' => '12345',
            'identity' => '12345',
            'date' => Carbon::tomorrow()
        ]);

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product2->id,
            'name' => 'adsad',
            'phone' => '123124332123',
            'identity' => '23432423',
            'date' => Carbon::tomorrow()
        ]);
        
        $order = Order::create([
            'user_id' => $user->id
        ]);

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'name' => 'Ajeng',
            'phone' => '12345',
            'identity' => '12345',
            'date' => Carbon::tomorrow()
        ]);

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product2->id,
            'name' => 'adsad',
            'phone' => '123124332123',
            'identity' => '23432423',
            'date' => Carbon::tomorrow()
        ]);
    }
}
