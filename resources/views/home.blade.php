@extends('master')
@section('content')

    <img src="/bsp_home.png" alt="img"/>
    <h1 class=" text-center text-warning">WELCOME TO BSP ADMIN</h1>
    <div class="container text-center mb-3">
        <a href="{{route('card_create')}}" class="btn btn-info" role="button">CREATE A NEW CARD</a>
        <a href="{{route('card_list')}}" class="btn btn-info" role="button">CARD LISTS</a>
    </div>

@endsection



