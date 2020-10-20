<?php

namespace App\Http\Controllers;

use App\DataTables\respostasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreaterespostasRequest;
use App\Http\Requests\UpdaterespostasRequest;
use App\Repositories\respostasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class respostasController extends AppBaseController
{
    /** @var  respostasRepository */
    private $respostasRepository;

    public function __construct(respostasRepository $respostasRepo)
    {
        $this->respostasRepository = $respostasRepo;
    }

    /**
     * Display a listing of the respostas.
     *
     * @param respostasDataTable $respostasDataTable
     * @return Response
     */
    public function index(respostasDataTable $respostasDataTable)
    {
        return $respostasDataTable->render('respostas.index');
    }

    /**
     * Show the form for creating a new respostas.
     *
     * @return Response
     */
    public function create()
    {
        return view('respostas.create');
    }

    /**
     * Store a newly created respostas in storage.
     *
     * @param CreaterespostasRequest $request
     *
     * @return Response
     */
    public function store(CreaterespostasRequest $request)
    {
        $input = $request->all();

        $respostas = $this->respostasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/respostas.singular')]));

        return redirect(route('respostas.index'));
    }

    /**
     * Display the specified respostas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $respostas = $this->respostasRepository->find($id);

        if (empty($respostas)) {
            Flash::error(__('models/respostas.singular').' '.__('messages.not_found'));

            return redirect(route('respostas.index'));
        }

        return view('respostas.show')->with('respostas', $respostas);
    }

    /**
     * Show the form for editing the specified respostas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $respostas = $this->respostasRepository->find($id);

        if (empty($respostas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostas.singular')]));

            return redirect(route('respostas.index'));
        }

        return view('respostas.edit')->with('respostas', $respostas);
    }

    /**
     * Update the specified respostas in storage.
     *
     * @param  int              $id
     * @param UpdaterespostasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterespostasRequest $request)
    {
        $respostas = $this->respostasRepository->find($id);

        if (empty($respostas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostas.singular')]));

            return redirect(route('respostas.index'));
        }

        $respostas = $this->respostasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/respostas.singular')]));

        return redirect(route('respostas.index'));
    }

    /**
     * Remove the specified respostas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $respostas = $this->respostasRepository->find($id);

        if (empty($respostas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostas.singular')]));

            return redirect(route('respostas.index'));
        }

        $this->respostasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/respostas.singular')]));

        return redirect(route('respostas.index'));
    }
}
