<?php

namespace App\Http\Controllers;

use App\DataTables\Estoque_saida_produtosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstoque_saida_produtosRequest;
use App\Http\Requests\UpdateEstoque_saida_produtosRequest;
use App\Repositories\Estoque_saida_produtosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Estoque_saida_produtosController extends AppBaseController
{
    /** @var  Estoque_saida_produtosRepository */
    private $estoqueSaidaProdutosRepository;

    public function __construct(Estoque_saida_produtosRepository $estoqueSaidaProdutosRepo)
    {
        $this->estoqueSaidaProdutosRepository = $estoqueSaidaProdutosRepo;
    }

    /**
     * Display a listing of the Estoque_saida_produtos.
     *
     * @param Estoque_saida_produtosDataTable $estoqueSaidaProdutosDataTable
     * @return Response
     */
    public function index(Estoque_saida_produtosDataTable $estoqueSaidaProdutosDataTable)
    {
        return $estoqueSaidaProdutosDataTable->render('estoque_saida_produtos.index');
    }

    /**
     * Show the form for creating a new Estoque_saida_produtos.
     *
     * @return Response
     */
    public function create()
    {
        return view('estoque_saida_produtos.create');
    }

    /**
     * Store a newly created Estoque_saida_produtos in storage.
     *
     * @param CreateEstoque_saida_produtosRequest $request
     *
     * @return Response
     */
    public function store(CreateEstoque_saida_produtosRequest $request)
    {
        $input = $request->all();

        $estoqueSaidaProdutos = $this->estoqueSaidaProdutosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/estoqueSaidaProdutos.singular')]));

        return redirect(route('estoqueSaidaProdutos.index'));
    }

    /**
     * Display the specified Estoque_saida_produtos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estoqueSaidaProdutos = $this->estoqueSaidaProdutosRepository->find($id);

        if (empty($estoqueSaidaProdutos)) {
            Flash::error(__('models/estoqueSaidaProdutos.singular').' '.__('messages.not_found'));

            return redirect(route('estoqueSaidaProdutos.index'));
        }

        return view('estoque_saida_produtos.show')->with('estoqueSaidaProdutos', $estoqueSaidaProdutos);
    }

    /**
     * Show the form for editing the specified Estoque_saida_produtos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estoqueSaidaProdutos = $this->estoqueSaidaProdutosRepository->find($id);

        if (empty($estoqueSaidaProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueSaidaProdutos.singular')]));

            return redirect(route('estoqueSaidaProdutos.index'));
        }

        return view('estoque_saida_produtos.edit')->with('estoqueSaidaProdutos', $estoqueSaidaProdutos);
    }

    /**
     * Update the specified Estoque_saida_produtos in storage.
     *
     * @param  int              $id
     * @param UpdateEstoque_saida_produtosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstoque_saida_produtosRequest $request)
    {
        $estoqueSaidaProdutos = $this->estoqueSaidaProdutosRepository->find($id);

        if (empty($estoqueSaidaProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueSaidaProdutos.singular')]));

            return redirect(route('estoqueSaidaProdutos.index'));
        }

        $estoqueSaidaProdutos = $this->estoqueSaidaProdutosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/estoqueSaidaProdutos.singular')]));

        return redirect(route('estoqueSaidaProdutos.index'));
    }

    /**
     * Remove the specified Estoque_saida_produtos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estoqueSaidaProdutos = $this->estoqueSaidaProdutosRepository->find($id);

        if (empty($estoqueSaidaProdutos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueSaidaProdutos.singular')]));

            return redirect(route('estoqueSaidaProdutos.index'));
        }

        $this->estoqueSaidaProdutosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/estoqueSaidaProdutos.singular')]));

        return redirect(route('estoqueSaidaProdutos.index'));
    }
}
