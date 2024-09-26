<div class="w-full flex justify-center">
  <?php if (isset($productsFiltered)):?>
  <ul class="w-8/12 py-6">
    <?php foreach ($productsFiltered as $product) :?>
    <li>
      <strong><?= $product['name']?></strong>
      <span>Price: $<?= number_format($product['price'], 2)?></span>
    </li>
    <?php endforeach;?>
  </ul>
  <?php endif?>
</div>