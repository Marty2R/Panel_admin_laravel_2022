@extends('template')
@section('content')

<div class="header_div">

    <p>Registration and Login System</p>

</div>

<section id="home">

    <h1>User Registration & Login and User Management System With admin panel</h1>

    <a href="/">Home</a>

    <div class="box_content">

        <div class="box" style="background-color : #0F6DFD;">

            <div>

                <h2>Not registers Yet</h2>

            </div>

            <div class="bottom_div">

                <a href="/register">Signup Here</a>

            </div>

        </div>

            <div class="box" style="background-color : #FEC107;">

                <div>

                    <h2>Already Registered</h2>

                </div>

                <div class="bottom_div">

                    <a href="login">Login Here</a>

                </div>

            </div>

            <div class="box" style="background-color : #DC3544;">

                <div>

                    <h2>Admin Panel</h2>

                </div>

                <div class="bottom_div">

                    <a href="admin/login">Login Here</a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection