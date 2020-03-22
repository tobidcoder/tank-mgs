<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tank;

class TankController extends Controller
{

    public function __construct(Tank $tank){
        $this->tanks = $tank;
    }

    //Create Tank
    public function store(Request $request)
    {
        $this->validate($request, [
            'tank_name' => 'required',
            'volume' => 'required',
            'tank_type_id' => 'required',
            'location_id' => 'required'
        ]);
 
        $this->tanks->tank_name = $request->tank_name;
        $this->tanks->volume = $request->volume;
        $this->tanks->tank_type_id = $request->tank_type_id;
        $this->tanks->location_id = $request->location_id;
 
        if ($this->tanks->save())
            return response()->json([
                'success' => true,
                'data' => $this->tanks->toArray()
            ], 200);
        else
            return response()->json([
                'success' => false,
                'message' => 'tank could not be added'
            ], 500);
    }

    //Get a particular Tank
    public function show($id)
    {
        $tank = $this->tanks->find($id);
 
        if (!$tank) {
            return response()->json([
                'success' => false,
                'message' => 'Tank with id ' . $id . ' not found'
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $tank->toArray()
        ], 200);
    }

//Update tank 
public function update(Request $request, $id)
{
    $tank = $this->tanks->find($id);

    if (!$tank) {
        return response()->json([
            'success' => false,
            'message' => 'tank with id ' . $id . ' not found'
        ], 400);
    }
    $tank->tank_name = $request->tank_name;
    $tank->volume = $request->volume;
    $tank->tank_type_id = $request->tank_type_id;
    $tank->location_id = $request->location_id;

    $updated = $tank->save();

    if ($updated)
        return response()->json([
            'success' => true
        ], 200);
    else
        return response()->json([
            'success' => false,
            'message' => 'Tank could not be updated'
        ], 500);
}

//Delete Location
public function destroy($id)
{
    $tank = $this->tanks->find($id);

    if (!$tank) {
        return response()->json([
            'success' => false,
            'message' => 'tank with id ' . $id . ' not found'
        ], 400);
    }

    if ($tank->delete()) {
        return response()->json([
            'success' => true
        ], 200);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'tank could not be deleted'
        ], 500);
    }  
 
}

}
