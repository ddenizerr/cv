<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use http\Env\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $projects = Project::all();

        return view('projects.index')->with([
            'projects' => $projects,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function create(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('projects.create');
    }

    /**
     * @param StoreProjectRequest $request
     * @return JsonResponse
     */
    public function update(StoreProjectRequest $request, Project $project): JsonResponse
    {
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ]);

//        Project::updateOrCreate($request->only('title', 'description','type'));

        return response()->json(['message'=>'Project details updated']);
    }

    /**
     * @return void
     */
    public function remove()
    {
        //
    }
}
