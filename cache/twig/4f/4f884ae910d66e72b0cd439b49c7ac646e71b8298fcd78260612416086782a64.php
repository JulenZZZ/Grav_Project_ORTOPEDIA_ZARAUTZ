<?php

/* @Page:/var/www/html/grav/user/pages/01.home */
class __TwigTemplate_8f33b1f535795623fbdccf56d772cf3031c97cc307ff6442f7ec748a8a255726 extends Twig_Template
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
        echo "<p>Este es la pagina Home de mi grav.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/pages/01.home";
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
        return new Twig_Source("<p>Este es la pagina Home de mi grav.</p>", "@Page:/var/www/html/grav/user/pages/01.home", "");
    }
}
