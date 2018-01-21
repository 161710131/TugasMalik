<?php

use Illuminate\Database\Seeder;

class tugasthuer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $malik  = [
        
        ['nama'=>'malik','tanggallahir'=>'1022001']

        ];
        DB::table('tugasmalik')->insert($malik);
    }
}
