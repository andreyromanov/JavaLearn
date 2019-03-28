@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><h4> Список тем</h4></div>

				
					<table class="table table-bordered">
						<thead class=thead-light>
							<tr>
								<th scope="col">Название темы </th>
								<th scope="col">Информация</th>
							</tr>

						</thead>
						<tbody>
							@foreach ($themes as $theme)
							<tr>
								<td> {{ $theme->theme_name }} 
								</td>
								<td><a href="theme/{{$theme->theme_id}}">Перейти</a></td>
							</tr>

							@endforeach

						</tbody>
					</table>

			</div>
		</div>
	</div>
</div>
@endsection


