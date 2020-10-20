<?php

namespace App\Http\Controllers;

use App\DataTables\unidadeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateunidadeRequest;
use App\Http\Requests\UpdateunidadeRequest;
use App\Repositories\unidadeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class unidadeController extends AppBaseController
{
    /** @var  unidadeRepository */
    private $unidadeRepository;

    public function __construct(unidadeRepository $unidadeRepo)
    {
        $this->unidadeRepository = $unidadeRepo;
    }

    /**
     * Display a listing of the unidade.
     *
     * @param unidadeDataTable $unidadeDataTable
     * @return Response
     */
    public function index(unidadeDataTable $unidadeDataTable)
    {
        return $unidadeDataTable->render('unidades.index');
    }

    /**
     * Show the form for creating a new unidade.
     *
     * @return Response
     */
    public function create()
    {
        return view('unidades.create');
    }

    /**
     * Store a newly created unidade in storage.
     *
     * @param CreateunidadeRequest $request
     *
     * @return Response
     */
    public function store(CreateunidadeRequest $request)
    {
        $input = $request->all();

        $unidade = $this->unidadeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/unidades.singular')]));

        return redirect(route('unidades.index'));
    }

    /**
     * Display the specified unidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $unidade = $this->unidadeRepository->find($id);

        if (empty($unidade)) {
            Flash::error(__('models/unidades.singular').' '.__('messages.not_found'));

            return redirect(route('unidades.index'));
        }

        return view('unidades.show')->with('unidade', $unidade);
    }

    /**
     * Show the form for editing the specified unidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unidade = $this->unidadeRepository->find($id);

        if (empty($unidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/unidades.singular')]));

            return redirect(route('unidades.index'));
        }

        return view('unidades.edit')->with('unidade', $unidade);
    }

    /**
     * Update the specified unidade in storage.
     *
     * @param  int              $id
     * @param UpdateunidadeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateunidadeRequest $request)
    {
        $unidade = $this->unidadeRepository->find($id);

        if (empty($unidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/unidades.singular')]));

            return redirect(route('unidades.index'));
        }

        $unidade = $this->unidadeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/unidades.singular')]));

        return redirect(route('unidades.index'));
    }

    /**
     * Remove the specified unidade from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $unidade = $this->unidadeRepository->find($id);

        if (empty($unidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/unidades.singular')]));

            return redirect(route('unidades.index'));
        }

        $this->unidadeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/unidades.singular')]));

        return redirect(route('unidades.index'));
    }
}
