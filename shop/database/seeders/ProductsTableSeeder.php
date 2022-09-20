<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'productID' => 1,
                'ProductName' => 'Bags',
                'description' => ' We sell the best bags in the area!',
                'participantID' => 1,
            ),
            1 => 
            array (
                'productID' => 2,
                'ProductName' => 'Cars',
                'description' => ' All cars in our bond are from different countries.',
                'participantID' => 2,
            ),
            2 => 
            array (
                'productID' => 3,
                'ProductName' => 'Animals',
                'description' => ' We sell all kinds of animals straight from the farm.',
                'participantID' => 3,
            ),
        ));
        
        
    }
}