<?php

namespace App\Http\Controllers;

use App\DataTables\BasesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBasesRequest;
use App\Http\Requests\UpdateBasesRequest;
use App\Repositories\BasesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BasesController extends AppBaseController
{
    /** @var  BasesRepository */
    private $basesRepository;

    public function __construct(BasesRepository $basesRepo)
    {
        $this->basesRepository = $basesRepo;
    }

    /**
     * Display a listing of the Bases.
     *
     * @param BasesDataTable $basesDataTable
     * @return Response
     */
    public function index(BasesDataTable $basesDataTable)
    {
        return $basesDataTable->render('bases.index');
    }

    /**
     * Show the form for creating a new Bases.
     *
     * @return Response
     */
    public function create()
    {
        return view('bases.create');
    }

    /**
     * Store a newly created Bases in storage.
     *
     * @param CreateBasesRequest $request
     *
     * @return Response
     */
    public function store(CreateBasesRequest $request)
    {
        $input = $request->all();

        $bases = $this->basesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/bases.singular')]));

        return redirect(route('bases.index'));
    }

    /**
     * Display the specified Bases.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bases = $this->basesRepository->find($id);

        if (empty($bases)) {
            Flash::error(__('models/bases.singular').' '.__('messages.not_found'));

            return redirect(route('bases.index'));
        }

        return view('bases.show')->with('bases', $bases);
    }

    /**
     * Show the form for editing the specified Bases.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bases = $this->basesRepository->find($id);

        if (empty($bases)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bases.singular')]));

            return redirect(route('bases.index'));
        }

        return view('bases.edit')->with('bases', $bases);
    }

    /**
     * Update the specified Bases in storage.
     *
     * @param  int              $id
     * @param UpdateBasesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBasesRequest $request)
    {
        $bases = $this->basesRepository->find($id);

        if (empty($bases)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bases.singular')]));

            return redirect(route('bases.index'));
        }

        $bases = $this->basesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/bases.singular')]));

        return redirect(route('bases.index'));
    }

    /**
     * Remove the specified Bases from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bases = $this->basesRepository->find($id);

        if (empty($bases)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bases.singular')]));

            return redirect(route('bases.index'));
        }

        $this->basesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/bases.singular')]));

        return redirect(route('bases.index'));
    }
}
