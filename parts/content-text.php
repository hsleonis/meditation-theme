<?php global $oli; ?>
<section id="meditation" class="meditation-wrapper">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-6 meditation-content">
            <div class="about-text-title">
              <?php echo $oli['meditation_title']; ?>
            </div>
            <div class="meditation-desc">
              <?php echo $oli['meditation_txt']; ?>
            </div>
          </div>
          
          <div class="col-sm-6">
              <img class="img-responsive meditation-main" src="<?php echo $oli['meditation_img']['url']; ?>" />
          </div>
          
        </div><!-- /.row -->
      </div>
</section>