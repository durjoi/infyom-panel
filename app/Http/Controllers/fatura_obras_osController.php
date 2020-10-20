<?php

namespace App\Http\Controllers;

use App\DataTables\fatura_obras_osDataTable;
use App\Http\Requests;
use App\Http\Requests\Createfatura_obras_osRequest;
use App\Http\Requests\Updatefatura_obras_osRequest;
use App\Repositories\fatura_obras_osRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class fatura_obras_osController extends AppBaseController
{
    /** @var  fatura_obras_osRepository */
    private $faturaObrasOsRepository;

    public function __construct(fatura_obras_osRepository $faturaObrasOsRepo)
    {
        $this->faturaObrasOsRepository = $faturaObrasOsRepo;
    }

    /**
     * Display a listing of the fatura_obras_os.
     *
     * @param fatura_obras_osDataTable $faturaObrasOsDataTable
     * @return Response
     */
    public function index(fatura_obras_osDataTable $faturaObrasOsDataTable)
    {
        return $faturaObrasOsDataTable->render('fatura_obras_os.index');
    }

    /**
     * Show the form for creating a new fatura_obras_os.
     *
     * @return Response
     */
    public function create()
    {
        return view('fatura_obras_os.create');
    }

    /**
     * Store a newly created fatura_obras_os in storage.
     *
     * @param Createfatura_obras_osRequest $request
     *
     * @return Response
     */
    public function store(Createfatura_obras_osRequest $request)
    {
        $input = $request->all();

        $faturaObrasOs = $this->faturaObrasOsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faturaObrasOs.singular')]));

        return redirect(route('faturaObrasOs.index'));
    }

    /**
     * Display the specified fatura_obras_os.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faturaObrasOs = $this->faturaObrasOsRepository->find($id);

        if (empty($faturaObrasOs)) {
            Flash::error(__('models/faturaObrasOs.singular').' '.__('messages.not_found'));

            return redirect(route('faturaObrasOs.index'));
        }

        return view('fatura_obras_os.show')->with('faturaObrasOs', $faturaObrasOs);
    }

    /**
     * Show the form for editing the specified fatura_obras_os.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faturaObrasOs = $this->faturaObrasOsRepository->find($id);

        if (empty($faturaObrasOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaObrasOs.singular')]));

            return redirect(route('faturaObrasOs.index'));
        }

        return view('fatura_obras_os.edit')->with('faturaObrasOs', $faturaObrasOs);
    }

    /**
     * Update the specified fatura_obras_os in storage.
     *
     * @param  int              $id
     * @param Updatefatura_obras_osRequest $request
     *
     * @return Response
     */
    public function update($id, Updatefatura_obras_osRequest $request)
    {
        $faturaObrasOs = $this->faturaObrasOsRepository->find($id);

        if (empty($faturaObrasOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaObrasOs.singular')]));

            return redirect(route('faturaObrasOs.index'));
        }

        $faturaObrasOs = $this->faturaObrasOsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faturaObrasOs.singular')]));

        return redirect(route('faturaObrasOs.index'));
    }

    /**
     * Remove the specified fatura_obras_os from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faturaObrasOs = $this->faturaObrasOsRepository->find($id);

        if (empty($faturaObrasOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaObrasOs.singular')]));

            return redirect(route('faturaObrasOs.index'));
        }

        $this->faturaObrasOsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faturaObrasOs.singular')]));

        return redirect(route('faturaObrasOs.index'));
    }
}
