@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="alert alert-primary">{{$user->name}} : اسم المستخدم </div>
        <div class="alert alert-primary">{{$user->email}} : البريد الالكتروني </div>
        <div class="alert alert-primary">{{$user->role}} : الوظيفه  </div>

    </div>
@endsection
