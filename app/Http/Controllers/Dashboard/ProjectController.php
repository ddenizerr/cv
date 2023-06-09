<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use function redirect;
use function response;
use function view;

class ProjectController extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard.projects.index');
    }

    /**
     * @return JsonResponse
     */
    public function fetch(): JsonResponse
    {
        $projects = Project::all();
        return response()->json(['projects'=>$projects]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function create(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard.projects.create');
    }

    /**
     * @param StoreProjectRequest $request
     * @param Project $project
     * @return JsonResponse
     */
    public function update(StoreProjectRequest $request, Project $project): JsonResponse
    {
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ]);

        return response()->json(['message'=>'Project details updated']);
    }

    /**
     * @param StoreProjectRequest $request
     */
    public function store(StoreProjectRequest $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        Project::create($request->all());
        return redirect('/projects');
    }

    /**
     * @param Project $project
     * @return JsonResponse
     */
    public function delete(Project $project): JsonResponse
    {
        $project->delete();
        return response()->json(['message'=>'Project is deleted!']);
    }
}
