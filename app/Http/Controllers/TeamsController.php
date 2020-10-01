<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeamsController extends Controller
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

        if(!empty($_GET['comp_id'])){
            $comp_id = $_GET['comp_id'];
        }
        
        $competition = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/' . $comp_id)->json();

        // dump($competition);

        $competition_teams = $competition['Teams'];
        $competition_games = $competition['Games'];

        foreach($competition_teams as $team){
            // dd($team['Players']);
        }

        // dump($competition_teams);

        return view('teams', [
            'competition_teams' => $competition_teams,
            'competition_games' => $competition_games
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

        $old_key = 'f7b0c7419d204f299f59e646b45ca563';
        $last_key = '462593266ebe41aea83378076b88c07d';
        
        include 'teams/http.php';
        // dump($player_name);  
        

        $team = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/MembershipsByTeam/'. $team_id)->json();
        // dd($team);

        foreach($team as $player){
            $player_id = $player['PlayerId'];
            $player_name = $player['PlayerName'];
            // dump($player_name . ':' . $player_id);
        }

        $player = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Player/'. $player_id)->json();
        // dump($player);

        return view('teams.show', [
            'team_id' => $team_id,
            'venue_id' => $venue_id,
            'team_key' => $team_key,
            'team_name' => $team_name,
            'team_fullname' => $team_fullname,
            'team_active' => $team_active,
            'team_area_name' => $team_area_name,
            'team_gender' => $team_gender,
            'team_type' => $team_type,
            'team_address' => $team_address,
            'team_city' => $team_city,
            'team_zip' => $team_zip,
            'team_phone' => $team_phone,
            'team_fax' => $team_fax,
            'team_website' => $team_website,
            'team_email' => $team_email,
            'team_founded' => $team_founded,
            'team_clubcolor1' => $team_clubcolor1,
            'team_clubcolor2' => $team_clubcolor2,
            'team_clubcolor3' => $team_clubcolor3,
            'team_nickname1' => $team_nickname1,
            'team_nickname2' => $team_nickname2,
            'team_nickname3' => $team_nickname3,
            'team_wiki' => $team_wiki,
            'team_wikimarkurl' => $team_wikimarkurl,
            'team_globalteamId' => $team_globalteamId,
            'team' => $team
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
