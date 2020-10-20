<?php

namespace App\Http\Controllers;

use App\DataTables\tipo_solicitanteDataTable;
use App\Http\Requests;
use App\Http\Requests\Createtipo_solicitanteRequest;
use App\Http\Requests\Updatetipo_solicitanteRequest;
use App\Repositories\tipo_solicitanteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class tipo_solicitanteController extends AppBaseController
{
    /** @var  tipo_solicitanteRepository */
    private $tipoSolicitanteRepository;

    public function __construct(tipo_solicitanteRepository $tipoSolicitanteRepo)
    {
        $this->tipoSolicitanteRepository = $tipoSolicitanteRepo;
    }

    /**
     * Display a listing of the tipo_solicitante.
     *
     * @param tipo_solicitanteDataTable $tipoSolicitanteDataTable
     * @return Response
     */
    public function index(tipo_solicitanteDataTable $tipoSolicitanteDataTable)
    {
        return $tipoSolicitanteDataTable->render('tipo_solicitantes.index');
    }

    /**
     * Show the form for creating a new tipo_solicitante.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_solicitantes.create');
    }

    /**
     * Store a newly created tipo_solicitante in storage.
     *
     * @param Createtipo_solicitanteRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_solicitanteRequest $request)
    {
        $input = $request->all();

        $tipoSolicitante = $this->tipoSolicitanteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tipoSolicitantes.singular')]));

        return redirect(route('tipoSolicitantes.index'));
    }

    /**
     * Display the specified tipo_solicitante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoSolicitante = $this->tipoSolicitanteRepository->find($id);

        if (empty($tipoSolicitante)) {
            Flash::error(__('models/tipoSolicitantes.singular').' '.__('messages.not_found'));

            return redirect(route('tipoSolicitantes.index'));
        }

        return view('tipo_solicitantes.show')->with('tipoSolicitante', $tipoSolicitante);
    }

    /**
     * Show the form for editing the specified tipo_solicitante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoSolicitante = $this->tipoSolicitanteRepository->find($id);

        if (empty($tipoSolicitante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoSolicitantes.singular')]));

            return redirect(route('tipoSolicitantes.index'));
        }

        return view('tipo_solicitantes.edit')->with('tipoSolicitante', $tipoSolicitante);
    }

    /**
     * Update the specified tipo_solicitante in storage.
     *
     * @param  int              $id
     * @param Updatetipo_solicitanteRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_solicitanteRequest $request)
    {
        $tipoSolicitante = $this->tipoSolicitanteRepository->find($id);

        if (empty($tipoSolicitante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoSolicitantes.singular')]));

            return redirect(route('tipoSolicitantes.index'));
        }

        $tipoSolicitante = $this->tipoSolicitanteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tipoSolicitantes.singular')]));

        return redirect(route('tipoSolicitantes.index'));
    }

    /**
     * Remove the specified tipo_solicitante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoSolicitante = $this->tipoSolicitanteRepository->find($id);

        if (empty($tipoSolicitante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoSolicitantes.singular')]));

            return redirect(route('tipoSolicitantes.index'));
        }

        $this->tipoSolicitanteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tipoSolicitantes.singular')]));

        return redirect(route('tipoSolicitantes.index'));
    }
}
