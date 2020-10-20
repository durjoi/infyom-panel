<?php

namespace App\Http\Controllers;

use App\DataTables\obras_orcamentoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createobras_orcamentoRequest;
use App\Http\Requests\Updateobras_orcamentoRequest;
use App\Repositories\obras_orcamentoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class obras_orcamentoController extends AppBaseController
{
    /** @var  obras_orcamentoRepository */
    private $obrasOrcamentoRepository;

    public function __construct(obras_orcamentoRepository $obrasOrcamentoRepo)
    {
        $this->obrasOrcamentoRepository = $obrasOrcamentoRepo;
    }

    /**
     * Display a listing of the obras_orcamento.
     *
     * @param obras_orcamentoDataTable $obrasOrcamentoDataTable
     * @return Response
     */
    public function index(obras_orcamentoDataTable $obrasOrcamentoDataTable)
    {
        return $obrasOrcamentoDataTable->render('obras_orcamentos.index');
    }

    /**
     * Show the form for creating a new obras_orcamento.
     *
     * @return Response
     */
    public function create()
    {
        return view('obras_orcamentos.create');
    }

    /**
     * Store a newly created obras_orcamento in storage.
     *
     * @param Createobras_orcamentoRequest $request
     *
     * @return Response
     */
    public function store(Createobras_orcamentoRequest $request)
    {
        $input = $request->all();

        $obrasOrcamento = $this->obrasOrcamentoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/obrasOrcamentos.singular')]));

        return redirect(route('obrasOrcamentos.index'));
    }

    /**
     * Display the specified obras_orcamento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obrasOrcamento = $this->obrasOrcamentoRepository->find($id);

        if (empty($obrasOrcamento)) {
            Flash::error(__('models/obrasOrcamentos.singular').' '.__('messages.not_found'));

            return redirect(route('obrasOrcamentos.index'));
        }

        return view('obras_orcamentos.show')->with('obrasOrcamento', $obrasOrcamento);
    }

    /**
     * Show the form for editing the specified obras_orcamento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obrasOrcamento = $this->obrasOrcamentoRepository->find($id);

        if (empty($obrasOrcamento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasOrcamentos.singular')]));

            return redirect(route('obrasOrcamentos.index'));
        }

        return view('obras_orcamentos.edit')->with('obrasOrcamento', $obrasOrcamento);
    }

    /**
     * Update the specified obras_orcamento in storage.
     *
     * @param  int              $id
     * @param Updateobras_orcamentoRequest $request
     *
     * @return Response
     */
    public function update($id, Updateobras_orcamentoRequest $request)
    {
        $obrasOrcamento = $this->obrasOrcamentoRepository->find($id);

        if (empty($obrasOrcamento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasOrcamentos.singular')]));

            return redirect(route('obrasOrcamentos.index'));
        }

        $obrasOrcamento = $this->obrasOrcamentoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/obrasOrcamentos.singular')]));

        return redirect(route('obrasOrcamentos.index'));
    }

    /**
     * Remove the specified obras_orcamento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obrasOrcamento = $this->obrasOrcamentoRepository->find($id);

        if (empty($obrasOrcamento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasOrcamentos.singular')]));

            return redirect(route('obrasOrcamentos.index'));
        }

        $this->obrasOrcamentoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/obrasOrcamentos.singular')]));

        return redirect(route('obrasOrcamentos.index'));
    }
}
