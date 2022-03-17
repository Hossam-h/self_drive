<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnviromentData;
use League\CommonMark\Environment\Environment;

class EnviromentDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(EnviromentData::all());


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
          EnviromentData::create([
             'forward'=>$request->forward,
             'backward'=>$request->backward,
             'left'=>$request->left,
             'right'=>$request->right,
             'image'=>$request->image,
             'car_id'=>$request->car_id,
             'Date_time'=>date('Y-m-d'),
         ]);

         dd('data is stored');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enviroment=EnviromentData::find($id);
        return response($enviroment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

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
        $enviroment=EnviromentData::find($id);
        $enviroment->update([
            'forward'=>$request->forward,
            'backward'=>$request->backward,
            'left'=>$request->left,
            'right'=>$request->right,
            'image'=>$request->image,
            'car_id'=>$request->car_id,
            'Date_time'=>date('Y-m-d'),
        ]);

        dd('data is updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enviroment=EnviromentData::find($id);
        $enviroment->delete();
        dd('data is deleted');
    }
}
