@extends('layouts.app')

@section('content')

    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-primary">
                {{$message}}
            </div>
        @endif
    </div>

    <table style="margin-bottom: 6px">
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
        @if($rooms->count() == true)
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
                     <form action="{{route('rooms.destroy',$book->id)}}" method="POST">
                         @csrf
                         @method('DELETE')
                         <a class="btn btn-primary" href="{{route('rooms.edit',$book->id)}}">تعديل</a>
                         <a class="btn btn-secondary" href="{{route('rooms.show',$book->id)}}">عرض</a>
                         <button class="btn btn-danger" type="submit">حذف</button>
                     </form>
                 </td>

            </tr>
            </tbody>
        @endforeach
        @elseif($rooms->count() !== true)
            <div class="alert alert-primary text-center mt-3">
                {{__('لا يوجد عمليات حجز')}}
            </div>
        @endif

    </table>
    {{ $rooms->links('pagination::bootstrap-4') }}

@endsection
