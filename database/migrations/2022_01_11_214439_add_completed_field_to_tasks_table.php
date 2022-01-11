<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompletedFieldToTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // aggiungo una colonna completed dopo aver creato questa migration con "artisan make:migration <nome_migration> --table=tasks"
            // ho utilizzato il parametro --path perchè la migration che crea la tabella tasks restituisce un errore di "tabella già esistente"
            // artisan migrate --path=/database/migrations/2022_01_11_214439_add_completed_field_to_tasks_table.php
            $table->boolean('completed')->after('description')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('completed');
        });
    }
}
