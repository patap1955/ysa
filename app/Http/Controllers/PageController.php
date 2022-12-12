<?php

namespace App\Http\Controllers;

use App\Mail\ContactsForm;
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
//        return response()->json($mail);
        if (Mail::to('slobodchikov1985@yandex.ru')->send(new ContactsForm($mail))) {
//            Contact::create($request->all());
//            return back();
            return response()->json($request);
        } else {
            return response()->json(["answer" => "error"]);

        }
    }
}
