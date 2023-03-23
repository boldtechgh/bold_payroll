<x-layout>            
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Reports</h3>
        </div>
        <section class="section">
            <div class="row mb-2 reports d-flex align-items-center">
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-between p-md-1">
                        <div class="d-flex flex-row mb-4">
                            <div class="align-self-center">
                            <i class="fa fa-money-bill-alt text-warning fa-3x me-4"></i>
                            </div>
                            <div>
                            <h4>Payroll</h4>
                            <h2 class="h1 mb-0"></h2>
                            </div>
                        </div>
                        <div class="report_options">
                            <ul>
                                <li><a href="/reports/payroll">Payroll Report</a> </li>
                                <li><a href="">Stats</a> </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                            <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-between p-md-1">
                        <div class="d-flex flex-row mb-4">
                            <div class="align-self-center">
                            <i class="fa fa-balance-scale text-success fa-3x me-4"></i>
                            </div>
                            <div>
                            <h4>Pensions</h4>
                            <h2 class="h1 mb-0"></h2>
                            </div>
                        </div>
                            <div class="report_options">
                            <ul>
                                <li><button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report</button> 
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @foreach ($tiers as $tier)
                                            <a class="dropdown-item" href="/reports/snnit/{{$tier->id}}">{{$tier->pension_tier}}</a>                                        
                                            <div class="dropdown-divider"></div>
                                        @endforeach
                                    </div>
                                </li>
                                
                                {{-- <li><a href="">Stats</a> </li> --}}
                                <li><a href="/reports/ssnit/settings">Settings</a></li>
                            </ul>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>          
                <div class="col-xl-4 col-md-12 mb-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-between p-md-1">
                        <div class="d-flex flex-row mb-4">
                            <div class="align-self-center">
                            <i class="fa fa-coins text-info fa-3x me-4"></i>
                            </div>
                            <div>
                            <h4>GRA</h4>
                            <h2 class="h1 mb-0"></h2>
                            </div>
                        </div>
                        <div class="report_options">
                            <ul>
                                <li><a href="">Tax report</a> </li>
                                <li><a href="">Stats</a> </li>
                            </ul>
                        </div>
                        </div>
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