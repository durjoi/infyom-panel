<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_12DataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_12Request;
use App\Http\Requests\Updateipcontaip_12Request;
use App\Repositories\ipcontaip_12Repository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_12Controller extends AppBaseController
{
    /** @var  ipcontaip_12Repository */
    private $ipcontaip12Repository;

    public function __construct(ipcontaip_12Repository $ipcontaip12Repo)
    {
        $this->ipcontaip12Repository = $ipcontaip12Repo;
    }

    /**
     * Display a listing of the ipcontaip_12.
     *
     * @param ipcontaip_12DataTable $ipcontaip12DataTable
     * @return Response
     */
    public function index(ipcontaip_12DataTable $ipcontaip12DataTable)
    {
        return $ipcontaip12DataTable->render('ipcontaip_12s.index');
    }

    /**
     * Show the form for creating a new ipcontaip_12.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_12s.create');
    }

    /**
     * Store a newly created ipcontaip_12 in storage.
     *
     * @param Createipcontaip_12Request $request
     *
     * @return Response
     */
    public function store(Createipcontaip_12Request $request)
    {
        $input = $request->all();

        $ipcontaip12 = $this->ipcontaip12Repository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaip12s.singular')]));

        return redirect(route('ipcontaip12s.index'));
    }

    /**
     * Display the specified ipcontaip_12.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaip12 = $this->ipcontaip12Repository->find($id);

        if (empty($ipcontaip12)) {
            Flash::error(__('models/ipcontaip12s.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaip12s.index'));
        }

        return view('ipcontaip_12s.show')->with('ipcontaip12', $ipcontaip12);
    }

    /**
     * Show the form for editing the specified ipcontaip_12.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaip12 = $this->ipcontaip12Repository->find($id);

        if (empty($ipcontaip12)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip12s.singular')]));

            return redirect(route('ipcontaip12s.index'));
        }

        return view('ipcontaip_12s.edit')->with('ipcontaip12', $ipcontaip12);
    }

    /**
     * Update the specified ipcontaip_12 in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_12Request $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_12Request $request)
    {
        $ipcontaip12 = $this->ipcontaip12Repository->find($id);

        if (empty($ipcontaip12)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip12s.singular')]));

            return redirect(route('ipcontaip12s.index'));
        }

        $ipcontaip12 = $this->ipcontaip12Repository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaip12s.singular')]));

        return redirect(route('ipcontaip12s.index'));
    }

    /**
     * Remove the specified ipcontaip_12 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaip12 = $this->ipcontaip12Repository->find($id);

        if (empty($ipcontaip12)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip12s.singular')]));

            return redirect(route('ipcontaip12s.index'));
        }

        $this->ipcontaip12Repository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaip12s.singular')]));

        return redirect(route('ipcontaip12s.index'));
    }
}
