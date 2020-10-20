<?php

namespace App\Http\Controllers;

use App\DataTables\ipcontaip_11DataTable;
use App\Http\Requests;
use App\Http\Requests\Createipcontaip_11Request;
use App\Http\Requests\Updateipcontaip_11Request;
use App\Repositories\ipcontaip_11Repository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ipcontaip_11Controller extends AppBaseController
{
    /** @var  ipcontaip_11Repository */
    private $ipcontaip11Repository;

    public function __construct(ipcontaip_11Repository $ipcontaip11Repo)
    {
        $this->ipcontaip11Repository = $ipcontaip11Repo;
    }

    /**
     * Display a listing of the ipcontaip_11.
     *
     * @param ipcontaip_11DataTable $ipcontaip11DataTable
     * @return Response
     */
    public function index(ipcontaip_11DataTable $ipcontaip11DataTable)
    {
        return $ipcontaip11DataTable->render('ipcontaip_11s.index');
    }

    /**
     * Show the form for creating a new ipcontaip_11.
     *
     * @return Response
     */
    public function create()
    {
        return view('ipcontaip_11s.create');
    }

    /**
     * Store a newly created ipcontaip_11 in storage.
     *
     * @param Createipcontaip_11Request $request
     *
     * @return Response
     */
    public function store(Createipcontaip_11Request $request)
    {
        $input = $request->all();

        $ipcontaip11 = $this->ipcontaip11Repository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/ipcontaip11s.singular')]));

        return redirect(route('ipcontaip11s.index'));
    }

    /**
     * Display the specified ipcontaip_11.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ipcontaip11 = $this->ipcontaip11Repository->find($id);

        if (empty($ipcontaip11)) {
            Flash::error(__('models/ipcontaip11s.singular').' '.__('messages.not_found'));

            return redirect(route('ipcontaip11s.index'));
        }

        return view('ipcontaip_11s.show')->with('ipcontaip11', $ipcontaip11);
    }

    /**
     * Show the form for editing the specified ipcontaip_11.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ipcontaip11 = $this->ipcontaip11Repository->find($id);

        if (empty($ipcontaip11)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip11s.singular')]));

            return redirect(route('ipcontaip11s.index'));
        }

        return view('ipcontaip_11s.edit')->with('ipcontaip11', $ipcontaip11);
    }

    /**
     * Update the specified ipcontaip_11 in storage.
     *
     * @param  int              $id
     * @param Updateipcontaip_11Request $request
     *
     * @return Response
     */
    public function update($id, Updateipcontaip_11Request $request)
    {
        $ipcontaip11 = $this->ipcontaip11Repository->find($id);

        if (empty($ipcontaip11)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip11s.singular')]));

            return redirect(route('ipcontaip11s.index'));
        }

        $ipcontaip11 = $this->ipcontaip11Repository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/ipcontaip11s.singular')]));

        return redirect(route('ipcontaip11s.index'));
    }

    /**
     * Remove the specified ipcontaip_11 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ipcontaip11 = $this->ipcontaip11Repository->find($id);

        if (empty($ipcontaip11)) {
            Flash::error(__('messages.not_found', ['model' => __('models/ipcontaip11s.singular')]));

            return redirect(route('ipcontaip11s.index'));
        }

        $this->ipcontaip11Repository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/ipcontaip11s.singular')]));

        return redirect(route('ipcontaip11s.index'));
    }
}
