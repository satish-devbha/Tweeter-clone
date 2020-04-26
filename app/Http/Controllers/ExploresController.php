<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ExploresController extends Controller
{
    public function __invoke() {
        return view('explore', [
            'users' => User::paginate(50)
        ]);
    }
}
