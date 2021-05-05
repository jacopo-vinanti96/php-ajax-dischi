<main>
  <?php for ( $i = 0; $i < count($albums); $i++ ) { ?>
    <div class="album-card">
      <img class="img--album" src="<?php echo $albums[$i]['poster']?>" alt="<?php $albums[$i]['title']?>">
      <span class="text text--album-title"><?php echo $albums[$i]['title']?></span>
      <span class="text text--author"><?php echo $albums[$i]['author']?></span>
      <span class="text text--genre"><?php echo $albums[$i]['genre']?></span>
      <span class="text text--year"><?php echo $albums[$i]['year']?></span>
    </div>
  <?php } ?>
</main>
