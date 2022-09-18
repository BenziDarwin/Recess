<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class insertData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enters data into the database.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        info("Data is being inserted.");
        DB::unprepared(file_get_contents('./file.sql'));
        info("Data has been inserted.");
    }
}