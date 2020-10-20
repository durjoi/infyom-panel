<?php

namespace App\Http\Controllers;

use App\DataTables\origem_solicitacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createorigem_solicitacaoRequest;
use App\Http\Requests\Updateorigem_solicitacaoRequest;
use App\Repositories\origem_solicitacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class origem_solicitacaoController extends AppBaseController
{
    /** @var  origem_solicitacaoRepository */
    private $origemSolicitacaoRepository;

    public function __construct(origem_solicitacaoRepository $origemSolicitacaoRepo)
    {
        $this->origemSolicitacaoRepository = $origemSolicitacaoRepo;
    }

    /**
     * Display a listing of the origem_solicitacao.
     *
     * @param origem_solicitacaoDataTable $origemSolicitacaoDataTable
     * @return Response
     */
    public function index(origem_solicitacaoDataTable $origemSolicitacaoDataTable)
    {
        return $origemSolicitacaoDataTable->render('origem_solicitacaos.index');
    }

    /**
     * Show the form for creating a new origem_solicitacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('origem_solicitacaos.create');
    }

    /**
     * Store a newly created origem_solicitacao in storage.
     *
     * @param Createorigem_solicitacaoRequest $request
     *
     * @return Response
     */
    public function store(Createorigem_solicitacaoRequest $request)
    {
        $input = $request->all();

        $origemSolicitacao = $this->origemSolicitacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/origemSolicitacaos.singular')]));

        return redirect(route('origemSolicitacaos.index'));
    }

    /**
     * Display the specified origem_solicitacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $origemSolicitacao = $this->origemSolicitacaoRepository->find($id);

        if (empty($origemSolicitacao)) {
            Flash::error(__('models/origemSolicitacaos.singular').' '.__('messages.not_found'));

            return redirect(route('origemSolicitacaos.index'));
        }

        return view('origem_solicitacaos.show')->with('origemSolicitacao', $origemSolicitacao);
    }

    /**
     * Show the form for editing the specified origem_solicitacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $origemSolicitacao = $this->origemSolicitacaoRepository->find($id);

        if (empty($origemSolicitacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/origemSolicitacaos.singular')]));

            return redirect(route('origemSolicitacaos.index'));
        }

        return view('origem_solicitacaos.edit')->with('origemSolicitacao', $origemSolicitacao);
    }

    /**
     * Update the specified origem_solicitacao in storage.
     *
     * @param  int              $id
     * @param Updateorigem_solicitacaoRequest $request
     *
     * @return Response
     */
    public function update($id, Updateorigem_solicitacaoRequest $request)
    {
        $origemSolicitacao = $this->origemSolicitacaoRepository->find($id);

        if (empty($origemSolicitacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/origemSolicitacaos.singular')]));

            return redirect(route('origemSolicitacaos.index'));
        }

        $origemSolicitacao = $this->origemSolicitacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/origemSolicitacaos.singular')]));

        return redirect(route('origemSolicitacaos.index'));
    }

    /**
     * Remove the specified origem_solicitacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $origemSolicitacao = $this->origemSolicitacaoRepository->find($id);

        if (empty($origemSolicitacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/origemSolicitacaos.singular')]));

            return redirect(route('origemSolicitacaos.index'));
        }

        $this->origemSolicitacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/origemSolicitacaos.singular')]));

        return redirect(route('origemSolicitacaos.index'));
    }
}
