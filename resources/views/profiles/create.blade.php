@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add New') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ url('/profiles/store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Case Ref:</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="CRB-2022"
                                        name="caseRef">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Station</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Wakiso CPS"
                                        name="station">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Offence</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="" name="offence">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Brief on case</label>
                                <textarea class="form-control" name="briefOnCase"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Name</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="" name="name">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Sex</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="sex">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Age</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="age">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Nationality</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="nationality">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">NIN/ID NO</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="nin">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Other ID NO</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="otherId">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Tribe</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="tribe">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Religion</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="religion">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Marital Status</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="maritalStatus">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Place of birth</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="placeOfBirth">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Present Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="presentAddress">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Telephone Contact</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="telephoneContact">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Distinguishing Features</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="distinguishFeatures">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Height</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="height">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Bodybuild</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="bodybuild">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Eye colour</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="eyeColour">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Hair colour</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="hairColour">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Level of education</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="levelOfEducation">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Occupation</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="occupation">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Father</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="father">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="fatherRO">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="fatherTel">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Mother</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="mother">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="motherRO">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="motherTel">
                                </div>
                            </div>
                            <h5>Spouse</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="spouse[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="spouseRO[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="spouseTel[]">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="spouse[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="spouseRO[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="spouseTel[]">
                                </div>
                            </div>
                            <h5>Associates</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="associateName[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateRO[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateTel[]">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="associateName[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateRO[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateTel[]">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="associateName[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateRO[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateTel[]">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="associateName[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateRO[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateTel[]">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder=""
                                        name="associateName[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">R/O</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateRO[]">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TEL</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder=""
                                        name="associateTel[]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Languages spoken</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="languagesSpoken">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Travel history</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder=""
                                    name="travelHistory">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Previous criminal record (if any)</label>
                                <textarea class="form-control" name="previousCriminalRecord"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
