<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Subscriber;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        $campaign = Campaign::orderBy('title', 'desc')->limit(6)->get();
        return view('front.welcome', compact('campaign'));
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function contactStore(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|unique:contact,email',
            'subject' => 'required|min:4',
            'message' => 'required|min:4 '
        ]);

        if ($validated->fails()) {
            return back()->withInput()
            ->withErrors($validated->errors());
        }

       $contact = Contact::create($request->all());

       return back()->withInput()
            ->with([
                'message' => 'Contact berhasil ditambahkan',
                'success' => true,
            ]);
    }
    public function about()
    {
        return view('front.about');
    }
    public function donation()
    {
        return view('front.donation.index');
    }
    public function donation_detail($id)
    {
        return view('front.donation.show');
    }
    public function donation_create($id)
    {
        return view('front.donation.create');
    }
    public function donation_payment($id)
    {
        return view('front.donation.payment');
    }
    public function donation_payment_confirmation($id)
    {
        return view('front.donation.payment-confirmation');
    }
    public function subscriberStore(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'email' => 'required|unique:subscribers,email'
        ]);

        if ($validated->fails()) {
            return back()->withInput()
            ->with([
                'message' => $validated->errors()->first(),
                'errors' => true,
            ]);
       }
       $subscriber = Subscriber::create($request->only('email'));

       return back()->withInput()
            ->with([
                'message' => 'Subscriber baru berhasil ditambahkan',
                'success' => true,
            ]);

    }
}