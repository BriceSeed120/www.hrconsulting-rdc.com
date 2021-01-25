<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Articles;
use App\Models\Coupon;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function page($menu_id, $category = null )
    {
        $pageInfo = DB::table('menus')->where('id', $menu_id)->first();        
        $contentData = "";
        if($category == 1){
            $contentData = DB::table('roomssuits')->get();
        }
        elseif($category == 2){
            $contentData = DB::table('facilities')->get();
        }
        elseif($category == 3){
            $contentData = DB::table('resturants')->get();
        }
        elseif($category == 4){
            $contentData = DB::table('meetingsevents')->get();
        }
        elseif($category == 5){
            $contentData = DB::table('offers')->get();
        }
        elseif($category == 6){
            $contentData = DB::table('recreations')->get();
        }
       return view('front.page', compact('pageInfo','contentData'));
    }

    public function index()
    {

        $banners =  DB::table('banners')->get();
        $roomssuites = DB::table('roomssuits')->get();
        $facilities = DB::table('facilities')->get();
        $restaurants = DB::table('resturants')->get();
        $meetingsevents = DB::table('meetingsevents')->get();
        $welcomeArticle = Articles::where("type",1)->first();
        $roomArticle = Articles::where("type",2)->first();
        $mixArticle = Articles::where("type",3)->first();

        $apiKey = "ef2bfc0702405631f6988da7d4ae7bcf";
        $cityId = "1337233";
        $days = 7;
        $lat = 24.85;
        $lon = 89.366669;
        $googleApiUrl = "https://api.openweathermap.org/data/2.5/onecall?lat=" .$lat ."&lon=". $lon ."&appid=". $apiKey."&units=metric";
        $ch = curl_init();        
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);        
        curl_close($ch);
        $weatherData = json_decode($response);
        $currentTime = time();
        return view('front.index', compact('welcomeArticle','roomArticle','mixArticle','banners','roomssuites','facilities','restaurants','meetingsevents','weatherData'));
    }

    public function contact(){
		
        return view('front.contact')->withTitle("Contact US");
    }
    public function booking(){
		$roomssuites = DB::table('roomssuits')->get();
        return view('front.booking',compact('roomssuites'))->withTitle("Booking");
    }
    public function contactstore (Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ], [
            'name.required' => 'Name filed is required',
            'message.required' => 'Description filed is required',
            'email.required' => 'Email filed is required',
            'phone.required' => 'Phone filed is required',
        ]);

        $Contact = Contact::create($validatedData);
        return redirect()->route('contact')->with('success', 'Contact message sent successfully.');
            
    }

    public function checkcoupon (Request $request){
        $date = date('Y-m-d');
        $data = Coupon::where('code', $request->code)->select('amount')
        ->whereDate('offer_start', '<=', $date)
        ->whereDate('offer_end', '>=', $date)
        ->first();
        $amount = 0;
        if($data){
            $amount = $data->amount;
        }
        return response()->json(array('amount'=> $amount), 200);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
