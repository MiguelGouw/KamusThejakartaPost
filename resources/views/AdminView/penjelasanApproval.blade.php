@extends('AdminView.layout/admin_main')

@section('title','Penjelasan')

@section('container')

<div class="container mt-5">
  <div class="jumbotron mt-3">
  <h2 class="mb4">Penjelasan</h2>
  <table class="table">
   @foreach($users as $user)
 <tr>
 <td>{{$user->kata}}</td>
  </tr>
  <tr>
   <td>=> {{$user->penjelasan}}</td>
  </tr>

@endforeach
</table>

</div>
</div>
@endsection