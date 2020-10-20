<?php

namespace App\Http\Controllers;

use App\DataTables\Fatura_manutencaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFatura_manutencaoRequest;
use App\Http\Requests\UpdateFatura_manutencaoRequest;
use App\Repositories\Fatura_manutencaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Fatura_manutencaoController extends AppBaseController
{
    /** @var  Fatura_manutencaoRepository */
    private $faturaManutencaoRepository;

    public function __construct(Fatura_manutencaoRepository $faturaManutencaoRepo)
    {
        $this->faturaManutencaoRepository = $faturaManutencaoRepo;
    }

    /**
     * Display a listing of the Fatura_manutencao.
     *
     * @param Fatura_manutencaoDataTable $faturaManutencaoDataTable
     * @return Response
     */
    public function index(Fatura_manutencaoDataTable $faturaManutencaoDataTable)
    {
        return $faturaManutencaoDataTable->render('fatura_manutencaos.index');
    }

    /**
     * Show the form for creating a new Fatura_manutencao.
     *
     * @return Response
     */
    public function create()
    {
        return view('fatura_manutencaos.create');
    }

    /**
     * Store a newly created Fatura_manutencao in storage.
     *
     * @param CreateFatura_manutencaoRequest $request
     *
     * @return Response
     */
    public function store(CreateFatura_manutencaoRequest $request)
    {
        $input = $request->all();

        $faturaManutencao = $this->faturaManutencaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faturaManutencaos.singular')]));

        return redirect(route('faturaManutencaos.index'));
    }

    /**
     * Display the specified Fatura_manutencao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faturaManutencao = $this->faturaManutencaoRepository->find($id);

        if (empty($faturaManutencao)) {
            Flash::error(__('models/faturaManutencaos.singular').' '.__('messages.not_found'));

            return redirect(route('faturaManutencaos.index'));
        }

        return view('fatura_manutencaos.show')->with('faturaManutencao', $faturaManutencao);
    }

    /**
     * Show the form for editing the specified Fatura_manutencao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faturaManutencao = $this->faturaManutencaoRepository->find($id);

        if (empty($faturaManutencao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaManutencaos.singular')]));

            return redirect(route('faturaManutencaos.index'));
        }

        return view('fatura_manutencaos.edit')->with('faturaManutencao', $faturaManutencao);
    }

    /**
     * Update the specified Fatura_manutencao in storage.
     *
     * @param  int              $id
     * @param UpdateFatura_manutencaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFatura_manutencaoRequest $request)
    {
        $faturaManutencao = $this->faturaManutencaoRepository->find($id);

        if (empty($faturaManutencao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaManutencaos.singular')]));

            return redirect(route('faturaManutencaos.index'));
        }

        $faturaManutencao = $this->faturaManutencaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faturaManutencaos.singular')]));

        return redirect(route('faturaManutencaos.index'));
    }

    /**
     * Remove the specified Fatura_manutencao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faturaManutencao = $this->faturaManutencaoRepository->find($id);

        if (empty($faturaManutencao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaManutencaos.singular')]));

            return redirect(route('faturaManutencaos.index'));
        }

        $this->faturaManutencaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faturaManutencaos.singular')]));

        return redirect(route('faturaManutencaos.index'));
    }
}
