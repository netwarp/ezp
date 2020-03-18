<?php
declare(strict_types=1);

use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Logger;
use Phalcon\Logger\Adapter\Stream;

class FrontController extends Controller
{
    /**
     * @param array $data
     */
    private function log(array $data)
    {
        $date = Date('Y-m-d');
        $adapter = new Stream("../storage/logs/{$date}.log");
        $logger  = new Logger(
            'messages',
            [
                'main' => $adapter,
            ]
        );
        $logger->info(json_encode($data));
    }

    /**
     * Welcome home
     */
    public function indexAction()
    {
        $request = new Request;
        $data = [
            'ip' => $request->getClientAddress(),
            'page' => 'index'
        ];
        $this->log($data);


        $videos = [];

        for ($i = 0; $i < 20; $i++) {
            $videos[] = [
                'title' => "lorem ipsum  {$i}",
                'link' => "/watch/$i",
                'nb_views' => random_int(10_000, 100_000)
            ];
        }

        $this->view->videos = $videos;
        $this->view->pick('front/index');
    }

    /**
     * Watch page
     * @param $id int
     * TODO session increment counter
     * Logger
     */
    public function watchAction($id)
    {
        # Start Logger
        $request = new Request;
        $data = [
            'ip' => $request->getClientAddress(),
            'page' => 'watch'
        ];
        $this->log($data);
        # End Logger

        $this->view->id = $id;

        $this->view->title = 'Lorem ipsum dolor sit amet...';
        $this->view->nb_views = rand(10_000, 100_000);


        $this->view->pick('front/watch');
    }

    /**
     * @param $tag string
     */
    public function tagAction($tag)
    {

    }

    public function newsAction()
    {
        $date = Date('Y-m-d');
        var_dump($date);
    }

    public function mostViewedAction()
    {
        echo '...';
    }

    public function randomAction()
    {

    }
}

