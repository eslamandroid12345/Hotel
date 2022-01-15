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
                        <form action="{{route('users.destroy',$book->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-primary" href="{{route('users.edit',$book->id)}}">تعديل</a>
                            <a class="btn btn-secondary" href="{{route('users.show',$book->id)}}">عرض</a>
                            <button class="btn btn-danger" type="submit">حذف</button>

                        </form>
                    </td>

                </tr>
                </tbody>
            @endforeach


    </table>
    {{ $users->links('pagination::bootstrap-4') }}

@endsection

