<?php

namespace App\Models;

use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{

    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'surname', 'email', 'phone', 'address'];

    public static function factory()
    {

        $faker = \Faker\Factory::create();

        return CustomerFactory::new();

    }

}
