<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Login gagal.']);
        }

        // Cek role dan set koneksi dinamis
        if ($user->name === 'admin1') {
            Config::set('database.connections.dynamic_mysql.username', 'admin1');
            Config::set('database.connections.dynamic_mysql.password', 'adminpass');
        }

        if ($user->name==='management1') {
            Config::set('database.connections.dynamic_mysql.username', 'manager1');
            Config::set('database.connections.dynamic_mysql.password', 'managerpass');
        }

        DB::purge('dynamic_mysql');
        DB::reconnect('dynamic_mysql');

        Auth::login($user);
        return redirect('/home');
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
