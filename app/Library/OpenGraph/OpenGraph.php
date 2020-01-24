<?php

namespace App\Library\OpenGraph;

use Exception;

class OpenGraph
{
    /**
     * Supported peroperties
     *
     * @var array
     */
    protected $availableProperties = [
        'og:title',
        'og:description',
        'og:url',
        'og:type',
        'og:site_name',

        'og:locale',
        'og:locale:alternate',

        'og:image',
        'og:image:width',
        'og:image:height',
        'og:image:alt'
    ];
    protected $defaultProperties = [];
    protected $properties = [];

    /**
     * Set up the default properties
     */
    public function __construct()
    {
        $this->defaultProperties = [
            'og:title' => config('app.name', 'CIVIC Group'),
            'og:description' => __('meta.description'),
            'og:url' => url()->current(),
            'og:type' => 'website',
            'og:site_name' => config('app.name', 'CIVIC Group'),

            'og:locale' => app()->getLocale() == 'en' ? 'en_GB' : 'bs_BA',
            'og:locale:alternate' => [app()->getLocale() == 'en' ? 'bs_BA' : 'en_GB'],
            
            'og:image' => asset('img/civic-opengraph.png'),
            'og:image:width' => 1200,
            'og:image:height' => 1200,
            'og:image:alt' => 'civic logo'
        ];
    }

    /**
     * Render the opengraph tags html
     *
     * @return string
     * @throws Exception
     */
    public function render()
    {
        if (!is_array($this->defaultProperties) || sizeof($this->defaultProperties) < 1) {
            throw new Exception('No opengraph properties set');
        }

        $tags = '';
        foreach ($this->availableProperties as $key) {
            $value = null;

            if (!empty($this->properties[$key])) {
                $value = $this->properties[$key];
            } elseif (!empty($this->defaultProperties[$key])) {
                $value = $this->defaultProperties[$key];
            }

            if (!empty($value)) {
                $tags .= $this->buildMetaTag($key, $value);
            }
        }

        return $tags;
    }

    /**
     * Build the meta tag string from the key and the value
     *
     * @param  string       $key
     * @param  string|array $value
     * @return string
     */
    public function buildMetaTag($key, $value)
    {
        $tags = '';

        switch ($key) {
            case 'og:image':
                $tags .= '<meta property="' . $key . '" content="' . htmlspecialchars_decode($value) . '">' . "\n";
            break;

            case 'og:locale:alternate':
                foreach ($value as $tag) {
                    $tags .= '<meta property="' . $key . '" content="' . e($tag) . '">' . "\n";
                }
            break;

            default:
                $tags .= '<meta property="' . $key . '" content="' . e($value) . '">' . "\n";
            break;
        }

        return $tags;
    }

    /**
     * Set up the values of the different opengraph attributes
     *
     * @param  string $key
     * @param  string $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->properties[$key] = $value;

        return $this;
    }

    /**
     * Return the properties that have been set by us
     *
     * @return array
     */
    public function getProperties($key = null)
    {
        if (!empty($key)) {
            if (isset($this->properties[$key])) {
                return $this->properties[$key];
            }

            return null;
        }

        return $this->properties;
    }

    public function enable()
    {
        return $this;
    }
}
