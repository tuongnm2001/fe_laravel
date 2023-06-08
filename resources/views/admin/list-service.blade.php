@extends('admin.home')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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
                                &nbsp; <div class="text-success" >Users List</div>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <a href="{{ route('users.create') }}" class="btn btn-flex btn-success h-40px fs-7 fw-bold" >CREATE NEW USER</a>
                        </div>
                        <!--end::Actions-->
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
                        <!--begin::Card header-->
                        {{-- <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <h1>Users List</h1>
                                </div>
                                <!--end::Search-->
                            </div> 
                            <!--begin::Card title-->
                        </div> --}}

                        <!--begin::Separator-->
                            <div class="app-sidebar-separator separator"></div>
                        <!--end::Separator-->


                        <div class="card-header border-0 pt-6">
                            <!--begin::Card toolbar 25-->
                            <div class="card-toolbar my-2 mx-2">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Filter-->
                                    <button type="button" class="btn btn-ligh me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="mx-3">25</span> <i class="fa-solid fa-sort"></i>
                                    <div class="my-2" style="border: 1px solid #eee"></div>
                                </div>
                                <!--end::Toolbar-->
                                <!--end::Modal - Add task-->
                            </div>

                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                                </div>
                                <!--end::Search-->
                            </div>


                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->

                        </div>

                        <!--begin::Separator-->
                            <div class="app-sidebar-separator separator"></div>
                        <!--end::Separator-->

                        <!--end::Card toolbar-->

                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            @include('admin.alert')

                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        {{-- <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                            </div>
                                        </th> --}}
                                        <th class="min-w-125px">Registation Date</th>
                                        <th class="min-w-125px">Avatar</th>
                                        <th class="min-w-125px">FullName</th>
                                        <th class="min-w-125px">Email</th>
                                        <th class="min-w-125px">Status</th>
                                        <th class="min-w-125px">Balace(USD)</th>
                                        <th class="min-w-125px">Characters Left</th>
                                        <th class="min-w-125px">User Group</th>
                                        <th class="text-end min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                    @foreach ($listUsers as $item)                                       
                                        <tr>
                                            {{-- <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td> --}}
                                            <td>{{ $item->updated_at }}</td>

                                            <td class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="../../demo38/dist/apps/user-management/users/view.html">
                                                        <div class="symbol-label">
                                                            <img src="{{ $item->profile_photo_path }}" alt="" class="w-100" />
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>

                                            <td>
                                                <a href="../../demo38/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">{{ $item->name }}</a>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span>{{ $item->email }}</span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="badge badge-light-primary">{{ $item->status }}</div>
                                            </td>

                                            <td>
                                                <div>{{ $item->balance }}</div>
                                            </td>

                                            <td>
                                                <div>{{ $item->available_chars }}</div>
                                            </td>
                                            
                                            <td>
                                                <div class="badge badge-secondary">{{ $item->group }}</div>
                                            </td>
                                            
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        {{-- <a href="/users/edit/{{ $item->id }}" class="menu-link px-3">Edit</a> --}}
                                                        <a href="{{ route('users.edit' , $item->id) }}" class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <button
                                                            {{-- data-url="{{ route('destroy.user', $item->id) }}"  --}}
                                                            class="btn btn-outline-light menu-link px-3 delete-user" 
                                                            data-kt-users-table-filter="delete_row"
                                                            value='{{ $item->id }}'
                                                            {{-- onclick="deleteUser({{ $item->id }})" --}}
                                                        >
                                                            Delete
                                                        </button>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @csrf
                            </table>
                            <!--end::Table-->
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
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">Copyright&copy;2023</span>
                    <a href="https://www.vira.vn/" target="_blank" class="text-gray-800 text-hover-success">Vira Software.</a>
                    <span>All rights reserved.</span>
                </div>
                <!--end::Copyright-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
@include('modal.modal-delete-user')

@endsection

 <script>
    $(document).ready(function(){
        $(document).on('click', '.delete-user', function(e){
            e.preventDefault();
            var user_id = $(this).val();
            $('#user_id').val(user_id);
            $('#deleteModal').modal('show');
        });
    });
</script>
