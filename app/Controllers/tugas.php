<?php

namespace App\Controllers;

use App\Models\TugasModel;
use Config\App;

class tugas extends BaseController
{
    public function tugas()
    {
        return view('tugas');
    }
}