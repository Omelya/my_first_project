<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\Models\Search;
// use Excel;
// use App\Imports\SearchImport;

// class SearchesController extends Controller
// {

//   public function index() {
//     return view('search');
//   }

//     public function res(Request $request) {
//       $search = $request->all();
//       return view('result', compact('search'));
//     }

//     public function importForm()
//     {
//       return view('import');
//     }

//     public function import(Request $request)
//     {
//       Excel::import(new SearchImport, $request->file);
//       return "Файл успішно імпортовано";
//     }

//     public function search()
//     {
//       return view('search_form');
//     }

//     public function result(Search $search, Request $request)
//     {
//       $name = $request->only(['name']);
//         if(!empty($name['name'])){
//           foreach ($name as $names => $name) {
//             $name;
//           }
//       } else $name = 0;

//       $priceFrom = $request->only(['priceFrom']);
//       if(!empty($priceFrom['priceFrom'])){
//         foreach ($priceFrom as $priceFroms => $priceFrom) {
//           $priceFrom;
//         }
//       } else $priceFrom = false;

//       $priceTo = $request->only(['priceTo']);
//       if(!empty($priceTo['priceTo'])){
//         foreach ($priceTo as $pricesTo => $priceTo) {
//           $priceTo;
//         }
//       } else $priceTo = false;

//       $bedrooms = $request->only(['bedrooms']);
//         if(!empty($bedrooms['bedrooms'])){
//           foreach ($bedrooms as $bedroom => $bedrooms) {
//             $bedrooms;
//           }
//         } else $bedrooms = false;

//       $bathrooms = $request->only(['bathrooms']);
//         if(!empty($bathrooms['bathrooms'])){
//           foreach ($bathrooms as $bathroom => $bathrooms) {
//             $bathrooms;
//           }
//         } else $bathrooms = false;

//       $storeys = $request->only(['storeys']);
//         if(!empty($storeys['storeys'])){
//           foreach ($storeys as $storey => $storeys) {
//             $storeys;
//           }
//         } else $storeys = false;

//       $garages = $request->only(['garages']);
//         if(!empty($garages['garages'])){
//           foreach ($garages as $garage => $garages) {
//             $garages;
//           }
//         } else $garages = false;


//       $ser = DB::table('property_data')

//         ->when($name, function($query, $name) {
//           return $query->where('name', 'LIKE', '%'.$name.'%');
//         })

//         ->when($priceFrom, function ($query, $priceFrom) {
//           return $query->where('price', '>=', $priceFrom);
//         })

//         ->when($priceTo, function ($query, $priceTo) {
//           return $query->where('price', '<=', $priceTo);
//         })

//         ->when($bedrooms, function ($query, $bedrooms) {
//           return $query->where('bedrooms', $bedrooms);
//         })

//         ->when($bathrooms, function ($query, $bathrooms) {
//          return $query->where('bathrooms', $bathrooms);
//         })

//         ->when($storeys, function ($query, $storeys) {
//           return $query->where('storeys', $storeys);
//         })

//         ->when($garages, function ($query, $garages) {
//           return $query->where('garages', $garages);
//         })

//         ->get();

//         return view('search', compact('ser'));
//     }
// }
// 