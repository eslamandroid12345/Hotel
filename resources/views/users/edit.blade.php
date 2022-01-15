@extends('layouts.app')

@section('content')

    <div class="container text-right">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-primary">
                    {{$error}}
                </div>
            @endforeach
        @endif


        <form action="{{route('users.update',$user->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="text" name="name" value="{{$user->name}}">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="email" name="email" value="{{$user->email}}">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="text" name="role" value="{{$user->role}}">
            </div>


            <div class="form-group">
            </div>

            <div class="form-group">
                <button class="btn btn-primary mt-4 py-2" type="submit">تعديل بيانات المستخدم</button>
            </div>




        </form>

    </div>

@endsection


