<?php

namespace App\Http\Controllers\Gift;

use App\Http\Controllers\Controller;
use App\Mail\GiftInvitation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GiftEmailController extends Controller
{

    public function index(): View|Factory|Application
    {
        return view('app.gift.form');
    }

    public function preview(Request $request): GiftInvitation
    {

        $data = $request->validate([
            'giftTitle' => 'required',
            'recipients' => 'required',
        ]);

        $data['isFamiliar'] = $request->has('isFamiliar');


        return new GiftInvitation($data);
    }

    public function send(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'giftTitle' => 'required',
            'recipients' => 'required',
            'recipients.*' => 'email',
        ]);

        $data['isFamiliar'] = $request->has('isFamiliar');

        $emails = explode(',',$data['recipients']);

        foreach ($emails as $email) {
            Mail::to($email)->send(new GiftInvitation($data));
        }

        return redirect()->route('gift.index')->with('success', 'Gift invitation sent successfully!');
    }

}
