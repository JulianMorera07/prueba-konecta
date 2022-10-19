<?php

namespace App\Http\Controllers;

use App\Models\Cafeteria;
use App\Http\Requests\StoreCafeteriaRequest;
use App\Http\Requests\UpdateCafeteriaRequest;

class CafeteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('index');
    }
}
