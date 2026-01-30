<!DOCTYPE html>
<html>
<body>

<h2>Danh sách sản phẩm</h2>

<?php foreach($products as $p): ?>
    <p>
        <?= $p['id'] ?> -
        <?= $p['name'] ?> -
        <?= number_format($p['price']) ?> VNĐ
    </p>
<?php endforeach; ?>

</body>
</html>
