<?php

namespace App\Http\Controllers;

use App\DataTables\reatorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatereatorRequest;
use App\Http\Requests\UpdatereatorRequest;
use App\Repositories\reatorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class reatorController extends AppBaseController
{
    /** @var  reatorRepository */
    private $reatorRepository;

    public function __construct(reatorRepository $reatorRepo)
    {
        $this->reatorRepository = $reatorRepo;
    }

    /**
     * Display a listing of the reator.
     *
     * @param reatorDataTable $reatorDataTable
     * @return Response
     */
    public function index(reatorDataTable $reatorDataTable)
    {
        return $reatorDataTable->render('reators.index');
    }

    /**
     * Show the form for creating a new reator.
     *
     * @return Response
     */
    public function create()
    {
        return view('reators.create');
    }

    /**
     * Store a newly created reator in storage.
     *
     * @param CreatereatorRequest $request
     *
     * @return Response
     */
    public function store(CreatereatorRequest $request)
    {
        $input = $request->all();

        $reator = $this->reatorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/reators.singular')]));

        return redirect(route('reators.index'));
    }

    /**
     * Display the specified reator.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reator = $this->reatorRepository->find($id);

        if (empty($reator)) {
            Flash::error(__('models/reators.singular').' '.__('messages.not_found'));

            return redirect(route('reators.index'));
        }

        return view('reators.show')->with('reator', $reator);
    }

    /**
     * Show the form for editing the specified reator.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reator = $this->reatorRepository->find($id);

        if (empty($reator)) {
            Flash::error(__('messages.not_found', ['model' => __('models/reators.singular')]));

            return redirect(route('reators.index'));
        }

        return view('reators.edit')->with('reator', $reator);
    }

    /**
     * Update the specified reator in storage.
     *
     * @param  int              $id
     * @param UpdatereatorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereatorRequest $request)
    {
        $reator = $this->reatorRepository->find($id);

        if (empty($reator)) {
            Flash::error(__('messages.not_found', ['model' => __('models/reators.singular')]));

            return redirect(route('reators.index'));
        }

        $reator = $this->reatorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/reators.singular')]));

        return redirect(route('reators.index'));
    }

    /**
     * Remove the specified reator from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reator = $this->reatorRepository->find($id);

        if (empty($reator)) {
            Flash::error(__('messages.not_found', ['model' => __('models/reators.singular')]));

            return redirect(route('reators.index'));
        }

        $this->reatorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/reators.singular')]));

        return redirect(route('reators.index'));
    }
}
