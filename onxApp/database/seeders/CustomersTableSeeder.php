<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;


class CustomersTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('customers')->insert([

            'name' => 'Jan',
            'surname' => 'Nowak',
            'email' => 'jan@nowak.pl',
            'phone' => '400300400',
            'address' => 'Rynek 4',
            ]);
    }
}
