<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenses extends Migration
{
    /**
     * Run the migrations.

     *
     * @return void
     */
    public $tableName='expenses';
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->integer('expensetype_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->index(["expensetype_id"], 'fk_expenses_expense_type1_idx');


            $table->foreign('expensetype_id', 'fk_expenses_expense_type1_idx')
                ->references('id')->on('expensetypes')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
