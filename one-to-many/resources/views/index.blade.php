
<tbody>
@foreach($authorModel as $authorModels)
    <tr>
        <td>
            {{$authorModels['name']}}<br>
        </td>
        @foreach($authorModels->book as $book)
        <td>
            {{$book['title']}}<br>
        </td>
        @endforeach
        <td>
            --------------------------------<br>
        </td>
    </tr>
@endforeach
</tbody>
