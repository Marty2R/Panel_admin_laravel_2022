@extends('template')
@section('content')

<div class="header_div">

    <div id="search-bar">
    
        <input type="text" placeholder="Search : User by name">
        <button type="input"><i class="fas fa-coins"></i></button>
    
    </div>

    <a id="user" href="#"><i class="fas fa-user"></i></a>

</div>

<h1>{{ Auth::user()->name }}' Profile</h1>

@endsection