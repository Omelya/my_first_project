<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Search;
use Excel;
use App\Imports\SearchImport;

class SearchesController extends Controller
{

  public function index() {
    return view('search');
  }

    public function res(Request $request) {
      $search = $request->all();
      return view('result', compact('search'));
    }

    public function importForm()
    {
      return view('import');
    }

    public function import(Request $request)
    {
      Excel::import(new SearchImport, $request->file);
      return "Файл успішно імпортовано";
    }

    public function search()
    {
      return view('search_form');
    }

    public function result(Search $search, Request $request)
    {
      $name = $request->only(['name']);
      if(!empty($name['name'])){
        foreach ($name as $names => $name) {
          $name;
        }
      } else $name = 0;
      $priceFrom = $request->only(['priceFrom']);
      $priceTo = $request->only(['priceTo']);
      $bedrooms = $request->only(['bedrooms']);
      $bathrooms = $request->only(['bathrooms']);
      $storeys = $request->only(['storeys']);
      $garages = $request->only(['garages']);
      return $ser = DB::table('property_data')
      ->where('name', 'LIKE', '%'.$name.'%')
      ->orwhereBetween('price', [$priceFrom, $priceTo])
      ->orwhere('bedrooms', [$bedrooms])
      ->orwhere('bathrooms', [$bathrooms])
      ->orwhere('storeys', [$storeys])
      ->orwhere('garages', [$garages])
      ->get();
    }
}
