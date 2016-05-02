<?php

namespace suge\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use suge\Http\Requests;
use DCN\RBAC\Models\Role;
use DB;
use Validator;
use Flash;


class RoleController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $roles = Role::all();
        return view('sistema.perfil.index', ['perfis' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $roles = array( '0' =>'Nenhum') +
                DB::table('roles')->orderBy('id', 'asc')->lists('name', 'id');

        return view('sistema.perfil.create', array('perfil' => $roles));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        //$validator = Validator::make($input);
        
        if ($input['parent_id'] == 0) { $input['parent_id'] = NULL; }

//        if ($validator->fails()) {
//            return redirect()->back()
//                            ->withErrors($validator)
//                            ->withInput();
//        }

        Role::create($input);

        Flash::success('Perfil criado com sucesso!');
        return redirect('sistema/perfil');

        //return redirect()->back()->with('flash_message', 'Perfil criado com suscesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        //
        $role = Role::findOrFail($id);
        $role->delete();
        Flash::success('Perfil excluido com sucesso!');
        return redirect('sistema/perfil');
    }

}
