<h1><?= $x3d_def['title'] ?></h1>

<x3d id="display-root">
  <Scene>
    <Transform DEF="x3d_model" scale="<?= $x3d_def['transform'] ?>" />
    <TimeSensor DEF="timer" cycleInterval="5" loop="true" id="timer" enabled="false" />
    <OrientationInterpolator DEF="interpolator" key="0 0.5 1" keyValue="0 1 0 0, 0 1 0 3.14159, 0 1 0 6.28318" id="interpolator" />
    <route fromnode="timer" fromfield="fraction_changed" tonode="interpolator" tofield="set_fraction" />
    <route fromnode="interpolator" fromfield="value_changed" tonode="x3d_model" tofield="rotation" />
  </Scene>
</x3d>
<h2>Information</h2>
<p><?= $x3d_def['desc'] ?></p>
<h2>Controllers</h2>
<div class="col-md-12">
  <button class="btn btn-primary" id="changeDisplayMode">Change Display Mode</button>
  <button class="btn btn-primary" id="play">Play the Animation</button>
</div>

<script>
  fetch('./product.json.php?id=<?= $x3d_def['id'] ?>')
    .then(async (res) => {
      const data = await res.json();
      const displayRoot = document.getElementById('display-root');
      const transform = displayRoot.querySelector('Transform');
      transform.innerHTML = data.x3d;
    });

  const btn0 = document.querySelector("#changeDisplayMode");
  const btn1 = document.querySelector("#play");

  btn0.addEventListener("click", function() {
    document.querySelector('#display-root').runtime.togglePoints(true);
  });
  btn1.addEventListener("click", function() {
    document.getElementById('timer').setAttribute('enabled', true);
  });

  var displayed = <?= $x3d_def['id'] ?>;
</script>

<br />
<h1>See Other Models</h1>

<?php include 'index.php'; ?>