<?php

namespace App\Http\Controllers;

use App\DataTables\pedido_produtosDataTable;
use App\Http\Requests;
use App\Http\Requests\Createpedido_produtosRequest;
use App\Http\Requests\Updatepedido_produtosRequest;
use App\Repositories\pedido_produtosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class pedido_produtosController extends AppBaseController
{
    /** @var  pedido_produtosRepository */
    private $pedidoProdutosRepository;

    public function __construct(pedido_produtosRepository $pedidoProdutosRepo)
    {
        $this->pedidoProdutosRepository = $pedidoProdutosRepo;
    }

    /**
     * Display a listing of the pedido_produtos.
     *
     * @param pedido_produtosDataTable $pedidoProdutosDataTable
     * @return Response
     */
    public function index(pedido_produtosDataTable $pedidoProdutosDataTable)
    {
        return $pedidoProdutosDataTable->render('pedido_produtos.index');
    }

    /**
     * Show the form for creating a new pedido_produtos.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedido_produtos.create');
    }

    /**
     * Store a newly created pedido_produtos in storage.
     *
     * @param Createpedido_produtosRequest $request
     *
     * @return Response
     */
    public function store(Createpedido_produtosRequest $request)
    {
        $input = $request->all();

        $pedidoProdutos = $this->pedidoProdutosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/pedidoProdutos.singular')]));

        return redirect(route('pedidoProdutos.index'));
    }

    /**
     * Display the specified pedido_produtos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidoProdutos = $this->pedidoProdutosRepository->find($id);

        if (empty($pedidoProdutos)) {
            Flash::error(__('models/pedidoProdutos.singular').' '.__('messages.not_found'));

            return redirect(route('pedidoProdutos.index'));
        }

        return view('pedido_produtos.show')->with('pedidoProdutos', $pedidoProdutos);
    }

    /**
     * Show the form for editing the specified pedido_produtos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidoProdutos = $this->pedidoProdutosRepository->find($id);

        if (empty($pedidoProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoProdutos.singular')]));

            return redirect(route('pedidoProdutos.index'));
        }

        return view('pedido_produtos.edit')->with('pedidoProdutos', $pedidoProdutos);
    }

    /**
     * Update the specified pedido_produtos in storage.
     *
     * @param  int              $id
     * @param Updatepedido_produtosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepedido_produtosRequest $request)
    {
        $pedidoProdutos = $this->pedidoProdutosRepository->find($id);

        if (empty($pedidoProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoProdutos.singular')]));

            return redirect(route('pedidoProdutos.index'));
        }

        $pedidoProdutos = $this->pedidoProdutosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/pedidoProdutos.singular')]));

        return redirect(route('pedidoProdutos.index'));
    }

    /**
     * Remove the specified pedido_produtos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidoProdutos = $this->pedidoProdutosRepository->find($id);

        if (empty($pedidoProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoProdutos.singular')]));

            return redirect(route('pedidoProdutos.index'));
        }

        $this->pedidoProdutosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pedidoProdutos.singular')]));

        return redirect(route('pedidoProdutos.index'));
    }
}
