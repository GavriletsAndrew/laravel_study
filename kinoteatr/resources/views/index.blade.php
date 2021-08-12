
<body>

<table style="width:100%">

    @foreach($hallModel as $hallModels)
        ------------
        <br>{{$hallModels->id}}
        {{$hallModels->title}}<br>

            @foreach($hallModels->get_films as $hall)
                {{$hall->id}}<br>
                {{$hall->title}}<br>

            @endforeach
        @endforeach

</table>
</body>

