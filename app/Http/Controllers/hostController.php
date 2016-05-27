<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class hostController extends Controller
{
    public function index()
    {
        $host = \App\hostsModel::all();
        return  view('pages.ramais', ['host' => $host]);

    }

    public function ramal()
    {
        return view('pages.ramal-criar');
    }

    public function ler(Request $request)
    {
        $host = $request->all();
        $hosts = new \App\hostsModel;
        $hosts->create($host);
        return redirect('/');
    }
    
    

    public function editar($id)
    {
        $host = new \App\hostsModel;
        $host = $host->find($id);
        return view('pages.edit-ramal', ['host' => $host]);
    }

    public function update(Request $request, $id)
    {
        $host = new \App\hostsModel;
        $host = $host->find($id)->update($request->all());
        return redirect()->route('index.app');
    }






}


