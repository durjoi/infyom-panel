<?php

namespace App\Http\Controllers;

use App\DataTables\ItensOsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateItensOsRequest;
use App\Http\Requests\UpdateItensOsRequest;
use App\Repositories\ItensOsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ItensOsController extends AppBaseController
{
    /** @var  ItensOsRepository */
    private $itensOsRepository;

    public function __construct(ItensOsRepository $itensOsRepo)
    {
        $this->itensOsRepository = $itensOsRepo;
    }

    /**
     * Display a listing of the ItensOs.
     *
     * @param ItensOsDataTable $itensOsDataTable
     * @return Response
     */
    public function index(ItensOsDataTable $itensOsDataTable)
    {
        return $itensOsDataTable->render('itens_os.index');
    }

    /**
     * Show the form for creating a new ItensOs.
     *
     * @return Response
     */
    public function create()
    {
        return view('itens_os.create');
    }

    /**
     * Store a newly created ItensOs in storage.
     *
     * @param CreateItensOsRequest $request
     *
     * @return Response
     */
    public function store(CreateItensOsRequest $request)
    {
        $input = $request->all();

        $itensOs = $this->itensOsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/itensOs.singular')]));

        return redirect(route('itensOs.index'));
    }

    /**
     * Display the specified ItensOs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itensOs = $this->itensOsRepository->find($id);

        if (empty($itensOs)) {
            Flash::error(__('models/itensOs.singular').' '.__('messages.not_found'));

            return redirect(route('itensOs.index'));
        }

        return view('itens_os.show')->with('itensOs', $itensOs);
    }

    /**
     * Show the form for editing the specified ItensOs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itensOs = $this->itensOsRepository->find($id);

        if (empty($itensOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/itensOs.singular')]));

            return redirect(route('itensOs.index'));
        }

        return view('itens_os.edit')->with('itensOs', $itensOs);
    }

    /**
     * Update the specified ItensOs in storage.
     *
     * @param  int              $id
     * @param UpdateItensOsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItensOsRequest $request)
    {
        $itensOs = $this->itensOsRepository->find($id);

        if (empty($itensOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/itensOs.singular')]));

            return redirect(route('itensOs.index'));
        }

        $itensOs = $this->itensOsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/itensOs.singular')]));

        return redirect(route('itensOs.index'));
    }

    /**
     * Remove the specified ItensOs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itensOs = $this->itensOsRepository->find($id);

        if (empty($itensOs)) {
            Flash::error(__('messages.not_found', ['model' => __('models/itensOs.singular')]));

            return redirect(route('itensOs.index'));
        }

        $this->itensOsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/itensOs.singular')]));

        return redirect(route('itensOs.index'));
    }
}
