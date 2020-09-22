<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntriesController extends Controller
{
    public function index()
    {
        $entries = DB::select("SELECT * FROM entries");
        var_dump($entries);
    }
}
