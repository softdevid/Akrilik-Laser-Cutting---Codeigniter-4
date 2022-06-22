<?php

namespace App\Controllers;

use App\Models\ServicesModel;

class Services extends BaseController
{
    public function services_advertising()
    {
        $model = new ServicesModel();
        $data = [
            'title' => 'Advertising Category',
            'services' => $model->getServices()
        ];
        return view('services/services-advertising', $data);
    }

    public function services_digitalmarketing()
    {
        $model = new ServicesModel();
        $data = [
            'title' => 'Digital Marketing Category',
            'services' => $model->getServices()
        ];
        return view('services/services-digitalmarketing', $data);
    }
}
