<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class EvalReport extends Model {
	
	public function update_record($data) {
		DB::table('eval_report')->where('id', $data['id'])->update($data);
	}

	public function insert_record($data) {
		DB::table('eval_report')->insert($data);
	}

	public function delete_record($data) {
		DB::table('eval_report')->where('id', $data['delete_record_id'])->delete();
	}
}
