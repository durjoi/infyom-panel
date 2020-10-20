<?php

namespace App\Http\Controllers;

use App\DataTables\cidadeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatecidadeRequest;
use App\Http\Requests\UpdatecidadeRequest;
use App\Repositories\cidadeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class cidadeController extends AppBaseController
{
    /** @var  cidadeRepository */
    private $cidadeRepository;

    public function __construct(cidadeRepository $cidadeRepo)
    {
        $this->cidadeRepository = $cidadeRepo;
    }

    /**
     * Display a listing of the cidade.
     *
     * @param cidadeDataTable $cidadeDataTable
     * @return Response
     */
    public function index(cidadeDataTable $cidadeDataTable)
    {
        return $cidadeDataTable->render('cidades.index');
    }

    /**
     * Show the form for creating a new cidade.
     *
     * @return Response
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created cidade in storage.
     *
     * @param CreatecidadeRequest $request
     *
     * @return Response
     */
    public function store(CreatecidadeRequest $request)
    {
        $input = $request->all();

        $cidade = $this->cidadeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cidades.singular')]));

        return redirect(route('cidades.index'));
    }

    /**
     * Display the specified cidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cidade = $this->cidadeRepository->find($id);

        if (empty($cidade)) {
            Flash::error(__('models/cidades.singular').' '.__('messages.not_found'));

            return redirect(route('cidades.index'));
        }

        return view('cidades.show')->with('cidade', $cidade);
    }

    /**
     * Show the form for editing the specified cidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cidade = $this->cidadeRepository->find($id);

        if (empty($cidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cidades.singular')]));

            return redirect(route('cidades.index'));
        }

        return view('cidades.edit')->with('cidade', $cidade);
    }

    /**
     * Update the specified cidade in storage.
     *
     * @param  int              $id
     * @param UpdatecidadeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecidadeRequest $request)
    {
        $cidade = $this->cidadeRepository->find($id);

        if (empty($cidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cidades.singular')]));

            return redirect(route('cidades.index'));
        }

        $cidade = $this->cidadeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cidades.singular')]));

        return redirect(route('cidades.index'));
    }

    /**
     * Remove the specified cidade from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cidade = $this->cidadeRepository->find($id);

        if (empty($cidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cidades.singular')]));

            return redirect(route('cidades.index'));
        }

        $this->cidadeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cidades.singular')]));

        return redirect(route('cidades.index'));
    }
}
