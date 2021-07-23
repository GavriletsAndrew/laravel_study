<h1>TESTR</h1>
<body>

<table style="width:100%">

    <tr>
        <th>Название кино театра</th>
        <th>Название кино зала</th>
        <th>Название фильма</th>
        <th>цена фильма</th>
    </tr>
    @foreach($ppl as $ppls)
    @foreach($ppls as $pplss)
{{--                @foreach($hallModels->hall as $hall)--}}
{{--                    @foreach($hall->film as $halls)--}}
{{--        <tr>--}}
            <td>{{$pplss}}</td>
{{--            --}}{{--                    <td>{{$hall['title']}}</td>--}}
{{--            --}}{{--                    <td>{{$halls['title']}}</td>--}}
{{--            --}}{{--                    <td>{{$halls['price']}}</td>--}}
{{--        </tr>--}}
{{--        --}}{{--            @endforeach--}}
{{--        --}}{{--        @endforeach--}}
    @endforeach
    @endforeach

</table>
</body>
