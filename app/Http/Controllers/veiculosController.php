<?php

namespace App\Http\Controllers;

use App\DataTables\veiculosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateveiculosRequest;
use App\Http\Requests\UpdateveiculosRequest;
use App\Repositories\veiculosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class veiculosController extends AppBaseController
{
    /** @var  veiculosRepository */
    private $veiculosRepository;

    public function __construct(veiculosRepository $veiculosRepo)
    {
        $this->veiculosRepository = $veiculosRepo;
    }

    /**
     * Display a listing of the veiculos.
     *
     * @param veiculosDataTable $veiculosDataTable
     * @return Response
     */
    public function index(veiculosDataTable $veiculosDataTable)
    {
        return $veiculosDataTable->render('veiculos.index');
    }

    /**
     * Show the form for creating a new veiculos.
     *
     * @return Response
     */
    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Store a newly created veiculos in storage.
     *
     * @param CreateveiculosRequest $request
     *
     * @return Response
     */
    public function store(CreateveiculosRequest $request)
    {
        $input = $request->all();

        $veiculos = $this->veiculosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/veiculos.singular')]));

        return redirect(route('veiculos.index'));
    }

    /**
     * Display the specified veiculos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $veiculos = $this->veiculosRepository->find($id);

        if (empty($veiculos)) {
            Flash::error(__('models/veiculos.singular').' '.__('messages.not_found'));

            return redirect(route('veiculos.index'));
        }

        return view('veiculos.show')->with('veiculos', $veiculos);
    }

    /**
     * Show the form for editing the specified veiculos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $veiculos = $this->veiculosRepository->find($id);

        if (empty($veiculos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculos.singular')]));

            return redirect(route('veiculos.index'));
        }

        return view('veiculos.edit')->with('veiculos', $veiculos);
    }

    /**
     * Update the specified veiculos in storage.
     *
     * @param  int              $id
     * @param UpdateveiculosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateveiculosRequest $request)
    {
        $veiculos = $this->veiculosRepository->find($id);

        if (empty($veiculos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculos.singular')]));

            return redirect(route('veiculos.index'));
        }

        $veiculos = $this->veiculosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/veiculos.singular')]));

        return redirect(route('veiculos.index'));
    }

    /**
     * Remove the specified veiculos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $veiculos = $this->veiculosRepository->find($id);

        if (empty($veiculos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculos.singular')]));

            return redirect(route('veiculos.index'));
        }

        $this->veiculosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/veiculos.singular')]));

        return redirect(route('veiculos.index'));
    }
}
