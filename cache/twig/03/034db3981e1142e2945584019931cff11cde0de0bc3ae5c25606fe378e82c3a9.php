<?php

/* theme.yaml.twig */
class __TwigTemplate_ac176fb7b2fa50d450872401c7c266a3305dbb43eecd697191e3381aa4c50dae extends Twig_Template
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
        echo "streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "
         - user/themes/";
        // line 8
        echo $this->getAttribute(($context["component"] ?? null), "extends", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/{{ component.name|hyphenize }}
         - user/themes/{{ component.extends }}
", "theme.yaml.twig", "/var/www/html/grav/user/plugins/devtools/components/theme/inheritence/theme.yaml.twig");
    }
}
