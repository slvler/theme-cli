<?php

namespace Slvler\ThemeCli\Managers;

use Slvler\ThemeCli\Contracts\ThemeCliContract;
use Illuminate\Config\Repository;
use Illuminate\Container\Container;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\View\ViewFinderInterface;

class ThemeCli implements ThemeCliContract
{

    protected $basePath;

    /**
     * All Theme Information.
     *
     * @var collection
     */
    protected $themes;

    /**
     * Blade View Finder.
     *
     * @var \Illuminate\View\ViewFinderInterface
     */
    protected $finder;

    /**
     * Application Container.
     *
     * @var \Illuminate\Container\Container
     */
    protected $app;

    /**
     * Translator.
     *
     * @var \Illuminate\Contracts\Translation\Translator
     */
    protected $lang;

    /**
     * Config.
     *
     * @var Repository
     */
    protected $config;

    /**
     * Current Active Theme.
     *
     * @var string|collection
     */
    private $activeTheme = null;

    /**
     * @param Container $app
     * @param ViewFinderInterface $finder
     * @param Repository $config
     * @param Translator $lang
     */
    public function __construct(Container $app, ViewFinderInterface $finder, Repository $config, Translator $lang)
    {
        $this->config = $config;

        $this->app = $app;

        $this->finder = $finder;

        $this->lang = $lang;

        $this->basePath = $this->config['themecli.theme_path'];

        $this->activeTheme = $this->config['themecli.active'];

    }

    /**
     * @return void
     */
    public function set()
    {
        $load = $this->basePath.DIRECTORY_SEPARATOR.$this->activeTheme;
        $this->finder->prependLocation($this->basePath);
        $this->finder->prependLocation($load);
        $this->finder->prependNamespace("themecli", $load);
    }
}
