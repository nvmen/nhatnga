<?php

namespace App\Http\Controllers\Auth;

use App\Helper;
use App\Http\Controllers\Controller;
use App\PasswordReset;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Passwords;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Mail;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function rest_password(Request $request)
    {


        $data =  $request->all();
        $rules = array(
            'email' => 'required|email',
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()){
            return response()->json(['success' => false, 'message' => 'Email is required.']);
        }
        $email = $request['email'];
        $user = User::where('email', $email)->where('status', 1)->first();
        if ($user) {
            $t1 = Hash::make($email);
            $token = str_replace("-", "", com_get_guid() . $t1);
            $token = Helper::clean($token);

            $link = route('user.get.reset.password.screen', ['token' => $token]);
            DB::table('password_resets')->insert(['email' => $email,
                'token' => $token,
                'created_at' => Carbon::now()]);

            $full_name = $user->first_name . ' ' . $user->last_name;

            $data = array('full_name' => $full_name, 'link' => $link);

            Mail::send(['html' => 'email.reset'], $data, function ($message) use($full_name,$email) {
                $message->to($email, $full_name)->subject
                ('Monita | Reset password');
                $message->from('nvmen@tma.com.vn', 'Monita support');
            });
            return response()->json(['success' => true, 'message' => 'An email reset password is sent to your email. Please check in.']);
        }else{
            return response()->json(['success' => false, 'message' => 'Please input correct email or contact Monita support.']);
        }


    }

    public function get_rest_pwd_screen(Request $request)
    {

        $expired_duration = intval(config('constant.TIME_OUT_TOKEN_RESET')) * 60;
        $current_date = date("Y-m-d h:m:s");
        $token = $request['token'];
        $reset_obj = DB::table('password_resets')->where('token', $token)->first();

        if ($reset_obj == null) {
            return view('pages.authorize.reset_error');
        }
        $temp = $reset_obj->created_at;
        $date_create = date($temp);
        $x1 = strtotime($date_create);
        $x2 = strtotime($current_date);
        $duration_minute = ($x2 - $x1) / 60;
        if ($duration_minute > $expired_duration) {
            return view('pages.authorize.reset_error');
        }
        return view('pages.authorize.reset', ['token' => $token]);
    }

    public function do_reset_password(Request $request)
    {
        $token = $request['reset_token'];

        $password = $request['new_password'];
        $confirm_password = $request['confirm_password'];

        $rules = array(
            'new_password' => 'required|min:7',
            'confirm_password' => 'required|min:7',
            'reset_token' => 'required',
        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails() ||$password!=$confirm_password) {
            return response()->json(['success' => false, 'message' => 'New password and confirm password are required.']);
        }
        $expired_duration = intval(config('constant.TIME_OUT_TOKEN_RESET')) * 60;
        $current_date = date("Y-m-d h:m:s");


        $reset_obj = DB::table('password_resets')->where('token', $token)->first();

        if ($reset_obj == null) {
            return response()->json(['success' => false, 'message' => 'Invalid token.']);
        }
        $temp = $reset_obj->created_at;
        $date_create = date($temp);
        $x1 = strtotime($date_create);
        $x2 = strtotime($current_date);
        $duration_minute = ($x2 - $x1) / 60;

        if ($duration_minute > $expired_duration) {
            return response()->json(['success' => false, 'message' => 'Invalid link. This link only available on 24h.']);
        }
        $new_password = Hash::make($password);
        $user = User::where('email',$reset_obj->email)->first();
        $user->update(['password' => $new_password]);
        DB::table('password_resets')->where('token', $token)->delete();
        return response()->json(['success' => true, 'message' => 'Change password successful.']);

    }
}
