<?php

/* base.php */
class __TwigTemplate_9d1a531f14e51e78960389c971bcccf5f439cc0eb3030b81f2a3c95b1749848f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href=\"/\">Home</a>
        <a href=\"/posts/index\">Post</a>
    </nav>
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "</body>
</html>";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.php";
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  42 => 14,  37 => 16,  35 => 14,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta http-equiv="X-UA-Compatible" content="ie=edge">*/
/*     <title>Document</title>*/
/* </head>*/
/* <body>*/
/*     <nav>*/
/*         <a href="/">Home</a>*/
/*         <a href="/posts/index">Post</a>*/
/*     </nav>*/
/*     {% block body %}*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
