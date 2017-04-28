<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadsCreateRequest;
use App\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminLeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Leads home
        $pagetitle='Leads';

        $leads = Lead::where('status','!=','')->orderBy('status', 'desc')->get();

        //Stats
        $total_leads = Lead::count();
        $total_new_leads = Lead::where(['status' => 'NEW'])->get()->count();
        $total_archived_leads = Lead::where(['status' => 'ARCHIVED'])->get()->count();

        return view('admin.leads.index',compact('pagetitle','leads','total_leads','total_new_leads','total_archived_leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create new lead
        $pagetitle='Create New Lead';

        //Stats
        $total_leads = Lead::count();
        $total_new_leads = Lead::where(['status' => 'NEW'])->get()->count();
        $total_archived_leads = Lead::where(['status' => 'ARCHIVED'])->get()->count();

        return view('admin.leads.create',compact('pagetitle','total_leads','total_new_leads','total_archived_leads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeadsCreateRequest $request)
    {
        Lead::create($request->all());

        Session::flash('created_lead','Lead record has been successfully created.');

        return redirect('/admin/leads');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //Edit lead

        $pagetitle = 'Edit Lead';

        $lead = Lead::findBySlugOrFail($slug);

        //Stats
        $total_leads = Lead::count();
        $total_new_leads = Lead::where(['status' => 'NEW'])->get()->count();
        $total_archived_leads = Lead::where(['status' => 'ARCHIVED'])->get()->count();

        return view('admin.leads.edit',compact('lead','pagetitle','total_leads','total_new_leads','total_archived_leads'));
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
        $lead = Lead::findOrFail($id);

        $lead->update($request->all());

        Session::flash('updated_lead','The lead record has been successfully updated !');

        return redirect('/admin/leads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lead::findOrFail($id)->delete();

        Session::flash('deleted_lead','The lead record has been successfully deleted !');

        return redirect('/admin/leads');
    }
}
