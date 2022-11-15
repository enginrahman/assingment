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
                        <tr>
                        <th scope="row">1</th>
                            <td>Aarong</td>
                            <td>Mar 01,2020</td>
                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteModal">Delete</button> <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#UpdateModal">Edit</button></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Aarong</td>
                            <td>Mar 01,2020</td>
                            <td><button class="btn btn-danger btn-sm">Delete</button> <button class="btn btn-success btn-sm">Edit</button></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Aarong</td>
                            <td>Mar 01,2020</td>
                            <td><button class="btn btn-danger btn-sm">Delete</button> <button class="btn btn-success btn-sm">Edit</button></td>
                        </tr>
                    </tbody>
                    </table>                   
                </div>
            </div>           
        </div>
    </div>
   </div>




<!-- Brand Modal -->
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
        <form action="" method="" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Brand Name <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="text" required class="form-control" name="brand" id="inputPassword" placeholder="Brand Name">
            </div>
        </div>                  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New</button>
      </div>
      </form>      
    </div>
  </div>
</div>   

<!--Update Modal -->
<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Brand Name <span class="text-danger">*</span></label>
            <div class="col-sm-8">
            <input type="text" class="form-control"  name='brand' id="inputPassword" placeholder="Brand Name">
            </div>
        </div>            
        </form>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> 

<!--Delete Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do You Delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div> 

<?= $this->endSection() ?>