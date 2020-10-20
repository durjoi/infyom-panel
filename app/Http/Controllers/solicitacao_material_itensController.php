<?php

namespace App\Http\Controllers;

use App\DataTables\solicitacao_material_itensDataTable;
use App\Http\Requests;
use App\Http\Requests\Createsolicitacao_material_itensRequest;
use App\Http\Requests\Updatesolicitacao_material_itensRequest;
use App\Repositories\solicitacao_material_itensRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class solicitacao_material_itensController extends AppBaseController
{
    /** @var  solicitacao_material_itensRepository */
    private $solicitacaoMaterialItensRepository;

    public function __construct(solicitacao_material_itensRepository $solicitacaoMaterialItensRepo)
    {
        $this->solicitacaoMaterialItensRepository = $solicitacaoMaterialItensRepo;
    }

    /**
     * Display a listing of the solicitacao_material_itens.
     *
     * @param solicitacao_material_itensDataTable $solicitacaoMaterialItensDataTable
     * @return Response
     */
    public function index(solicitacao_material_itensDataTable $solicitacaoMaterialItensDataTable)
    {
        return $solicitacaoMaterialItensDataTable->render('solicitacao_material_itens.index');
    }

    /**
     * Show the form for creating a new solicitacao_material_itens.
     *
     * @return Response
     */
    public function create()
    {
        return view('solicitacao_material_itens.create');
    }

    /**
     * Store a newly created solicitacao_material_itens in storage.
     *
     * @param Createsolicitacao_material_itensRequest $request
     *
     * @return Response
     */
    public function store(Createsolicitacao_material_itensRequest $request)
    {
        $input = $request->all();

        $solicitacaoMaterialItens = $this->solicitacaoMaterialItensRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/solicitacaoMaterialItens.singular')]));

        return redirect(route('solicitacaoMaterialItens.index'));
    }

    /**
     * Display the specified solicitacao_material_itens.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $solicitacaoMaterialItens = $this->solicitacaoMaterialItensRepository->find($id);

        if (empty($solicitacaoMaterialItens)) {
            Flash::error(__('models/solicitacaoMaterialItens.singular').' '.__('messages.not_found'));

            return redirect(route('solicitacaoMaterialItens.index'));
        }

        return view('solicitacao_material_itens.show')->with('solicitacaoMaterialItens', $solicitacaoMaterialItens);
    }

    /**
     * Show the form for editing the specified solicitacao_material_itens.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $solicitacaoMaterialItens = $this->solicitacaoMaterialItensRepository->find($id);

        if (empty($solicitacaoMaterialItens)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoMaterialItens.singular')]));

            return redirect(route('solicitacaoMaterialItens.index'));
        }

        return view('solicitacao_material_itens.edit')->with('solicitacaoMaterialItens', $solicitacaoMaterialItens);
    }

    /**
     * Update the specified solicitacao_material_itens in storage.
     *
     * @param  int              $id
     * @param Updatesolicitacao_material_itensRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesolicitacao_material_itensRequest $request)
    {
        $solicitacaoMaterialItens = $this->solicitacaoMaterialItensRepository->find($id);

        if (empty($solicitacaoMaterialItens)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoMaterialItens.singular')]));

            return redirect(route('solicitacaoMaterialItens.index'));
        }

        $solicitacaoMaterialItens = $this->solicitacaoMaterialItensRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/solicitacaoMaterialItens.singular')]));

        return redirect(route('solicitacaoMaterialItens.index'));
    }

    /**
     * Remove the specified solicitacao_material_itens from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solicitacaoMaterialItens = $this->solicitacaoMaterialItensRepository->find($id);

        if (empty($solicitacaoMaterialItens)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoMaterialItens.singular')]));

            return redirect(route('solicitacaoMaterialItens.index'));
        }

        $this->solicitacaoMaterialItensRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/solicitacaoMaterialItens.singular')]));

        return redirect(route('solicitacaoMaterialItens.index'));
    }
}
