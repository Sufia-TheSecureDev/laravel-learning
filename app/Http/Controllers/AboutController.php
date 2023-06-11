<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function index()
    {
        return view('content.about',[
            'data' => About::all()
        ]);
    }

    public function store(StoreAboutRequest $request):RedirectResponse
    {
        if ($request->validated()) {
            About::query()->create($request->only('name', 'email'));
            session()->flash('message', 'Data successfully inserted!');
            return Redirect::route('cast.index');
        }
        return Redirect::back();

    }
}

