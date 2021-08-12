<body>

<table style="width:100%">

    <tr>
        <th>Название кино театра</th>
        <th>Название кино зала</th>
        <th>Название фильма</th>
        <th>цена фильма</th>
    </tr>
    @foreach($id_cinemas as $id_cinema)
        <tr>
            <td>{{$id_cinema->id}}</td>
            <td>{{$id_cinema->title}}</a></td>
        </tr>

    @endforeach

</table>
</body>

