<?php

namespace App\Console\Commands\Retrofits;

use App\Models\Action;
use Illuminate\Console\Command;

class AddActions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add_actions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add actions of models to database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $actions = [
            # role model actions
            ['name' => 'role_view', 'title' => 'نمایش یک سطح دسترسی'],
            ['name' => 'role_view_any', 'title' => 'نمایش لیست سطح های دسترسی'],
            ['name' => 'role_create', 'title' => 'ایجاد سطح دسترسی'],
            ['name' => 'role_update', 'title' => 'ویرایش یک سطح دسترسی'],
            ['name' => 'role_soft_delete', 'title' => 'حذف موقت یک سطح دسترسی'],
            ['name' => 'role_hard_delete', 'title' => 'حذف دائمی یک سطح دسترسی'],
            ['name' => 'role_restore', 'title' => 'بازگردانی یک سطح دسترسی'],



            # payment request model actions
            ['name' => 'payment_request_view', 'title' => 'نمایش یک درخواست'],
            ['name' => 'payment_request_view_any', 'title' => 'نمایش لیست درخواست ها'],
            ['name' => 'payment_request_create', 'title' => 'ایجاد یک درخواست'],
            ['name' => 'payment_request_update', 'title' => 'ویرایش یک درخواست'],
            ['name' => 'payment_request_soft_delete', 'title' => 'حذف موقت یک درخواست'],
            ['name' => 'payment_request_hard_delete', 'title' => 'حذف دائمی یک درخواست'],
            ['name' => 'payment_request_restore', 'title' => 'بازگردانی یک درخواست'],

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
