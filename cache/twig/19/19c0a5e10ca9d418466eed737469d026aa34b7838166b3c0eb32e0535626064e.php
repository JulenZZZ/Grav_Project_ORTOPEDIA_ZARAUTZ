<?php

/* forms/fields/2fa_secret/2fa_secret.html.twig */
class __TwigTemplate_90b19507651c4910071b542fc1993115b5962494f22436617441a0474d6b6312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/2fa_secret/2fa_secret.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-input-wrapper twofa-wrapper\">
        ";
        // line 5
        $this->getAttribute(($context["admin"] ?? null), "get2FAData", array(0 => ($context["value"] ?? null)), "method");
        // line 6
        echo "        ";
        $context["data"] = $this->getAttribute(($context["admin"] ?? null), "json_response", array());
        // line 7
        echo "        ";
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == "success")) {
            // line 8
            echo "
            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "image", array()), "html", null, true);
            echo "\" />
            <div>
                <span>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.2FA_SECRET"), "html", null, true);
            echo ": </span><span class=\"twofa-secret-code\" data-2fa-secret>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "secret", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"danger\">
                <button data-hint=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.2FA_REGEN_HINT"), "html", null, true);
            echo "\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ADMIN.2FA_REGENERATE"), "html", null, true);
            echo "</button>
            </div>
            <input type=\"text\" style=\"display:none;\" name=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\" data-2fa-value value=\"";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["data"] ?? null), "secret", array()), array(" " => "")), "html", null, true);
            echo "\" />

        ";
        } else {
            // line 19
            echo "            <div class=\"notice error\">
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "message", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/2fa_secret/2fa_secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  76 => 20,  73 => 19,  65 => 16,  58 => 14,  50 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"form-input-wrapper twofa-wrapper\">
        {% do admin.get2FAData(value) %}
        {% set data = admin.json_response %}
        {% if data.status == 'success' %}

            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"{{ data.image }}\" />
            <div>
                <span>{{ 'PLUGIN_ADMIN.2FA_SECRET'|tu }}: </span><span class=\"twofa-secret-code\" data-2fa-secret>{{ data.secret }}</span>
            </div>
            <div class=\"danger\">
                <button data-hint=\"{{ 'PLUGIN_ADMIN.2FA_REGEN_HINT'|tu }}\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> {{ 'PLUGIN_ADMIN.2FA_REGENERATE'|t }}</button>
            </div>
            <input type=\"text\" style=\"display:none;\" name=\"{{ (scope ~ field.name)|fieldName }}\" data-2fa-value value=\"{{ data.secret|replace({' ':''}) }}\" />

        {% else %}
            <div class=\"notice error\">
                <p>{{ data.message }}</p>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "forms/fields/2fa_secret/2fa_secret.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/2fa_secret/2fa_secret.html.twig");
    }
}
