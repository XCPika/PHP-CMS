<?php include ('components/header.php'); 
      require_once 'process/functions.php'; ?>

<link rel='stylesheet' href='../css/card.css'>
<div class='container'>
      <div class="grid_container">
        <?php getAllData(); ?>
      </div>
</div>

<?php include ('components/footer.php'); ?>