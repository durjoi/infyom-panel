<?php

namespace App\Http\Controllers;

use App\DataTables\logradouroDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatelogradouroRequest;
use App\Http\Requests\UpdatelogradouroRequest;
use App\Repositories\logradouroRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class logradouroController extends AppBaseController
{
    /** @var  logradouroRepository */
    private $logradouroRepository;

    public function __construct(logradouroRepository $logradouroRepo)
    {
        $this->logradouroRepository = $logradouroRepo;
    }

    /**
     * Display a listing of the logradouro.
     *
     * @param logradouroDataTable $logradouroDataTable
     * @return Response
     */
    public function index(logradouroDataTable $logradouroDataTable)
    {
        return $logradouroDataTable->render('logradouros.index');
    }

    /**
     * Show the form for creating a new logradouro.
     *
     * @return Response
     */
    public function create()
    {
        return view('logradouros.create');
    }

    /**
     * Store a newly created logradouro in storage.
     *
     * @param CreatelogradouroRequest $request
     *
     * @return Response
     */
    public function store(CreatelogradouroRequest $request)
    {
        $input = $request->all();

        $logradouro = $this->logradouroRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/logradouros.singular')]));

        return redirect(route('logradouros.index'));
    }

    /**
     * Display the specified logradouro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $logradouro = $this->logradouroRepository->find($id);

        if (empty($logradouro)) {
            Flash::error(__('models/logradouros.singular').' '.__('messages.not_found'));

            return redirect(route('logradouros.index'));
        }

        return view('logradouros.show')->with('logradouro', $logradouro);
    }

    /**
     * Show the form for editing the specified logradouro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $logradouro = $this->logradouroRepository->find($id);

        if (empty($logradouro)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logradouros.singular')]));

            return redirect(route('logradouros.index'));
        }

        return view('logradouros.edit')->with('logradouro', $logradouro);
    }

    /**
     * Update the specified logradouro in storage.
     *
     * @param  int              $id
     * @param UpdatelogradouroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelogradouroRequest $request)
    {
        $logradouro = $this->logradouroRepository->find($id);

        if (empty($logradouro)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logradouros.singular')]));

            return redirect(route('logradouros.index'));
        }

        $logradouro = $this->logradouroRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/logradouros.singular')]));

        return redirect(route('logradouros.index'));
    }

    /**
     * Remove the specified logradouro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $logradouro = $this->logradouroRepository->find($id);

        if (empty($logradouro)) {
            Flash::error(__('messages.not_found', ['model' => __('models/logradouros.singular')]));

            return redirect(route('logradouros.index'));
        }

        $this->logradouroRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/logradouros.singular')]));

        return redirect(route('logradouros.index'));
    }
}
