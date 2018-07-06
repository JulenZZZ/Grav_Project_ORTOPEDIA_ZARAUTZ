<?php

/* @Page:/var/www/html/grav/user/pages/02.mypage */
class __TwigTemplate_584dafacea7cee4b293f2208777c056ddb3d074a0b0dde51c0e5cd29da8a072c extends Twig_Template
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
        echo "<p id=\"reparaciones\">  </p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/pages/02.mypage";
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
        return new Twig_Source("<p id=\"reparaciones\">  </p>", "@Page:/var/www/html/grav/user/pages/02.mypage", "");
    }
}
