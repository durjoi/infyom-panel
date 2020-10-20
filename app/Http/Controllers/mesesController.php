<?php

namespace App\Http\Controllers;

use App\DataTables\mesesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatemesesRequest;
use App\Http\Requests\UpdatemesesRequest;
use App\Repositories\mesesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class mesesController extends AppBaseController
{
    /** @var  mesesRepository */
    private $mesesRepository;

    public function __construct(mesesRepository $mesesRepo)
    {
        $this->mesesRepository = $mesesRepo;
    }

    /**
     * Display a listing of the meses.
     *
     * @param mesesDataTable $mesesDataTable
     * @return Response
     */
    public function index(mesesDataTable $mesesDataTable)
    {
        return $mesesDataTable->render('meses.index');
    }

    /**
     * Show the form for creating a new meses.
     *
     * @return Response
     */
    public function create()
    {
        return view('meses.create');
    }

    /**
     * Store a newly created meses in storage.
     *
     * @param CreatemesesRequest $request
     *
     * @return Response
     */
    public function store(CreatemesesRequest $request)
    {
        $input = $request->all();

        $meses = $this->mesesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/meses.singular')]));

        return redirect(route('meses.index'));
    }

    /**
     * Display the specified meses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $meses = $this->mesesRepository->find($id);

        if (empty($meses)) {
            Flash::error(__('models/meses.singular').' '.__('messages.not_found'));

            return redirect(route('meses.index'));
        }

        return view('meses.show')->with('meses', $meses);
    }

    /**
     * Show the form for editing the specified meses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $meses = $this->mesesRepository->find($id);

        if (empty($meses)) {
            Flash::error(__('messages.not_found', ['model' => __('models/meses.singular')]));

            return redirect(route('meses.index'));
        }

        return view('meses.edit')->with('meses', $meses);
    }

    /**
     * Update the specified meses in storage.
     *
     * @param  int              $id
     * @param UpdatemesesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemesesRequest $request)
    {
        $meses = $this->mesesRepository->find($id);

        if (empty($meses)) {
            Flash::error(__('messages.not_found', ['model' => __('models/meses.singular')]));

            return redirect(route('meses.index'));
        }

        $meses = $this->mesesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/meses.singular')]));

        return redirect(route('meses.index'));
    }

    /**
     * Remove the specified meses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $meses = $this->mesesRepository->find($id);

        if (empty($meses)) {
            Flash::error(__('messages.not_found', ['model' => __('models/meses.singular')]));

            return redirect(route('meses.index'));
        }

        $this->mesesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/meses.singular')]));

        return redirect(route('meses.index'));
    }
}
