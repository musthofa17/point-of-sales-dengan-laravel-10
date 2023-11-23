<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Neruknitwear',
            'company_email' => 'company@neruknitwear.com',
            'company_phone' => '012345678901',
            'notification_email' => 'notification@mail.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Neruknitwear © 2023 || Developed by <strong><a target="_blank" href="http://shop.neruknitwear.com/">Neruknitwear</a></strong>',
            'company_address' => 'Bandung, Jawa Barat'
        ]);
    }
}