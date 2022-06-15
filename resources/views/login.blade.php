@extends('layouts.main')

@section('title','藝起•繪星-登入')
<style>

.form-signin {
    display: flex;
    align-items: center;
    padding-top: 40px;
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
@section('content')
<BR>
<main class="form-signin text-center">
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <img class="mb-4" src="{{ asset('picture/icon.png') }}" alt="" width="100" >
    <h1 class="h3 mb-3 fw-normal">請登入</h1>
    @if ($errors->any())
        <div class="fail">{{ $errors->first() }}</div>
    @endif
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{old('email')}}">
      <label for="floatingInput">帳號</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">密碼</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> 記住我
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">登入</button>
    <p class="mt-5 mb-3 text-muted">© 2022</p>
  </form>
</main>

@stop