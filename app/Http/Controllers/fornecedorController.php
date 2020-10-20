<?php

namespace App\Http\Controllers;

use App\DataTables\fornecedorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatefornecedorRequest;
use App\Http\Requests\UpdatefornecedorRequest;
use App\Repositories\fornecedorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class fornecedorController extends AppBaseController
{
    /** @var  fornecedorRepository */
    private $fornecedorRepository;

    public function __construct(fornecedorRepository $fornecedorRepo)
    {
        $this->fornecedorRepository = $fornecedorRepo;
    }

    /**
     * Display a listing of the fornecedor.
     *
     * @param fornecedorDataTable $fornecedorDataTable
     * @return Response
     */
    public function index(fornecedorDataTable $fornecedorDataTable)
    {
        return $fornecedorDataTable->render('fornecedors.index');
    }

    /**
     * Show the form for creating a new fornecedor.
     *
     * @return Response
     */
    public function create()
    {
        return view('fornecedors.create');
    }

    /**
     * Store a newly created fornecedor in storage.
     *
     * @param CreatefornecedorRequest $request
     *
     * @return Response
     */
    public function store(CreatefornecedorRequest $request)
    {
        $input = $request->all();

        $fornecedor = $this->fornecedorRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/fornecedors.singular')]));

        return redirect(route('fornecedors.index'));
    }

    /**
     * Display the specified fornecedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('models/fornecedors.singular').' '.__('messages.not_found'));

            return redirect(route('fornecedors.index'));
        }

        return view('fornecedors.show')->with('fornecedor', $fornecedor);
    }

    /**
     * Show the form for editing the specified fornecedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fornecedors.singular')]));

            return redirect(route('fornecedors.index'));
        }

        return view('fornecedors.edit')->with('fornecedor', $fornecedor);
    }

    /**
     * Update the specified fornecedor in storage.
     *
     * @param  int              $id
     * @param UpdatefornecedorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefornecedorRequest $request)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fornecedors.singular')]));

            return redirect(route('fornecedors.index'));
        }

        $fornecedor = $this->fornecedorRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/fornecedors.singular')]));

        return redirect(route('fornecedors.index'));
    }

    /**
     * Remove the specified fornecedor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fornecedor = $this->fornecedorRepository->find($id);

        if (empty($fornecedor)) {
            Flash::error(__('messages.not_found', ['model' => __('models/fornecedors.singular')]));

            return redirect(route('fornecedors.index'));
        }

        $this->fornecedorRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/fornecedors.singular')]));

        return redirect(route('fornecedors.index'));
    }
}
