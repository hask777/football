@extends('main')
@section('content')

<div class="area_heading">

	<div class="text-center text-3xl flex items-center justify-center">
		<h2>{{ $competition['Name'] }}</h2>
		<div class="area_img">
			<img src="{{ asset('img/FIFA_logo_colored.png') }}" alt="" class="">	
		</div>
	</div>

	<div class="area_heading_description flex ">
		<ul class="flex justify-center items-center w-full p-0 m-0">
			<li class="mr-2">{{ $competition['AreaName'] }}</li> |
			<li class="ml-2 mr-2">{{ $competition['Name'] }}</li> |
			<li class="ml-2 mr-2">{{ $competition['Type'] }}</li> |
			<li class="ml-2 mr-2">{{ $competition['CurrentSeason']['Name'] }}</li>
		</ul>
	</div>

	<div class="competition_rounds">
		<ul class="flex bg-gray-400 text-white mt-2">
			@foreach($competition['CurrentSeason']['Rounds'] as $round)	
				<li class="p-2 ml-2 mr-2">{{$round['Name']}}</li>
			@endforeach	
		</ul>
	<div>

	@if(!empty($groups))
		@foreach($groups as $group)	

			<h2 class="text-3xl p-4">{{$group[0]['Group']}}</h2>
			<div class="scope_buttons">
				<button class="btn_total hover:bg-blue-500 text-blue-700 active:bg-blue-700 font-semibold hover:text-white text-center py-2 px-4 border border-blue-500 hover:border-transparent rounded m-2">Total</button>
				<button class="btn_home hover:bg-blue-500 text-blue-700 active:bg-blue-700  font-semibold hover:text-white text-center py-2 px-4 border border-blue-500 hover:border-transparent rounded m-2">Home</button>
				<button class="btn_away hover:bg-blue-500 text-blue-700 active:bg-blue-700 font-semibold hover:text-white text-center py-2 px-4 border border-blue-500 hover:border-transparent rounded m-2">Away</button>
			</div>
			
			{{-- TOTAL --}}
			@include('areas.scope.total')
			{{-- End TOTAl --}}
			
			{{-- HOME --}}
			@include('areas.scope.home')
			{{-- End HOME --}}

			{{-- AWAY --}}
			@include('areas.scope.away')
			{{-- End AWAY --}}
		@endforeach
	@endif
	
</div>

<style>
	
	.area_img img{
		width: 100px;
		height: auto;
	}

</style>

<script>
	 jQuery(document).ready(function ($) {
        $('.btn_home').on('click', function(event){
            var target = $( event.target );
            target.children().slideToggle();

            $('.home').show();
            $('.total').hide();
            $('.away').hide();
        });

        $('.btn_away').on('click', function(event){
            var target = $( event.target );
            target.children().slideToggle();

            $('.away').show();
            $('.total').hide();
            $('.home').hide();
        });

        $('.btn_total').on('click', function(event){
            var target = $( event.target );
            target.children().slideToggle();

            $('.total').show();
            $('.away').hide();
            $('.home').hide();
        });
    });
</script>


@endsection