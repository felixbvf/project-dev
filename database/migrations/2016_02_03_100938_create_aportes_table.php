<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('user_id');
            $table->UnsignedBigInteger('afiliado_id');

            $table->string('mes')->required();
            $table->string('anio')->required();

            $table->bigInteger('uni');
            $table->bigInteger('desg');

            $table->string('niv');
            $table->string('gra');

            $table->string('item');

            $table->string('cat');
            
            $table->double('sue');
            $table->double('b_ant');
            $table->double('b_est');
            $table->double('b_car');
            $table->double('b_fro');
            $table->double('b_ori');
            $table->double('b_seg');

            $table->string('dfu');
            $table->string('nat');
            $table->string('lac');
            $table->string('pre');
            $table->double('sub');

            $table->double('gan');
            $table->double('pag');

            $table->double('cot');
            $table->double('mus');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('afiliado_id')->references('id')->on('afiliados');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aportes');
    }
}
