<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBharatStagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bharat_stages', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('company_id');
			$table->string('name', 64);
			$table->unsignedInteger("created_by_id")->nullable();
			$table->unsignedInteger("updated_by_id")->nullable();
			$table->unsignedInteger("deleted_by_id")->nullable();
			$table->timestamps();
			$table->softDeletes();

			$table->foreign("company_id")->references("id")->on("companies")->onDelete("CASCADE")->onUpdate("CASCADE");
			$table->foreign("created_by_id")->references("id")->on("users")->onDelete("CASCADE")->onUpdate("cascade");
			$table->foreign("updated_by_id")->references("id")->on("users")->onDelete("CASCADE")->onUpdate("cascade");
			$table->foreign("deleted_by_id")->references("id")->on("users")->onDelete("CASCADE")->onUpdate("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('bharat_stages');
	}
}
