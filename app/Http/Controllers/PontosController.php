<?php

namespace App\Http\Controllers;

use App\DataTables\PontosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePontosRequest;
use App\Http\Requests\UpdatePontosRequest;
use App\Repositories\PontosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PontosController extends AppBaseController
{
    /** @var  PontosRepository */
    private $pontosRepository;

    public function __construct(PontosRepository $pontosRepo)
    {
        $this->pontosRepository = $pontosRepo;
    }

    /**
     * Display a listing of the Pontos.
     *
     * @param PontosDataTable $pontosDataTable
     * @return Response
     */
    public function index(PontosDataTable $pontosDataTable)
    {
        return $pontosDataTable->render('pontos.index');
    }

    /**
     * Show the form for creating a new Pontos.
     *
     * @return Response
     */
    public function create()
    {
        return view('pontos.create');
    }

    /**
     * Store a newly created Pontos in storage.
     *
     * @param CreatePontosRequest $request
     *
     * @return Response
     */
    public function store(CreatePontosRequest $request)
    {
        $input = $request->all();

        $pontos = $this->pontosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/pontos.singular')]));

        return redirect(route('pontos.index'));
    }

    /**
     * Display the specified Pontos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pontos = $this->pontosRepository->find($id);

        if (empty($pontos)) {
            Flash::error(__('models/pontos.singular').' '.__('messages.not_found'));

            return redirect(route('pontos.index'));
        }

        return view('pontos.show')->with('pontos', $pontos);
    }

    /**
     * Show the form for editing the specified Pontos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pontos = $this->pontosRepository->find($id);

        if (empty($pontos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pontos.singular')]));

            return redirect(route('pontos.index'));
        }

        return view('pontos.edit')->with('pontos', $pontos);
    }

    /**
     * Update the specified Pontos in storage.
     *
     * @param  int              $id
     * @param UpdatePontosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePontosRequest $request)
    {
        $pontos = $this->pontosRepository->find($id);

        if (empty($pontos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pontos.singular')]));

            return redirect(route('pontos.index'));
        }

        $pontos = $this->pontosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/pontos.singular')]));

        return redirect(route('pontos.index'));
    }

    /**
     * Remove the specified Pontos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pontos = $this->pontosRepository->find($id);

        if (empty($pontos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pontos.singular')]));

            return redirect(route('pontos.index'));
        }

        $this->pontosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pontos.singular')]));

        return redirect(route('pontos.index'));
    }
}
