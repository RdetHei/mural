<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index()
    {
        return view('novels.index');
    }

    public function show($id)
    {
        return view('novels.show', compact('id'));
    }

    public function create()
    {
        return view('novels.create');
    }
}
