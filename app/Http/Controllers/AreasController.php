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

        $areas = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();
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

        // League Details   
        $competition = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/' . $id)->json();

        dump($competition);

        return view('areas.show', 
            [
                // 'area_id' => $area_id,
                // 'area_name' => $area_name
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