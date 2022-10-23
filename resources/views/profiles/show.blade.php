@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $profile->name }} | {{ $profile->caseRef }}</h2>
                    </div>

                    <div class="card-body">

                        {{-- <p><strong>Case Ref:</strong> {{ $profile->caseRef }}</p> --}}
                        <p><strong>Station:</strong> {{ $profile->station }}</p>
                        <p><strong>Offence:</strong> {{ $profile->offence }}</p>
                        <p><strong>Brief on case:</strong> {{ $profile->briefOnCase }}</p>
                        {{-- <p><strong>Name:</strong> {{ $profile->name }}</p> --}}
                        <p><strong>Sex:</strong> {{ $profile->sex }}</p>
                        <p><strong>Age:</strong> {{ $profile->age }}</p>
                        <p><strong>Nationality:</strong> {{ $profile->nationality }}</p>
                        <p><strong>NIN:</strong> {{ $profile->nin }}</p>
                        <p><strong>Other ID No:</strong> {{ $profile->otherId }}</p>
                        <p><strong>Tribe:</strong> {{ $profile->tribe }}</p>
                        <p><strong>Religion:</strong> {{ $profile->religion }}</p>
                        <p><strong>Marital Status:</strong> {{ $profile->maritalStatus }}</p>
                        <p><strong>Place of Birth:</strong> {{ $profile->placeOfBirth }}</p>
                        <p><strong>Present Address:</strong> {{ $profile->presentAddress }}</p>
                        <p><strong>Telephone Contact:</strong> {{ $profile->telephoneContact }}</p>
                        <p><strong>Distinguishing Features:</strong> {{ $profile->distinguishFeatures }}</p>
                        <p><strong>Height:</strong> {{ $profile->height }}</p>
                        <p><strong>Bodybuild:</strong> {{ $profile->bodybuild }}</p>
                        <p><strong>Eye Colour:</strong> {{ $profile->eyeColour }}</p>
                        <p><strong>Hair Colour:</strong> {{ $profile->hairColour }}</p>
                        <p><strong>Level of Education:</strong> {{ $profile->levelOfEducation }}</p>
                        <p><strong>Occupation:</strong> {{ $profile->occupation }}</p>
                        <p><strong>Father:</strong> {{ $profile->father }}</p>
                        <p><strong>Father R/O:</strong> {{ $profile->fatherRO }}</p>
                        <p><strong>Father Tel:</strong> {{ $profile->fatherTel }}</p>
                        <p><strong>Mother:</strong> {{ $profile->mother }}</p>
                        <p><strong>Mother R/O:</strong> {{ $profile->motherRO }}</p>
                        <p><strong>Mother Tel:</strong> {{ $profile->motherTel }}</p>
                        <p><strong>Spouse</strong></p>
                        <ul>
                            @foreach ($profile->spouses as $spouse)
                                <li>
                                    <ul>
                                        <li><strong>Name:</strong> {{ $spouse->spouse }}</li>
                                        <li><strong>R/O:</strong> {{ $spouse->spouseRO }}</li>
                                        <li><strong>Tel:</strong> {{ $spouse->spouseTel }}</li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                        <p><strong>Associates</strong></p>
                        <ul>
                            @foreach ($profile->associates as $associate)
                                <li>
                                    <ul>
                                        <li><strong>Name:</strong> {{ $associate->associateName }}</li>
                                        <li><strong>R/O:</strong> {{ $associate->associateTel }}</li>
                                        <li><strong>Tel:</strong> {{ $associate->associateTel }}</li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                        <p><strong>Languages Spoken:</strong> {{ $profile->languagesSpoken }}</p>
                        <p><strong>Travel History:</strong> {{ $profile->travelHistory }}</p>
                        <p><strong>Previous Criminal Records (If any):</strong> {{ $profile->previousCriminalRecord }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
