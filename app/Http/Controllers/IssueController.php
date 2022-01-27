<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\Story;

class IssueController extends Controller
{
    public function index() {
        $issues = Issue::all();
        return view('issues.index', compact('issues'));
    }

    public function show(Issue $issue) {
        return view('issues.show', compact('issue'));
    }
}
