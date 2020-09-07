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

    public function products()
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
                'label' => __('general.products'),
                'link' => localized_route('eps_products')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/products');
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

    public function epsF60() {
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
                'label' => __('general.eps_f60'),
                'link' => localized_route('eps_f60')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/products/eps_f60');
    }

    public function eps70() {
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
                'label' => __('general.eps_70'),
                'link' => localized_route('eps_70')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/products/eps_70');
    }

    public function epsf80() {
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
                'label' => __('general.eps_f80'),
                'link' => localized_route('eps_f80')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/products/eps_f80');
    }

    public function eps100() {
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
                'label' => __('general.eps_100'),
                'link' => localized_route('eps_100')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/products/eps_100');
    }

    public function eps150() {
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
                'label' => __('general.eps_150'),
                'link' => localized_route('eps_150')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/products/eps_150');
    }

    public function eps200() {
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
                'label' => __('general.eps_200'),
                'link' => localized_route('eps_200')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('eps/products/eps_200');
    }
}
