@extends('template')
@section('content')

<section id="home">

    <h1>Password Edite</h1>

    <div> <a href="/dashboard">Dashboard</a> / password edite </div>

    <div class="box_content">

    <form action="/change-password" method='POST'>

    @csrf

        <div class="form-group">

            <!-- Id de l'utilisateur -->
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

            <input style="display : block; margin : 10px; padding : 5px; width : 300px" type="password" name="actual_password" placeholder="Your actual password">
            <input style="display : block; margin : 10px; padding : 5px; width : 300px" type="password" name="new_password" placeholder="Your new password">

            <button type="submit" class="btn btn-primary">Edite Password</button>

        </div>

    </form>

    </div>

</section>

@endsection