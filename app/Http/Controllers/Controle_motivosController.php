<?php

namespace App\Http\Controllers;

use App\DataTables\Controle_motivosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateControle_motivosRequest;
use App\Http\Requests\UpdateControle_motivosRequest;
use App\Repositories\Controle_motivosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Controle_motivosController extends AppBaseController
{
    /** @var  Controle_motivosRepository */
    private $controleMotivosRepository;

    public function __construct(Controle_motivosRepository $controleMotivosRepo)
    {
        $this->controleMotivosRepository = $controleMotivosRepo;
    }

    /**
     * Display a listing of the Controle_motivos.
     *
     * @param Controle_motivosDataTable $controleMotivosDataTable
     * @return Response
     */
    public function index(Controle_motivosDataTable $controleMotivosDataTable)
    {
        return $controleMotivosDataTable->render('controle_motivos.index');
    }

    /**
     * Show the form for creating a new Controle_motivos.
     *
     * @return Response
     */
    public function create()
    {
        return view('controle_motivos.create');
    }

    /**
     * Store a newly created Controle_motivos in storage.
     *
     * @param CreateControle_motivosRequest $request
     *
     * @return Response
     */
    public function store(CreateControle_motivosRequest $request)
    {
        $input = $request->all();

        $controleMotivos = $this->controleMotivosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/controleMotivos.singular')]));

        return redirect(route('controleMotivos.index'));
    }

    /**
     * Display the specified Controle_motivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $controleMotivos = $this->controleMotivosRepository->find($id);

        if (empty($controleMotivos)) {
            Flash::error(__('models/controleMotivos.singular').' '.__('messages.not_found'));

            return redirect(route('controleMotivos.index'));
        }

        return view('controle_motivos.show')->with('controleMotivos', $controleMotivos);
    }

    /**
     * Show the form for editing the specified Controle_motivos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $controleMotivos = $this->controleMotivosRepository->find($id);

        if (empty($controleMotivos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/controleMotivos.singular')]));

            return redirect(route('controleMotivos.index'));
        }

        return view('controle_motivos.edit')->with('controleMotivos', $controleMotivos);
    }

    /**
     * Update the specified Controle_motivos in storage.
     *
     * @param  int              $id
     * @param UpdateControle_motivosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateControle_motivosRequest $request)
    {
        $controleMotivos = $this->controleMotivosRepository->find($id);

        if (empty($controleMotivos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/controleMotivos.singular')]));

            return redirect(route('controleMotivos.index'));
        }

        $controleMotivos = $this->controleMotivosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/controleMotivos.singular')]));

        return redirect(route('controleMotivos.index'));
    }

    /**
     * Remove the specified Controle_motivos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $controleMotivos = $this->controleMotivosRepository->find($id);

        if (empty($controleMotivos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/controleMotivos.singular')]));

            return redirect(route('controleMotivos.index'));
        }

        $this->controleMotivosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/controleMotivos.singular')]));

        return redirect(route('controleMotivos.index'));
    }
}
