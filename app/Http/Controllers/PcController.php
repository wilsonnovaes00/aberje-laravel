<?php

namespace App\Http\Controllers;

use App\pcsModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use Illuminate\Contracts\Routing\ResponseFactory;



class PcController extends Controller

{
    protected $response;

    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }


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
        $pc = new \App\pcsModel;
        $pc->create($data);
        return redirect('/');
    }

    public function editar($id)
    {
        $pc = new \App\pcsModel;
        $pc = $pc->find($id);
        return view('pages.edit', ['pc' => $pc]);
    }

    public function update(Request $request, $id)
    {
        $pc = new \App\pcsModel;
        $pc = $pc->find($id)->update($request->all());
        return redirect()->route('index.app');
    }

    public function delete($id)

    {

        $pc = new \App\pcsModel;
        $pc->find($id)->delete();
        return redirect('/');
    }

    public function teste()
    {
        $data = \App\pcsModel::all();
        return view('pages.teste' , ['data'=> $data]);
    }


    public function carregardados()
    {
        $dados = pcsModel::all();
        return $this->response->json($dados);
        return view('index.app', ['dados' => $dados]);



    }

    






}
