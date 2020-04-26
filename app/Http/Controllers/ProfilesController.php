<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user) {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(15)
        ]);
    }

    public function edit(User $user) {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {
        $attribute = request()->validate([
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'],
            'name' => ['required', 'string', 'max:255'],
            'avatar' => ['file'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        
        if(request('avatar')) {
            $attribute['avatar'] = request('avatar')->store('avatars');
        }
        
        $user->update($attribute);

        return redirect($user->path());
    }
}
