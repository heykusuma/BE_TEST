<?php

namespace App\Http\Controllers;
use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    // all candidate
    public function index()
    {
        $candidate = Candidate::all();
        return view('data_activity', compact('candidate'));
    }

    public function dashboard()
    {
        $dashboard = Candidate::all();
        $pria = DB::table('candidate')->where('gender','LIKE','L')->get();
        $wanita = DB::table('candidate')->where('gender','LIKE','P')->get();
        return view('dashboard', compact('dashboard','pria','wanita'));
    }

    // add candidate
    public function create()
    {
        return view('form_registrasi');
    }

    //
    public function store(Request $request)
    {
        Candidate::create($request->all());
        return redirect('/data_activity')->with('status','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        return view('data_activity_detail', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        return view('data_activity_edit', compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        Candidate::where('id', $candidate->id)
            ->update([
                'name' => $request->name,
                'gender' => $request->gender,
                'email' => $request->email,
                'phone' => $request->phone,
                'identity_number' => $request->identity_number,
                'bank_name' => $request->bank_name,
                'address' => $request->address
            ]);
            return redirect('/data_activity')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
