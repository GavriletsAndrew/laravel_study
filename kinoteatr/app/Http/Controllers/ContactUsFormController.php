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
//        $id_film = DB::select(DB::raw("SELECT c.* FROM films f JOIN hall_films hf on f.id = hf.film_id
//                       JOIN cinemas c on hf.cinema_id = c.id where film_id = :id ;"),
//            [
//                "id" => $id,
//            ])
         $id_film = DB::table('films')->join('hall_films', 'films.id', '=','hall_films.film_id')
                                            ->join('cinemas','hall_films.cinema_id','=','cinemas.id')
                                            ->where('film_id',$id)->get();
        return view('show', [
            'id_films' => $id_film
        ]);
    }

    public function showСinema($id)
    {
//        $id_cinema = DB::select(DB::raw("SELECT * FROM halls h JOIN cinemas c  on h.id = c.id
//                                                where c.id = :id ;"),
//            [
//                "id" => $id,
//            ]);
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
            $calendar1 = $request->calendar;
//            $calendar_end = $request->calendar;

//            $ppl = DB::select(DB::raw("SELECT * FROM cinemas"));

//          query builder select all form table cinemas
            $ppl = Cinema::all();

            if ($id != null) {
//                $id_test = DB::select(DB::raw("SELECT * FROM cinemas WHERE id = :id"),
//              query builder select all form table cinemas
                $id_test = DB::table('cinemas')->where('id', $id)
                    ->get();
//                    [
//                        "id" => $id,
//                    ]
//                dd($id_test);
                return view('contact', [
                    'id_test' => $id_test,
                ]);

            } elseif ($name != null) {
                $name_test = DB::table('films')->where('title', 'like', "%$name%")
                    ->get();
//                $name_test = DB::select(DB::raw("SELECT * FROM films WHERE title LIKE :name "),
//                    [
//                        "name" => '%' . $name . '%',
//                    ]
//                );
                return view('contact', [
                    'name_test' => $name_test,
                ]);
            } elseif ($calendar != null && $calendar1 != null) {
//                $calendar_tests = DB::select(DB::raw("SELECT * FROM films WHERE film_start <= :calendar
//                                                                     and film_end >= :calendar1 "),
//                    [
//                        "calendar" => $calendar,
//                        "calendar1" => $calendar,
//                    ]);
//                dd($calendar);
//                dd($calendar1."test1");
                $calendar_tests = DB::table('films')
                    ->where('film_start','<=',$calendar)
                    ->where('film_end','>=',$calendar)
                    ->get();
////                     );
//                dd($calendar_tests);
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
