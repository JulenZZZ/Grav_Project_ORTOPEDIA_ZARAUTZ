<?php

/* @Page:/var/www/html/grav/user/pages/03.markdown */
class __TwigTemplate_16c9d898bf05dd0394afaf3eb104023715624ef959d5cc221f116d4527227804 extends Twig_Template
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
        echo "<h2 id=\"servicios\" class=\"tc black\">Servicios </h2>";
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
        return new Twig_Source("<h2 id=\"servicios\" class=\"tc black\">Servicios </h2>", "@Page:/var/www/html/grav/user/pages/03.markdown", "");
    }
}
