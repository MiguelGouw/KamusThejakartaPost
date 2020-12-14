@extends('KamusView.layout/main')

@section('title','Home')

@section('container')
@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif
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
  <div class="jumbotron">
  <h2 class="mb4">Kamus Kata</h2>

  <table class="table">

   @foreach($users as $user)
  <tr>
    <td>
        <a href="{{url('/penjelasan')}}/<?php echo $user->kata ?>">{{ $user->kata }}</a>
        <!-- <a class="btn btn-outline-danger"style="float: right" href = "{{url('/delete')}}/<?php echo $user->id ?>">Delete</a>
        <a class="btn btn-outline-secondary"style="float: right" href = "{{url('/data_edit')}}/<?php echo $user->id ?>">Edit</a>   -->
        
    </td>
  </tr>
 @endforeach

</table>
{{$users->links()}}
</div>
</div>

@endsection