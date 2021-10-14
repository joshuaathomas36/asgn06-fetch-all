<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'WNC Birds'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Small Sampling of WNC Birds</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
      </tr>


    <?php $stmt = $database->query("SELECT * FROM birds"); ?>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
     <?php  $bird = new Bird($row);   ?>
      <tr>
        <td><?php echo $bird->common_name; ?></td>
        <td><?= $bird->habitat; ?></td>
        <td><?= $bird->food; ?></td>
        <td><?= $bird->nest_palcement; ?></td>
        <td><?= $bird->behavior; ?></td>
        <td><?php echo $bird->conservation(); ?></td>
        <td><?= $bird->backyard_tips; ?></td>
      </tr>
<?php } ?>
    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
