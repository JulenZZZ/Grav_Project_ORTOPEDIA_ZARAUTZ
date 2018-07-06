<?php

/* theme.php.twig */
class __TwigTemplate_dc22eea07ca6af06f74752f236a562b18cb9a6de676c113af6c78d935ba9594f extends Twig_Template
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
        echo "<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class ";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo " extends ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute(($context["component"] ?? null), "extends", array()));
        echo "
{
    // Access plugin events in this class
}
";
    }

    public function getTemplateName()
    {
        return "theme.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class {{ component.name|camelize }} extends {{ component.extends|camelize }}
{
    // Access plugin events in this class
}
", "theme.php.twig", "/var/www/html/grav/user/plugins/devtools/components/theme/inheritence/theme.php.twig");
    }
}
