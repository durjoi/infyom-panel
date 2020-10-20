<?php

namespace App\Http\Controllers;

use App\DataTables\tarifaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatetarifaRequest;
use App\Http\Requests\UpdatetarifaRequest;
use App\Repositories\tarifaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class tarifaController extends AppBaseController
{
    /** @var  tarifaRepository */
    private $tarifaRepository;

    public function __construct(tarifaRepository $tarifaRepo)
    {
        $this->tarifaRepository = $tarifaRepo;
    }

    /**
     * Display a listing of the tarifa.
     *
     * @param tarifaDataTable $tarifaDataTable
     * @return Response
     */
    public function index(tarifaDataTable $tarifaDataTable)
    {
        return $tarifaDataTable->render('tarifas.index');
    }

    /**
     * Show the form for creating a new tarifa.
     *
     * @return Response
     */
    public function create()
    {
        return view('tarifas.create');
    }

    /**
     * Store a newly created tarifa in storage.
     *
     * @param CreatetarifaRequest $request
     *
     * @return Response
     */
    public function store(CreatetarifaRequest $request)
    {
        $input = $request->all();

        $tarifa = $this->tarifaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tarifas.singular')]));

        return redirect(route('tarifas.index'));
    }

    /**
     * Display the specified tarifa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('models/tarifas.singular').' '.__('messages.not_found'));

            return redirect(route('tarifas.index'));
        }

        return view('tarifas.show')->with('tarifa', $tarifa);
    }

    /**
     * Show the form for editing the specified tarifa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tarifas.singular')]));

            return redirect(route('tarifas.index'));
        }

        return view('tarifas.edit')->with('tarifa', $tarifa);
    }

    /**
     * Update the specified tarifa in storage.
     *
     * @param  int              $id
     * @param UpdatetarifaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetarifaRequest $request)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tarifas.singular')]));

            return redirect(route('tarifas.index'));
        }

        $tarifa = $this->tarifaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tarifas.singular')]));

        return redirect(route('tarifas.index'));
    }

    /**
     * Remove the specified tarifa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tarifa = $this->tarifaRepository->find($id);

        if (empty($tarifa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tarifas.singular')]));

            return redirect(route('tarifas.index'));
        }

        $this->tarifaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tarifas.singular')]));

        return redirect(route('tarifas.index'));
    }
}
