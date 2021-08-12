<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

    public function show($id)
    {
        $id_film = DB::select(DB::raw("SELECT c.* FROM films f JOIN hall_films hf on f.id = hf.film_id
                       JOIN cinemas c on hf.cinema_id = c.id where film_id = :id ;"),
            [
                "id" => $id,
            ]);
        return view('show', [
            'id_films' => $id_film
        ]);
    }

    public function showСinema($id)
    {
        $id_cinema = DB::select(DB::raw("SELECT * FROM halls h JOIN cinemas c  on h.id = c.id
                                                where c.id = :id ;"),
            [
                "id" => $id,
            ]);

        return view('showcinema', [
            'id_cinemas' => $id_cinema
        ]);
    }

//     Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        if ($request->isMethod('post')) {

//          value in form

            $id = $request->id;
            $name = $request->name;
            $calendar = $request->calendar;
            $ppl = DB::select(DB::raw("SELECT * FROM cinemas"));


            if ($id != null) {
                $id_test = DB::select(DB::raw("SELECT * FROM cinemas WHERE id = :id"),
                    [
                        "id" => $id,
                    ]);
                return view('contact', [
                    'id_test' => $id_test,
                ]);
            } elseif ($name != null) {
                $name_test = DB::select(DB::raw("SELECT * FROM films WHERE title LIKE :name "),
                    [
                        "name" => '%' . $name . '%',
                    ]);
                return view('contact', [
                    'name_test' => $name_test,
                ]);
            } elseif ($calendar != null) {
                $calendar_tests = DB::select(DB::raw("SELECT * FROM films WHERE film_start <= :calendar
                                                                     and film_end >= :calendar1 "),
                    [
                        "calendar" => $calendar,
                        "calendar1" => $calendar
                    ]);
                return view('contact', [
                    'calendar_tests' => $calendar_tests,
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
