<?php

namespace App\Http\Controllers;

use App\DataTables\fatura_eventoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createfatura_eventoRequest;
use App\Http\Requests\Updatefatura_eventoRequest;
use App\Repositories\fatura_eventoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class fatura_eventoController extends AppBaseController
{
    /** @var  fatura_eventoRepository */
    private $faturaEventoRepository;

    public function __construct(fatura_eventoRepository $faturaEventoRepo)
    {
        $this->faturaEventoRepository = $faturaEventoRepo;
    }

    /**
     * Display a listing of the fatura_evento.
     *
     * @param fatura_eventoDataTable $faturaEventoDataTable
     * @return Response
     */
    public function index(fatura_eventoDataTable $faturaEventoDataTable)
    {
        return $faturaEventoDataTable->render('fatura_eventos.index');
    }

    /**
     * Show the form for creating a new fatura_evento.
     *
     * @return Response
     */
    public function create()
    {
        return view('fatura_eventos.create');
    }

    /**
     * Store a newly created fatura_evento in storage.
     *
     * @param Createfatura_eventoRequest $request
     *
     * @return Response
     */
    public function store(Createfatura_eventoRequest $request)
    {
        $input = $request->all();

        $faturaEvento = $this->faturaEventoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faturaEventos.singular')]));

        return redirect(route('faturaEventos.index'));
    }

    /**
     * Display the specified fatura_evento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faturaEvento = $this->faturaEventoRepository->find($id);

        if (empty($faturaEvento)) {
            Flash::error(__('models/faturaEventos.singular').' '.__('messages.not_found'));

            return redirect(route('faturaEventos.index'));
        }

        return view('fatura_eventos.show')->with('faturaEvento', $faturaEvento);
    }

    /**
     * Show the form for editing the specified fatura_evento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faturaEvento = $this->faturaEventoRepository->find($id);

        if (empty($faturaEvento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventos.singular')]));

            return redirect(route('faturaEventos.index'));
        }

        return view('fatura_eventos.edit')->with('faturaEvento', $faturaEvento);
    }

    /**
     * Update the specified fatura_evento in storage.
     *
     * @param  int              $id
     * @param Updatefatura_eventoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatefatura_eventoRequest $request)
    {
        $faturaEvento = $this->faturaEventoRepository->find($id);

        if (empty($faturaEvento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventos.singular')]));

            return redirect(route('faturaEventos.index'));
        }

        $faturaEvento = $this->faturaEventoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faturaEventos.singular')]));

        return redirect(route('faturaEventos.index'));
    }

    /**
     * Remove the specified fatura_evento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faturaEvento = $this->faturaEventoRepository->find($id);

        if (empty($faturaEvento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventos.singular')]));

            return redirect(route('faturaEventos.index'));
        }

        $this->faturaEventoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faturaEventos.singular')]));

        return redirect(route('faturaEventos.index'));
    }
}
