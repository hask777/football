@foreach($areas as $area)
<a 
    href="{{route('show', [ $area['AreaId'], $area['Name'] ])}}"
    class="area_button block bg-transparent hover:bg-blue-500 text-blue-700 text-center font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded m-2"
>
{{ $area['Name'] }}
</a>
<br>
@endforeach
