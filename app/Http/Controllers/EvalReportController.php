<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\EvalReport;

class EvalReportController extends Controller {

	public function index() {
		$data = array();

		$result = DB::table('eval_report')->get()->toArray();
		$result_array = array();

		foreach ($result as $key => $value) {
			$result_array[$key]['id'] = $value->id;
			$result_array[$key]['name'] = $value->name_patient;
			$result_array[$key]['record'] = $value->record;
			$result_array[$key]['age'] = $value->age;
			$result_array[$key]['sex'] = $value->sex;
		}
		$data['result'] = $result_array;

		return view('iluminacao_publicas.evaluation_report', $data);
	}

	public function insert(Request $request) {
		$data = $request->all();
		array_shift($data);
		$eval_report = new EvalReport();
		$eval_report->insert_record($data);
		return redirect('avaliacaoTerapeutica');
	}

	public function read(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('eval_report')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('avaliacaoTerapeutica');
		} else {
			$data['result'] = $result;
			return view('iluminacao_publicas.view', $data);
		}
	}

	public function edit(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('eval_report')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('avaliacaoTerapeutica');
		} else {
			$data['result'] = $result;
			return view('iluminacao_publicas.edit', $data);
		}
	}

	public function update(Request $request) {
		$data = $request->all();
		array_shift($data);
		$eval_report = new EvalReport();
		$eval_report->update_record($data);
		return redirect('avaliacaoTerapeutica');
	}

	public function delete(Request $request) {
		$eval_report = new EvalReport();
		$eval_report->delete_record($request);
		// DB::table('eval_report')->where('id', $request['delete_record_id'])->delete();
		return redirect('avaliacaoTerapeutica');
	}
}
