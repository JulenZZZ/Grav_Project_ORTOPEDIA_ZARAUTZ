<?php

/* @Page:/var/www/html/grav/user/pages/02.mypage */
class __TwigTemplate_2a5ebf6b54b2b449c578a8bd2bfb753cd9dc64a830aca89f1f059bcb895c4d08 extends Twig_Template
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
        echo "<p id=\"demo1\"> asdasdasdasdasd </p>";
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
        return new Twig_Source("<p id=\"demo1\"> asdasdasdasdasd </p>", "@Page:/var/www/html/grav/user/pages/02.mypage", "");
    }
}
