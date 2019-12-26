@extends('master')

@section('content')

@component('subheader')
    @slot('subheaderTitle')
        Employment Application
    @endslot
    @slot('subheader_icon')
        <i class="fa-2x fa fa-address-book"></i>
    @endslot
    @empty($employment)
    @slot('subheader_intro')
        Have what it takes to join the team? Submit the form with your resume below.
    @endslot
    @endempty
@endcomponent

@if ($errors->any())
    <div class="alert alert-danger">
        <h3>The following errors were encountered:</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@empty($employment)
<form class="container pt-3" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="position_id" class="font-weight-bold">Position Applied For:</label>
        <select class="form-control" id="position_id" name="position_id">
            <option value="">Choose...</option>
            @foreach (App\Position::all() as $position)
                <option value="{{ $position->id }}" @if(strcasecmp(old('position_id'), $position->id) === 0) selected @endif>{{ $position->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-row mb-2">
        <div class="col">
            <label for="first_name" class="font-weight-bold">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"
            autocomplete="given-name" value="{{ old('first_name') }}" />
        </div>
        <div class="col">
            <label for="last_name" class="font-weight-bold">Last Name</label>
            <input type="text" class="form-control" id="last_name"
            name="last_name" autocomplete="family-name" value="{{ old('last_name') }}" />
        </div>
    </div>
    <div class="form-group">
        <label for="address_1" class="font-weight-bold">Address</label>
        <input type="text" class="form-control" id="address_1" name="address_1"
        autocomplete="street-address" name="address_1" value="{{ old('address_1') }}" />
    </div>
    <div class="form-group">
        <label for="address_2">Address Line 2 (optional)</label>
        <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Apartment number"
            autocomplete="address-line2" value="{{ old('address_2') }}" />
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="city" class="font-weight-bold">City</label>
            <input type="text" class="form-control" id="city"
            name="city" autocomplete="address-level2"
            value="{{ old('city') }}" />
        </div>
        <div class="form-group col-md-4">
            <label for="state_id">State</label>
            <select id="state_id" name="state_id" class="form-control" autocomplete="address-level1">
                <option value="">Choose...</option>
                @foreach(App\State::all() as $state)
                    <option value="{{ $state->id }}"
                    @if(strcasecmp(old('state_id'), $state->id) === 0) selected @endif>{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip"
            value="{{ old('zip') }}" autocomplete="postal-code" />
        </div>
    </div>
    <div class="form-row mb-3">
        <div class="col">
            <label for="email" class="font-weight-bold">Email</label>
            <input type="email" class="form-control" id="email"
            value="{{ old('email') }}" name="email" autocomplete="email" autocapitalize="off" />
        </div>
        <div class="col">
            <label for="phone" class="font-weight-bold">Phone Number</label>
            <input type="tel" class="form-control" id="phone"
            value="{{ old('phone') }}" name="phone"
            title="(123) 456-7890" autocomplete="tel" />
        </div>
    </div> <!-- /.form-row -->
    <div class="form-row mb-3">
        <div class="col">
            <label for="dob" class="font-weight-bold">Date of Birth</label>
            <input type="text" class="form-control use-datepicker" placeholder="MM/DD/YYYY" id="dob" name="dob" autocomplete="bday"
            value="{{ old('dob') }}" />
        </div>
        <div class="col">
            <label for="valid_license" class="font-weight-bold">Do you have a valid Driver's License?</label>
            <select class="form-control" id="valid_license" name="valid_license">
                <option value="">Choose...</option>
                <option value="1" @if(strcasecmp(old('valid_license'), '1') === 0) selected @endif>Yes</option>
                <option value="0" @if(strcasecmp(old('valid_license'), '0') === 0) selected @endif>No</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputGroupFileAddon01" class="font-weight-bold">Upload your resume (Microsoft Word, PDF)</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file#accept -->
                <!-- https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types -->
                <input type="file" class="custom-file-input" id="resume_file" name="resume_file"
                    aria-describedby="inputGroupFileAddon01"
                    accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.pdf,application/pdf" />
                <label class="custom-file-label" for="resume_file">Choose file</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="discoveryMethod1">How did you learn about us?</label>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="discoveryMethod1" name="learned_about_us[]"
            value="advertisement" />
            <label class="custom-control-label" for="discoveryMethod1">Advertisement</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="discoveryMethod2" name="learned_about_us[]"
            value="employment agency" />
            <label class="custom-control-label" for="discoveryMethod2">Employment Agency</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="discoveryMethod3" name="learned_about_us[]"
            value="friend/relative" />
            <label class="custom-control-label" for="discoveryMethod3">Friend/Relative</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="discoveryMethod4"
            name="learned_about_us[]" value="walk-in" />
            <label class="custom-control-label" for="discoveryMethod4">Walk-In</label>
        </div>
    </div>

    <button type="submit" class="btn btn-outline-cj btn-block mt-4 mb-3">Submit Application</button>
</form>
@else

<div class="container mt-3 mb-5">
    @include('emails.employmentcontent')
</div>
@endempty

@endsection
