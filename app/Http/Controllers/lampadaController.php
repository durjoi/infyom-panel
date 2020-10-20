<?php

namespace App\Http\Controllers;

use App\DataTables\lampadaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatelampadaRequest;
use App\Http\Requests\UpdatelampadaRequest;
use App\Repositories\lampadaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class lampadaController extends AppBaseController
{
    /** @var  lampadaRepository */
    private $lampadaRepository;

    public function __construct(lampadaRepository $lampadaRepo)
    {
        $this->lampadaRepository = $lampadaRepo;
    }

    /**
     * Display a listing of the lampada.
     *
     * @param lampadaDataTable $lampadaDataTable
     * @return Response
     */
    public function index(lampadaDataTable $lampadaDataTable)
    {
        return $lampadaDataTable->render('lampadas.index');
    }

    /**
     * Show the form for creating a new lampada.
     *
     * @return Response
     */
    public function create()
    {
        return view('lampadas.create');
    }

    /**
     * Store a newly created lampada in storage.
     *
     * @param CreatelampadaRequest $request
     *
     * @return Response
     */
    public function store(CreatelampadaRequest $request)
    {
        $input = $request->all();

        $lampada = $this->lampadaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/lampadas.singular')]));

        return redirect(route('lampadas.index'));
    }

    /**
     * Display the specified lampada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lampada = $this->lampadaRepository->find($id);

        if (empty($lampada)) {
            Flash::error(__('models/lampadas.singular').' '.__('messages.not_found'));

            return redirect(route('lampadas.index'));
        }

        return view('lampadas.show')->with('lampada', $lampada);
    }

    /**
     * Show the form for editing the specified lampada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lampada = $this->lampadaRepository->find($id);

        if (empty($lampada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/lampadas.singular')]));

            return redirect(route('lampadas.index'));
        }

        return view('lampadas.edit')->with('lampada', $lampada);
    }

    /**
     * Update the specified lampada in storage.
     *
     * @param  int              $id
     * @param UpdatelampadaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelampadaRequest $request)
    {
        $lampada = $this->lampadaRepository->find($id);

        if (empty($lampada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/lampadas.singular')]));

            return redirect(route('lampadas.index'));
        }

        $lampada = $this->lampadaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/lampadas.singular')]));

        return redirect(route('lampadas.index'));
    }

    /**
     * Remove the specified lampada from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lampada = $this->lampadaRepository->find($id);

        if (empty($lampada)) {
            Flash::error(__('messages.not_found', ['model' => __('models/lampadas.singular')]));

            return redirect(route('lampadas.index'));
        }

        $this->lampadaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/lampadas.singular')]));

        return redirect(route('lampadas.index'));
    }
}
