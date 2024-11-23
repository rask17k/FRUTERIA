<?php
session_start();

// Inicializar la variable compraRealizada
$compraRealizada = '';

// Función para mostrar el pedido actual
function mostrarPedido() {
    if (isset($_SESSION['frutas']) && count($_SESSION['frutas']) > 0) {
        $pedido = "Este es su pedido :<br>";
        foreach ($_SESSION['frutas'] as $fruta => $cantidad) {
            $pedido .= "$fruta: $cantidad<br>";
        }
        return $pedido;
    }
    return '';
}

// Procesar el formulario de bienvenida
if (isset($_GET['cliente'])) {
    $_SESSION['cliente'] = $_GET['cliente'];
    if (!isset($_SESSION['frutas'])) {
        $_SESSION['frutas'] = array();
    }
}

// Procesar el formulario de compras realdizadas
if (isset($_POST['accion'])) {
    if ($_POST['accion'] == 'Anotar' && isset($_POST['fruta']) && isset($_POST['cantidad'])) {
        $fruta = $_POST['fruta'];
        $cantidad = intval($_POST['cantidad']);
        
        if (isset($_SESSION['frutas'][$fruta])) {
            $_SESSION['frutas'][$fruta] += $cantidad;
        } else {
            $_SESSION['frutas'][$fruta] = $cantidad;
        }
        
        $compraRealizada = mostrarPedido();
    } 
    elseif ($_POST['accion'] == 'Terminar') {
        $compraRealizada = mostrarPedido();
        include('despedida.php');
        session_destroy();
        exit();
    }
}

// Mostrar la página correspondiente
if (!isset($_SESSION['cliente'])) {
    include('bienvenida.php');
} else {
    include('compra.php');
}
?>

