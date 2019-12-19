@extends('master')

@section('content')

@component('subheader')
    @slot('subheaderTitle')
        Employment Application
    @endslot
    @slot('subheader_icon')
        <i class="fa-2x fa fa-address-book"></i>
    @endslot
    @slot('subheader_intro')
        Have what it takes to join the team? Submit the form with your resume
        below.
    @endslot
@endcomponent

<form class="container pt-3" method="post">
                            <div class="form-group">
                                <label for="desired-position" class="font-weight-bold">Position Applied For:</label>
                                <select class="form-control" id="desired-position" required>
                                  <option value="" selected>Choose...</option>
                                  <option value="Tow Truck Driver">Tow Truck Driver</option>
                                </select>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <label for="first-name" class="font-weight-bold">First Name</label>
                                    <input type="text" class="form-control" id="first-name" autocomplete="given-name" />
                                </div>
                                <div class="col">
                                    <label for="last-name" class="font-weight-bold">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" autocomplete="family-name" />
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="inputAddress" class="font-weight-bold">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" autocomplete="street-address" />
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Address Line 2 (optional)</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment number" autocomplete="address-line2" />
                                  </div>
                                  <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputCity" class="font-weight-bold">City</label>
                                          <input type="text" class="form-control" id="inputCity" autocomplete="address-level2">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputState">State</label>
                                          <select id="inputState" class="form-control" autocomplete="address-level1">
                                            <option value="" selected>Choose...</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FM">Federated States Of Micronesia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="GU">Guam</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PW">Palau</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VI">Virgin Islands</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Zip</label>
                                          <input type="text" class="form-control" id="inputZip" autocomplete="postal-code" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                            <label for="email-address" class="font-weight-bold">Email</label>
                                            <input type="email" class="form-control" id="email-address" autocomplete="email" autocapitalize="off" />
                                          </div>
                                          <div class="form-group">
                                            <label for="phone-number" class="font-weight-bold">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone-number" required title="(123) 456-7890" autocomplete="tel" />
                                          </div>
                                          <div class="form-row mb-2">
                                                <div class="col">
                                                    <label for="dob" class="font-weight-bold">Date of Birth</label>
                                                    <input type="text" class="form-control use-datepicker" placeholder="MM/DD/YYYY" id="dob" autocomplete="bday" required />
                                                </div>
                                                <div class="col">
                                                        <label for="desired-position" class="font-weight-bold">Do you have a valid Driver's License?</label>
                                                        <select class="form-control" id="drivers-license" required>
                                                          <option value="" selected>Choose...</option>
                                                          <option value="yes">Yes</option>
                                                          <option value="no">No</option>
                                                        </select>
                                                </div>
                                            </div>

                                                  <div class="form-group">
                                                        <label for="phone-number" class="font-weight-bold">Upload your resume (Microsoft Word, PDF)</label>
                                                  <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                      </div>
                                                    </div>

                                                      <div class="form-group">
                                                            <label for="discoveryMethod1">How did you learn about us?</label>
                                                            <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="discoveryMethod1">
                                                                    <label class="custom-control-label" for="discoveryMethod1">Advertisement</label>
                                                                  </div>
                                                                  <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="discoveryMethod2">
                                                                        <label class="custom-control-label" for="discoveryMethod2">Employment Agency</label>
                                                                      </div>
                                                                      <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="discoveryMethod3">
                                                                            <label class="custom-control-label" for="discoveryMethod3">Friend/Relative</label>
                                                                          </div>
                                                                          <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="discoveryMethod4">
                                                                                <label class="custom-control-label" for="discoveryMethod4">Walk-In</label>
                                                                              </div>
                                                          </div>

                            <button type="submit" class="btn btn-outline-cj btn-block mt-4 mb-3">Submit Application</button>
                        </form>

@endsection
