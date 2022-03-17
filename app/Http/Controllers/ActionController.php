<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions;
use App\Car;
use App\EnviromentData;
use App\MachineLearning;
use Illuminate\Notifications\Action;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response(Actions::all());
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
        Actions::create([
            'car_id'=>$request->car_id,
            'direction_old'=>$request->direction_old,
            'direction_new'=>$request->direction_new,
            'Dat_time'=>date('Y-m-d')
        ]);

        dd('action is stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return response([MachineLearning::where('car_id',1)->get(),EnviromentData::where('car_id',1)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            Actions::find($id)->update([
                'car_id'=>$request->car_id,
                'direction_old'=>$request->direction_old,
                'direction_new'=>$request->direction_new,
                'Dat_time'=>date('Y-m-d'),
            ]);

            dd('action is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action=Actions::find($id);
        $action->delete();
        dd('action is deleted');

    }
}
