<?php

namespace App\Http\Controllers;

use App\DataTables\perfilDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateperfilRequest;
use App\Http\Requests\UpdateperfilRequest;
use App\Repositories\perfilRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class perfilController extends AppBaseController
{
    /** @var  perfilRepository */
    private $perfilRepository;

    public function __construct(perfilRepository $perfilRepo)
    {
        $this->perfilRepository = $perfilRepo;
    }

    /**
     * Display a listing of the perfil.
     *
     * @param perfilDataTable $perfilDataTable
     * @return Response
     */
    public function index(perfilDataTable $perfilDataTable)
    {
        return $perfilDataTable->render('perfils.index');
    }

    /**
     * Show the form for creating a new perfil.
     *
     * @return Response
     */
    public function create()
    {
        return view('perfils.create');
    }

    /**
     * Store a newly created perfil in storage.
     *
     * @param CreateperfilRequest $request
     *
     * @return Response
     */
    public function store(CreateperfilRequest $request)
    {
        $input = $request->all();

        $perfil = $this->perfilRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/perfils.singular')]));

        return redirect(route('perfils.index'));
    }

    /**
     * Display the specified perfil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error(__('models/perfils.singular').' '.__('messages.not_found'));

            return redirect(route('perfils.index'));
        }

        return view('perfils.show')->with('perfil', $perfil);
    }

    /**
     * Show the form for editing the specified perfil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perfils.singular')]));

            return redirect(route('perfils.index'));
        }

        return view('perfils.edit')->with('perfil', $perfil);
    }

    /**
     * Update the specified perfil in storage.
     *
     * @param  int              $id
     * @param UpdateperfilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateperfilRequest $request)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perfils.singular')]));

            return redirect(route('perfils.index'));
        }

        $perfil = $this->perfilRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/perfils.singular')]));

        return redirect(route('perfils.index'));
    }

    /**
     * Remove the specified perfil from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfil = $this->perfilRepository->find($id);

        if (empty($perfil)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perfils.singular')]));

            return redirect(route('perfils.index'));
        }

        $this->perfilRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/perfils.singular')]));

        return redirect(route('perfils.index'));
    }
}
