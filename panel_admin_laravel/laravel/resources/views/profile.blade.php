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

<div id="profile">

<a href="#">edite</a>

    <table id="user_table"> <!-- Info utilisateur -->

        <tr> <!-- Name -->

            <td>Name</td>
            <td>{{ Auth::user()->name }}</td>

        </tr>

        <tr> <!-- Last Name -->

            <td>Last Name</td>
            <td>{{ Auth::user()->last_name }}</td>

        </tr>

        <tr> <!-- E-mail -->

            <td>E-mail</td>
            <td>{{ Auth::user()->email }}</td>

        </tr>

        <tr> <!-- Password -->

            <td>Password (crypted)</td>
            <td>{{ Auth::user()->password }}</td>

        </tr>

        <tr> <!-- Created at -->

            <td>Reg. Date </td>
            <td>{{ Auth::user()->created_at }}</td>

        </tr>

    </table>

</div>

@endsection