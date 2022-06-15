@extends('layouts.main')

@section('title','藝起•繪星-留言板')
<style>

.form_post {
    display: flex;
    align-items: center;
    padding-top: 40px;
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form_post .checkbox {
  font-weight: 400;
}

.form_post .form-floating:focus-within {
  z-index: 2;
}

.form_post input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form_post input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
@section('content')

<div class="borad text-center">
<!-- 留言板區塊 -->

<BR>
@foreach ($posts as $post)

    <div class="row">
        <div class="col"></div>
        <div class="col-lg-5 text-start border border-3 border-warning rounded btn-warning">
            <p>標題：{{$post['title']}}</p>
            {{$post['name']}}說：{{$post['content']}}
        </div>
        <div class="col"></div>
    </div>
    <BR>
    
@endforeach

</div>

<BR>

<!-- 註冊留言 -->
<main class="form_post text-center">

  <form method="POST" action="{{ route('blog') }}">
    @csrf
    
    <h1 class="h3 mb-3 fw-normal">留言</h1>
    @if ($errors->any())
        <div class="fail">{{ $errors->first() }}</div>
    @endif
    <div class="form-floating">
      <input type="text" name="name" class="form-control" id="floatingInputnName" placeholder="" value="{{old('name')}}">
      <label for="floatingInputnName">暱稱</label>
    </div>
    <div class="form-floating">
      <input type="text" name="title" class="form-control" id="floatingInputTitle" placeholder="" value="{{old('title')}}">
      <label for="floatingInputTitle">標題</label>
    </div>
    <div class="form-floating">
      <textarea type="text" name="content" class="form-control" id="floatingTextarea" placeholder="" style="height: 100px"></textarea>
      <label for="floatingTextarea">內容</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">發布</button>
    <p class="mt-5 mb-3 text-muted">© 2022</p>
  </form>
</main>
@stop