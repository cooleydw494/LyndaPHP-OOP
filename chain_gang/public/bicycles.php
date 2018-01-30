<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
      </tr>

      <?php
      $args = [
        'brand' => 'Trek',
        'model' => 'Emonda',
        'year' => 2017,
        'gender' => Bicycle::GENDERS[2],
        'category' => Bicycle::CATEGORIES[0],
        'color' => 'black',
        'weight_kg' => 1.5,
        'price' => 1000.00
      ];
      $bicycle1 = new Bicycle($args);
       ?>

      <tr>
        <td><?php echo h($bicycle1->brand); ?></td>
        <td><?php echo h($bicycle1->model); ?></td>
        <td><?php echo h($bicycle1->year); ?></td>
        <td><?php echo h($bicycle1->category); ?></td>
        <td><?php echo h($bicycle1->gender); ?></td>
        <td><?php echo h($bicycle1->color); ?></td>
        <td><?php echo h($bicycle1->weight_kg()) . '/' . h($bicycle1->weight_lbs()); ?></td>
        <td><?php echo h($bicycle1->condition()); ?></td>
        <td><?php echo '$' . number_format($bicycle1->price, 2); ?></td>
      </tr>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
