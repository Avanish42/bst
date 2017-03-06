<form method="POST" action="store/">

{!! csrf_field() !!}

<input type="text" name="name">
<input type="text" name="email">
<input type="password" name="password">
<input type="submit" name="submit" value="create">

</form>