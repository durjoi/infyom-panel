<?php

namespace App\Http\Controllers;

use App\DataTables\requisicaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreaterequisicaoRequest;
use App\Http\Requests\UpdaterequisicaoRequest;
use App\Repositories\requisicaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class requisicaoController extends AppBaseController
{
    /** @var  requisicaoRepository */
    private $requisicaoRepository;

    public function __construct(requisicaoRepository $requisicaoRepo)
    {
        $this->requisicaoRepository = $requisicaoRepo;
    }

    /**
     * Display a listing of the requisicao.
     *
     * @param requisicaoDataTable $requisicaoDataTable
     * @return Response
     */
    public function index(requisicaoDataTable $requisicaoDataTable)
    {
        return $requisicaoDataTable->render('requisicaos.index');
    }

    /**
     * Show the form for creating a new requisicao.
     *
     * @return Response
     */
    public function create()
    {
        return view('requisicaos.create');
    }

    /**
     * Store a newly created requisicao in storage.
     *
     * @param CreaterequisicaoRequest $request
     *
     * @return Response
     */
    public function store(CreaterequisicaoRequest $request)
    {
        $input = $request->all();

        $requisicao = $this->requisicaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/requisicaos.singular')]));

        return redirect(route('requisicaos.index'));
    }

    /**
     * Display the specified requisicao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $requisicao = $this->requisicaoRepository->find($id);

        if (empty($requisicao)) {
            Flash::error(__('models/requisicaos.singular').' '.__('messages.not_found'));

            return redirect(route('requisicaos.index'));
        }

        return view('requisicaos.show')->with('requisicao', $requisicao);
    }

    /**
     * Show the form for editing the specified requisicao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requisicao = $this->requisicaoRepository->find($id);

        if (empty($requisicao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requisicaos.singular')]));

            return redirect(route('requisicaos.index'));
        }

        return view('requisicaos.edit')->with('requisicao', $requisicao);
    }

    /**
     * Update the specified requisicao in storage.
     *
     * @param  int              $id
     * @param UpdaterequisicaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterequisicaoRequest $request)
    {
        $requisicao = $this->requisicaoRepository->find($id);

        if (empty($requisicao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requisicaos.singular')]));

            return redirect(route('requisicaos.index'));
        }

        $requisicao = $this->requisicaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/requisicaos.singular')]));

        return redirect(route('requisicaos.index'));
    }

    /**
     * Remove the specified requisicao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requisicao = $this->requisicaoRepository->find($id);

        if (empty($requisicao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requisicaos.singular')]));

            return redirect(route('requisicaos.index'));
        }

        $this->requisicaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/requisicaos.singular')]));

        return redirect(route('requisicaos.index'));
    }
}
