<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_14DataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_14Request;
use App\Http\Requests\Updateipcontaip_14Request;
use App\Repositories\ipcontaip_14Repository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_14Controller extends AppBaseController
{
    /** @var  ipcontaip_14Repository */
    private $ipcontaip14Repository;

    public function __construct(ipcontaip_14Repository $ipcontaip14Repo)
    {
        $this->ipcontaip14Repository = $ipcontaip14Repo;
    }

    /**
     * Display a listing of the ipcontaip_14.
     *
     * @param ipcontaip_14DataTable $ipcontaip14DataTable
     * @return Response
     */
    public function index(ipcontaip_14DataTable $ipcontaip14DataTable)
    {
        return $ipcontaip14DataTable->render('ipcontaip_14s.index');
    }

    /**
     * Show the form for creating a new ipcontaip_14.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_14s.create');
    }

    /**
     * Store a newly created ipcontaip_14 in storage.
     *
     * @param Createipcontaip_14Request $request
     *
     * @return Response
     */
    public function store(Createipcontaip_14Request $request)
    {
        $input = $request->all();

        $ipcontaip14 = $this->ipcontaip14Repository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaip14s.singular')]));

        return redirect(route('ipcontaip14s.index'));
    }

    /**
     * Display the specified ipcontaip_14.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaip14 = $this->ipcontaip14Repository->find($id);

        if (empty($ipcontaip14)) {
            Flash::error(__('models/ipcontaip14s.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaip14s.index'));
        }

        return view('ipcontaip_14s.show')->with('ipcontaip14', $ipcontaip14);
    }

    /**
     * Show the form for editing the specified ipcontaip_14.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaip14 = $this->ipcontaip14Repository->find($id);

        if (empty($ipcontaip14)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip14s.singular')]));

            return redirect(route('ipcontaip14s.index'));
        }

        return view('ipcontaip_14s.edit')->with('ipcontaip14', $ipcontaip14);
    }

    /**
     * Update the specified ipcontaip_14 in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_14Request $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_14Request $request)
    {
        $ipcontaip14 = $this->ipcontaip14Repository->find($id);

        if (empty($ipcontaip14)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip14s.singular')]));

            return redirect(route('ipcontaip14s.index'));
        }

        $ipcontaip14 = $this->ipcontaip14Repository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaip14s.singular')]));

        return redirect(route('ipcontaip14s.index'));
    }

    /**
     * Remove the specified ipcontaip_14 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaip14 = $this->ipcontaip14Repository->find($id);

        if (empty($ipcontaip14)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip14s.singular')]));

            return redirect(route('ipcontaip14s.index'));
        }

        $this->ipcontaip14Repository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaip14s.singular')]));

        return redirect(route('ipcontaip14s.index'));
    }
}
