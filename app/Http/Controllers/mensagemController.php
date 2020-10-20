<?php

namespace App\Http\Controllers;

use App\DataTables\mensagemDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatemensagemRequest;
use App\Http\Requests\UpdatemensagemRequest;
use App\Repositories\mensagemRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class mensagemController extends AppBaseController
{
    /** @var  mensagemRepository */
    private $mensagemRepository;

    public function __construct(mensagemRepository $mensagemRepo)
    {
        $this->mensagemRepository = $mensagemRepo;
    }

    /**
     * Display a listing of the mensagem.
     *
     * @param mensagemDataTable $mensagemDataTable
     * @return Response
     */
    public function index(mensagemDataTable $mensagemDataTable)
    {
        return $mensagemDataTable->render('mensagems.index');
    }

    /**
     * Show the form for creating a new mensagem.
     *
     * @return Response
     */
    public function create()
    {
        return view('mensagems.create');
    }

    /**
     * Store a newly created mensagem in storage.
     *
     * @param CreatemensagemRequest $request
     *
     * @return Response
     */
    public function store(CreatemensagemRequest $request)
    {
        $input = $request->all();

        $mensagem = $this->mensagemRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/mensagems.singular')]));

        return redirect(route('mensagems.index'));
    }

    /**
     * Display the specified mensagem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mensagem = $this->mensagemRepository->find($id);

        if (empty($mensagem)) {
            Flash::error(__('models/mensagems.singular').' '.__('messages.not_found'));

            return redirect(route('mensagems.index'));
        }

        return view('mensagems.show')->with('mensagem', $mensagem);
    }

    /**
     * Show the form for editing the specified mensagem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mensagem = $this->mensagemRepository->find($id);

        if (empty($mensagem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/mensagems.singular')]));

            return redirect(route('mensagems.index'));
        }

        return view('mensagems.edit')->with('mensagem', $mensagem);
    }

    /**
     * Update the specified mensagem in storage.
     *
     * @param  int              $id
     * @param UpdatemensagemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemensagemRequest $request)
    {
        $mensagem = $this->mensagemRepository->find($id);

        if (empty($mensagem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/mensagems.singular')]));

            return redirect(route('mensagems.index'));
        }

        $mensagem = $this->mensagemRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/mensagems.singular')]));

        return redirect(route('mensagems.index'));
    }

    /**
     * Remove the specified mensagem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mensagem = $this->mensagemRepository->find($id);

        if (empty($mensagem)) {
            Flash::error(__('messages.not_found', ['model' => __('models/mensagems.singular')]));

            return redirect(route('mensagems.index'));
        }

        $this->mensagemRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/mensagems.singular')]));

        return redirect(route('mensagems.index'));
    }
}
