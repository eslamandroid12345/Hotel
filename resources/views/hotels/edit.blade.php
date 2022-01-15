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


        <form action="{{route('rooms.update',$room->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="client_id" value="{{Auth::id()}}">

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="text" name="city_from" value="{{$room->city_from}}">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="text" name="city_to" value="{{$room->city_to}}">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="time" name="trip_time" value="{{$room->trip_time}}">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="number" name="children" value="{{$room->children}}">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="date" name="date_arrive" value="{{$room->date_arrive}}">
            </div>


            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="date" name="date_leave" value="{{$room->date_leave}}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary mt-4 py-2" type="submit">تعديل الرحله</button>
            </div>




        </form>

    </div>
@endsection

