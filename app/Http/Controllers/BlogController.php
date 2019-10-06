<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request)
    {

    	$data = new Blog;
    	$data->nama = $request->nama;
    	$data->email = $request->email;
    	$data->password = $request->password;
    	$data->save();

    	$to_emails = $request->email;
    	$to_name = $request->nama;
    	$datamailer = array(
    		"nama" => $request->nama,
    		"email" => $request->email, 
    	);
    	$tampung = 'mailer/emails';
    	Mail::send($tampung, $datamailer, function($message) use ($to_name, $to_emails){
    		$message->to($to_emails,$to_name)
    				->subject('demo');
    		$message->from('debugging@gmail.com', 'thanks');
    	});

    	return response()->json($data);

    }
    public function edit($id)
    {
    	$data = Blog::find($id);
    	return view('verifikasi',['data' => $data]);

    }
    public function update(Request $request, $id)
    {
    	$data = Blog::find($id);
    	$data->nama = $request->nama;
    	$data->email = $request->email;
    	$data->password = $request->password;
    	$data->update();

    	return back();
    }
}
