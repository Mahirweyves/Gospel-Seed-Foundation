<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #434749; border: 0.5px solid #41a39f;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <h3 class="" style="color:#41a39f; font-size: 18px;">Reservations</h3>
                          <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                      </div>
                    </div>
                    <h3 class="mb-0 display-6">{{ $reservations }}</h3>
                  </div>
                  <a href="{{url('showreservation')}}" class="text-center" style="color:#41a39f;"><u>View all</u></a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #434749; border: 0.5px solid #41a39f;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <h6 class="" style="color:#41a39f; font-size: 18px;">Users</h6>
                          <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p> -->
                        </div>
                      </div>
                    </div>
                    <h3 class="display-6">{{ $users }}</h3>
                  </div>
                  <a href="{{ url('allusers') }}" class="text-center" style="color:#41a39f;"><u>View all</u></a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #434749; border: 0.5px solid #41a39f;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <h6 class="font-weight-normal" style="color:#41a39f; font-size: 18px;">Projects</h6>
                          <!-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> -->
                        </div>
                      </div>
                    </div>
                    <h3 class="display-6">{{ $projects }}</h3>
                  </div>
                  <a href="{{ url('All_projects')}}" class="text-center" style="color:#41a39f;"><u>View all</u></a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color: #434749; border: 0.5px solid #41a39f;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <h6 class="font-weight" style="color:#41a39f; font-size: 18px;">Contacts</h6>
                          <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                      </div>
                    </div>
                    <h3 class="display-6">{{$contacts}}</h3>
                  </div>
                  <a href="{{ url('message')}}" class="text-center" style="color:#41a39f;"><u>View all</u></a>
                </div>
              </div>
            </div>
            
            <!-- <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Reservations</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">View Reservations</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Users</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$45850</h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> View Users</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Projects</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$2039</h2>
                          <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                        </div>
                        <h6 class="text-muted font-weight-normal">View Projects</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © gsfcenter.org 2023</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>