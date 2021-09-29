<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
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
        $id_film = DB::table('films')->join('hall_films', 'films.id', '=', 'hall_films.film_id')
            ->join('cinemas', 'hall_films.cinema_id', '=', 'cinemas.id')
            ->where('film_id', $id)->get();
        return view('show', [
            'id_films' => $id_film
        ]);
    }

    public function showСinema($id)
    {
        $id_cinema = DB::table('halls')->join('cinemas', 'halls.id', '=', 'cinemas.id')
            ->where('cinemas.id', '=', "$id")
            ->get();

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

            $ppl = Cinema::all();

            if ($id != null) {
                $id_test = DB::table('cinemas')->where('id', $id)
                    ->get();
                return view('contact', [
                    'id_test' => $id_test,
                ]);
            } elseif ($name != null) {
                $name_test = DB::table('films')->where('title', 'like', "%$name%")
                    ->get();
                return view('contact', [
                    'name_test' => $name_test,
                ]);
            } elseif ($calendar != null) {
                $calendar_tests = DB::table('films')
                    ->where('film_start', '<=', $calendar)
                    ->where('film_end', '>=', $calendar)
                    ->get();
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
