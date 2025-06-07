<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeContactRequest;
use App\Mail\ContactFormConfirmationMail;
use App\Mail\ContactFormMail;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('app.contact.index');
    }


    public function contact(MakeContactRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        try {
            Mail::to('denizdenizer14@gmail.com')->send(new ContactFormMail($validatedData));
        } catch (\Exception $e) {

            Log::error('Error sending contact form email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again later.');
        }

        try{
            Mail::to($validatedData['email'])->send(new ContactFormConfirmationMail($validatedData));
        } catch (\Exception $e) {
            Log::error('Error sending confirmation email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Your message was sent, but we could not send a confirmation email. Please check your email address.');
        }

        Log::info('Contact form email sent successfully', [
            'data' => $validatedData,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
