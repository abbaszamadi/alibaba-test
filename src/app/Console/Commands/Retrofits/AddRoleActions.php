<?php

namespace App\Console\Commands\Retrofits;

use App\Models\Action;
use Illuminate\Console\Command;

class AddRoleActions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add_role_actions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add actions of role model to database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $actions = [
            ['name' => 'role_view', 'title' => 'نمایش یک سطح دسترسی'],
            ['name' => 'role_view_all', 'title' => 'نمایش لیست سطح های دسترسی'],
            ['name' => 'role_create', 'title' => 'ایجاد سطح دسترسی'],
            ['name' => 'role_update', 'title' => 'ویرایش یک سطح دسترسی'],
            ['name' => 'role_delete', 'title' => 'حذف یک سطح دسترسی'],
        ];
        foreach($actions as $action)
        {
            Action::firstOrCreate(
                ['name' => $action['name']],
                ['title' => $action['title']]
            );
        }
        $this->info('actions inserted');

    }
}
