<?php

namespace App\Http\Controllers;

use App\DataTables\Estoque_entradas_produtoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstoque_entradas_produtoRequest;
use App\Http\Requests\UpdateEstoque_entradas_produtoRequest;
use App\Repositories\Estoque_entradas_produtoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Estoque_entradas_produtoController extends AppBaseController
{
    /** @var  Estoque_entradas_produtoRepository */
    private $estoqueEntradasProdutoRepository;

    public function __construct(Estoque_entradas_produtoRepository $estoqueEntradasProdutoRepo)
    {
        $this->estoqueEntradasProdutoRepository = $estoqueEntradasProdutoRepo;
    }

    /**
     * Display a listing of the Estoque_entradas_produto.
     *
     * @param Estoque_entradas_produtoDataTable $estoqueEntradasProdutoDataTable
     * @return Response
     */
    public function index(Estoque_entradas_produtoDataTable $estoqueEntradasProdutoDataTable)
    {
        return $estoqueEntradasProdutoDataTable->render('estoque_entradas_produtos.index');
    }

    /**
     * Show the form for creating a new Estoque_entradas_produto.
     *
     * @return Response
     */
    public function create()
    {
        return view('estoque_entradas_produtos.create');
    }

    /**
     * Store a newly created Estoque_entradas_produto in storage.
     *
     * @param CreateEstoque_entradas_produtoRequest $request
     *
     * @return Response
     */
    public function store(CreateEstoque_entradas_produtoRequest $request)
    {
        $input = $request->all();

        $estoqueEntradasProduto = $this->estoqueEntradasProdutoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/estoqueEntradasProdutos.singular')]));

        return redirect(route('estoqueEntradasProdutos.index'));
    }

    /**
     * Display the specified Estoque_entradas_produto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estoqueEntradasProduto = $this->estoqueEntradasProdutoRepository->find($id);

        if (empty($estoqueEntradasProduto)) {
            Flash::error(__('models/estoqueEntradasProdutos.singular').' '.__('messages.not_found'));

            return redirect(route('estoqueEntradasProdutos.index'));
        }

        return view('estoque_entradas_produtos.show')->with('estoqueEntradasProduto', $estoqueEntradasProduto);
    }

    /**
     * Show the form for editing the specified Estoque_entradas_produto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estoqueEntradasProduto = $this->estoqueEntradasProdutoRepository->find($id);

        if (empty($estoqueEntradasProduto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEntradasProdutos.singular')]));

            return redirect(route('estoqueEntradasProdutos.index'));
        }

        return view('estoque_entradas_produtos.edit')->with('estoqueEntradasProduto', $estoqueEntradasProduto);
    }

    /**
     * Update the specified Estoque_entradas_produto in storage.
     *
     * @param  int              $id
     * @param UpdateEstoque_entradas_produtoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstoque_entradas_produtoRequest $request)
    {
        $estoqueEntradasProduto = $this->estoqueEntradasProdutoRepository->find($id);

        if (empty($estoqueEntradasProduto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEntradasProdutos.singular')]));

            return redirect(route('estoqueEntradasProdutos.index'));
        }

        $estoqueEntradasProduto = $this->estoqueEntradasProdutoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/estoqueEntradasProdutos.singular')]));

        return redirect(route('estoqueEntradasProdutos.index'));
    }

    /**
     * Remove the specified Estoque_entradas_produto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estoqueEntradasProduto = $this->estoqueEntradasProdutoRepository->find($id);

        if (empty($estoqueEntradasProduto)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueEntradasProdutos.singular')]));

            return redirect(route('estoqueEntradasProdutos.index'));
        }

        $this->estoqueEntradasProdutoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/estoqueEntradasProdutos.singular')]));

        return redirect(route('estoqueEntradasProdutos.index'));
    }
}
