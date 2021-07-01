<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Category;
use App\Models\Tecnology;
use App\Models\Skill;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Salary;
use App\Models\Experience;

use App\Http\Requests\vacancieRequest;


class VacanciesController extends Controller
{
    //componente de livewire framework permite trabajar con componentes

      public function index()
    {
        return view('admin.vacancies.index');
    }

    public function create()
    {
        //pluck sirve para generar un array y solo toma un campo del objeto
        $categories = Category::pluck('name', 'id');
        $countries = Country::pluck('long_description', 'id');
        $wages = Salary::pluck('salary', 'id');
        $currencies = Currency::pluck('currency', 'id');
        $experiences = Experience::pluck('experience', 'id');
        $tecnologies = Tecnology::all();
        return view('admin.vacancies.create', compact('categories', 'countries',  'wages', 'currencies', 'tecnologies', 'experiences'));
        //trae la consulta con las informacion y lo pasa con el concatena
    }

    public function store(vacancieRequest $request)
    //aquí envio la info a la BD
    {
        $vacancy = Vacancy::create($request->all());
        // attach gurda dos foraneas
        if ($request->tecnologies) {
           $vacancy->tecnologies()->attach($request->tecnologies);
        }
        return redirect()->route('admin.vacancies.index', $vacancy)->with('info', 'La vacante se creó con éxito.');
    }

    public function show(Vacancy $vacancy)
    {
        return view('admin.vacancies.show', compact('vacancy'));
        // return redirect()->route('vacancy', $vacancy->id);
      
    }
 
    

    public function edit(Vacancy $vacancy)
    {
        // $this->authorize('author', $vacancy);

        $categories = Category::pluck('name', 'id');
        $countries = Country::pluck('long_description', 'id');
        $wages = Salary::pluck('salary', 'id');
        $currencies = Currency::pluck('currency', 'id');
        $experiences = Experience::pluck('experience', 'id');
        $tecnologies = Tecnology::all();
        // $skills = Skill::all();

        return view('admin.vacancies.edit', compact('vacancy', 'categories', 'countries', 'wages', 'currencies', 'tecnologies', 'experiences'));
    }


   

    public function update(VacancieRequest $request, Vacancy $vacancy)

    {
        // $this->authorize('author', $vacancy);

        $vacancy->update($request->all());

        if ($request->tecnologies) {
            $vacancy->tecnologies()->sync($request->tecnologies);
        }
        // // el método sync en cambio de attach, este sincroniza la coleccion qe le mandamos con los rrefistros que existan actulamente
        return redirect()->route('admin.vacancies.index', $vacancy)->with('info', 'La vacante se actualizó con éxito.');
    }

    public function destroy(Vacancy $vacancy)
    {
        $this->authorize('author', $vacancy);

        $vacancy->delete();

        return redirect()->route('admin.vacancies.index', $vacancy)->with('info', 'La vacante se eliminó exitosamente.');
    }
}