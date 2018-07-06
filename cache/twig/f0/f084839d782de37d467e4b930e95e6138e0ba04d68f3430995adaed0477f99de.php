<?php

/* @Page:/var/www/html/grav/user/pages/03.markdown */
class __TwigTemplate_d0e14a035e458c3e5658fd33fc59cfab8dc69e11af2df53c30145f20d979a7f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p id=\"demo1\">epe</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/pages/03.markdown";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p id=\"demo1\">epe</p>", "@Page:/var/www/html/grav/user/pages/03.markdown", "");
    }
}
