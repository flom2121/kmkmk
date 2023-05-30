<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProductModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $product=[
            ['name'=>'hoodie1' , 'price'=>50 , 'image'=> 'beige_hoodie_flom_-1-removebg-preview.png'], 
            ['name'=>'hoodie2' , 'price'=>60, 'image'=> 'black_hoodie_flom-1-removebg-preview.png'], 
            ['name'=>'hoodie3' , 'price'=>70, 'image'=> 'flom_hoodie_blue-1-removebg-preview.png'], 
            ['name'=>'hoodie4' , 'price'=>240, 'image'=> 'flom_white_hoodie-removebg-preview.png'], 
            ['name'=>'hoodie5' , 'price'=>90, 'image'=> 'grey_hoodie_1-1-removebg-preview.png'], 
            ['name'=>'hoodie6' , 'price'=>100, 'image'=> 'redflom-1-removebg-preview.png'], 
        ]; 
        foreach($product as $product){
            ProductModel::create([
                'name' => $product['name'] ,
                'price' => $product['price'],
                'image'=>$product['image'], 
            ]);
        }
    }
}
