<?php

namespace App\Http\Controllers;

use App\Models\Iot_Devices;
use Illuminate\Http\Request;

class IotDevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readings = Iot_Devices::all();
        // dd($devices);
       return view('device_list')->with('readings', $readings);
    }

    public function api_Index()
    {
        $readings = Iot_Devices::all();
        //return ProductResource::collection($products);
        // dd($readings);
        return $readings ;
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
    
            // $this->validate($request, [
            //     'time'=>'time',
            //     'soil_ph'=>'soil_ph',
            //     'soil_temperature'=>'soil_temperature',
            //     'soil_moisture'=>'soil_moisture',
            //     'pump_status'=>'pump_status'
            // ]);
            $reading =  new Iot_Devices;
            $reading->time = $request->input('time');
            $reading->soil_ph = $request->input('soil_ph');
            $reading->soil_temperature = $request->input('soil_temperature');
            $reading->soil_moisture = $request->input('soil_moisture');
            $reading->pump_status = $request->input('pump_status');
           
            
            $reading->save();
    
            return redirect('/');
        
    }

    public function apiStore(Request $request)
    {
    
            // $this->validate($request, [
            //     'time'=>'time',
            //     'soil_ph'=>'soil_ph',
            //     'soil_temperature'=>'soil_temperature',
            //     'soil_moisture'=>'soil_moisture',
            //     'pump_status'=>'pump_status'
            // ]);
            $reading =  new Iot_Devices;
            $reading->time = $request->input('time');
            $reading->soil_ph = $request->input('soil_ph');
            $reading->soil_temperature = $request->input('soil_temperature');
            $reading->soil_moisture = $request->input('soil_moisture');
            $reading->pump_status = $request->input('pump_status');
           
            
            $reading->save();
    
            return "new reading added";
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iot_Devices  $iot_Devices
     * @return \Illuminate\Http\Response
     */
    public function show(Iot_Devices $iot_Devices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iot_Devices  $iot_Devices
     * @return \Illuminate\Http\Response
     */
    public function edit(Iot_Devices $iot_Devices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iot_Devices  $iot_Devices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iot_Devices $iot_Devices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iot_Devices  $iot_Devices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iot_Devices $iot_Devices)
    {
        //
    }
}
