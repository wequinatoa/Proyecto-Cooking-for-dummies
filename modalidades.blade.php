

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form  action = "/mostrar" method = "get">
    <label>Nombre> <input type="text" name="usuario" required><br>
    <input type="password" name="password" required>
    <input type="submit" value="GUARDAR"> 
</form>

<form method = "post" action = "/mofstrar">
    {{csrf_field()}}
    <input type="text" name="usuario" required>
    <input type="password" name="password" required>
    <input type="submit" value="GUARDAR"> 
</form>

    
</body>
</html>