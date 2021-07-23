<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $hallModel = Cinema::all();
//            return view('testshow', [
//            'hallModel' => $hallModel,
//        ]);
//    }

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cinema $cinema
     * @return \Illuminate\Http\Response
     */
//    public function show(Cinema $cinema)
//    {
////        dd($cinema->all());die();
//        return view('addform')->with('cinema',$cinema);
//    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cinema $cinema
     * @return \Illuminate\Http\Response
     */
//    public function someMethod(Cinema $cinema)
//    {
//        dd($cinema->where('id', 1)->first());
//        return view('showform')->with('cinema', $cinema);
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cinema $cinema
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinema $cinema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cinema $cinema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinema $cinema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cinema $cinema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinema $cinema)
    {
        //
    }

    public function index()
    {
//        $lastName = addslashes($request->firstName);
        //add more logic to validate and secure user entered data before turning it loose in a query
//        return Redirect::to('people/' . $lastName);
        return view('showform');
    }

    public function show($firstName)
    {
//        dd($firstName);
        $qry = 'SELECT * FROM cinemas WHERE id = ' . $firstName . ' ';
        $ppl = DB::select($qry);
//        var_dump($ppl);die();
        return view('testshow', ['ppl' => $ppl]);
    }
}
