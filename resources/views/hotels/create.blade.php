@extends('layouts.app')

@section('content')
<div class="all">
    <div class="text-right lop">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-primary">
                    {{$error}}
                </div>
            @endforeach
        @endif


        <form action="{{route('rooms.store')}}" method="POST">
            @csrf
            <input type="hidden" name="client_id" value="{{Auth::id()}}">

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="text" name="city_from" placeholder="برجاء ادخال مدينه الاقلاع">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="text" name="city_to" placeholder="برجاء ادخال مدينه الوصول">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="time" name="trip_time" placeholder="موعد الرحله">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="number" name="children" placeholder="عدد الاطفال - البالغين">
            </div>

            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="date" name="date_arrive">
            </div>


            <div class="form-group">
                <input class="form-control mt-3 py-4 text-right" type="date" name="date_leave">
            </div>

            <div class="form-group">
                <button class="btn btn-primary mt-4 py-2" type="submit">حجز الرحله</button>
            </div>




        </form>

    </div>
</div>
@endsection
