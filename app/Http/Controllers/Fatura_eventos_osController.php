<?php

namespace App\Http\Controllers;

use App\DataTables\Fatura_eventos_osDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFatura_eventos_osRequest;
use App\Http\Requests\UpdateFatura_eventos_osRequest;
use App\Repositories\Fatura_eventos_osRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Fatura_eventos_osController extends AppBaseController
{
    /** @var  Fatura_eventos_osRepository */
    private $faturaEventosOsRepository;

    public function __construct(Fatura_eventos_osRepository $faturaEventosOsRepo)
    {
        $this->faturaEventosOsRepository = $faturaEventosOsRepo;
    }

    /**
     * Display a listing of the Fatura_eventos_os.
     *
     * @param Fatura_eventos_osDataTable $faturaEventosOsDataTable
     * @return Response
     */
    public function index(Fatura_eventos_osDataTable $faturaEventosOsDataTable)
    {
        return $faturaEventosOsDataTable->render('fatura_eventos_os.index');
    }

    /**
     * Show the form for creating a new Fatura_eventos_os.
     *
     * @return Response
     */
    public function create()
    {
        return view('fatura_eventos_os.create');
    }

    /**
     * Store a newly created Fatura_eventos_os in storage.
     *
     * @param CreateFatura_eventos_osRequest $request
     *
     * @return Response
     */
    public function store(CreateFatura_eventos_osRequest $request)
    {
        $input = $request->all();

        $faturaEventosOs = $this->faturaEventosOsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faturaEventosOs.singular')]));

        return redirect(route('faturaEventosOs.index'));
    }

    /**
     * Display the specified Fatura_eventos_os.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faturaEventosOs = $this->faturaEventosOsRepository->find($id);

        if (empty($faturaEventosOs)) {
            Flash::error(__('models/faturaEventosOs.singular').' '.__('messages.not_found'));

            return redirect(route('faturaEventosOs.index'));
        }

        return view('fatura_eventos_os.show')->with('faturaEventosOs', $faturaEventosOs);
    }

    /**
     * Show the form for editing the specified Fatura_eventos_os.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faturaEventosOs = $this->faturaEventosOsRepository->find($id);

        if (empty($faturaEventosOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventosOs.singular')]));

            return redirect(route('faturaEventosOs.index'));
        }

        return view('fatura_eventos_os.edit')->with('faturaEventosOs', $faturaEventosOs);
    }

    /**
     * Update the specified Fatura_eventos_os in storage.
     *
     * @param  int              $id
     * @param UpdateFatura_eventos_osRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFatura_eventos_osRequest $request)
    {
        $faturaEventosOs = $this->faturaEventosOsRepository->find($id);

        if (empty($faturaEventosOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventosOs.singular')]));

            return redirect(route('faturaEventosOs.index'));
        }

        $faturaEventosOs = $this->faturaEventosOsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faturaEventosOs.singular')]));

        return redirect(route('faturaEventosOs.index'));
    }

    /**
     * Remove the specified Fatura_eventos_os from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faturaEventosOs = $this->faturaEventosOsRepository->find($id);

        if (empty($faturaEventosOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaEventosOs.singular')]));

            return redirect(route('faturaEventosOs.index'));
        }

        $this->faturaEventosOsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faturaEventosOs.singular')]));

        return redirect(route('faturaEventosOs.index'));
    }
}
