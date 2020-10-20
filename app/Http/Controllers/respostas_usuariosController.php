<?php

namespace App\Http\Controllers;

use App\DataTables\respostas_usuariosDataTable;
use App\Http\Requests;
use App\Http\Requests\Createrespostas_usuariosRequest;
use App\Http\Requests\Updaterespostas_usuariosRequest;
use App\Repositories\respostas_usuariosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class respostas_usuariosController extends AppBaseController
{
    /** @var  respostas_usuariosRepository */
    private $respostasUsuariosRepository;

    public function __construct(respostas_usuariosRepository $respostasUsuariosRepo)
    {
        $this->respostasUsuariosRepository = $respostasUsuariosRepo;
    }

    /**
     * Display a listing of the respostas_usuarios.
     *
     * @param respostas_usuariosDataTable $respostasUsuariosDataTable
     * @return Response
     */
    public function index(respostas_usuariosDataTable $respostasUsuariosDataTable)
    {
        return $respostasUsuariosDataTable->render('respostas_usuarios.index');
    }

    /**
     * Show the form for creating a new respostas_usuarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('respostas_usuarios.create');
    }

    /**
     * Store a newly created respostas_usuarios in storage.
     *
     * @param Createrespostas_usuariosRequest $request
     *
     * @return Response
     */
    public function store(Createrespostas_usuariosRequest $request)
    {
        $input = $request->all();

        $respostasUsuarios = $this->respostasUsuariosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/respostasUsuarios.singular')]));

        return redirect(route('respostasUsuarios.index'));
    }

    /**
     * Display the specified respostas_usuarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $respostasUsuarios = $this->respostasUsuariosRepository->find($id);

        if (empty($respostasUsuarios)) {
            Flash::error(__('models/respostasUsuarios.singular').' '.__('messages.not_found'));

            return redirect(route('respostasUsuarios.index'));
        }

        return view('respostas_usuarios.show')->with('respostasUsuarios', $respostasUsuarios);
    }

    /**
     * Show the form for editing the specified respostas_usuarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $respostasUsuarios = $this->respostasUsuariosRepository->find($id);

        if (empty($respostasUsuarios)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostasUsuarios.singular')]));

            return redirect(route('respostasUsuarios.index'));
        }

        return view('respostas_usuarios.edit')->with('respostasUsuarios', $respostasUsuarios);
    }

    /**
     * Update the specified respostas_usuarios in storage.
     *
     * @param  int              $id
     * @param Updaterespostas_usuariosRequest $request
     *
     * @return Response
     */
    public function update($id, Updaterespostas_usuariosRequest $request)
    {
        $respostasUsuarios = $this->respostasUsuariosRepository->find($id);

        if (empty($respostasUsuarios)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostasUsuarios.singular')]));

            return redirect(route('respostasUsuarios.index'));
        }

        $respostasUsuarios = $this->respostasUsuariosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/respostasUsuarios.singular')]));

        return redirect(route('respostasUsuarios.index'));
    }

    /**
     * Remove the specified respostas_usuarios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $respostasUsuarios = $this->respostasUsuariosRepository->find($id);

        if (empty($respostasUsuarios)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostasUsuarios.singular')]));

            return redirect(route('respostasUsuarios.index'));
        }

        $this->respostasUsuariosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/respostasUsuarios.singular')]));

        return redirect(route('respostasUsuarios.index'));
    }
}
