<form method="post" action="{{route('test/')}}">
    <input type="text" name="$firstName" placeholder="id">

    <input type="hidden" name="id" value="{{ csrf_token() }}">
    <input type="submit" value="Search">
</form>
