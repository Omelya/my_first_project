<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Search extends Model
{
    use HasFactory;

    protected $table = "property_data";

    protected $fillable = [
        'name',
        'price',
        'bedrooms',
        'bathrooms',
        'storeys',
        'garages',
        'updated_at',
        'created_at'
      ];

    public static function getSearch()
    {
      $records = DB::table('property_data')->select('name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages');
      return $records;
    }

}
