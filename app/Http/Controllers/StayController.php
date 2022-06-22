<?php

namespace App\Http\Controllers;

use App\Models\Stay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $stays = Stay::where('user_id',  $id)->paginate(10);
        return view('pages.Users.index', compact('stays'));

        //dd($stays);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(Auth::user());
        return view('pages.stays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id']=auth()->user()->id;
        Stay::create($input);
        return redirect(route('stays.index'))->with('success', 'all data stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stay  $stay
     * @return \Illuminate\Http\Response
     */
    public function show(Stay $stay)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stay  $stay
     * @return \Illuminate\Http\Response
     */
    public function edit(Stay $stay)
    {
        dd(__METHOD__);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stay  $stay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stay $stay)
    {
        dd(__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stay  $stay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stay $stay)
    {
        dd(__METHOD__);
    }
}
