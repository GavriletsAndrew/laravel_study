<?php

namespace App\Http\Controllers;


use App\Models\Cinema;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

//     Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        // Form validation
//        $this->validate($request, [
//            'id' => 'required',
//        ]);
        //  Store data in database
        if ($request->isMethod('post')) {

//          value in form

            $id = $request->id;
            $name = $request->name;
            $calendar = $request->calendar;
            $ppl = DB::select(DB::raw("SELECT * FROM cinemas"));



            if ($id != null) {
                $ppl = DB::select(DB::raw("SELECT * FROM cinemas WHERE id = :id"),
                    [
                        "id" => $id,
                    ]);
                return view('contact', [
                    'ppl' => $ppl,
                ]);
            } elseif ($name != null) {
                $ppl = DB::select(DB::raw("SELECT * FROM films WHERE title LIKE :name "),
                    [
                        "name" => '%' . $name . '%',
                    ]);
                return view('contact', [
                    'ppl' => $ppl,
                ]);
            } elseif ($calendar != null) {
                $ppl = DB::select(DB::raw("SELECT * FROM films WHERE film_start <= :calendar
                                                                     and film_end >= :calendar1 "),
                    [
                        "calendar" => $calendar,
                        "calendar1" => $calendar
                    ]);
                return view('contact', [
                    'ppl' => $ppl,
                ]);
            } else {
                return view('contact', [
                    'ppl' => $ppl,
                ]);
            }
        } else {
            return view('contact');
        }
    }
}
