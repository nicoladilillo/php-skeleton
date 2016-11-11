<?php $title = 'Home'; require('./partials/head.php'); ?>

<div class="home">
  <div>
    <h1>Recycling in Barletta</h1>

    <form action="/result.php" method="GET">
      <input type="text"required name="object" class="object">
      <input type="submit" value="Cerca" class="input">
    </form>

    <p class="first">Riciclare è importante, ma non sempre facile.
      Recycle in Barletta ti aiuta: non sai dove mettere qualcosa?
      Inseriscil'oggetto in questa pagina, noi ti diremo dove!</p>
    </div>
</div>

<?php require('./partials/tail.php'); ?>
