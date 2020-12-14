@extends('KamusView.layout/main')

@section('title','Home')
	
@section('container')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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
<div class="container">
	<div class="jumbotron">
  <h2>Add Data</h2>
  	<form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Masukan Nama" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="kata">Kata</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="kata" placeholder="Masukan Kata" name="kata">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="penjelasan">Penjelasan</label>
      <div class="col-sm-10">          
        <textarea rows="4" cols="80" type="text" class="form-control" id="kata" placeholder="Masukan Penjelasan" name="penjelasan"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Add</button>
      </div>
    </div>
  </form>
</div>
</div>
@endsection