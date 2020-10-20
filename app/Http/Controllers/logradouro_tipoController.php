<?php

namespace App\Http\Controllers;

use App\DataTables\logradouro_tipoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createlogradouro_tipoRequest;
use App\Http\Requests\Updatelogradouro_tipoRequest;
use App\Repositories\logradouro_tipoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class logradouro_tipoController extends AppBaseController
{
    /** @var  logradouro_tipoRepository */
    private $logradouroTipoRepository;

    public function __construct(logradouro_tipoRepository $logradouroTipoRepo)
    {
        $this->logradouroTipoRepository = $logradouroTipoRepo;
    }

    /**
     * Display a listing of the logradouro_tipo.
     *
     * @param logradouro_tipoDataTable $logradouroTipoDataTable
     * @return Response
     */
    public function index(logradouro_tipoDataTable $logradouroTipoDataTable)
    {
        return $logradouroTipoDataTable->render('logradouro_tipos.index');
    }

    /**
     * Show the form for creating a new logradouro_tipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('logradouro_tipos.create');
    }

    /**
     * Store a newly created logradouro_tipo in storage.
     *
     * @param Createlogradouro_tipoRequest $request
     *
     * @return Response
     */
    public function store(Createlogradouro_tipoRequest $request)
    {
        $input = $request->all();

        $logradouroTipo = $this->logradouroTipoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/logradouroTipos.singular')]));

        return redirect(route('logradouroTipos.index'));
    }

    /**
     * Display the specified logradouro_tipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $logradouroTipo = $this->logradouroTipoRepository->find($id);

        if (empty($logradouroTipo)) {
            Flash::error(__('models/logradouroTipos.singular').' '.__('messages.not_found'));

            return redirect(route('logradouroTipos.index'));
        }

        return view('logradouro_tipos.show')->with('logradouroTipo', $logradouroTipo);
    }

    /**
     * Show the form for editing the specified logradouro_tipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $logradouroTipo = $this->logradouroTipoRepository->find($id);

        if (empty($logradouroTipo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logradouroTipos.singular')]));

            return redirect(route('logradouroTipos.index'));
        }

        return view('logradouro_tipos.edit')->with('logradouroTipo', $logradouroTipo);
    }

    /**
     * Update the specified logradouro_tipo in storage.
     *
     * @param  int              $id
     * @param Updatelogradouro_tipoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatelogradouro_tipoRequest $request)
    {
        $logradouroTipo = $this->logradouroTipoRepository->find($id);

        if (empty($logradouroTipo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logradouroTipos.singular')]));

            return redirect(route('logradouroTipos.index'));
        }

        $logradouroTipo = $this->logradouroTipoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/logradouroTipos.singular')]));

        return redirect(route('logradouroTipos.index'));
    }

    /**
     * Remove the specified logradouro_tipo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $logradouroTipo = $this->logradouroTipoRepository->find($id);

        if (empty($logradouroTipo)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logradouroTipos.singular')]));

            return redirect(route('logradouroTipos.index'));
        }

        $this->logradouroTipoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/logradouroTipos.singular')]));

        return redirect(route('logradouroTipos.index'));
    }
}
