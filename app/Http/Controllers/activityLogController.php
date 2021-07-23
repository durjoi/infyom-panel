<?php

namespace App\Http\Controllers;

use App\DataTables\activityLogDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateactivityLogRequest;
use App\Http\Requests\UpdateactivityLogRequest;
use App\Repositories\activityLogRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class activityLogController extends AppBaseController
{
    /** @var  activityLogRepository */
    private $activityLogRepository;

    public function __construct(activityLogRepository $activityLogRepo)
    {
        $this->activityLogRepository = $activityLogRepo;
    }

    /**
     * Display a listing of the activityLog.
     *
     * @param activityLogDataTable $activityLogDataTable
     * @return Response
     */
    public function index(activityLogDataTable $activityLogDataTable)
    {
        return $activityLogDataTable->render('activity_logs.index');
    }

    /**
     * Show the form for creating a new activityLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('activity_logs.create');
    }

    /**
     * Store a newly created activityLog in storage.
     *
     * @param CreateactivityLogRequest $request
     *
     * @return Response
     */
    public function store(CreateactivityLogRequest $request)
    {
        $input = $request->all();

        $activityLog = $this->activityLogRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/activityLogs.singular')]));

        return redirect(route('activityLogs.index'));
    }

    /**
     * Display the specified activityLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $activityLog = $this->activityLogRepository->find($id);

        if (empty($activityLog)) {
            Flash::error(__('models/activityLogs.singular').' '.__('messages.not_found'));

            return redirect(route('activityLogs.index'));
        }

        return view('activity_logs.show')->with('activityLog', $activityLog);
    }

    /**
     * Show the form for editing the specified activityLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $activityLog = $this->activityLogRepository->find($id);

        if (empty($activityLog)) {
            Flash::error(__('messages.not_found', ['model' => __('models/activityLogs.singular')]));

            return redirect(route('activityLogs.index'));
        }

        return view('activity_logs.edit')->with('activityLog', $activityLog);
    }

    /**
     * Update the specified activityLog in storage.
     *
     * @param  int              $id
     * @param UpdateactivityLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateactivityLogRequest $request)
    {
        $activityLog = $this->activityLogRepository->find($id);

        if (empty($activityLog)) {
            Flash::error(__('messages.not_found', ['model' => __('models/activityLogs.singular')]));

            return redirect(route('activityLogs.index'));
        }

        $activityLog = $this->activityLogRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/activityLogs.singular')]));

        return redirect(route('activityLogs.index'));
    }

    /**
     * Remove the specified activityLog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $activityLog = $this->activityLogRepository->find($id);

        if (empty($activityLog)) {
            Flash::error(__('messages.not_found', ['model' => __('models/activityLogs.singular')]));

            return redirect(route('activityLogs.index'));
        }

        $this->activityLogRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/activityLogs.singular')]));

        return redirect(route('activityLogs.index'));
    }
}
