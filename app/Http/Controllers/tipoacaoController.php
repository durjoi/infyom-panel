<?php

namespace App\Http\Controllers;

use App\DataTables\tipoacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatetipoacaoRequest;
use App\Http\Requests\UpdatetipoacaoRequest;
use App\Repositories\tipoacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class tipoacaoController extends AppBaseController
{
    /** @var  tipoacaoRepository */
    private $tipoacaoRepository;

    public function __construct(tipoacaoRepository $tipoacaoRepo)
    {
        $this->tipoacaoRepository = $tipoacaoRepo;
    }

    /**
     * Display a listing of the tipoacao.
     *
     * @param tipoacaoDataTable $tipoacaoDataTable
     * @return Response
     */
    public function index(tipoacaoDataTable $tipoacaoDataTable)
    {
        return $tipoacaoDataTable->render('tipoacaos.index');
    }

    /**
     * Show the form for creating a new tipoacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipoacaos.create');
    }

    /**
     * Store a newly created tipoacao in storage.
     *
     * @param CreatetipoacaoRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoacaoRequest $request)
    {
        $input = $request->all();

        $tipoacao = $this->tipoacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tipoacaos.singular')]));

        return redirect(route('tipoacaos.index'));
    }

    /**
     * Display the specified tipoacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoacao = $this->tipoacaoRepository->find($id);

        if (empty($tipoacao)) {
            Flash::error(__('models/tipoacaos.singular').' '.__('messages.not_found'));

            return redirect(route('tipoacaos.index'));
        }

        return view('tipoacaos.show')->with('tipoacao', $tipoacao);
    }

    /**
     * Show the form for editing the specified tipoacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoacao = $this->tipoacaoRepository->find($id);

        if (empty($tipoacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoacaos.singular')]));

            return redirect(route('tipoacaos.index'));
        }

        return view('tipoacaos.edit')->with('tipoacao', $tipoacao);
    }

    /**
     * Update the specified tipoacao in storage.
     *
     * @param  int              $id
     * @param UpdatetipoacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoacaoRequest $request)
    {
        $tipoacao = $this->tipoacaoRepository->find($id);

        if (empty($tipoacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoacaos.singular')]));

            return redirect(route('tipoacaos.index'));
        }

        $tipoacao = $this->tipoacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/tipoacaos.singular')]));

        return redirect(route('tipoacaos.index'));
    }

    /**
     * Remove the specified tipoacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoacao = $this->tipoacaoRepository->find($id);

        if (empty($tipoacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tipoacaos.singular')]));

            return redirect(route('tipoacaos.index'));
        }

        $this->tipoacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/tipoacaos.singular')]));

        return redirect(route('tipoacaos.index'));
    }
}
