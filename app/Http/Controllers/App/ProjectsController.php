<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(): Factory|Application|View
    {
        return view('app.career.index');
    }
}
