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
    .pedido {
        margin: 10px 0;
    }
</style>
</head>
<body>
<div class="container">
    <H1>La Frutería del siglo XXI</H1>
    <div class="pedido">
        <?=$compraRealizada ?>
    </div>
    <B>REALICE SU COMPRA <?= $_SESSION['cliente']?></B><br>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        Selecciona la fruta: 
        <select name="fruta">
            <option value="Platanos">Plátanos</option>
            <option value="Naranjas">Naranjas</option>
            <option value="Limones">Limones</option>
            <option value="Manzanas">Manzanas</option>
        </select>
        Cantidad: <input name="cantidad" type="number" value="0" min="0" size="4">
        <input type="submit" name="accion" value="Anotar">	
        <input type="submit" name="accion" value="Terminar">	
    </form>
</div>
</body>
</html>

