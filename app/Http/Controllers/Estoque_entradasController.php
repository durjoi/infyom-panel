<?php

namespace App\Http\Controllers;

use App\DataTables\Estoque_entradasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstoque_entradasRequest;
use App\Http\Requests\UpdateEstoque_entradasRequest;
use App\Repositories\Estoque_entradasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Estoque_entradasController extends AppBaseController
{
    /** @var  Estoque_entradasRepository */
    private $estoqueEntradasRepository;

    public function __construct(Estoque_entradasRepository $estoqueEntradasRepo)
    {
        $this->estoqueEntradasRepository = $estoqueEntradasRepo;
    }

    /**
     * Display a listing of the Estoque_entradas.
     *
     * @param Estoque_entradasDataTable $estoqueEntradasDataTable
     * @return Response
     */
    public function index(Estoque_entradasDataTable $estoqueEntradasDataTable)
    {
        return $estoqueEntradasDataTable->render('estoque_entradas.index');
    }

    /**
     * Show the form for creating a new Estoque_entradas.
     *
     * @return Response
     */
    public function create()
    {
        return view('estoque_entradas.create');
    }

    /**
     * Store a newly created Estoque_entradas in storage.
     *
     * @param CreateEstoque_entradasRequest $request
     *
     * @return Response
     */
    public function store(CreateEstoque_entradasRequest $request)
    {
        $input = $request->all();

        $estoqueEntradas = $this->estoqueEntradasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/estoqueEntradas.singular')]));

        return redirect(route('estoqueEntradas.index'));
    }

    /**
     * Display the specified Estoque_entradas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estoqueEntradas = $this->estoqueEntradasRepository->find($id);

        if (empty($estoqueEntradas)) {
            Flash::error(__('models/estoqueEntradas.singular').' '.__('messages.not_found'));

            return redirect(route('estoqueEntradas.index'));
        }

        return view('estoque_entradas.show')->with('estoqueEntradas', $estoqueEntradas);
    }

    /**
     * Show the form for editing the specified Estoque_entradas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estoqueEntradas = $this->estoqueEntradasRepository->find($id);

        if (empty($estoqueEntradas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEntradas.singular')]));

            return redirect(route('estoqueEntradas.index'));
        }

        return view('estoque_entradas.edit')->with('estoqueEntradas', $estoqueEntradas);
    }

    /**
     * Update the specified Estoque_entradas in storage.
     *
     * @param  int              $id
     * @param UpdateEstoque_entradasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstoque_entradasRequest $request)
    {
        $estoqueEntradas = $this->estoqueEntradasRepository->find($id);

        if (empty($estoqueEntradas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEntradas.singular')]));

            return redirect(route('estoqueEntradas.index'));
        }

        $estoqueEntradas = $this->estoqueEntradasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/estoqueEntradas.singular')]));

        return redirect(route('estoqueEntradas.index'));
    }

    /**
     * Remove the specified Estoque_entradas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estoqueEntradas = $this->estoqueEntradasRepository->find($id);

        if (empty($estoqueEntradas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEntradas.singular')]));

            return redirect(route('estoqueEntradas.index'));
        }

        $this->estoqueEntradasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/estoqueEntradas.singular')]));

        return redirect(route('estoqueEntradas.index'));
    }
}
