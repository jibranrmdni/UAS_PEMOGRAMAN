<?php
session_start();
require_once 'config/Database.php';

// Simple Autoloader logic or manual requires
require_once 'models/User.php';
require_once 'models/Barang.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/BarangController.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'login';
$url = rtrim($url, '/');
$url = explode('/', $url);

// Routing Sederhana
switch ($url[0]) {
    case 'login':
        (new AuthController())->login();
        break;
    case 'auth':
        (new AuthController())->authenticate();
        break;
    case 'logout':
        (new AuthController())->logout();
        break;
    case 'barang':
        $controller = new BarangController();
        $action = isset($url[1]) ? $url[1] : 'index';
        
        // Cek Login
        if (!isset($_SESSION['user_id'])) {
            header("Location: /gudang_app/login");
            exit;
        }

        if ($action == 'index') $controller->index();
        elseif ($action == 'create') $controller->create();
        elseif ($action == 'store') $controller->store();
        elseif ($action == 'edit') $controller->edit($url[2]); // $url[2] adalah ID
        elseif ($action == 'update') $controller->update();
        elseif ($action == 'delete') $controller->delete($url[2]);
        break;
    default:
        echo "404 Not Found";
        break;
}
?>