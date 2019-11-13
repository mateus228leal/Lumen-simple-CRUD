<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller{

    public function postNewPlayer(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'age'=>'required',
            'play_position'=>'required',
            'status'=>'required'
        ]);

        $player = $request->all();
        $player = Player::create($player);

        return response()->json($player);
    }

    public function getTeam(Request $request){

       $players = Player::paginate();
       return $players;
    }

    public function putUpdatePlayer(Request $request){
        $player = Player::where('id');
    }

    public function deleteMoveOutPlayer(int $id){

        $player = Player::find($id)->delete();
    }
}
