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
								<th scope="col">Інформація</th>
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
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title text-center" id="exampleModalLongTitle">Важливо!</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="font-size: 18px;">
				<div class="alert alert-warning" role="alert">
					Якщо ви є зареєстрованим користувачем увiйдiть до власного кабiнету, інакше ваші результати не
					будуть збережені.
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Вибрати тему</button>
				<a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Увійти</button></a>
			</div>
		</div>
	</div>
</div>
@guest
<script>
	window.onload = function () {
		$('#myModal').modal('show');
	};
</script>
@else
@endguest
@endsection