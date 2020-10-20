<?php

namespace App\Http\Controllers;

use App\DataTables\funcipDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatefuncipRequest;
use App\Http\Requests\UpdatefuncipRequest;
use App\Repositories\funcipRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class funcipController extends AppBaseController
{
    /** @var  funcipRepository */
    private $funcipRepository;

    public function __construct(funcipRepository $funcipRepo)
    {
        $this->funcipRepository = $funcipRepo;
    }

    /**
     * Display a listing of the funcip.
     *
     * @param funcipDataTable $funcipDataTable
     * @return Response
     */
    public function index(funcipDataTable $funcipDataTable)
    {
        return $funcipDataTable->render('funcips.index');
    }

    /**
     * Show the form for creating a new funcip.
     *
     * @return Response
     */
    public function create()
    {
        return view('funcips.create');
    }

    /**
     * Store a newly created funcip in storage.
     *
     * @param CreatefuncipRequest $request
     *
     * @return Response
     */
    public function store(CreatefuncipRequest $request)
    {
        $input = $request->all();

        $funcip = $this->funcipRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/funcips.singular')]));

        return redirect(route('funcips.index'));
    }

    /**
     * Display the specified funcip.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $funcip = $this->funcipRepository->find($id);

        if (empty($funcip)) {
            Flash::error(__('models/funcips.singular').' '.__('messages.not_found'));

            return redirect(route('funcips.index'));
        }

        return view('funcips.show')->with('funcip', $funcip);
    }

    /**
     * Show the form for editing the specified funcip.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $funcip = $this->funcipRepository->find($id);

        if (empty($funcip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/funcips.singular')]));

            return redirect(route('funcips.index'));
        }

        return view('funcips.edit')->with('funcip', $funcip);
    }

    /**
     * Update the specified funcip in storage.
     *
     * @param  int              $id
     * @param UpdatefuncipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefuncipRequest $request)
    {
        $funcip = $this->funcipRepository->find($id);

        if (empty($funcip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/funcips.singular')]));

            return redirect(route('funcips.index'));
        }

        $funcip = $this->funcipRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/funcips.singular')]));

        return redirect(route('funcips.index'));
    }

    /**
     * Remove the specified funcip from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $funcip = $this->funcipRepository->find($id);

        if (empty($funcip)) {
            Flash::error(__('messages.not_found', ['model' => __('models/funcips.singular')]));

            return redirect(route('funcips.index'));
        }

        $this->funcipRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/funcips.singular')]));

        return redirect(route('funcips.index'));
    }
}
