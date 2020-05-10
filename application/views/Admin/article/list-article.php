  <!--main content start-->
  <section id="main-content">
  	<section class="wrapper">
      <div class="page-title">
        <div>
          <h1>article List</h1>
          <ul class="breadcrumb side">
            <li><i class="fa fa-home fa-lg"></i></li>
            <li>article</li>
            <li class="active"><a href="#">Article List</a></li>
          </ul>
        </div>
  	   <div>
          <a href="<?php echo base_url('article_add'); ?>">Add article</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <!--th>Category Name</th-->     
                    <th>Article Title</th>
                    <th>Article</th>
                    <th>Article Image</th>
                    <th>Article Inner Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   <!-- Start foreeach loop -->
                  <?php foreach ($res as $article => $value):?>
                  <tr>                    
                    <td>
                      <?php echo $value->id; ?>
                    </td>
                   
                    <!--td>
                      <?php echo $value->category_name; ?>
                    </td-->
                    
                    <td>
                      <?php echo $value->article_title; ?>
                    </td>
                    <td>
                       <?php     $words = explode(" ",strip_tags($value->article));
                                              echo implode(" ",array_splice($words,0,50)); ?>
                    </td>
                  
                    <td>
                      <img style="width: 150px;" class="article_image" src="<?php echo base_url().'assets/article/'.$value->article_image ;?>" alt="<?php echo ($value->alt_image_name); ?>">
                    </td>

                    <td>
                      <img style="width: 150px;" class="article_image_inner" src="<?php echo base_url().'assets/article_inner/'.$value->article_image_inner ;?>" alt="<?php echo ($value->alt_image_name); ?>">
                    </td>
                  
                    
                    <td>
                      <a href="<?php echo base_url().'article_edit/'.$value->id; ?>" ><i class="fa fa-edit"></i></a>&nbsp;
                      <a onclick="return confirm('Are you sure you want to delete?')"  href="<?php echo base_url().'article_delete/'.$value->id; ?>" ><i class="fa fa-trash"></i></a>
                    </td>


                  </tr> 
                  <?php endforeach; ?>
                    <!-- End foreach loop -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!--main content end-->