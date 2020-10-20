<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_secretariasDataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_secretariasRequest;
use App\Http\Requests\Updateipcontaip_secretariasRequest;
use App\Repositories\ipcontaip_secretariasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_secretariasController extends AppBaseController
{
    /** @var  ipcontaip_secretariasRepository */
    private $ipcontaipSecretariasRepository;

    public function __construct(ipcontaip_secretariasRepository $ipcontaipSecretariasRepo)
    {
        $this->ipcontaipSecretariasRepository = $ipcontaipSecretariasRepo;
    }

    /**
     * Display a listing of the ipcontaip_secretarias.
     *
     * @param ipcontaip_secretariasDataTable $ipcontaipSecretariasDataTable
     * @return Response
     */
    public function index(ipcontaip_secretariasDataTable $ipcontaipSecretariasDataTable)
    {
        return $ipcontaipSecretariasDataTable->render('ipcontaip_secretarias.index');
    }

    /**
     * Show the form for creating a new ipcontaip_secretarias.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_secretarias.create');
    }

    /**
     * Store a newly created ipcontaip_secretarias in storage.
     *
     * @param Createipcontaip_secretariasRequest $request
     *
     * @return Response
     */
    public function store(Createipcontaip_secretariasRequest $request)
    {
        $input = $request->all();

        $ipcontaipSecretarias = $this->ipcontaipSecretariasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaipSecretarias.singular')]));

        return redirect(route('ipcontaipSecretarias.index'));
    }

    /**
     * Display the specified ipcontaip_secretarias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaipSecretarias = $this->ipcontaipSecretariasRepository->find($id);

        if (empty($ipcontaipSecretarias)) {
            Flash::error(__('models/ipcontaipSecretarias.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaipSecretarias.index'));
        }

        return view('ipcontaip_secretarias.show')->with('ipcontaipSecretarias', $ipcontaipSecretarias);
    }

    /**
     * Show the form for editing the specified ipcontaip_secretarias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaipSecretarias = $this->ipcontaipSecretariasRepository->find($id);

        if (empty($ipcontaipSecretarias)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipSecretarias.singular')]));

            return redirect(route('ipcontaipSecretarias.index'));
        }

        return view('ipcontaip_secretarias.edit')->with('ipcontaipSecretarias', $ipcontaipSecretarias);
    }

    /**
     * Update the specified ipcontaip_secretarias in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_secretariasRequest $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_secretariasRequest $request)
    {
        $ipcontaipSecretarias = $this->ipcontaipSecretariasRepository->find($id);

        if (empty($ipcontaipSecretarias)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipSecretarias.singular')]));

            return redirect(route('ipcontaipSecretarias.index'));
        }

        $ipcontaipSecretarias = $this->ipcontaipSecretariasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaipSecretarias.singular')]));

        return redirect(route('ipcontaipSecretarias.index'));
    }

    /**
     * Remove the specified ipcontaip_secretarias from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaipSecretarias = $this->ipcontaipSecretariasRepository->find($id);

        if (empty($ipcontaipSecretarias)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipSecretarias.singular')]));

            return redirect(route('ipcontaipSecretarias.index'));
        }

        $this->ipcontaipSecretariasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaipSecretarias.singular')]));

        return redirect(route('ipcontaipSecretarias.index'));
    }
}
