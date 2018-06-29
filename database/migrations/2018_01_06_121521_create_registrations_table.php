 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
                      
             $table->increments('id');
             $table->integer('user_id')->index()->nullable();
            $table->string('year_of_call');
            $table->string('fname');
            $table->string('lname');
            $table->string('branch');
            $table->string('company');
            $table->string('position');
            $table->string('committee');
            $table->string('addCommittee');
            $table->longText('address');
            $table->boolean('Registered')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
