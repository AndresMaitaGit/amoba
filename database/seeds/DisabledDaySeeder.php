<?php

use Illuminate\Database\Seeder;

class DisabledDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $json = File::get("database/data/calendar_days_disabled.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            DB::table('disabled_days')->insert([
                'id' => $obj->id,
                'calendar_id' => $obj->calendar_id,
                'enabled' => $obj->enabled,
                'updated_at' => $obj->updated_at,
                'created_at' => $obj->created_at
            ]);
        }
    }
}
