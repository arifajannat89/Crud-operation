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
	
     <form action="{{route('Blood1.update', $blood_bank->id)}}" method="POST">
      @csrf
      @method('PUT')
      Member ID:     <input type="text" name="Member_id" placeholder="Member ID(XXX)" class="form-control" value="{{$blood_bank->Member_id}}">
     <br><br>
      Member_Name:   <input type="text" name="Member_name" placeholder="Full Name" class="form-control" value="{{$blood_bank->Member_name}}">
     <br><br>
      Blood_Group:   <input type="text" name="Blood_Group" placeholder="Blood_Group" class="form-control" value="{{$blood_bank->Blood_Group}}">
     <br><br>
      Contact_Number:<input type="text" name="Contact_Number" placeholder="Contact_Number" class="form-control"  value=" {{$blood_bank->Contact_Number}}">
     <br><br>
      Address:       <input type="text" name="Address" placeholder="Address" class="form-control" value="{{$blood_bank->Address}}">
     <br> <br>
    <button type="submit" class="btn btn-success">update
    	
    </button>

     </form>

</div>