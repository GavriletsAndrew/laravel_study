<tbody>
@foreach($bookModel as $bookModels)
    <tr>
        <td>
            {{$bookModels['title']}}<br>
        </td>

        <td>
            {{$bookModels->author['name']}}<br>
        </td>

<td>
    --------------------------------<br>
</td>
    </tr>
@endforeach
</tbody>
