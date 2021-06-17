<tbody>
@foreach($movieModel as $movieModels)
    <tr>
        <td>
            {{$movieModels['name']}}<br>
        </td>
        @foreach($movieModels->cinema as $cinema)
            <td>
                {{$cinema['name']}}<br>
            </td>
        @endforeach
        <td>
            --------------------------------<br>
        </td>
    </tr>
@endforeach
</tbody>
