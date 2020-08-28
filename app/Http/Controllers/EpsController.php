<?php

namespace App\Http\Controllers;

class EpsController extends Controller
{
    public $openGraph;

    public function __construct()
    {
        parent::__construct(); 

        $this->openGraph = $this->openGraph();
    }

    public function termopor() {
        // $this->setTitle(__('meta.contact_title'));
        // $this->setDescription(__('meta.contact_description'));

        // $this->openGraph
        //     ->set('og:title', __('meta.contact_title'))
        //     ->set('og:description', __('meta.contact_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.termopor'),
                'link' => localized_route('termopor')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/termopor');
    }

    public function advantages()
    {
        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.termopor'),
                'link' => localized_route('termopor')
            ],
            [
                'label' => __('general.eps_advantages'),
                'link' => localized_route('eps_advantages')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/advantages');
    }

    public function quality() {
        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.termopor'),
                'link' => localized_route('termopor')
            ],
            [
                'label' => __('general.quality'),
                'link' => localized_route('eps_quality')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/quality');
    }

    public function facadeSystem()
    {
        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.termopor'),
                'link' => localized_route('termopor')
            ],
            [
                'label' => __('general.facade_system'),
                'link' => localized_route('eps_facade_system')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/facade_system');
    }

    public function energySaving()
    {
        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.termopor'),
                'link' => localized_route('termopor')
            ],
            [
                'label' => __('general.energy_saving'),
                'link' => localized_route('eps_energy_saving')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/energy_saving');
    }

    public function otherProducts()
    {
        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.termopor'),
                'link' => localized_route('termopor')
            ],
            [
                'label' => __('general.other_products'),
                'link' => localized_route('eps_other_products')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/other_products');
    }
}
