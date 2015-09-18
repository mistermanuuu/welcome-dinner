<div class="teaser teaser__cta">
  goddamit
  <?php foreach(page('home')->children()->visible()->limit(2) as $cta): ?>
  <div class="teaser-half">
  <?php echo $cta->text()?>
    <p>WTF??</p>
  </div>
  <?php endforeach ?>
</div>
