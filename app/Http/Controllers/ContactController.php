<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::orderBy('id', 'desc')->paginate(5);
        return view('contacts.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        Contact::create($request->all());
        if($request->has('save_action')) {
            Alert::success('Berhasil', 'Data berhasil ditambahkan');
            return redirect()->route('contacts.index');
        } else($request->has('save_action_continue'));
    }

    public function storecontact(Request $request)
    {
        $validasidata = $request->validate([
            'nama' => 'required|max:255',
            'nohp' => 'required|max:255',
            'subjek' => 'required|max:255',
            'message' => 'required|max:255',
        ]);

        Contact::create($validasidata);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());
        Alert::success('Success', 'Data Berhasil Diubah');
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        if($contact->delete()){
            Alert::success('Success', 'Contact deleted successfully');
            return redirect()->route('contact.index');
        } elseif(
            Alert::error('Error', 'Contact not deleted'));
            return redirect()->back()->withInput();
    }
}
