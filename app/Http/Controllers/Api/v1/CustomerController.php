<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CustomerCollection;
use App\Http\Resources\v1\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get
        // paginate(x) method để phân trang. trong đó x là số lượng muốn hiển thị trên mỗi trang
        // return CustomerResource::collection(Customer::paginate(5));
        return new CustomerCollection(Customer::paginate(10)); // nếu dùng cách này thì phải tạo ra class Resource Collection.
        // return new CustomerResource(Customer::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //post

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //post
        $request->validate(
            [
                'customer_name' => 'required',
                'customer_phone' => 'required',
                'customer_email' => 'required',
                'customer_address' => 'required',
                'customer_city' => 'required'
            ]
        );
        $customer = Customer::create($request->all());
        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //get
        return new CustomerResource($customer); //$customer ở đây là một đối tượng
        // return CustomerResource::collection(Customer::where('id',75)->get()); 

        // return new CustomerResource([
        //     'id' => 75, 
        //     'test' => 'Euna',
        //     'customer_phone' => '+16893710694',
        //     'customer_email' => 'audreanne.turner@example.org',
        //     'customer_address' => '847 Marks Light\nMillsview, TN 13947-9567',
        //     'customer_city' => 'North Montana'
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //put
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //post
        // vì ở trên truyền tham số là đối tượng Customer nên có thể dùng $customer->update() được
        $customer->update($request->all());
        return new CustomerResource($customer); //trả dữ liệu về dưới dạng json

        // nếu chỉ truyền id cho function update() thì update bằng cách này
        // Customer::where('id',75)->update($request->all());
        // return  CustomerResource::collection(Customer::where('id',75)->get());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //get
        $customer->delete();

    }

    public function test()
    {
        Customer::factory()->create();
    }
}
