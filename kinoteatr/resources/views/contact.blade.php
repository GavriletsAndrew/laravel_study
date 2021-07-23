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
    @if(isset($ppl))
        <tr>
            <th>Название кино театра</th>
            <th>Название кино зала</th>
            <th>Название фильма</th>
            <th>цена фильма</th>
        </tr>
        {{--                            @foreach($hallModels->hall as $hall)--}}
        {{--                                @foreach($hall->film as $halls)--}}
        @foreach($ppl as $ppls)

            <tr>

                {{--                    <td>{{var_dump($pplss)}}</td>--}}
                <td>{{$ppls->id}}</td>
                <td>{{$ppls->name}}</td>
                <td>{{$ppls->created_at}}</td>
                <td>{{$ppls->updated_at}}</td>

        @endforeach
        {{--                                @endforeach--}}
        {{--                            @endforeach--}}
    @endif
</table>

</body>

</html>
