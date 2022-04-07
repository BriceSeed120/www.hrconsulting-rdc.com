<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    
    public function mail(Request $request)
    {
        
        $data = [
                'Name'  => $request->input('myUsername'),
                'Email' => $request->input('myEmail'),
                'Email' => $request->input('myPhoneNumber'),
                'Query' => $request->input('textquery')
                ];
        
        //Mail Function
        Mail::send('email.name', ['data1' => $data], function ($m) {
         
            $m->to('nde.brice@seed120.com')->subject('You got a New mail from HR Consulting RDC');
    });
        //Json Response For Angular frontend
        return response()->json(["message" => "Email sent successfully."]);
    }
}