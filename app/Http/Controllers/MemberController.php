<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::latest()->paginate(5);
        return view('members.index',compact('members'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
            'first_name' => 'required',
            'email_address' => 'required',
            'keytag_id' => 'required',
            'age' => 'required',
            'nickname' => 'required',
            'middle_initial' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
            'marital_status' => 'required',
            'landline' => 'required',
            'occupation' => 'required',
            'mobile_number' => 'required',
        ]);
        Member::create($request->all());
        return redirect()->route('members.index')
                        ->with('success','Member successfully added.');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('members.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view('members.edit',compact('member'));
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
            'first_name' => 'required',
            'email_address' => 'required',
            'keytag_id' => 'required',
            'age' => 'required',
            'nickname' => 'required',
            'middle_initial' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
            'marital_status' => 'required',
            'landline' => 'required',
            'occupation' => 'required',
            'mobile_number' => 'required',
        ]);
        Member::find($id)->update($member->all());
        return redirect()->route('members.index')
                        ->with('success','Member information successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::find($id)->delete();
        return redirect()->route('members.index')
                        ->with('success','Member instance has been removed.');
    }
}
