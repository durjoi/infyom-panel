<?php

namespace App\Http\Controllers;

use App\DataTables\luminariaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateluminariaRequest;
use App\Http\Requests\UpdateluminariaRequest;
use App\Repositories\luminariaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class luminariaController extends AppBaseController
{
    /** @var  luminariaRepository */
    private $luminariaRepository;

    public function __construct(luminariaRepository $luminariaRepo)
    {
        $this->luminariaRepository = $luminariaRepo;
    }

    /**
     * Display a listing of the luminaria.
     *
     * @param luminariaDataTable $luminariaDataTable
     * @return Response
     */
    public function index(luminariaDataTable $luminariaDataTable)
    {
        return $luminariaDataTable->render('luminarias.index');
    }

    /**
     * Show the form for creating a new luminaria.
     *
     * @return Response
     */
    public function create()
    {
        return view('luminarias.create');
    }

    /**
     * Store a newly created luminaria in storage.
     *
     * @param CreateluminariaRequest $request
     *
     * @return Response
     */
    public function store(CreateluminariaRequest $request)
    {
        $input = $request->all();

        $luminaria = $this->luminariaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/luminarias.singular')]));

        return redirect(route('luminarias.index'));
    }

    /**
     * Display the specified luminaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $luminaria = $this->luminariaRepository->find($id);

        if (empty($luminaria)) {
            Flash::error(__('models/luminarias.singular').' '.__('messages.not_found'));

            return redirect(route('luminarias.index'));
        }

        return view('luminarias.show')->with('luminaria', $luminaria);
    }

    /**
     * Show the form for editing the specified luminaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $luminaria = $this->luminariaRepository->find($id);

        if (empty($luminaria)) {
            Flash::error(__('messages.not_found', ['model' => __('models/luminarias.singular')]));

            return redirect(route('luminarias.index'));
        }

        return view('luminarias.edit')->with('luminaria', $luminaria);
    }

    /**
     * Update the specified luminaria in storage.
     *
     * @param  int              $id
     * @param UpdateluminariaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateluminariaRequest $request)
    {
        $luminaria = $this->luminariaRepository->find($id);

        if (empty($luminaria)) {
            Flash::error(__('messages.not_found', ['model' => __('models/luminarias.singular')]));

            return redirect(route('luminarias.index'));
        }

        $luminaria = $this->luminariaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/luminarias.singular')]));

        return redirect(route('luminarias.index'));
    }

    /**
     * Remove the specified luminaria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $luminaria = $this->luminariaRepository->find($id);

        if (empty($luminaria)) {
            Flash::error(__('messages.not_found', ['model' => __('models/luminarias.singular')]));

            return redirect(route('luminarias.index'));
        }

        $this->luminariaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/luminarias.singular')]));

        return redirect(route('luminarias.index'));
    }
}
