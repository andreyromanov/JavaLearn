@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<h2> Список тем</h2>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead class=thead-light>
							<tr>
								<th scope="col">Назва теми </th>
								<th scope="col">Викладач</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($themes as $theme)
							<tr>
								<td> {{ $theme->theme_name }}
								</td>
								<td>{{$theme->surname}} {{$theme->name}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@guest

@else
@endguest
@endsection