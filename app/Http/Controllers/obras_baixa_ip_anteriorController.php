<?php

namespace App\Http\Controllers;

use App\DataTables\obras_baixa_ip_anteriorDataTable;
use App\Http\Requests;
use App\Http\Requests\Createobras_baixa_ip_anteriorRequest;
use App\Http\Requests\Updateobras_baixa_ip_anteriorRequest;
use App\Repositories\obras_baixa_ip_anteriorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class obras_baixa_ip_anteriorController extends AppBaseController
{
    /** @var  obras_baixa_ip_anteriorRepository */
    private $obrasBaixaIpAnteriorRepository;

    public function __construct(obras_baixa_ip_anteriorRepository $obrasBaixaIpAnteriorRepo)
    {
        $this->obrasBaixaIpAnteriorRepository = $obrasBaixaIpAnteriorRepo;
    }

    /**
     * Display a listing of the obras_baixa_ip_anterior.
     *
     * @param obras_baixa_ip_anteriorDataTable $obrasBaixaIpAnteriorDataTable
     * @return Response
     */
    public function index(obras_baixa_ip_anteriorDataTable $obrasBaixaIpAnteriorDataTable)
    {
        return $obrasBaixaIpAnteriorDataTable->render('obras_baixa_ip_anteriors.index');
    }

    /**
     * Show the form for creating a new obras_baixa_ip_anterior.
     *
     * @return Response
     */
    public function create()
    {
        return view('obras_baixa_ip_anteriors.create');
    }

    /**
     * Store a newly created obras_baixa_ip_anterior in storage.
     *
     * @param Createobras_baixa_ip_anteriorRequest $request
     *
     * @return Response
     */
    public function store(Createobras_baixa_ip_anteriorRequest $request)
    {
        $input = $request->all();

        $obrasBaixaIpAnterior = $this->obrasBaixaIpAnteriorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/obrasBaixaIpAnteriors.singular')]));

        return redirect(route('obrasBaixaIpAnteriors.index'));
    }

    /**
     * Display the specified obras_baixa_ip_anterior.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obrasBaixaIpAnterior = $this->obrasBaixaIpAnteriorRepository->find($id);

        if (empty($obrasBaixaIpAnterior)) {
            Flash::error(__('models/obrasBaixaIpAnteriors.singular').' '.__('messages.not_found'));

            return redirect(route('obrasBaixaIpAnteriors.index'));
        }

        return view('obras_baixa_ip_anteriors.show')->with('obrasBaixaIpAnterior', $obrasBaixaIpAnterior);
    }

    /**
     * Show the form for editing the specified obras_baixa_ip_anterior.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obrasBaixaIpAnterior = $this->obrasBaixaIpAnteriorRepository->find($id);

        if (empty($obrasBaixaIpAnterior)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasBaixaIpAnteriors.singular')]));

            return redirect(route('obrasBaixaIpAnteriors.index'));
        }

        return view('obras_baixa_ip_anteriors.edit')->with('obrasBaixaIpAnterior', $obrasBaixaIpAnterior);
    }

    /**
     * Update the specified obras_baixa_ip_anterior in storage.
     *
     * @param  int              $id
     * @param Updateobras_baixa_ip_anteriorRequest $request
     *
     * @return Response
     */
    public function update($id, Updateobras_baixa_ip_anteriorRequest $request)
    {
        $obrasBaixaIpAnterior = $this->obrasBaixaIpAnteriorRepository->find($id);

        if (empty($obrasBaixaIpAnterior)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasBaixaIpAnteriors.singular')]));

            return redirect(route('obrasBaixaIpAnteriors.index'));
        }

        $obrasBaixaIpAnterior = $this->obrasBaixaIpAnteriorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/obrasBaixaIpAnteriors.singular')]));

        return redirect(route('obrasBaixaIpAnteriors.index'));
    }

    /**
     * Remove the specified obras_baixa_ip_anterior from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obrasBaixaIpAnterior = $this->obrasBaixaIpAnteriorRepository->find($id);

        if (empty($obrasBaixaIpAnterior)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasBaixaIpAnteriors.singular')]));

            return redirect(route('obrasBaixaIpAnteriors.index'));
        }

        $this->obrasBaixaIpAnteriorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/obrasBaixaIpAnteriors.singular')]));

        return redirect(route('obrasBaixaIpAnteriors.index'));
    }
}
