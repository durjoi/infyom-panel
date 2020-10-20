<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_14_dadosfaturaDataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_14_dadosfaturaRequest;
use App\Http\Requests\Updateipcontaip_14_dadosfaturaRequest;
use App\Repositories\ipcontaip_14_dadosfaturaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_14_dadosfaturaController extends AppBaseController
{
    /** @var  ipcontaip_14_dadosfaturaRepository */
    private $ipcontaip14DadosfaturaRepository;

    public function __construct(ipcontaip_14_dadosfaturaRepository $ipcontaip14DadosfaturaRepo)
    {
        $this->ipcontaip14DadosfaturaRepository = $ipcontaip14DadosfaturaRepo;
    }

    /**
     * Display a listing of the ipcontaip_14_dadosfatura.
     *
     * @param ipcontaip_14_dadosfaturaDataTable $ipcontaip14DadosfaturaDataTable
     * @return Response
     */
    public function index(ipcontaip_14_dadosfaturaDataTable $ipcontaip14DadosfaturaDataTable)
    {
        return $ipcontaip14DadosfaturaDataTable->render('ipcontaip_14_dadosfaturas.index');
    }

    /**
     * Show the form for creating a new ipcontaip_14_dadosfatura.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_14_dadosfaturas.create');
    }

    /**
     * Store a newly created ipcontaip_14_dadosfatura in storage.
     *
     * @param Createipcontaip_14_dadosfaturaRequest $request
     *
     * @return Response
     */
    public function store(Createipcontaip_14_dadosfaturaRequest $request)
    {
        $input = $request->all();

        $ipcontaip14Dadosfatura = $this->ipcontaip14DadosfaturaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaip14Dadosfaturas.singular')]));

        return redirect(route('ipcontaip14Dadosfaturas.index'));
    }

    /**
     * Display the specified ipcontaip_14_dadosfatura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaip14Dadosfatura = $this->ipcontaip14DadosfaturaRepository->find($id);

        if (empty($ipcontaip14Dadosfatura)) {
            Flash::error(__('models/ipcontaip14Dadosfaturas.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaip14Dadosfaturas.index'));
        }

        return view('ipcontaip_14_dadosfaturas.show')->with('ipcontaip14Dadosfatura', $ipcontaip14Dadosfatura);
    }

    /**
     * Show the form for editing the specified ipcontaip_14_dadosfatura.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaip14Dadosfatura = $this->ipcontaip14DadosfaturaRepository->find($id);

        if (empty($ipcontaip14Dadosfatura)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip14Dadosfaturas.singular')]));

            return redirect(route('ipcontaip14Dadosfaturas.index'));
        }

        return view('ipcontaip_14_dadosfaturas.edit')->with('ipcontaip14Dadosfatura', $ipcontaip14Dadosfatura);
    }

    /**
     * Update the specified ipcontaip_14_dadosfatura in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_14_dadosfaturaRequest $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_14_dadosfaturaRequest $request)
    {
        $ipcontaip14Dadosfatura = $this->ipcontaip14DadosfaturaRepository->find($id);

        if (empty($ipcontaip14Dadosfatura)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip14Dadosfaturas.singular')]));

            return redirect(route('ipcontaip14Dadosfaturas.index'));
        }

        $ipcontaip14Dadosfatura = $this->ipcontaip14DadosfaturaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaip14Dadosfaturas.singular')]));

        return redirect(route('ipcontaip14Dadosfaturas.index'));
    }

    /**
     * Remove the specified ipcontaip_14_dadosfatura from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaip14Dadosfatura = $this->ipcontaip14DadosfaturaRepository->find($id);

        if (empty($ipcontaip14Dadosfatura)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip14Dadosfaturas.singular')]));

            return redirect(route('ipcontaip14Dadosfaturas.index'));
        }

        $this->ipcontaip14DadosfaturaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaip14Dadosfaturas.singular')]));

        return redirect(route('ipcontaip14Dadosfaturas.index'));
    }
}
