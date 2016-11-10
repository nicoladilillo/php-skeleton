<?php $title = 'Result'; require('./partials/head.php'); ?>

<div class="face">
  <p>:(</p>
</div>

<div class="results">
  <h1>Recycling in Barletta</h1>

  <p class="first">
    Non sappiamo come riciclare</br> <b><?php echo($_GET['object']); ?></b>
  </p>

  <p class="second">Ci stiamo informando! Inserisci la tua mail così potremo diti come</p>

  <form action="/email.php" method="POST">
    <input type="text" name="email" class="object">
    <div class="submit">
      <input type="reset" value="indietro" name="back" class="back">
      <input type="submit" value="Submit" class="send">
    </div>
  </form>

<?php require('./partials/tail.php'); ?>
