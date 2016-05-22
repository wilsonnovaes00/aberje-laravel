<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PcController extends Controller
{
    public function index()
    {
        $pc = \App\pcsModel::paginate(9);

        return view('pages.home', ['pc' => $pc]);
    }
    public function contato()
    {
        return view('pages.contato');
    }

    public function registrar()
    {

        return view('pages.registro');
    }
    public function ler(Request $request)
    {
        $data = $request->all();
        $pcd = new \App\pcsModel;
        $pcd->create($data);
        return redirect('/');
    }


    public function delete($id)
    {
        $pc = new \App\pcsModel;
        $pc->find($id)->delete();
        return redirect('/');
    }



}
