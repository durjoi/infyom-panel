<?php

namespace App\Http\Controllers;

use App\DataTables\transformadorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatetransformadorRequest;
use App\Http\Requests\UpdatetransformadorRequest;
use App\Repositories\transformadorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class transformadorController extends AppBaseController
{
    /** @var  transformadorRepository */
    private $transformadorRepository;

    public function __construct(transformadorRepository $transformadorRepo)
    {
        $this->transformadorRepository = $transformadorRepo;
    }

    /**
     * Display a listing of the transformador.
     *
     * @param transformadorDataTable $transformadorDataTable
     * @return Response
     */
    public function index(transformadorDataTable $transformadorDataTable)
    {
        return $transformadorDataTable->render('transformadors.index');
    }

    /**
     * Show the form for creating a new transformador.
     *
     * @return Response
     */
    public function create()
    {
        return view('transformadors.create');
    }

    /**
     * Store a newly created transformador in storage.
     *
     * @param CreatetransformadorRequest $request
     *
     * @return Response
     */
    public function store(CreatetransformadorRequest $request)
    {
        $input = $request->all();

        $transformador = $this->transformadorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/transformadors.singular')]));

        return redirect(route('transformadors.index'));
    }

    /**
     * Display the specified transformador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transformador = $this->transformadorRepository->find($id);

        if (empty($transformador)) {
            Flash::error(__('models/transformadors.singular').' '.__('messages.not_found'));

            return redirect(route('transformadors.index'));
        }

        return view('transformadors.show')->with('transformador', $transformador);
    }

    /**
     * Show the form for editing the specified transformador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transformador = $this->transformadorRepository->find($id);

        if (empty($transformador)) {
            Flash::error(__('messages.not_found', ['model' => __('models/transformadors.singular')]));

            return redirect(route('transformadors.index'));
        }

        return view('transformadors.edit')->with('transformador', $transformador);
    }

    /**
     * Update the specified transformador in storage.
     *
     * @param  int              $id
     * @param UpdatetransformadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransformadorRequest $request)
    {
        $transformador = $this->transformadorRepository->find($id);

        if (empty($transformador)) {
            Flash::error(__('messages.not_found', ['model' => __('models/transformadors.singular')]));

            return redirect(route('transformadors.index'));
        }

        $transformador = $this->transformadorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/transformadors.singular')]));

        return redirect(route('transformadors.index'));
    }

    /**
     * Remove the specified transformador from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transformador = $this->transformadorRepository->find($id);

        if (empty($transformador)) {
            Flash::error(__('messages.not_found', ['model' => __('models/transformadors.singular')]));

            return redirect(route('transformadors.index'));
        }

        $this->transformadorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/transformadors.singular')]));

        return redirect(route('transformadors.index'));
    }
}
