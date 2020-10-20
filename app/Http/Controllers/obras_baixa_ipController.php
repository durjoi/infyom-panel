<?php

namespace App\Http\Controllers;

use App\DataTables\obras_baixa_ipDataTable;
use App\Http\Requests;
use App\Http\Requests\Createobras_baixa_ipRequest;
use App\Http\Requests\Updateobras_baixa_ipRequest;
use App\Repositories\obras_baixa_ipRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class obras_baixa_ipController extends AppBaseController
{
    /** @var  obras_baixa_ipRepository */
    private $obrasBaixaIpRepository;

    public function __construct(obras_baixa_ipRepository $obrasBaixaIpRepo)
    {
        $this->obrasBaixaIpRepository = $obrasBaixaIpRepo;
    }

    /**
     * Display a listing of the obras_baixa_ip.
     *
     * @param obras_baixa_ipDataTable $obrasBaixaIpDataTable
     * @return Response
     */
    public function index(obras_baixa_ipDataTable $obrasBaixaIpDataTable)
    {
        return $obrasBaixaIpDataTable->render('obras_baixa_ips.index');
    }

    /**
     * Show the form for creating a new obras_baixa_ip.
     *
     * @return Response
     */
    public function create()
    {
        return view('obras_baixa_ips.create');
    }

    /**
     * Store a newly created obras_baixa_ip in storage.
     *
     * @param Createobras_baixa_ipRequest $request
     *
     * @return Response
     */
    public function store(Createobras_baixa_ipRequest $request)
    {
        $input = $request->all();

        $obrasBaixaIp = $this->obrasBaixaIpRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/obrasBaixaIps.singular')]));

        return redirect(route('obrasBaixaIps.index'));
    }

    /**
     * Display the specified obras_baixa_ip.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obrasBaixaIp = $this->obrasBaixaIpRepository->find($id);

        if (empty($obrasBaixaIp)) {
            Flash::error(__('models/obrasBaixaIps.singular').' '.__('messages.not_found'));

            return redirect(route('obrasBaixaIps.index'));
        }

        return view('obras_baixa_ips.show')->with('obrasBaixaIp', $obrasBaixaIp);
    }

    /**
     * Show the form for editing the specified obras_baixa_ip.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obrasBaixaIp = $this->obrasBaixaIpRepository->find($id);

        if (empty($obrasBaixaIp)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasBaixaIps.singular')]));

            return redirect(route('obrasBaixaIps.index'));
        }

        return view('obras_baixa_ips.edit')->with('obrasBaixaIp', $obrasBaixaIp);
    }

    /**
     * Update the specified obras_baixa_ip in storage.
     *
     * @param  int              $id
     * @param Updateobras_baixa_ipRequest $request
     *
     * @return Response
     */
    public function update($id, Updateobras_baixa_ipRequest $request)
    {
        $obrasBaixaIp = $this->obrasBaixaIpRepository->find($id);

        if (empty($obrasBaixaIp)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasBaixaIps.singular')]));

            return redirect(route('obrasBaixaIps.index'));
        }

        $obrasBaixaIp = $this->obrasBaixaIpRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/obrasBaixaIps.singular')]));

        return redirect(route('obrasBaixaIps.index'));
    }

    /**
     * Remove the specified obras_baixa_ip from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obrasBaixaIp = $this->obrasBaixaIpRepository->find($id);

        if (empty($obrasBaixaIp)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obrasBaixaIps.singular')]));

            return redirect(route('obrasBaixaIps.index'));
        }

        $this->obrasBaixaIpRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/obrasBaixaIps.singular')]));

        return redirect(route('obrasBaixaIps.index'));
    }
}
