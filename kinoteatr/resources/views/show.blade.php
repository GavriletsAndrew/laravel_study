<body>

<table style="width:100%">

    <tr>
        <th>Название кино театра</th>
        <th>Название кино зала</th>
        <th>Название фильма</th>
        <th>цена фильма</th>
    </tr>
    @foreach($id_films as $id_film)
        <tr>

            <td>{{$id_film->id}}</td>
            <td><a href="{{route('contact.showСinema',$id_film->id)}}">{{$id_film->name}}</a></td>

        </tr>

    @endforeach

</table>
</body>
