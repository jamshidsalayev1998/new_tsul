@extends('auth.layout')
@section('content')
    <div style="position: absolute; overflow: hidden">
{{--        <img src="{{asset('img/test_background.jpg')}}" alt="" style="max-width: 100%; height: auto ; overflow: hidden">--}}
    </div>
    <div class="login-box" >
      <div class="login-logo" style="z-index: 100 !important;">
{{--        <a href="/"><b>Test</b>INTALIM</a>--}}

      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body text-center">
            <a style="font-size: 30px" href="/"><b>TSUL</b>admin</a>
          <p class="login-box-msg">Kirish</p>

          <form id="login_form" method="POST" action="{{ route('login') }}">
               @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="username" placeholder="Login">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fa fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Parol">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>

          </form>

          <div class="social-auth-links text-center mb-3">
            <button form="login_form" class="btn btn-block btn-primary">
             Kirish
            </button>

          </div>
        </div>
      </div>
    </div>
@endsection
