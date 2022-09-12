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

    <div> <a href="/profile">profile</a> / edite</div>

    <form action="/profile" method='POST'>

        @csrf

        <div class="form-group">

            <!-- Id de l'utilisateur -->
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

            <input style="display : block; margin : 10px; padding : 5px; width : 300px" type="text" name="name" value="{{ Auth::user()->name }}">
            <input style="display : block; margin : 10px; padding : 5px; width : 300px" type="text" name="last_name" value="{{ Auth::user()->last_name }}">
            <input style="display : block; margin : 10px; padding : 5px; width : 300px" type="email" name="email" value="{{ Auth::user()->email }}">

            <!-- Mot de passe initial -->
            <input type="hidden" name="password" value="{{ Auth::user()->password }}">
            <!-- Date de la modification -->
            <input type="hidden" name="updated_at" value="{{ date('Y-m-d H:i:s') }}">
            <!-- Date de la création initial -->
            <input type="hidden" name="created_at" value="{{ Auth::user()->created_at }}">
            <!-- Rôle de l'utilisateur -->
            <input type="hidden" name="is_admin" value="{{ Auth::user()->is_admin }}">

            <button type="submit" class="btn btn-primary">Edite</button>
    
        </div>

    </form>

</div>

@endsection