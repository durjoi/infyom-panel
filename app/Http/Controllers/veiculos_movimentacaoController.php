<?php

namespace App\Http\Controllers;

use App\DataTables\veiculos_movimentacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createveiculos_movimentacaoRequest;
use App\Http\Requests\Updateveiculos_movimentacaoRequest;
use App\Repositories\veiculos_movimentacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class veiculos_movimentacaoController extends AppBaseController
{
    /** @var  veiculos_movimentacaoRepository */
    private $veiculosMovimentacaoRepository;

    public function __construct(veiculos_movimentacaoRepository $veiculosMovimentacaoRepo)
    {
        $this->veiculosMovimentacaoRepository = $veiculosMovimentacaoRepo;
    }

    /**
     * Display a listing of the veiculos_movimentacao.
     *
     * @param veiculos_movimentacaoDataTable $veiculosMovimentacaoDataTable
     * @return Response
     */
    public function index(veiculos_movimentacaoDataTable $veiculosMovimentacaoDataTable)
    {
        return $veiculosMovimentacaoDataTable->render('veiculos_movimentacaos.index');
    }

    /**
     * Show the form for creating a new veiculos_movimentacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('veiculos_movimentacaos.create');
    }

    /**
     * Store a newly created veiculos_movimentacao in storage.
     *
     * @param Createveiculos_movimentacaoRequest $request
     *
     * @return Response
     */
    public function store(Createveiculos_movimentacaoRequest $request)
    {
        $input = $request->all();

        $veiculosMovimentacao = $this->veiculosMovimentacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/veiculosMovimentacaos.singular')]));

        return redirect(route('veiculosMovimentacaos.index'));
    }

    /**
     * Display the specified veiculos_movimentacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $veiculosMovimentacao = $this->veiculosMovimentacaoRepository->find($id);

        if (empty($veiculosMovimentacao)) {
            Flash::error(__('models/veiculosMovimentacaos.singular').' '.__('messages.not_found'));

            return redirect(route('veiculosMovimentacaos.index'));
        }

        return view('veiculos_movimentacaos.show')->with('veiculosMovimentacao', $veiculosMovimentacao);
    }

    /**
     * Show the form for editing the specified veiculos_movimentacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $veiculosMovimentacao = $this->veiculosMovimentacaoRepository->find($id);

        if (empty($veiculosMovimentacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculosMovimentacaos.singular')]));

            return redirect(route('veiculosMovimentacaos.index'));
        }

        return view('veiculos_movimentacaos.edit')->with('veiculosMovimentacao', $veiculosMovimentacao);
    }

    /**
     * Update the specified veiculos_movimentacao in storage.
     *
     * @param  int              $id
     * @param Updateveiculos_movimentacaoRequest $request
     *
     * @return Response
     */
    public function update($id, Updateveiculos_movimentacaoRequest $request)
    {
        $veiculosMovimentacao = $this->veiculosMovimentacaoRepository->find($id);

        if (empty($veiculosMovimentacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculosMovimentacaos.singular')]));

            return redirect(route('veiculosMovimentacaos.index'));
        }

        $veiculosMovimentacao = $this->veiculosMovimentacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/veiculosMovimentacaos.singular')]));

        return redirect(route('veiculosMovimentacaos.index'));
    }

    /**
     * Remove the specified veiculos_movimentacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $veiculosMovimentacao = $this->veiculosMovimentacaoRepository->find($id);

        if (empty($veiculosMovimentacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculosMovimentacaos.singular')]));

            return redirect(route('veiculosMovimentacaos.index'));
        }

        $this->veiculosMovimentacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/veiculosMovimentacaos.singular')]));

        return redirect(route('veiculosMovimentacaos.index'));
    }
}
