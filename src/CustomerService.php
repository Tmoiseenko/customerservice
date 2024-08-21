<?php

namespace Tmoiseenko\CustomerService;


class CustomerService
{
    public function create($hash): bool
    {
        if (auth()->user() && auth()->user()->customer) {
            return true;
        }

        if (auth()->user() && !auth()->user()->customer) {
            if($this->checkIsNotCustomerInDb($hash)) {
                Customer::create(['hash' => $hash]);
            }
            $this->associateWithUser($hash, auth()->user()->id);
        }

        if ($this->getByHash($hash) === null) {
            Customer::create(['hash' => $hash]);
        }

        return true;
    }

    public function getByHash($hash): Customer
    {
        return Customer::where('hash', $hash)->first();
    }

    public function associateWithUser($hash, $userId)
    {
        $customer = Customer::where('hash', $hash)->first();
        $customer->update(['user_id' => $userId]);
        return true;
    }

    public function removeByHash($hash)
    {
        Customer::destroy($this->getByHash($hash)->id);
    }

    public function checkIsNotCustomerInDb($hash)
    {
        if (is_null($this->getByHash($hash))) {
            return true;
        }
        return false;
    }
}