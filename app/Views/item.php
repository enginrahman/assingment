<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">
                    Item
                </div>
                <div class="card-body">
                <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#BrandAddModal"> Add Item </button>                    
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
                      <?php foreach ($Datakey as $data){ ?>
                        <tr>
                          <th scope="row"><?php echo $data['id'] ?></th>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['entry_date'] ?> </td>
                            <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteModal<?php echo $data['id']?>"><i class="fa fa-trash"></i></button> 
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#UpdateModal<?php echo $data['id'] ?>"><i class="fa fa-edit text-center"></i></button></td>
                        </tr>







<!--Update Modal -->
<div class="modal fade" id="UpdateModal<?php echo $data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('/item/edit')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ItemName" value="<?php echo $data['id'] ?>">
       
            <label for="inputPassword" class=" col-form-label">Item Name <span class="text-danger">*</span></label>
 
            <input type="text" class="form-control"  name='ItemName' id="inputPassword" value="<?php echo $data['name']?>">

        <button type="button" class="btn btn-secondary m-2"style="float:right;" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mt-2" style="float:right;">Save changes</button>            
        </form>        
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div> 

<!--Delete Modal -->
<div class="modal fade" id="DeleteModal<?php echo $data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do You Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php echo $data['id']?></p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a href="<?php echo base_url('/item/delete/'.$data['id']) ?>" type="button" class="btn btn-primary">Yes</a>
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




                        <!-- Item Modal -->
 <div class="modal fade" id="BrandAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('/item/store') ?>" method="post" enctype="multipart/form-data">
              <label for=""> Brand </label>
              <select class="form-control" name="brandName" id="brandId" aria-label="Default select example">         
                <option selected>Select Brand</option>
                <?php foreach($BrandDatakey as $data){?>
                <option value="<?php echo $data['brand_id'] ?>"><?php echo $data['name'] ?></option>
                <?php } ?>
              </select>
              <label for="">Model </label>
              <select name="modelName" class="form-control" id="ModelId" aria-label="Default select example">          
                <option selected>Select Model</option>
              </select>  
              <label for="">Item Name</label>
              <input type="text" class="form-control" name='itemname' placeholder="type your item name">
              <button type="button" class="btn btn-secondary m-2" style="float:right;" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mt-2" style="float:right;">Add New</button>
          </form>                     
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>




<script type="text/javascript">

////// MOdel dependency dropdown menu//////////




$(document).ready(function(){
    $('#brandId').change(function(){
      var brand_id= $('#brandId').val();   
      console.log("call on c hange",)
         $.ajax({
          type : "GET",
                     headers: {'X-Requested-With': 'XMLHttpRequest'},
           url:"<?= site_url('/show/dependent/data') ?>",
           data:{brandId:brand_id},
           dataType:"JSON",
           success:function(data)
           { 
            console.log("data ", data) 
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              html += '<option value='+data[i].brand_id+'>'+data[i].name+'</option>';                             
          }
          $('#ModelId').html(html);
        }
        });
      
     
     });
  }); 

</script>

<?= $this->endSection() ?>