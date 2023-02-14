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
                    <h2 class="h1 mb-0">{{count($employees)}}</h2>
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
                    <h2 class="h1 mb-0">{{count($departments)}}</h2>
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
                      <h4>Positions</h4>
                    <h2 class="h1 mb-0">{{count($designations)}}</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>                
        </div>

        <div class="row mb-2">
          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body" id='full_calendar_events'></div>
            </div>
          </div>

          <div class="col-xl-5 col-md-12 mb-4">
            <div class="card">
              <div class="card-body" id=''>
                <h3>Employee Distribution</h3>
                <div>
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-12 mb-4" >
            <div class="card">
              <div class="card-body" id='' style="max-height: 60vh; overflow-y:auto;">
                <div class="d-flex justify-content-between align-items-end">
                  <h3 class="">Departments</h3>
                  <a type="button" class="btn btn-success" href="/departments/create">Add</a>
                </div>
                
                <table class='table' id="">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Short</th>                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($departments as $department)
                      <tr>
                        <td>
                          {{$department->department_name}}
                        </td>
                        <td>
                          {{$department->department_short_name}}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

               </section>
            </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
         <script src="{{asset('assets/js/calendar.js')}}"></script>
         <script src="{{asset('assets/js/myCharts.js')}}"></script>
         
</x-layout>