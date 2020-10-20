<?php

namespace App\Http\Controllers;

use App\DataTables\fatura_manutencao_osDataTable;
use App\Http\Requests;
use App\Http\Requests\Createfatura_manutencao_osRequest;
use App\Http\Requests\Updatefatura_manutencao_osRequest;
use App\Repositories\fatura_manutencao_osRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class fatura_manutencao_osController extends AppBaseController
{
    /** @var  fatura_manutencao_osRepository */
    private $faturaManutencaoOsRepository;

    public function __construct(fatura_manutencao_osRepository $faturaManutencaoOsRepo)
    {
        $this->faturaManutencaoOsRepository = $faturaManutencaoOsRepo;
    }

    /**
     * Display a listing of the fatura_manutencao_os.
     *
     * @param fatura_manutencao_osDataTable $faturaManutencaoOsDataTable
     * @return Response
     */
    public function index(fatura_manutencao_osDataTable $faturaManutencaoOsDataTable)
    {
        return $faturaManutencaoOsDataTable->render('fatura_manutencao_os.index');
    }

    /**
     * Show the form for creating a new fatura_manutencao_os.
     *
     * @return Response
     */
    public function create()
    {
        return view('fatura_manutencao_os.create');
    }

    /**
     * Store a newly created fatura_manutencao_os in storage.
     *
     * @param Createfatura_manutencao_osRequest $request
     *
     * @return Response
     */
    public function store(Createfatura_manutencao_osRequest $request)
    {
        $input = $request->all();

        $faturaManutencaoOs = $this->faturaManutencaoOsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faturaManutencaoOs.singular')]));

        return redirect(route('faturaManutencaoOs.index'));
    }

    /**
     * Display the specified fatura_manutencao_os.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faturaManutencaoOs = $this->faturaManutencaoOsRepository->find($id);

        if (empty($faturaManutencaoOs)) {
            Flash::error(__('models/faturaManutencaoOs.singular').' '.__('messages.not_found'));

            return redirect(route('faturaManutencaoOs.index'));
        }

        return view('fatura_manutencao_os.show')->with('faturaManutencaoOs', $faturaManutencaoOs);
    }

    /**
     * Show the form for editing the specified fatura_manutencao_os.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faturaManutencaoOs = $this->faturaManutencaoOsRepository->find($id);

        if (empty($faturaManutencaoOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaManutencaoOs.singular')]));

            return redirect(route('faturaManutencaoOs.index'));
        }

        return view('fatura_manutencao_os.edit')->with('faturaManutencaoOs', $faturaManutencaoOs);
    }

    /**
     * Update the specified fatura_manutencao_os in storage.
     *
     * @param  int              $id
     * @param Updatefatura_manutencao_osRequest $request
     *
     * @return Response
     */
    public function update($id, Updatefatura_manutencao_osRequest $request)
    {
        $faturaManutencaoOs = $this->faturaManutencaoOsRepository->find($id);

        if (empty($faturaManutencaoOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaManutencaoOs.singular')]));

            return redirect(route('faturaManutencaoOs.index'));
        }

        $faturaManutencaoOs = $this->faturaManutencaoOsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faturaManutencaoOs.singular')]));

        return redirect(route('faturaManutencaoOs.index'));
    }

    /**
     * Remove the specified fatura_manutencao_os from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faturaManutencaoOs = $this->faturaManutencaoOsRepository->find($id);

        if (empty($faturaManutencaoOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaManutencaoOs.singular')]));

            return redirect(route('faturaManutencaoOs.index'));
        }

        $this->faturaManutencaoOsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faturaManutencaoOs.singular')]));

        return redirect(route('faturaManutencaoOs.index'));
    }
}
