<?php

namespace App\Http\Controllers;

use App\DataTables\releDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatereleRequest;
use App\Http\Requests\UpdatereleRequest;
use App\Repositories\releRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class releController extends AppBaseController
{
    /** @var  releRepository */
    private $releRepository;

    public function __construct(releRepository $releRepo)
    {
        $this->releRepository = $releRepo;
    }

    /**
     * Display a listing of the rele.
     *
     * @param releDataTable $releDataTable
     * @return Response
     */
    public function index(releDataTable $releDataTable)
    {
        return $releDataTable->render('reles.index');
    }

    /**
     * Show the form for creating a new rele.
     *
     * @return Response
     */
    public function create()
    {
        return view('reles.create');
    }

    /**
     * Store a newly created rele in storage.
     *
     * @param CreatereleRequest $request
     *
     * @return Response
     */
    public function store(CreatereleRequest $request)
    {
        $input = $request->all();

        $rele = $this->releRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/reles.singular')]));

        return redirect(route('reles.index'));
    }

    /**
     * Display the specified rele.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rele = $this->releRepository->find($id);

        if (empty($rele)) {
            Flash::error(__('models/reles.singular').' '.__('messages.not_found'));

            return redirect(route('reles.index'));
        }

        return view('reles.show')->with('rele', $rele);
    }

    /**
     * Show the form for editing the specified rele.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rele = $this->releRepository->find($id);

        if (empty($rele)) {
            Flash::error(__('messages.not_found', ['model' => __('models/reles.singular')]));

            return redirect(route('reles.index'));
        }

        return view('reles.edit')->with('rele', $rele);
    }

    /**
     * Update the specified rele in storage.
     *
     * @param  int              $id
     * @param UpdatereleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereleRequest $request)
    {
        $rele = $this->releRepository->find($id);

        if (empty($rele)) {
            Flash::error(__('messages.not_found', ['model' => __('models/reles.singular')]));

            return redirect(route('reles.index'));
        }

        $rele = $this->releRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/reles.singular')]));

        return redirect(route('reles.index'));
    }

    /**
     * Remove the specified rele from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rele = $this->releRepository->find($id);

        if (empty($rele)) {
            Flash::error(__('messages.not_found', ['model' => __('models/reles.singular')]));

            return redirect(route('reles.index'));
        }

        $this->releRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/reles.singular')]));

        return redirect(route('reles.index'));
    }
}
