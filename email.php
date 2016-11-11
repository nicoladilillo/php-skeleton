<?php $title = 'Email'; require('./partials/head.php'); ?>

<body>
<div class="face">
  <p>:(</p>
</div>

<div class="results">
  <h1>Recycling in Barletta</h1>

  <p class="first">
    <strong>Grazie</strong></br>
    Ti invieremo al più presto un'email a: <b><?php echo($_POST['email']); ?></b>
  </p>

  <form action="/index.php" method="POST">
    <div class="submit">
      <input type="submit" value="indietro" name="back" class="input">
    </div>
  </form>
</div>

<?php require('./partials/tail.php'); ?>
