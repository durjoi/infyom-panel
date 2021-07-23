<?php

namespace App\Http\Controllers;

use App\DataTables\PedidoMaterialDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePedidoMaterialRequest;
use App\Http\Requests\UpdatePedidoMaterialRequest;
use App\Models\PedidoMaterialItem;
use App\Repositories\PedidoMaterialRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PedidoMaterialController extends AppBaseController
{
    /** @var  PedidoMaterialRepository */
    private $pedidoMaterialRepository;

    public function __construct(PedidoMaterialRepository $pedidoMaterialRepo)
    {
        $this->pedidoMaterialRepository = $pedidoMaterialRepo;
    }

    /**
     * Display a listing of the PedidoMaterial.
     *
     * @param PedidoMaterialDataTable $pedidoMaterialDataTable
     * @return Response
     */
    public function index(PedidoMaterialDataTable $pedidoMaterialDataTable)
    {
        return $pedidoMaterialDataTable->render('pedido_materials.index');
    }

    /**
     * Show the form for creating a new PedidoMaterial.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedido_materials.create');
    }

    /**
     * Store a newly created PedidoMaterial in storage.
     *
     * @param CreatePedidoMaterialRequest $request
     *
     * @return Response
     */
    public function store(CreatePedidoMaterialRequest $request)
    {
        $input = $request->all();

        $pedidoMaterial = $this->pedidoMaterialRepository->create($input);
        foreach ($input['PedidoMaterialItem'] as $pedidoMaterialItem){
            $pedidoMaterialItem['pedido_material_id'] = $pedidoMaterial->id;
            $newPedidoMaterialItem = PedidoMaterialItem::create($pedidoMaterialItem);
        }
        Flash::success(__('messages.saved', ['model' => __('models/pedidoMaterials.singular')]));

        return redirect(route('pedidoMaterials.index'));
    }

    /**
     * Display the specified PedidoMaterial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidoMaterial = $this->pedidoMaterialRepository->find($id);

        if (empty($pedidoMaterial)) {
            Flash::error(__('models/pedidoMaterials.singular').' '.__('messages.not_found'));

            return redirect(route('pedidoMaterials.index'));
        }

        return view('pedido_materials.show')->with('pedidoMaterial', $pedidoMaterial);
    }

    /**
     * Show the form for editing the specified PedidoMaterial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidoMaterial = $this->pedidoMaterialRepository->find($id);

        if (empty($pedidoMaterial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoMaterials.singular')]));

            return redirect(route('pedidoMaterials.index'));
        }

        return view('pedido_materials.edit')->with('pedidoMaterial', $pedidoMaterial);
    }

    /**
     * Update the specified PedidoMaterial in storage.
     *
     * @param  int              $id
     * @param UpdatePedidoMaterialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidoMaterialRequest $request)
    {
        $pedidoMaterial = $this->pedidoMaterialRepository->find($id);

        if (empty($pedidoMaterial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoMaterials.singular')]));

            return redirect(route('pedidoMaterials.index'));
        }

        $pedidoMaterial = $this->pedidoMaterialRepository->update($request->all(), $id);
        if(count($pedidoMaterial->pedidoMaterialItems) > 0){
            foreach ($pedidoMaterial->pedidoMaterialItems as $pedidoMaterialItem){
                $pedidoMaterialItem->delete();
            }
        }
        foreach ($request['PedidoMaterialItem'] as $pedidoMaterialItem){
            $pedidoMaterialItem['pedido_material_id'] = $pedidoMaterial->id;
            $newPedidoMaterialItem = PedidoMaterialItem::create($pedidoMaterialItem);
        }
        Flash::success(__('messages.updated', ['model' => __('models/pedidoMaterials.singular')]));

        return redirect(route('pedidoMaterials.index'));
    }

    /**
     * Remove the specified PedidoMaterial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidoMaterial = $this->pedidoMaterialRepository->find($id);

        if (empty($pedidoMaterial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoMaterials.singular')]));

            return redirect(route('pedidoMaterials.index'));
        }

        $this->pedidoMaterialRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pedidoMaterials.singular')]));

        return redirect(route('pedidoMaterials.index'));
    }
}
