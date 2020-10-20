<?php

namespace App\Http\Controllers;

use App\DataTables\turmaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateturmaRequest;
use App\Http\Requests\UpdateturmaRequest;
use App\Repositories\turmaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class turmaController extends AppBaseController
{
    /** @var  turmaRepository */
    private $turmaRepository;

    public function __construct(turmaRepository $turmaRepo)
    {
        $this->turmaRepository = $turmaRepo;
    }

    /**
     * Display a listing of the turma.
     *
     * @param turmaDataTable $turmaDataTable
     * @return Response
     */
    public function index(turmaDataTable $turmaDataTable)
    {
        return $turmaDataTable->render('turmas.index');
    }

    /**
     * Show the form for creating a new turma.
     *
     * @return Response
     */
    public function create()
    {
        return view('turmas.create');
    }

    /**
     * Store a newly created turma in storage.
     *
     * @param CreateturmaRequest $request
     *
     * @return Response
     */
    public function store(CreateturmaRequest $request)
    {
        $input = $request->all();

        $turma = $this->turmaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/turmas.singular')]));

        return redirect(route('turmas.index'));
    }

    /**
     * Display the specified turma.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turma = $this->turmaRepository->find($id);

        if (empty($turma)) {
            Flash::error(__('models/turmas.singular').' '.__('messages.not_found'));

            return redirect(route('turmas.index'));
        }

        return view('turmas.show')->with('turma', $turma);
    }

    /**
     * Show the form for editing the specified turma.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $turma = $this->turmaRepository->find($id);

        if (empty($turma)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmas.singular')]));

            return redirect(route('turmas.index'));
        }

        return view('turmas.edit')->with('turma', $turma);
    }

    /**
     * Update the specified turma in storage.
     *
     * @param  int              $id
     * @param UpdateturmaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateturmaRequest $request)
    {
        $turma = $this->turmaRepository->find($id);

        if (empty($turma)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmas.singular')]));

            return redirect(route('turmas.index'));
        }

        $turma = $this->turmaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/turmas.singular')]));

        return redirect(route('turmas.index'));
    }

    /**
     * Remove the specified turma from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turma = $this->turmaRepository->find($id);

        if (empty($turma)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmas.singular')]));

            return redirect(route('turmas.index'));
        }

        $this->turmaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/turmas.singular')]));

        return redirect(route('turmas.index'));
    }
}
