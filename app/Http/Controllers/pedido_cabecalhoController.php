<?php

namespace App\Http\Controllers;

use App\DataTables\pedido_cabecalhoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createpedido_cabecalhoRequest;
use App\Http\Requests\Updatepedido_cabecalhoRequest;
use App\Repositories\pedido_cabecalhoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class pedido_cabecalhoController extends AppBaseController
{
    /** @var  pedido_cabecalhoRepository */
    private $pedidoCabecalhoRepository;

    public function __construct(pedido_cabecalhoRepository $pedidoCabecalhoRepo)
    {
        $this->pedidoCabecalhoRepository = $pedidoCabecalhoRepo;
    }

    /**
     * Display a listing of the pedido_cabecalho.
     *
     * @param pedido_cabecalhoDataTable $pedidoCabecalhoDataTable
     * @return Response
     */
    public function index(pedido_cabecalhoDataTable $pedidoCabecalhoDataTable)
    {
        return $pedidoCabecalhoDataTable->render('pedido_cabecalhos.index');
    }

    /**
     * Show the form for creating a new pedido_cabecalho.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedido_cabecalhos.create');
    }

    /**
     * Store a newly created pedido_cabecalho in storage.
     *
     * @param Createpedido_cabecalhoRequest $request
     *
     * @return Response
     */
    public function store(Createpedido_cabecalhoRequest $request)
    {
        $input = $request->all();

        $pedidoCabecalho = $this->pedidoCabecalhoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/pedidoCabecalhos.singular')]));

        return redirect(route('pedidoCabecalhos.index'));
    }

    /**
     * Display the specified pedido_cabecalho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidoCabecalho = $this->pedidoCabecalhoRepository->find($id);

        if (empty($pedidoCabecalho)) {
            Flash::error(__('models/pedidoCabecalhos.singular').' '.__('messages.not_found'));

            return redirect(route('pedidoCabecalhos.index'));
        }

        return view('pedido_cabecalhos.show')->with('pedidoCabecalho', $pedidoCabecalho);
    }

    /**
     * Show the form for editing the specified pedido_cabecalho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidoCabecalho = $this->pedidoCabecalhoRepository->find($id);

        if (empty($pedidoCabecalho)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoCabecalhos.singular')]));

            return redirect(route('pedidoCabecalhos.index'));
        }

        return view('pedido_cabecalhos.edit')->with('pedidoCabecalho', $pedidoCabecalho);
    }

    /**
     * Update the specified pedido_cabecalho in storage.
     *
     * @param  int              $id
     * @param Updatepedido_cabecalhoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepedido_cabecalhoRequest $request)
    {
        $pedidoCabecalho = $this->pedidoCabecalhoRepository->find($id);

        if (empty($pedidoCabecalho)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoCabecalhos.singular')]));

            return redirect(route('pedidoCabecalhos.index'));
        }

        $pedidoCabecalho = $this->pedidoCabecalhoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/pedidoCabecalhos.singular')]));

        return redirect(route('pedidoCabecalhos.index'));
    }

    /**
     * Remove the specified pedido_cabecalho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidoCabecalho = $this->pedidoCabecalhoRepository->find($id);

        if (empty($pedidoCabecalho)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pedidoCabecalhos.singular')]));

            return redirect(route('pedidoCabecalhos.index'));
        }

        $this->pedidoCabecalhoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pedidoCabecalhos.singular')]));

        return redirect(route('pedidoCabecalhos.index'));
    }
}
