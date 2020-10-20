<?php

namespace App\Http\Controllers;

use App\DataTables\veiculos_servicosDataTable;
use App\Http\Requests;
use App\Http\Requests\Createveiculos_servicosRequest;
use App\Http\Requests\Updateveiculos_servicosRequest;
use App\Repositories\veiculos_servicosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class veiculos_servicosController extends AppBaseController
{
    /** @var  veiculos_servicosRepository */
    private $veiculosServicosRepository;

    public function __construct(veiculos_servicosRepository $veiculosServicosRepo)
    {
        $this->veiculosServicosRepository = $veiculosServicosRepo;
    }

    /**
     * Display a listing of the veiculos_servicos.
     *
     * @param veiculos_servicosDataTable $veiculosServicosDataTable
     * @return Response
     */
    public function index(veiculos_servicosDataTable $veiculosServicosDataTable)
    {
        return $veiculosServicosDataTable->render('veiculos_servicos.index');
    }

    /**
     * Show the form for creating a new veiculos_servicos.
     *
     * @return Response
     */
    public function create()
    {
        return view('veiculos_servicos.create');
    }

    /**
     * Store a newly created veiculos_servicos in storage.
     *
     * @param Createveiculos_servicosRequest $request
     *
     * @return Response
     */
    public function store(Createveiculos_servicosRequest $request)
    {
        $input = $request->all();

        $veiculosServicos = $this->veiculosServicosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/veiculosServicos.singular')]));

        return redirect(route('veiculosServicos.index'));
    }

    /**
     * Display the specified veiculos_servicos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $veiculosServicos = $this->veiculosServicosRepository->find($id);

        if (empty($veiculosServicos)) {
            Flash::error(__('models/veiculosServicos.singular').' '.__('messages.not_found'));

            return redirect(route('veiculosServicos.index'));
        }

        return view('veiculos_servicos.show')->with('veiculosServicos', $veiculosServicos);
    }

    /**
     * Show the form for editing the specified veiculos_servicos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $veiculosServicos = $this->veiculosServicosRepository->find($id);

        if (empty($veiculosServicos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculosServicos.singular')]));

            return redirect(route('veiculosServicos.index'));
        }

        return view('veiculos_servicos.edit')->with('veiculosServicos', $veiculosServicos);
    }

    /**
     * Update the specified veiculos_servicos in storage.
     *
     * @param  int              $id
     * @param Updateveiculos_servicosRequest $request
     *
     * @return Response
     */
    public function update($id, Updateveiculos_servicosRequest $request)
    {
        $veiculosServicos = $this->veiculosServicosRepository->find($id);

        if (empty($veiculosServicos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculosServicos.singular')]));

            return redirect(route('veiculosServicos.index'));
        }

        $veiculosServicos = $this->veiculosServicosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/veiculosServicos.singular')]));

        return redirect(route('veiculosServicos.index'));
    }

    /**
     * Remove the specified veiculos_servicos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $veiculosServicos = $this->veiculosServicosRepository->find($id);

        if (empty($veiculosServicos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/veiculosServicos.singular')]));

            return redirect(route('veiculosServicos.index'));
        }

        $this->veiculosServicosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/veiculosServicos.singular')]));

        return redirect(route('veiculosServicos.index'));
    }
}
