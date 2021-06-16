<tbody>
@foreach($cinemaModel as $cinemaModels)
    <tr>
        <td>
            {{$cinemaModels['name']}}<br>
        </td>
        @foreach($cinemaModels->movies as $movie)
            <td>
                {{$movie['name']}}<br>
            </td>
        @endforeach
        <td>
            --------------------------------<br>
        </td>
    </tr>
@endforeach
</tbody>
