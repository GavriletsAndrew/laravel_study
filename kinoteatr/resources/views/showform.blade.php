<form method="post" action="{{route('test/')}}">
    <input type="text" name="$firstName" placeholder="id">
{{--    <input type="text" name="lastName" placeholder="Last name">--}}
    <input type="hidden" name="id" value="{{ csrf_token() }}">
    <input type="submit" value="Search">
</form>
