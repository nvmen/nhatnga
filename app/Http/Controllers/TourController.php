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
use App\Helper;
use App\Booking;

class TourController extends Controller
{
    public $email_nhatnga = 'nga.ngo@nhatnga.vn';

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //return view('frontend.pages.tour.index');
        //  dd('fdsfds');
        //  dd(App\Helper::get_guid());
       
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
        $tour = Tour::where('slug_url', $slug)->first();
        //dd($tour->translation()->first()->name);
        // dd($tour);

        if ($tour == null)
            return redirect()->route('frontend.error.index');
        // get  Related Tours

        //$related_tours =[];
        if ($tour->is_outbound) {
            //User::inRandomOrder()->get();
            $related_tours = Tour::where('is_outbound', 1)->inRandomOrder()->take(3)->get();
        } else {
            $related_tours = Tour::where('tour_type', $tour->tour_type)->inRandomOrder()->take(3)->get();
        }

        return view('frontend.pages.tour.details', ['tour' => $tour, 'related_tours' => $related_tours]);
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

        $message = 'Cám ơn bạn đã gửi tin nhắn cho chúng tôi. Chúng tôi sẽ liên hệ bạn sau.';
        $message_err = 'Đã xãy ra lỗi rồi, vui lòng thử lại';
        if (App::getLocale() == 'en') {
            $message = 'Thank you very much for sending us this message and we will answer it as soon as possible.';
            $message_err = 'An error was happened. Please try again.';
        }
        try {
            $email = $request->get('email');
            //  $email_to ='nga.ngo@nhatnga.vn';
            $email_to = $this->email_nhatnga;
            $name = $request->get('name');
            $phone = $request->get('phone');
            $subject = 'Enquiry Request';
            $message_text = $request->get('message');

            // dd($email);
            $data = array('name' => $name, 'subject' => $subject, 'email_text' => $email, 'message_text' => $message_text, 'phone' => $phone);
            Mail::send(['html' => 'email.enquiry'], $data, function ($message) use ($email_to) {
                $message->to($email_to, 'NhatNga Support')->subject('Enquiry Request');

                $message->from('nvmen@tma.com.vn', 'NhatNga support');
            });

        } catch (\Exception $e) {


            return response()->json(['success' => false, 'message' => $message_err]);
        }
        return response()->json(['success' => true, 'message' => $message]);

    }

    public function booking(Request $request)
    {

        $rules = array(
            'id' => 'required',
            'number_adults' => 'required',
        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Tour invalid']);
        }
        $tour = Tour::find($request['id']);
        if ($tour == null) {
            return response()->json(['success' => false, 'message' => 'Tour invalid']);
        }
        $number_adults = intval($request['number_adults']);
        $number_children = intval($request['number_children']);
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email_tour = $request['email_tour'];
        $tour_phone = $request['tour_phone'];
        $date_book = $request['date_book'];
        $full_name = $first_name . ' ' . $last_name;
        $total_money_ad = $tour->translation()->first()->adult_price * (1 - $tour->discount_percent / 100) * $number_adults;
        $total_money_child = $tour->translation()->first()->children_price * (1 - $tour->discount_percent / 100) * $number_children;
        $total_money = round($total_money_ad + $total_money_child);
        $total = App\Helper::get_format_money($total_money);

        try {
            $email_to = $this->email_nhatnga;
            $price = App\Helper::get_format_money($tour->translation()->first()->adult_price);
            $price_child = App\Helper::get_format_money($tour->translation()->first()->children_price);

            $data = array('name' => $full_name,
                'tour_phone' => $tour_phone,
                'email_text' => $email_tour,
                'tour_code' => $tour->code,
                'tour_name' => $tour->translation()->first()->name,
                'tour_date' => $date_book,
                'tour_adults' => $number_adults,
                'tour_children' => $number_children,
                'tour_price_adults' => $price,
                'tour_price_child' => $price_child,
                'discount_percent' => $tour->discount_percent . '%',
                'total_money' => $total,
            );
            $time = strtotime($date_book);
            $newformat = date('Y-m-d', $time);
            $book = new Booking();
            $book->book_id = Helper::get_guid();
            $book->full_name = $full_name;
            $book->email = $email_tour;
            $book->phone = $tour_phone;
            $book->tour_code = $tour->code;
            $book->tour_name = $tour->translation()->first()->name;
            $book->number_adults = $number_adults;
            $book->number_children = $number_children;
            $book->children_price = $tour->translation()->first()->children_price;
            $book->adult_price =  $tour->translation()->first()->adult_price;
            $book->discount_percent = $tour->discount_percent;
            $book->total_money = $total_money;
            $book->total_money_text = $total;
            $book->date = $newformat;
            $book->save();



            Mail::send(['html' => 'email.booking'], $data, function ($message) use ($email_to) {
                $message->to($email_to, 'NhatNga Support')->subject('Booking Tour');

                $message->from('nvmen@tma.com.vn', 'NhatNga support');
            });


        } catch (\Exception $e) {
            dd($e);
            return response()->json(['success' => false, 'message' => 'Error']);
        }
        return response()->json(['success' => true, 'message' => 'Ok']);

    }

}