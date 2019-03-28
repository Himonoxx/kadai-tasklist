@extends('layout.app')
@section('content')
    @include('tasks.index',['users'=>$users])
@endsection