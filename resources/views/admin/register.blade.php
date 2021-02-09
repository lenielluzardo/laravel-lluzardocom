@extends('layouts.master')

@section('content')

@include('partials.errors')

<section class="section-container">

    @if(Session::has('fail'))
        <div>
            {{Session::get('fail')}}
         </div>
    @endif

    <div class="contact_form-container">
      <form class="contact_form" action="{{url('/login')}}" method="post">

        <label class="f_lbl" for="name">Name</label>
        <input class="f_field" id="name" name="name" type="text" value="{{old('name')}}">

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


        <label class="f_lbl" for="nickname">Nickname</label>
        <input class="f_field" id="nickname" name="nickname" type="text" value="{{old('nickname')}}">

        @error('nickname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="email">Email</label>
        <input class="f_field" id="email" name="email" type="text" value="{{old('email')}}">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="password">Password</label>
        <input class="f_field" id="password" name="password" type="password" >

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror

        <label class="f_lbl" for="confirm_password">Confirm Password</label>
        <input class="f_field" id="confirm_password" name="confirm_password" type="password" >

        @error('confirm_password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror

        <input id="not_a_robot" class="f_chk" type="checkbox" name="is_human" value="on">
        <label for="not_a_robot" > I'm not a robot</label> <br>

        <div class="submit-container">
            {{ csrf_field() }}
          <input type="submit" name="f_button" id="f_button" class="button" value="Login">
        </div>

      </form>
    </div>

  </section>
    @endsection