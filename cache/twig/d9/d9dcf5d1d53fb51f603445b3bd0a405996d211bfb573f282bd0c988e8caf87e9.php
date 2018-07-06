<?php

/* README.md.twig */
class __TwigTemplate_2ed4c3fa1fc82d400d148be12f03d2572288e73407d37c93f23c68eefff870bb extends Twig_Template
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
        echo "# ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo " Theme

The **";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

";
        // line 7
        echo $this->getAttribute(($context["component"] ?? null), "description", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "README.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("# {{ component.name|titleize }} Theme

The **{{ component.name|titleize }}** Theme is for [Grav CMS](http://github.com/getgrav/grav).  This README.md file should be modified to describe the features, installation, configuration, and general usage of this theme.

## Description

{{ component.description }}
", "README.md.twig", "/var/www/html/grav/user/plugins/devtools/components/theme/inheritence/README.md.twig");
    }
}
