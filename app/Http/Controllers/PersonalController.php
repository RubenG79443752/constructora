<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Models\Pai;
use App\Models\Cargo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
/**
 * Class PersonalController
 * @package App\Http\Controllers
 */
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = Personal::paginate();

        return view('personal.index', compact('personals'))
            ->with('i', (request()->input('page', 1) - 1) * $personals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = new Personal();
        $paices = Pai::pluck('pais','id');
        $cargos = Cargo::pluck('cargo','id');
        $accion = 'insertar';
        return view('personal.create', compact('personal','paices','cargos','accion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Personal::$rules);

        $personal = Personal::create($request->all());

        $data['name'] = $request->nombre.' '.$request->primer_apellido.' '.$request->segundo_apellido.'['.$personal->id.']';
        $data['email'] = $request->nombre[0].$request->primer_apellido.'@correo.com';
        $data['rol'] = 'Trabajador';
        $data['usuario'] = strtolower($request->nombre[0].$request->primer_apellido);
        $data['estado'] = 'Activo';
        $data['password'] = Hash::make($request->doc_identidad);

        $user = User::create($data);


        return redirect()->route('personals.index')
            ->with('success', 'Personal creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);

        return view('personal.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);
        $paices = Pai::pluck('pais','id');
        $cargos = Cargo::pluck('cargo','id');
        $accion = 'modificar';
        return view('personal.edit', compact('personal','paices','cargos','accion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        request()->validate(Personal::$rules);

        $personal->update($request->all());

        return redirect()->route('personals.index')
            ->with('success', 'Datos de personal actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personal = Personal::find($id)->delete();

        return redirect()->route('personals.index')
            ->with('success', 'Personal eliminado exitosamente');
    }
}
