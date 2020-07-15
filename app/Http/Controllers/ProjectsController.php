<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    function get($id) {
        $project = DB::table('projects')->where('id', $id)->first();

        if (! $project) abort(404);

        return view('welcome', [
            'project' => $project
        ]);
    }
}
