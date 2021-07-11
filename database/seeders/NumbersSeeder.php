<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Custom\Random;
use Illuminate\Support\Facades\DB;

class NumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populate GENERATE table with 20 records
        for($i=0;$i<20;$i++)
        {
            DB::table('generated')->insert(
                [
                    'generated_hash'        => $this->generateHashNumber(),
                    'generated_number'      => mt_rand()
                ]
            );
            
        }
 
    }

    private function generateHashNumber()
    {
        $rand = new Random();
        return $rand->generateHashNumber();
    }
}
