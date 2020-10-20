<?php

namespace App\Http\Controllers;

use App\DataTables\obrasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateobrasRequest;
use App\Http\Requests\UpdateobrasRequest;
use App\Repositories\obrasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class obrasController extends AppBaseController
{
    /** @var  obrasRepository */
    private $obrasRepository;

    public function __construct(obrasRepository $obrasRepo)
    {
        $this->obrasRepository = $obrasRepo;
    }

    /**
     * Display a listing of the obras.
     *
     * @param obrasDataTable $obrasDataTable
     * @return Response
     */
    public function index(obrasDataTable $obrasDataTable)
    {
        return $obrasDataTable->render('obras.index');
    }

    /**
     * Show the form for creating a new obras.
     *
     * @return Response
     */
    public function create()
    {
        return view('obras.create');
    }

    /**
     * Store a newly created obras in storage.
     *
     * @param CreateobrasRequest $request
     *
     * @return Response
     */
    public function store(CreateobrasRequest $request)
    {
        $input = $request->all();

        $obras = $this->obrasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/obras.singular')]));

        return redirect(route('obras.index'));
    }

    /**
     * Display the specified obras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $obras = $this->obrasRepository->find($id);

        if (empty($obras)) {
            Flash::error(__('models/obras.singular').' '.__('messages.not_found'));

            return redirect(route('obras.index'));
        }

        return view('obras.show')->with('obras', $obras);
    }

    /**
     * Show the form for editing the specified obras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $obras = $this->obrasRepository->find($id);

        if (empty($obras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obras.singular')]));

            return redirect(route('obras.index'));
        }

        return view('obras.edit')->with('obras', $obras);
    }

    /**
     * Update the specified obras in storage.
     *
     * @param  int              $id
     * @param UpdateobrasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateobrasRequest $request)
    {
        $obras = $this->obrasRepository->find($id);

        if (empty($obras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obras.singular')]));

            return redirect(route('obras.index'));
        }

        $obras = $this->obrasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/obras.singular')]));

        return redirect(route('obras.index'));
    }

    /**
     * Remove the specified obras from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $obras = $this->obrasRepository->find($id);

        if (empty($obras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/obras.singular')]));

            return redirect(route('obras.index'));
        }

        $this->obrasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/obras.singular')]));

        return redirect(route('obras.index'));
    }
}
