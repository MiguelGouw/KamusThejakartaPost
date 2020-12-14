@extends('AdminView.layout/admin_main') 

@section('title','Penjelasan') 

@section('container')
<style>
.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  border-radius: 0.3rem;
/* background: #000064;  old browsers fallback color */
background-color:#04091e; 
opacity: 80%;
/* background: linear-gradient(to right, #1BADD8, #00003E); */
}
td,h2{
    color:#fff;
}
</style>
<div class="container mt-5">
	<div class="jumbotron mt-3">
		<h2 class="mb4">Penjelasan</h2>
		<table class="table">
		 @foreach($users as $user)
		<tr>
			<tr>
				<td>{{$user->kata}}
					<a class="btn btn-outline-secondary"style="float: right" href ="{{url('/data_edit')}}/<?php echo $user->id ?>">Edit</a>
					<a class="btn btn-outline-danger"style="float: right" href ="{{url('/delete')}}/<?php echo $user->id ?>">Delete</a>	
					<br>=> {{$user->penjelasan}}
				</td>
			</tr>
		<tr></tr>
		 @endforeach
			@if(isset($tambahan) && !empty($tambahan))
				@foreach($tambahan as $tambah)
				<tr>
					<td>{{$tambah->kata}}
						<a class="btn btn-outline-secondary"style="float: right" href ="{{url('/data_edit')}}/<?php echo $tambah->id ?>">Edit</a>
						<a class="btn btn-outline-danger"style="float: right" href ="{{url('/delete')}}/<?php echo $tambah->id ?>">Delete</a>
						<br>=> {{$tambah->penjelasan}}
					</td>
				</tr>
				@endforeach
			@else
			<p></p>
			@endif
		</table>
	</div>
</div>
@endsection