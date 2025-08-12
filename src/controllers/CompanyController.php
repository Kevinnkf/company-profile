<?php

class CompanyController {
    private $companyModel;

    public function __construct($companyModel) {
        $this->companyModel = $companyModel;
    }

    public function getProfile($id) {
        $company = $this->companyModel->findById($id);
        if ($company) {
            include '../views/profile.php';
        } else {
            echo "Company not found.";
        }
    }
}