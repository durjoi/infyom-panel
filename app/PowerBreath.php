<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class PowerBreath extends Model {
	
	public function fetch() {
		return DB::table('power_breath')->get()->toArray();
	}

	public function update_record($data) {
		DB::table('power_breath')->where('id', $data['id'])->update($data);
	}

	public function insert_record($data) {
		DB::table('power_breath')->insert($data);
	}

	public function delete_record($data) {
		DB::table('power_breath')->where('id', $data['delete_record_id'])->delete();
	}
}
