<?php

namespace App\Http\Controllers;

use App\DataTables\subestacaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesubestacaoRequest;
use App\Http\Requests\UpdatesubestacaoRequest;
use App\Repositories\subestacaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class subestacaoController extends AppBaseController
{
    /** @var  subestacaoRepository */
    private $subestacaoRepository;

    public function __construct(subestacaoRepository $subestacaoRepo)
    {
        $this->subestacaoRepository = $subestacaoRepo;
    }

    /**
     * Display a listing of the subestacao.
     *
     * @param subestacaoDataTable $subestacaoDataTable
     * @return Response
     */
    public function index(subestacaoDataTable $subestacaoDataTable)
    {
        return $subestacaoDataTable->render('subestacaos.index');
    }

    /**
     * Show the form for creating a new subestacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('subestacaos.create');
    }

    /**
     * Store a newly created subestacao in storage.
     *
     * @param CreatesubestacaoRequest $request
     *
     * @return Response
     */
    public function store(CreatesubestacaoRequest $request)
    {
        $input = $request->all();

        $subestacao = $this->subestacaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/subestacaos.singular')]));

        return redirect(route('subestacaos.index'));
    }

    /**
     * Display the specified subestacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subestacao = $this->subestacaoRepository->find($id);

        if (empty($subestacao)) {
            Flash::error(__('models/subestacaos.singular').' '.__('messages.not_found'));

            return redirect(route('subestacaos.index'));
        }

        return view('subestacaos.show')->with('subestacao', $subestacao);
    }

    /**
     * Show the form for editing the specified subestacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subestacao = $this->subestacaoRepository->find($id);

        if (empty($subestacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/subestacaos.singular')]));

            return redirect(route('subestacaos.index'));
        }

        return view('subestacaos.edit')->with('subestacao', $subestacao);
    }

    /**
     * Update the specified subestacao in storage.
     *
     * @param  int              $id
     * @param UpdatesubestacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesubestacaoRequest $request)
    {
        $subestacao = $this->subestacaoRepository->find($id);

        if (empty($subestacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/subestacaos.singular')]));

            return redirect(route('subestacaos.index'));
        }

        $subestacao = $this->subestacaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/subestacaos.singular')]));

        return redirect(route('subestacaos.index'));
    }

    /**
     * Remove the specified subestacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subestacao = $this->subestacaoRepository->find($id);

        if (empty($subestacao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/subestacaos.singular')]));

            return redirect(route('subestacaos.index'));
        }

        $this->subestacaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/subestacaos.singular')]));

        return redirect(route('subestacaos.index'));
    }
}
