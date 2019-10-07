<?php

/* Home/Index.html */
class __TwigTemplate_d6b7ae921eee0fdcc900f27d257ad95056370c488ebc2ab80557c89d61322950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php", "Home/Index.html", 1);
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
        echo "    <h1>Welcome</h1>
    <p>Hello from a twig template</p>

    <ul>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["color"]) ? $context["color"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "Home/Index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "base.php" %}*/
/* {% block body %}*/
/*     <h1>Welcome</h1>*/
/*     <p>Hello from a twig template</p>*/
/* */
/*     <ul>*/
/*         {% for item in color %}*/
/*             <li>{{ item }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
