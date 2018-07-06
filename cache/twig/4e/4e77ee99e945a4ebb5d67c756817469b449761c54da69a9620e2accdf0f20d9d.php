<?php

/* @Page:/var/www/html/grav/user/pages/03.markdown */
class __TwigTemplate_8490763b53ac0104a0981dcf01fb95dd77299dbab963dfebbf9bbb3a468b51b1 extends Twig_Template
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
<div id=\"asesoramiento\"> Asesoramiento </div>
<div id=\"asesoramiento2\">Asesoramos cualquier tipo de empresa que necesite ayuda para crecer</div>";
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
<div id=\"asesoramiento\"> Asesoramiento </div>
<div id=\"asesoramiento2\">Asesoramos cualquier tipo de empresa que necesite ayuda para crecer</div>", "@Page:/var/www/html/grav/user/pages/03.markdown", "");
    }
}
