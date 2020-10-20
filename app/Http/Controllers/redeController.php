<?php

namespace App\Http\Controllers;

use App\DataTables\redeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateredeRequest;
use App\Http\Requests\UpdateredeRequest;
use App\Repositories\redeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class redeController extends AppBaseController
{
    /** @var  redeRepository */
    private $redeRepository;

    public function __construct(redeRepository $redeRepo)
    {
        $this->redeRepository = $redeRepo;
    }

    /**
     * Display a listing of the rede.
     *
     * @param redeDataTable $redeDataTable
     * @return Response
     */
    public function index(redeDataTable $redeDataTable)
    {
        return $redeDataTable->render('redes.index');
    }

    /**
     * Show the form for creating a new rede.
     *
     * @return Response
     */
    public function create()
    {
        return view('redes.create');
    }

    /**
     * Store a newly created rede in storage.
     *
     * @param CreateredeRequest $request
     *
     * @return Response
     */
    public function store(CreateredeRequest $request)
    {
        $input = $request->all();

        $rede = $this->redeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/redes.singular')]));

        return redirect(route('redes.index'));
    }

    /**
     * Display the specified rede.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rede = $this->redeRepository->find($id);

        if (empty($rede)) {
            Flash::error(__('models/redes.singular').' '.__('messages.not_found'));

            return redirect(route('redes.index'));
        }

        return view('redes.show')->with('rede', $rede);
    }

    /**
     * Show the form for editing the specified rede.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rede = $this->redeRepository->find($id);

        if (empty($rede)) {
            Flash::error(__('messages.not_found', ['model' => __('models/redes.singular')]));

            return redirect(route('redes.index'));
        }

        return view('redes.edit')->with('rede', $rede);
    }

    /**
     * Update the specified rede in storage.
     *
     * @param  int              $id
     * @param UpdateredeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateredeRequest $request)
    {
        $rede = $this->redeRepository->find($id);

        if (empty($rede)) {
            Flash::error(__('messages.not_found', ['model' => __('models/redes.singular')]));

            return redirect(route('redes.index'));
        }

        $rede = $this->redeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/redes.singular')]));

        return redirect(route('redes.index'));
    }

    /**
     * Remove the specified rede from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rede = $this->redeRepository->find($id);

        if (empty($rede)) {
            Flash::error(__('messages.not_found', ['model' => __('models/redes.singular')]));

            return redirect(route('redes.index'));
        }

        $this->redeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/redes.singular')]));

        return redirect(route('redes.index'));
    }
}
