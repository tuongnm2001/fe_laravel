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
                                    <a href="../../demo38/dist/index.html" class="text-muted text-hover-primary">Admin</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="fa-solid fa-angles-right"></i>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">User Management</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="fa-solid fa-angles-right"></i> &nbsp;
                                </li>
                                <!--end::Item-->
                                
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">User List</li>

                                <li class="breadcrumb-item">
                                    <i class="fa-solid fa-angles-right"></i> &nbsp;
                                </li>

                                &nbsp; <a href="#" >New Users</a>
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
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Card-->
                    <div class="card">

                        <!--begin::Separator-->
                            <div class="app-sidebar-separator separator"></div>
                        <!--end::Separator-->


                        <div class="card-header border-0 pt-6">
                            <!--begin::Card toolbar 25-->
                            <div class="card-toolbar my-2 mx-2">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <h3>Create New User</h3>
                                </div>
                                <!--end::Toolbar-->
                                <!--end::Modal - Add task-->
                            </div>
                        </div>

                        <!--begin::Separator-->
                            <div class="app-sidebar-separator separator"></div>
                        <!--end::Separator-->

                        <!--end::Card toolbar-->

                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Full Name (Required)</label>
                                    <input type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Email Address (Required)</label>
                                    <input type="email" class="form-control" id="inputPassword4">
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">New Password (Required)</label>
                                    <input type="password" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Confirm New Password (Required)</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">User Role (Required) </label>
                                    <select id="inputState" class="form-select">
                                        <option value="0" selected>User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>

                                <!--begin::Separator-->
                                    <div class="app-sidebar-separator separator" style="padding: 10px 0"></div>
                                <!--end::Separator-->

                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">User Role (Required)</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Phone Number (Optional)</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Company Name (Optional)</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Company Website (Optional)</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address Line (Optional)</label>
                                    <input type="text" class="form-control" id="inputAddress2" />
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">City (Optional)</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="inputZip" class="form-label">Postal Code (Optional)</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Country (Required) </label>
                                    <select id="inputState" class="form-select">
                                        <option value="0" selected>Select User Country</option>
                                        <option value="1">Vietnam</option>
                                        <option value="1">China</option>
                                        <option value="1">Uk</option>
                                    </select>
                                </div>

                                <div class="col-12 d-flex justify-content-end my-5">
                                    <button type="submit" class="btn btn-dark mx-3">Return</button>
                                    <button type="submit" class="btn btn-primary ">Sign in</button>
                                </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
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