<?php

namespace App\Http\Controllers;

use App\DataTables\datosDoUsuarioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatedatosDoUsuarioRequest;
use App\Http\Requests\UpdatedatosDoUsuarioRequest;
use App\Repositories\datosDoUsuarioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class datosDoUsuarioController extends AppBaseController
{
    /** @var  datosDoUsuarioRepository */
    private $datosDoUsuarioRepository;

    public function __construct(datosDoUsuarioRepository $datosDoUsuarioRepo)
    {
        $this->datosDoUsuarioRepository = $datosDoUsuarioRepo;
    }

    /**
     * Display a listing of the datosDoUsuario.
     *
     * @param datosDoUsuarioDataTable $datosDoUsuarioDataTable
     * @return Response
     */
    public function index(datosDoUsuarioDataTable $datosDoUsuarioDataTable)
    {
        return $datosDoUsuarioDataTable->render('datos_do_usuarios.index');
    }

    /**
     * Show the form for creating a new datosDoUsuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('datos_do_usuarios.create');
    }

    /**
     * Store a newly created datosDoUsuario in storage.
     *
     * @param CreatedatosDoUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreatedatosDoUsuarioRequest $request)
    {
        $input = $request->all();

        $datosDoUsuario = $this->datosDoUsuarioRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/datosDoUsuarios.singular')]));

        return redirect(route('datosDoUsuarios.index'));
    }

    /**
     * Display the specified datosDoUsuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $datosDoUsuario = $this->datosDoUsuarioRepository->find($id);

        if (empty($datosDoUsuario)) {
            Flash::error(__('models/datosDoUsuarios.singular').' '.__('messages.not_found'));

            return redirect(route('datosDoUsuarios.index'));
        }

        return view('datos_do_usuarios.show')->with('datosDoUsuario', $datosDoUsuario);
    }

    /**
     * Show the form for editing the specified datosDoUsuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $datosDoUsuario = $this->datosDoUsuarioRepository->find($id);

        if (empty($datosDoUsuario)) {
            Flash::error(__('messages.not_found', ['model' => __('models/datosDoUsuarios.singular')]));

            return redirect(route('datosDoUsuarios.index'));
        }

        return view('datos_do_usuarios.edit')->with('datosDoUsuario', $datosDoUsuario);
    }

    /**
     * Update the specified datosDoUsuario in storage.
     *
     * @param  int              $id
     * @param UpdatedatosDoUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedatosDoUsuarioRequest $request)
    {
        $datosDoUsuario = $this->datosDoUsuarioRepository->find($id);

        if (empty($datosDoUsuario)) {
            Flash::error(__('messages.not_found', ['model' => __('models/datosDoUsuarios.singular')]));

            return redirect(route('datosDoUsuarios.index'));
        }

        $datosDoUsuario = $this->datosDoUsuarioRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/datosDoUsuarios.singular')]));

        return redirect(route('datosDoUsuarios.index'));
    }

    /**
     * Remove the specified datosDoUsuario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $datosDoUsuario = $this->datosDoUsuarioRepository->find($id);

        if (empty($datosDoUsuario)) {
            Flash::error(__('messages.not_found', ['model' => __('models/datosDoUsuarios.singular')]));

            return redirect(route('datosDoUsuarios.index'));
        }

        $this->datosDoUsuarioRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/datosDoUsuarios.singular')]));

        return redirect(route('datosDoUsuarios.index'));
    }
}
