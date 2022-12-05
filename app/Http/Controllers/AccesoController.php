<?php

namespace App\Http\Controllers;

use App\Models\Acceso;
use Illuminate\Http\Request;

/**
 * Class AccesoController
 * @package App\Http\Controllers
 */
class AccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesos = Acceso::paginate();

        return view('acceso.index', compact('accesos'))
            ->with('i', (request()->input('page', 1) - 1) * $accesos->perPage());
    }
    public function index_acceso($user_id)
    {
        $accesos = Acceso::where('user_id',$user_id)->paginate();

        return view('acceso.index', compact('accesos'))
            ->with('i', (request()->input('page', 1) - 1) * $accesos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acceso = new Acceso();
        return view('acceso.create', compact('acceso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Acceso::$rules);

        $acceso = Acceso::create($request->all());

        return redirect()->route('accesos.index')
            ->with('success', 'Acceso creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acceso = Acceso::find($id);

        return view('acceso.show', compact('acceso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acceso = Acceso::find($id);

        return view('acceso.edit', compact('acceso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Acceso $acceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acceso $acceso)
    {
        request()->validate(Acceso::$rules);

        $acceso->update($request->all());

<<<<<<< HEAD
        return redirect()->route('index_acceso',$request->id)
        ->with('success', 'Acceso actulizado satisfactoriamente');
=======
<<<<<<< HEAD
        return redirect()->route('index_acceso',$request->id)
=======
        return redirect()->route('accesos.index')
>>>>>>> d030ea51c7a277a91de4a10625f09008a194c681
            ->with('success', 'Acceso actulizado satisfactoriamente');
>>>>>>> ddd0ed168aca60f519cb7397505fd5f4a6a8da4d
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ddd0ed168aca60f519cb7397505fd5f4a6a8da4d
        $acceso = Acceso::find($id);
$mensaje = '';
if($acceso->estado == 'Habilitado'){
    $acceso->estado = 'Deshabilitado';
    $mensaje = 'Acceso habilitado';
}
else{
    $acceso->estado = 'Habilitado';
    $mensaje = 'Aceso habilitado';

}
$acceso->save();

return redirect()->route('accesos.index')
    ->with('success', $mensaje);
    }
}
<<<<<<< HEAD
=======
=======
        $acceso = Acceso::find($id)->delete();

        return redirect()->route('accesos.index')
            ->with('success', 'Acceso eliminado satisfatoriamente');
    }
}
>>>>>>> d030ea51c7a277a91de4a10625f09008a194c681
>>>>>>> ddd0ed168aca60f519cb7397505fd5f4a6a8da4d
