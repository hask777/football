<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AreasController extends Controller
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

        $areas = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$old_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();
        // dd($areas);

        foreach($areas as $area){
            if(!empty($area['Competitions'])){
                // dump($area['Competitions']);
            }         
        }

        // dd($areas);
        
        return  view('areas', 
            [
                'areas' => $areas,
            ]
        );
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

        // include 'inc/areas/http.php'; 
        // include 'inc/areas/dump.php';
   
    $competition = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$old_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/' . $id)->json();

    // dump($competition);

        foreach ($competition['CurrentSeason']['Rounds'] as $round):

            $round_arr[] = $round['RoundId'];

        endforeach;

        // dump($round_arr);

        $group_A = [];
        $group_B = [];
        $group_C = [];
        $group_D = [];
        $group_E = [];
        $group_F = [];
        $group_G = [];
        $group_H = [];

        foreach ($round_arr as $round_id) {
            
            $round_standings = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$old_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Standings/'. $round_id)->json();
                dump($round_standings);
    
            foreach ($round_standings as $item) {
                
                if($item['Group'] == 'Group A'){
                    $group_A[] = $item;
                }

                if($item['Group'] == 'Group B'){
                    $group_B[] = $item;
                }

                if($item['Group'] == 'Group C'){
                    $group_C[] = $item;
                }

                 if($item['Group'] == 'Group D'){
                    $group_D[] = $item;
                }

                if($item['Group'] == 'Group E'){
                    $group_E[] = $item;
                }

                if($item['Group'] == 'Group F'){
                    $group_F[] = $item;
                }

                if($item['Group'] == 'Group G'){
                    $group_G[] = $item;
                }

                 if($item['Group'] == 'Group H'){
                    $group_H[] = $item;
                }
            }
        }

        dump($group_A);
        dump($group_B);
        dump($group_C);
        dump($group_D);
        dump($group_E);
        dump($group_F);
        dump($group_G);
        dump($group_H);


        // foreach ($round_arr as $round_id) {
            
        //     $round_schedule = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$old_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Schedule/'. $round_id)->json();
        //         dump($round_schedule);
        // }

        // dump($round_schedule);
        
        return view('areas.show', 
            [
                'competition' => $competition,
            ]
        );
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