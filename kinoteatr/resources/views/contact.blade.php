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

    <!-- Success message -->
    {{--    @if(Session::has('success'))--}}
    {{--        <div class="alert alert-success">--}}
    {{--            {{Session::get('success')}}--}}
    {{--        </div>--}}
    {{--    @endif--}}

    <form action="" method="post" action="{{ route('contact.store') }}">

        <!-- CROSS Site Request Forgery Protection -->
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
        {{--        <input type="submit"  name="send" value="Показать по ID" class="btn btn-dark btn-block">--}}

        {{--        <input type="submit" name="myActionName" value="показать все" class="btn btn-dark btn-block">--}}

    </form>
</div>

<table style="width:100%">
    @if(isset($id_test))
        <tr>
            <th>Название кино театра</th>
            <th>Название кино зала</th>
            <th>Название фильма</th>
            <th>цена фильма</th>
        </tr>
        {{--                            @foreach($hallModels->hall as $hall)--}}
        {{--                                @foreach($hall->film as $halls)--}}
        @foreach($id_test as $id_tests)

            <tr>

                {{--                                    <td>{{var_dump($id_test)}}</td>--}}
                <td>{{$id_tests->id}}</td>
                <td>{{$id_tests->name}}</td>
                <td>{{$id_tests->created_at}}</td>
                <td>{{$id_tests->updated_at}}</td>

        @endforeach
        {{--                                @endforeach--}}
        {{--                            @endforeach--}}
    @elseif(isset($name_test))
        <tr>
            <th>Название кино театра</th>
            <th>Название кино зала</th>
            <th>Название фильма</th>
            <th>цена фильма</th>
        </tr>
        @foreach($name_test as $name_tests)
            <tr>

                {{--                                                    <td>{{var_dump($name_test)}}</td>--}}
                <td>{{$name_tests->id}}</td>
                <td>{{$name_tests->title}}</td>
                <td>{{$name_tests->film_start}}</td>
                <td>{{$name_tests->film_go}}</td>
                <td>{{$name_tests->film_end}}</td>
        @endforeach
        @elseif(isset($calendar_tests))
        <tr>
            <th>Название кино театра</th>
            <th>Название кино зала</th>
            <th>Название фильма</th>
            <th>цена фильма</th>
        </tr>
        @foreach($calendar_tests as $calendar_testss)
            <tr>

                {{--                                                    <td>{{var_dump($name_test)}}</td>--}}
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
