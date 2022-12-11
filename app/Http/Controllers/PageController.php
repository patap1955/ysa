<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index.index');
    }

    public function formContacts(Request $request)
    {
        $mail = new \stdClass();
        $mail->name = $request->name;
        $mail->phone = $request->phone;
        $mail->text = $request->text;
        return response()->json($request);
//        if (Mail::to('CROST2020@YANDEX.RU')->send(new ContactsForm($mail))) {
////            Contact::create($request->all());
////            return back();
//            return response()->json($request);
//        } else {
//            return response()->json(["answer" => "error"]);
//
//        }
    }
}
