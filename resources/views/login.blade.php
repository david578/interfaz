<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <form action="{{route('store.formulario')}}" method="post">
        @csrf
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>