
@extends('master')
@section('content')
<div class='bg-success'>
  <h1 class=" text-center text-warning mt-4">LIST OF ALL CARDS</h1>
  <a href="{{ route('home') }}" class="btn btn-danger btn-info my-4 float-right mr-5 "> Back </a>
         @if ($card_lists)
            @foreach ($card_lists as $card_list)
              <div class="container ">

                  <div class="card mb-4" style="width:400px">
                     <div class="card-body">
                        <h4 class="card-title">Name: {{$card_list->name}}</h4>
                        <h5 class="card-text">Contact No: {{$card_list->contacts}}</h5>
                        <h5 class="card-text">Email: {{$card_list->email}}</h5>
                        <h5 class="card-text">Address: {{$card_list->address}}</h5>
                        <p class="card-text">Description: {{$card_list->description}}.</p>

                         <a href="{{ route('card_edit', ['id' => $card_list->id]) }}" class="btn btn-primary">
                                    Edit Profile
                         </a>
                          <a href="{{ route('card_delete', ['id' => $card_list->id]) }}" class="btn btn-primary">
                                    Delete Profile
                         </a>
                     </div>
                  </div>
              </div>
            @endforeach
        
        }
 
        @endif

</div>
@endsection