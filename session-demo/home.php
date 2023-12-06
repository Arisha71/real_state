<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>fatehlinks</title>
    <?php include("./include/linked-files.html"); ?>
    
  </head>

  <body class="overflow-hidden">
  <?php include("./include/top-nav.html"); ?>

	<div id="wrapper" class="preload">
        <?php include("./include/side-bar.php"); ?>
		<div id="main-container">
        <?php include("./include/main-container.php"); ?>
		</div><!-- /main-container -->
		<?php include("./include/footer.html"); ?>

	</div><!-- /wrapper -->
	<a href="blank.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

  </body>
</html>



