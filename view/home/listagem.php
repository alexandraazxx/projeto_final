<!-- Conteúdo da página -->
<div class="container">
  <h1 class="mt-2">Home</h1>
  <hr>

  <?php foreach($produtos as $produto) : ?>
<div>
<?= $produto; ?>

</div>
    <?php endforeach; ?>

</div>