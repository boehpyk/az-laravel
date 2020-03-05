<?php

use Illuminate\Database\Seeder;

class AfishaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $source = $this->csvProcessor(base_path() . '/var/CSV/old_afisha.csv');
        if ($source->valid()) {
            $source->current();
            foreach ($source as $data) {

                echo $data[4]."\n";

                DB::table('events')->insert([
                    'date_begin'    => $data[0],
                    'city'          => $data[1],
                    'club_name'     => $data[2],
                    'info'          => $data[3],
                    'meeting_url'   => $data[4],
                ]);
            }
        }
   }

    private function csvProcessor($csv_file) {
        if (@!$file = fopen($csv_file, 'r')) {
            echo "Can't open $csv_file.";
            return;
        }
        while (($data = fgetcsv($file, 0, ';')) !== false) {
            yield $data;
        }
        fclose($file);
    }

}
