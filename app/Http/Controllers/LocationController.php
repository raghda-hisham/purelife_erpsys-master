<?php

namespace App\Http\Controllers;

use App\Models\Location;
// use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\Locations;
use App\Http\Requests\LocationFormRequest;
use App\Http\Requests\UpdateLocationFormRequest;



class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::get();

        
        return Locations::collection ($locations);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationFormRequest $request)
    {
        // dd($request->all());
        $location = Location::create([
            
            'name'           =>$request->name,
            'num'            =>$request->num,
            'sector_id'      =>$request->sector_id,
        ]);

            
        return new Locations ($location);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);
        return new Locations ($location);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationFormRequest $request,$id)
    {
         $location  = Location::findOrfail($id);
        

       $location->update([

            'name'           =>$request->name,
            'num'          =>$request->num,
            'sector_id'      =>$request->sector_id,
            
        ]);

        return new Locations ($location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location  = Location::findOrfail($id);
        $location->delete();
        return 'location deleted successfully';
    }
}
