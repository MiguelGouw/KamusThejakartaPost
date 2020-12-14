@extends('KamusView.layout/main')

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
<div class="container mt-3">
  	<div class="jumbotron mt-3">
	  	<h2 class="mb4">Edit Kata</h2>
	  	<form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		@if (session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
		@endif
		  	<table class="table">
		  		@foreach($users as $user)
			  		<tr>
				  		<td>Nama</td>	
				  		<td>
				  			<input type="text" class="form-control" name="name" value='{{$user->name}}' readonly>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td>Kata</td>	
				  		<td>
				  			<input type="text" class="form-control" name="kata" value='{{$user->kata}}' readonly>
				  		</td>
			  		</tr>
			  		<tr>
				  		<td>Penjelasan</td>	
				  		<td>
				  			<textarea  rows="4" cols="80" type = 'text' name = 'penjelasan'>{{$user->penjelasan}}</textarea>
				  		</td>
			  		</tr>
			  		<tr>
						<td colspan = '2'>
						<button type="submit" class="btn btn-outline-primary">Update</button>
						</td>
					</tr>
		  		@endforeach
			</table>
		</form>
	</div>
</div>
@endsection