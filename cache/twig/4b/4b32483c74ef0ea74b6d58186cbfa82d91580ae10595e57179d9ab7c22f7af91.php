<?php

/* @Page:/var/www/html/grav/user/pages/03.markdown */
class __TwigTemplate_d62d69b3d82a521dfee61b01a7a0415ed5e565c24adb4632616cfc43b656f1ed extends Twig_Template
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
        echo "<div class=\"myWrapper\">
<h1>my markdown content</h1>
<p>this content is wrapped into a div with class \"myWrapper\"</p>
</div>
<p>asdasdasd</p>";
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
        return new Twig_Source("<div class=\"myWrapper\">
<h1>my markdown content</h1>
<p>this content is wrapped into a div with class \"myWrapper\"</p>
</div>
<p>asdasdasd</p>", "@Page:/var/www/html/grav/user/pages/03.markdown", "");
    }
}
