<tbody>
@foreach($DirectorModel as $DirectorModels)

    <tr>
        <td>
            {{$DirectorModels['name']}}<br>
        </td>
        <td>
            {{$DirectorModels->book['title']}}<br>
        </td>
        <td>
            --------------------------------<br>
        </td>
    </tr>
@endforeach
</tbody>
