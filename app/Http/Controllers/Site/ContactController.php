<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(ContactFormRequest $request){

        $contact = Contact::create($request->all());
        Notification::route('mail', 'leandrobaroni95@gmail.com')
            ->notify(new NewContact($contact));

        toastr()->success('Contato criado com sucesso!');
        return back();
    }
}
