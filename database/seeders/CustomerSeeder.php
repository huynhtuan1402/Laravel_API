<?php

namespace Database\Seeders;

//use App\Customer;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /* khi chạy command "php artisan db:seed thì function run() bên dưới sẽ chạy" */
    public function run(): void
    {

        // cách 1: có thể thêm bằng cách dùng Model Factories. dùng cách này thì phải tạo ra model factory trước đó  
        Customer::factory(10)->create(); // tạo ra 10 record dữ liệu

        // cách 2: thêm bằng cách dùng query builder
        //   DB::table('Customer')->insert([
        //     'customer_name'=>Str::random(10),
        //     'customer_phone'=>Str::random(10),
        //     'customer_email'=>Str::random(10).'@gmail.com',
        //     'customer_address'=>Str::random(10),
        //     'customer_city'=>Str::random(10)
        //   ]);
    }
}
