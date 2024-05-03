@extends('layouts.base')
@section('content')

<div class="container-fluid dashboard-2">
    <div class="col-xl-12 col-md-12 proorder-xl-1 proorder-md-1">
        <div class="card">
            <div class="card-header card-no-border pb-0">
                <div class="header-top">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="card-body project-status-col">
                <div class="row">
                    <div class="col-1">
                        <div class="btn-light1-primary b-r-10">
                            <div class="upcoming-box">
                                <a href="#">
                                    <div class="upcoming-icon bg-primary">
                                        <img src="{{ asset('images/dashboard-2/svg-icon/calendar.png') }}" alt="">
                                    </div>
                                    <span>
                                        <strong>Appointments</strong>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="btn-light1-warning b-r-10">
                            <div class="upcoming-box">
                                <a href="{{ route('admin.patientRegistration') }}">
                                    <div class="upcoming-icon bg-warning">
                                        <img src="{{ asset('images/dashboard-2/svg-icon/registration-form.png') }}" alt="">
                                    </div>
                                    <span>
                                        <strong>Patient Registration</strong>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="btn-light1-secondary b-r-10">
                            <div class="upcoming-box">
                                <a href="#">
                                    <div class="upcoming-icon bg-secondary">
                                        <img src="{{ asset('images/dashboard-2/svg-icon/clinic.png') }}" alt="">
                                    </div>
                                    <span>
                                        <strong>Clinic Management</strong>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="btn-light1-tertiary b-r-10">
                            <div class="upcoming-box">
                                <a href="#">
                                    <div class="upcoming-icon bg-tertiary">
                                        <img src="{{ asset('images/dashboard-2/svg-icon/payment.png') }}" alt="">
                                    </div>
                                    <span>
                                        <strong>Billing & Collection</strong>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
