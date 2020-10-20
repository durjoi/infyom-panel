<?php

namespace App\Http\Controllers;

use App\DataTables\solicitacao_reclamacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createsolicitacao_reclamacaoRequest;
use App\Http\Requests\Updatesolicitacao_reclamacaoRequest;
use App\Repositories\solicitacao_reclamacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class solicitacao_reclamacaoController extends AppBaseController
{
    /** @var  solicitacao_reclamacaoRepository */
    private $solicitacaoReclamacaoRepository;

    public function __construct(solicitacao_reclamacaoRepository $solicitacaoReclamacaoRepo)
    {
        $this->solicitacaoReclamacaoRepository = $solicitacaoReclamacaoRepo;
    }

    /**
     * Display a listing of the solicitacao_reclamacao.
     *
     * @param solicitacao_reclamacaoDataTable $solicitacaoReclamacaoDataTable
     * @return Response
     */
    public function index(solicitacao_reclamacaoDataTable $solicitacaoReclamacaoDataTable)
    {
        return $solicitacaoReclamacaoDataTable->render('solicitacao_reclamacaos.index');
    }

    /**
     * Show the form for creating a new solicitacao_reclamacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('solicitacao_reclamacaos.create');
    }

    /**
     * Store a newly created solicitacao_reclamacao in storage.
     *
     * @param Createsolicitacao_reclamacaoRequest $request
     *
     * @return Response
     */
    public function store(Createsolicitacao_reclamacaoRequest $request)
    {
        $input = $request->all();

        $solicitacaoReclamacao = $this->solicitacaoReclamacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/solicitacaoReclamacaos.singular')]));

        return redirect(route('solicitacaoReclamacaos.index'));
    }

    /**
     * Display the specified solicitacao_reclamacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $solicitacaoReclamacao = $this->solicitacaoReclamacaoRepository->find($id);

        if (empty($solicitacaoReclamacao)) {
            Flash::error(__('models/solicitacaoReclamacaos.singular').' '.__('messages.not_found'));

            return redirect(route('solicitacaoReclamacaos.index'));
        }

        return view('solicitacao_reclamacaos.show')->with('solicitacaoReclamacao', $solicitacaoReclamacao);
    }

    /**
     * Show the form for editing the specified solicitacao_reclamacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $solicitacaoReclamacao = $this->solicitacaoReclamacaoRepository->find($id);

        if (empty($solicitacaoReclamacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoReclamacaos.singular')]));

            return redirect(route('solicitacaoReclamacaos.index'));
        }

        return view('solicitacao_reclamacaos.edit')->with('solicitacaoReclamacao', $solicitacaoReclamacao);
    }

    /**
     * Update the specified solicitacao_reclamacao in storage.
     *
     * @param  int              $id
     * @param Updatesolicitacao_reclamacaoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesolicitacao_reclamacaoRequest $request)
    {
        $solicitacaoReclamacao = $this->solicitacaoReclamacaoRepository->find($id);

        if (empty($solicitacaoReclamacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoReclamacaos.singular')]));

            return redirect(route('solicitacaoReclamacaos.index'));
        }

        $solicitacaoReclamacao = $this->solicitacaoReclamacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/solicitacaoReclamacaos.singular')]));

        return redirect(route('solicitacaoReclamacaos.index'));
    }

    /**
     * Remove the specified solicitacao_reclamacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solicitacaoReclamacao = $this->solicitacaoReclamacaoRepository->find($id);

        if (empty($solicitacaoReclamacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoReclamacaos.singular')]));

            return redirect(route('solicitacaoReclamacaos.index'));
        }

        $this->solicitacaoReclamacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/solicitacaoReclamacaos.singular')]));

        return redirect(route('solicitacaoReclamacaos.index'));
    }
}
