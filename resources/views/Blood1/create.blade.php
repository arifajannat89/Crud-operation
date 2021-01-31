@extends('Blood1.layout')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



<div class="container">
    <a class="btn btn-primary mt-5 mb-5" href="{{route('Blood1.index')}}">Back</a>
	
     <form action="{{route('Blood1.store')}}" method="POST"  enctype="multipart/form-data">
      @csrf
     <b><b>Member ID:  <input type="text" name="Member_id" placeholder="Member ID(XXX)" class="form-control">
     <br><br>

      <b>Member Name:  <input type="text" name="Member_name" placeholder="Full Name" class="form-control">
     <br><br>

      <b>Blood Group:  <input type="text" name="Blood_Group" placeholder="Blood_Group" class="form-control">
     <br><br>

      <b>Contact Number:<input type="text" name="Contact_Number" placeholder="Contact_Number" class="form-control">
     <br><br>

      <b>Address:   <input type="text" name="Address" placeholder="Address" class="form-control">
     <br> <br>
    <button class="btn btn-secondary type="submit" ">Register</button>

     </form>

</div>