@extends('admin.layouts.master') 
@section('content')
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
        <div class="row">
            <!-- Greetings Content Starts -->
            <div class="col-xl-3 col-md-6 col-12 dashboard-greetings">
              <div class="card">
                  <div class="card-header">
                  <h3 class="greeting-text">Total Pump</h3>
                  <p class="mb-0"></p>
                  </div>
                  <div class="card-body pt-0">
                  <div class="d-flex justify-content-between align-items-end">
                      <div class="dashboard-content-left">
                      <h1 class="text-primary font-large-2 text-bold-500">100</h1>
                      <p></p>
                      <button type="button" class="btn btn-primary glow">View</button>
                      </div>
                      <!-- <div class="dashboard-content-right">
                      <img src="{{ asset('backend/app-assets/images/icon/cup.png') }}" height="220" width="220" class="img-fluid"
                          alt="Dashboard Ecommerce" />
                      </div> -->
                  </div>
                  </div>
              </div>
            </div>
            
            <div class="col-xl-3 col-md-6 col-12 dashboard-greetings">
              <div class="card">
                  <div class="card-header">
                  <h3 class="greeting-text">Total Agent</h3>
                  <p class="mb-0"></p>
                  </div>
                  <div class="card-body pt-0">
                  <div class="d-flex justify-content-between align-items-end">
                      <div class="dashboard-content-left">
                      <h1 class="text-primary font-large-2 text-bold-500">10</h1>
                      <p></p>
                      <button type="button" class="btn btn-primary glow">View</button>
                      </div>
                      <!-- <div class="dashboard-content-right">
                      <img src="{{ asset('backend/app-assets/images/icon/cup.png') }}" height="220" width="220" class="img-fluid"
                          alt="Dashboard Ecommerce" />
                      </div> -->
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12 dashboard-greetings">
              <div class="card">
                  <div class="card-header">
                  <h3 class="greeting-text">Quck Support</h3>
                  <p class="mb-0"></p>
                  </div>
                  <div class="card-body pt-0">
                  <div class="d-flex justify-content-between align-items-end">
                      <div class="dashboard-content-left">
                      <h1 class="text-primary font-large-2 text-bold-500"></h1>
                      <p>
                          Mobile  : XXXX-XXXXXX<br>
                          Email   : pumtrackp@pump.com</br> 
                      </p>
                      <button type="button" class="btn btn-primary glow">View </button>
                      </div>
                      <!-- <div class="dashboard-content-right">
                      <img src="{{ asset('backend/app-assets/images/icon/cup.png') }}" height="220" width="220" class="img-fluid"
                          alt="Dashboard Ecommerce" />
                      </div> -->
                  </div>
                  </div>
              </div>
            </div>     
        </div>
          <div class="row">   
            <!-- Marketing Campaigns Starts --> 
            <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Pump List
          </h4>
        </div>
        <div class="card-body card-dashboard"> 
          <div class="table-responsive">
            <table class="table table-striped dataex-html5-selectors">
              <thead>
                <tr>
                  <th>Identifier</th>
                  <th>GPS Location</th>
                  <th>Borehole type</th>
                  <th>Date of installation</th>
                  <th>Assigned agent</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td>xxx</td>
                  <td>xxx xxx</td>
                  <td></td>
                  <td>xx/xx/xx</td>
                  <td>Mr A</td>
                  <td>Active</td>
                </tr>
                <tr>
                  <td>xxx</td>
                  <td>xxx xxx</td>
                  <td></td>
                  <td>xx/xx/xx</td>
                  <td>Mr B</td>
                  <td>Active</td>
                </tr>
                <tr>
                  <td>xxx</td>
                  <td>xxx xxx</td>
                  <td></td>
                  <td>xx/xx/xx</td>
                  <td>Mr C</td>
                  <td>Active</td>
                </tr>
                <tr>
                  <td>xxx</td>
                  <td>xxx xxx</td>
                  <td></td>
                  <td>xx/xx/xx</td>
                  <td>Mr D</td>
                  <td>Active</td>
                </tr>
                <tr>
                  <td>xxx</td>
                  <td>xxx xxx</td>
                  <td></td>
                  <td>xx/xx/xx</td>
                  <td>Mr E</td>
                  <td>Active</td>
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
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    
    <!-- Buynow Button-->
  

    </div>
   
<

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
