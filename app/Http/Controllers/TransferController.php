<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tank;
use App\Record;
use App\Transfer;

class TransferController extends Controller
{
    public function __construct (Tank $tank, Record $record, Transfer $transfer)
    {
        $this->tank = $tank;
        $this->record = $record;
        $this->record1 = $record;
        $this->transfer = $transfer;
    }

    /**
     * Transfer content from one underground tank of a location 
     * to an underground tank of another location.
     * 
     */

     public function transfer(Request $request)
     {
        $this->validate($request, [
            'from_tank' => 'required',
            'to_tank' => 'required',
            'volume' => 'required',
        ]);
 
        $from_tank = $request->from_tank;
        $to_tank = $request->to_tank;
        $volume = $request->volume;

        //Get Previous Volume of From Tank
        $volume_from_tank = $this->tank->find($from_tank);
        $prev_volume_from_tank = $volume_from_tank->volume;
            //print $prev_volume_from_tank;

        //Get Previous Volume of To Tank
        $volume_to_tank = $this->tank->find($to_tank);
        $prev_volume_to_tank = $volume_to_tank->volume;
           // print $prev_volume_to_tank;
       
        //Make new transfer
        $this->transfer->from_tank = $from_tank;
        $this->transfer->to_tank = $to_tank;
        $this->transfer->volume = $volume;

        //Check if thier is an error in making this transfer
        if (!$this->transfer->save()) {
            return response()->json([
                'success' => false,
                'message' => 'Transfer fail'
            ], 400);
        
        } elseif ($this->transfer->save()){
        /**
        * Create new record for this transfer, to take record of previous volume of From tank,
        * and new volume of  From tank. i.e (Tank that you are making transfer from).
        */

            $this->record->opening_volume = $prev_volume_from_tank;
            $this->record->closing_volume = $prev_volume_from_tank - $volume;
            $this->record->tank_id = $from_tank;       
            
         $this->record->save();
        /**
        * Create new record for this transfer, to take record of previous volume of To tank,
        * and new volume of  To tank. i.e (Tank that you are making transfer to).
        */
       
        $this->record1->opening_volume = $prev_volume_to_tank;
        $this->record1->closing_volume = $prev_volume_to_tank + $volume;
        $this->record1->tank_id = $to_tank;
        $this->record1->save();
        
        

        

        /**
         *  update tank volume, From Tank 
         *  i.e Volume of Tank you are making transfer from.
         */

         //$this->tank->volume = $prev_volume_from_tank - $volume

        //Update tank volume, To Tank

        //Return success mesage
            return response()->json([
                'success' => true,
                'message' => 'Transfer made succesful'
            ], 200);

        }
    }

      
}
