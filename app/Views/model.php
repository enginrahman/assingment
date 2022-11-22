<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">
                    Model
                </div>
                <div class="card-body">
                <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#BrandAddModal"> Add Model </button>                    
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
                      <?php foreach($Datakey as $Mdata){ ?>
                        <tr>
                        <th scope="row"><?php echo $Mdata['model_id']?></th>
                            <td> <?php  echo $Mdata['name']?> </td>
                            <td><?php  echo $Mdata['entry_date']?></td>
                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteModal<?php echo $Mdata['model_id']?>"><i class="fa fa-trash"></i></button> 
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#UpdateModal<?php echo $Mdata['model_id']?>"><i class="fa fa-edit"></i></button></td>
                        </tr>








<!--Add Modal -->
<div class="modal fade" id="BrandAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Model</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('/new/model') ?>" method="post" enctype="multipart/form-data">
              <label for=""> Brand </label>
              <select class="form-control" name="brandName" id="brandId" aria-label="Default select example">         
                <option selected>Select Brand</option>
                <?php foreach($BrandDatakey as $data){?>
                <option value="<?php echo $data['brand_id'] ?>"><?php echo $data['name'] ?></option>
                <?php } ?>
              </select>

              <label for="">Model </label>
              <input type="text" class="form-control" name='ModelName' placeholder="type your Model Name"> 

              <button  type="button" class="btn btn-secondary m-2" style="float:right;" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary mt-2  " style="float:right;">Add New</button>                       
          </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div> 

<!--Update Modal -->
<div class="modal fade" id="UpdateModal<?php echo $Mdata['model_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Model</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('/model/edit') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name='id' value="<?php echo $Mdata['model_id'] ?>">
        <label for=""> Brand </label> 
           <select class="form-control" name="brandName" id="brandId" aria-label="Default select example">                       
              <?php foreach($BrandDatakey as $data){?>
              <option value="<?php echo $data['name'] ?>"><?php echo $data['name'] ?></option>
              <?php } ?>
          </select>        
              <label for="inputPassword">Brand Name <span class="text-danger">*</span></label>
              
                <input type="text" class="form-control"  name='ModelName' id="inputPassword"  value="<?php echo $Mdata['name'] ?>">
         
          <button type="button" class="btn btn-secondary mt-2" style="float:right;" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary m-2"style="float:right;">Save changes</button>            
        </form>        
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div> 

<!--Delete Modal -->
<div class="modal fade" id="DeleteModal<?php echo $Mdata['model_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo 'Model Name= '.$Mdata['name']. ' And ID= '.$Mdata['model_id'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a href="<?php echo base_url('/model/delete/'.$Mdata['model_id']) ?>" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div> 














                        <?php } ?>
                    </tbody>
                    </table>                   
                </div>
            </div>           
        </div>
    </div>
   </div>




<!-- <?= $this->endSection() ?> -->