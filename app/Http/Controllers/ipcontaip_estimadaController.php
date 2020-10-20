<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_estimadaDataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_estimadaRequest;
use App\Http\Requests\Updateipcontaip_estimadaRequest;
use App\Repositories\ipcontaip_estimadaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_estimadaController extends AppBaseController
{
    /** @var  ipcontaip_estimadaRepository */
    private $ipcontaipEstimadaRepository;

    public function __construct(ipcontaip_estimadaRepository $ipcontaipEstimadaRepo)
    {
        $this->ipcontaipEstimadaRepository = $ipcontaipEstimadaRepo;
    }

    /**
     * Display a listing of the ipcontaip_estimada.
     *
     * @param ipcontaip_estimadaDataTable $ipcontaipEstimadaDataTable
     * @return Response
     */
    public function index(ipcontaip_estimadaDataTable $ipcontaipEstimadaDataTable)
    {
        return $ipcontaipEstimadaDataTable->render('ipcontaip_estimadas.index');
    }

    /**
     * Show the form for creating a new ipcontaip_estimada.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_estimadas.create');
    }

    /**
     * Store a newly created ipcontaip_estimada in storage.
     *
     * @param Createipcontaip_estimadaRequest $request
     *
     * @return Response
     */
    public function store(Createipcontaip_estimadaRequest $request)
    {
        $input = $request->all();

        $ipcontaipEstimada = $this->ipcontaipEstimadaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaipEstimadas.singular')]));

        return redirect(route('ipcontaipEstimadas.index'));
    }

    /**
     * Display the specified ipcontaip_estimada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaipEstimada = $this->ipcontaipEstimadaRepository->find($id);

        if (empty($ipcontaipEstimada)) {
            Flash::error(__('models/ipcontaipEstimadas.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaipEstimadas.index'));
        }

        return view('ipcontaip_estimadas.show')->with('ipcontaipEstimada', $ipcontaipEstimada);
    }

    /**
     * Show the form for editing the specified ipcontaip_estimada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaipEstimada = $this->ipcontaipEstimadaRepository->find($id);

        if (empty($ipcontaipEstimada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipEstimadas.singular')]));

            return redirect(route('ipcontaipEstimadas.index'));
        }

        return view('ipcontaip_estimadas.edit')->with('ipcontaipEstimada', $ipcontaipEstimada);
    }

    /**
     * Update the specified ipcontaip_estimada in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_estimadaRequest $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_estimadaRequest $request)
    {
        $ipcontaipEstimada = $this->ipcontaipEstimadaRepository->find($id);

        if (empty($ipcontaipEstimada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipEstimadas.singular')]));

            return redirect(route('ipcontaipEstimadas.index'));
        }

        $ipcontaipEstimada = $this->ipcontaipEstimadaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaipEstimadas.singular')]));

        return redirect(route('ipcontaipEstimadas.index'));
    }

    /**
     * Remove the specified ipcontaip_estimada from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaipEstimada = $this->ipcontaipEstimadaRepository->find($id);

        if (empty($ipcontaipEstimada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaipEstimadas.singular')]));

            return redirect(route('ipcontaipEstimadas.index'));
        }

        $this->ipcontaipEstimadaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaipEstimadas.singular')]));

        return redirect(route('ipcontaipEstimadas.index'));
    }
}
