<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {

        #remember method
        /* $credencial = $request->getCredentials();
        if(!Auth::validate($credencial)){
            return redirect()->route('login')->withErrors(trans('auth.failed'));
        };

        $remember = Auth::getProvider()->retrieveByCredentials($credencial);
        Auth::login($remember, $request->get('remember'));
        $this->authenticated($request,$remember); */

        $request->authenticate();
        $user = Auth::user();
        if ($user->hasRole('admin')){
            return redirect()->route('dashboard');
        } else{
            return redirect()->route('home');
        }
        // $request->authenticate()->authenticated($request->user);
        /* $request->session()->regenerate(); */
        // return redirect()->intended(RouteServiceProvider::HOME);
       
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
