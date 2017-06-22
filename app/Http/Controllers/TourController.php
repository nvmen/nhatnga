<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/27/2017
 * Time: 9:12 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tour;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Mail;
use App;
class TourController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //return view('frontend.pages.tour.index');
        return view('frontend.pages.tour.index');
    }

    public function international(Request $request)
    {
        return view('frontend.pages.tour.index');
    }

    public function domestic(Request $request)
    {
        return view('frontend.pages.tour.index');
    }

    public function foodtour(Request $request)
    {
        return view('frontend.pages.tour.detail');
    }

    public function detail($slug)
    {
        $tour =Tour::where('slug_url',$slug)->first();
        //dd($tour->translation()->first()->name);
       // dd($tour);



        if($tour==null)
            return redirect()->route('frontend.error.index');
        // get  Related Tours

        //$related_tours =[];
        if($tour->is_outbound){
            //User::inRandomOrder()->get();
            $related_tours = Tour::where('is_outbound',1)->inRandomOrder()->take(3)->get();
        }else{
                $related_tours = Tour::where('tour_type',$tour->tour_type)->inRandomOrder()->take(3)->get();
        }       

        return view('frontend.pages.tour.details',['tour'=>$tour,'related_tours'=>$related_tours]);
    }
    public function longtour(Request $request)
    {
        return view('frontend.pages.tour.longtour');
    }
    public function shorttour(Request $request)
    {
        return view('frontend.pages.tour.shorttour');
    }
    public function enquiry(Request $request)
    {
        $rules = array(
            'email' => 'required',
            'name' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Email and name not empty']);
        }

        $message ='Cám ơn bạn đã gửi tin nhắn cho chúng tôi. Chúng tôi sẽ liên hệ bạn sau.';
        $message_err ='Đã xãy ra lỗi rồi, vui lòng thử lại';
        if (App::getLocale() == 'en')
        {
            $message ='Thank you very much for sending us this message and we will answer it as soon as possible.';
            $message_err ='An error was happened. Please try again.';
        }
        try{
            $email = $request->get('email');
          //  $email_to ='nga.ngo@nhatnga.vn';
            $email_to ='men.nguyen.sg@gmail.com';
            $name = $request->get('name');
            $phone = $request->get('phone');
            $subject = 'Enquiry Request';
            $message_text = $request->get('message');

            // dd($email);
            $data = array('name' => $name,'subject'=>$subject,'email_text'=>$email,'message_text'=>$message_text,'phone'=>$phone);
            Mail::send(['html' => 'email.enquiry'], $data, function ($message) use($email_to) {
                $message->to($email_to,'NhatNga Support')->subject('Enquiry Request');

                $message->from('nvmen@tma.com.vn', 'NhatNga support');
            });

        }catch (\Exception $e){
            dd($e);
            return response()->json(['success' => false, 'message' => $message_err]);
        }
        return response()->json(['success' => true, 'message' => $message]);

    }


}