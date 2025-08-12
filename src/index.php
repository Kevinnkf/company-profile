<?php
require_once 'config/database.php';
require_once 'controllers/CompanyController.php';

if (isset($pdo)) {
    echo "database connected";
} else {
    echo "database connection failed";
}

$controller = new CompanyController($companyModel);
$profile = $controller->getProfile($id);

include 'views/profile.php';
