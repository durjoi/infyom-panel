<?php

namespace App\Http\Controllers;

use App\DataTables\sequencialDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesequencialRequest;
use App\Http\Requests\UpdatesequencialRequest;
use App\Repositories\sequencialRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class sequencialController extends AppBaseController
{
    /** @var  sequencialRepository */
    private $sequencialRepository;

    public function __construct(sequencialRepository $sequencialRepo)
    {
        $this->sequencialRepository = $sequencialRepo;
    }

    /**
     * Display a listing of the sequencial.
     *
     * @param sequencialDataTable $sequencialDataTable
     * @return Response
     */
    public function index(sequencialDataTable $sequencialDataTable)
    {
        return $sequencialDataTable->render('sequencials.index');
    }

    /**
     * Show the form for creating a new sequencial.
     *
     * @return Response
     */
    public function create()
    {
        return view('sequencials.create');
    }

    /**
     * Store a newly created sequencial in storage.
     *
     * @param CreatesequencialRequest $request
     *
     * @return Response
     */
    public function store(CreatesequencialRequest $request)
    {
        $input = $request->all();

        $sequencial = $this->sequencialRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/sequencials.singular')]));

        return redirect(route('sequencials.index'));
    }

    /**
     * Display the specified sequencial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sequencial = $this->sequencialRepository->find($id);

        if (empty($sequencial)) {
            Flash::error(__('models/sequencials.singular').' '.__('messages.not_found'));

            return redirect(route('sequencials.index'));
        }

        return view('sequencials.show')->with('sequencial', $sequencial);
    }

    /**
     * Show the form for editing the specified sequencial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sequencial = $this->sequencialRepository->find($id);

        if (empty($sequencial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sequencials.singular')]));

            return redirect(route('sequencials.index'));
        }

        return view('sequencials.edit')->with('sequencial', $sequencial);
    }

    /**
     * Update the specified sequencial in storage.
     *
     * @param  int              $id
     * @param UpdatesequencialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesequencialRequest $request)
    {
        $sequencial = $this->sequencialRepository->find($id);

        if (empty($sequencial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sequencials.singular')]));

            return redirect(route('sequencials.index'));
        }

        $sequencial = $this->sequencialRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/sequencials.singular')]));

        return redirect(route('sequencials.index'));
    }

    /**
     * Remove the specified sequencial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sequencial = $this->sequencialRepository->find($id);

        if (empty($sequencial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sequencials.singular')]));

            return redirect(route('sequencials.index'));
        }

        $this->sequencialRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/sequencials.singular')]));

        return redirect(route('sequencials.index'));
    }
}
