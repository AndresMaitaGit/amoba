<?php

use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/calendar.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            DB::table('calendars')->insert([
                'id' => $obj->id,
                'calendar_id' => $obj->calendar_id,
                'name' => $obj->name,
                'created_at' => $obj->created_at,
                'updated_at' => $obj->updated_at
            ]);
        }
    }
}
