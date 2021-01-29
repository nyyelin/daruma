    @extends('backend_template')
@section('content')
          
 <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Payment for Disocunt</h4>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Name</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus list="js-fw">
                      <datalist id="js-fw">
                        <option value="Mg Mg">
                         <option value="Ma Mya">
                           
                         <option value="U Hla"> 
                        <option value="U Htun">
                      </datalist>
                    </div>
                   <div class="form-group col-6">
                    <label for="email">Class</label>
                   <select class="form-control selectric">
                        <option>N1</option>
                        <option>N2</option>
                        <option>N3</option>
                        <option>N4</option>
                        <option>N5</option>
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  </div>
                 
                  <div class="form-group">
                      <label>Starting Date</label>
                      <input type="date" class="form-control">
                    </div>

                    


                    
                    <div class="row">
                      <div class="col-8">
                            <div class="form-group">
                      <label>Fee</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            $
                          </div>
                        </div>
                        <input type="text" class="form-control currency">
                      </div>
                    </div>
                    </div>
                    <div class="col-4">
                       <div class="form-group">
                    <label for="email">Payment Type</label>
                   <select class="form-control selectric">
                        <option>Japan (Yen)</option>
                        <option>Myanmar (MMK)</option>
                       
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    </div>
                    </div>


                    <div class="row">
                      <div class="col-8">
                            <div class="form-group">
                      <label>Discount</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            $
                          </div>
                        </div>
                        <input type="text" class="form-control currency">
                      </div>
                    </div>
                    </div>
                    <div class="col-4">
                       <div class="form-group">
                    <label for="email">Payment Type</label>
                   <select class="form-control selectric">
                        <option>Japan (Yen)</option>
                        <option>Myanmar (MMK)</option>
                       
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Remark</label>
                      <textarea class="form-control"></textarea>
                    </div>


                   
                   

                
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection