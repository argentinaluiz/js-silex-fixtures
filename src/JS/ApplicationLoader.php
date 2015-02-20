<?php


namespace JS\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\Loader;
use Silex\Application;

class ApplicationLoader extends Loader
{

    /**
     * @var \Silex\Application
     */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function addFixture(FixtureInterface $fixture)
    {
        if ($fixture instanceof ApplicationInterface) {
            $fixture->setApp($this->app);
        }

        parent::addFixture($fixture);
    }

}
