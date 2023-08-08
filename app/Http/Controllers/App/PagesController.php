<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class PagesController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('app.contact.index');
    }

    public function indexAboutMe(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('app.about.index');
    }
}
