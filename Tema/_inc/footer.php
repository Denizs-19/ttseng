        <footer>
          <div class="pull-right">
           <?php  echo $title['title']; ?> ///// Tüm Hakları Saklıdır.
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/nprogress.js"></script>
    <script src="js/custom.min.js"></script>
	<?php
	if($page == "help") {
?>	
<script src="js/jquery.smartWizard.js"></script>
<script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
	<?php
	}elseif($page == "settings") { ?>
		<script src="js/validator.js"></script>
		 <script>
      validator.message.date = 'not a real date';

      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
	<?php }elseif($page == "barn" OR $page == "store") { ?>
		<script src="js/jquery.easypiechart.min.js"></script>
		<script>
      $(function() {
        $('.chart').easyPieChart({
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: '#26B99A',
          trackColor: '#fff',
          scaleColor: false,
          lineWidth: 20,
          trackWidth: 16,
          lineCap: 'butt',
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });
      });
    </script>

	<?php } ?>
  </body>
</html>