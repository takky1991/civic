<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public $openGraph;

    public function __construct()
    {
        parent::__construct(); 

        $this->openGraph = $this->openGraph();
    }

    public function home() {
        return view('home');
    }

    public function contact() {
        $this->setTitle(__('meta.contact_title'));
        $this->setDescription(__('meta.contact_description'));

        $this->openGraph
            ->set('og:title', __('meta.contact_title'))
            ->set('og:description', __('meta.contact_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.contact_information'),
                'link' => localized_route('contact')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('contact');
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

        return view('termopor');
    }

    public function dryBuild() {
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
                'label' => __('general.dry_build'),
                'link' => localized_route('dry_build')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('dry_build');
    }

    public function references() {
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
                'label' => __('general.references'),
                'link' => localized_route('references')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);

        return view('references');
    }

    public function profiledSheets()
    {
        $this->setTitle(__('meta.profiled_sheets_title'));
        $this->setDescription(__('meta.profiled_sheets_description'));

        $this->openGraph
            ->set('og:title', __('meta.profiled_sheets_title'))
            ->set('og:description', __('meta.profiled_sheets_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/index');
    }

    public function prestige() {
        $this->setTitle(__('meta.prestige_title'));
        $this->setDescription(__('meta.prestige_description'));

        $this->openGraph
            ->set('og:title', __('meta.prestige_title'))
            ->set('og:description', __('meta.prestige_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.prestige'),
                'link' => localized_route('prestige')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/prestige');
    }

    public function elegant() {
        $this->setTitle(__('meta.elegant_title'));
        $this->setDescription(__('meta.elegant_description'));

        $this->openGraph
            ->set('og:title', __('meta.elegant_title'))
            ->set('og:description', __('meta.elegant_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.elegant'),
                'link' => localized_route('elegant')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/elegant');
    }

    public function attractive() {
        $this->setTitle(__('meta.attractive_title'));
        $this->setDescription(__('meta.attractive_description'));

        $this->openGraph
            ->set('og:title', __('meta.attractive_title'))
            ->set('og:description', __('meta.attractive_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.attractive'),
                'link' => localized_route('attractive')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/attractive');
    }

    public function trend() {
        $this->setTitle(__('meta.trend_title'));
        $this->setDescription(__('meta.trend_description'));

        $this->openGraph
            ->set('og:title', __('meta.trend_title'))
            ->set('og:description', __('meta.trend_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.trend'),
                'link' => localized_route('trend')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/trend');
    }

    public function dampa() {
        $this->setTitle(__('meta.dampa_title'));
        $this->setDescription(__('meta.dampa_description'));

        $this->openGraph
            ->set('og:title', __('meta.dampa_title'))
            ->set('og:description', __('meta.dampa_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.dampa'),
                'link' => localized_route('dampa')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/dampa');
    }

    public function montage() {
        $this->setTitle(__('meta.montage_title'));
        $this->setDescription(__('meta.montage_description'));

        $this->openGraph
            ->set('og:title', __('meta.montage_title'))
            ->set('og:description', __('meta.montage_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.montage'),
                'link' => localized_route('montage')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/montage');
    }

    public function siegeSheets() {
        $this->setTitle(__('meta.siege_sheets_title'));
        $this->setDescription(__('meta.siege_sheets_description'));

        $this->openGraph
            ->set('og:title', __('meta.siege_sheets_title'))
            ->set('og:description', __('meta.siege_sheets_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.siege_sheets'),
                'link' => localized_route('siege_sheets')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/siege_sheets');
    }

    public function rainwaterSystem() 
    {
        $this->setTitle(__('meta.rainwater_system_title'));
        $this->setDescription(__('meta.rainwater_system_description'));

        $this->openGraph
            ->set('og:title', __('meta.rainwater_system_title'))
            ->set('og:description', __('meta.rainwater_system_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/index');
    }

    public function horizontalGutter()
    {
        $this->setTitle(__('meta.horizontal_gutter_title'));
        $this->setDescription(__('meta.horizontal_gutter_description'));

        $this->openGraph
            ->set('og:title', __('meta.horizontal_gutter_title'))
            ->set('og:description', __('meta.horizontal_gutter_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.horizontal_gutter'),
                'link' => localized_route('horizontal_gutter')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/horizontal_gutter');
    }

    public function gutterHooks()
    {
        $this->setTitle(__('meta.gutter_hooks_title'));
        $this->setDescription(__('meta.gutter_hooks_description'));

        $this->openGraph
            ->set('og:title', __('meta.gutter_hooks_title'))
            ->set('og:description', __('meta.gutter_hooks_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.gutter_hooks'),
                'link' => localized_route('gutter_hooks')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/gutter_hooks');
    }

    public function gutterKettle()
    {
        $this->setTitle(__('meta.gutter_kettle_title'));
        $this->setDescription(__('meta.gutter_kettle_description'));

        $this->openGraph
            ->set('og:title', __('meta.gutter_kettle_title'))
            ->set('og:description', __('meta.gutter_kettle_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.gutter_kettle'),
                'link' => localized_route('gutter_kettle')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/gutter_kettle');
    }

    public function drainPipes()
    {
        $this->setTitle(__('meta.drain_pipes_title'));
        $this->setDescription(__('meta.drain_pipes_description'));

        $this->openGraph
            ->set('og:title', __('meta.drain_pipes_title'))
            ->set('og:description', __('meta.drain_pipes_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.drain_pipes'),
                'link' => localized_route('drain_pipes')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/drain_pipes');
    }

    public function pipeHolders()
    {
        $this->setTitle(__('meta.pipe_holders_title'));
        $this->setDescription(__('meta.pipe_holders_description'));

        $this->openGraph
            ->set('og:title', __('meta.pipe_holders_title'))
            ->set('og:description', __('meta.pipe_holders_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.pipe_holders'),
                'link' => localized_route('pipe_holders')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/pipe_holders');
    }

    public function pipeElbows()
    {
        $this->setTitle(__('meta.pipe_elbows_title'));
        $this->setDescription(__('meta.pipe_elbows_description'));

        $this->openGraph
            ->set('og:title', __('meta.pipe_elbows_title'))
            ->set('og:description', __('meta.pipe_elbows_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.pipe_elbows'),
                'link' => localized_route('pipe_elbows')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/pipe_elbows');
    }

    public function gutterClosure()
    {
        $this->setTitle(__('meta.gutter_closure_title'));
        $this->setDescription(__('meta.gutter_closure_description'));

        $this->openGraph
            ->set('og:title', __('meta.gutter_closure_title'))
            ->set('og:description', __('meta.gutter_closure_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.gutter_closure'),
                'link' => localized_route('gutter_closure')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/gutter_closure');
    }

    public function gutterCorner()
    {
        $this->setTitle(__('meta.gutter_corner_title'));
        $this->setDescription(__('meta.gutter_corner_description'));

        $this->openGraph
            ->set('og:title', __('meta.gutter_corner_title'))
            ->set('og:description', __('meta.gutter_corner_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.gutter_corner'),
                'link' => localized_route('gutter_corner')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/gutter_corner');
    }

    public function otherMetalProducts()
    {
        $this->setTitle(__('meta.other_metal_products_title'));
        $this->setDescription(__('meta.other_metal_products_description'));

        $this->openGraph
            ->set('og:title', __('meta.other_metal_products_title'))
            ->set('og:description', __('meta.other_metal_products_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.other_metal_products'),
                'link' => localized_route('other_metal_products')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/other_metal_products');
    }

    public function perforatedMesh()
    {
        $this->setTitle(__('meta.perforated_mesh_title'));
        $this->setDescription(__('meta.perforated_mesh_description'));

        $this->openGraph
            ->set('og:title', __('meta.perforated_mesh_title'))
            ->set('og:description', __('meta.perforated_mesh_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.rainwater_system'),
                'link' => localized_route('rainwater_system')
            ],
            [
                'label' => __('general.perforated_mesh'),
                'link' => localized_route('perforated_mesh')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('rainwater_system/perforated_mesh');
    }

    public function snowStops()
    {
        $this->setTitle(__('meta.snow_stops_title'));
        $this->setDescription(__('meta.snow_stops_description'));

        $this->openGraph
            ->set('og:title', __('meta.snow_stops_title'))
            ->set('og:description', __('meta.snow_stops_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.snow_stops'),
                'link' => localized_route('snow_stops')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('snow_stops');
    }

    public function paneling()
    {
        $this->setTitle(__('meta.paneling_title'));
        $this->setDescription(__('meta.paneling_description'));

        $this->openGraph
            ->set('og:title', __('meta.paneling_title'))
            ->set('og:description', __('meta.paneling_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.profiled_sheets'),
                'link' => localized_route('profiled_sheets')
            ],
            [
                'label' => __('general.paneling'),
                'link' => localized_route('paneling')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('profiled_sheets/paneling');
    }

    public function aboutUs()
    {
        $this->setTitle(__('meta.about_us_title'));
        $this->setDescription(__('meta.about_us_description'));

        $this->openGraph
            ->set('og:title', __('meta.about_us_title'))
            ->set('og:description', __('meta.about_us_description'));

        $breadcrumbs = [
            [
                'label' => __('general.home'),
                'link' => localized_route('home')
            ],
            [
                'label' => __('general.about_us'),
                'link' => localized_route('about_us')
            ]
        ];

        $this->setBreadcrumbs($breadcrumbs);
        return view('about_us');
    }
}
