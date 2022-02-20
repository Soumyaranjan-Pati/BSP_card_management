@extends('master')
@section('content')

<form class="text-center border border-light p-5" method="POST" action="/create">

        {{ csrf_field() }}
        
    <p class="h4 mb-4">Create A New Card</p>

    <input type="text" name="name" class="form-control mb-4" placeholder="Enter Your Name">
    <input type="text" name="contacts"  class="form-control mb-4 " placeholder="Enter Your Contact No">
    <input type="email" name="email"  class="form-control mb-4" placeholder="Enter Your E-mail">
    <input type="text" name="address" class="form-control mb-4" placeholder="Enter Your Single Address">
    <textarea name="description" class="form-control"  rows="3"  placeholder="Enter Your Description"></textarea>
   
    <button class="btn btn-info btn-block my-4" type="submit">Submit Please</button>
    <a href="{{ route('home') }}" class="btn btn-danger btn-info btn-block my-4">Back</a>
                                       
                                   
</form>

@endsection