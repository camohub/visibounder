<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{

    public int $per_page = 20;


    public function index()
    {
        return view('default.index', [
            'test' => 'Toto je test variable',
        ]);
    }


    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = new User();
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->save();

        // TODO: Send email verification

        auth()->login($user);

        return redirect()->back()->with('success', 'You have been registered. Verify your email address please.');
    }


    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])
            ->whereNotNull('email_verified_at')
            ->first();

        if ( !$user ) {
            return redirect()->back()->with('error', 'User not found');
        }

        if ( !password_verify($data['password'], $user->password) ) {
            return redirect()->back()->with('error', 'Invalid credentials');
        }

        auth()->login($user);

        return redirect()->back()->with('success', "Welcome back $user->name!");
    }
}
