<?php

namespace App\Http\Controllers;

use App\DataTables\EventosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEventosRequest;
use App\Http\Requests\UpdateEventosRequest;
use App\Repositories\EventosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EventosController extends AppBaseController
{
    /** @var  EventosRepository */
    private $eventosRepository;

    public function __construct(EventosRepository $eventosRepo)
    {
        $this->eventosRepository = $eventosRepo;
    }

    /**
     * Display a listing of the Eventos.
     *
     * @param EventosDataTable $eventosDataTable
     * @return Response
     */
    public function index(EventosDataTable $eventosDataTable)
    {
        return $eventosDataTable->render('eventos.index');
    }

    /**
     * Show the form for creating a new Eventos.
     *
     * @return Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created Eventos in storage.
     *
     * @param CreateEventosRequest $request
     *
     * @return Response
     */
    public function store(CreateEventosRequest $request)
    {
        $input = $request->all();

        $eventos = $this->eventosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/eventos.singular')]));

        return redirect(route('eventos.index'));
    }

    /**
     * Display the specified Eventos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error(__('models/eventos.singular').' '.__('messages.not_found'));

            return redirect(route('eventos.index'));
        }

        return view('eventos.show')->with('eventos', $eventos);
    }

    /**
     * Show the form for editing the specified Eventos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventos.singular')]));

            return redirect(route('eventos.index'));
        }

        return view('eventos.edit')->with('eventos', $eventos);
    }

    /**
     * Update the specified Eventos in storage.
     *
     * @param  int              $id
     * @param UpdateEventosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventosRequest $request)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventos.singular')]));

            return redirect(route('eventos.index'));
        }

        $eventos = $this->eventosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/eventos.singular')]));

        return redirect(route('eventos.index'));
    }

    /**
     * Remove the specified Eventos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventos = $this->eventosRepository->find($id);

        if (empty($eventos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventos.singular')]));

            return redirect(route('eventos.index'));
        }

        $this->eventosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/eventos.singular')]));

        return redirect(route('eventos.index'));
    }
}
