<?php

namespace App\Http\Controllers;

use App\DataTables\ordemDeServicoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateordemDeServicoRequest;
use App\Http\Requests\UpdateordemDeServicoRequest;
use App\Models\item;
use App\Repositories\itemRepository;
use App\Repositories\ordemDeServicoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ordemDeServicoController extends AppBaseController
{
    /** @var  ordemDeServicoRepository */
    private $ordemDeServicoRepository;

    public function __construct(ordemDeServicoRepository $ordemDeServicoRepo)
    {
        $this->ordemDeServicoRepository = $ordemDeServicoRepo;
    }

    /**
     * Display a listing of the ordemDeServico.
     *
     * @param ordemDeServicoDataTable $ordemDeServicoDataTable
     * @return Response
     */
    public function index(ordemDeServicoDataTable $ordemDeServicoDataTable)
    {
        return $ordemDeServicoDataTable->render('ordem_de_servicos.index');
    }

    /**
     * Show the form for creating a new ordemDeServico.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordem_de_servicos.create');
    }

    /**
     * Store a newly created ordemDeServico in storage.
     *
     * @param CreateordemDeServicoRequest $request
     *
     * @return Response
     */
    public function store(CreateordemDeServicoRequest $request)
    {
        $input = $request->all();

        $ordemDeServico = $this->ordemDeServicoRepository->create($input);

        foreach ($input['Item'] as $item){
            $newItem = new item;

            $newItem->marca = $item['marca'];
            $newItem->produto = $item['produto'];
            $newItem->unidade = $item['unidade'];
            $newItem->quantidade = $item['quantidade'];
            $newItem->preco_total = $item['preco_total'];
            $newItem->ordem_de_servico_id = $ordemDeServico->id;
            $newItem->save();
        }
        Flash::success(__('messages.saved', ['model' => __('models/ordemDeServicos.singular')]));

        return redirect(route('ordemDeServicos.index'));
    }

    /**
     * Display the specified ordemDeServico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordemDeServico = $this->ordemDeServicoRepository->find($id);

        if (empty($ordemDeServico)) {
            Flash::error(__('models/ordemDeServicos.singular').' '.__('messages.not_found'));

            return redirect(route('ordemDeServicos.index'));
        }

        return view('ordem_de_servicos.show')->with('ordemDeServico', $ordemDeServico);
    }

    /**
     * Show the form for editing the specified ordemDeServico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordemDeServico = $this->ordemDeServicoRepository->find($id);
        $items = $ordemDeServico->items;
        $itemsAll = [];
        foreach ($items as $item) {
            $itemsAll[] = $item;
        }
        if (empty($ordemDeServico)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemDeServicos.singular')]));

            return redirect(route('ordemDeServicos.index'));
        }

        return view('ordem_de_servicos.edit')->with('ordemDeServico', $ordemDeServico);
    }

    /**
     * Update the specified ordemDeServico in storage.
     *
     * @param  int              $id
     * @param UpdateordemDeServicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateordemDeServicoRequest $request)
    {
        $ordemDeServico = $this->ordemDeServicoRepository->find($id);

        if (empty($ordemDeServico)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemDeServicos.singular')]));

            return redirect(route('ordemDeServicos.index'));
        }

        $ordemDeServico = $this->ordemDeServicoRepository->update($request->all(), $id);
        if(count($ordemDeServico->items) > 0){
            foreach ($ordemDeServico->items as $item){
                $item->delete();
            }
        }
        foreach ($request['Item'] as $item){
            $newItem = new item;

            $newItem->marca = $item['marca'];
            $newItem->produto = $item['produto'];
            $newItem->unidade = $item['unidade'];
            $newItem->quantidade = $item['quantidade'];
            $newItem->preco_total = $item['preco_total'];
            $newItem->ordem_de_servico_id = $ordemDeServico->id;
            $newItem->save();
        }
        Flash::success(__('messages.updated', ['model' => __('models/ordemDeServicos.singular')]));

        return redirect(route('ordemDeServicos.index'));
    }

    /**
     * Remove the specified ordemDeServico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordemDeServico = $this->ordemDeServicoRepository->find($id);

        if (empty($ordemDeServico)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ordemDeServicos.singular')]));

            return redirect(route('ordemDeServicos.index'));
        }

        $this->ordemDeServicoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ordemDeServicos.singular')]));

        return redirect(route('ordemDeServicos.index'));
    }
}
