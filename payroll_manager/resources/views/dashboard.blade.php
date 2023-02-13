<x-layout>            
            <div class="main-content container-fluid">
               <div class="page-title">
                  <h3>Dashboard</h3>
               </div>
               <section class="section">
        <div class="row mb-2">
          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-users text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Employees</h4>
                    <h2 class="h1 mb-0">55</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-building text-success fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Departments</h4>
                    <h2 class="h1 mb-0">25</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-user text-info fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Postions</h4>
                    <h2 class="h1 mb-0">34</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>                
        </div>
        <div class="col-xl-4 col-md-12 mb-4">
          <div id='full_calendar_events'></div>
        </div>
               </section>
            </div>
         </div>
         <script src="{{asset('assets/js/calendar.js')}}"></script>
</x-layout>