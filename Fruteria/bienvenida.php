<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>LA FRUTERÍA</title>
<style>
    body { font-family: Arial, sans-serif; }
    .container { 
        width: 400px;
        border: 1px solid black;
        padding: 10px;
        margin: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <H1>La Frutería del siglo XXI</H1>
    <B>BIENVENIDO A LA NUESTRA FRUTERÍA DEL SIGLO XXI</B><br>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
        Introduzca su nombre del cliente: 
        <input name="cliente" type="text"> <br>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>

