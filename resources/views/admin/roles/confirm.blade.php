@extends('admin.master.layouts')

@section('title','Confirmation to Delete')

@section('content')
    {!! Form::open(['method'=>'delete','route'=>['admin.roles.destroy',$role->id]]) !!}
    <div class="alert alert-danger">
        <div class="alert alert-danger">
            <strong>Warning</strong> You are about to delete a user. This action can not be undone. Are U sure you want to continue ?
        </div>
        {!! Form::submit('Yes, Delete This User',['class'=>'btn btn-danger']) !!}
        <a href="{{ route('admin.roles.index') }}" class="btn btn-success"> <strong>No Get Me Out Of Here</strong></a>
    </div>
    {!! Form::close() !!}
@endsection

