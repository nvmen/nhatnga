<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/27/2017
 * Time: 9:12 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;
use Mail;
class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (App::getLocale() == 'en')
        {
         //   echo "It's English!";
        }
        return view('frontend.pages.home.index');
    }
    public function contact(Request $request)
    {
               return view('frontend.pages.home.contact');
    }

    public function submit_contact(Request $request)
    {
        $message ='Cám ơn bạn đã gửi tin nhắn cho chúng tôi. Chúng tôi sẽ liên hệ bạn sau.';
        $message_err ='Đã xãy ra lỗi rồi, vui lòng thử lại';
        if (App::getLocale() == 'en')
        {
            $message ='Thank you very much for sending us this message and we will answer it as soon as possible.';
            $message_err ='An error was happened. Please try again.';
        }
        try{
            $email = $request->get('email');
            $email_to ='men.nguyen.sg@gmail.com';
            $name = $request->get('name');
            $subject = $request->get('subject');
            $message_text = $request->get('message');
            /*
             *  $data = array('full_name' => $full_name, 'link' => $link);

            Mail::send(['html' => 'email.reset'], $data, function ($message) use($full_name,$email) {
                $message->to($email, $full_name)->subject
                ('Monita | Reset password');
                $message->from('nvmen@tma.com.vn', 'Monita support');
            });
             **/

            $data = array('email' => $email_to, 'name' => $name,'subject'=>$subject,'message_text'=>$message_text);
            Mail::send(['html' => 'email.contact'], $data, function ($message) use($email_to) {
                $message->to($email_to,'NhatNga Support')->subject('User Contact');
               
                $message->from('nvmen@tma.com.vn', 'NhatNga support');
            });

        }catch (\Exception $e){
            return response()->json(['success' => false, 'message' => $message_err]);
        }
        return response()->json(['success' => true, 'message' => $message]);
      
    }
    public function about(Request $request)
    {
        if (App::getLocale() == 'en')
        {
            //   echo "It's English!";
        }
        return view('frontend.pages.home.about');
    }
}