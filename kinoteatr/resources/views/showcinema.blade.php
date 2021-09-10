@extends('layout.main')
@section('content')
@endsection
<body>
<div class="container">
    <table class="table">
        <tr>
            <th>Название кино театра</th>
            <th>Название кино зала</th>
        </tr>
        @foreach($id_cinemas as $id_cinema)
            <tr>
                <td>{{$id_cinema->id}}</td>
                <td>{{$id_cinema->title}}</a></td>
            </tr>
        @endforeach
    </table>
</div>
</div>
</body>
