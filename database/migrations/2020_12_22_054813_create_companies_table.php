<?php
use App\BaseMigration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends BaseMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefix_table .'companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('website');
            $table->string('email', 100)->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('description');
            $table->string('instructor_name');
            $table->string('instructor_email');
            $table->string('instructor_phone');
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
        Schema::dropIfExists($this->prefix_table . 'companies');
    }
}
