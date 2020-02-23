<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // public function company()
    // {
    //     return $this->hasOne('App\Company');
    // }

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("found_us");
            $table->string("person_type");
            // Natural person
            $table->string("first_name");
            $table->string("last_name");
            $table->string("user_id");
            $table->string("email");
            $table->string("person_country_of_origin");
            $table->string("mobile_phone_number");
            $table->string("landline_number");
            // Legal person
            // Company (Let's move it to another table)
            $table->string("c_name");
            $table->string("c_rif");
            $table->string("c_country_of_origin");
            $table->string("c_city");
            $table->string("c_address");
            // Company representative
            $table->string("cr_full_name");
            $table->string("cr_email");
            $table->string("cr_mobile_phone_number");
            $table->string("cr_landline_phone_number");
            $table->string("web_language");
            // Log in data
            $table->string("log_in_email");
            $table->string("log_in_password");
            // Information frequency
            $table->boolean("frequency_bool");
            $table->string("frequency_in_time");
            $table->string("interest_services");
            $table->string("f_email");
            $table->string("f_social_media");
            $table->string("f_sms_number");
            $table->string("f_other");
            $table->string("f_fb_private_msg");
            // Facturation info
            $table->string("fac_origin_bank");
            $table->string("fac_origin_bank_country");
            $table->string("fac_destiny_bank");
            $table->string("fac_destiny_bank_number");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
