<?php

namespace App\Http\Controllers;

use App\DataTables\tipo_solicitacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createtipo_solicitacaoRequest;
use App\Http\Requests\Updatetipo_solicitacaoRequest;
use App\Repositories\tipo_solicitacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class tipo_solicitacaoController extends AppBaseController
{
    /** @var  tipo_solicitacaoRepository */
    private $tipoSolicitacaoRepository;

    public function __construct(tipo_solicitacaoRepository $tipoSolicitacaoRepo)
    {
        $this->tipoSolicitacaoRepository = $tipoSolicitacaoRepo;
    }

    /**
     * Display a listing of the tipo_solicitacao.
     *
     * @param tipo_solicitacaoDataTable $tipoSolicitacaoDataTable
     * @return Response
     */
    public function index(tipo_solicitacaoDataTable $tipoSolicitacaoDataTable)
    {
        return $tipoSolicitacaoDataTable->render('tipo_solicitacaos.index');
    }

    /**
     * Show the form for creating a new tipo_solicitacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_solicitacaos.create');
    }

    /**
     * Store a newly created tipo_solicitacao in storage.
     *
     * @param Createtipo_solicitacaoRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_solicitacaoRequest $request)
    {
        $input = $request->all();

        $tipoSolicitacao = $this->tipoSolicitacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tipoSolicitacaos.singular')]));

        return redirect(route('tipoSolicitacaos.index'));
    }

    /**
     * Display the specified tipo_solicitacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoSolicitacao = $this->tipoSolicitacaoRepository->find($id);

        if (empty($tipoSolicitacao)) {
            Flash::error(__('models/tipoSolicitacaos.singular').' '.__('messages.not_found'));

            return redirect(route('tipoSolicitacaos.index'));
        }

        return view('tipo_solicitacaos.show')->with('tipoSolicitacao', $tipoSolicitacao);
    }

    /**
     * Show the form for editing the specified tipo_solicitacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoSolicitacao = $this->tipoSolicitacaoRepository->find($id);

        if (empty($tipoSolicitacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoSolicitacaos.singular')]));

            return redirect(route('tipoSolicitacaos.index'));
        }

        return view('tipo_solicitacaos.edit')->with('tipoSolicitacao', $tipoSolicitacao);
    }

    /**
     * Update the specified tipo_solicitacao in storage.
     *
     * @param  int              $id
     * @param Updatetipo_solicitacaoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_solicitacaoRequest $request)
    {
        $tipoSolicitacao = $this->tipoSolicitacaoRepository->find($id);

        if (empty($tipoSolicitacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoSolicitacaos.singular')]));

            return redirect(route('tipoSolicitacaos.index'));
        }

        $tipoSolicitacao = $this->tipoSolicitacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tipoSolicitacaos.singular')]));

        return redirect(route('tipoSolicitacaos.index'));
    }

    /**
     * Remove the specified tipo_solicitacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoSolicitacao = $this->tipoSolicitacaoRepository->find($id);

        if (empty($tipoSolicitacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoSolicitacaos.singular')]));

            return redirect(route('tipoSolicitacaos.index'));
        }

        $this->tipoSolicitacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tipoSolicitacaos.singular')]));

        return redirect(route('tipoSolicitacaos.index'));
    }
}
