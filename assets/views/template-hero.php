<?php if( is_array( $hero ) ) { ?> 

  <div class="wrapper hero">
      <div class="heroInner">
        <div class="heroBody">
          <?php echo $hero['text'];?>
        </div>
      </div> 
      <div class="heroImage">
        <?php if($hero['desktopImage']) {?> 
          <div class="desktopImage">
            <img src="<?php echo $hero['desktopImage']['url']; ?>" alt="<?php echo $hero['desktopImage']['alt']; ?>" title="<?php echo $hero['desktopImage']['title']; ?>" />
          </div>
        <?php } ?>

        <?php if($hero['mobileImage']) {?> 
          <div class="mobileImage">
            <img src="<?php echo $hero['mobileImage']['url']; ?>" alt="<?php echo $hero['mobileImage']['alt']; ?>" title="<?php echo $hero['mobileImage']['title']; ?>" />
          </div>
        <?php } ?>
      </div>
  </div>
  
<?php }

echo $html;