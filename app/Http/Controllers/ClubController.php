<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\CityController;
use App\Models\City;
use App\Models\Sport;
use App\Models\ClubSport;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $clubs = Club::all();
        return view('clubs.IndexClubs', compact('clubs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = City::all();
        $sports = Sport::all();
        return view('clubs.CreateClubs', compact('cities','sports'));
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
        
        $storeData = $request->validate([
            'name' => 'required|unique:clubs',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'city_id' =>'required',
          
        ]);
        $input = $request->all();
        
        if ($logo = $request->file('logo')) {
            $destinationPath = 'uploads/logo/';
            $profileImage = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }
       $club= Club::create($input);
       $club->sports()->attach($request->sport_id);
       
        
            /*********************************************** 

            $services = $request->input('sport_id');
            $input['club_id'] = $club->id;
            for($i=0;$i<count($services);$i++){
                
                 $input['sport_id'] =$services[$i];
                ClubSport::create($input);
                                                }*/

            /************************************************ */

            return redirect()->route('clubs.index')
            ->with('success', 'club created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
        $sports = Sport::all();
        $cities = City::all();
        
        return view('clubs.EditClubs', compact('club','cities','sports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //

        $request->validate([
            'name' => 'required',
            
            'city_id' =>'required',
        ]);
  
        $input = $request->all();
  
        if ($logo = $request->file('logo')) {
            $destinationPath = 'uploads/logo/';
            $profileImage = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }else{
            unset($input['logo']);
        }
          
        $club->update($input);

        $club->sports()->sync($request->sport_id);
       
        /******************************************************* 
        
        $services = $request->input('sport_id');
        $input['club_id'] = $club->id;
        $club->sports->update();
       // $clubsport::ClubSport->where();
     
        for($i=0;$i<count($services);$i++){
            
             $input['sport_id'] =$services[$i];
            ClubSport::create($input);
                                            }*/

        /******************************************************* */
    
        return redirect()->route('clubs.index')
                        ->with('success','club updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
        $club->delete();
        return redirect()->route('clubs.index')
                        ->with('success','club deleted successfully');
    }
}
