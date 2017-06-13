<?php global $oli; ?>
        <div id="instruktorer-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body"></div>

            </div>
          </div>
        </div><!-- /#instruktorer-modal -->

				<div id="footer-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $oli['popup_title']; ?></h4>
              </div>
              <div class="modal-body"><?php echo nl2br($oli['popup_txt']); ?></div>

            </div>
          </div>
        </div><!-- /#footer-modal -->

				<div id="cookies-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $oli['cookies_title']; ?></h4>
              </div>
              <div class="modal-body"><?php echo nl2br($oli['cookies_txt']); ?></div>

            </div>
          </div>
        </div><!-- /#cookies-modal -->

        <footer class="footer-area">
            <div class="footerbottom-area">
                <ul class="footer-olioli text-center">
                  	<li><a href="#" data-toggle="modal" data-target="#cookies-modal">Cookies</a></li>
                  	<li><a href="#om-olioli">Om OliOli</a></li>
                  	<li><a href="#" data-toggle="modal" data-target="#footer-modal">FAQ</a></li>
                    <li>
                        <p>Kontakt: <a href="mailto:olioli@olioli.dk">olioli@olioli.dk</a></p>
                    </li>

                </ul>
            </div>
        </footer><!-- /footer -->

    <?php wp_footer(); ?>
    </body>
</html>