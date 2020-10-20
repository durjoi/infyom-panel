<?php

namespace App\Http\Controllers;

use App\DataTables\pedidoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatepedidoRequest;
use App\Http\Requests\UpdatepedidoRequest;
use App\Repositories\pedidoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class pedidoController extends AppBaseController
{
    /** @var  pedidoRepository */
    private $pedidoRepository;

    public function __construct(pedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }

    /**
     * Display a listing of the pedido.
     *
     * @param pedidoDataTable $pedidoDataTable
     * @return Response
     */
    public function index(pedidoDataTable $pedidoDataTable)
    {
        return $pedidoDataTable->render('pedidos.index');
    }

    /**
     * Show the form for creating a new pedido.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created pedido in storage.
     *
     * @param CreatepedidoRequest $request
     *
     * @return Response
     */
    public function store(CreatepedidoRequest $request)
    {
        $input = $request->all();

        $pedido = $this->pedidoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/pedidos.singular')]));

        return redirect(route('pedidos.index'));
    }

    /**
     * Display the specified pedido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error(__('models/pedidos.singular').' '.__('messages.not_found'));

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.show')->with('pedido', $pedido);
    }

    /**
     * Show the form for editing the specified pedido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidos.singular')]));

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.edit')->with('pedido', $pedido);
    }

    /**
     * Update the specified pedido in storage.
     *
     * @param  int              $id
     * @param UpdatepedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepedidoRequest $request)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidos.singular')]));

            return redirect(route('pedidos.index'));
        }

        $pedido = $this->pedidoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/pedidos.singular')]));

        return redirect(route('pedidos.index'));
    }

    /**
     * Remove the specified pedido from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidos.singular')]));

            return redirect(route('pedidos.index'));
        }

        $this->pedidoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pedidos.singular')]));

        return redirect(route('pedidos.index'));
    }
}
