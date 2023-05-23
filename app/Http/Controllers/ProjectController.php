<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
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
     * @return RedirectResponse
     */
    public function update(StoreProjectRequest $request): RedirectResponse
    {
        dd($request->all());
        Project::updateOrCreate($request->only('title', 'description','type'));
        return redirect()->route('projects.index');
    }

    /**
     * @return void
     */
    public function remove()
    {
        //
    }
}
