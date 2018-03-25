<?php 
ob_start();
session_start(); 
if(empty($_SESSION['incpass']))
{
    $_SESSION['incpass']=0;
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Login</title>
	<style>
 body, html {
    height: 100%;
    margin: 0;

    
}
	body
   	{
		background-image:url('IIIT-Bhubaneswar.jpg') ;
		background-size: 100%;
	}

.colorgraph {
  height: 4px;
  border-top: 0;
  background: #b3b3ff;
  border-radius: 5px;
}

</style>
</head>
<body>
<script>
	$(function(){
    $('.button-checkbox').each(function(){
		var $widget = $(this),
			$button = $widget.find('button'),
			$checkbox = $widget.find('input:checkbox'),
			color = $button.data('color'),
			settings = {
					on: {
						icon: 'glyphicon glyphicon-check'
					},
					off: {
						icon: 'glyphicon glyphicon-unchecked'
					}
			};

		$button.on('click', function () {
			$checkbox.prop('checked', !$checkbox.is(':checked'));
			$checkbox.triggerHandler('change');
			updateDisplay();
		});

		$checkbox.on('change', function () {
			updateDisplay();
		});

		function updateDisplay() {
			var isChecked = $checkbox.is(':checked');
			// Set the button's state
			$button.data('state', (isChecked) ? "on" : "off");

			// Set the button's icon
			$button.find('.state-icon')
				.removeClass()
				.addClass('state-icon ' + settings[$button.data('state')].icon);

			// Update the button's color
			if (isChecked) {
				$button
					.removeClass('btn-default')
					.addClass('btn-' + color + ' active');
			}
			else
			{
				$button
					.removeClass('btn-' + color + ' active')
					.addClass('btn-default');
			}
		}
		function init() {
			updateDisplay();
			// Inject the icon if applicable
			if ($button.find('.state-icon').length == 0) {
				$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
			}
		}
		init();
	});
});
</script>
	<div class=" container fluid">

<div class="row" style="margin-top:85px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="login.php" method="post">
			<fieldset>
				<h2>Log In</h2>
                <?php   
                    if($_SESSION['incpass']==1)
                    {
                        echo "password incorrect";
                        $_SESSION['incpass']=0;
                    }
                ?>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="userid" name="userid" id="userid" class="form-control input-lg" placeholder="User Id">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<span class="button-checkbox">
					<a href="" class="btn btn-link pull-right" style="color:green;">Forgot Password?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="submit" name="submit">
                  <br>
					</div>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
</body>
</html>