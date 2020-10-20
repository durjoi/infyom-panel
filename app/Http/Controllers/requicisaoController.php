<?php

namespace App\Http\Controllers;

use App\DataTables\requicisaoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreaterequicisaoRequest;
use App\Http\Requests\UpdaterequicisaoRequest;
use App\Repositories\requicisaoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class requicisaoController extends AppBaseController
{
    /** @var  requicisaoRepository */
    private $requicisaoRepository;

    public function __construct(requicisaoRepository $requicisaoRepo)
    {
        $this->requicisaoRepository = $requicisaoRepo;
    }

    /**
     * Display a listing of the requicisao.
     *
     * @param requicisaoDataTable $requicisaoDataTable
     * @return Response
     */
    public function index(requicisaoDataTable $requicisaoDataTable)
    {
        return $requicisaoDataTable->render('requicisaos.index');
    }

    /**
     * Show the form for creating a new requicisao.
     *
     * @return Response
     */
    public function create()
    {
        return view('requicisaos.create');
    }

    /**
     * Store a newly created requicisao in storage.
     *
     * @param CreaterequicisaoRequest $request
     *
     * @return Response
     */
    public function store(CreaterequicisaoRequest $request)
    {
        $input = $request->all();

        $requicisao = $this->requicisaoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/requicisaos.singular')]));

        return redirect(route('requicisaos.index'));
    }

    /**
     * Display the specified requicisao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $requicisao = $this->requicisaoRepository->find($id);

        if (empty($requicisao)) {
            Flash::error(__('models/requicisaos.singular').' '.__('messages.not_found'));

            return redirect(route('requicisaos.index'));
        }

        return view('requicisaos.show')->with('requicisao', $requicisao);
    }

    /**
     * Show the form for editing the specified requicisao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requicisao = $this->requicisaoRepository->find($id);

        if (empty($requicisao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requicisaos.singular')]));

            return redirect(route('requicisaos.index'));
        }

        return view('requicisaos.edit')->with('requicisao', $requicisao);
    }

    /**
     * Update the specified requicisao in storage.
     *
     * @param  int              $id
     * @param UpdaterequicisaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterequicisaoRequest $request)
    {
        $requicisao = $this->requicisaoRepository->find($id);

        if (empty($requicisao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requicisaos.singular')]));

            return redirect(route('requicisaos.index'));
        }

        $requicisao = $this->requicisaoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/requicisaos.singular')]));

        return redirect(route('requicisaos.index'));
    }

    /**
     * Remove the specified requicisao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requicisao = $this->requicisaoRepository->find($id);

        if (empty($requicisao)) {
            Flash::error(__('messages.not_found', ['model' => __('models/requicisaos.singular')]));

            return redirect(route('requicisaos.index'));
        }

        $this->requicisaoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/requicisaos.singular')]));

        return redirect(route('requicisaos.index'));
    }
}
