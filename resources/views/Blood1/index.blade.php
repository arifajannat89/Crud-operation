@extends('Blood1.layout')

@section('content')



<div class="container mt-5">
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  <b><h1 class="text-center"><b><b>BLOOD BANK</h1>
	<a href="{{route('Blood1.create')}}" class="btn btn-info mb-2">Add</a>

	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Member_id</th>
      <th scope="col">Member_Name</th>
      <th scope="col">Blood_Group</th>
      <th scope="col">Contact_Number</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($Blood1 as $Blood)
         <tr>
         	<td>{{$Blood->Member_id}}</td>
         	<td>{{$Blood->Member_name}}</td>
         	<td>{{$Blood->Blood_Group}}</td>
         	<td>{{$Blood->Contact_Number}}</td>
         	<td>{{$Blood->Address}}</td>
          <td>
             <form action="{{ route('Blood1.destroy', $Blood->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                     
                      

                        <a class="btn btn-warning" href="{{ route('Blood1.edit', $Blood->id) }}">Edit
                            

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                          Delete

                        </button>
                    </form>


         </tr>
        @endforeach

  </tbody>




</div>