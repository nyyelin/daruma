    @extends('backend_template')
@section('content')
  <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                      <div class="col-lg-10 "> <h4>Japanese Level N1 Students List Table</h4></div>
                       <div class="col-lg-2 ">   
                          <div class="form-group mt-2">
                      <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect05">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        
                        
                      </div>
                    </div></div>
               
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              ID
                            </th>
                          <th>Student Name</th>
                          <th>Phone Number</th>
                        <th>Photo</th>
                        <th>Email</th>
                         <th>Join Date</th>
                        <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              ZarNiHtun
                            <td class="align-middle">
                            09775355110
                            </td>
                            <td>
                             <img alt="image" src="{{asset('backend/assets/img/users/user-5.png')}}" width="35"></td>
                            </td>
                            <td> zarnihtun2435@gmail.com </td>
                            <td>
                            2020/02/09 
                            </td>
                            <td><a href="{{route('detail')}}" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-3.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-4.png')}}" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-2.png')}}" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{asset('backend/assets/img/users/user-2.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-5.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-4.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{asset('backend/assets/img/users/user-5.png')}}" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              6
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-3.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-4.png')}}" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              7
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-2.png')}}" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              8
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>
                             <img alt="image" src="{{asset('backend/assets/img/users/user-2.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-5.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-4.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              9
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>
                                 <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              10
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="{{asset('backend/assets/img/users/user-2.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-5.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-4.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              11
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>
                             <img alt="image" src="{{asset('backend/assets/img/users/user-2.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-5.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-4.png')}}" width="35">
                         
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              12
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>
                             <img alt="image" src="{{asset('backend/assets/img/users/user-2.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-5.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-4.png')}}" width="35">
                              <img alt="image" src="{{asset('backend/assets/img/users/user-1.png')}}" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </section>
@endsection