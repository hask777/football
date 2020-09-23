<div>
    @foreach($competition_teams as $team)
        <form action="{{ route('showteams', $team['TeamId'])}}" method="get">        
                <input type="hidden" name="team_id" value="{{$team['TeamId']}}">
                <input type="hidden" name="venue_id" value="{{$team['VenueId']}}">
                <button type="submit">{{$team['Name']}}</button>
                <br>    
        </form>
    @endforeach
</div>


<br>
<div>
    @foreach($competition_games as $game)
        {{$game['AwayTeamName']}} <span>VS</span> {{$game['HomeTeamName']}}<br>
    @endforeach
</div>