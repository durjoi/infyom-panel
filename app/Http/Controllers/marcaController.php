<?php

namespace App\Http\Controllers;

use App\DataTables\marcaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatemarcaRequest;
use App\Http\Requests\UpdatemarcaRequest;
use App\Repositories\marcaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class marcaController extends AppBaseController
{
    /** @var  marcaRepository */
    private $marcaRepository;

    public function __construct(marcaRepository $marcaRepo)
    {
        $this->marcaRepository = $marcaRepo;
    }

    /**
     * Display a listing of the marca.
     *
     * @param marcaDataTable $marcaDataTable
     * @return Response
     */
    public function index(marcaDataTable $marcaDataTable)
    {
        return $marcaDataTable->render('marcas.index');
    }

    /**
     * Show the form for creating a new marca.
     *
     * @return Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created marca in storage.
     *
     * @param CreatemarcaRequest $request
     *
     * @return Response
     */
    public function store(CreatemarcaRequest $request)
    {
        $input = $request->all();

        $marca = $this->marcaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/marcas.singular')]));

        return redirect(route('marcas.index'));
    }

    /**
     * Display the specified marca.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error(__('models/marcas.singular').' '.__('messages.not_found'));

            return redirect(route('marcas.index'));
        }

        return view('marcas.show')->with('marca', $marca);
    }

    /**
     * Show the form for editing the specified marca.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error(__('messages.not_found', ['model' => __('models/marcas.singular')]));

            return redirect(route('marcas.index'));
        }

        return view('marcas.edit')->with('marca', $marca);
    }

    /**
     * Update the specified marca in storage.
     *
     * @param  int              $id
     * @param UpdatemarcaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemarcaRequest $request)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error(__('messages.not_found', ['model' => __('models/marcas.singular')]));

            return redirect(route('marcas.index'));
        }

        $marca = $this->marcaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/marcas.singular')]));

        return redirect(route('marcas.index'));
    }

    /**
     * Remove the specified marca from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marca = $this->marcaRepository->find($id);

        if (empty($marca)) {
            Flash::error(__('messages.not_found', ['model' => __('models/marcas.singular')]));

            return redirect(route('marcas.index'));
        }

        $this->marcaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/marcas.singular')]));

        return redirect(route('marcas.index'));
    }
}
