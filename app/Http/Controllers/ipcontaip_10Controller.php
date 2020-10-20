<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_10DataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_10Request;
use App\Http\Requests\Updateipcontaip_10Request;
use App\Repositories\ipcontaip_10Repository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_10Controller extends AppBaseController
{
    /** @var  ipcontaip_10Repository */
    private $ipcontaip10Repository;

    public function __construct(ipcontaip_10Repository $ipcontaip10Repo)
    {
        $this->ipcontaip10Repository = $ipcontaip10Repo;
    }

    /**
     * Display a listing of the ipcontaip_10.
     *
     * @param ipcontaip_10DataTable $ipcontaip10DataTable
     * @return Response
     */
    public function index(ipcontaip_10DataTable $ipcontaip10DataTable)
    {
        return $ipcontaip10DataTable->render('ipcontaip_10s.index');
    }

    /**
     * Show the form for creating a new ipcontaip_10.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_10s.create');
    }

    /**
     * Store a newly created ipcontaip_10 in storage.
     *
     * @param Createipcontaip_10Request $request
     *
     * @return Response
     */
    public function store(Createipcontaip_10Request $request)
    {
        $input = $request->all();

        $ipcontaip10 = $this->ipcontaip10Repository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaip10s.singular')]));

        return redirect(route('ipcontaip10s.index'));
    }

    /**
     * Display the specified ipcontaip_10.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaip10 = $this->ipcontaip10Repository->find($id);

        if (empty($ipcontaip10)) {
            Flash::error(__('models/ipcontaip10s.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaip10s.index'));
        }

        return view('ipcontaip_10s.show')->with('ipcontaip10', $ipcontaip10);
    }

    /**
     * Show the form for editing the specified ipcontaip_10.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaip10 = $this->ipcontaip10Repository->find($id);

        if (empty($ipcontaip10)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip10s.singular')]));

            return redirect(route('ipcontaip10s.index'));
        }

        return view('ipcontaip_10s.edit')->with('ipcontaip10', $ipcontaip10);
    }

    /**
     * Update the specified ipcontaip_10 in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_10Request $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_10Request $request)
    {
        $ipcontaip10 = $this->ipcontaip10Repository->find($id);

        if (empty($ipcontaip10)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip10s.singular')]));

            return redirect(route('ipcontaip10s.index'));
        }

        $ipcontaip10 = $this->ipcontaip10Repository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaip10s.singular')]));

        return redirect(route('ipcontaip10s.index'));
    }

    /**
     * Remove the specified ipcontaip_10 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaip10 = $this->ipcontaip10Repository->find($id);

        if (empty($ipcontaip10)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip10s.singular')]));

            return redirect(route('ipcontaip10s.index'));
        }

        $this->ipcontaip10Repository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaip10s.singular')]));

        return redirect(route('ipcontaip10s.index'));
    }
}
