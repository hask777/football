@foreach($areas as $area)

    {{-- <form action="{{route('show', $area['Name'])}}" method="get">
        @csrf
        <input type="hidden" name="area_id" value="{{$area['AreaId']}}">
        <input type="hidden" name="area_name" value="{{$area['Name']}}">
     
        <button type="submit" class="area_button bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded m-2">{{ $area['Name'] }}</button>
        @foreach($area['Competitions'] as $competition)
            <div class="area_comp hidden">
                {{$competition['Name']}}
            </div>
           
        @endforeach
    </form> --}}

    <div class="area_button bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white text-center py-2 px-4 border border-blue-500 hover:border-transparent rounded m-2">{{ $area['Name'] }}

        @foreach($area['Competitions'] as $competition)

            <div class="area_comp hidden">
                <a href="{{ route('show', $competition['CompetitionId'])}}">
                    {{$competition['Name']}}
                </a>     
            </div>
        
        @endforeach

    </div>
@endforeach

<script>
    jQuery(document).ready(function ($) {
        $('.area_button').on('click', function(event){
            var target = $( event.target );
            target.children().slideToggle();
            console.log(event.target.innerHTML);    
        });
    });
</script>