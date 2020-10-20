<?php

namespace App\Http\Controllers;

use App\DataTables\cidadesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatecidadesRequest;
use App\Http\Requests\UpdatecidadesRequest;
use App\Repositories\cidadesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class cidadesController extends AppBaseController
{
    /** @var  cidadesRepository */
    private $cidadesRepository;

    public function __construct(cidadesRepository $cidadesRepo)
    {
        $this->cidadesRepository = $cidadesRepo;
    }

    /**
     * Display a listing of the cidades.
     *
     * @param cidadesDataTable $cidadesDataTable
     * @return Response
     */
    public function index(cidadesDataTable $cidadesDataTable)
    {
        return $cidadesDataTable->render('cidades.index');
    }

    /**
     * Show the form for creating a new cidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created cidades in storage.
     *
     * @param CreatecidadesRequest $request
     *
     * @return Response
     */
    public function store(CreatecidadesRequest $request)
    {
        $input = $request->all();

        $cidades = $this->cidadesRepository->create($input);

        Flash::success('Cidades saved successfully.');

        return redirect(route('cidades.index'));
    }

    /**
     * Display the specified cidades.
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
     * Show the form for editing the specified cidades.
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
     * Update the specified cidades in storage.
     *
     * @param  int              $id
     * @param UpdatecidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecidadesRequest $request)
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
     * Remove the specified cidades from storage.
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
