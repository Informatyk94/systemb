@extends('master')

@section('content')
    <div class="title_home">
        <a href="/panel">
            <h1  class="title">SYSTEM B</h1>
        </a>
    </div>

    <div class="container">
            <div class="row">
                <div class="login_button">
                    <a href="/login" class="btn btn-danger button_menu" role="button">Login</a>
                </div>
               <div class="register_button">
                   <a href="/register" class="btn btn-danger button_menu" role="button">Register</a>
               </div>
                <div style="clear: both"></div>




            </div>
    </div>
@endsection
