<?php

namespace App\Http\Controllers;

use App\DataTables\perfil_cadastroDataTable;
use App\Http\Requests;
use App\Http\Requests\Createperfil_cadastroRequest;
use App\Http\Requests\Updateperfil_cadastroRequest;
use App\Repositories\perfil_cadastroRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class perfil_cadastroController extends AppBaseController
{
    /** @var  perfil_cadastroRepository */
    private $perfilCadastroRepository;

    public function __construct(perfil_cadastroRepository $perfilCadastroRepo)
    {
        $this->perfilCadastroRepository = $perfilCadastroRepo;
    }

    /**
     * Display a listing of the perfil_cadastro.
     *
     * @param perfil_cadastroDataTable $perfilCadastroDataTable
     * @return Response
     */
    public function index(perfil_cadastroDataTable $perfilCadastroDataTable)
    {
        return $perfilCadastroDataTable->render('perfil_cadastros.index');
    }

    /**
     * Show the form for creating a new perfil_cadastro.
     *
     * @return Response
     */
    public function create()
    {
        return view('perfil_cadastros.create');
    }

    /**
     * Store a newly created perfil_cadastro in storage.
     *
     * @param Createperfil_cadastroRequest $request
     *
     * @return Response
     */
    public function store(Createperfil_cadastroRequest $request)
    {
        $input = $request->all();

        $perfilCadastro = $this->perfilCadastroRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/perfilCadastros.singular')]));

        return redirect(route('perfilCadastros.index'));
    }

    /**
     * Display the specified perfil_cadastro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perfilCadastro = $this->perfilCadastroRepository->find($id);

        if (empty($perfilCadastro)) {
            Flash::error(__('models/perfilCadastros.singular').' '.__('messages.not_found'));

            return redirect(route('perfilCadastros.index'));
        }

        return view('perfil_cadastros.show')->with('perfilCadastro', $perfilCadastro);
    }

    /**
     * Show the form for editing the specified perfil_cadastro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perfilCadastro = $this->perfilCadastroRepository->find($id);

        if (empty($perfilCadastro)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perfilCadastros.singular')]));

            return redirect(route('perfilCadastros.index'));
        }

        return view('perfil_cadastros.edit')->with('perfilCadastro', $perfilCadastro);
    }

    /**
     * Update the specified perfil_cadastro in storage.
     *
     * @param  int              $id
     * @param Updateperfil_cadastroRequest $request
     *
     * @return Response
     */
    public function update($id, Updateperfil_cadastroRequest $request)
    {
        $perfilCadastro = $this->perfilCadastroRepository->find($id);

        if (empty($perfilCadastro)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perfilCadastros.singular')]));

            return redirect(route('perfilCadastros.index'));
        }

        $perfilCadastro = $this->perfilCadastroRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/perfilCadastros.singular')]));

        return redirect(route('perfilCadastros.index'));
    }

    /**
     * Remove the specified perfil_cadastro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perfilCadastro = $this->perfilCadastroRepository->find($id);

        if (empty($perfilCadastro)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perfilCadastros.singular')]));

            return redirect(route('perfilCadastros.index'));
        }

        $this->perfilCadastroRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/perfilCadastros.singular')]));

        return redirect(route('perfilCadastros.index'));
    }
}
