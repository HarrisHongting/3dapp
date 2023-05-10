<div class="row">
  <?php foreach ($x3d_defs as $x3d_def) : ?>

    <div class="col-md-12" id="model-<?= $x3d_def['id'] ?>" style="margin: 12px auto">
      <div class="card">
        <img src="<?= $x3d_def['img'] ?>" class="card-img-top" alt="<?= $x3d_def['title'] ?>" />
        <div class="card-body">
          <h5 class="card-title"><?= $x3d_def['title'] ?></h5>
          <p class="card-text"><?= $x3d_def['desc'] ?></p>
          <a href="./model.php?id=<?= $x3d_def['id'] ?>" class="btn btn-primary">See this Model</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script>
  if (typeof window.displayed !== 'undefined') {
    // Hide this model
    document.querySelector('#model-' + window.displayed).style.display = 'none';
  }
</script>