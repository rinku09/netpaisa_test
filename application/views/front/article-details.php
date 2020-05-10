<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="page-header" style="text-align: center;">
    		<h1><?php echo $details->article_title; ?></h1>      
  		</div>
		<div class="col-md-12">
			<div class="row">
						<div class="thumbnail">
					        <img src="<?php echo base_url().'assets/article/'.$details->article_image; ?>" alt="<?php echo $details->alt_image_name; ?>" style="width:100%">
					        <div class="caption">
					          	<p><?php echo ($details->article);?></p>
					        </div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>