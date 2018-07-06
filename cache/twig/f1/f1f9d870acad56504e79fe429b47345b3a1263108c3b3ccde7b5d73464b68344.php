<?php

/* @Page:/var/www/html/grav/user/pages/01.home */
class __TwigTemplate_a018aae423c2bd9a84f8a15711a2438b552ec1ddfc18aa5818de049f74f49e45 extends Twig_Template
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
        echo "<h1>Grav is Running!</h1>
<h2>You have installed <strong>Grav</strong> successfully</h2>
<p>Congratulations! You have installed the <strong>Base Grav Package</strong> that provides a <strong>simple page</strong> and the default <strong>antimatter</strong> theme to get you started.</p>
<div class=\"notices yellow\">
<p>If you want a more <strong>full-featured</strong> base install, you should check out <a href=\"http://getgrav.org/downloads\"><strong>Skeleton</strong> packages available in the downloads</a>.</p>
</div>
<h3>Find out all about Grav</h3>
<ul>
<li>Learn about <strong>Grav</strong> by checking out our dedicated <a href=\"http://learn.getgrav.org\">Learn Grav</a> site.</li>
<li>Download <strong>plugins</strong>, <strong>themes</strong>, as well as other Grav <strong>skeleton</strong> packages from the <a href=\"http://getgrav.org/downloads\">Grav Downloads</a> page.</li>
<li>Check out our [Grav Development Blog](http:/test goings on in the Grav-verse.</li>
</ul>";
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
        return new Twig_Source("<h1>Grav is Running!</h1>
<h2>You have installed <strong>Grav</strong> successfully</h2>
<p>Congratulations! You have installed the <strong>Base Grav Package</strong> that provides a <strong>simple page</strong> and the default <strong>antimatter</strong> theme to get you started.</p>
<div class=\"notices yellow\">
<p>If you want a more <strong>full-featured</strong> base install, you should check out <a href=\"http://getgrav.org/downloads\"><strong>Skeleton</strong> packages available in the downloads</a>.</p>
</div>
<h3>Find out all about Grav</h3>
<ul>
<li>Learn about <strong>Grav</strong> by checking out our dedicated <a href=\"http://learn.getgrav.org\">Learn Grav</a> site.</li>
<li>Download <strong>plugins</strong>, <strong>themes</strong>, as well as other Grav <strong>skeleton</strong> packages from the <a href=\"http://getgrav.org/downloads\">Grav Downloads</a> page.</li>
<li>Check out our [Grav Development Blog](http:/test goings on in the Grav-verse.</li>
</ul>", "@Page:/var/www/html/grav/user/pages/01.home", "");
    }
}
