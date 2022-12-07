@extends('layouts.dashboard')
@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
             
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="row">

                    <div>
                        <button
                                data-bs-target="#addRoleModal"
                                data-bs-toggle="modal"
                                class="btn btn-outline-primary add-new-role float-end"
                        >
                            <span class="">تعریف سطح دسترسی جدید</span>
                        </button>
                    </div>
            
            
                    @foreach($roles as $role)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span>{{$roles->count()}} کاربر </span>
                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            
                                        <a href="{{route('roles.show', $role->id)}}" class="btn btn-sm btn-outline-primary">کاربران</a>
            
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                    <div class="role-heading">
                                        <h4 class="fw-bolder">{{$role->name}}</h4>
                                        <a href="{{route('roles.edit', $role->id)}}" class="role-edit-modal text-warning" >
                                            <small class="fw-bolder">ویرایش</small>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-body"><i data-feather="copy" class="font-medium-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            
            
                <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-5 pb-5">
                                <div class="text-center mb-4">
                                    <h1 >تعریف سطح دسترسی جدید</h1 >
                                </div>
                                <!-- Add role form -->
                                <form action="{{route('roles.store')}}" method="post" id="addRoleForm" class="row" >
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label" for="modalRoleName">نام سطح دسترسی</label>
                                        <input
                                                type="text"
                                                id="modalRoleName"
                                                name="name"
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
                                                                <input  name="actions[]" value="{{$action->id}}" class="form-check-input" type="checkbox" id="userManagementRead" />
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
                                        <button type="submit" class="btn btn-outline-success me-1">ذخیره سطح دسترسی</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                            کنسل
                                        </button>
                                    </div>
                                </form>
                                <!--/ Add role form -->
                            </div>
                        </div>
                    </div>
                </div>

        
            </div>
        </div>
    </div>
</div>
@endSection