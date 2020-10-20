<?php

namespace App\Http\Controllers;

use App\DataTables\raDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateraRequest;
use App\Http\Requests\UpdateraRequest;
use App\Repositories\raRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class raController extends AppBaseController
{
    /** @var  raRepository */
    private $raRepository;

    public function __construct(raRepository $raRepo)
    {
        $this->raRepository = $raRepo;
    }

    /**
     * Display a listing of the ra.
     *
     * @param raDataTable $raDataTable
     * @return Response
     */
    public function index(raDataTable $raDataTable)
    {
        return $raDataTable->render('ras.index');
    }

    /**
     * Show the form for creating a new ra.
     *
     * @return Response
     */
    public function create()
    {
        return view('ras.create');
    }

    /**
     * Store a newly created ra in storage.
     *
     * @param CreateraRequest $request
     *
     * @return Response
     */
    public function store(CreateraRequest $request)
    {
        $input = $request->all();

        $ra = $this->raRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ras.singular')]));

        return redirect(route('ras.index'));
    }

    /**
     * Display the specified ra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ra = $this->raRepository->find($id);

        if (empty($ra)) {
            Flash::error(__('models/ras.singular').' '.__('messages.not_found'));

            return redirect(route('ras.index'));
        }

        return view('ras.show')->with('ra', $ra);
    }

    /**
     * Show the form for editing the specified ra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ra = $this->raRepository->find($id);

        if (empty($ra)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ras.singular')]));

            return redirect(route('ras.index'));
        }

        return view('ras.edit')->with('ra', $ra);
    }

    /**
     * Update the specified ra in storage.
     *
     * @param  int              $id
     * @param UpdateraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateraRequest $request)
    {
        $ra = $this->raRepository->find($id);

        if (empty($ra)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ras.singular')]));

            return redirect(route('ras.index'));
        }

        $ra = $this->raRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ras.singular')]));

        return redirect(route('ras.index'));
    }

    /**
     * Remove the specified ra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ra = $this->raRepository->find($id);

        if (empty($ra)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ras.singular')]));

            return redirect(route('ras.index'));
        }

        $this->raRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ras.singular')]));

        return redirect(route('ras.index'));
    }
}
