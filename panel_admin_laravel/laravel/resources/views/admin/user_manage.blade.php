@extends('template')
@section('content')

@if(Auth::user()->is_admin == 1)

<div class="header_div">

    <div id="search-bar">
    
        <input type="text" placeholder="Search : User by name">
        <button type="input"><i class="fas fa-coins"></i></button>
    
    </div>

    <a id="user" href="#"><i class="fas fa-user"></i></a>

</div>

<section id="home">

    <h1>Manage User</h1>

    <a href="/user_manage">user-manage</a>

    <table id="user_table"> <!-- Liste des utilisateurs -->

    @foreach($users as $key => $data)

        <tr>

            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->last_name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->created_at }}</td>
        </tr>

    @endforeach

    </table>

</section>

@else

    <section>

        <h1>acces restreint</h1>
        <p>connectez vous avec un compte admin pour accéder à cette page</p>

    </section>

@endif

@endsection