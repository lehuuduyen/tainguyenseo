@auth
@if(auth()->user()->role == 1)
@extends('admin.index')

@section('main_content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h2> {{ $headline }} </h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $headline }}</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                @if($mode == 'edit')
                {!! Form::model($rule, [ 'route' => ['regulations-admin.update', $rule->id], 'method' => 'put' ]) !!}
                @else
                {!! Form::open([ 'route' => 'regulations-admin.store', 'method' => 'post' ]) !!}
                @endif
                <div class="form-group">
                    <label for="regulation">Quy định: </label>
                    {{ Form::textarea('regulation', null, [ 'class'=>'form-control', 'id' => 'regulation']) }}
                </div>
                <button type="submit" class="btn btn-primary">{{ $button }}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
@endif
@endauth