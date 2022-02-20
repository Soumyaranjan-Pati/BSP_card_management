
@extends('master')
@section('content')
 <form class=" border border-light p-5" method="POST" action="/update">

        {{ csrf_field() }}

      @if ($data)
        <p class=" text-center h4 mb-4">Edit Your Details</p>
        <input type="hidden" name="id" value="{{ $data->id }}">
        <div>
          <label> Name:</label>
          <input type="text" name="name" value="{{ $data->name }}" class="form-control mb-4" placeholder="Enter Your Name">
        </div>
        <label> Contact No:</label>
        <input type="text" name="contacts" value="{{ $data->contacts }}"  class="form-control mb-4" placeholder="Enter Your Contact No">
        </div>
        <label> Email:</label>
        <input type="email" name="email" value="{{ $data->email }}" class="form-control mb-4" placeholder="Enter Your E-mail">
        </div>
        <label> Single Address:</label>
        <input type="text" name="address" value="{{ $data->address }}"  class="form-control mb-4" placeholder="Enter Your Single Address">
        </div>
        <label> Description:</label>
        <textarea name="description" class="form-control" value="{{ $data->description}}" rows="3"  placeholder="Enter Your Description"></textarea>
        </div>
     @endif
    <button class="btn btn-info btn-block my-4" type="submit">Submit Please</button>
    <a href="{{ route('card_list') }}" class="btn btn-danger btn-info btn-block my-4"> Back </a>
                                       
                                   
</form>

@endsection