<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Adress;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CompanyController extends Controller
{
    public function index()
    {
         //Cria variável que traz todas as empresas cadastradas no banco
        $companies = Company::get();
        return view('companies.index', compact('companies'));
    }

    public function create() //Função para CRIAR um novo registro.
    {
        $adresses = [];
        $profiles = [];
        $companies = Company::select('*')->get();

        return view('companies.create', compact("companies","adresses","profiles"));

    }

    public function store(Request $request) // Função para salvar um novo registro no banco de dados.
    {
        if(!$request->especial){
            $request->especial =0;
        }

        $cepNoMask = str_replace("-","", $request->cep); // Limpando a máscara antes de enviar para o banco.
        $companies = [
            "name" => $request->name,
            "dti_atividade" => $request->dti_atividade,
            "dtf_atividade"=> $request->dtf_atividade,
            "especial" => $request->especial
        ];

        $company_id = Company::create($companies)->id;

        $adresses = [
            "public_area" => $request->public_area,
            "complement" => $request->complement,
            "cep" => $cepNoMask,
            "number" => (int)$request->number,
            "neighborhood" => $request->neighborhood,
            "latitude" => $request->latitude,
            "longitude" => $request->longitude,
            "company_id" => $company_id
        ];

        Adress::create($adresses);
        return redirect()->action([CompanyController::class, 'index']);

    }
    public function edit($id) //Função para editar um registro
    {
        $companies = Company::where('id',$id)->first();
        $adress = Adress::where('company_id',$id)->first();
        return view('companies.edit', compact("companies","adress"));

    }
    public function update(Request $request) {

        if(!$request->especial){
            $request->especial =0;
        }

        $cepNoMask = str_replace("-","", $request->cep); // Limpando a máscara antes de enviar para o banco.
        $companies = [
            "name" => $request->name,
            "dti_atividade" => $request->dti_atividade,
            "dtf_atividade"=> $request->dtf_atividade,
            "especial" => $request->especial

        ];
        Company::where('id',$request->id)->update($companies);


        $adresses = [
            "public_area" => $request->public_area,
            "complement" => $request->complement,
            "cep" => $cepNoMask,
            "number" => (int)$request->number,
            "neighborhood" => $request->neighborhood,
            "latitude" => $request->latitude,
            "longitude" => $request->longitude
        ];

        Adress::where('company_id',$request->id)->update($adresses);
        return redirect()->action([CompanyController::class, 'index']);
    }

    public function delete($id) {
        Company::where('id',$id)->delete();
        return redirect()->action([CompanyController::class, 'index']);
    }

}

