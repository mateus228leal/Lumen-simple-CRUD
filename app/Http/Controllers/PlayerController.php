<?php


namespace App\Http\Controllers;


use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function getPlayers(Request $request){
        $players = Player::paginate();

        return $players;
    }

    public function postPlayer(Request $request){
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

    public function getPlayer(Request $request, int $id){
        $player = Player::find($id);

        return $player;
    }

    public function putPlayer(Request $request, int $id){
        $this->validate($request,[
            'name'=>'required',
            'age'=>'required',
            'play_position'=>'required',
            'status'=>'required'
        ]);

        $player = Player::find($id);

        $player->name = $request->name;
        $player->age = $request->age;
        $player->play_position = $request->play_position;
        $player->status = $request->status;

        return $player;
    }

    public function deletePlayer(Request $request, int $id){
        $player = Player::find($id)->delete();
    }
}
