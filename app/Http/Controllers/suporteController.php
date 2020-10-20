<?php

namespace App\Http\Controllers;

use App\DataTables\suporteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesuporteRequest;
use App\Http\Requests\UpdatesuporteRequest;
use App\Repositories\suporteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class suporteController extends AppBaseController
{
    /** @var  suporteRepository */
    private $suporteRepository;

    public function __construct(suporteRepository $suporteRepo)
    {
        $this->suporteRepository = $suporteRepo;
    }

    /**
     * Display a listing of the suporte.
     *
     * @param suporteDataTable $suporteDataTable
     * @return Response
     */
    public function index(suporteDataTable $suporteDataTable)
    {
        return $suporteDataTable->render('suportes.index');
    }

    /**
     * Show the form for creating a new suporte.
     *
     * @return Response
     */
    public function create()
    {
        return view('suportes.create');
    }

    /**
     * Store a newly created suporte in storage.
     *
     * @param CreatesuporteRequest $request
     *
     * @return Response
     */
    public function store(CreatesuporteRequest $request)
    {
        $input = $request->all();

        $suporte = $this->suporteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/suportes.singular')]));

        return redirect(route('suportes.index'));
    }

    /**
     * Display the specified suporte.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $suporte = $this->suporteRepository->find($id);

        if (empty($suporte)) {
            Flash::error(__('models/suportes.singular').' '.__('messages.not_found'));

            return redirect(route('suportes.index'));
        }

        return view('suportes.show')->with('suporte', $suporte);
    }

    /**
     * Show the form for editing the specified suporte.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $suporte = $this->suporteRepository->find($id);

        if (empty($suporte)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suportes.singular')]));

            return redirect(route('suportes.index'));
        }

        return view('suportes.edit')->with('suporte', $suporte);
    }

    /**
     * Update the specified suporte in storage.
     *
     * @param  int              $id
     * @param UpdatesuporteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesuporteRequest $request)
    {
        $suporte = $this->suporteRepository->find($id);

        if (empty($suporte)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suportes.singular')]));

            return redirect(route('suportes.index'));
        }

        $suporte = $this->suporteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/suportes.singular')]));

        return redirect(route('suportes.index'));
    }

    /**
     * Remove the specified suporte from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $suporte = $this->suporteRepository->find($id);

        if (empty($suporte)) {
            Flash::error(__('messages.not_found', ['model' => __('models/suportes.singular')]));

            return redirect(route('suportes.index'));
        }

        $this->suporteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/suportes.singular')]));

        return redirect(route('suportes.index'));
    }
}
