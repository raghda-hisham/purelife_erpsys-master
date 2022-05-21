<?php

namespace App\Http\Controllers;

use App\Models\Position;
// use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Resources\Positions;
use App\Http\Requests\PositionFormRequest;
use App\Http\Requests\UpdatePositionFormRequest;



class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::get();

        
        return Positions::collection ($positions);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionFormRequest $request)
    {
        // dd($request->all());
        $position = Position::create([
            
            'pos_code'            =>$request->pos_code,
            'pos_value'           =>$request->pos_value,

        ]);

            
        return new Positions ($position);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = Position::findOrFail($id);
        return new Positions ($position);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePositionFormRequest $request,$id)
    {
         $position  = Position::findOrfail($id);
        

       $position->update([

            'pos_code'          =>$request->pos_code,
            'pos_value'         =>$request->pos_value,

            
        ]);

        return new Positions ($position);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position  = Position::findOrfail($id);
        $position->delete();
        return 'position deleted successfully';
    }
}
