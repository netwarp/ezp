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

        for ($i = 0; $i < 3; $i++) {
            $videos[] = [
                'title' => "lorem ipsum {$i}",
                'link' => "/watch/$i"
            ];
        }

        $this->view->videos = $videos;
        $this->view->pick('front/index');
    }

}

