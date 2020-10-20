<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecidadeAPIRequest;
use App\Http\Requests\API\UpdatecidadeAPIRequest;
use App\Models\cidade;
use App\Repositories\cidadeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cidadeController
 * @package App\Http\Controllers\API
 */

class cidadeAPIController extends AppBaseController
{
    /** @var  cidadeRepository */
    private $cidadeRepository;

    public function __construct(cidadeRepository $cidadeRepo)
    {
        $this->cidadeRepository = $cidadeRepo;
    }

    /**
     * Display a listing of the cidade.
     * GET|HEAD /cidades
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cidades = $this->cidadeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $cidades->toArray(),
            __('messages.retrieved', ['model' => __('models/cidades.plural')])
        );
    }

    /**
     * Store a newly created cidade in storage.
     * POST /cidades
     *
     * @param CreatecidadeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecidadeAPIRequest $request)
    {
        $input = $request->all();

        $cidade = $this->cidadeRepository->create($input);

        return $this->sendResponse(
            $cidade->toArray(),
            __('messages.saved', ['model' => __('models/cidades.singular')])
        );
    }

    /**
     * Display the specified cidade.
     * GET|HEAD /cidades/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cidade $cidade */
        $cidade = $this->cidadeRepository->find($id);

        if (empty($cidade)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/cidades.singular')])
            );
        }

        return $this->sendResponse(
            $cidade->toArray(),
            __('messages.retrieved', ['model' => __('models/cidades.singular')])
        );
    }

    /**
     * Update the specified cidade in storage.
     * PUT/PATCH /cidades/{id}
     *
     * @param int $id
     * @param UpdatecidadeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecidadeAPIRequest $request)
    {
        $input = $request->all();

        /** @var cidade $cidade */
        $cidade = $this->cidadeRepository->find($id);

        if (empty($cidade)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/cidades.singular')])
            );
        }

        $cidade = $this->cidadeRepository->update($input, $id);

        return $this->sendResponse(
            $cidade->toArray(),
            __('messages.updated', ['model' => __('models/cidades.singular')])
        );
    }

    /**
     * Remove the specified cidade from storage.
     * DELETE /cidades/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cidade $cidade */
        $cidade = $this->cidadeRepository->find($id);

        if (empty($cidade)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/cidades.singular')])
            );
        }

        $cidade->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/cidades.singular')])
        );
    }
}
