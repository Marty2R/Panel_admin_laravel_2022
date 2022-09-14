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

    <h1>User Edite</h1>

    <div> <a href="/admin/user-manage">user-manage</a> / user edite</div>

    <table id="user_table"> <!-- Liste des utilisateurs -->

        <form action="/edite-user-form" method="POST">

            @csrf
            
            <input type="hidden" name="id" value="{{ $id }}">

            @foreach($user as $key => $data)

                <tr>

                    <td>Name</td>
                    <td><input style="display : block; margin : 10px; padding : 5px; width : 300px" type="text" name="name" value="{{ $data->name }}"></td>

                </tr>

                <tr>
                    <td>Last Name</td>

                    <td><input style="display : block; margin : 10px; padding : 5px; width : 300px" type="text" name="last_name" value="{{ $data->last_name }}"></td>

                </tr>

                <tr>

                    <td>Email</td>
                    <td><input style="display : block; margin : 10px; padding : 5px; width : 300px" type="text" name="email" value="{{ $data->email }}"></td>

                </tr>

                <button type="submit">Edite user</button>

            @endforeach

        </form>


    </table>

</section>

@else

    <section>

        <h1>acces restreint</h1>
        <p>connectez vous avec un compte admin pour accéder à cette page</p>

    </section>

@endif

@endsection