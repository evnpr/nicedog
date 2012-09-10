<?php
require 'NiceDog.php';



function site_url()
{
    return dirname($_SERVER['PHP_SELF']);
}

R('')->controller('test')->action('index')->on('GET');
R('post')->controller('test')->action('post')->on('POST');
R('tag/(?P<tag>[-\w]+)')->controller('Test')->action('p_tag')->on('GET');

class Test extends C{

        public function index()
        {
            $halo = 'HELLO WORLD!';
            $content = 'index.php';
            include("views/layout.php");
        }

        public function post()
        {
            $post = $_POST['name'];
            $content = 'post.php';
            include("views/layout.php");
        }

        public function p_tag($tag)
        { 
            $halo = $tag;
            $content = 'tag.php';
            include("views/layout.php");
        }
}


run();

