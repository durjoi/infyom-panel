<?php

namespace App\Http\Controllers;

use App\DataTables\iluminacao_publicaDataTable;
use App\Http\Requests;
use App\Http\Requests\Createiluminacao_publicaRequest;
use App\Http\Requests\Updateiluminacao_publicaRequest;
use App\Repositories\iluminacao_publicaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class iluminacao_publicaController extends AppBaseController
{
    /** @var  iluminacao_publicaRepository */
    private $iluminacaoPublicaRepository;

    public function __construct(iluminacao_publicaRepository $iluminacaoPublicaRepo)
    {
        $this->iluminacaoPublicaRepository = $iluminacaoPublicaRepo;
    }

    /**
     * Display a listing of the iluminacao_publica.
     *
     * @param iluminacao_publicaDataTable $iluminacaoPublicaDataTable
     * @return Response
     */
    public function index(iluminacao_publicaDataTable $iluminacaoPublicaDataTable)
    {
        return $iluminacaoPublicaDataTable->render('iluminacao_publicas.index');
    }

    /**
     * Show the form for creating a new iluminacao_publica.
     *
     * @return Response
     */
    public function create()
    {
        return view('iluminacao_publicas.create');
    }

    /**
     * Store a newly created iluminacao_publica in storage.
     *
     * @param Createiluminacao_publicaRequest $request
     *
     * @return Response
     */
    public function store(Createiluminacao_publicaRequest $request)
    {
        $input = $request->all();

        $iluminacaoPublica = $this->iluminacaoPublicaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/iluminacaoPublicas.singular')]));

        return redirect(route('iluminacaoPublicas.index'));
    }

    /**
     * Display the specified iluminacao_publica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $iluminacaoPublica = $this->iluminacaoPublicaRepository->find($id);

        if (empty($iluminacaoPublica)) {
            Flash::error(__('models/iluminacaoPublicas.singular').' '.__('messages.not_found'));

            return redirect(route('iluminacaoPublicas.index'));
        }

        return view('iluminacao_publicas.show')->with('iluminacaoPublica', $iluminacaoPublica);
    }

    /**
     * Show the form for editing the specified iluminacao_publica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $iluminacaoPublica = $this->iluminacaoPublicaRepository->find($id);

        if (empty($iluminacaoPublica)) {
            Flash::error(__('messages.not_found', ['model' => __('models/iluminacaoPublicas.singular')]));

            return redirect(route('iluminacaoPublicas.index'));
        }

        return view('iluminacao_publicas.edit')->with('iluminacaoPublica', $iluminacaoPublica);
    }

    /**
     * Update the specified iluminacao_publica in storage.
     *
     * @param  int              $id
     * @param Updateiluminacao_publicaRequest $request
     *
     * @return Response
     */
    public function update($id, Updateiluminacao_publicaRequest $request)
    {
        $iluminacaoPublica = $this->iluminacaoPublicaRepository->find($id);

        if (empty($iluminacaoPublica)) {
            Flash::error(__('messages.not_found', ['model' => __('models/iluminacaoPublicas.singular')]));

            return redirect(route('iluminacaoPublicas.index'));
        }

        $iluminacaoPublica = $this->iluminacaoPublicaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/iluminacaoPublicas.singular')]));

        return redirect(route('iluminacaoPublicas.index'));
    }

    /**
     * Remove the specified iluminacao_publica from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $iluminacaoPublica = $this->iluminacaoPublicaRepository->find($id);

        if (empty($iluminacaoPublica)) {
            Flash::error(__('messages.not_found', ['model' => __('models/iluminacaoPublicas.singular')]));

            return redirect(route('iluminacaoPublicas.index'));
        }

        $this->iluminacaoPublicaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/iluminacaoPublicas.singular')]));

        return redirect(route('iluminacaoPublicas.index'));
    }
}
