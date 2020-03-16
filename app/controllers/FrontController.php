<?php
declare(strict_types=1);



class FrontController extends \Phalcon\Mvc\Controller
{
    /**
     * Welcome home
     */
    public function indexAction()
    {
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
     *
     */
    public function watchAction($id)
    {
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

}

