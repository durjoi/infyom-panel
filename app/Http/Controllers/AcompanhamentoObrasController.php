<?php

namespace App\Http\Controllers;

use App\DataTables\AcompanhamentoObrasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAcompanhamentoObrasRequest;
use App\Http\Requests\UpdateAcompanhamentoObrasRequest;
use App\Models\Pontos;
use App\Repositories\AcompanhamentoObrasRepository;
use App\Repositories\PontosRepository;
use Carbon\Carbon;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AcompanhamentoObrasController extends AppBaseController
{
    /** @var  AcompanhamentoObrasRepository */
    private $acompanhamentoObrasRepository;

    public function __construct(AcompanhamentoObrasRepository $acompanhamentoObrasRepo)
    {
        $this->acompanhamentoObrasRepository = $acompanhamentoObrasRepo;
    }

    /**
     * Display a listing of the AcompanhamentoObras.
     *
     * @param AcompanhamentoObrasDataTable $acompanhamentoObrasDataTable
     * @return Response
     */
    public function index(AcompanhamentoObrasDataTable $acompanhamentoObrasDataTable)
    {
        return $acompanhamentoObrasDataTable->render('acompanhamento_obras.index');
    }

    /**
     * Show the form for creating a new AcompanhamentoObras.
     *
     * @return Response
     */
    public function create()
    {
        return view('acompanhamento_obras.create');
    }

    /**
     * Store a newly created AcompanhamentoObras in storage.
     *
     * @param CreateAcompanhamentoObrasRequest $request
     *
     * @return Response
     */
    public function store(CreateAcompanhamentoObrasRequest $request)
    {
        $input = $request->all();

        $acompanhamentoObras = $this->acompanhamentoObrasRepository->create($input);
        foreach ($input['Ponto'] as $ponto){
            $ponto['acompanhamento_obras_id'] = $acompanhamentoObras->id;
            $newPonto = Pontos::create($ponto);
        }

        Flash::success(__('messages.saved', ['model' => __('models/acompanhamentoObras.singular')]));

        return redirect(route('acompanhamentoObras.index'));
    }

    /**
     * Display the specified AcompanhamentoObras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $acompanhamentoObras = $this->acompanhamentoObrasRepository->find($id);

        if (empty($acompanhamentoObras)) {
            Flash::error(__('models/acompanhamentoObras.singular').' '.__('messages.not_found'));

            return redirect(route('acompanhamentoObras.index'));
        }

        return view('acompanhamento_obras.show')->with('acompanhamentoObras', $acompanhamentoObras);
    }

    /**
     * Show the form for editing the specified AcompanhamentoObras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $acompanhamentoObras = $this->acompanhamentoObrasRepository->find($id);
        if (empty($acompanhamentoObras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/acompanhamentoObras.singular')]));

            return redirect(route('acompanhamentoObras.index'));
        }

        return view('acompanhamento_obras.edit')->with('acompanhamentoObras', $acompanhamentoObras);
    }

    /**
     * Update the specified AcompanhamentoObras in storage.
     *
     * @param  int              $id
     * @param UpdateAcompanhamentoObrasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcompanhamentoObrasRequest $request)
    {
        $acompanhamentoObras = $this->acompanhamentoObrasRepository->find($id);

        if (empty($acompanhamentoObras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/acompanhamentoObras.singular')]));

            return redirect(route('acompanhamentoObras.index'));
        }

        $acompanhamentoObras = $this->acompanhamentoObrasRepository->update($request->all(), $id);
        if(count($acompanhamentoObras->pontos) > 0){
            foreach ($acompanhamentoObras->pontos as $ponto){
                $ponto->delete();
            }
        }
        foreach ($request['Ponto'] as $ponto){
            $ponto['acompanhamento_obras_id'] = $acompanhamentoObras->id;
            $newPonto = Pontos::create($ponto);
        }
        Flash::success(__('messages.updated', ['model' => __('models/acompanhamentoObras.singular')]));

        return redirect(route('acompanhamentoObras.index'));
    }

    /**
     * Remove the specified AcompanhamentoObras from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $acompanhamentoObras = $this->acompanhamentoObrasRepository->find($id);

        if (empty($acompanhamentoObras)) {
            Flash::error(__('messages.not_found', ['model' => __('models/acompanhamentoObras.singular')]));

            return redirect(route('acompanhamentoObras.index'));
        }

        $this->acompanhamentoObrasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/acompanhamentoObras.singular')]));

        return redirect(route('acompanhamentoObras.index'));
    }
}
