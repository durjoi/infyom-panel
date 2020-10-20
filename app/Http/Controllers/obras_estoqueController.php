<?php

namespace App\Http\Controllers;

use App\DataTables\obras_estoqueDataTable;
use App\Http\Requests;
use App\Http\Requests\Createobras_estoqueRequest;
use App\Http\Requests\Updateobras_estoqueRequest;
use App\Repositories\obras_estoqueRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class obras_estoqueController extends AppBaseController
{
    /** @var  obras_estoqueRepository */
    private $obrasEstoqueRepository;

    public function __construct(obras_estoqueRepository $obrasEstoqueRepo)
    {
        $this->obrasEstoqueRepository = $obrasEstoqueRepo;
    }

    /**
     * Display a listing of the obras_estoque.
     *
     * @param obras_estoqueDataTable $obrasEstoqueDataTable
     * @return Response
     */
    public function index(obras_estoqueDataTable $obrasEstoqueDataTable)
    {
        return $obrasEstoqueDataTable->render('obras_estoques.index');
    }

    /**
     * Show the form for creating a new obras_estoque.
     *
     * @return Response
     */
    public function create()
    {
        return view('obras_estoques.create');
    }

    /**
     * Store a newly created obras_estoque in storage.
     *
     * @param Createobras_estoqueRequest $request
     *
     * @return Response
     */
    public function store(Createobras_estoqueRequest $request)
    {
        $input = $request->all();

        $obrasEstoque = $this->obrasEstoqueRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/obrasEstoques.singular')]));

        return redirect(route('obrasEstoques.index'));
    }

    /**
     * Display the specified obras_estoque.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obrasEstoque = $this->obrasEstoqueRepository->find($id);

        if (empty($obrasEstoque)) {
            Flash::error(__('models/obrasEstoques.singular').' '.__('messages.not_found'));

            return redirect(route('obrasEstoques.index'));
        }

        return view('obras_estoques.show')->with('obrasEstoque', $obrasEstoque);
    }

    /**
     * Show the form for editing the specified obras_estoque.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obrasEstoque = $this->obrasEstoqueRepository->find($id);

        if (empty($obrasEstoque)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasEstoques.singular')]));

            return redirect(route('obrasEstoques.index'));
        }

        return view('obras_estoques.edit')->with('obrasEstoque', $obrasEstoque);
    }

    /**
     * Update the specified obras_estoque in storage.
     *
     * @param  int              $id
     * @param Updateobras_estoqueRequest $request
     *
     * @return Response
     */
    public function update($id, Updateobras_estoqueRequest $request)
    {
        $obrasEstoque = $this->obrasEstoqueRepository->find($id);

        if (empty($obrasEstoque)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasEstoques.singular')]));

            return redirect(route('obrasEstoques.index'));
        }

        $obrasEstoque = $this->obrasEstoqueRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/obrasEstoques.singular')]));

        return redirect(route('obrasEstoques.index'));
    }

    /**
     * Remove the specified obras_estoque from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obrasEstoque = $this->obrasEstoqueRepository->find($id);

        if (empty($obrasEstoque)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasEstoques.singular')]));

            return redirect(route('obrasEstoques.index'));
        }

        $this->obrasEstoqueRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/obrasEstoques.singular')]));

        return redirect(route('obrasEstoques.index'));
    }
}
