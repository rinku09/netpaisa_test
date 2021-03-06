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
    		<h1>Article List</h1>      
  		</div>
		<div class="col-md-12">
			<div class="row">
				<?php foreach ($article as $art) { ?>
					<div class="col-md-6">
						<div class="thumbnail">
					        <img src="<?php echo base_url().'assets/article/'.$art->article_image; ?>" alt="<?php echo $art->alt_image_name; ?>" style="width:100%">
					        <div class="caption">
					        	<h3><?php echo $art->article_title; ?></h3>
					          	<p><?php echo isset($art->article) && strlen(strip_tags($art->article)) > 100 ?  substr(strip_tags($art->article),'0','100').'...' : strip_tags($art->article) ;?></p>
					          	<a href="<?php echo base_url('article'); ?>/<?php echo $art->url; ?>">Read More</a>
					        </div>
						</div>
					</div>
				<?php } ?>
				<?php echo $links; ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>