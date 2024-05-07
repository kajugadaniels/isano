@extends('layouts.base')
@section('content')

<div class="container-fluid">
    <div class="py-2">
        <div class="card-header card-no-border pb-0">
            <div class="header-top">
                <h4 class="f-w-700">Patient Registration</h4>
                <nav>
                    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.patientRegistration') }}">
                                <i data-feather="file-text"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item f-w-400">Patient Registration</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="edit-profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Patient Search</h4>
                        <div class="card-options">
                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                <i class="fe fe-chevron-up"></i>
                            </a>
                            <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                <i class="fe fe-x"></i>
                            </a>
                        </div>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <label class="form-label px-5 py-1">MRN:</label>
                                        <input class="form-control mx-3" type="text" placeholder="MRN">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label px-5 py-1">MRN Date:</label>
                                        <input class="form-control mx-3" type="text" placeholder="MRN Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.patientRegistrationStore') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Personal Details</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                    <i class="fe fe-chevron-up"></i>
                                </a>
                                <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                    <i class="fe fe-x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="d-flex">
                                            <img class="img-70 rounded-circle" alt=""
                                                src="{{ asset('images/user/7.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Names</label>
                                    <input class="form-control" type="text" name="name" placeholder="Names">
                                    {{-- <input class="form-control" type="text" name="name" placeholder="Names" value="{{ old('name') ?? $latestPatient->name ?? '' }}"> --}}
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">DOB</label>
                                            <input class="form-control" name="dob" type="date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Age</label>
                                            <input class="form-control" type="number" name="age" placeholder="Age">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Gender</label>
                                            <select class="form-control btn-square" name="gender">
                                                <option value="0">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Marital Status</label>
                                            <select class="form-control btn-square" name="marital_status">
                                                <option value="0">Select</option>
                                                <option value="married">Married</option>
                                                <option value="single">Single</option>
                                                <option value="divorced">Divorced</option>
                                                <option value="widow">Widow</option>
                                                <option value="widower">Widower</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nationality</label>
                                            <select class="form-control btn-square" name="nationality">
                                                <option value="0">Select</option>
                                                <option value="rwanda">Rwanda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">ID Number</label>
                                            <input class="form-control" type="number" name="id_number"
                                                placeholder="ID Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Home Address</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                    <i class="fe fe-chevron-up"></i>
                                </a>
                                <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                    <i class="fe fe-x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Province</label>
                                        <input class="form-control" type="text" name="province" placeholder="Province">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">District</label>
                                        <input class="form-control" type="text" name="district" placeholder="District">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Sector</label>
                                        <input class="form-control" type="text" name="sector" placeholder="Sector">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Cell</label>
                                        <input class="form-control" type="text" name="cell" placeholder="Cell">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Village</label>
                                        <input class="form-control" type="text" name="village" placeholder="Village">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input class="form-control" type="text" name="mobile_number" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Next of KIN</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                    <i class="fe fe-chevron-up"></i>
                                </a>
                                <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                    <i class="fe fe-x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Relative Name</label>
                                        <input class="form-control" type="text" name="relative_name"
                                            placeholder="Relative Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Relative ID Number</label>
                                        <input class="form-control" type="text" name="relative_id_number"
                                            placeholder="Relative ID Number">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Relationship</label>
                                        <select class="form-control btn-square" name="relationship">
                                            <option value="0">Select</option>
                                            <option value="partner">Partner</option>
                                            <option value="child">Child</option>
                                            <option value="parent">Parent</option>
                                            <option value="friend">Friend</option>
                                        </select>
                                    </div>
                                </div>
                                <h5>
                                    Address

                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox" class="form-control-checkbox">
                                        <label class="text-muted" for="checkbox1" style="font-size: 14px">Same address as patient</label>
                                    </div>
                                </h5>
                                <hr>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Province</label>
                                        <input class="form-control" type="text" name="relative_province" placeholder="Province">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">District</label>
                                        <input class="form-control" type="text" name="relative_district" placeholder="District">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Sector</label>
                                        <input class="form-control" type="text" name="relative_sector" placeholder="Sector">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Cell</label>
                                        <input class="form-control" type="text" name="relative_cell" placeholder="Cell">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Village</label>
                                        <input class="form-control" type="text" name="relative_village" placeholder="Village">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input class="form-control" type="text" name="relative_mobile_number"
                                            placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
