    @extends('backend_template')
@section('content')
   <section class="section">
  
         <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                                    <div class="col-lg-10 ">
                        <h4>Journal & Video</h4>
                    </div>
                    <div class="col-lg-2"> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#additemmodal">+ Add</button></div>
                  

                  
                </div>
                
                <div class="card-body p-0">
                  <div class="row mt-4 " style="padding: 20px;">
                    
              <div class="col-12 col-md-6 col-lg-6">
                <a href="{{route('journal_collection')}}" style="text-decoration: none;">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Journal Collection</h4>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li>ထုတ်ဝေပြီးသော စာအုပ်များ</li>
                      <li>ဗဟုသုတဆောင်းပါးများ</li>
                      <li>Japan-Myanmar Days</li>
                    </ul>
                   
                  </div>
                </div>
                 </a>
              </div>
                           
              <div class="col-12 col-md-6 col-lg-6">
                <a href="{{route('video_collection')}}" style="text-decoration: none;">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Video Collection</h4>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li>Knowledge Video Files</li>
                      <li>Reading Story</li>
                    </ul>
                    
                  </div>
                </div>
                 </a>
              </div>
             
         
           
            
              
                </div>
              </div>
            </div>
          </div>


    

   
          
        </section>


        <!-- Modal -->
<div class="modal fade" id="additemmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form action="item_add.php" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         
      

          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Item Name" required>
            </div>
          </div>

     

          <div class="form-group row">
            <label for="cat" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
              <select class="form-control" name="categoryid" id="cat">
               <option>Journal</option>
                <option>Video</option>
              </select>
            </div>
          </div>

          

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection