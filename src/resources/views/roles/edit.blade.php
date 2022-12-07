@extends('layouts.dashboard')

@section('content')


    <div class="row">
        <div class="card">

            <div class="card-header">
                <div class="text-center mb-4">
                    <h1 >ویرایش سطح دسترسی <span class="text-primary">{{$role->name}}</span></h1 >
                </div>
            </div>

            <!-- Add role form -->

            <div class="card-body">
                <form action="{{route('roles.update', $role->id)}}" method="post" id="addRoleForm" class="row" >
                    @csrf
                    @method('put')
                    <input type="hidden" name="role_id" value="{{$role->id}}">
                    <div class="col-12">
                        <label class="form-label" for="modalRoleName">نام سطح دسترسی</label>
                        <input
                                type="text"
                                id="modalRoleName"
                                name="name"
                                value="{{$role->name}}"
                                class="form-control"
                                placeholder="نام سطح دسترسی"
                                tabindex="-1"
                                data-msg="نام سطح دسترسی اجباری است"
                        />
                    </div>
                    <div class="col-12">
                        <h4 class="mt-2 pt-50">لیست سطح های دسترسی</h4>
                        <!-- action table -->
                        <div class="table-responsive">
                            <table class="table table-flush-spacing overflow-y-scroll"  >
                                <tbody>
                                <tr>
                                    <td class="text-nowrap fw-bolder">
                                        سطح دسترسی روت
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="دسترسی به سیر تا پیاز اپلیکیشن">
                                                <i data-feather="info"></i>
                                            </span>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="selectAll" />
                                            <label class="form-check-label" for="selectAll"> انتخاب همه </label>
                                        </div>
                                    </td>
                                </tr>
                                @foreach($actions as $action)
                                    <tr>
                                        <td class="text-nowrap fw-bolder">{{$action->title}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input  name="actions[]" value="{{$action->id}}"
                                                            class="form-check-input" type="checkbox"
                                                            id="userManagementRead"
                                                    {{in_array($action->name, $roleActions) ? 'checked' : null}}/>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach



                                </tbody>
                            </table>
                        </div>
                        <!-- action table -->
                    </div>
                    <div class="col-12 text-center mt-2">
                        <button type="submit" class="btn btn-outline-success me-1">
                            <i data-feather='save'></i>
                            ذخیره تغییرات
                        </button>
                        <a href="{{route('roles.index')}}" class="btn btn-outline-secondary" >
                            <i data-feather='slash'></i>
                            کنسل
                        </a>
                    </div>
                </form>

            </div>
        </div>

    </div>



@endsection


@section('page_vendor_scripts')
    <script src="{{ asset('dashboard-assets/app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('dashboard-assets/app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>

@endsection
@section('page_scripts')

    <script src="{{ asset('dashboard-assets/app-assets') }}/js/scripts/pages/modal-add-role.min.js"></script>
    <script src="{{ asset('dashboard-assets/app-assets') }}/js/scripts/pages/app-access-roles.min.js"></script>

@endsection

