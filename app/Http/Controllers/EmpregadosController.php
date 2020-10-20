<?php

namespace App\Http\Controllers;

use App\DataTables\EmpregadosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEmpregadosRequest;
use App\Http\Requests\UpdateEmpregadosRequest;
use App\Repositories\EmpregadosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmpregadosController extends AppBaseController
{
    /** @var  EmpregadosRepository */
    private $empregadosRepository;

    public function __construct(EmpregadosRepository $empregadosRepo)
    {
        $this->empregadosRepository = $empregadosRepo;
    }

    /**
     * Display a listing of the Empregados.
     *
     * @param EmpregadosDataTable $empregadosDataTable
     * @return Response
     */
    public function index(EmpregadosDataTable $empregadosDataTable)
    {
        return $empregadosDataTable->render('empregados.index');
    }

    /**
     * Show the form for creating a new Empregados.
     *
     * @return Response
     */
    public function create()
    {
        return view('empregados.create');
    }

    /**
     * Store a newly created Empregados in storage.
     *
     * @param CreateEmpregadosRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpregadosRequest $request)
    {
        $input = $request->all();

        $empregados = $this->empregadosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/empregados.singular')]));

        return redirect(route('empregados.index'));
    }

    /**
     * Display the specified Empregados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empregados = $this->empregadosRepository->find($id);

        if (empty($empregados)) {
            Flash::error(__('models/empregados.singular').' '.__('messages.not_found'));

            return redirect(route('empregados.index'));
        }

        return view('empregados.show')->with('empregados', $empregados);
    }

    /**
     * Show the form for editing the specified Empregados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empregados = $this->empregadosRepository->find($id);

        if (empty($empregados)) {
            Flash::error(__('messages.not_found', ['model' => __('models/empregados.singular')]));

            return redirect(route('empregados.index'));
        }

        return view('empregados.edit')->with('empregados', $empregados);
    }

    /**
     * Update the specified Empregados in storage.
     *
     * @param  int              $id
     * @param UpdateEmpregadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpregadosRequest $request)
    {
        $empregados = $this->empregadosRepository->find($id);

        if (empty($empregados)) {
            Flash::error(__('messages.not_found', ['model' => __('models/empregados.singular')]));

            return redirect(route('empregados.index'));
        }

        $empregados = $this->empregadosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/empregados.singular')]));

        return redirect(route('empregados.index'));
    }

    /**
     * Remove the specified Empregados from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empregados = $this->empregadosRepository->find($id);

        if (empty($empregados)) {
            Flash::error(__('messages.not_found', ['model' => __('models/empregados.singular')]));

            return redirect(route('empregados.index'));
        }

        $this->empregadosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/empregados.singular')]));

        return redirect(route('empregados.index'));
    }
}
