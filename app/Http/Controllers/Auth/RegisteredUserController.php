<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        $districts = District::pluck('name', 'id')->toArray();
        // dd($cards);

        return view('auth.register',compact('districts'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request);
        try {

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            DB::beginTransaction();
            $user = User::create([
                'role_id' => 3,
                'name' => $request->name,
                'email' => $request->email,
                'disrtict_id' => $request->disrtict_id,
                'password' => Hash::make($request->password),
            ]);


            $user->profile()->create([
                'present_address' => $request->present_address
            ]);


            // Profile::create([
            //     'user_id' => $user->id,
            //     'present_address' => $request->present_address
            // ]);
            DB::commit();
            event(new Registered($user));

            Auth::login($user);

            return redirect()->intended('/');
        } catch (QueryException $e) {
            DB::rollback();
        }
    }
}