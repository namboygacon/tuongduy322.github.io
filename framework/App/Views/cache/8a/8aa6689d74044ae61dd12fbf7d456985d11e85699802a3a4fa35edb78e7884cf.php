<?php

/* Posts/Detail.html */
class __TwigTemplate_c08b7c4daf4c972d61043b8f2d668a42fe05f01127e3075b530ba700f5c4f074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php", "Posts/Detail.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <h2>Detail Post</h2>
    <p>Title: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</p>
    <p>Content: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "Posts/Detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "base.php" %}*/
/* {% block body %}*/
/*     <h2>Detail Post</h2>*/
/*     <p>Title: {{ post.title }}</p>*/
/*     <p>Content: {{ post.content }}</p>*/
/* {% endblock %}*/
/* {# <!-- <p></p> --> #}*/
