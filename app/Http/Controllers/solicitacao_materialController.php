<?php

namespace App\Http\Controllers;

use App\DataTables\solicitacao_materialDataTable;
use App\Http\Requests;
use App\Http\Requests\Createsolicitacao_materialRequest;
use App\Http\Requests\Updatesolicitacao_materialRequest;
use App\Repositories\solicitacao_materialRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class solicitacao_materialController extends AppBaseController
{
    /** @var  solicitacao_materialRepository */
    private $solicitacaoMaterialRepository;

    public function __construct(solicitacao_materialRepository $solicitacaoMaterialRepo)
    {
        $this->solicitacaoMaterialRepository = $solicitacaoMaterialRepo;
    }

    /**
     * Display a listing of the solicitacao_material.
     *
     * @param solicitacao_materialDataTable $solicitacaoMaterialDataTable
     * @return Response
     */
    public function index(solicitacao_materialDataTable $solicitacaoMaterialDataTable)
    {
        return $solicitacaoMaterialDataTable->render('solicitacao_materials.index');
    }

    /**
     * Show the form for creating a new solicitacao_material.
     *
     * @return Response
     */
    public function create()
    {
        return view('solicitacao_materials.create');
    }

    /**
     * Store a newly created solicitacao_material in storage.
     *
     * @param Createsolicitacao_materialRequest $request
     *
     * @return Response
     */
    public function store(Createsolicitacao_materialRequest $request)
    {
        $input = $request->all();

        $solicitacaoMaterial = $this->solicitacaoMaterialRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/solicitacaoMaterials.singular')]));

        return redirect(route('solicitacaoMaterials.index'));
    }

    /**
     * Display the specified solicitacao_material.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $solicitacaoMaterial = $this->solicitacaoMaterialRepository->find($id);

        if (empty($solicitacaoMaterial)) {
            Flash::error(__('models/solicitacaoMaterials.singular').' '.__('messages.not_found'));

            return redirect(route('solicitacaoMaterials.index'));
        }

        return view('solicitacao_materials.show')->with('solicitacaoMaterial', $solicitacaoMaterial);
    }

    /**
     * Show the form for editing the specified solicitacao_material.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $solicitacaoMaterial = $this->solicitacaoMaterialRepository->find($id);

        if (empty($solicitacaoMaterial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoMaterials.singular')]));

            return redirect(route('solicitacaoMaterials.index'));
        }

        return view('solicitacao_materials.edit')->with('solicitacaoMaterial', $solicitacaoMaterial);
    }

    /**
     * Update the specified solicitacao_material in storage.
     *
     * @param  int              $id
     * @param Updatesolicitacao_materialRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesolicitacao_materialRequest $request)
    {
        $solicitacaoMaterial = $this->solicitacaoMaterialRepository->find($id);

        if (empty($solicitacaoMaterial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoMaterials.singular')]));

            return redirect(route('solicitacaoMaterials.index'));
        }

        $solicitacaoMaterial = $this->solicitacaoMaterialRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/solicitacaoMaterials.singular')]));

        return redirect(route('solicitacaoMaterials.index'));
    }

    /**
     * Remove the specified solicitacao_material from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solicitacaoMaterial = $this->solicitacaoMaterialRepository->find($id);

        if (empty($solicitacaoMaterial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/solicitacaoMaterials.singular')]));

            return redirect(route('solicitacaoMaterials.index'));
        }

        $this->solicitacaoMaterialRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/solicitacaoMaterials.singular')]));

        return redirect(route('solicitacaoMaterials.index'));
    }
}
