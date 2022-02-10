<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index() {
        $titles = Title::all();
        return view('titles.index', compact('titles'));
    }

    public function show(Title $title) {
        return view('titles.show', compact('title'));
    }

}
