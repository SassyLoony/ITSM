@extends('dashboard.admin.layout')

@section('content')
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Stats Widget 1-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Create Consultant</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{ route('admin.createconsultant') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Name:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter the Name">
                                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label" >E-mail:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Enter the Email">
                                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-control-label">Password:</label>
                                        <input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="Enter the Password">
                                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password:</label>
                                        <input class="form-control" type="password" name="cpassword" value="{{ old('cpassword') }}" placeholder="Enter confirm Password">
                                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="department">Department</label>
                                        <select class="form-control"  name="department" id="department" style="width: 600px">
                                            <option value="" disabled selected>Select Module Name</option>
                                            <option value="FI" >FI</option>
                                            <option value="CO" >CO</option>
                                            <option value="PP" >PP</option>
                                            <option value="PM" >PM</option>
                                            <option value="QM" >QM</option>
                                            <option value="MM" >MM</option>
                                            <option value="SD" >SD</option>
                                            <option value="ABAP" >ABAP</option>
                                            <option value="BASIS" >BASIS</option>
                                            <option value="SECURITY" >SECURITY</option>
                                            <option value="DIGITAL" >DIGITAL</option>
                                        </select>
                                        <span class="text-danger">@error('department'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success font-weight-bold mr-2">Create</button>
                                <a href="{{ route('admin.home') }}" class="btn btn-outline-dark font-weight-bold">Back</a>
                            </div>
                        </form>
                </div>
                </div>
                <!--end::Stats Widget 1-->
            </div>
        </div>
    </div>
@endsection


