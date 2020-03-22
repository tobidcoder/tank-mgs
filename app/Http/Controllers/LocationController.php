<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{

    //See all location for this Transpoter
    public function index()
    {
        $locations = auth()->user()->locations;
 
        return response()->json([
            'success' => true,
            'data' => $locations
        ]);
    }
   
    //Get a particular location
    public function show($id)
    {
        $location = auth()->user()->locations()->find($id);
 
        if (!$location) {
            return response()->json([
                'success' => false,
                'message' => 'location with id ' . $id . ' not found'
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $location->toArray()
        ], 400);
    }
 
    //Store location to the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required'
        ]);
 
        $location = new Location;
        $location->name = $request->name;
        $location->address = $request->address;
 
        if (auth()->user()->locations()->save($location))
            return response()->json([
                'success' => true,
                'data' => $location->toArray()
            ], 200);
        else
            return response()->json([
                'success' => false,
                'message' => 'location could not be added'
            ], 500);
    }
 
    //Update location for this Transporter 
    public function update(Request $request, $id)
    {
        $location = auth()->user()->locations()->find($id);
 
        if (!$location) {
            return response()->json([
                'success' => false,
                'message' => 'location with id ' . $id . ' not found'
            ], 400);
        }
        $location->name = $request->name;
        $location->address = $request->address;
        // return $location;
        $updated = $location->save();
 
        if ($updated)
            return response()->json([
                'success' => true
            ], 200);
        else
            return response()->json([
                'success' => false,
                'message' => 'location could not be updated'
            ], 500);
    }
 
    //Delete Location
    public function destroy($id)
    {
        $location = auth()->user()->locations()->find($id);
 
        if (!$location) {
            return response()->json([
                'success' => false,
                'message' => 'location with id ' . $id . ' not found'
            ], 400);
        }
 
        if ($location->delete()) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'location could not be deleted'
            ], 500);
        }
    }
    
}
