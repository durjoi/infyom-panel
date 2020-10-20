<?php

namespace App\Http\Controllers;

use App\DataTables\Estoque_epi_epc_ferramentalDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstoque_epi_epc_ferramentalRequest;
use App\Http\Requests\UpdateEstoque_epi_epc_ferramentalRequest;
use App\Repositories\Estoque_epi_epc_ferramentalRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Estoque_epi_epc_ferramentalController extends AppBaseController
{
    /** @var  Estoque_epi_epc_ferramentalRepository */
    private $estoqueEpiEpcFerramentalRepository;

    public function __construct(Estoque_epi_epc_ferramentalRepository $estoqueEpiEpcFerramentalRepo)
    {
        $this->estoqueEpiEpcFerramentalRepository = $estoqueEpiEpcFerramentalRepo;
    }

    /**
     * Display a listing of the Estoque_epi_epc_ferramental.
     *
     * @param Estoque_epi_epc_ferramentalDataTable $estoqueEpiEpcFerramentalDataTable
     * @return Response
     */
    public function index(Estoque_epi_epc_ferramentalDataTable $estoqueEpiEpcFerramentalDataTable)
    {
        return $estoqueEpiEpcFerramentalDataTable->render('estoque_epi_epc_ferramentals.index');
    }

    /**
     * Show the form for creating a new Estoque_epi_epc_ferramental.
     *
     * @return Response
     */
    public function create()
    {
        return view('estoque_epi_epc_ferramentals.create');
    }

    /**
     * Store a newly created Estoque_epi_epc_ferramental in storage.
     *
     * @param CreateEstoque_epi_epc_ferramentalRequest $request
     *
     * @return Response
     */
    public function store(CreateEstoque_epi_epc_ferramentalRequest $request)
    {
        $input = $request->all();

        $estoqueEpiEpcFerramental = $this->estoqueEpiEpcFerramentalRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/estoqueEpiEpcFerramentals.singular')]));

        return redirect(route('estoqueEpiEpcFerramentals.index'));
    }

    /**
     * Display the specified Estoque_epi_epc_ferramental.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estoqueEpiEpcFerramental = $this->estoqueEpiEpcFerramentalRepository->find($id);

        if (empty($estoqueEpiEpcFerramental)) {
            Flash::error(__('models/estoqueEpiEpcFerramentals.singular').' '.__('messages.not_found'));

            return redirect(route('estoqueEpiEpcFerramentals.index'));
        }

        return view('estoque_epi_epc_ferramentals.show')->with('estoqueEpiEpcFerramental', $estoqueEpiEpcFerramental);
    }

    /**
     * Show the form for editing the specified Estoque_epi_epc_ferramental.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estoqueEpiEpcFerramental = $this->estoqueEpiEpcFerramentalRepository->find($id);

        if (empty($estoqueEpiEpcFerramental)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEpiEpcFerramentals.singular')]));

            return redirect(route('estoqueEpiEpcFerramentals.index'));
        }

        return view('estoque_epi_epc_ferramentals.edit')->with('estoqueEpiEpcFerramental', $estoqueEpiEpcFerramental);
    }

    /**
     * Update the specified Estoque_epi_epc_ferramental in storage.
     *
     * @param  int              $id
     * @param UpdateEstoque_epi_epc_ferramentalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstoque_epi_epc_ferramentalRequest $request)
    {
        $estoqueEpiEpcFerramental = $this->estoqueEpiEpcFerramentalRepository->find($id);

        if (empty($estoqueEpiEpcFerramental)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEpiEpcFerramentals.singular')]));

            return redirect(route('estoqueEpiEpcFerramentals.index'));
        }

        $estoqueEpiEpcFerramental = $this->estoqueEpiEpcFerramentalRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/estoqueEpiEpcFerramentals.singular')]));

        return redirect(route('estoqueEpiEpcFerramentals.index'));
    }

    /**
     * Remove the specified Estoque_epi_epc_ferramental from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estoqueEpiEpcFerramental = $this->estoqueEpiEpcFerramentalRepository->find($id);

        if (empty($estoqueEpiEpcFerramental)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEpiEpcFerramentals.singular')]));

            return redirect(route('estoqueEpiEpcFerramentals.index'));
        }

        $this->estoqueEpiEpcFerramentalRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/estoqueEpiEpcFerramentals.singular')]));

        return redirect(route('estoqueEpiEpcFerramentals.index'));
    }
}
