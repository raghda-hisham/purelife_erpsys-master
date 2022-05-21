<?php

namespace App\Http\Controllers;

use App\Models\Sector;
// use App\Models\Sector;
use Illuminate\Http\Request;
use App\Http\Resources\Sectors;
use App\Http\Requests\SectorFormRequest;
use App\Http\Requests\UpdateSectorFormRequest;



class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = Sector::get();

        
        return Sectors::collection ($sectors);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectorFormRequest $request)
    {
        // dd($request->all());
        $sector = Sector::create([
            
            'name'           =>$request->name,
            'num'            =>$request->num,
        ]);

            
        return new Sectors ($sector);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sector = Sector::findOrFail($id);
        return new Sectors ($sector);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSectorFormRequest $request,$id)
    {
         $sector  = Sector::findOrfail($id);
        

       $sector->update([

            'name'           =>$request->name,
            'num'          =>$request->num,
            
        ]);

        return new Sectors ($sector);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sector  = Sector::findOrfail($id);
        $sector->delete();
        return 'sector deleted successfully';
    }
}
