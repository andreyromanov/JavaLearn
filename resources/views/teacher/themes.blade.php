@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<h3> Список моїх тем</h3>
				</div>

				<div class="col-md-12 text-right" style="padding:20px;">
					<a href="themes/newtheme" style="">
						<button type="button" class="btn btn-success btn-lg text-center btn-block"> Створити тему
						</button></a>

				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead class=thead-light>
							<tr>
								<th scope="col">Назва теми </th>
								<th scope="col">Дія</th>
							</tr>

						</thead>
						<tbody>

							@foreach ($themes as $theme)
							<tr>
								<td> {{ $theme->theme_name }}
								</td>
								<td>
									<div class="text-center">
										<a href="themes/delete/{{ $theme->theme_id }}" style=""><button type="button"
												class="btn btn-danger  text-center">Видалити</button></a>
										<a href="themes/edit/{{ $theme->theme_id }}"><button type="button"
												class="btn btn-primary text-center">Редагувати</button></a>
									</div>
								</td>
							</tr>

							@endforeach

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection