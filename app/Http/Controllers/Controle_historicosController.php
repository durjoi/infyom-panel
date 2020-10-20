<?php

namespace App\Http\Controllers;

use App\DataTables\Controle_historicosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateControle_historicosRequest;
use App\Http\Requests\UpdateControle_historicosRequest;
use App\Repositories\Controle_historicosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Controle_historicosController extends AppBaseController
{
    /** @var  Controle_historicosRepository */
    private $controleHistoricosRepository;

    public function __construct(Controle_historicosRepository $controleHistoricosRepo)
    {
        $this->controleHistoricosRepository = $controleHistoricosRepo;
    }

    /**
     * Display a listing of the Controle_historicos.
     *
     * @param Controle_historicosDataTable $controleHistoricosDataTable
     * @return Response
     */
    public function index(Controle_historicosDataTable $controleHistoricosDataTable)
    {
        return $controleHistoricosDataTable->render('controle_historicos.index');
    }

    /**
     * Show the form for creating a new Controle_historicos.
     *
     * @return Response
     */
    public function create()
    {
        return view('controle_historicos.create');
    }

    /**
     * Store a newly created Controle_historicos in storage.
     *
     * @param CreateControle_historicosRequest $request
     *
     * @return Response
     */
    public function store(CreateControle_historicosRequest $request)
    {
        $input = $request->all();

        $controleHistoricos = $this->controleHistoricosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/controleHistoricos.singular')]));

        return redirect(route('controleHistoricos.index'));
    }

    /**
     * Display the specified Controle_historicos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $controleHistoricos = $this->controleHistoricosRepository->find($id);

        if (empty($controleHistoricos)) {
            Flash::error(__('models/controleHistoricos.singular').' '.__('messages.not_found'));

            return redirect(route('controleHistoricos.index'));
        }

        return view('controle_historicos.show')->with('controleHistoricos', $controleHistoricos);
    }

    /**
     * Show the form for editing the specified Controle_historicos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $controleHistoricos = $this->controleHistoricosRepository->find($id);

        if (empty($controleHistoricos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/controleHistoricos.singular')]));

            return redirect(route('controleHistoricos.index'));
        }

        return view('controle_historicos.edit')->with('controleHistoricos', $controleHistoricos);
    }

    /**
     * Update the specified Controle_historicos in storage.
     *
     * @param  int              $id
     * @param UpdateControle_historicosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateControle_historicosRequest $request)
    {
        $controleHistoricos = $this->controleHistoricosRepository->find($id);

        if (empty($controleHistoricos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/controleHistoricos.singular')]));

            return redirect(route('controleHistoricos.index'));
        }

        $controleHistoricos = $this->controleHistoricosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/controleHistoricos.singular')]));

        return redirect(route('controleHistoricos.index'));
    }

    /**
     * Remove the specified Controle_historicos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $controleHistoricos = $this->controleHistoricosRepository->find($id);

        if (empty($controleHistoricos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/controleHistoricos.singular')]));

            return redirect(route('controleHistoricos.index'));
        }

        $this->controleHistoricosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/controleHistoricos.singular')]));

        return redirect(route('controleHistoricos.index'));
    }
}
