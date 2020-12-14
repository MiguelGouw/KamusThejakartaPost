@extends('AdminView.layout/admin_main')

@section('title','Home')

@section('container')
@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif

@if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
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
  <h2 class="mb4">Approval Kata</h2>

  <table class="table">

   @foreach($users as $kata)
  <tr>
    <td>
        <a href="{{url('/penjelasanapproval')}}/<?php echo $kata->id ?>">{{ $kata->kata }}</a>
        <a class="btn btn-outline-danger"style="float: right" href = "{{url('/reject')}}/<?php echo $kata->id ?>">Reject</a>
        <a class="btn btn-outline-success"style="float: right" href = "{{url('/approve')}}/<?php echo $kata->kata ?>/<?php echo $kata->id ?>">Approve</a>
        
    </td>
  </tr>
 @endforeach

</table>
{{$users->links()}}
</div>
</div>

@endsection