<?php

namespace App\Http\Controllers;

use App\DataTables\ClientesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClientesRequest;
use App\Http\Requests\UpdateClientesRequest;
use App\Repositories\ClientesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ClientesController extends AppBaseController
{
    /** @var  ClientesRepository */
    private $clientesRepository;

    public function __construct(ClientesRepository $clientesRepo)
    {
        $this->clientesRepository = $clientesRepo;
    }

    /**
     * Display a listing of the Clientes.
     *
     * @param ClientesDataTable $clientesDataTable
     * @return Response
     */
    public function index(ClientesDataTable $clientesDataTable)
    {
        return $clientesDataTable->render('clientes.index');
    }

    /**
     * Show the form for creating a new Clientes.
     *
     * @return Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created Clientes in storage.
     *
     * @param CreateClientesRequest $request
     *
     * @return Response
     */
    public function store(CreateClientesRequest $request)
    {
        $input = $request->all();

        $clientes = $this->clientesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/clientes.singular')]));

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified Clientes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientes = $this->clientesRepository->find($id);

        if (empty($clientes)) {
            Flash::error(__('models/clientes.singular').' '.__('messages.not_found'));

            return redirect(route('clientes.index'));
        }

        return view('clientes.show')->with('clientes', $clientes);
    }

    /**
     * Show the form for editing the specified Clientes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientes = $this->clientesRepository->find($id);

        if (empty($clientes)) {
            Flash::error(__('messages.not_found', ['model' => __('models/clientes.singular')]));

            return redirect(route('clientes.index'));
        }

        return view('clientes.edit')->with('clientes', $clientes);
    }

    /**
     * Update the specified Clientes in storage.
     *
     * @param  int              $id
     * @param UpdateClientesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientesRequest $request)
    {
        $clientes = $this->clientesRepository->find($id);

        if (empty($clientes)) {
            Flash::error(__('messages.not_found', ['model' => __('models/clientes.singular')]));

            return redirect(route('clientes.index'));
        }

        $clientes = $this->clientesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/clientes.singular')]));

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified Clientes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientes = $this->clientesRepository->find($id);

        if (empty($clientes)) {
            Flash::error(__('messages.not_found', ['model' => __('models/clientes.singular')]));

            return redirect(route('clientes.index'));
        }

        $this->clientesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/clientes.singular')]));

        return redirect(route('clientes.index'));
    }
}
