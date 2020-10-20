<?php

namespace App\Http\Controllers;

use App\DataTables\FabricanteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFabricanteRequest;
use App\Http\Requests\UpdateFabricanteRequest;
use App\Repositories\FabricanteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FabricanteController extends AppBaseController
{
    /** @var  FabricanteRepository */
    private $fabricanteRepository;

    public function __construct(FabricanteRepository $fabricanteRepo)
    {
        $this->fabricanteRepository = $fabricanteRepo;
    }

    /**
     * Display a listing of the Fabricante.
     *
     * @param FabricanteDataTable $fabricanteDataTable
     * @return Response
     */
    public function index(FabricanteDataTable $fabricanteDataTable)
    {
        return $fabricanteDataTable->render('fabricantes.index');
    }

    /**
     * Show the form for creating a new Fabricante.
     *
     * @return Response
     */
    public function create()
    {
        return view('fabricantes.create');
    }

    /**
     * Store a newly created Fabricante in storage.
     *
     * @param CreateFabricanteRequest $request
     *
     * @return Response
     */
    public function store(CreateFabricanteRequest $request)
    {
        $input = $request->all();

        $fabricante = $this->fabricanteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fabricantes.singular')]));

        return redirect(route('fabricantes.index'));
    }

    /**
     * Display the specified Fabricante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fabricante = $this->fabricanteRepository->find($id);

        if (empty($fabricante)) {
            Flash::error(__('models/fabricantes.singular').' '.__('messages.not_found'));

            return redirect(route('fabricantes.index'));
        }

        return view('fabricantes.show')->with('fabricante', $fabricante);
    }

    /**
     * Show the form for editing the specified Fabricante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fabricante = $this->fabricanteRepository->find($id);

        if (empty($fabricante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fabricantes.singular')]));

            return redirect(route('fabricantes.index'));
        }

        return view('fabricantes.edit')->with('fabricante', $fabricante);
    }

    /**
     * Update the specified Fabricante in storage.
     *
     * @param  int              $id
     * @param UpdateFabricanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFabricanteRequest $request)
    {
        $fabricante = $this->fabricanteRepository->find($id);

        if (empty($fabricante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fabricantes.singular')]));

            return redirect(route('fabricantes.index'));
        }

        $fabricante = $this->fabricanteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fabricantes.singular')]));

        return redirect(route('fabricantes.index'));
    }

    /**
     * Remove the specified Fabricante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fabricante = $this->fabricanteRepository->find($id);

        if (empty($fabricante)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fabricantes.singular')]));

            return redirect(route('fabricantes.index'));
        }

        $this->fabricanteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fabricantes.singular')]));

        return redirect(route('fabricantes.index'));
    }
}
