<?php

namespace App\Http\Controllers;

use App\Mail\GiftInvitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GiftController extends Controller
{
    public function sendGiftForm()
    {
        return view('dashboard.gifts.gift_form');
    }

    public function sendGiftEmail(Request $request)
    {
        $validatedFormData = $request->validate([
            'names' => 'required|array|min:1',
            'names.*' => 'required|string|max:255',
            'email' => 'required|email',
            'familiar' => 'nullable|boolean',
            'honeymoon' => 'nullable|boolean',
        ]);

        return redirect()->route('gift.preview', $validatedFormData);
    }

    public function preview(Request $request): GiftInvitation
    {
        $data = [
            'name' => implode( ' & ', $request->input('names', [])),

        ];

        $data = ['name' => 'Dario & Angela', 'familiar' => false, 'honeymoon' => false];
        return new GiftInvitation($data);
    }
}
