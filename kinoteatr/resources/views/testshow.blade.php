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

            <td>{{$pplss}}</td>

    @endforeach
    @endforeach

</table>
</body>
