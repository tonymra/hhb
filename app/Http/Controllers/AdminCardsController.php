<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Requests\CardsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle='Class Cards';

        $cards = Card::all();

        //Stats
        $total_cards = Card::count();

        return view('admin.cards.index',compact('pagetitle','cards','total_cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CardsRequest $request)
    {
        $user = Auth::user();

        $input = $request->all();

        $user->cards()->create($input);

        Session::flash('created_location','Class card successfully created.');

        return redirect('/admin/cards');
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
        $pagetitle = 'Edit Card';

        $card = Card::findBySlugOrFail($slug);

        $cards = Card::all();

        //Stats
        $total_cards = Card::count();

        return view('admin.cards.edit',compact('card','cards','pagetitle','total_cards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CardsRequest $request, $id)
    {
        $input=$request->all();

        Auth::user()->cards()->whereId($id)->first()->update($input);

        Session::flash('updated_card','The card record has been successfully updated !');

        return redirect('/admin/cards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Card::findOrFail($id)->delete();

        Session::flash('deleted_card','The card record has been successfully deleted !');

        return redirect('/admin/cards');
    }
}
