<?php

namespace App\Http\Controllers;

use App\DataTables\BairrosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBairrosRequest;
use App\Http\Requests\UpdateBairrosRequest;
use App\Repositories\BairrosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BairrosController extends AppBaseController
{
    /** @var  BairrosRepository */
    private $bairrosRepository;

    public function __construct(BairrosRepository $bairrosRepo)
    {
        $this->bairrosRepository = $bairrosRepo;
    }

    /**
     * Display a listing of the Bairros.
     *
     * @param BairrosDataTable $bairrosDataTable
     * @return Response
     */
    public function index(BairrosDataTable $bairrosDataTable)
    {
        return $bairrosDataTable->render('bairros.index');
    }

    /**
     * Show the form for creating a new Bairros.
     *
     * @return Response
     */
    public function create()
    {
        return view('bairros.create');
    }

    /**
     * Store a newly created Bairros in storage.
     *
     * @param CreateBairrosRequest $request
     *
     * @return Response
     */
    public function store(CreateBairrosRequest $request)
    {
        $input = $request->all();

        $bairros = $this->bairrosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/bairros.singular')]));

        return redirect(route('bairros.index'));
    }

    /**
     * Display the specified Bairros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bairros = $this->bairrosRepository->find($id);

        if (empty($bairros)) {
            Flash::error(__('models/bairros.singular').' '.__('messages.not_found'));

            return redirect(route('bairros.index'));
        }

        return view('bairros.show')->with('bairros', $bairros);
    }

    /**
     * Show the form for editing the specified Bairros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bairros = $this->bairrosRepository->find($id);

        if (empty($bairros)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bairros.singular')]));

            return redirect(route('bairros.index'));
        }

        return view('bairros.edit')->with('bairros', $bairros);
    }

    /**
     * Update the specified Bairros in storage.
     *
     * @param  int              $id
     * @param UpdateBairrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBairrosRequest $request)
    {
        $bairros = $this->bairrosRepository->find($id);

        if (empty($bairros)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bairros.singular')]));

            return redirect(route('bairros.index'));
        }

        $bairros = $this->bairrosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/bairros.singular')]));

        return redirect(route('bairros.index'));
    }

    /**
     * Remove the specified Bairros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bairros = $this->bairrosRepository->find($id);

        if (empty($bairros)) {
            Flash::error(__('messages.not_found', ['model' => __('models/bairros.singular')]));

            return redirect(route('bairros.index'));
        }

        $this->bairrosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/bairros.singular')]));

        return redirect(route('bairros.index'));
    }
}
