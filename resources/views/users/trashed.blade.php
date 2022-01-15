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
            <th>اسم المستخدم</th>
            <th>البريد الالكتروني</th>
            <th>الوظيفه</th>

            <th>تعديل بيانات</th>
            <th></th>
        </tr>
        </thead>
        @foreach($users as $book)
            <tbody>
            <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->email}}</td>
                <td>{{$book->role}}</td>

                <td>


                        <a class="btn btn-primary" href="{{route('user.back',$book->id)}}">رجوع</a>
                        <a class="btn btn-secondary" href="{{route('user.force',$book->id)}}">حذف من السجلات</a>
                </td>

            </tr>
            </tbody>
        @endforeach


    </table>
    {{ $users->links('pagination::bootstrap-4') }}

@endsection


