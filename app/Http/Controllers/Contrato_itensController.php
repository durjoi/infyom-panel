<?php

namespace App\Http\Controllers;

use App\DataTables\Contrato_itensDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateContrato_itensRequest;
use App\Http\Requests\UpdateContrato_itensRequest;
use App\Repositories\Contrato_itensRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Contrato_itensController extends AppBaseController
{
    /** @var  Contrato_itensRepository */
    private $contratoItensRepository;

    public function __construct(Contrato_itensRepository $contratoItensRepo)
    {
        $this->contratoItensRepository = $contratoItensRepo;
    }

    /**
     * Display a listing of the Contrato_itens.
     *
     * @param Contrato_itensDataTable $contratoItensDataTable
     * @return Response
     */
    public function index(Contrato_itensDataTable $contratoItensDataTable)
    {
        return $contratoItensDataTable->render('contrato_itens.index');
    }

    /**
     * Show the form for creating a new Contrato_itens.
     *
     * @return Response
     */
    public function create()
    {
        return view('contrato_itens.create');
    }

    /**
     * Store a newly created Contrato_itens in storage.
     *
     * @param CreateContrato_itensRequest $request
     *
     * @return Response
     */
    public function store(CreateContrato_itensRequest $request)
    {
        $input = $request->all();

        $contratoItens = $this->contratoItensRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/contratoItens.singular')]));

        return redirect(route('contratoItens.index'));
    }

    /**
     * Display the specified Contrato_itens.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contratoItens = $this->contratoItensRepository->find($id);

        if (empty($contratoItens)) {
            Flash::error(__('models/contratoItens.singular').' '.__('messages.not_found'));

            return redirect(route('contratoItens.index'));
        }

        return view('contrato_itens.show')->with('contratoItens', $contratoItens);
    }

    /**
     * Show the form for editing the specified Contrato_itens.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contratoItens = $this->contratoItensRepository->find($id);

        if (empty($contratoItens)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratoItens.singular')]));

            return redirect(route('contratoItens.index'));
        }

        return view('contrato_itens.edit')->with('contratoItens', $contratoItens);
    }

    /**
     * Update the specified Contrato_itens in storage.
     *
     * @param  int              $id
     * @param UpdateContrato_itensRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContrato_itensRequest $request)
    {
        $contratoItens = $this->contratoItensRepository->find($id);

        if (empty($contratoItens)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratoItens.singular')]));

            return redirect(route('contratoItens.index'));
        }

        $contratoItens = $this->contratoItensRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/contratoItens.singular')]));

        return redirect(route('contratoItens.index'));
    }

    /**
     * Remove the specified Contrato_itens from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratoItens = $this->contratoItensRepository->find($id);

        if (empty($contratoItens)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratoItens.singular')]));

            return redirect(route('contratoItens.index'));
        }

        $this->contratoItensRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/contratoItens.singular')]));

        return redirect(route('contratoItens.index'));
    }
}
