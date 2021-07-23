<?php

namespace App\Http\Controllers;

use App\DataTables\PedidoMaterialItemDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePedidoMaterialItemRequest;
use App\Http\Requests\UpdatePedidoMaterialItemRequest;
use App\Repositories\PedidoMaterialItemRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PedidoMaterialItemController extends AppBaseController
{
    /** @var  PedidoMaterialItemRepository */
    private $pedidoMaterialItemRepository;

    public function __construct(PedidoMaterialItemRepository $pedidoMaterialItemRepo)
    {
        $this->pedidoMaterialItemRepository = $pedidoMaterialItemRepo;
    }

    /**
     * Display a listing of the PedidoMaterialItem.
     *
     * @param PedidoMaterialItemDataTable $pedidoMaterialItemDataTable
     * @return Response
     */
    public function index(PedidoMaterialItemDataTable $pedidoMaterialItemDataTable)
    {
        return $pedidoMaterialItemDataTable->render('pedido_material_items.index');
    }

    /**
     * Show the form for creating a new PedidoMaterialItem.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedido_material_items.create');
    }

    /**
     * Store a newly created PedidoMaterialItem in storage.
     *
     * @param CreatePedidoMaterialItemRequest $request
     *
     * @return Response
     */
    public function store(CreatePedidoMaterialItemRequest $request)
    {
        $input = $request->all();

        $pedidoMaterialItem = $this->pedidoMaterialItemRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/pedidoMaterialItems.singular')]));

        return redirect(route('pedidoMaterialItems.index'));
    }

    /**
     * Display the specified PedidoMaterialItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidoMaterialItem = $this->pedidoMaterialItemRepository->find($id);

        if (empty($pedidoMaterialItem)) {
            Flash::error(__('models/pedidoMaterialItems.singular').' '.__('messages.not_found'));

            return redirect(route('pedidoMaterialItems.index'));
        }

        return view('pedido_material_items.show')->with('pedidoMaterialItem', $pedidoMaterialItem);
    }

    /**
     * Show the form for editing the specified PedidoMaterialItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidoMaterialItem = $this->pedidoMaterialItemRepository->find($id);

        if (empty($pedidoMaterialItem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoMaterialItems.singular')]));

            return redirect(route('pedidoMaterialItems.index'));
        }

        return view('pedido_material_items.edit')->with('pedidoMaterialItem', $pedidoMaterialItem);
    }

    /**
     * Update the specified PedidoMaterialItem in storage.
     *
     * @param  int              $id
     * @param UpdatePedidoMaterialItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidoMaterialItemRequest $request)
    {
        $pedidoMaterialItem = $this->pedidoMaterialItemRepository->find($id);

        if (empty($pedidoMaterialItem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoMaterialItems.singular')]));

            return redirect(route('pedidoMaterialItems.index'));
        }

        $pedidoMaterialItem = $this->pedidoMaterialItemRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/pedidoMaterialItems.singular')]));

        return redirect(route('pedidoMaterialItems.index'));
    }

    /**
     * Remove the specified PedidoMaterialItem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidoMaterialItem = $this->pedidoMaterialItemRepository->find($id);

        if (empty($pedidoMaterialItem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoMaterialItems.singular')]));

            return redirect(route('pedidoMaterialItems.index'));
        }

        $this->pedidoMaterialItemRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pedidoMaterialItems.singular')]));

        return redirect(route('pedidoMaterialItems.index'));
    }
}
