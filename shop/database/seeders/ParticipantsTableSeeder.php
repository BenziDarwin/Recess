<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('participants')->delete();
        
        \DB::table('participants')->insert(array (
            0 => 
            array (
                'participantID' => 1,
                'Name' => 'Ssali',
                'DOB' => '2002-07-04',
                'password' => 'password',
                'product' => 'Bags',
                'performance' => 0,
            ),
            1 => 
            array (
                'participantID' => 2,
                'Name' => 'Benjamin',
                'DOB' => '2002-07-04',
                'password' => 'password',
                'product' => 'Cars',
                'performance' => 0,
            ),
            2 => 
            array (
                'participantID' => 3,
                'Name' => 'Peter',
                'DOB' => '2004-12-30',
                'password' => 'password',
                'product' => 'Animals',
                'performance' => 0,
            ),
        ));
        
        
    }
}