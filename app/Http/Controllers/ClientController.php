<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use App\Http\Requests\ClientRequest;


use Illuminate\Support\Facades\Session;

use App\Http\Requests;

class ClientController extends Controller
{
    public function home(){
        return view('welcome');
    }
     public function create(ClientRequest $request){
        Client::create([
            'name' => $request -> name,
            'problem' => $request -> problem,
            'date' => $request -> date
        ]);
         Session::flash('flash_message', 'report succesfully created');
         return redirect()->back();
     }

     public function view_clients_update(){
         $clients = Client::paginate(6);
//         dd($clients);
         return view('view_clients_to_update', compact('clients'));

     }

    public function view_clients_delete(){
        $clients = Client::paginate(6);
//         dd($clients);
        return view('view_client_to_delete', compact('clients'));

    }

    public function edit( $id){

        $client = Client::find($id);

//      dd($client);
        return view('client_update_form', compact('client'));
    }

    public function update_client_form(ClientRequest $request, $id){

        $client = Client::find($id);

        $client->update([
            'name' => $request -> name,
            'problem' => $request -> problem,
            'date' => $request -> date
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        if(isset($id)) {
            $client = Client::find($id);
            if($client) {
                Client::find($id)->delete();
                return redirect()->back();
            }
        }
    }
}
