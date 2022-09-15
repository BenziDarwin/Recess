<?php

use App\Participants;
use App\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        App\User::factory(10)->create();
        Participants::create([
            "particiantID" => "3",
            "Name" => "Alex",
            "DOB" => "07-04-2002",
            "Performance" => 3
        ]);

        Products::create([
            "productID" => "1",
            "ProductName" => "Mercedes Benz",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestias deleniti rem assumenda laborum atque officiis reprehenderit maiores nostrum dolores, sequi consequatur, aliquam illum tenetur, molestiae quia iure numquam minus.",
            "status" => true,
            "price" => 2000,
            "quantity" => 20,
            "particiantID" => "3",
        ]);
    }
}
