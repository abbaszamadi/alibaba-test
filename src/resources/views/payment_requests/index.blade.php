@extends('layouts.dashboard')


@section('content')

<div class="row" id="table-head">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Table head options</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            لیست درخواست ها
          </p>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>Project</th>
                <th>Client</th>
                <th>Users</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img
                    src="../../../app-assets/images/icons/angular.svg"
                    class="me-75"
                    height="20"
                    width="20"
                    alt="Angular"
                  />
                  <span class="fw-bold">Angular Project</span>
                </td>
                <td>Peter Charls</td>
                <td>
                  <div class="avatar-group">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Lilian Nenez"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                </td>
                <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                      <i data-feather="more-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>Edit</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i data-feather="trash" class="me-50"></i>
                        <span>Delete</span>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <img
                    src="../../../app-assets/images/icons/react.svg"
                    class="me-75"
                    height="20"
                    width="20"
                    alt="React"
                  />
                  <span class="fw-bold">React Project</span>
                </td>
                <td>Ronald Frest</td>
                <td>
                  <div class="avatar-group">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Lilian Nenez"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                </td>
                <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                      <i data-feather="more-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>Edit</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i data-feather="trash" class="me-50"></i>
                        <span>Delete</span>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <img
                    src="../../../app-assets/images/icons/vuejs.svg"
                    class="me-75"
                    height="20"
                    width="20"
                    alt="Vuejs"
                  />
                  <span class="fw-bold">Vuejs Project</span>
                </td>
                <td>Jack Obes</td>
                <td>
                  <div class="avatar-group">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Lilian Nenez"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                </td>
                <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                      <i data-feather="more-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>Edit</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i data-feather="trash" class="me-50"></i>
                        <span>Delete</span>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <img
                    src="../../../app-assets/images/icons/bootstrap.svg"
                    class="me-75"
                    height="20"
                    width="20"
                    alt="Bootstrap"
                  />
                  <span class="fw-bold">Bootstrap Project</span>
                </td>
                <td>Jerry Milton</td>
                <td>
                  <div class="avatar-group">
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Lilian Nenez"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar pull-up my-0"
                      title="Alberto Glotzbach"
                    >
                      <img
                        src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                </td>
                <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                      <i data-feather="more-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>Edit</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i data-feather="trash" class="me-50"></i>
                        <span>Delete</span>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      
        
      </div>
    </div>
  </div>

@endSection
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table>
                        <thead>
                            <th>
                                <td>#</td>
                                <td>amount</td>
                                <td>درخواست دهنده</td>
                                <td>طرف حساب</td>
                                <td>گزینه ها</td>
                            </th>
                        </thead>
              
                        <tbody>
                            @foreach($paymentRequests as $paymentRequest)
                            <tr>
                                <td></td>
                                <td>
                                    {{$paymentRequest->amount}}
                                </td>
                                <td>
                                    {{$paymentRequest->creator->name}}
                                </td>
                                <td>
                                    {{$paymentRequest->user->name}}
                                </td>
                                <td>
                                    <a href="{{route('payment_requests.show', $paymentRequest->id)}}">جزئیات</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
