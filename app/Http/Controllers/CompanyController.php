<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::all();

        $title = 'Listado de empresas';

        return view('companies.index', compact('title', 'companies'));
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => ['required','unique:companies,name'],
            'tag' => ['required','unique:companies,tag','regex:/^[A-Z0-9]{2}$/'],
            'country' => ['required','regex:/^[A-ZÑ][a-zñ]+( [A-ZÑ][a-zñ]+)*$/'],
            'foundation' => ['required','regex:/^\d{4}$/'],
            'ceo' => ['required','unique:companies,ceo','regex:/^[A-ZÑ][a-zñ]+( [A-ZÑ][a-zñ]+)*$/'],
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'tag.required' => 'El campo etiqueta es obligatorio',
            'country.required' => 'El campo pais es obligatorio',
            'foundation.required' => 'El campo fundacion es obligatorio',
            'ceo.required' => 'El campo CEO es obligatorio',
            'name.unique' => 'El nombre de la empresa ya esta en uso',
            'tag.unique' => 'El nombre de la etiqueta ya esta en uso',
            'ceo.unique' => 'El nombre del CEO ya está en uso',
            'tag.regex' => 'El formato de la etiqueta no es el correcto',
            'country.regex' => 'El formato del pais no es el correcto',
            'foundation.regex' => 'El formato del año de fundacion no es el correcto',
            'ceo.regex' => 'El formato del nombre del CEO no es el correcto'
        ]);

        Company::create([
            'name' => $data['name'],
            'tag' => $data['tag'],
            'country' => $data['country'],
            'foundation' => $data['foundation'],
            'ceo' => $data['ceo']
        ]);

        return redirect()->route('companies.index');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', ['company' => $company]);
    }

    public function update(Company $company)
    {
        $data = request()->validate([
            'name' => 'required',
            'tag' => ['required',Rule::unique('companies')->ignore($company->tag),'regex:/^[A-Z0-9]{2}$/'],
            'country' => ['required','regex:/^[A-ZÑ][a-zñ]+( [A-ZÑ][a-zñ]+)*$/'],
            'foundation' => ['required','regex:/^\d{4}$/'],
            'ceo' => ['required',Rule::unique('companies')->ignore($company->ceo),'regex:/^[A-ZÑ][a-zñ]+( [A-ZÑ][a-zñ]+)*$/'],
        ],[
            'name.required' => 'El campo nombre es obligatorio',
            'tag.required' => 'El campo etiqueta es obligatorio',
            'country.required' => 'El campo pais es obligatorio',
            'foundation.required' => 'El campo fundacion es obligatorio',
            'ceo.required' => 'El campo CEO es obligatorio',
            'tag.unique' => 'El nombre de la etiqueta ya esta en uso',
            'ceo.unique' => 'El nombre del CEO ya está en uso',
            'tag.regex' => 'El formato de la etiqueta no es el correcto',
            'country.regex' => 'El formato del pais no es el correcto',
            'foundation.regex' => 'El formato del año de fundacion no es el correcto',
            'ceo.regex' => 'El formato del nombre del CEO no es el correcto'
        ]);

        $company->update($data);

        return redirect()->route('companies.show', ['company' => $company]);
    }

    function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index');
    }
}
