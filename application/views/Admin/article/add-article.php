<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="clearfix"></div>
      <div class="col-md-9">
          <?php if(isset($_GET['id'])) ?>
            <!-- Start form here -->
             <form action="<?php echo base_url(); ?>create_article/" id="myForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
   
        <div class="card">
            <div class="card-title-w-btn">
              <h3 class="title">article Create</h3>                
            </div>
                <div class="card-body">
                  <label class="control-label">Article Title</label>              
                  <input class="form-control" auteocomplete="off" id="inputEmail" name="article_title" type="text" placeholder="Article Title" required="">
					
                  <label class="control-label">Article</label>              
                  <textarea class="form-control" id="textArea" name="article" rows="3"></textarea><span class="help-block"></span> 
                  <span class="help-block"></span>
               
                  <div class="form-group">
                  <label class="control-label">Article Image</label>
                    <input class="form-control" autocomplete="off" name="article_image" type="file" required="">
                  </div>

				  <div class="form-group">
                  <label class="control-label">Article Image Inner</label>
                    <input class="form-control" autocomplete="off" name="article_image_inner" type="file" required="">
                  </div>
				  
                  <div class="form-group">
                  <label class="control-label">Image Alt Name</label>
                    <input class="form-control" autocomplete="off" name="alt_image_name" type="text" required="">
                  </div>
                  
                  <label class="control-label">article Date</label>              
                  <input class="form-control" autocomplete="off" id="inputEmail" name="article_date" type="date" placeholder="">

                  <label class="control-label">Url</label>              
                  <input class="form-control" autocomplete="off" required id="inputEmail" name="url" type="text" placeholder="">

                  <label>Publish Article</label>
                    <select name="status" class="form-control">
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="<?php echo base_url().'admin-article'?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
            </div>
        </form>
          <!-- End form -->
      </div>
    </div>
  </section>
</section>
<script>
        CKEDITOR.replace( 'textArea' );
</script> 