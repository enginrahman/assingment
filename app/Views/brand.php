<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">
                    Brand
                </div>
                <div class="card-body">
                <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#BrandAddModal"> Add Brand </button>                    
                <table class="table table-light">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Entry Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1;?>
                      <?php foreach ($Datakey as $data){?>
                        <tr>                          
                            <th scope="row"><?php echo $i++?> </th> 
                            <td> <?php echo $data['name'] ?> </td>
                            <td><?php echo $data['entry_date'];?> </td>                            
                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteModal<?php echo $data['brand_id'] ?>" ><i class="fa fa-trash"></i></button> 
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $data['brand_id'] ?>"><i class="fa fa-edit"></i></button></td>                                                                     
                        </tr>

                      <!-- Brand add Modal -->
                      <div class="modal fade" id="BrandAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="<?php echo base_url('/brand/store') ?>" method="post" >
                              <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-4 col-form-label">Brand Name <span class="text-danger">*</span></label>
                                  <div class="col-sm-8">            
                                    <input required type="text"  class="form-control"  name="brandname" id="brandName" placeholder="Brand Name">           
                                  </div>
                              </div>
                              <button type="button" class="btn btn-secondary m-2" style="float:right;" data-dismiss="modal">Close</button>
                              <button id="submit" type="submit"  class="btn btn-primary mt-2" style="float:right;">Add New</button>
                              </form> 
                            </div>                  
                            </div>
                            <div class="modal-footer">     
                          </div>
                        </div>
                      </div>   

                      <!--Update Modal -->
                      <div class="modal fade" id="<?php echo $data['brand_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form action="<?php echo base_url('/brand/edite')?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?php echo $data['brand_id'];?>">
                              <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-4 col-form-label">Brand Name <span class="text-danger">*</span></label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" required  name='UpdateBrandName' id="inputPassword" value="<?php echo $data['name'];?>">
                                  </div>
                              </div>          
                              </form>        
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <a href="#"  class="btn btn-primary">Save changes</a>  
                            </div>
                          </div>
                        </div>
                      </div> 

                      <!--Delete Modal -->
                      <div class="modal fade" id="DeleteModal<?php echo $data['brand_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do You Want To Delete</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <?php echo $data['name'].$data['brand_id'] ?>
                            </div>
                            <div class="modal-footer">
                              <form action="<?php echo base_url('/brand/delete/')?>" method="get" >
                                <input  type="hidden" name="id" id="brandId" value="<?php echo $data['brand_id'] ?>">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="submit" id="deleteBrand"  class="btn btn-primary">Yes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div> 

                      <!-- <?php }?> end foreact -->
                    </tbody>
                    </table>                   
                </div>
            </div>           
        </div>
    </div>
   </div>
   
<?= $this->endSection() ?>