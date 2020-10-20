<?php

namespace App\Http\Controllers;

use App\DataTables\Causa_defeitosDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCausa_defeitosRequest;
use App\Http\Requests\UpdateCausa_defeitosRequest;
use App\Repositories\Causa_defeitosRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class Causa_defeitosController extends AppBaseController
{
    /** @var  Causa_defeitosRepository */
    private $causaDefeitosRepository;

    public function __construct(Causa_defeitosRepository $causaDefeitosRepo)
    {
        $this->causaDefeitosRepository = $causaDefeitosRepo;
    }

    /**
     * Display a listing of the Causa_defeitos.
     *
     * @param Causa_defeitosDataTable $causaDefeitosDataTable
     * @return Response
     */
    public function index(Causa_defeitosDataTable $causaDefeitosDataTable)
    {
        return $causaDefeitosDataTable->render('causa_defeitos.index');
    }

    /**
     * Show the form for creating a new Causa_defeitos.
     *
     * @return Response
     */
    public function create()
    {
        return view('causa_defeitos.create');
    }

    /**
     * Store a newly created Causa_defeitos in storage.
     *
     * @param CreateCausa_defeitosRequest $request
     *
     * @return Response
     */
    public function store(CreateCausa_defeitosRequest $request)
    {
        $input = $request->all();

        $causaDefeitos = $this->causaDefeitosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/causaDefeitos.singular')]));

        return redirect(route('causaDefeitos.index'));
    }

    /**
     * Display the specified Causa_defeitos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $causaDefeitos = $this->causaDefeitosRepository->find($id);

        if (empty($causaDefeitos)) {
            Flash::error(__('models/causaDefeitos.singular').' '.__('messages.not_found'));

            return redirect(route('causaDefeitos.index'));
        }

        return view('causa_defeitos.show')->with('causaDefeitos', $causaDefeitos);
    }

    /**
     * Show the form for editing the specified Causa_defeitos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $causaDefeitos = $this->causaDefeitosRepository->find($id);

        if (empty($causaDefeitos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/causaDefeitos.singular')]));

            return redirect(route('causaDefeitos.index'));
        }

        return view('causa_defeitos.edit')->with('causaDefeitos', $causaDefeitos);
    }

    /**
     * Update the specified Causa_defeitos in storage.
     *
     * @param  int              $id
     * @param UpdateCausa_defeitosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCausa_defeitosRequest $request)
    {
        $causaDefeitos = $this->causaDefeitosRepository->find($id);

        if (empty($causaDefeitos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/causaDefeitos.singular')]));

            return redirect(route('causaDefeitos.index'));
        }

        $causaDefeitos = $this->causaDefeitosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/causaDefeitos.singular')]));

        return redirect(route('causaDefeitos.index'));
    }

    /**
     * Remove the specified Causa_defeitos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $causaDefeitos = $this->causaDefeitosRepository->find($id);

        if (empty($causaDefeitos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/causaDefeitos.singular')]));

            return redirect(route('causaDefeitos.index'));
        }

        $this->causaDefeitosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/causaDefeitos.singular')]));

        return redirect(route('causaDefeitos.index'));
    }
}
