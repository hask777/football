<div>
    @foreach($competition_teams as $team)
        <form action="{{ route('showteams', $team['TeamId'])}}" method="get">   
            @csrf     
                <input type="hidden" name="team_id" value="{{$team['TeamId']}}">
                <input type="hidden" name="venue_id" value="{{$team['VenueId']}}">
                <input type="hidden" name="team_key" value="{{$team['Key']}}">    
                <input type="hidden" name="team_name" value="{{$team['Name']}}">
                <input type="hidden" name="team_fullname" value="{{$team['FullName']}}">
                <input type="hidden" name="team_active" value="{{$team['Active']}}">
                <input type="hidden" name="team_area_name" value="{{$team['AreaName']}}">
                <input type="hidden" name="team_venue_name" value="{{$team['VenueName']}}">
                <input type="hidden" name="team_gender" value="{{$team['Gender']}}">
                <input type="hidden" name="team_type" value="{{$team['Type']}}">
                <input type="hidden" name="team_address" value="{{$team['Address']}}">
                <input type="hidden" name="team_city" value="{{$team['City']}}">
                <input type="hidden" name="team_zip" value="{{$team['Zip']}}">
                <input type="hidden" name="team_phone" value="{{$team['Phone']}}">
                <input type="hidden" name="team_fax" value="{{$team['Fax']}}">
                <input type="hidden" name="team_website" value="{{$team['Website']}}">
                <input type="hidden" name="team_email" value="{{$team['Email']}}">
                <input type="hidden" name="team_founded" value="{{$team['Founded']}}">
                <input type="hidden" name="team_clubcolor1" value="{{$team['ClubColor1']}}">
                <input type="hidden" name="team_clubcolor2" value="{{$team['ClubColor2']}}">
                <input type="hidden" name="team_clubcolor3" value="{{$team['ClubColor3']}}">
                <input type="hidden" name="team_nickname1" value="{{$team['Nickname1']}}">
                <input type="hidden" name="team_nickname2" value="{{$team['Nickname2']}}">
                <input type="hidden" name="team_nickname3" value="{{$team['Nickname3']}}">
                <input type="hidden" name="team_wiki" value="{{$team['WikipediaLogoUrl']}}">
                <input type="hidden" name="team_wikimarkurl" value="{{$team['WikipediaWordMarkUrl']}}">
                <input type="hidden" name="team_globalteamId" value="{{$team['GlobalTeamId']}}">
                
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