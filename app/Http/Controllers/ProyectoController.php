<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Services\UFService;

class ProyectoController extends Controller
{
    protected $ufService;

    public function __construct(UFService $ufService)
    {
        $this->ufService = $ufService;
    }

    public function index()
    {
        $uf = $this->ufService->obtenerUF();
        return view('/welcome', compact('uf'));
    }

    public function listar()
    {
        $proyectos = (new Proyecto())->obtenerProyectos();
        return view('listar', compact('proyectos'));
    }

    public function listarId($id)
    {
        $modelo = new Proyecto();
        $proyectos = $modelo->obtenerProyectos($id);

        //Buscar proyecto por id
        $proyectoEncontrado = null;
        foreach ($proyectos as $p) {
            if ($p['id'] == $id) {
                $proyectoEncontrado = $p;
                break;
            }
        }

        //si id no existe
        if ($proyectoEncontrado == null) {
            return view('error', ['mensaje' => "El proyecto con id $id no existe."]);
        }

        $proyectos = (new Proyecto())->obtenerProyectos();
        return view('listarid', ['proyecto' => (object) $proyectoEncontrado]);
    }

    public function agregar()
    {
        return view('agregar');
    }

    public function agregarProyecto(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->id = $request->input('id');
        $proyecto->nombre = $request->input('nombre');
        $proyecto->fechaini = $request->input('fechaini');
        $proyecto->estado = $request->input('estado');
        $proyecto->responsable = $request->input('responsable');
        $proyecto->monto = $request->input('monto');

        return view('proyecto-creado', compact('proyecto'));
    }

    public function eliminar($id)
    {
        $modelo = new Proyecto();
        $proyectos = $modelo->obtenerProyectos($id);

        $proyectoEncontrado = null;
        foreach ($proyectos as $p) {
            if ($p['id'] == $id) {
                $proyectoEncontrado = $p;
                break;
            }
        }

        //si id no existe
        if ($proyectoEncontrado == null) {
            return view('error', ['mensaje' => "Error al eliminar. Proyecto con id $id no existe."]);
        }

        return view('eliminar', ['id' => $id, 'mensaje' => "Proyecto con id $id eliminado exitosamente."]);
    }

    //Método para mostrar formulario
    public function editar($id)
    {
        $modelo = new Proyecto();
        $proyectos = $modelo->obtenerProyectos();
        $proyectoEncontrado = null;
        foreach ($proyectos as $p) {
            if ($p['id'] == $id) {
                $proyectoEncontrado = $p;
                break;
            }
        }
        //si id no existe
        if ($proyectoEncontrado == null) {
            return view('error', ['mensaje' => "Error al actualizar. Proyecto con id $id no existe."]);
        }
        return view('actualizar', ['proyecto' => $proyectoEncontrado]);
    }

    public function actualizar(Request $request, $id)
    {
        $datosValidados = $request->validate([
            'nombre' => 'required|string',
            'fechaini' => 'required|date',
            'estado' => 'required|string',
            'responsable' => 'required|string',
            'monto' => 'required|numeric',
        ]);

        //Simular actualización
        return redirect("/actualizar/$id")->with('mensaje', 'Proyecto actualizado correctamente.');;
    }

    public function buscar()
    {
        return view('buscar');
    }

    public function buscarId(Request $request)
    {
        $id = $request->input('id');
        return redirect("/listar/$id");
    }
}
