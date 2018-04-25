<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::latest()->paginate(5);
        return view('branches.index',compact('branches'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'location' => 'required',
            'registration_date' => 'required',
            'license_number' => 'required',
            'branch_owner' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'facebook_link' => 'required',
            'photo' => 'required',
        ]);
        Branch::create($request->all());
        return redirect()->route('branches.index')
                        ->with('success','Branch successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);
        return view('branches.show',compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);
        return view('branches.edit',compact('branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required',
            'location' => 'required',
            'registration_date' => 'required',
            'license_number' => 'required',
            'branch_owner' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'facebook_link' => 'required',
            'photo' => 'required',
        ]);
        Branch::find($id)->update($request->all());
        return redirect()->route('branches.index')
                        ->with('success','Branch successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Branch::find($id)->delete();
        return redirect()->route('branches.index')
                        ->with('success','Branch has been removed.');
    }
}
