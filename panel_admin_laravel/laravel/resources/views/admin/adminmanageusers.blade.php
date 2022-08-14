@extends('template')
@section('content')

<div class="header_div">

    <div id="search-bar">
    
        <input type="text" placeholder="Search : User by name">
        <button type="input"><i class="fas fa-coins"></i></button>
    
    </div>

    <a id="user" href="#"><i class="fas fa-user"></i></a>

</div>

<section id="home">

    <h1>Manage users</h1>

    <p> <a href="/admin">Dashboard</a> / Manage users </p>

</section>

@endsection