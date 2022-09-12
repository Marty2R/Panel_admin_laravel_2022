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

    <h1>Dashboard</h1>

    <a href="/dashboard">Dashboard</a>

    <div class="box_content">

        <div class="box" style="background-color : #0F6DFD;">

            <div>

                <h2>Welcome back {{ Auth::user()->name }}</h2>

            </div>

            <div class="bottom_div">

                <a href="/profile">View Profile</a>

            </div>

        </div>

    </div>

</section>

@endsection