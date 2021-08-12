<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="container mt-5">

    <form action="" method="post" action="{{ route('contact.store') }}">

        @csrf

        <div class="form-group">
            <p>Выберите начало фильма:
                <input type="date" name="calendar" id="calendar"></p>

            <label>ID in array</label>
            <input type="text" class="form-control" name="id" id="id">
            <label>Name in array</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <input type="submit" name="send" value="поиск" class="btn btn-dark btn-block">

    </form>
</div>

<table style="width:100%">
    @if(isset($id_test))
        <tr>
            <th>ID кино театра</th>
            <th>Название кино зала</th>

        </tr>

        @foreach($id_test as $id_tests)

            <tr>

                <td>{{$id_tests->id}}</td>
                <td>{{$id_tests->name}}</td>
                <td>{{$id_tests->created_at}}</td>
                <td>{{$id_tests->updated_at}}</td>

        @endforeach

    @elseif(isset($name_test))
        <tr>
            <th>ID кино фильма</th>
            <th>Название кино фильма</th>
            <th>Начало кино зала</th>
            <th>Длина фильма</th>
            <th>Конец фильма</th>
        </tr>
        @foreach($name_test as $name_tests)
            <tr>
                <td>{{$name_tests->id}}</td>
                <td><a href="{{route('contact.show',$name_tests->id)}}">{{$name_tests->title}}</a></td>
                <td>{{$name_tests->film_start}}</td>
                <td>{{$name_tests->film_go}}</td>
                <td>{{$name_tests->film_end}}</td>
        @endforeach
        @elseif(isset($calendar_tests))
        <tr>
            <th>ID кино фильма</th>
            <th>Название кино фильма</th>
            <th>Начало кино зала</th>
            <th>Длина фильма</th>
            <th>Конец фильма</th>
        </tr>
        @foreach($calendar_tests as $calendar_testss)
            <tr>
                <td>{{$calendar_testss->id}}</td>
                <td>{{$calendar_testss->title}}</td>
                <td>{{$calendar_testss->film_start}}</td>
                <td>{{$calendar_testss->film_go}}</td>
                <td>{{$calendar_testss->film_end}}</td>
        @endforeach
    @endif
</table>

</body>

</html>
