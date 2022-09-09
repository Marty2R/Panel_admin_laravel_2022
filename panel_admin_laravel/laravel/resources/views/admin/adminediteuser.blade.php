@extends('template')
@section('content')

@auth

@if(Auth::user()->is_admin == 1)

<div class="header_div">

    <div id="search-bar">
    
        <input type="text" placeholder="Search : User by name">
        <button type="input"><i class="fas fa-coins"></i></button>
    
    </div>

    <a id="user" href="#"><i class="fas fa-user"></i></a>

</div>

<section id="home">

    <h1>Dashboard</h1>

    <a href="/admin">Dashboard</a>

    <div class="box_content">

        <div class="box" style="background-color : #0F6DFD;">

            

        </div>

    </div>

</section>

@else

    <section>

        <h1>acces restreint</h1>
        <p>connectez vous avec un compte admin pour accéder à cette page</p>

    </section>

@endif

@endauth

@endsection