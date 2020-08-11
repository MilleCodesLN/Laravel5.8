<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        //dd($user->posts);
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            "title" => "required",
            "description" => "required",
            "url" => "required|url"

        ]);
        auth()->user()->profile->update($data);

        return redirect()->route('profiles.show', ['user' => $user]);
    }
}
