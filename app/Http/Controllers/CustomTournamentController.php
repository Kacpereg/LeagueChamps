<?php

namespace App\Http\Controllers;

use App\Client\RiotClient;
use App\Models\Comment;
use App\Models\Match;
use App\Models\Post;
use App\Models\Tournament;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomTournamentController extends Controller
{
    public function index()
    {
        $tournaments=Tournament::where('date','>', Carbon::now()->format('Y-m-d'))->get();
//        dd($tournaments);
        return view('tournament.play', compact('tournaments'));
    }

    public function brackets()
    {
        $tournaments=Tournament::where('date','>', Carbon::now()->format('Y-m-d'))->get();
        return view('tournament.brackets', compact('tournaments'));
    }

    public function create(Request $request)
    {
        Tournament::create([
            'date' => $request->get('date'),
            'players' => [],
        ]);
        return redirect()->back();
    }

    public function showTournament(Tournament $tournament)
    {
        $matches = Match::where('tournament_id', $tournament->id)->get();
        return view('tournament.show', compact('tournament', 'matches'));
    }

    public function registerPlayers(Tournament $tournament){

        $players=$tournament->players;
        if(count($players)==4){
            return redirect()->back()->with('error','there is already 4 players in this tournament');
        }

        if(in_array(Auth::id(), $players)){
            return redirect()->back()->with('error','you are already registered to this tournament');
        }

        $players[]=Auth::id();
        $tournament->players=$players;
        $tournament->save();
        if(count($players)===4){
            $this->createBrackets($tournament);
        }
        return redirect()->back()->with('success','succesfully registered into tournament');
    }

    public function createBrackets(Tournament $tournament){

        $players=$tournament->players;
        $riotClient=app(RiotClient::class);
        $mmrArray=[];

        foreach($players as $player){
            $user=User::find($player);
            $mmr=$riotClient->getEntries($user)[1];
            $mmrArray[$player]=$mmr;
        }

        arsort($mmrArray);

        $mmrArray=array_chunk($mmrArray, 2, true);

        $bracket1=$mmrArray[0];
        $bracket2=$mmrArray[1];

        $match = new Match();
        $match->tournament_id=$tournament->id;
        $match->team1=[array_keys($bracket1)[0]];
        $match->team2=[array_keys($bracket1)[1]];
        $match->game_date=$tournament->date . ' 20:00';
        $match->lobby_name=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1, 20);
        $match->lobby_password=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1, 10);
        $match->save();

        $match2 = new Match();
        $match2->tournament_id=$tournament->id;
        $match2->team1=[array_keys($bracket2)[0]];
        $match2->team2=[array_keys($bracket2)[1]];
        $match2->game_date=$tournament->date . ' 20:00';
        $match2->lobby_name=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1, 20);
        $match2->lobby_password=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1, 10);
        $match2->save();


        return redirect()->back()->with('success', 'created brackets');
    }

}
