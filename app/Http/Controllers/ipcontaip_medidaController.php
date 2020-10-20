<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_medidaDataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_medidaRequest;
use App\Http\Requests\Updateipcontaip_medidaRequest;
use App\Repositories\ipcontaip_medidaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_medidaController extends AppBaseController
{
    /** @var  ipcontaip_medidaRepository */
    private $ipcontaipMedidaRepository;

    public function __construct(ipcontaip_medidaRepository $ipcontaipMedidaRepo)
    {
        $this->ipcontaipMedidaRepository = $ipcontaipMedidaRepo;
    }

    /**
     * Display a listing of the ipcontaip_medida.
     *
     * @param ipcontaip_medidaDataTable $ipcontaipMedidaDataTable
     * @return Response
     */
    public function index(ipcontaip_medidaDataTable $ipcontaipMedidaDataTable)
    {
        return $ipcontaipMedidaDataTable->render('ipcontaip_medidas.index');
    }

    /**
     * Show the form for creating a new ipcontaip_medida.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_medidas.create');
    }

    /**
     * Store a newly created ipcontaip_medida in storage.
     *
     * @param Createipcontaip_medidaRequest $request
     *
     * @return Response
     */
    public function store(Createipcontaip_medidaRequest $request)
    {
        $input = $request->all();

        $ipcontaipMedida = $this->ipcontaipMedidaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaipMedidas.singular')]));

        return redirect(route('ipcontaipMedidas.index'));
    }

    /**
     * Display the specified ipcontaip_medida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaipMedida = $this->ipcontaipMedidaRepository->find($id);

        if (empty($ipcontaipMedida)) {
            Flash::error(__('models/ipcontaipMedidas.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaipMedidas.index'));
        }

        return view('ipcontaip_medidas.show')->with('ipcontaipMedida', $ipcontaipMedida);
    }

    /**
     * Show the form for editing the specified ipcontaip_medida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaipMedida = $this->ipcontaipMedidaRepository->find($id);

        if (empty($ipcontaipMedida)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipMedidas.singular')]));

            return redirect(route('ipcontaipMedidas.index'));
        }

        return view('ipcontaip_medidas.edit')->with('ipcontaipMedida', $ipcontaipMedida);
    }

    /**
     * Update the specified ipcontaip_medida in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_medidaRequest $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_medidaRequest $request)
    {
        $ipcontaipMedida = $this->ipcontaipMedidaRepository->find($id);

        if (empty($ipcontaipMedida)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipMedidas.singular')]));

            return redirect(route('ipcontaipMedidas.index'));
        }

        $ipcontaipMedida = $this->ipcontaipMedidaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaipMedidas.singular')]));

        return redirect(route('ipcontaipMedidas.index'));
    }

    /**
     * Remove the specified ipcontaip_medida from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaipMedida = $this->ipcontaipMedidaRepository->find($id);

        if (empty($ipcontaipMedida)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipMedidas.singular')]));

            return redirect(route('ipcontaipMedidas.index'));
        }

        $this->ipcontaipMedidaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaipMedidas.singular')]));

        return redirect(route('ipcontaipMedidas.index'));
    }
}
