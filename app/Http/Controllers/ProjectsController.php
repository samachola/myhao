<?php

namespace App\Http\Controllers;

use Auth;
use App\Projects;
use App\Hao;
use App\User;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function get() {
        $projects = Projects::all();

        return view('projects', [
            'projects' => $projects,
        ]);
    }

    public function create() {
        return view('new_project');
    }

    public function showHaos() {
        $user = Auth::user();
        $haos = $user->hao()->get();

        $projects = [];
        foreach($haos as $hao) {
            $myHao = Projects::find($hao->projects_id);
            array_push($projects, $myHao);
        };

        return view('hao', ['projects' => $projects]);
    }

    public function myhao($projectId) {
        $user = Auth::user();
        $hao = new Hao;

        $hao->user_id = $user->id;
        $hao->projects_id = $projectId;
        $hao->save();

        return redirect('/projects/myhao');
    }

    public function store(Request $request) {
        $user = Auth::user();
        $project = new Projects;

        $project->title = request('title');
        $project->location = request('location');
        $project->price = request('price');
        $project->beds = request('beds');
        $project->rooms = request('rooms');
        $project->user_id = $user->id;

        $project->save();

        return redirect('/projects');
    }
}
