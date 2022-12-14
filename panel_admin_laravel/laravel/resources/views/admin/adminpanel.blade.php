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

            <div>
            @foreach($nb_users as $key => $data)
                <h2>Total registred : <span>{{ $data->count() }}</span></h2>
            @endforeach
            </div>

            <div class="bottom_div">

                <a href="#">View Details</a>

            </div>

        </div>

        <div class="box" style="background-color : #FEC107;">

            <div>

                <!-- @foreach($nb_users_today as $key => $data_today)
                    <h2>Today Registered users : <span>{{ $data_today->count() }}</span></h2>
                @endforeach -->

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

@else

    <section>

        <h1>acces restreint</h1>
        <p>connectez vous avec un compte admin pour accéder à cette page</p>

    </section>

@endif

@endauth

@endsection