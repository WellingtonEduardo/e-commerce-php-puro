<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/includes/head.php'?>
</head>

<body>

  <h1>Produtos disponíveis</h1>

  <ul>
    <?php foreach ($productsFiltered as $product) :?>
    <li>
      <strong><?= $product['name']?></strong>
      <span>Price: $<?= number_format($product['price'], 2)?></span>
    </li>
    <?php endforeach;?>
  </ul>

  </ul>

</body>

</html>