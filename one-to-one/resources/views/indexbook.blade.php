<tbody>
@foreach($BookModel as $BookModels)

    <tr>
        <td>
            {{$BookModels['title']}}<br>
        </td>
        <td>
            {{$BookModels->director['name']}}<br>
        </td>
        <td>
            --------------------------------<br>
        </td>
    </tr>
@endforeach
</tbody>
