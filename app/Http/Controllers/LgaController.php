<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use Illuminate\Http\Request;

class LgaController extends Controller
{
    //
    public function get_lga_for_server(){
       $id = array_key_first(request()->all());
       if($id == 0 || empty($id)){
        echo "message not received";
        die();
       }
       $lgas = Lga::all()->where("state_id", $id);
      $array = [];
       foreach($lgas as $l){
       $lga = [
        "id" => $l->id,
        "name" => $l->name,
        "state_id" => $l->state_id
       ];
       array_push($array, $lga);
       }
       echo json_encode($array);
    }
}
