<?php

namespace App\Http\Controllers;

use App\DataTables\obras_solicitanteDataTable;
use App\Http\Requests;
use App\Http\Requests\Createobras_solicitanteRequest;
use App\Http\Requests\Updateobras_solicitanteRequest;
use App\Repositories\obras_solicitanteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class obras_solicitanteController extends AppBaseController
{
    /** @var  obras_solicitanteRepository */
    private $obrasSolicitanteRepository;

    public function __construct(obras_solicitanteRepository $obrasSolicitanteRepo)
    {
        $this->obrasSolicitanteRepository = $obrasSolicitanteRepo;
    }

    /**
     * Display a listing of the obras_solicitante.
     *
     * @param obras_solicitanteDataTable $obrasSolicitanteDataTable
     * @return Response
     */
    public function index(obras_solicitanteDataTable $obrasSolicitanteDataTable)
    {
        return $obrasSolicitanteDataTable->render('obras_solicitantes.index');
    }

    /**
     * Show the form for creating a new obras_solicitante.
     *
     * @return Response
     */
    public function create()
    {
        return view('obras_solicitantes.create');
    }

    /**
     * Store a newly created obras_solicitante in storage.
     *
     * @param Createobras_solicitanteRequest $request
     *
     * @return Response
     */
    public function store(Createobras_solicitanteRequest $request)
    {
        $input = $request->all();

        $obrasSolicitante = $this->obrasSolicitanteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/obrasSolicitantes.singular')]));

        return redirect(route('obrasSolicitantes.index'));
    }

    /**
     * Display the specified obras_solicitante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obrasSolicitante = $this->obrasSolicitanteRepository->find($id);

        if (empty($obrasSolicitante)) {
            Flash::error(__('models/obrasSolicitantes.singular').' '.__('messages.not_found'));

            return redirect(route('obrasSolicitantes.index'));
        }

        return view('obras_solicitantes.show')->with('obrasSolicitante', $obrasSolicitante);
    }

    /**
     * Show the form for editing the specified obras_solicitante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obrasSolicitante = $this->obrasSolicitanteRepository->find($id);

        if (empty($obrasSolicitante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasSolicitantes.singular')]));

            return redirect(route('obrasSolicitantes.index'));
        }

        return view('obras_solicitantes.edit')->with('obrasSolicitante', $obrasSolicitante);
    }

    /**
     * Update the specified obras_solicitante in storage.
     *
     * @param  int              $id
     * @param Updateobras_solicitanteRequest $request
     *
     * @return Response
     */
    public function update($id, Updateobras_solicitanteRequest $request)
    {
        $obrasSolicitante = $this->obrasSolicitanteRepository->find($id);

        if (empty($obrasSolicitante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasSolicitantes.singular')]));

            return redirect(route('obrasSolicitantes.index'));
        }

        $obrasSolicitante = $this->obrasSolicitanteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/obrasSolicitantes.singular')]));

        return redirect(route('obrasSolicitantes.index'));
    }

    /**
     * Remove the specified obras_solicitante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obrasSolicitante = $this->obrasSolicitanteRepository->find($id);

        if (empty($obrasSolicitante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasSolicitantes.singular')]));

            return redirect(route('obrasSolicitantes.index'));
        }

        $this->obrasSolicitanteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/obrasSolicitantes.singular')]));

        return redirect(route('obrasSolicitantes.index'));
    }
}
