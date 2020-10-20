<?php

namespace App\Http\Controllers;

use App\DataTables\EmpresasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEmpresasRequest;
use App\Http\Requests\UpdateEmpresasRequest;
use App\Repositories\EmpresasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmpresasController extends AppBaseController
{
    /** @var  EmpresasRepository */
    private $empresasRepository;

    public function __construct(EmpresasRepository $empresasRepo)
    {
        $this->empresasRepository = $empresasRepo;
    }

    /**
     * Display a listing of the Empresas.
     *
     * @param EmpresasDataTable $empresasDataTable
     * @return Response
     */
    public function index(EmpresasDataTable $empresasDataTable)
    {
        return $empresasDataTable->render('empresas.index');
    }

    /**
     * Show the form for creating a new Empresas.
     *
     * @return Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created Empresas in storage.
     *
     * @param CreateEmpresasRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpresasRequest $request)
    {
        $input = $request->all();

        $empresas = $this->empresasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/empresas.singular')]));

        return redirect(route('empresas.index'));
    }

    /**
     * Display the specified Empresas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error(__('models/empresas.singular').' '.__('messages.not_found'));

            return redirect(route('empresas.index'));
        }

        return view('empresas.show')->with('empresas', $empresas);
    }

    /**
     * Show the form for editing the specified Empresas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/empresas.singular')]));

            return redirect(route('empresas.index'));
        }

        return view('empresas.edit')->with('empresas', $empresas);
    }

    /**
     * Update the specified Empresas in storage.
     *
     * @param  int              $id
     * @param UpdateEmpresasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpresasRequest $request)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/empresas.singular')]));

            return redirect(route('empresas.index'));
        }

        $empresas = $this->empresasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/empresas.singular')]));

        return redirect(route('empresas.index'));
    }

    /**
     * Remove the specified Empresas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/empresas.singular')]));

            return redirect(route('empresas.index'));
        }

        $this->empresasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/empresas.singular')]));

        return redirect(route('empresas.index'));
    }
}
