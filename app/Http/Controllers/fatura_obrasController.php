<?php

namespace App\Http\Controllers;

use App\DataTables\fatura_obrasDataTable;
use App\Http\Requests;
use App\Http\Requests\Createfatura_obrasRequest;
use App\Http\Requests\Updatefatura_obrasRequest;
use App\Repositories\fatura_obrasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class fatura_obrasController extends AppBaseController
{
    /** @var  fatura_obrasRepository */
    private $faturaObrasRepository;

    public function __construct(fatura_obrasRepository $faturaObrasRepo)
    {
        $this->faturaObrasRepository = $faturaObrasRepo;
    }

    /**
     * Display a listing of the fatura_obras.
     *
     * @param fatura_obrasDataTable $faturaObrasDataTable
     * @return Response
     */
    public function index(fatura_obrasDataTable $faturaObrasDataTable)
    {
        return $faturaObrasDataTable->render('fatura_obras.index');
    }

    /**
     * Show the form for creating a new fatura_obras.
     *
     * @return Response
     */
    public function create()
    {
        return view('fatura_obras.create');
    }

    /**
     * Store a newly created fatura_obras in storage.
     *
     * @param Createfatura_obrasRequest $request
     *
     * @return Response
     */
    public function store(Createfatura_obrasRequest $request)
    {
        $input = $request->all();

        $faturaObras = $this->faturaObrasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faturaObras.singular')]));

        return redirect(route('faturaObras.index'));
    }

    /**
     * Display the specified fatura_obras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faturaObras = $this->faturaObrasRepository->find($id);

        if (empty($faturaObras)) {
            Flash::error(__('models/faturaObras.singular').' '.__('messages.not_found'));

            return redirect(route('faturaObras.index'));
        }

        return view('fatura_obras.show')->with('faturaObras', $faturaObras);
    }

    /**
     * Show the form for editing the specified fatura_obras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faturaObras = $this->faturaObrasRepository->find($id);

        if (empty($faturaObras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaObras.singular')]));

            return redirect(route('faturaObras.index'));
        }

        return view('fatura_obras.edit')->with('faturaObras', $faturaObras);
    }

    /**
     * Update the specified fatura_obras in storage.
     *
     * @param  int              $id
     * @param Updatefatura_obrasRequest $request
     *
     * @return Response
     */
    public function update($id, Updatefatura_obrasRequest $request)
    {
        $faturaObras = $this->faturaObrasRepository->find($id);

        if (empty($faturaObras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaObras.singular')]));

            return redirect(route('faturaObras.index'));
        }

        $faturaObras = $this->faturaObrasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faturaObras.singular')]));

        return redirect(route('faturaObras.index'));
    }

    /**
     * Remove the specified fatura_obras from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faturaObras = $this->faturaObrasRepository->find($id);

        if (empty($faturaObras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faturaObras.singular')]));

            return redirect(route('faturaObras.index'));
        }

        $this->faturaObrasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faturaObras.singular')]));

        return redirect(route('faturaObras.index'));
    }
}
