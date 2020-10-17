{{-- AWAY --}}

				<table class="hidden away">
					<thead>
						<tr>
							<th class="p-1">
								<span>Away</span>
							</th>
							<th class="p-1">
								<span>Games</span>
							</th>
							<th class="p-1">
								<span>Wins</span>
							</th>
							<th class="p-1">
								<span>Losses</span>
							</th>
							<th class="p-1">
								<span>Draws</span>
							</th>
							<th class="p-1">
								<span>Points</span>
							</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach ($group as $team)
							@if($team['Scope'] == 'Away')
							<tr>
								<td>	
									<div class="border-b">{{$team['Name']}}</div> <br>	
								</td>
								<td>
									<div class="border-b text-center"><span class="m-auto">{{$team['Games']}}</span></div> <br>
								</td>
								<td>
									<div class="border-b text-center"><span class="m-auto">{{$team['Wins']}}</span></div> <br>
								</td>
								<td>
									<div class="border-b text-center"><span class="m-auto">{{$team['Losses']}}</span></div> <br>
								</td>
								<td>
									<div class="border-b text-center"><span class="m-auto">{{$team['Draws']}}</span></div> <br>
								</td>
								<td>
									<div class="border-b text-center"><span class="m-auto">{{$team['Points']}}</span></div> <br>
								</td>
							</tr>
							@endif
						@endforeach
					</tbody>
				</table>
