<?php

namespace App\Http\Controllers;

use App\DataTables\solicitacao_reclamacao_solicitantesDataTable;
use App\Http\Requests;
use App\Http\Requests\Createsolicitacao_reclamacao_solicitantesRequest;
use App\Http\Requests\Updatesolicitacao_reclamacao_solicitantesRequest;
use App\Repositories\solicitacao_reclamacao_solicitantesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class solicitacao_reclamacao_solicitantesController extends AppBaseController
{
    /** @var  solicitacao_reclamacao_solicitantesRepository */
    private $solicitacaoReclamacaoSolicitantesRepository;

    public function __construct(solicitacao_reclamacao_solicitantesRepository $solicitacaoReclamacaoSolicitantesRepo)
    {
        $this->solicitacaoReclamacaoSolicitantesRepository = $solicitacaoReclamacaoSolicitantesRepo;
    }

    /**
     * Display a listing of the solicitacao_reclamacao_solicitantes.
     *
     * @param solicitacao_reclamacao_solicitantesDataTable $solicitacaoReclamacaoSolicitantesDataTable
     * @return Response
     */
    public function index(solicitacao_reclamacao_solicitantesDataTable $solicitacaoReclamacaoSolicitantesDataTable)
    {
        return $solicitacaoReclamacaoSolicitantesDataTable->render('solicitacao_reclamacao_solicitantes.index');
    }

    /**
     * Show the form for creating a new solicitacao_reclamacao_solicitantes.
     *
     * @return Response
     */
    public function create()
    {
        return view('solicitacao_reclamacao_solicitantes.create');
    }

    /**
     * Store a newly created solicitacao_reclamacao_solicitantes in storage.
     *
     * @param Createsolicitacao_reclamacao_solicitantesRequest $request
     *
     * @return Response
     */
    public function store(Createsolicitacao_reclamacao_solicitantesRequest $request)
    {
        $input = $request->all();

        $solicitacaoReclamacaoSolicitantes = $this->solicitacaoReclamacaoSolicitantesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/solicitacaoReclamacaoSolicitantes.singular')]));

        return redirect(route('solicitacaoReclamacaoSolicitantes.index'));
    }

    /**
     * Display the specified solicitacao_reclamacao_solicitantes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $solicitacaoReclamacaoSolicitantes = $this->solicitacaoReclamacaoSolicitantesRepository->find($id);

        if (empty($solicitacaoReclamacaoSolicitantes)) {
            Flash::error(__('models/solicitacaoReclamacaoSolicitantes.singular').' '.__('messages.not_found'));

            return redirect(route('solicitacaoReclamacaoSolicitantes.index'));
        }

        return view('solicitacao_reclamacao_solicitantes.show')->with('solicitacaoReclamacaoSolicitantes', $solicitacaoReclamacaoSolicitantes);
    }

    /**
     * Show the form for editing the specified solicitacao_reclamacao_solicitantes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $solicitacaoReclamacaoSolicitantes = $this->solicitacaoReclamacaoSolicitantesRepository->find($id);

        if (empty($solicitacaoReclamacaoSolicitantes)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoReclamacaoSolicitantes.singular')]));

            return redirect(route('solicitacaoReclamacaoSolicitantes.index'));
        }

        return view('solicitacao_reclamacao_solicitantes.edit')->with('solicitacaoReclamacaoSolicitantes', $solicitacaoReclamacaoSolicitantes);
    }

    /**
     * Update the specified solicitacao_reclamacao_solicitantes in storage.
     *
     * @param  int              $id
     * @param Updatesolicitacao_reclamacao_solicitantesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesolicitacao_reclamacao_solicitantesRequest $request)
    {
        $solicitacaoReclamacaoSolicitantes = $this->solicitacaoReclamacaoSolicitantesRepository->find($id);

        if (empty($solicitacaoReclamacaoSolicitantes)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoReclamacaoSolicitantes.singular')]));

            return redirect(route('solicitacaoReclamacaoSolicitantes.index'));
        }

        $solicitacaoReclamacaoSolicitantes = $this->solicitacaoReclamacaoSolicitantesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/solicitacaoReclamacaoSolicitantes.singular')]));

        return redirect(route('solicitacaoReclamacaoSolicitantes.index'));
    }

    /**
     * Remove the specified solicitacao_reclamacao_solicitantes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solicitacaoReclamacaoSolicitantes = $this->solicitacaoReclamacaoSolicitantesRepository->find($id);

        if (empty($solicitacaoReclamacaoSolicitantes)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoReclamacaoSolicitantes.singular')]));

            return redirect(route('solicitacaoReclamacaoSolicitantes.index'));
        }

        $this->solicitacaoReclamacaoSolicitantesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/solicitacaoReclamacaoSolicitantes.singular')]));

        return redirect(route('solicitacaoReclamacaoSolicitantes.index'));
    }
}
