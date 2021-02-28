    @extends('backend_template')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                           <div class="col-lg-10 ">
                        <h4>Add Journal & Video</h4>
                    </div>
                    <div class="col-lg-2"> 
                   

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#additemmodal">+ Add</button></div>
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Journal & Video</th>
              
                            <th>Categories</th>
                             <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    
                         @php
                            $i = 1;
                          @endphp
                          @foreach($journalvideos as $journalvideo)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$journalvideo->name}}</td>
                          
                              <td ><img src="{{asset($journalvideo->photo)}} " title="Photo" alt="user"  data-toggle="tooltip" width="55"></td>
                          
                               <td>{{$journalvideo->categories}}</td>
                             
                              <td>
                                <a href="{{route('backendjournalvideo.show',$journalvideo->id)}}" class="btn btn-info">Detail</a>

                               <a href="javascript:void(0)" class="btn btn-warning btn_edit" 
                              data-id="{{$journalvideo->id}}" 
                               data-name="{{$journalvideo->name}}"  data-photo="{{$journalvideo->photo}}" data-categories = "{{$journalvideo->categories}}">E d i t</a>
                                
                                <form action="{{route('backendjournalvideo.destroy',$journalvideo->id)}}" method="post" class="d-inline" onclick="return confirm('Are you sure to delete?')">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger">Delete</button>
                                  
                                </form>
                                
                              </td>

                            </tr>
                          @endforeach
                        </tbody>
                        
                      </table>
                    </div>
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
     <form method="POST" enctype="multipart/form-data" action="{{route('backendjournalvideo.store')}}">
                  @csrf      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Journal & Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="container-fluid">
         
      

          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Item Name" required value="{{old('name')}}">
            </div>
          </div>



                    <div class="form-group row">
                      <label for="profile" class="col-sm-2 col-form-label">Photo</label>
                      <div class="col-sm-10">
                      <input id="profile" type="file" class="form-control-file" name="profile" value="{{old('profile')}}">
                    </div>
                    </div>

     

          <div class="form-group row">
            <label for="cat" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
              <select class="form-control" name="categories" id="categories" value="{{old('categories')}}">
               <option value="journal">Journal</option>
                <option value="video">Video</option>
              </select>
            </div>
          </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>

          

        </div>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary  btn-block" data-dismiss="modal" >
                      Save
                    </button>
      </div>
 -->
      </form>
    </div>
  </div>
</div>







<div class="modal fade" id="edititemmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

     <form method="POST" enctype="multipart/form-data" action="{{route('editstore')}}">

      @csrf
  

    <input type="hidden" name="edit_id" class="edit_id">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Journal & Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="container-fluid">
         
      
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control edit_name" id="name" name="name" placeholder="Enter Item Name" required >
            </div>
          </div>



           <div class="form-group row">
              <label for="profile" class="col-sm-2 col-form-label">Photo</label>
           <div class="col-sm-10">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active text-info" id="old-tab" data-toggle="tab" href="#old" role="tab" aria-controls="old" aria-selected="true">Old Photo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">New Photo</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="old" role="tabpanel" aria-labelledby="old-tab">
                <img  class="img-fluid oldphoto"  style="border-radius: 10px;">
                   <input type="hidden" name="oldimage"  class= "edit_photo">
              </div>
              <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
            
                      <input id="profile" type="file" class="form-control-file" name="profile" >
              </div>
            </div>




                    </div>
                    </div>

     

          <div class="form-group row">
            <label for="cat" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
              <select class="form-control edit_categories" name="categories" id="categories" >
              
              </select>
            </div>
          </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      U P D A T E
                    </button>
                  </div>

          

        </div>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary  btn-block" data-dismiss="modal" >
                      Save
                    </button>
      </div>
 -->
      </form>
    </div>
  </div>
</div>



@endsection

@section('script')

<script type="text/javascript">
$(document).ready(function(){
  
  $('.btn_edit').click(function(){


var id = $(this).data('id');
var name = $(this).data('name');
var photo = $(this).data('photo');
var categories = $(this).data('categories');



$('#edititemmodal').modal('show');
$('.edit_id').val(id);
$('.edit_name').val(name);
$('.edit_photo').val(photo);
$('.oldphoto').attr('src',photo).width('120px').height('150px');



var html = '';
  html += `<option`;
                 if(categories == 'journal') { html += `seleceted`; }
  html += `value="journal">Journal</option>

           <option`; if(categories == 'video'){ html+= `seleceted`;};
  html += ` value="video">video</option>`;

/*var html='';
  html+= `<option>Journal</option>
  <option>Video</option>`;*/


$('.edit_categories').html(html);
})
})


</script>
@endsection