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
    <div class="pedido">
        <?=$compraRealizada ?>
    </div>
    <br> Muchas gracias, por su pedido. <br><br>
    <input type="button" value="NUEVO CLIENTE" onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
</div>
</body>
</html>

