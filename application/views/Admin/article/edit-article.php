<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="clearfix"></div>
      <div class="col-md-9">
      <form action="<?php echo base_url(); ?>update_article/<?php echo $id;?>/" id="myForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  
        <div class="card">
          <div class="card-title-w-btn">
            <h3 class="title">Edit Article</h3>                
          </div>
		      <?php foreach($res as $K=>$v){//  pr($v);?>
              <div class="card-body">
                    <label>Article Title</label>              
                    <input class="form-control" value="<?php echo $v->article_title; ?>" id="inputEmail" name="article_title" type="text" placeholder="Article Title" required="">
				  
				            <label>Article</label>              
                    <textarea class="form-control" id="textArea" name="article" rows="3" ><?php echo $v->article; ?></textarea><span class="help-block"></span> 
                    <span class="help-block"></span>
                
                    
          					<div class="form-group"> <br>
          						  <img src="<?php echo base_url().'assets/article/'.$v->article_image; ?>" style="width: 100px;height: 100px;">
          						  <br>
          						  <label class="control-label">article Image</label>
          						  <input class="form-control" name="article_image" type="file" >
          					</div>
					
					
          					<div class="form-group"> <br>
          						  <img src="<?php echo base_url().'assets/article_inner/'.$v->article_image_inner; ?>" style="width: 100px;height: 100px;">
          						  <br>
          						  <label class="control-label">article Image Inner</label>
          						  <input class="form-control" name="article_image_inner" type="file" >
          					</div>
					
        				    <label>Alt Image Name</label>              
        				    <input class="form-control" required value="<?php echo $v->alt_image_name; ?>" id="inputEmail" name="alt_image_name" type="text" placeholder="article Name" >

                    <label>article Date</label>              
                    <input class="form-control" value="<?php echo $v->article_date; ?>" id="inputEmail" name="article_date" type="date" placeholder="date" >
                    
                    <label>Url</label>              
                    <input class="form-control" required value="<?php echo $v->url; ?>" id="inputEmail" name="url" type="text" placeholder="Url" >

                    <label>Publish Article</label>
                    <select name="status" class="form-control">
                      <option <?php if($v->status == 'yes'){ ?> selected <?php } ?> value="yes">Yes</option>
                      <option <?php if($v->status == 'no'){ ?> selected <?php } ?> value="no">No</option>
                    </select>
                  
                    <div class="card-footer">
          					   <button type="submit" class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="<?php echo base_url().'admin-article'?>"  ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
          				  </div>
                  </div>
		            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </section>
</section>
<script>
        CKEDITOR.replace( 'textArea' );
</script> 