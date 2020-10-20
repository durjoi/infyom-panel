<?php

namespace App\Http\Controllers;

use App\DataTables\Defeitos_encontradosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDefeitos_encontradosRequest;
use App\Http\Requests\UpdateDefeitos_encontradosRequest;
use App\Repositories\Defeitos_encontradosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Defeitos_encontradosController extends AppBaseController
{
    /** @var  Defeitos_encontradosRepository */
    private $defeitosEncontradosRepository;

    public function __construct(Defeitos_encontradosRepository $defeitosEncontradosRepo)
    {
        $this->defeitosEncontradosRepository = $defeitosEncontradosRepo;
    }

    /**
     * Display a listing of the Defeitos_encontrados.
     *
     * @param Defeitos_encontradosDataTable $defeitosEncontradosDataTable
     * @return Response
     */
    public function index(Defeitos_encontradosDataTable $defeitosEncontradosDataTable)
    {
        return $defeitosEncontradosDataTable->render('defeitos_encontrados.index');
    }

    /**
     * Show the form for creating a new Defeitos_encontrados.
     *
     * @return Response
     */
    public function create()
    {
        return view('defeitos_encontrados.create');
    }

    /**
     * Store a newly created Defeitos_encontrados in storage.
     *
     * @param CreateDefeitos_encontradosRequest $request
     *
     * @return Response
     */
    public function store(CreateDefeitos_encontradosRequest $request)
    {
        $input = $request->all();

        $defeitosEncontrados = $this->defeitosEncontradosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/defeitosEncontrados.singular')]));

        return redirect(route('defeitosEncontrados.index'));
    }

    /**
     * Display the specified Defeitos_encontrados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $defeitosEncontrados = $this->defeitosEncontradosRepository->find($id);

        if (empty($defeitosEncontrados)) {
            Flash::error(__('models/defeitosEncontrados.singular').' '.__('messages.not_found'));

            return redirect(route('defeitosEncontrados.index'));
        }

        return view('defeitos_encontrados.show')->with('defeitosEncontrados', $defeitosEncontrados);
    }

    /**
     * Show the form for editing the specified Defeitos_encontrados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $defeitosEncontrados = $this->defeitosEncontradosRepository->find($id);

        if (empty($defeitosEncontrados)) {
            Flash::error(__('messages.not_found', ['model' => __('models/defeitosEncontrados.singular')]));

            return redirect(route('defeitosEncontrados.index'));
        }

        return view('defeitos_encontrados.edit')->with('defeitosEncontrados', $defeitosEncontrados);
    }

    /**
     * Update the specified Defeitos_encontrados in storage.
     *
     * @param  int              $id
     * @param UpdateDefeitos_encontradosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDefeitos_encontradosRequest $request)
    {
        $defeitosEncontrados = $this->defeitosEncontradosRepository->find($id);

        if (empty($defeitosEncontrados)) {
            Flash::error(__('messages.not_found', ['model' => __('models/defeitosEncontrados.singular')]));

            return redirect(route('defeitosEncontrados.index'));
        }

        $defeitosEncontrados = $this->defeitosEncontradosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/defeitosEncontrados.singular')]));

        return redirect(route('defeitosEncontrados.index'));
    }

    /**
     * Remove the specified Defeitos_encontrados from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $defeitosEncontrados = $this->defeitosEncontradosRepository->find($id);

        if (empty($defeitosEncontrados)) {
            Flash::error(__('messages.not_found', ['model' => __('models/defeitosEncontrados.singular')]));

            return redirect(route('defeitosEncontrados.index'));
        }

        $this->defeitosEncontradosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/defeitosEncontrados.singular')]));

        return redirect(route('defeitosEncontrados.index'));
    }
}
