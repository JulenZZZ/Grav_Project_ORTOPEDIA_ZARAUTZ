<?php

/* @Page:/var/www/html/grav/user/pages/03.mypage */
class __TwigTemplate_ebaa01cd9d981a6449c189c09831b318e4f8d1363a10042af9e451ecd85cfed0 extends Twig_Template
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
        echo "<h1>My New Page!</h1>
<p>This is the body of <strong>my new page</strong> and I can easily use <em>Markdown</em> syntax here.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/pages/03.mypage";
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
        return new Twig_Source("<h1>My New Page!</h1>
<p>This is the body of <strong>my new page</strong> and I can easily use <em>Markdown</em> syntax here.</p>", "@Page:/var/www/html/grav/user/pages/03.mypage", "");
    }
}
