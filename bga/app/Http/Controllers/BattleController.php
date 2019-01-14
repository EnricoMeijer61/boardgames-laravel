<?php

namespace App\Http\Controllers;

use App\battle;
use Illuminate\Http\Request;
use DB;
class BattleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $gamedetails = DB::table('gamedetails')->get();

        return view('battle.index', ['users' => $users],['gamedetails' => $gamedetails]);


//        return view('battle.index');
    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'winnaar' => 'required',
            'lost' => 'required',
            'game' => 'required',
            'lost02' => 'nullable',
            'lost03' => 'nullable',

        ]);
        Battle::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function show(battle $battle)
    {
        $battles = Battle::latest()->paginate(20);
        return view('history.show', compact('battles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function edit(battle $battle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, battle $battle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\battle  $battle
     * @return \Illuminate\Http\Response
     */
    public function destroy(battle $battle)
    {
        //
    }
}
