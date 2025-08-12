<?php

class Company {
    private $id;
    private $name;
    private $description;

    public function __construct($id, $name, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public static function findById($id, $pdo) {
        $stmt = $pdo->prepare("SELECT * FROM companies WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Company($data['id'], $data['name'], $data['description']);
        }

        return null;
    }
}