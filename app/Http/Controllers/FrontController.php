<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Subscriber;
use App\Models\Contact;
use App\Models\Category;
use App\Models\User;
use App\Models\Donation;
use App\Models\Bank;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function index()
    {
        $campaign = Campaign::orderBy('publish_date', 'desc')->limit(6)->get();
        return view('front.welcome', compact('campaign'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function contact_store(Request $request)
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

    public function donation(Request $request)
    {
        $category = Category::orderBy('name')
            ->get()
            ->pluck('name', 'id');

        $campaign = Campaign::when(
            $request->has('categories') && count($request->categories) > 0,
            function($query) use($request) {
                $query->whereHas('category_campaign', function ($query) use ($request) {
                    $query->whereIn('category_id', $request->categories);
                });
            })
            ->orderBy('publish_date', 'desc')
            ->paginate(6)
            ->withQueryString();

        return view('front.donation.index', compact('category', 'campaign'));
    }

    public function donation_detail($id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('front.donation.show', compact('campaign'));
    }

    public function donation_create($id)
    {
        $campaign = Campaign::findOrFail($id);
        $user = User::whereHas('role', function($query) {
            $query->where('name', 'donatur');
        })
        ->get();

        return view('front.donation.create', compact('campaign', 'user'));
    }

    public function donation_store(Request $request, $id)
    {
        $validated = Validator::make($request->all(),[
            'nominal' => 'integer|min:500',
            'user_id' => 'required|exists:users,id',
            'anonim' => 'nullable|in:1,0',
            'support' => 'nullable'
        ]);

        if ($validated->fails()) {
            return back()->withInput()
            ->withErrors($validated->errors());
        }
        $campaign = Campaign::findOrFail($id);
        $donation = Donation::create([
            'campaign_id' => $campaign->id,
            'nominal' => $request->nominal,
            'user_id' => $request->user_id,
            'anonim' => $request->anonim,
            'support' => $request->support,
            'order_number' => 'PX'.mt_rand(000000, 999999),
            'status' => 'not confirmed',
        ]);

        return redirect('/donation/'. $campaign->id .'/payment'. $donation->order_number)
        ->with([
            'message' => 'Donasi baru berhasil ditambahkan',
            'success' => true,
        ]);
    }

    public function donation_payment($id, $order_number)
    {
        $campaign = Campaign::findOrFail($id);
        $donation = Donation::where('order_number', $order_number)->first();
        $bank = Bank::all();

        if (! $donation){
            abort(404);
        }

        return view('front.donation.payment', compact('donation', 'campaign', 'bank'));
    }

    public function donation_payment_confirmation($id, $order_number)
    {
        $campaign = Campaign::findOrFail($id);
        $donation = Donation::where('order_number', $order_number)->first();
        $payment = Payment::where('order_number', $order_number)->first() ?? new Payment();
        $bank = Bank::all()->pluck('name', 'id');

        if (! $donation){
            abort(404);
        }

        return view('front.donation.payment-confirmation', compact('campaign','donation', 'payment', 'bank'));
    }

    public function donation_payment_confirmation_store(Request $request, $id, $order_number)
    {
        $payment = Payment::where('order_number', $order_number)->first() ?? new Payment();
        $validated = Validator::make($request->all(),[
            'name' => 'required',
            'nominal' => 'required|integer|min:500',
            'bank_id' => 'required|exists:bank,id',
            'path_image' => $payment ? 'nullable|mimes:png,jpg,jpeg|max:2048' : 'required|mimes:png,jpg,jpeg|max:2048',
            'note' => 'nullable'
        ]);

        if ($validated->fails()) {
            return back()->withInput()
            ->withErrors($validated->errors());
        }

        $campaign = Campaign::findOrFail($id);
        $donation = Donation::where('order_number', $order_number)->first();

        if (! $donation){
            abort(404);
        }

        if ($donation->status == 'confirmed') {
            return back()
            ->with([
                'message' => 'Pembayaran berhasil dikonfirmasi',
                'error_msg' => true,
            ]);
        }

        $data = $request->except('path_image');
        $data['user_id'] = $campaign->id;
        $data['order_number'] = $donation->order_number;

        if ($request->has('path_image')) {
            if (Storage::disk('public')->exists($payment->path_image)) {
                Storage::disk('public')->deleter($payment->path_image);
            }
            $data['path_image'] = upload('payment', $request->file('path_image'), 'payment');
        }

        Payment::updateOrCreate(
            ['order_number' => $donation->order_number],
            $data
        );

        return back()
            ->with([
                'message' => 'Konfirmasi Pembayaran Berhasil Disimpan',
                'success' => true,
            ]);
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
                'error_msg' => true,
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