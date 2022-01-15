@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="alert alert-primary">{{$room->city_from}} : مدينه الاقلاع </div>
        <div class="alert alert-primary">{{$room->city_to}} : مدينه الوصول </div>
        <div class="alert alert-primary">{{$room->trip_time}} : تاريخ الرحله  </div>
        <div class="alert alert-primary">{{$room->children}} : عدد الاطفال</div>
        <div class="alert alert-primary">{{$room->date_arrive}} : موعد الوصول   </div>
        <div class="alert alert-primary">{{$room->date_leave}} : موعد المغادره</div>

    </div>
@endsection
