<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      return view('search');
    }

    public function import(Request $request)
    {
      Excel::import(new SearchImport, $request->file);
      return "Файл успішно імпортовано";
    }
}
