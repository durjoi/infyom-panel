<?php

namespace App\Http\Controllers;

use App\DataTables\usuario_cidadeDataTable;
use App\Http\Requests;
use App\Http\Requests\Createusuario_cidadeRequest;
use App\Http\Requests\Updateusuario_cidadeRequest;
use App\Repositories\usuario_cidadeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class usuario_cidadeController extends AppBaseController
{
    /** @var  usuario_cidadeRepository */
    private $usuarioCidadeRepository;

    public function __construct(usuario_cidadeRepository $usuarioCidadeRepo)
    {
        $this->usuarioCidadeRepository = $usuarioCidadeRepo;
    }

    /**
     * Display a listing of the usuario_cidade.
     *
     * @param usuario_cidadeDataTable $usuarioCidadeDataTable
     * @return Response
     */
    public function index(usuario_cidadeDataTable $usuarioCidadeDataTable)
    {
        return $usuarioCidadeDataTable->render('usuario_cidades.index');
    }

    /**
     * Show the form for creating a new usuario_cidade.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuario_cidades.create');
    }

    /**
     * Store a newly created usuario_cidade in storage.
     *
     * @param Createusuario_cidadeRequest $request
     *
     * @return Response
     */
    public function store(Createusuario_cidadeRequest $request)
    {
        $input = $request->all();

        $usuarioCidade = $this->usuarioCidadeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/usuarioCidades.singular')]));

        return redirect(route('usuarioCidades.index'));
    }

    /**
     * Display the specified usuario_cidade.
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
     * Show the form for editing the specified usuario_cidade.
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
     * Update the specified usuario_cidade in storage.
     *
     * @param  int              $id
     * @param Updateusuario_cidadeRequest $request
     *
     * @return Response
     */
    public function update($id, Updateusuario_cidadeRequest $request)
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
     * Remove the specified usuario_cidade from storage.
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
