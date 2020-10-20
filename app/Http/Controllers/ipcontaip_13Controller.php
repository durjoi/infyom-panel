<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_13DataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_13Request;
use App\Http\Requests\Updateipcontaip_13Request;
use App\Repositories\ipcontaip_13Repository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_13Controller extends AppBaseController
{
    /** @var  ipcontaip_13Repository */
    private $ipcontaip13Repository;

    public function __construct(ipcontaip_13Repository $ipcontaip13Repo)
    {
        $this->ipcontaip13Repository = $ipcontaip13Repo;
    }

    /**
     * Display a listing of the ipcontaip_13.
     *
     * @param ipcontaip_13DataTable $ipcontaip13DataTable
     * @return Response
     */
    public function index(ipcontaip_13DataTable $ipcontaip13DataTable)
    {
        return $ipcontaip13DataTable->render('ipcontaip_13s.index');
    }

    /**
     * Show the form for creating a new ipcontaip_13.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_13s.create');
    }

    /**
     * Store a newly created ipcontaip_13 in storage.
     *
     * @param Createipcontaip_13Request $request
     *
     * @return Response
     */
    public function store(Createipcontaip_13Request $request)
    {
        $input = $request->all();

        $ipcontaip13 = $this->ipcontaip13Repository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaip13s.singular')]));

        return redirect(route('ipcontaip13s.index'));
    }

    /**
     * Display the specified ipcontaip_13.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaip13 = $this->ipcontaip13Repository->find($id);

        if (empty($ipcontaip13)) {
            Flash::error(__('models/ipcontaip13s.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaip13s.index'));
        }

        return view('ipcontaip_13s.show')->with('ipcontaip13', $ipcontaip13);
    }

    /**
     * Show the form for editing the specified ipcontaip_13.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaip13 = $this->ipcontaip13Repository->find($id);

        if (empty($ipcontaip13)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip13s.singular')]));

            return redirect(route('ipcontaip13s.index'));
        }

        return view('ipcontaip_13s.edit')->with('ipcontaip13', $ipcontaip13);
    }

    /**
     * Update the specified ipcontaip_13 in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_13Request $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_13Request $request)
    {
        $ipcontaip13 = $this->ipcontaip13Repository->find($id);

        if (empty($ipcontaip13)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip13s.singular')]));

            return redirect(route('ipcontaip13s.index'));
        }

        $ipcontaip13 = $this->ipcontaip13Repository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaip13s.singular')]));

        return redirect(route('ipcontaip13s.index'));
    }

    /**
     * Remove the specified ipcontaip_13 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaip13 = $this->ipcontaip13Repository->find($id);

        if (empty($ipcontaip13)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip13s.singular')]));

            return redirect(route('ipcontaip13s.index'));
        }

        $this->ipcontaip13Repository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaip13s.singular')]));

        return redirect(route('ipcontaip13s.index'));
    }
}
