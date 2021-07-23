<body>

<table style="width:100%">

    <tr>
        <th>Название кино театра</th>
        <th>Название кино зала</th>
        <th>Название фильма</th>
        <th>цена фильма</th>
    </tr>
    @foreach($cinema as $cinemas)
        {{--        @foreach($hallModels->hall as $hall)--}}
        {{--            @foreach($hall->film as $halls)--}}
        <tr>
            <td>{{$cinemas['name']}}</td>
            {{--                    <td>{{$hall['title']}}</td>--}}
            {{--                    <td>{{$halls['title']}}</td>--}}
            {{--                    <td>{{$halls['price']}}</td>--}}
        </tr>
        {{--            @endforeach--}}
        {{--        @endforeach--}}
    @endforeach

</table>
</body>

