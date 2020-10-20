<?php

namespace App\Http\Controllers;

use App\DataTables\respostas_mensagem_diariaDataTable;
use App\Http\Requests;
use App\Http\Requests\Createrespostas_mensagem_diariaRequest;
use App\Http\Requests\Updaterespostas_mensagem_diariaRequest;
use App\Repositories\respostas_mensagem_diariaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class respostas_mensagem_diariaController extends AppBaseController
{
    /** @var  respostas_mensagem_diariaRepository */
    private $respostasMensagemDiariaRepository;

    public function __construct(respostas_mensagem_diariaRepository $respostasMensagemDiariaRepo)
    {
        $this->respostasMensagemDiariaRepository = $respostasMensagemDiariaRepo;
    }

    /**
     * Display a listing of the respostas_mensagem_diaria.
     *
     * @param respostas_mensagem_diariaDataTable $respostasMensagemDiariaDataTable
     * @return Response
     */
    public function index(respostas_mensagem_diariaDataTable $respostasMensagemDiariaDataTable)
    {
        return $respostasMensagemDiariaDataTable->render('respostas_mensagem_diarias.index');
    }

    /**
     * Show the form for creating a new respostas_mensagem_diaria.
     *
     * @return Response
     */
    public function create()
    {
        return view('respostas_mensagem_diarias.create');
    }

    /**
     * Store a newly created respostas_mensagem_diaria in storage.
     *
     * @param Createrespostas_mensagem_diariaRequest $request
     *
     * @return Response
     */
    public function store(Createrespostas_mensagem_diariaRequest $request)
    {
        $input = $request->all();

        $respostasMensagemDiaria = $this->respostasMensagemDiariaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/respostasMensagemDiarias.singular')]));

        return redirect(route('respostasMensagemDiarias.index'));
    }

    /**
     * Display the specified respostas_mensagem_diaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $respostasMensagemDiaria = $this->respostasMensagemDiariaRepository->find($id);

        if (empty($respostasMensagemDiaria)) {
            Flash::error(__('models/respostasMensagemDiarias.singular').' '.__('messages.not_found'));

            return redirect(route('respostasMensagemDiarias.index'));
        }

        return view('respostas_mensagem_diarias.show')->with('respostasMensagemDiaria', $respostasMensagemDiaria);
    }

    /**
     * Show the form for editing the specified respostas_mensagem_diaria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $respostasMensagemDiaria = $this->respostasMensagemDiariaRepository->find($id);

        if (empty($respostasMensagemDiaria)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostasMensagemDiarias.singular')]));

            return redirect(route('respostasMensagemDiarias.index'));
        }

        return view('respostas_mensagem_diarias.edit')->with('respostasMensagemDiaria', $respostasMensagemDiaria);
    }

    /**
     * Update the specified respostas_mensagem_diaria in storage.
     *
     * @param  int              $id
     * @param Updaterespostas_mensagem_diariaRequest $request
     *
     * @return Response
     */
    public function update($id, Updaterespostas_mensagem_diariaRequest $request)
    {
        $respostasMensagemDiaria = $this->respostasMensagemDiariaRepository->find($id);

        if (empty($respostasMensagemDiaria)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostasMensagemDiarias.singular')]));

            return redirect(route('respostasMensagemDiarias.index'));
        }

        $respostasMensagemDiaria = $this->respostasMensagemDiariaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/respostasMensagemDiarias.singular')]));

        return redirect(route('respostasMensagemDiarias.index'));
    }

    /**
     * Remove the specified respostas_mensagem_diaria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $respostasMensagemDiaria = $this->respostasMensagemDiariaRepository->find($id);

        if (empty($respostasMensagemDiaria)) {
            Flash::error(__('messages.not_found', ['model' => __('models/respostasMensagemDiarias.singular')]));

            return redirect(route('respostasMensagemDiarias.index'));
        }

        $this->respostasMensagemDiariaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/respostasMensagemDiarias.singular')]));

        return redirect(route('respostasMensagemDiarias.index'));
    }
}
