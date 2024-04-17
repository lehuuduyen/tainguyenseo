@extends('layouts.auth-master')

@section('content')
<form method="post" action="{{ route('login.perform') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <h1 class="h3 mb-3 fw-normal">Đăng nhập</h1>

    @include('layouts.partials.messages')

    <div class="form-group form-floating mb-3">
        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
        <label for="floatingName">Tên đăng nhập</label>
        @if ($errors->has('username'))
        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
    </div>

    <div class="form-group form-floating mb-3">
        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        <label for="floatingPassword">Mật khẩu</label>
        @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng nhập</button>
</form>
@endsection