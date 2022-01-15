@extends('layouts.app')

@section('content')
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-primary text-right">
                {{$message}}
            </div>
        @endif
    </div>


    <table>
        <thead>
        <tr>
            <th> مدينه الاقلاع</th>
            <th>مدينه الوصول</th>
            <th>توقيت الرحله</th>
            <th>عدد الاطفال</th>
            <th>تاريخ الوصول</th>
            <th>تاريخ المغادره</th>
            <th>يوم انشاء الحجز</th>
            <th>تعديل بيانات</th>
            <th></th>
        </tr>
        </thead>

        @foreach($rooms as $book)
            <tbody>
            <tr>
                <td>{{$book->city_from}}</td>
                <td>{{$book->city_to}}</td>
                <td>{{$book->trip_time}}</td>
                <td>{{$book->children}}</td>
                <td>{{$book->date_arrive}}</td>
                <td>{{$book->date_leave}}</td>
                <td>{{$book->created_at}}</td>
                <td>

                        <a class="btn btn-primary" href="{{route('back',$book->id)}}">رجوع الحجز</a>
                        <a class="btn btn-secondary" href="{{route('force',$book->id)}}">حذف الحجز</a>
                </td>

            </tr>
            </tbody>
        @endforeach
    </table>

@endsection

