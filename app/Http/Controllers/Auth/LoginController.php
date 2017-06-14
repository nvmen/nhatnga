<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\HistoryLogin;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }*/
    public function getLoginView()
    {

        return view('auth.login');
    }

    public function doLogin(Request $request)
    {

        $data = $request->all();
        $remember = $request->get('remember');
        $remember = false;
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            // If validation falis redirect back to login.
            return Redirect::to('/auth/login')->with('error', 'User name or password is not correct!');
        } else {
            $userdata = array(
                'email' => $request->get('email'),
                'password' => $request->get('password')
            );
            // doing login.
            // check user is active or not
            $user_check = User::where('email', $request->get('email'))->first();
            if ($user_check ==null || $user_check->status == 0) {
                Session::flash('error', 'Something went wrong');
                return Redirect::to('/auth/login')->with('error', 'Your account is blocked. Please contact Monita support for details.');
            }
            if (Auth::validate($userdata)) {
                // check user exist
                if (Auth::attempt($userdata, $remember)) {
                    $this->authUser = Auth::user();
                    $user_log = $this->authUser;
                    $history_login = new HistoryLogin();
                    $history_login->name = $user_log->first_name . ' ' . $user_log->last_name;
                    $history_login->user_id = $user_log->id;
                    $history_login->email = $user_log->email;
                    $history_login->save();
                    $redirect_to = route('monita.monitor');

                    return Redirect::intended($redirect_to);
                }
            } else {
                // if any error send back with message.
                Session::flash('error', 'Something went wrong');
                return Redirect::to('/auth/login')->with('error', 'User name or password is incorrect.');
            }
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}
