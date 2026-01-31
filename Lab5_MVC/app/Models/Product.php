<?php
namespace App\Models;

class Product extends BaseModel {

    protected $table = 'products';

    /**
     * Get all products
     */
    public function all() {
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    /**
     * Find product by ID
     */
    public function find($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    /**
     * Insert new product
     */
    public function insert($data) {
        $sql = "INSERT INTO {$this->table} (name, price, description, image) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([
            $data['name'] ?? '',
            $data['price'] ?? 0,
            $data['description'] ?? '',
            $data['image'] ?? ''
        ]);
    }

    /**
     * Update product
     */
    public function update($id, $data) {
        $sql = "UPDATE {$this->table} SET name = ?, price = ?, description = ?, image = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([
            $data['name'] ?? '',
            $data['price'] ?? 0,
            $data['description'] ?? '',
            $data['image'] ?? '',
            $id
        ]);
    }

    /**
     * Delete product
     */
    public function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
