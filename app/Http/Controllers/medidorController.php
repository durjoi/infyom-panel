<?php

namespace App\Http\Controllers;

use App\DataTables\medidorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatemedidorRequest;
use App\Http\Requests\UpdatemedidorRequest;
use App\Repositories\medidorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class medidorController extends AppBaseController
{
    /** @var  medidorRepository */
    private $medidorRepository;

    public function __construct(medidorRepository $medidorRepo)
    {
        $this->medidorRepository = $medidorRepo;
    }

    /**
     * Display a listing of the medidor.
     *
     * @param medidorDataTable $medidorDataTable
     * @return Response
     */
    public function index(medidorDataTable $medidorDataTable)
    {
        return $medidorDataTable->render('medidors.index');
    }

    /**
     * Show the form for creating a new medidor.
     *
     * @return Response
     */
    public function create()
    {
        return view('medidors.create');
    }

    /**
     * Store a newly created medidor in storage.
     *
     * @param CreatemedidorRequest $request
     *
     * @return Response
     */
    public function store(CreatemedidorRequest $request)
    {
        $input = $request->all();

        $medidor = $this->medidorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/medidors.singular')]));

        return redirect(route('medidors.index'));
    }

    /**
     * Display the specified medidor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medidor = $this->medidorRepository->find($id);

        if (empty($medidor)) {
            Flash::error(__('models/medidors.singular').' '.__('messages.not_found'));

            return redirect(route('medidors.index'));
        }

        return view('medidors.show')->with('medidor', $medidor);
    }

    /**
     * Show the form for editing the specified medidor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medidor = $this->medidorRepository->find($id);

        if (empty($medidor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/medidors.singular')]));

            return redirect(route('medidors.index'));
        }

        return view('medidors.edit')->with('medidor', $medidor);
    }

    /**
     * Update the specified medidor in storage.
     *
     * @param  int              $id
     * @param UpdatemedidorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemedidorRequest $request)
    {
        $medidor = $this->medidorRepository->find($id);

        if (empty($medidor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/medidors.singular')]));

            return redirect(route('medidors.index'));
        }

        $medidor = $this->medidorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/medidors.singular')]));

        return redirect(route('medidors.index'));
    }

    /**
     * Remove the specified medidor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medidor = $this->medidorRepository->find($id);

        if (empty($medidor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/medidors.singular')]));

            return redirect(route('medidors.index'));
        }

        $this->medidorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/medidors.singular')]));

        return redirect(route('medidors.index'));
    }
}
