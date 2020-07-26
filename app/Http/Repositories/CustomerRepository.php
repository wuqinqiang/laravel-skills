<?php

namespace App\Http\Repositories;

use App\Customer;

class CustomerRepository
{
    public function all()
    {
        return Customer::query()
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map->format();
//        return Customer::query()
//            ->where('active', 1)
//            ->with('user')
//            ->get()
//            ->map(function ($customer) {
//                return $customer->format();
//            });
    }

    public function findById($customerId)
    {
        return Customer::query()->where('id', $customerId)
            ->with('user')
            ->firstOrFail()
            ->format();
    }

}