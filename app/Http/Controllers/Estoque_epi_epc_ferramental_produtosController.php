<?php

namespace App\Http\Controllers;

use App\DataTables\Estoque_epi_epc_ferramental_produtosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstoque_epi_epc_ferramental_produtosRequest;
use App\Http\Requests\UpdateEstoque_epi_epc_ferramental_produtosRequest;
use App\Repositories\Estoque_epi_epc_ferramental_produtosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Estoque_epi_epc_ferramental_produtosController extends AppBaseController
{
    /** @var  Estoque_epi_epc_ferramental_produtosRepository */
    private $estoqueEpiEpcFerramentalProdutosRepository;

    public function __construct(Estoque_epi_epc_ferramental_produtosRepository $estoqueEpiEpcFerramentalProdutosRepo)
    {
        $this->estoqueEpiEpcFerramentalProdutosRepository = $estoqueEpiEpcFerramentalProdutosRepo;
    }

    /**
     * Display a listing of the Estoque_epi_epc_ferramental_produtos.
     *
     * @param Estoque_epi_epc_ferramental_produtosDataTable $estoqueEpiEpcFerramentalProdutosDataTable
     * @return Response
     */
    public function index(Estoque_epi_epc_ferramental_produtosDataTable $estoqueEpiEpcFerramentalProdutosDataTable)
    {
        return $estoqueEpiEpcFerramentalProdutosDataTable->render('estoque_epi_epc_ferramental_produtos.index');
    }

    /**
     * Show the form for creating a new Estoque_epi_epc_ferramental_produtos.
     *
     * @return Response
     */
    public function create()
    {
        return view('estoque_epi_epc_ferramental_produtos.create');
    }

    /**
     * Store a newly created Estoque_epi_epc_ferramental_produtos in storage.
     *
     * @param CreateEstoque_epi_epc_ferramental_produtosRequest $request
     *
     * @return Response
     */
    public function store(CreateEstoque_epi_epc_ferramental_produtosRequest $request)
    {
        $input = $request->all();

        $estoqueEpiEpcFerramentalProdutos = $this->estoqueEpiEpcFerramentalProdutosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/estoqueEpiEpcFerramentalProdutos.singular')]));

        return redirect(route('estoqueEpiEpcFerramentalProdutos.index'));
    }

    /**
     * Display the specified Estoque_epi_epc_ferramental_produtos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estoqueEpiEpcFerramentalProdutos = $this->estoqueEpiEpcFerramentalProdutosRepository->find($id);

        if (empty($estoqueEpiEpcFerramentalProdutos)) {
            Flash::error(__('models/estoqueEpiEpcFerramentalProdutos.singular').' '.__('messages.not_found'));

            return redirect(route('estoqueEpiEpcFerramentalProdutos.index'));
        }

        return view('estoque_epi_epc_ferramental_produtos.show')->with('estoqueEpiEpcFerramentalProdutos', $estoqueEpiEpcFerramentalProdutos);
    }

    /**
     * Show the form for editing the specified Estoque_epi_epc_ferramental_produtos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estoqueEpiEpcFerramentalProdutos = $this->estoqueEpiEpcFerramentalProdutosRepository->find($id);

        if (empty($estoqueEpiEpcFerramentalProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEpiEpcFerramentalProdutos.singular')]));

            return redirect(route('estoqueEpiEpcFerramentalProdutos.index'));
        }

        return view('estoque_epi_epc_ferramental_produtos.edit')->with('estoqueEpiEpcFerramentalProdutos', $estoqueEpiEpcFerramentalProdutos);
    }

    /**
     * Update the specified Estoque_epi_epc_ferramental_produtos in storage.
     *
     * @param  int              $id
     * @param UpdateEstoque_epi_epc_ferramental_produtosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstoque_epi_epc_ferramental_produtosRequest $request)
    {
        $estoqueEpiEpcFerramentalProdutos = $this->estoqueEpiEpcFerramentalProdutosRepository->find($id);

        if (empty($estoqueEpiEpcFerramentalProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEpiEpcFerramentalProdutos.singular')]));

            return redirect(route('estoqueEpiEpcFerramentalProdutos.index'));
        }

        $estoqueEpiEpcFerramentalProdutos = $this->estoqueEpiEpcFerramentalProdutosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/estoqueEpiEpcFerramentalProdutos.singular')]));

        return redirect(route('estoqueEpiEpcFerramentalProdutos.index'));
    }

    /**
     * Remove the specified Estoque_epi_epc_ferramental_produtos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estoqueEpiEpcFerramentalProdutos = $this->estoqueEpiEpcFerramentalProdutosRepository->find($id);

        if (empty($estoqueEpiEpcFerramentalProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEpiEpcFerramentalProdutos.singular')]));

            return redirect(route('estoqueEpiEpcFerramentalProdutos.index'));
        }

        $this->estoqueEpiEpcFerramentalProdutosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/estoqueEpiEpcFerramentalProdutos.singular')]));

        return redirect(route('estoqueEpiEpcFerramentalProdutos.index'));
    }
}
