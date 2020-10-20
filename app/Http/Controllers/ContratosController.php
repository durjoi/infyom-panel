<?php

namespace App\Http\Controllers;

use App\DataTables\ContratosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateContratosRequest;
use App\Http\Requests\UpdateContratosRequest;
use App\Repositories\ContratosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ContratosController extends AppBaseController
{
    /** @var  ContratosRepository */
    private $contratosRepository;

    public function __construct(ContratosRepository $contratosRepo)
    {
        $this->contratosRepository = $contratosRepo;
    }

    /**
     * Display a listing of the Contratos.
     *
     * @param ContratosDataTable $contratosDataTable
     * @return Response
     */
    public function index(ContratosDataTable $contratosDataTable)
    {
        return $contratosDataTable->render('contratos.index');
    }

    /**
     * Show the form for creating a new Contratos.
     *
     * @return Response
     */
    public function create()
    {
        return view('contratos.create');
    }

    /**
     * Store a newly created Contratos in storage.
     *
     * @param CreateContratosRequest $request
     *
     * @return Response
     */
    public function store(CreateContratosRequest $request)
    {
        $input = $request->all();

        $contratos = $this->contratosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/contratos.singular')]));

        return redirect(route('contratos.index'));
    }

    /**
     * Display the specified Contratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contratos = $this->contratosRepository->find($id);

        if (empty($contratos)) {
            Flash::error(__('models/contratos.singular').' '.__('messages.not_found'));

            return redirect(route('contratos.index'));
        }

        return view('contratos.show')->with('contratos', $contratos);
    }

    /**
     * Show the form for editing the specified Contratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contratos = $this->contratosRepository->find($id);

        if (empty($contratos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratos.singular')]));

            return redirect(route('contratos.index'));
        }

        return view('contratos.edit')->with('contratos', $contratos);
    }

    /**
     * Update the specified Contratos in storage.
     *
     * @param  int              $id
     * @param UpdateContratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratosRequest $request)
    {
        $contratos = $this->contratosRepository->find($id);

        if (empty($contratos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratos.singular')]));

            return redirect(route('contratos.index'));
        }

        $contratos = $this->contratosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/contratos.singular')]));

        return redirect(route('contratos.index'));
    }

    /**
     * Remove the specified Contratos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratos = $this->contratosRepository->find($id);

        if (empty($contratos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratos.singular')]));

            return redirect(route('contratos.index'));
        }

        $this->contratosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/contratos.singular')]));

        return redirect(route('contratos.index'));
    }
}
