<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/27/2017
 * Time: 9:12 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;
use Mail;
use App\News;
use App\Tour;

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
        $news_list = News::take(2)->get();
        $tour_discount = Tour::where('discount_percent','!=' , 0)->take(6)->get();
        $tour_popular = Tour::where('is_popular','=' , 1)->take(6)->get();

        return view('frontend.pages.home.index',['latest_news'=>$news_list,
            'tour_discount'=>$tour_discount,
            'tour_popular'=>$tour_popular
            ]);
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
            $email_to ='nga.ngo@nhatnga.vn';
            $name = $request->get('name');
            $subject = $request->get('subject');
            $message_text = $request->get('message');


            $data = array('email' => $email_to, 'name' => $name,'subject'=>$subject,'email'=>$email,'message_text'=>$message_text);
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
    public  function newsletter(Request $request)
    {
        $rules = array(
            'email' => 'required|email',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Banner need a image']);
        } else {
            $newsletter = new App\Newsletter();
            $newsletter->email = $request['email'];
            $newsletter->save();
            return response()->json(['success' => true, 'message' => 'Ok']);
        }
    }

}