<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ad;

class AdsController extends Controller
{
    public function index()
    {
        $ads = Ad::latest()->get();
        return view('ads.index', compact('ads'));
    }

    public function show($ad)
    {
        $ad = Ad::find($ad);

        return view('ads.show', compact('ad'));
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'title' => 'required|max:255',
            'body' => 'required',
            'price' => 'required|max:255',
            'phone_number' => 'required|max:20',
            'email' => 'required|max:255',
            'city' => 'required|max:255',
            'area' => 'required|max:255',
        ]);

        $ad = Ad::create([
            'type' => $request['type'],
            'title' => $request['title'],
            'body' => $request['body'],
            'price' => $request['price'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
            'city' => $request['city'],
            'area' => $request['area'],
            'user_id' => auth()->id()
        ]);

        // $ad->
        // $ad->save();

        return redirect('ads.show', [$ad->id]);
    }
}
