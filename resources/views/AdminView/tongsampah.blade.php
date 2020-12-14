@extends('AdminView.layout/admin_main') 
@section('title','Home') 
@section('container')
<div class="container mt-3">
	<div class="jumbotron">
		<h3 class="mb4" style="color: black">Kata yang sudah dihapus</h3>
		<table class="table">
		 @foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->kata }}</td>
		</tr>
		 @endforeach
		</table>
		 @if($users->count()) 
		 	{{$users->render()}} 
		 @endif
	</div>
</div>
@endsection