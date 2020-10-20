<?php

namespace App\Http\Controllers;

use App\DataTables\operacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateoperacaoRequest;
use App\Http\Requests\UpdateoperacaoRequest;
use App\Repositories\operacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class operacaoController extends AppBaseController
{
    /** @var  operacaoRepository */
    private $operacaoRepository;

    public function __construct(operacaoRepository $operacaoRepo)
    {
        $this->operacaoRepository = $operacaoRepo;
    }

    /**
     * Display a listing of the operacao.
     *
     * @param operacaoDataTable $operacaoDataTable
     * @return Response
     */
    public function index(operacaoDataTable $operacaoDataTable)
    {
        return $operacaoDataTable->render('operacaos.index');
    }

    /**
     * Show the form for creating a new operacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('operacaos.create');
    }

    /**
     * Store a newly created operacao in storage.
     *
     * @param CreateoperacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateoperacaoRequest $request)
    {
        $input = $request->all();

        $operacao = $this->operacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/operacaos.singular')]));

        return redirect(route('operacaos.index'));
    }

    /**
     * Display the specified operacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $operacao = $this->operacaoRepository->find($id);

        if (empty($operacao)) {
            Flash::error(__('models/operacaos.singular').' '.__('messages.not_found'));

            return redirect(route('operacaos.index'));
        }

        return view('operacaos.show')->with('operacao', $operacao);
    }

    /**
     * Show the form for editing the specified operacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $operacao = $this->operacaoRepository->find($id);

        if (empty($operacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/operacaos.singular')]));

            return redirect(route('operacaos.index'));
        }

        return view('operacaos.edit')->with('operacao', $operacao);
    }

    /**
     * Update the specified operacao in storage.
     *
     * @param  int              $id
     * @param UpdateoperacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoperacaoRequest $request)
    {
        $operacao = $this->operacaoRepository->find($id);

        if (empty($operacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/operacaos.singular')]));

            return redirect(route('operacaos.index'));
        }

        $operacao = $this->operacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/operacaos.singular')]));

        return redirect(route('operacaos.index'));
    }

    /**
     * Remove the specified operacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $operacao = $this->operacaoRepository->find($id);

        if (empty($operacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/operacaos.singular')]));

            return redirect(route('operacaos.index'));
        }

        $this->operacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/operacaos.singular')]));

        return redirect(route('operacaos.index'));
    }
}
