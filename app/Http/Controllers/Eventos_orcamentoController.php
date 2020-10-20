<?php

namespace App\Http\Controllers;

use App\DataTables\Eventos_orcamentoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEventos_orcamentoRequest;
use App\Http\Requests\UpdateEventos_orcamentoRequest;
use App\Repositories\Eventos_orcamentoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Eventos_orcamentoController extends AppBaseController
{
    /** @var  Eventos_orcamentoRepository */
    private $eventosOrcamentoRepository;

    public function __construct(Eventos_orcamentoRepository $eventosOrcamentoRepo)
    {
        $this->eventosOrcamentoRepository = $eventosOrcamentoRepo;
    }

    /**
     * Display a listing of the Eventos_orcamento.
     *
     * @param Eventos_orcamentoDataTable $eventosOrcamentoDataTable
     * @return Response
     */
    public function index(Eventos_orcamentoDataTable $eventosOrcamentoDataTable)
    {
        return $eventosOrcamentoDataTable->render('eventos_orcamentos.index');
    }

    /**
     * Show the form for creating a new Eventos_orcamento.
     *
     * @return Response
     */
    public function create()
    {
        return view('eventos_orcamentos.create');
    }

    /**
     * Store a newly created Eventos_orcamento in storage.
     *
     * @param CreateEventos_orcamentoRequest $request
     *
     * @return Response
     */
    public function store(CreateEventos_orcamentoRequest $request)
    {
        $input = $request->all();

        $eventosOrcamento = $this->eventosOrcamentoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/eventosOrcamentos.singular')]));

        return redirect(route('eventosOrcamentos.index'));
    }

    /**
     * Display the specified Eventos_orcamento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventosOrcamento = $this->eventosOrcamentoRepository->find($id);

        if (empty($eventosOrcamento)) {
            Flash::error(__('models/eventosOrcamentos.singular').' '.__('messages.not_found'));

            return redirect(route('eventosOrcamentos.index'));
        }

        return view('eventos_orcamentos.show')->with('eventosOrcamento', $eventosOrcamento);
    }

    /**
     * Show the form for editing the specified Eventos_orcamento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventosOrcamento = $this->eventosOrcamentoRepository->find($id);

        if (empty($eventosOrcamento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventosOrcamentos.singular')]));

            return redirect(route('eventosOrcamentos.index'));
        }

        return view('eventos_orcamentos.edit')->with('eventosOrcamento', $eventosOrcamento);
    }

    /**
     * Update the specified Eventos_orcamento in storage.
     *
     * @param  int              $id
     * @param UpdateEventos_orcamentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventos_orcamentoRequest $request)
    {
        $eventosOrcamento = $this->eventosOrcamentoRepository->find($id);

        if (empty($eventosOrcamento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventosOrcamentos.singular')]));

            return redirect(route('eventosOrcamentos.index'));
        }

        $eventosOrcamento = $this->eventosOrcamentoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/eventosOrcamentos.singular')]));

        return redirect(route('eventosOrcamentos.index'));
    }

    /**
     * Remove the specified Eventos_orcamento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventosOrcamento = $this->eventosOrcamentoRepository->find($id);

        if (empty($eventosOrcamento)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventosOrcamentos.singular')]));

            return redirect(route('eventosOrcamentos.index'));
        }

        $this->eventosOrcamentoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/eventosOrcamentos.singular')]));

        return redirect(route('eventosOrcamentos.index'));
    }
}
