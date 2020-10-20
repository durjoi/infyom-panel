<?php

namespace App\Http\Controllers;

use App\DataTables\objeto_iluminadoDataTable;
use App\Http\Requests;
use App\Http\Requests\Createobjeto_iluminadoRequest;
use App\Http\Requests\Updateobjeto_iluminadoRequest;
use App\Repositories\objeto_iluminadoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class objeto_iluminadoController extends AppBaseController
{
    /** @var  objeto_iluminadoRepository */
    private $objetoIluminadoRepository;

    public function __construct(objeto_iluminadoRepository $objetoIluminadoRepo)
    {
        $this->objetoIluminadoRepository = $objetoIluminadoRepo;
    }

    /**
     * Display a listing of the objeto_iluminado.
     *
     * @param objeto_iluminadoDataTable $objetoIluminadoDataTable
     * @return Response
     */
    public function index(objeto_iluminadoDataTable $objetoIluminadoDataTable)
    {
        return $objetoIluminadoDataTable->render('objeto_iluminados.index');
    }

    /**
     * Show the form for creating a new objeto_iluminado.
     *
     * @return Response
     */
    public function create()
    {
        return view('objeto_iluminados.create');
    }

    /**
     * Store a newly created objeto_iluminado in storage.
     *
     * @param Createobjeto_iluminadoRequest $request
     *
     * @return Response
     */
    public function store(Createobjeto_iluminadoRequest $request)
    {
        $input = $request->all();

        $objetoIluminado = $this->objetoIluminadoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/objetoIluminados.singular')]));

        return redirect(route('objetoIluminados.index'));
    }

    /**
     * Display the specified objeto_iluminado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $objetoIluminado = $this->objetoIluminadoRepository->find($id);

        if (empty($objetoIluminado)) {
            Flash::error(__('models/objetoIluminados.singular').' '.__('messages.not_found'));

            return redirect(route('objetoIluminados.index'));
        }

        return view('objeto_iluminados.show')->with('objetoIluminado', $objetoIluminado);
    }

    /**
     * Show the form for editing the specified objeto_iluminado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $objetoIluminado = $this->objetoIluminadoRepository->find($id);

        if (empty($objetoIluminado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/objetoIluminados.singular')]));

            return redirect(route('objetoIluminados.index'));
        }

        return view('objeto_iluminados.edit')->with('objetoIluminado', $objetoIluminado);
    }

    /**
     * Update the specified objeto_iluminado in storage.
     *
     * @param  int              $id
     * @param Updateobjeto_iluminadoRequest $request
     *
     * @return Response
     */
    public function update($id, Updateobjeto_iluminadoRequest $request)
    {
        $objetoIluminado = $this->objetoIluminadoRepository->find($id);

        if (empty($objetoIluminado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/objetoIluminados.singular')]));

            return redirect(route('objetoIluminados.index'));
        }

        $objetoIluminado = $this->objetoIluminadoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/objetoIluminados.singular')]));

        return redirect(route('objetoIluminados.index'));
    }

    /**
     * Remove the specified objeto_iluminado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $objetoIluminado = $this->objetoIluminadoRepository->find($id);

        if (empty($objetoIluminado)) {
            Flash::error(__('messages.not_found', ['model' => __('models/objetoIluminados.singular')]));

            return redirect(route('objetoIluminados.index'));
        }

        $this->objetoIluminadoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/objetoIluminados.singular')]));

        return redirect(route('objetoIluminados.index'));
    }
}
