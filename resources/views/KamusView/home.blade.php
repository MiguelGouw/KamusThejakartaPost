@extends('KamusView.layout/main')

@section('title','Home')

@section('container')
<div class="row">
  <div class="container col-md-10">
    <div class="jumbotron text-center">
      <h1>Input Kata baru</h1>
      <input class="form-control mr-sm-2" type="text" placeholder="Kata baru">
      <button class="btn btn-outline-success my-2 my-sm-3" type="submit">Input</button>
    </div>
  </div>
</div>
<div class="row">
  <div class="container col-md-4">
    <div class="jumbotron text-center">
      <h1>text</h1>
    </div>
  </div>
  <div class="container col-md-6">
    <div class="jumbotron text-center">
      <h1>text</h1>
    </div>
  </div>
</div>
@endsection