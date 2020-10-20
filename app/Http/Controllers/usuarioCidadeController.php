<?php

namespace App\Http\Controllers;

use App\DataTables\usuarioCidadeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateusuarioCidadeRequest;
use App\Http\Requests\UpdateusuarioCidadeRequest;
use App\Repositories\usuarioCidadeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class usuarioCidadeController extends AppBaseController
{
    /** @var  usuarioCidadeRepository */
    private $usuarioCidadeRepository;

    public function __construct(usuarioCidadeRepository $usuarioCidadeRepo)
    {
        $this->usuarioCidadeRepository = $usuarioCidadeRepo;
    }

    /**
     * Display a listing of the usuarioCidade.
     *
     * @param usuarioCidadeDataTable $usuarioCidadeDataTable
     * @return Response
     */
    public function index(usuarioCidadeDataTable $usuarioCidadeDataTable)
    {
        return $usuarioCidadeDataTable->render('usuario_cidades.index');
    }

    /**
     * Show the form for creating a new usuarioCidade.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuario_cidades.create');
    }

    /**
     * Store a newly created usuarioCidade in storage.
     *
     * @param CreateusuarioCidadeRequest $request
     *
     * @return Response
     */
    public function store(CreateusuarioCidadeRequest $request)
    {
        $input = $request->all();

        $usuarioCidade = $this->usuarioCidadeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/usuarioCidades.singular')]));

        return redirect(route('usuarioCidades.index'));
    }

    /**
     * Display the specified usuarioCidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarioCidade = $this->usuarioCidadeRepository->find($id);

        if (empty($usuarioCidade)) {
            Flash::error(__('models/usuarioCidades.singular').' '.__('messages.not_found'));

            return redirect(route('usuarioCidades.index'));
        }

        return view('usuario_cidades.show')->with('usuarioCidade', $usuarioCidade);
    }

    /**
     * Show the form for editing the specified usuarioCidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarioCidade = $this->usuarioCidadeRepository->find($id);

        if (empty($usuarioCidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/usuarioCidades.singular')]));

            return redirect(route('usuarioCidades.index'));
        }

        return view('usuario_cidades.edit')->with('usuarioCidade', $usuarioCidade);
    }

    /**
     * Update the specified usuarioCidade in storage.
     *
     * @param  int              $id
     * @param UpdateusuarioCidadeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateusuarioCidadeRequest $request)
    {
        $usuarioCidade = $this->usuarioCidadeRepository->find($id);

        if (empty($usuarioCidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/usuarioCidades.singular')]));

            return redirect(route('usuarioCidades.index'));
        }

        $usuarioCidade = $this->usuarioCidadeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/usuarioCidades.singular')]));

        return redirect(route('usuarioCidades.index'));
    }

    /**
     * Remove the specified usuarioCidade from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarioCidade = $this->usuarioCidadeRepository->find($id);

        if (empty($usuarioCidade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/usuarioCidades.singular')]));

            return redirect(route('usuarioCidades.index'));
        }

        $this->usuarioCidadeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/usuarioCidades.singular')]));

        return redirect(route('usuarioCidades.index'));
    }
}
