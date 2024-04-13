<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientRegistrationController extends Controller
{
    public function index(Request $request)
    { 
        $search = $request->get('search');
        $clients = Client::where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->get();

        return view('index', compact('clients'));
    }
 
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'phone_number' => 'required',
                'date_of_birth' => 'required',
                'address' => 'required',
            ]);

            DB::beginTransaction(); 
            Client::create($validatedData);
            DB::commit();

            return redirect()->route('clients.index')->with('success', 'Usuário cadastrado com sucesso');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao cadastrar usuário');
        }

    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('edit_client', compact('client'));
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
        ]);

        $user = Client::findOrFail($id);
        $user->update($validatedData);

        session()->flash('success', 'Usuário atualizado com sucesso');
        return redirect()->back();
    }
 
    public function destroy($id)
    {
        Client::findOrFail($id)->delete();
        return redirect()->route('clients.index');
    }
}
