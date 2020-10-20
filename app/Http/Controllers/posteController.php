<?php

namespace App\Http\Controllers;

use App\DataTables\posteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateposteRequest;
use App\Http\Requests\UpdateposteRequest;
use App\Repositories\posteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class posteController extends AppBaseController
{
    /** @var  posteRepository */
    private $posteRepository;

    public function __construct(posteRepository $posteRepo)
    {
        $this->posteRepository = $posteRepo;
    }

    /**
     * Display a listing of the poste.
     *
     * @param posteDataTable $posteDataTable
     * @return Response
     */
    public function index(posteDataTable $posteDataTable)
    {
        return $posteDataTable->render('postes.index');
    }

    /**
     * Show the form for creating a new poste.
     *
     * @return Response
     */
    public function create()
    {
        return view('postes.create');
    }

    /**
     * Store a newly created poste in storage.
     *
     * @param CreateposteRequest $request
     *
     * @return Response
     */
    public function store(CreateposteRequest $request)
    {
        $input = $request->all();

        $poste = $this->posteRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/postes.singular')]));

        return redirect(route('postes.index'));
    }

    /**
     * Display the specified poste.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error(__('models/postes.singular').' '.__('messages.not_found'));

            return redirect(route('postes.index'));
        }

        return view('postes.show')->with('poste', $poste);
    }

    /**
     * Show the form for editing the specified poste.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error(__('messages.not_found', ['model' => __('models/postes.singular')]));

            return redirect(route('postes.index'));
        }

        return view('postes.edit')->with('poste', $poste);
    }

    /**
     * Update the specified poste in storage.
     *
     * @param  int              $id
     * @param UpdateposteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateposteRequest $request)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error(__('messages.not_found', ['model' => __('models/postes.singular')]));

            return redirect(route('postes.index'));
        }

        $poste = $this->posteRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/postes.singular')]));

        return redirect(route('postes.index'));
    }

    /**
     * Remove the specified poste from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $poste = $this->posteRepository->find($id);

        if (empty($poste)) {
            Flash::error(__('messages.not_found', ['model' => __('models/postes.singular')]));

            return redirect(route('postes.index'));
        }

        $this->posteRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/postes.singular')]));

        return redirect(route('postes.index'));
    }
}
