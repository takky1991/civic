<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public $openGraph;

    public function __construct()
    {
        parent::__construct(); 

        $this->openGraph = $this->openGraph();
    }

    public function article1() {
        $this->setTitle('Čestitka povodom novogodišnjih praznika');
        $this->setDescription('Želimo Vam toplu i izolovanu 2020');

        $this->openGraph
            ->set('og:title', 'Čestitka povodom novogodišnjih praznika')
            ->set('og:description', 'Želimo Vam toplu i izolovanu 2020');

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => 'Čestitka povodom novogodišnjih praznika',
                'link' => localized_route('article1')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('articles/article-one');
    }
}
