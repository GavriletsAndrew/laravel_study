{{--<tbody>--}}
{{--@foreach($hallModel as $hallModels)--}}
{{--    <tr>--}}
{{--        <td>--}}
{{--            {{$hallModels['name']}}<br>--}}
{{--        </td>--}}
{{--        @foreach($hallModels->hall as $hall)--}}
{{--            <td>--}}
{{--                {{$hall['title']}}<br>--}}
{{--            </td>--}}
{{--            <td>--}}
{{--            @foreach($hall->film as $halls)--}}
{{--                {{$halls['title']}}<br>--}}
{{--                    price {{$halls['price']}}<br>--}}
{{--            @endforeach--}}

{{--            </td>--}}
{{--            <td>--}}
{{--                --------------------------------<br>--}}
{{--            </td>--}}
{{--            @endforeach--}}


{{--    </tr>--}}
{{--@endforeach--}}
{{--</tbody>--}}
{{--<body>--}}
<form>
{{--    <label>--}}
{{--        <input type="text" size="40">--}}
{{--    </label>--}}
    <a  href="{{route('test.index')}}">Тык!</a>
</form>

<body>

<table style="width:100%">

    <tr>
        <th>Название кино театра</th>
        <th>Название кино зала</th>
        <th>Название фильма</th>
        <th>цена фильма</th>
    </tr>
    @foreach($hallModel as $hallModels)
{{--        @foreach($hallModels->hall as $hall)--}}
{{--            @foreach($hall->film as $halls)--}}
                <tr>
                    <td>{{$hallModels['name']}}</td>
{{--                    <td>{{$hall['title']}}</td>--}}
{{--                    <td>{{$halls['title']}}</td>--}}
{{--                    <td>{{$halls['price']}}</td>--}}
                </tr>
{{--            @endforeach--}}
{{--        @endforeach--}}
    @endforeach

</table>
</body>

