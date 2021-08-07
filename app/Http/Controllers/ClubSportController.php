<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Sport;
use App\Models\ClubSport;

class ClubSportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        /*
        $clubs = Club::all();
        $sports = Sport::all();
        return view('sportsclubs.CreateSportClubs', compact('clubs','sports'));
        */
        //, compact('clubs','sports')
      //  return view('sportsclubs.CreateSportClubs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        ///////////////////////////////////////////////
        
      /*  $storeData = $request->validate([
            'club_id' => 'required',
            'sport_id' =>'required',
            

        ]);

      $input = $request->all();
        $services = $request->input('sport_id');
       
        for($i=0;$i<count($services);$i++){
            
             $input['sport_id'] =$services[$i];
            ClubSport::create($input);
                                            }*/
       /*
foreach($services as $service){

    SportClub::create($var,$service);
}
*/
/*
return redirect()->route('sportsclubs.index')
->with('success', 'city created successfully.');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       /* $clubsport = ClubSport::find($id);
        $clubsport->delete();*/
    }
}
