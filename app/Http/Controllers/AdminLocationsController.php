<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationsRequest;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Locations

        $pagetitle='Locations';

        $locations = Location::all();

        //Stats
        $total_locations = Location::count();

        return view('admin.locations.index',compact('pagetitle','locations','total_locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $pagetitle='Locations';

        $locations = Location::all();

        //Stats
        $total_locations = Location::count();

        return view('admin.locations.index',compact('pagetitle','locations','total_locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationsRequest $request)
    {
        $user = Auth::user();

        $input = $request->all();

        $user->locations()->create($input);

        Session::flash('created_location','Location record has been successfully created.');

        return redirect('/admin/locations');
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
        $pagetitle = 'Edit Location';

        $location = Location::findBySlugOrFail($slug);

        $locations = Location::all();

        //Stats
        $total_locations = Location::count();

        return view('admin.locations.edit',compact('location','locations','pagetitle','total_locations'));
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

        $input=$request->all();

        Auth::user()->locations()->whereId($id)->first()->update($input);

        Session::flash('updated_location','The location record has been successfully updated !');

        return redirect('/admin/locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::findOrFail($id)->delete();

        Session::flash('deleted_location','The location record has been successfully deleted !');

        return redirect('/admin/locations');
    }
}
