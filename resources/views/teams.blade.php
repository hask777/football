<div>
    <form action="" method="get">
        @foreach($competition_teams as $team)
            <input type="hidden" name="team_id" value="{{$team['TeamId']}}">
            <button type="submit">{{$team['Name']}}</button>
            <br>
        @endforeach
    </form>
</div>


<br>
<div>
    @foreach($competition_games as $game)
        {{$game['AwayTeamName']}} <span>VS</span> {{$game['HomeTeamName']}}<br>
    @endforeach
</div>