<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/users.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            DB::table('users')->insert([
                'id' => $obj->id,
                'first_name' => $obj->first_name,
                'last_name' => $obj->last_name,
                'phone_number' => $obj->phone_number,
                'picture' => $obj->picture,
                'email' => $obj->email,
                'password' => $obj->password,
                'remember_token' => $obj->remember_token,
                'last_online' => $obj->last_online,
                'verification_code' => $obj->verification_code,
                'new_email' => $obj->new_email,
                'status' => $obj->status,
                'first' => $obj->first,
                'created' => $obj->created,
                'modified' => $obj->modified,
                'company_contact' => $obj->company_contact,

                'credits' => $obj->credits,
                'first_trip' => $obj->first_trip,
                'incomplete_profile' => $obj->incomplete_profile,
                'phone_verify' => $obj->phone_verify,
                'token_auto_login' => $obj->token_auto_login,
                'user_vertical' => $obj->user_vertical,
                'language_id' => $obj->language_id,
                'no_registered' => $obj->no_registered,
                'deleted_at' => $obj->deleted_at
            ]);
        }
    }
}
