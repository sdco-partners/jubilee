<?php 

/*
*  Section => Image Blocks
*/

  $fox = $GLOBALS['url'].'/assets/fox.svg';
  $boots = $GLOBALS['url'].'/assets/boots.svg';
  $tag = $GLOBALS['url'].'/assets/tag.svg';
  $count = 0;

  if ( have_rows('ib_repeater', 2) ):
    while( have_rows('ib_repeater', 2) ) : the_row();

    $images = get_sub_field('ib_images');
    
?>


<div class="block">
  <div class="images">
    <?php if ($images):
        foreach($images as $image): ?>

  	  <img class="image" 
        src="<?php echo $image['url'] ?>" 
        alt="<?php echo $image['alt']; ?>">

    <?php endforeach;endif; ?>
  </div>
  <div class="icon">
  <?php if($count === 0): ?>
    <?php echo file_get_contents($fox); ?>
  <?php elseif($count === 1): ?>
    <?php echo file_get_contents($boots); ?>
  <?php elseif($count === 2): ?>
    <?php echo file_get_contents($tag); ?>
  <?php elseif($count >= 3): 
    $count = -1; ?>
  <?php endif; ?>
  </div>
  <p><?php echo get_sub_field('ib_copy'); ?></p>
</div>

<?php $count++;endwhile;endif; ?>