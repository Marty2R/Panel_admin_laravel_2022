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

    <a href="/admin">Dashboard</a>

    <div class="box_content">

        <div class="box" style="background-color : #0F6DFD;">

            <div>

                <h2>Total Registered users : <span>1</span></h2>

            </div>

            <div class="bottom_div">

                <a href="#">View Details</a>

            </div>

        </div>

        <div class="box" style="background-color : #FEC107;">

            <div>

                <h2>Yesterday Registered Users : <span>0</span></h2>

            </div>

            <div class="bottom_div">

                <a href="#">View Details</a>

            </div>

        </div>

        <div class="box" style="background-color : #1A8754;">

            <div>

                <h2>Registered Users in Last 7 Days : <span>0</span></h2>

            </div>

            <div class="bottom_div">

                <a href="#">View Details</a>

            </div>

        </div>

                <div class="box" style="background-color : #DC3544;">

            <div>

                <h2>Registered Users in Last 30 Days : <span>1</span></h2>

            </div>

            <div class="bottom_div">

                <a href="#">View Details</a>

            </div>

        </div>

        </div>

    </div>

</section>


@endsection