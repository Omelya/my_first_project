<?php

namespace App\Imports;

use App\Models\Search;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SearchImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Search([
            'name' => $row['name'],
            'price' => $row['price'],
            'bedrooms' => $row['bedrooms'],
            'bathrooms' => $row['bathrooms'],
            'storeys' => $row['storeys'],
            'garages' => $row['garages']
        ]);
    }
}
