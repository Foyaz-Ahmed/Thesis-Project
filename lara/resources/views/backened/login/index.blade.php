@extends('frontend.layouts.main')

@section('content')
    <br><br>
    <div class="login_page">
        <div class="form">
            <form action="" method="post" class="loginform">
                @csrf
                <h2>Login</h2>
                <input  type="text" name="username" placeholder="user name" id="id"/><br>
                <input type="password"  name="password" placeholder="password" id="password" /><br>
                <h5 style="color:red;">{{ session('msg') }}</h5> 
            <hr>
            <input id="submit" type="submit" name="submit" value="LOGIN" /><br>
            
            </form>
        </div>
    </div>
@endsection