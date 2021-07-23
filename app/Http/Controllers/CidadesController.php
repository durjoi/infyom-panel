<?php

namespace App\Http\Controllers;

use App\DataTables\CidadesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCidadesRequest;
use App\Http\Requests\UpdateCidadesRequest;
use App\Repositories\CidadesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CidadesController extends AppBaseController
{
    /** @var  CidadesRepository */
    private $cidadesRepository;

    public function __construct(CidadesRepository $cidadesRepo)
    {
        $this->cidadesRepository = $cidadesRepo;
    }

    /**
     * Display a listing of the Cidades.
     *
     * @param CidadesDataTable $cidadesDataTable
     * @return Response
     */
    public function index(CidadesDataTable $cidadesDataTable)
    {
        return $cidadesDataTable->render('cidades.index');
    }

    /**
     * Show the form for creating a new Cidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created Cidades in storage.
     *
     * @param CreateCidadesRequest $request
     *
     * @return Response
     */
    public function store(CreateCidadesRequest $request)
    {
        $input = $request->all();

        $cidades = $this->cidadesRepository->create($input);

        Flash::success('Cidades saved successfully.');

        return redirect(route('cidades.index'));
    }

    /**
     * Display the specified Cidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cidades = $this->cidadesRepository->find($id);

        if (empty($cidades)) {
            Flash::error('Cidades not found');

            return redirect(route('cidades.index'));
        }

        return view('cidades.show')->with('cidades', $cidades);
    }

    /**
     * Show the form for editing the specified Cidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cidades = $this->cidadesRepository->find($id);

        if (empty($cidades)) {
            Flash::error('Cidades not found');

            return redirect(route('cidades.index'));
        }

        return view('cidades.edit')->with('cidades', $cidades);
    }

    /**
     * Update the specified Cidades in storage.
     *
     * @param  int              $id
     * @param UpdateCidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCidadesRequest $request)
    {
        $cidades = $this->cidadesRepository->find($id);

        if (empty($cidades)) {
            Flash::error('Cidades not found');

            return redirect(route('cidades.index'));
        }

        $cidades = $this->cidadesRepository->update($request->all(), $id);

        Flash::success('Cidades updated successfully.');

        return redirect(route('cidades.index'));
    }

    /**
     * Remove the specified Cidades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cidades = $this->cidadesRepository->find($id);

        if (empty($cidades)) {
            Flash::error('Cidades not found');

            return redirect(route('cidades.index'));
        }

        $this->cidadesRepository->delete($id);

        Flash::success('Cidades deleted successfully.');

        return redirect(route('cidades.index'));
    }
}
