<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class DisplaysInfoStudioDisplay extends Migration
{
    private $tableName = 'displays';

    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->string('hardware_model')->nullable();
            $table->string('region_info')->nullable();
            $table->string('os_version')->nullable();
            $table->string('model_identifier')->nullable();
            $table->string('model_number')->nullable();
        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('hardware_model');
            $table->dropColumn('region_info');
            $table->dropColumn('os_version');
            $table->dropColumn('model_identifier');
            $table->dropColumn('model_number');
        });
    }
}
