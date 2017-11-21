<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

</head>
<body>
<form method="POST" >
    {{ csrf_field() }}

    <input type="text">


    <button type="submit" href="{{ Route('permit') }}" >Boton</button>
</form>
</body>
</html>
