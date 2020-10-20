<?php

namespace App\Http\Controllers;

use App\DataTables\AplicacaosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAplicacaosRequest;
use App\Http\Requests\UpdateAplicacaosRequest;
use App\Models\Aplicacaos;
use App\Repositories\AplicacaosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AplicacaosController extends AppBaseController
{
    /** @var  AplicacaosRepository */
    private $aplicacaosRepository;

    public function __construct(AplicacaosRepository $aplicacaosRepo)
    {
        $this->aplicacaosRepository = $aplicacaosRepo;
    }

    /**
     * Display a listing of the Aplicacaos.
     *
     * @param AplicacaosDataTable $aplicacaosDataTable
     * @return Response
     */
    public function index(AplicacaosDataTable $aplicacaosDataTable)
    {
        return $aplicacaosDataTable->render('aplicacaos.index');
    }

    /**
     * Show the form for creating a new Aplicacaos.
     *
     * @return Response
     */
    public function create()
    {
        return view('aplicacaos.create');
    }

    /**
     * Store a newly created Aplicacaos in storage.
     *
     * @param CreateAplicacaosRequest $request
     *
     * @return Response
     */
    public function store(CreateAplicacaosRequest $request)
    {
        $input = $request->all();

        $aplicacaos = $this->aplicacaosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/aplicacaos.singular')]));

        return redirect(route('aplicacaos.index'));
    }

    /**
     * Display the specified Aplicacaos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aplicacaos = $this->aplicacaosRepository->find($id);

        if (empty($aplicacaos)) {
            Flash::error(__('models/aplicacaos.singular').' '.__('messages.not_found'));

            return redirect(route('aplicacaos.index'));
        }

        return view('aplicacaos.show')->with('aplicacaos', $aplicacaos);
    }

    /**
     * Show the form for editing the specified Aplicacaos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aplicacaos = $this->aplicacaosRepository->find($id);

        if (empty($aplicacaos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aplicacaos.singular')]));

            return redirect(route('aplicacaos.index'));
        }

        return view('aplicacaos.edit')->with('aplicacaos', $aplicacaos);
    }

    /**
     * Update the specified Aplicacaos in storage.
     *
     * @param  int              $id
     * @param UpdateAplicacaosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAplicacaosRequest $request)
    {
        $aplicacaos = $this->aplicacaosRepository->find($id);

        if (empty($aplicacaos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aplicacaos.singular')]));

            return redirect(route('aplicacaos.index'));
        }

        $aplicacaos = $this->aplicacaosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/aplicacaos.singular')]));

        return redirect(route('aplicacaos.index'));
    }

    /**
     * Remove the specified Aplicacaos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aplicacaos = $this->aplicacaosRepository->find($id);

        if (empty($aplicacaos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/aplicacaos.singular')]));

            return redirect(route('aplicacaos.index'));
        }

        $this->aplicacaosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/aplicacaos.singular')]));

        return redirect(route('aplicacaos.index'));
    }
}
