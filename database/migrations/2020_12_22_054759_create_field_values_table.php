<?php
use App\BaseMigration;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldValuesTable extends BaseMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefix_table .'field_values', function (Blueprint $table) {
            $table->id();
            $table->string('field_type_id');
            $table->string('user_id');
            $table->string('value');
            $table->string('timestamps');
            //Set common columns
            $this->setCommonColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->prefix_table . 'field_values');
    }
}
