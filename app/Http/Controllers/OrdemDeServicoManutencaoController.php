<?php

namespace App\Http\Controllers;

use App\DataTables\OrdemDeServicoManutencaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOrdemDeServicoManutencaoRequest;
use App\Http\Requests\UpdateOrdemDeServicoManutencaoRequest;
use App\Models\ItensOs;
use App\Repositories\OrdemDeServicoManutencaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class OrdemDeServicoManutencaoController extends AppBaseController
{
    /** @var  OrdemDeServicoManutencaoRepository */
    private $ordemDeServicoManutencaoRepository;

    public function __construct(OrdemDeServicoManutencaoRepository $ordemDeServicoManutencaoRepo)
    {
        $this->ordemDeServicoManutencaoRepository = $ordemDeServicoManutencaoRepo;
    }

    /**
     * Display a listing of the OrdemDeServicoManutencao.
     *
     * @param OrdemDeServicoManutencaoDataTable $ordemDeServicoManutencaoDataTable
     * @return Response
     */
    public function index(OrdemDeServicoManutencaoDataTable $ordemDeServicoManutencaoDataTable)
    {
        return $ordemDeServicoManutencaoDataTable->render('ordem_de_servico_manutencaos.index');
    }

    /**
     * Show the form for creating a new OrdemDeServicoManutencao.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordem_de_servico_manutencaos.create');
    }

    /**
     * Store a newly created OrdemDeServicoManutencao in storage.
     *
     * @param CreateOrdemDeServicoManutencaoRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdemDeServicoManutencaoRequest $request)
    {
        $input = $request->all();

        $ordemDeServicoManutencao = $this->ordemDeServicoManutencaoRepository->create($input);
        foreach ($input['ItemOs'] as $itemOs){
            $itemOs['ordem_de_servico_manutencao_id'] = $ordemDeServicoManutencao->id;
            $newItemOs = ItensOs::create($itemOs);
        }
        Flash::success(__('messages.saved', ['model' => __('models/ordemDeServicoManutencaos.singular')]));

        return redirect(route('ordemDeServicoManutencaos.index'));
    }

    /**
     * Display the specified OrdemDeServicoManutencao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordemDeServicoManutencao = $this->ordemDeServicoManutencaoRepository->find($id);

        if (empty($ordemDeServicoManutencao)) {
            Flash::error(__('models/ordemDeServicoManutencaos.singular').' '.__('messages.not_found'));

            return redirect(route('ordemDeServicoManutencaos.index'));
        }

        return view('ordem_de_servico_manutencaos.show')->with('ordemDeServicoManutencao', $ordemDeServicoManutencao);
    }

    /**
     * Show the form for editing the specified OrdemDeServicoManutencao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordemDeServicoManutencao = $this->ordemDeServicoManutencaoRepository->find($id);

        if (empty($ordemDeServicoManutencao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemDeServicoManutencaos.singular')]));

            return redirect(route('ordemDeServicoManutencaos.index'));
        }

        return view('ordem_de_servico_manutencaos.edit')->with('ordemDeServicoManutencao', $ordemDeServicoManutencao);
    }

    /**
     * Update the specified OrdemDeServicoManutencao in storage.
     *
     * @param  int              $id
     * @param UpdateOrdemDeServicoManutencaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdemDeServicoManutencaoRequest $request)
    {
        $ordemDeServicoManutencao = $this->ordemDeServicoManutencaoRepository->find($id);

        if (empty($ordemDeServicoManutencao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemDeServicoManutencaos.singular')]));

            return redirect(route('ordemDeServicoManutencaos.index'));
        }

        $ordemDeServicoManutencao = $this->ordemDeServicoManutencaoRepository->update($request->all(), $id);
        if(count($ordemDeServicoManutencao->itensOs) > 0){
            foreach ($ordemDeServicoManutencao->itensOs as $itemOs){
                $itemOs->delete();
            }
        }
        foreach ($request['ItemOs'] as $itemOs){
            $itemOs['ordem_de_servico_manutencao_id'] = $ordemDeServicoManutencao->id;
            $newItemOs = ItensOs::create($itemOs);
        }
        Flash::success(__('messages.updated', ['model' => __('models/ordemDeServicoManutencaos.singular')]));

        return redirect(route('ordemDeServicoManutencaos.index'));
    }

    /**
     * Remove the specified OrdemDeServicoManutencao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordemDeServicoManutencao = $this->ordemDeServicoManutencaoRepository->find($id);

        if (empty($ordemDeServicoManutencao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemDeServicoManutencaos.singular')]));

            return redirect(route('ordemDeServicoManutencaos.index'));
        }

        $this->ordemDeServicoManutencaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ordemDeServicoManutencaos.singular')]));

        return redirect(route('ordemDeServicoManutencaos.index'));
    }
}
