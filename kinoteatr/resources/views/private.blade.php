@extends('layout.main')
@section('content')
@endsection

<body>

<div class="container">
<table class = "table">
    <h1>Это приватная страница</h1>
    <tr>
        <th>Название кино театра</th>
        <th>Название кино зала</th>
    </tr>
{{--    @foreach($id_films as $id_film)--}}
{{--        <tr>--}}

{{--            <td>{{$id_film->id}}</td>--}}
{{--            <td><a href="{{route('contact.showСinema',$id_film->id)}}">{{$id_film->name}}</a></td>--}}

{{--        </tr>--}}

{{--    @endforeach--}}

</table>
</div>
</body>

</html>

