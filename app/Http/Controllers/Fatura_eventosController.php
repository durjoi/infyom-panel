<?php

namespace App\Http\Controllers;

use App\DataTables\Fatura_eventosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFatura_eventosRequest;
use App\Http\Requests\UpdateFatura_eventosRequest;
use App\Repositories\Fatura_eventosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Fatura_eventosController extends AppBaseController
{
    /** @var  Fatura_eventosRepository */
    private $faturaEventosRepository;

    public function __construct(Fatura_eventosRepository $faturaEventosRepo)
    {
        $this->faturaEventosRepository = $faturaEventosRepo;
    }

    /**
     * Display a listing of the Fatura_eventos.
     *
     * @param Fatura_eventosDataTable $faturaEventosDataTable
     * @return Response
     */
    public function index(Fatura_eventosDataTable $faturaEventosDataTable)
    {
        return $faturaEventosDataTable->render('fatura_eventos.index');
    }

    /**
     * Show the form for creating a new Fatura_eventos.
     *
     * @return Response
     */
    public function create()
    {
        return view('fatura_eventos.create');
    }

    /**
     * Store a newly created Fatura_eventos in storage.
     *
     * @param CreateFatura_eventosRequest $request
     *
     * @return Response
     */
    public function store(CreateFatura_eventosRequest $request)
    {
        $input = $request->all();

        $faturaEventos = $this->faturaEventosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faturaEventos.singular')]));

        return redirect(route('faturaEventos.index'));
    }

    /**
     * Display the specified Fatura_eventos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faturaEventos = $this->faturaEventosRepository->find($id);

        if (empty($faturaEventos)) {
            Flash::error(__('models/faturaEventos.singular').' '.__('messages.not_found'));

            return redirect(route('faturaEventos.index'));
        }

        return view('fatura_eventos.show')->with('faturaEventos', $faturaEventos);
    }

    /**
     * Show the form for editing the specified Fatura_eventos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faturaEventos = $this->faturaEventosRepository->find($id);

        if (empty($faturaEventos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventos.singular')]));

            return redirect(route('faturaEventos.index'));
        }

        return view('fatura_eventos.edit')->with('faturaEventos', $faturaEventos);
    }

    /**
     * Update the specified Fatura_eventos in storage.
     *
     * @param  int              $id
     * @param UpdateFatura_eventosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFatura_eventosRequest $request)
    {
        $faturaEventos = $this->faturaEventosRepository->find($id);

        if (empty($faturaEventos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventos.singular')]));

            return redirect(route('faturaEventos.index'));
        }

        $faturaEventos = $this->faturaEventosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faturaEventos.singular')]));

        return redirect(route('faturaEventos.index'));
    }

    /**
     * Remove the specified Fatura_eventos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faturaEventos = $this->faturaEventosRepository->find($id);

        if (empty($faturaEventos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventos.singular')]));

            return redirect(route('faturaEventos.index'));
        }

        $this->faturaEventosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faturaEventos.singular')]));

        return redirect(route('faturaEventos.index'));
    }
}
