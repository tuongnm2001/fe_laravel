@extends('admin.home')

@section('content')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                    <!--begin::Toolbar wrapper-->
                    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">{{ $title }}</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                                <!--begin::Item-->
                                <i class="fa-solid fa-user"></i>  &nbsp;
                                <li class="breadcrumb-item text-muted">
                                    <a href="../../demo38/dist/index.html" class="text-muted text-hover-primary">User</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="fa-solid fa-angles-right"></i>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">My Balance</li>
                                <!--end::Item-->

                                 <li class="breadcrumb-item">
                                    <i class="fa-solid fa-angles-right"></i>
                                </li>

                                &nbsp; <div class="text-success" >My Balance Dashboard</div>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            
            <div class="app-container container-fluid app-content flex-column-fluid">
                
                <div class="row">
                    <!-- Available Balace -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold mb-5">
                                            Available Balace</div>
                                        <div class="h5 mb-0 font-weight-bold "><h1>$0</h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-building-columns fs-2hx text-gray-600"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Available Characters -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold mb-5">
                                            Available Characters</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h1>1</h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-shelter fs-2hx" style="color: #3f88fd;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Characters Purchased -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold  mb-5">Total Characters Purchased
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold "><h1>0</h1></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                <i class="fa-solid fa-battery-three-quarters fs-2hx" style="color: #68cc61;"></i>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Characters Used -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold mb-5">
                                            Total Characters Used</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><h1>884</h1></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-battery-quarter fs-2hx" style="color: #e85959;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class="col-xl-12 col-lg-7 mt-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold ">Spending Analysis (Current Year)</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                {{-- <div>
                                    <canvas id="myChart"></canvas>
                                </div> --}}
                                <canvas id="myChart" style="display: block; width: 1037px; height: 350px;" width="1037" height="250" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
              
            <!--end::Content-->
            </div>
        
            <script>
                const ctx = document.getElementById('myChart');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sep', 'Oct', 'Nov', 'Dec'],
                        datasets: [{
                            label: 'Total Spending of Votes',
                            data: [70,45,32,90,12,53,100,83,10,75,32,52],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1,
                        }]
                    },
                    options: {
                        hoverBackgroundColor:true,
                        
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>

        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1 ">
                    <span class="text-muted fw-semibold me-1">Copyright&copy;2023</span>
                    <a href="https://www.vira.vn/" target="_blank" class="text-gray-800 text-hover-success ">Vira Software.</a>
                    <span>All rights reserved.</span>
                </div>
                <!--end::Copyright-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
@endsection