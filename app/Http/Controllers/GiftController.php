<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GiftInvitation;
use Illuminate\Support\Facades\Mail;

class GiftController extends Controller
{
    public function sendGiftForm()
    {
        return view('dashboard.gifts.gift_form');
    }

    public function sendGiftEmail(Request $request)
    {
        $validated = $request->validate([
            'names' => 'required|array|min:1',
            'names.*' => 'required|string|max:255',
            'email' => 'required|email',
            'familiar' => 'nullable|boolean',
            'honeymoon' => 'nullable|boolean',
        ]);

        $data = [
            'name' => implode(' & ', $validated['names']),
            'email' => $validated['email'],
            'familiar' => $request->has('familiar'),
            'honeymoon' => $request->has('honeymoon'),
        ];

        Mail::to($data['email'])->send(new GiftInvitation($data));

        $nameCount = count($validated['names']);
        return redirect()->back()->with('success', 'Gift email sent successfully to ' . $data['name'] . ' (' . $nameCount . ' person' . ($nameCount > 1 ? 's' : '') . ')!');
    }
}
