<?php

namespace App\Http\Controllers;

use App\DataTables\Estoque_saidaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEstoque_saidaRequest;
use App\Http\Requests\UpdateEstoque_saidaRequest;
use App\Repositories\Estoque_saidaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Estoque_saidaController extends AppBaseController
{
    /** @var  Estoque_saidaRepository */
    private $estoqueSaidaRepository;

    public function __construct(Estoque_saidaRepository $estoqueSaidaRepo)
    {
        $this->estoqueSaidaRepository = $estoqueSaidaRepo;
    }

    /**
     * Display a listing of the Estoque_saida.
     *
     * @param Estoque_saidaDataTable $estoqueSaidaDataTable
     * @return Response
     */
    public function index(Estoque_saidaDataTable $estoqueSaidaDataTable)
    {
        return $estoqueSaidaDataTable->render('estoque_saidas.index');
    }

    /**
     * Show the form for creating a new Estoque_saida.
     *
     * @return Response
     */
    public function create()
    {
        return view('estoque_saidas.create');
    }

    /**
     * Store a newly created Estoque_saida in storage.
     *
     * @param CreateEstoque_saidaRequest $request
     *
     * @return Response
     */
    public function store(CreateEstoque_saidaRequest $request)
    {
        $input = $request->all();

        $estoqueSaida = $this->estoqueSaidaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/estoqueSaidas.singular')]));

        return redirect(route('estoqueSaidas.index'));
    }

    /**
     * Display the specified Estoque_saida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estoqueSaida = $this->estoqueSaidaRepository->find($id);

        if (empty($estoqueSaida)) {
            Flash::error(__('models/estoqueSaidas.singular').' '.__('messages.not_found'));

            return redirect(route('estoqueSaidas.index'));
        }

        return view('estoque_saidas.show')->with('estoqueSaida', $estoqueSaida);
    }

    /**
     * Show the form for editing the specified Estoque_saida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estoqueSaida = $this->estoqueSaidaRepository->find($id);

        if (empty($estoqueSaida)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueSaidas.singular')]));

            return redirect(route('estoqueSaidas.index'));
        }

        return view('estoque_saidas.edit')->with('estoqueSaida', $estoqueSaida);
    }

    /**
     * Update the specified Estoque_saida in storage.
     *
     * @param  int              $id
     * @param UpdateEstoque_saidaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstoque_saidaRequest $request)
    {
        $estoqueSaida = $this->estoqueSaidaRepository->find($id);

        if (empty($estoqueSaida)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueSaidas.singular')]));

            return redirect(route('estoqueSaidas.index'));
        }

        $estoqueSaida = $this->estoqueSaidaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/estoqueSaidas.singular')]));

        return redirect(route('estoqueSaidas.index'));
    }

    /**
     * Remove the specified Estoque_saida from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estoqueSaida = $this->estoqueSaidaRepository->find($id);

        if (empty($estoqueSaida)) {
            Flash::error(__('messages.not_found', ['model' => __('models/estoqueSaidas.singular')]));

            return redirect(route('estoqueSaidas.index'));
        }

        $this->estoqueSaidaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/estoqueSaidas.singular')]));

        return redirect(route('estoqueSaidas.index'));
    }
}
