<?php

namespace App\Http\Controllers;

use App\Associate;
use App\Spouse;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::with(['associates','spouses'])->paginate();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = Profile::create([
            "caseRef" => $request->caseRef,
            "station" => $request->station,
            "offence" => $request->offence,
            "briefOnCase" => $request->briefOnCase,
            "name" => $request->name,
            "sex" => $request->sex,
            "age" => $request->age,
            "nationality" => $request->nationality,
            "nin" => $request->nin,
            "otherId" => $request->otherId,
            "tribe" => $request->tribe,
            "religion"  => $request->religion,
            "maritalStatus" => $request->maritalStatus,
            "placeOfBirth" => $request->placeOfBirth,
            "presentAddress" => $request->presentAddress,
            "telephoneContact" => $request->telephoneContact,
            "distinguishFeatures" => $request->distinguishFeatures,
            "height" => $request->height,
            "bodybuild" => $request->bodybuild,
            "eyeColour" => $request->eyeColour,
            "hairColour"  => $request->hairColour,
            "levelOfEducation" => $request->levelOfEducation,
            "occupation" => $request->occupation,
            "father" => $request->father,
            "fatherRO"  => $request->fatherRO,
            "fatherTel" => $request->fatherTel,
            "mother" => $request->mother,
            "motherRO"  => $request->motherRO,
            "motherTel" => $request->motherTel,
            "languagesSpoken" => $request->languagesSpoken,
            "travelHistory" => $request->travelHistory,
            "previousCriminalRecord" => $request->previousCriminalRecord,
        ]);

        foreach ($request->spouse as $key => $value) {
            Spouse::create([
                "spouse" => $value,
                "spouseRO" => $request->spouseRO[$key],
                "spouseTel" => $request->spouseTel[$key],
                "profile_id" => $profile->id
            ]);
        }
        foreach ($request->associateName as $key => $value) {
            Associate::create([
                "associateName" => $value,
                "associateRO" => $request->associateRO[$key],
                "associateTel" => $request->associateTel[$key],
                "profile_id" => $profile->id
            ]);
        }

        // dd(Profile::with(['associates','spouses'])->get());
        return redirect('/profiles/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
        // var_dump($profile->spouses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
