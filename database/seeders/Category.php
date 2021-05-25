<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'name'=> 'Scholarship' //this for add data in db as test
            ],
            [
                'name'=> 'Fellowship'
            ],
            [
                'name'=> 'Internship'
            ]
        ]);
    }

}
