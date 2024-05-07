@extends('layouts.base')
@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}
@endsection
@section('content')

<div class="container-fluid">
    <div class="py-2">
        <div class="card-header card-no-border pb-0">
            <div class="header-top">
                <h4 class="f-w-700">Consultation Form</h4>
                <nav>
                    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.consultationForm') }}">
                                <i data-feather="activity"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item f-w-400">Family Planing</li>
                        <li class="breadcrumb-item f-w-400">Consultation Form</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-xl-5 g-3">
                                <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                                    <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="personal-info-tab" data-bs-toggle="pill" href="#personal-info" role="tab" aria-controls="personal-info" aria-selected="false">
                                                <div class="nav-rounded">
                                                    <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use
                                                                href="{{ asset('svg/icon-sprite.svg#product-detail') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="product-tab-content">
                                                    <h5>Personal Information</h5>
                                                    <p>
                                                        Information about patient
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="family-planning-tab" data-bs-toggle="pill"
                                                href="#family-planning" role="tab" aria-controls="family-planning"
                                                aria-selected="false">
                                                <div class="nav-rounded">
                                                    <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use
                                                                href="{{ asset('svg/icon-sprite.svg#product-gallery') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="product-tab-content">
                                                    <h5>Family Planning</h5>
                                                    <p>
                                                        Patient'sfamily information
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="medical-eligibility-tab" data-bs-toggle="pill"
                                                href="#medical-eligibility" role="tab"
                                                aria-controls="medical-eligibility" aria-selected="false">
                                                <div class="nav-rounded">
                                                    <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use
                                                                href="{{ asset('svg/icon-sprite.svg#product-category') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="product-tab-content">
                                                    <h5>Mediacal Eligibility Criteria</h5>
                                                    <p>
                                                        Respond with Yes (Y) or No (N)on motioned criteria bellow: -If
                                                        all answers are « N », that means client is eligible for all
                                                        methods. - If is « y » recheck one by one before taking a
                                                        decision about eligibility or non-eligibility of desired method
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="additional-exams-tab" data-bs-toggle="pill"
                                                href="#additional-exams" role="tab" aria-controls="additional-exams"
                                                aria-selected="false">
                                                <div class="nav-rounded">
                                                    <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="{{ asset('svg/icon-sprite.svg#pricing') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="product-tab-content">
                                                    <h5>Additional Exams</h5>
                                                    <p>
                                                        If Necessary
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="conclution-tab" data-bs-toggle="pill"
                                                href="#conclution" role="tab" aria-controls="conclution"
                                                aria-selected="false">
                                                <div class="nav-rounded">
                                                    <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="svg/icon-sprite.svg#advance"> </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="product-tab-content">
                                                    <h5>Conclution</h5>
                                                    <p>Summary</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="checking-follow-up-tab" data-bs-toggle="pill"
                                                href="#checking-follow-up" role="tab" aria-controls="checking-follow-up"
                                                aria-selected="false">
                                                <div class="nav-rounded">
                                                    <div class="product-icons">
                                                        <svg class="stroke-icon">
                                                            <use href="{{ asset('svg/icon-sprite.svg#pricing') }}">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="product-tab-content">
                                                    <h5>Checking & Follow Up</h5>
                                                    <p>

                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                                    <div class="tab-content" id="add-product-pills-tabContent">
                                        <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
                                            aria-labelledby="personal-info-tab">
                                            <div class="sidebar-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Province</label>
                                                            <input class="form-control" type="text" name="province" placeholder="Province">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">District Hospital</label>
                                                            <input class="form-control" type="text" name="district_hospital" placeholder="District Hospital">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Health Facility</label>
                                                            <input class="form-control" type="text" name="health_facility" placeholder="Health Facility">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Consultation Date</label>
                                                            <input class="form-control" type="date" name="consulation_date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Full Name</label>
                                                            <input class="form-control" type="text" name="patient_name" placeholder="Full Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Residence</label>
                                                            <input class="form-control" type="text" name="patient_residence" placeholder="Residence">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-2">
                                                        <div class="mb-3">
                                                            <label class="form-label">Gender</label>
                                                            <select class="form-control btn-square" name="gender">
                                                                <option value="0">Select</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-2">
                                                        <div class="mb-3">
                                                            <label class="form-label">Birth Date</label>
                                                            <input class="form-control" name="dob" type="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-2">
                                                        <div class="mb-3">
                                                            <label class="form-label">Marital Status</label>
                                                            <select class="form-control btn-square"
                                                                name="marital_status">
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
                                                <div class="product-buttons">
                                                    <button class="btn" type="button">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="svg/icon-sprite.svg#front-arrow"></use>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="family-planning" role="tabpanel"
                                            aria-labelledby="family-planning-tab">
                                            <div class="sidebar-body">
                                                Second
                                                <div class="product-buttons">
                                                    <button class="btn" type="button">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="svg/icon-sprite.svg#back-arrow">
                                                                </use>
                                                            </svg>Previous
                                                        </div>
                                                    </button>
                                                    <button class="btn" type="button">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="svg/icon-sprite.svg#front-arrow">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="medical-eligibility" role="tabpanel"
                                            aria-labelledby="medical-eligibility-tab">
                                            <div class="sidebar-body">
                                                <div>
                                                    Third
                                                </div>
                                                <div class="product-buttons">
                                                    <button class="btn" type="button">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="svg/icon-sprite.svg#back-arrow">
                                                                </use>
                                                            </svg>Previous
                                                        </div>
                                                    </button>
                                                    <button class="btn" type="button">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="svg/icon-sprite.svg#front-arrow">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="additional-exams" role="tabpanel"
                                            aria-labelledby="additional-exams-tab">
                                            <div class="sidebar-body">
                                                <div class="price-wrapper">
                                                    Four
                                                    <div class="product-buttons">
                                                        <button class="btn" type="button">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                <svg>
                                                                    <use href="svg/icon-sprite.svg#back-arrow">
                                                                    </use>
                                                                </svg>Previous
                                                            </div>
                                                        </button>
                                                        <button class="btn" type="button">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                                <svg>
                                                                    <use href="svg/icon-sprite.svg#front-arrow">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="conclution" role="tabpanel"
                                            aria-labelledby="conclution-tab">
                                            <div class="sidebar-body advance-options">
                                                Five
                                                <div class="product-buttons">
                                                    <button class="btn" type="button">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="svg/icon-sprite.svg#back-arrow">
                                                                </use>
                                                            </svg>Previous
                                                        </div>
                                                    </button>
                                                    <button class="btn" type="button">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                            <svg>
                                                                <use href="svg/icon-sprite.svg#front-arrow">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="checking-follow-up" role="tabpanel"
                                            aria-labelledby="checking-follow-up-tab">
                                            <div class="sidebar-body">
                                                <div class="price-wrapper">
                                                    Four
                                                    <div class="product-buttons">
                                                        <button class="btn" type="button">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                                <svg>
                                                                    <use href="svg/icon-sprite.svg#back-arrow">
                                                                    </use>
                                                                </svg>Previous
                                                            </div>
                                                        </button>
                                                        <button class="btn" type="button">
                                                            <div class="d-flex align-items-center gap-sm-2 gap-1">Next
                                                                <svg>
                                                                    <use href="svg/icon-sprite.svg#front-arrow">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
    
@endsection
