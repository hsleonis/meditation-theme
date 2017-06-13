<?php global $oli; ?>
<section id="about" class="about-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="about-images">
              <div class="img-responsive about-main" style="background-image:url('<?php echo $oli['about_main']['url']; ?>');"></div>
              <div class="img-responsive about-overlay" style="background-image:url('<?php echo $oli['about_overlay']['url']; ?>');"></div>
            </div>
          </div>
          <div class="col-sm-6 about-content">
            <div class="about-text-title">
              <?php echo $oli['about_title']; ?>
            </div>
            <div class="about-desc">
              <?php echo $oli['about_txt']; ?>
            </div>
          </div>
        </div>
      </div>
</section>