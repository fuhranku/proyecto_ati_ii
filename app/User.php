<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        "found_us",
        "person_type",
        "first_name",
        "last_name",
        "user_id",
        "email",
        "person_country_of_origin",
        "mobile_phone_number",
        "landline_number",
        "c_name",
        "c_rif",
        "c_country_of_origin",
        "c_city",
        "c_address",
        "cr_full_name",
        "cr_email",
        "cr_mobile_phone_number",
        "cr_landline_phone_number",
        "web_language",
        "log_in_email",
        "log_in_password",
        "frequency_bool",
        "frequency_in_time",
        "interest_services",
        "f_email",
        "f_social_media",
        "f_sms_number",
        "f_other",
        "f_fb_private_msg",
        "fac_origin_bank",
        "fac_origin_bank_country",
        "fac_destiny_bank",
        "fac_destiny_bank_number"
    ];
}
