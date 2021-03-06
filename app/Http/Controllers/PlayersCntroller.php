<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlayersCntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $old_key = 'f7b0c7419d204f299f59e646b45ca563';
        $last_key = '462593266ebe41aea83378076b88c07d';

        if(!empty($_GET['player_id']) || $_GET['player_id'] != 0){
            $player_id = $_GET['player_id'];
            dump($player_id);
        }
       

        $player = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get( 'https://api.sportsdata.io/v3/soccer/scores/json/Player/'. $player_id)->json();

        // dump($player);


        $player_stat = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get( 'https://api.sportsdata.io/v3/soccer/stats/json/PlayerSeasonStatsByPlayer/590/'. $player_id)->json();

        dump($player_stat);

        return view('teams.player', [
            'player' => $player
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
