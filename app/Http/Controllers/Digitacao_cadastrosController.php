<?php

namespace App\Http\Controllers;

use App\DataTables\Digitacao_cadastrosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDigitacao_cadastrosRequest;
use App\Http\Requests\UpdateDigitacao_cadastrosRequest;
use App\Repositories\Digitacao_cadastrosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Digitacao_cadastrosController extends AppBaseController
{
    /** @var  Digitacao_cadastrosRepository */
    private $digitacaoCadastrosRepository;

    public function __construct(Digitacao_cadastrosRepository $digitacaoCadastrosRepo)
    {
        $this->digitacaoCadastrosRepository = $digitacaoCadastrosRepo;
    }

    /**
     * Display a listing of the Digitacao_cadastros.
     *
     * @param Digitacao_cadastrosDataTable $digitacaoCadastrosDataTable
     * @return Response
     */
    public function index(Digitacao_cadastrosDataTable $digitacaoCadastrosDataTable)
    {
        return $digitacaoCadastrosDataTable->render('digitacao_cadastros.index');
    }

    /**
     * Show the form for creating a new Digitacao_cadastros.
     *
     * @return Response
     */
    public function create()
    {
        return view('digitacao_cadastros.create');
    }

    /**
     * Store a newly created Digitacao_cadastros in storage.
     *
     * @param CreateDigitacao_cadastrosRequest $request
     *
     * @return Response
     */
    public function store(CreateDigitacao_cadastrosRequest $request)
    {
        $input = $request->all();

        $digitacaoCadastros = $this->digitacaoCadastrosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/digitacaoCadastros.singular')]));

        return redirect(route('digitacaoCadastros.index'));
    }

    /**
     * Display the specified Digitacao_cadastros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $digitacaoCadastros = $this->digitacaoCadastrosRepository->find($id);

        if (empty($digitacaoCadastros)) {
            Flash::error(__('models/digitacaoCadastros.singular').' '.__('messages.not_found'));

            return redirect(route('digitacaoCadastros.index'));
        }

        return view('digitacao_cadastros.show')->with('digitacaoCadastros', $digitacaoCadastros);
    }

    /**
     * Show the form for editing the specified Digitacao_cadastros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $digitacaoCadastros = $this->digitacaoCadastrosRepository->find($id);

        if (empty($digitacaoCadastros)) {
            Flash::error(__('messages.not_found', ['model' => __('models/digitacaoCadastros.singular')]));

            return redirect(route('digitacaoCadastros.index'));
        }

        return view('digitacao_cadastros.edit')->with('digitacaoCadastros', $digitacaoCadastros);
    }

    /**
     * Update the specified Digitacao_cadastros in storage.
     *
     * @param  int              $id
     * @param UpdateDigitacao_cadastrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDigitacao_cadastrosRequest $request)
    {
        $digitacaoCadastros = $this->digitacaoCadastrosRepository->find($id);

        if (empty($digitacaoCadastros)) {
            Flash::error(__('messages.not_found', ['model' => __('models/digitacaoCadastros.singular')]));

            return redirect(route('digitacaoCadastros.index'));
        }

        $digitacaoCadastros = $this->digitacaoCadastrosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/digitacaoCadastros.singular')]));

        return redirect(route('digitacaoCadastros.index'));
    }

    /**
     * Remove the specified Digitacao_cadastros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $digitacaoCadastros = $this->digitacaoCadastrosRepository->find($id);

        if (empty($digitacaoCadastros)) {
            Flash::error(__('messages.not_found', ['model' => __('models/digitacaoCadastros.singular')]));

            return redirect(route('digitacaoCadastros.index'));
        }

        $this->digitacaoCadastrosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/digitacaoCadastros.singular')]));

        return redirect(route('digitacaoCadastros.index'));
    }
}
