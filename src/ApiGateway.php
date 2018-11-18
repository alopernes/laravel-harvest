<?php

namespace Byte5\LaravelHarvest;

use Zttp\Zttp;

class ApiGateway
{
    /**
     * @param $path
     * @return mixed
     */
    public function execute($path)
    {
        return Zttp::withHeaders([
            'Authorization' => 'Bearer '.config('harvest.api_key'),
            'Harvest-Account-Id' => config('harvest.account_id'),
        ])->get($path);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function post($path, $data)
    {
        return Zttp::withHeaders([
            'Authorization' => 'Bearer '.config('harvest.api_key'),
            'Harvest-Account-Id' => config('harvest.account_id'),
        ])->post($path, $data);
    }
}
