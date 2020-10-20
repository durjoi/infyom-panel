<?php

namespace App\Http\Controllers;

use App\DataTables\Contrato_itens_ajusteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateContrato_itens_ajusteRequest;
use App\Http\Requests\UpdateContrato_itens_ajusteRequest;
use App\Repositories\Contrato_itens_ajusteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Contrato_itens_ajusteController extends AppBaseController
{
    /** @var  Contrato_itens_ajusteRepository */
    private $contratoItensAjusteRepository;

    public function __construct(Contrato_itens_ajusteRepository $contratoItensAjusteRepo)
    {
        $this->contratoItensAjusteRepository = $contratoItensAjusteRepo;
    }

    /**
     * Display a listing of the Contrato_itens_ajuste.
     *
     * @param Contrato_itens_ajusteDataTable $contratoItensAjusteDataTable
     * @return Response
     */
    public function index(Contrato_itens_ajusteDataTable $contratoItensAjusteDataTable)
    {
        return $contratoItensAjusteDataTable->render('contrato_itens_ajustes.index');
    }

    /**
     * Show the form for creating a new Contrato_itens_ajuste.
     *
     * @return Response
     */
    public function create()
    {
        return view('contrato_itens_ajustes.create');
    }

    /**
     * Store a newly created Contrato_itens_ajuste in storage.
     *
     * @param CreateContrato_itens_ajusteRequest $request
     *
     * @return Response
     */
    public function store(CreateContrato_itens_ajusteRequest $request)
    {
        $input = $request->all();

        $contratoItensAjuste = $this->contratoItensAjusteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/contratoItensAjustes.singular')]));

        return redirect(route('contratoItensAjustes.index'));
    }

    /**
     * Display the specified Contrato_itens_ajuste.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contratoItensAjuste = $this->contratoItensAjusteRepository->find($id);

        if (empty($contratoItensAjuste)) {
            Flash::error(__('models/contratoItensAjustes.singular').' '.__('messages.not_found'));

            return redirect(route('contratoItensAjustes.index'));
        }

        return view('contrato_itens_ajustes.show')->with('contratoItensAjuste', $contratoItensAjuste);
    }

    /**
     * Show the form for editing the specified Contrato_itens_ajuste.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contratoItensAjuste = $this->contratoItensAjusteRepository->find($id);

        if (empty($contratoItensAjuste)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratoItensAjustes.singular')]));

            return redirect(route('contratoItensAjustes.index'));
        }

        return view('contrato_itens_ajustes.edit')->with('contratoItensAjuste', $contratoItensAjuste);
    }

    /**
     * Update the specified Contrato_itens_ajuste in storage.
     *
     * @param  int              $id
     * @param UpdateContrato_itens_ajusteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContrato_itens_ajusteRequest $request)
    {
        $contratoItensAjuste = $this->contratoItensAjusteRepository->find($id);

        if (empty($contratoItensAjuste)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratoItensAjustes.singular')]));

            return redirect(route('contratoItensAjustes.index'));
        }

        $contratoItensAjuste = $this->contratoItensAjusteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/contratoItensAjustes.singular')]));

        return redirect(route('contratoItensAjustes.index'));
    }

    /**
     * Remove the specified Contrato_itens_ajuste from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratoItensAjuste = $this->contratoItensAjusteRepository->find($id);

        if (empty($contratoItensAjuste)) {
            Flash::error(__('messages.not_found', ['model' => __('models/contratoItensAjustes.singular')]));

            return redirect(route('contratoItensAjustes.index'));
        }

        $this->contratoItensAjusteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/contratoItensAjustes.singular')]));

        return redirect(route('contratoItensAjustes.index'));
    }
}
