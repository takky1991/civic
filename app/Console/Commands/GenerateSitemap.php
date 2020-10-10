<?php

namespace App\Console\Commands;

use Spatie\Sitemap\Sitemap;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = public_path('sitemap.xml');

        $sitemap = Sitemap::create()
            ->add(localized_route('home', [], 'bs'))
            //->add(localized_route('home', [], 'en'))

            ->add(localized_route('contact', [], 'bs'))
            //->add(localized_route('contact', [], 'en'))

            ->add(localized_route('profiled_sheets', [], 'bs'))
            //->add(localized_route('profiled_sheets', [], 'en'))

            ->add(localized_route('prestige', [], 'bs'))
            //->add(localized_route('prestige', [], 'en'))

            ->add(localized_route('elegant', [], 'bs'))
            //->add(localized_route('elegant', [], 'en'))

            ->add(localized_route('attractive', [], 'bs'))
            //->add(localized_route('attractive', [], 'en'))

            ->add(localized_route('trend', [], 'bs'))
            //->add(localized_route('trend', [], 'en'))

            ->add(localized_route('dampa', [], 'bs'))
            //->add(localized_route('dampa', [], 'en'))

            ->add(localized_route('montage', [], 'bs'))
            //->add(localized_route('montage', [], 'en'))

            ->add(localized_route('siege_sheets', [], 'bs'))
            //->add(localized_route('siege_sheets', [], 'en'))

            ->add(localized_route('rainwater_system', [], 'bs'))
            //->add(localized_route('rainwater_system', [], 'en'))

            ->add(localized_route('horizontal_gutter', [], 'bs'))
            //->add(localized_route('horizontal_gutter', [], 'en'))

            ->add(localized_route('gutter_hooks', [], 'bs'))
            //->add(localized_route('gutter_hooks', [], 'en'))

            ->add(localized_route('gutter_kettle', [], 'bs'))
            //->add(localized_route('gutter_kettle', [], 'en'))

            ->add(localized_route('drain_pipes', [], 'bs'))
            //->add(localized_route('drain_pipes', [], 'en'))

            ->add(localized_route('pipe_holders', [], 'bs'))
            //->add(localized_route('pipe_holders', [], 'en'))

            ->add(localized_route('pipe_elbows', [], 'bs'))
            //->add(localized_route('pipe_elbows', [], 'en'))

            ->add(localized_route('gutter_closure', [], 'bs'))
            //->add(localized_route('gutter_closure', [], 'en'))

            ->add(localized_route('gutter_corner', [], 'bs'))
            //->add(localized_route('gutter_corner', [], 'en'))

            ->add(localized_route('other_metal_products', [], 'bs'))
            //->add(localized_route('other_metal_products', [], 'en'))

            ->add(localized_route('dry_build', [], 'bs'))
            //->add(localized_route('dry_build', [], 'en'))

            ->add(localized_route('references', [], 'bs'))
            //->add(localized_route('references', [], 'en'))

            ->add(localized_route('perforated_mesh', [], 'bs'))
            //->add(localized_route('perforated_mesh', [], 'en'))

            ->add(localized_route('snow_stops', [], 'bs'))
            //->add(localized_route('snow_stops', [], 'en'))

            ->add(localized_route('paneling', [], 'bs'))
            //->add(localized_route('paneling', [], 'en'))
            
            // Articles
            ->add(localized_route('article1', [], 'bs'))

            // EPS
            ->add(localized_route('thermopor', [], 'bs'))
            //->add(localized_route('thermopor', [], 'en'))

            ->add(localized_route('eps_products', [], 'bs'))
            //->add(localized_route('eps_products', [], 'en'))

            ->add(localized_route('eps_advantages', [], 'bs'))
            //->add(localized_route('eps_advantages', [], 'en'))

            ->add(localized_route('eps_quality', [], 'bs'))
            //->add(localized_route('eps_quality', [], 'en'))

            ->add(localized_route('eps_facade_system', [], 'bs'))
            //->add(localized_route('eps_facade_system', [], 'en'))

            ->add(localized_route('energy_saving', [], 'bs'))
            //->add(localized_route('energy_saving', [], 'en'))

            ->add(localized_route('other_products', [], 'bs'));
            //->add(localized_route('energy_saving', [], 'en'))

        $sitemap->writeToFile($path);
    }
}
