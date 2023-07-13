<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Client;
use App\Models\Communitys;
use App\Models\Coordinadores;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class GrlController extends Controller
{
    public function index(){
        $datos = Note::all(); // Suponiendo que tienes un modelo 'Nota' para las notas
        $admin = Admins::all();
        //return $datos;
        return view('layouts.admin.dashboard',compact('datos', 'admin'));
    }

    public function indAdmin(){
        $datos = Note::all();
        $community = Communitys::all();



        return view('layouts.community.dashboard', compact('community', 'datos'));
    }


    public function indexCoor() {
        $datos = Note::all();

        $user = Auth::guard('coordinador')->user();
        $userId = $user->id;

        // Realizar la consulta SELECT para el guard 'coordinador'
        $results = DB::select('SELECT * FROM communitys WHERE coordinadores_id = ?', [$userId]);
        //return $results;
        // Utiliza $results según tus necesidades

        return view('layouts.coordinador.dashboard', compact('datos', 'results'));
    }


    public function guardarNota(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ])->validate();

        Note::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('dashboard');
    }


    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $datos = Note::where('title', 'like', '%' . $searchTerm . '%')
                     ->orWhere('description', 'like', '%' . $searchTerm . '%')
                     ->get();

        return view('layouts.community.dashboard', ['datos' => $datos]);

    }

    //Administradores

    public function administradores()
    {
        $administradores = Admins::paginate();

        return view('administradores.dashboard', compact('administradores'))
        ->with('i', (request()->input('page', 1) - 1) * $administradores->perPage());
    }

    public function crearadministradores()
    {
        return view('administradores.create');
    }

    public function guardaradministradores(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $administradores = new Admins;
        $administradores->name = $request->name;
        $administradores->last_name = $request->last_name;
        $administradores->email = $request->email;
        $administradores->password = Hash::make($request->password);
        $administradores->save();

        $administradores->assignRole('admin');

        return redirect()->route('administradores');
    }



    public function actualizaradministradores($id)
    {

        $administradores = Admins::findOrFail($id);

        return view('administradores.update', compact('administradores'));
    }


    public function updateadministradores(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar el coordinador por su ID
        $administradores = Admins::findOrFail($id);

        // Actualizar los datos del coordinador
        $administradores->name = $request->name;
        $administradores->last_name = $request->last_name;
        $administradores->email = $request->email;
        $administradores->password = Hash::make($request->password);

        // Guardar los cambios en la base de datos
        $administradores->save();

        // Redireccionar a la página de visualización del coordinador actualizado
        return redirect()->action([GrlController::class, 'administradores'])->with('success', 'Coordinador actualizado exitosamente');
    }




    public function eliminaradministradores($id)
    {
        $administrador = Admins::findOrFail($id);
        $administrador->delete();

        return redirect()->action([GrlController::class, 'administradores'])->with('success', 'Coordinador eliminado correctamente');
    }







    ///Cordinadores
    public function cordinators()
    {
        $coordinadors = Coordinadores::paginate();

        return view('coordinadores.dashboard', compact('coordinadors'))
            ->with('i', (request()->input('page', 1) - 1) * $coordinadors->perPage());
    }



    public function crear()
    {
        $administradores = Admins::all();
        return view('coordinadores.create', compact('administradores'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'admins_id' => 'required|exists:admins,id',
        ]);

        $coordinador = new Coordinadores;
        $coordinador->name = $request->name;
        $coordinador->last_name = $request->last_name;
        $coordinador->email = $request->email;
        $coordinador->password = Hash::make($request->password);
        $coordinador->admins_id = $request->admins_id;
        $coordinador->save();

        $role = Role::where('name', 'coordinador')->first();
        $coordinador->assignRole($role);

        return redirect()->route('cordinador')->with('success', 'Coordinador agregado exitosamente');
    }

    public function actualizar($id)
    {
        $coordinador = Coordinadores::findOrFail($id);
        $administradores = Admins::all();
        return view('coordinadores.update', compact('administradores', 'coordinador'));
    }


    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'admins_id' => 'required|exists:admins,id'
        ]);

        // Buscar el coordinador por su ID
        $coordinador = Coordinadores::findOrFail($id);

        // Actualizar los datos del coordinador
        $coordinador->name = $request->name;
        $coordinador->last_name = $request->last_name;
        $coordinador->email = $request->email;
        $coordinador->password = Hash::make($request->password);
        $coordinador->admins_id = $request->admins_id;

        // Guardar los cambios en la base de datos
        $coordinador->save();

        // Redireccionar a la página de visualización del coordinador actualizado
        return redirect()->action([GrlController::class, 'cordinators'])->with('success', 'Coordinador actualizado exitosamente');
    }

    public function eliminar($id)
    {
        $coordinador = Coordinadores::findOrFail($id);
        $coordinador->delete();

        return redirect()->action([GrlController::class, 'cordinators'])->with('success', 'Coordinador eliminado correctamente');
    }



    ///Communitys
    public function communitys()
    {
        $communitys = Communitys::paginate();

        return view('community.dashboard', compact('communitys'))
            ->with('i', (request()->input('page', 1) - 1) * $communitys->perPage());
    }



    public function crearC()
    {
        $coordinadores = Coordinadores::all();
        return view('community.create', compact('coordinadores'));
    }


    public function guardarC(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'coordinadores_id' => 'required',
        ]);

        $communitys = new Communitys();
        $communitys->name = $request->name;
        $communitys->last_name = $request->last_name;
        $communitys->email = $request->email;
        $communitys->password = Hash::make($request->password);
        $communitys->coordinadores_id = $request->coordinadores_id;
        $communitys->save();


        $role = Role::where('name', 'community')->first();
        $communitys->assignRole($role);




        return redirect()->route('communitys')->with('success', 'Coordinador agregado exitosamente');
    }

    public function actualizarC($id)
    {
        $communitys = Communitys::findOrFail($id);
        $coordinadores = Coordinadores::all();
        return view('community.update', compact('communitys', 'coordinadores'));
    }


    public function updateC(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'coordinadores_id' => 'required'
        ]);

        // Buscar el coordinador por su ID
        $communitys = Communitys::findOrFail($id);

        // Actualizar los datos del coordinador


        $communitys->name = $request->name;
        $communitys->last_name = $request->last_name;
        $communitys->email = $request->email;
        $communitys->password = $request->password;
        $communitys->coordinadores_id = $request->coordinadores_id;


        // Guardar los cambios en la base de datos
        $communitys->save();

        // Redireccionar a la página de visualización del coordinador actualizado
        return redirect()->action([GrlController::class, 'communitys'])->with('success', 'Coordinador actualizado exitosamente');
    }

    public function eliminarC($id)
    {
        $communitys = Communitys::findOrFail($id);
        $communitys->delete();

        return redirect()->action([GrlController::class, 'communitys'])->with('success', 'Coordinador eliminado correctamente');
    }







    //////]]//////////////


    //Clientes

    public function clientes()
    {
        $clients = Client::paginate();

        return view('clientes.dashboard', compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * $clients->perPage());
    }


    public function crearClientes()
    {
        $community = Communitys::all();

        return view('clientes.create', compact('community'));
    }

    public function guardarClientes(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'fecha_inicio' => 'required',
            'fecha_vencimiento' => 'required',
            'fecha_pago' => 'required',
            'communitys_id' => 'required',
        ]);

        $clientes = new Client();
        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->correo = $request->correo;
        $clientes->telefono = $request->telefono;
        $clientes->fecha_inicio = $request->fecha_inicio;
        $clientes->fecha_vencimiento = $request->fecha_vencimiento;
        $clientes->fecha_pago = $request->fecha_pago;
        $clientes->communitys_id = $request->communitys_id;
        $clientes->save();







        return redirect()->route('clientes')->with('success', 'Coordinador agregado exitosamente');
    }

    public function actualizarClientes($id)
    {
        $clients = Client::findOrFail($id);
        $community = Communitys::all();
        return view('clientes.update', compact('clients', 'community'));
    }

    public function updateClientes(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'fecha_inicio' => 'required',
            'fecha_vencimiento' => 'required',
            'fecha_pago' => 'required',
            'communitys_id' => 'required',
        ]);

        // Buscar el coordinador por su ID
        $clientes = Client::findOrFail($id);

        // Actualizar los datos del coordinador





        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->correo = $request->correo;
        $clientes->telefono = $request->telefono;
        $clientes->fecha_inicio = $request->fecha_inicio;
        $clientes->fecha_vencimiento = $request->fecha_vencimiento;
        $clientes->fecha_pago = $request->fecha_pago;
        $clientes->communitys_id = $request->communitys_id;


        // Guardar los cambios en la base de datos
        $clientes->save();

        // Redireccionar a la página de visualización del coordinador actualizado
        return redirect()->action([GrlController::class, 'clientes'])->with('success', 'Coordinador actualizado exitosamente');
    }

}


