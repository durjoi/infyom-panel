<?php

namespace App\Http\Controllers;

use App\DataTables\itemDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateitemRequest;
use App\Http\Requests\UpdateitemRequest;
use App\Repositories\itemRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class itemController extends AppBaseController
{
    /** @var  itemRepository */
    private $itemRepository;

    public function __construct(itemRepository $itemRepo)
    {
        $this->itemRepository = $itemRepo;
    }

    /**
     * Display a listing of the item.
     *
     * @param itemDataTable $itemDataTable
     * @return Response
     */
    public function index(itemDataTable $itemDataTable)
    {
        return $itemDataTable->render('items.index');
    }

    /**
     * Show the form for creating a new item.
     *
     * @return Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created item in storage.
     *
     * @param CreateitemRequest $request
     *
     * @return Response
     */
    public function store(CreateitemRequest $request)
    {
        $input = $request->all();

        $item = $this->itemRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/items.singular')]));

        return redirect(route('items.index'));
    }

    /**
     * Display the specified item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error(__('models/items.singular').' '.__('messages.not_found'));

            return redirect(route('items.index'));
        }

        return view('items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error(__('messages.not_found', ['model' => __('models/items.singular')]));

            return redirect(route('items.index'));
        }

        return view('items.edit')->with('item', $item);
    }

    /**
     * Update the specified item in storage.
     *
     * @param  int              $id
     * @param UpdateitemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateitemRequest $request)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error(__('messages.not_found', ['model' => __('models/items.singular')]));

            return redirect(route('items.index'));
        }

        $item = $this->itemRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/items.singular')]));

        return redirect(route('items.index'));
    }

    /**
     * Remove the specified item from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error(__('messages.not_found', ['model' => __('models/items.singular')]));

            return redirect(route('items.index'));
        }

        $this->itemRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/items.singular')]));

        return redirect(route('items.index'));
    }
}
