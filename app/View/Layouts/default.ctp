<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */


?>
<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset('utf-8'); ?>

	<title>
		<?php echo $title_for_layout?>
	</title>
	<?php
		echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon'));
		echo $this->Html->css('cake.generic');
		echo $this->Html -> css(array("bootstrap.css"));
		echo $this->Html -> css(array("font-awesome.css"));
		echo $this->Html -> css(array("main.css"));
		echo $this->Html -> css(array("style.css"));
		echo $this->Html -> css(array("style2.css"));
		echo $this->Html -> css(array("full-slider.css"));
		echo $this->Html-> script(array("jquery-1.8.3.min.js"));
		echo $this->Html-> script(array("jquery.mobile.customized.min.js"));
		echo $this->Html-> script(array("jquery.easing.1.3.js"));
		echo $this->Html-> script(array("bootstrap.min.js"));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class= "callout4">
	<div id="container">
		<div id="header">
			<div id="ex5"class="col-md-3">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>
	
</body>
</html>
