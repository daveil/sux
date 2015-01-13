
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Off Canvas Reveal Menu Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css(array('bootstrap.min','jasny-bootstrap.min')); ?>
    

    <!-- Custom styles for this template -->
     <?php echo $this->Html->css(array('navmenu-reveal','listgroup-tile','action-buttons')); ?>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<div class="app">
		<div class="mobile-bar"></div>
		<div class="navmenu navmenu-default navmenu-fixed-left col-md-3 col-sm-5 col-xs-8">
		  <a class="navmenu-brand" href="#">Project name</a>
		  <ul class="nav navmenu-nav">
			<li><a href="../navmenu/">Slide in</a></li>
			<li><a href="../navmenu-push/">Push</a></li>
			<li class="active"><a href="./">Reveal</a></li>
			<li><a href="../navbar-offcanvas/">Off canvas navbar</a></li>
		  </ul>
		  <ul class="nav navmenu-nav">
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			  <ul class="dropdown-menu navmenu-nav">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">Nav header</li>
				<li><a href="#">Separated link</a></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		</div>

		<div class="canvas">
		
		  <div class="navbar navbar-default navbar-fixed-top">
			<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			 <form class="navbar-form">
				<div class="form-group">
				  <input type="text" placeholder="Search" class="form-control">
				</div>
			  </form>
		  </div>

		  <div class="container">
			<div class="page-header">
			<h2 class="action-name">Assessment</h2>
				<div class="row-fluid">
					<ol class="wizard">
					  <li><span class="badge">1</span> Select Student</li>
					  <li><span class="badge">2</span> Select Section</li>
					  <li><span class="badge">3</span> Select Payment Scheme </li>
					  <li class="current"><span class="badge">4</span> Add Discount and Charges</li>
					  <li><span class="badge">5</span> Confirm Assessment</li>
					</ol>
					
				</div>
		
			  <div class="pull-right action-buttons hide">
				  <a class="btn btn-success" data-toggle="modal"  href="#modal-sample"><i class="glyphicon glyphicon-plus"></i></a>
				  <a class="btn btn-default"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" ><i class="glyphicon glyphicon-filter"></i></a>
				  <button class="btn  btn-labeled toggle-view">
						<span class="btn-label"><i class="glyphicon glyphicon-list"></i></span>
						<i class="glyphicon glyphicon-th-large"></i>
				  </button>
			 </div>
			</div>
			 <div class="row-fluid">
			
			<?php echo $content_for_layout; ?>
			</div>
		  </div><!-- /.container -->
		</div>
		<div class="modal" tabindex="-1" role="dialog" aria-labelledby="intent-label" aria-hidden="true" id="modal-sample">
			<div class="modal-header">Sample</div>
			<div class="modal-body">Soncasjkdf </div>
			<div class="modal-footer"><button>Save</button></div>
		</div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	 <?php echo $this->Html->script(array('jquery-1.10.2.min','bootstrap','jasny-bootstrap.min')); ?>
	 <script type="text/javascript">
		if (window.navigator.standalone) $('.app').addClass('fullscreen');
			
	 </script>
	 <?php echo $scripts_for_layout; ?>
  </body>
</html>
