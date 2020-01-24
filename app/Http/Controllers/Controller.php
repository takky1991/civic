<?php

namespace App\Http\Controllers;

use OpenGraph;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        //
    }

    public function setTitle($title)
    {
        view()->share('title', $title);
    }

    public function setDescription($description)
    {
        view()->share('description', $description);
    }

    public function openGraph()
    {
        return OpenGraph::enable();
    }

    public function setBreadcrumbs($breadcrumbs)
    {
        view()->share('breadcrumbs', $breadcrumbs);
    }
}
