<?php

/* forms/fields/list/list.html.twig */
class __TwigTemplate_e7acf5d9f45e7de20a2cba6c982658aba09e6bcff5294b8ed9b07ca7c0786914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/list/list.html.twig", 1);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
            'global_attributes' => array($this, 'block_global_attributes'),
            '__internal_c4fec2b9234c5f34eba65322915f880b984d3e5fa4b55ec0505e4f3ffa1cbd88' => array($this, 'block___internal_c4fec2b9234c5f34eba65322915f880b984d3e5fa4b55ec0505e4f3ffa1cbd88'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 4
        $context["name"] = $this->getAttribute(($context["field"] ?? null), "name", array());
        // line 5
        $context["btnLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnLabel", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnLabel", array())) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 6
        $context["btnSortLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnSortLabel", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnSortLabel", array())) : ("PLUGIN_ADMIN.SORT_BY"));
        // line 7
        $context["fieldControls"] = (($this->getAttribute(($context["field"] ?? null), "controls", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "controls", array()), "bottom")) : ("bottom"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", array())) {
            // line 12
            echo "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"
                       ";
            // line 15
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 16
            echo "                       name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                       ";
            // line 17
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 18
            echo "                >
                <label for=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"></label>
            </span>
        ";
        }
        // line 22
        echo "        <label";
        echo (($this->getAttribute(($context["field"] ?? null), "toggleable", array())) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", array())) . "\"")) : (""));
        echo ">
            ";
        // line 23
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 24
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data";
        // line 31
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\"
        ";
        // line 32
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 37
        echo "    >

        <div class=\"form-list-wrapper ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\" data-type=\"collection\"
             ";
        // line 40
        if ($this->getAttribute(($context["field"] ?? null), "selectunique", array())) {
            // line 41
            echo "                 data-select-unique=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "selectunique", array())), "html_attr");
            echo "\"
                 data-max=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "selectunique", array())), "html", null, true);
            echo "\"
             ";
        }
        // line 44
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "min", array(), "any", true, true)) {
            echo "data-min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "min", array()), "html", null, true);
            echo "\"";
        }
        // line 45
        echo "            ";
        if (($this->getAttribute(($context["field"] ?? null), "max", array(), "any", true, true) &&  !$this->getAttribute(($context["field"] ?? null), "selectunique", array()))) {
            echo "data-max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "max", array()), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "        >
            ";
        // line 47
        if (twig_in_filter(($context["fieldControls"] ?? null), array(0 => "top", 1 => "both"))) {
            // line 48
            echo "                <div class=\"collection-actions";
            echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
            echo "\">
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
            // line 50
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
            echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
            // line 52
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
            echo "</button>
                    ";
            // line 53
            if ($this->getAttribute(($context["field"] ?? null), "sortby", array())) {
                // line 54
                echo "                        <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"
                                ";
                // line 55
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnSortLabel"] ?? null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "'</button>
                    ";
            }
            // line 57
            echo "                    <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"top\"
                            ";
            // line 58
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnLabel"] ?? null))), "html", null, true);
            echo "</button>
                </div>
            ";
        }
        // line 61
        echo "            <ul  ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\"";
        }
        echo " data-collection-holder=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                ";
        // line 62
        if (($this->getAttribute(($context["field"] ?? null), "sort", array()) === false)) {
            // line 63
            echo "                    data-collection-nosort
                ";
        }
        // line 64
        echo ">
                ";
        // line 65
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 66
            echo "                ";
            $context["collapsible"] = ((twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fields", array())) > 1) && ( !$this->getAttribute(($context["field"] ?? null), "collapsible", array(), "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", array())));
            // line 67
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 68
                echo "                    ";
                $context["itemName"] = ((($context["name"] ?? null)) ? (((($context["name"] ?? null) . ".") . $context["key"])) : ($context["key"]));
                // line 69
                echo "                    <li data-collection-item=\"";
                echo twig_escape_filter($this->env, ($context["itemName"] ?? null), "html", null, true);
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"";
                echo (((($context["collapsible"] ?? null) && $this->getAttribute(($context["field"] ?? null), "collapsed", array()))) ? ("collection-collapsed") : (""));
                echo "\">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                        ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 72
                    if (($context["childName"] == "value")) {
                        // line 73
                        $context["childKey"] = "";
                        // line 74
                        echo "                                ";
                        $context["childValue"] = $context["val"];
                        // line 75
                        echo "                                ";
                        $context["childName"] = ($context["itemName"] ?? null);
                    } elseif ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 =                     // line 76
$context["childName"]) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ".") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
                        // line 77
                        $context["childKey"] = twig_trim_filter($context["childName"], ".");
                        // line 78
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute($context["val"], twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                        // line 79
                        echo "                                ";
                        $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                        // line 80
                        echo "                            ";
                    } else {
                        // line 81
                        echo "                                ";
                        $context["childKey"] = $context["childName"];
                        // line 82
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute(($context["data"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $context["childName"])), "method");
                        // line 83
                        echo "                                ";
                        $context["childName"] = twig_replace_filter($context["childName"], array("*" => $context["key"]));
                        // line 84
                        echo "                            ";
                    }
                    // line 85
                    echo "                            ";
                    $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                    // line 86
                    echo "
                            ";
                    // line 87
                    if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                        // line 88
                        echo "                                ";
                        // line 89
                        $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 89)->display(array_merge($context, array("field" =>                         // line 90
$context["child"], "value" => $context["key"])));
                        // line 92
                        echo "                            ";
                    } elseif (($this->getAttribute($context["child"], "key", array()) == true)) {
                        // line 93
                        echo "                                ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                        // line 94
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"), "forms/fields/list/list.html.twig", 93)->display(array_merge($context, array("field" =>                         // line 96
$context["child"], "value" => $context["key"])));
                        // line 98
                        echo "                            ";
                    } elseif ($this->getAttribute($context["child"], "type", array())) {
                        // line 99
                        echo "                                ";
                        $context["originalValue"] = ($context["childValue"] ?? null);
                        // line 100
                        echo "                                ";
                        // line 101
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                        // line 102
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 101)->display(array_merge($context, array("field" =>                         // line 104
$context["child"], "value" => ($context["childValue"] ?? null))));
                        // line 106
                        echo "                            ";
                    }
                    // line 107
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                        <div class=\"item-actions\">
                            ";
                // line 109
                if (($context["collapsible"] ?? null)) {
                    // line 110
                    echo "                                <i class=\"fa fa-chevron-circle-";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", array())) ? ("right") : ("down"));
                    echo "\" data-action=\"";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", array())) ? ("expand") : ("collapse"));
                    echo "\"></i>
                                <br />
                            ";
                }
                // line 113
                echo "                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                ";
        }
        // line 118
        echo "            </ul>
            ";
        // line 119
        if (twig_in_filter(($context["fieldControls"] ?? null), array(0 => "bottom", 1 => "both"))) {
            // line 120
            echo "            <div class=\"collection-actions\">
                ";
            // line 121
            if (($context["collapsible"] ?? null)) {
                // line 122
                echo "                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
                // line 123
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.EXPAND_ALL")), "html", null, true);
                echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
                // line 125
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL")), "html", null, true);
                echo "</button>
                ";
            }
            // line 127
            echo "                ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", array())) {
                // line 128
                echo "                    <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"
                            ";
                // line 129
                if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", array()), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnSortLabel"] ?? null))), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", array()), "html", null, true);
                echo "'</button>
                ";
            }
            // line 131
            echo "                <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                        ";
            // line 132
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            echo "><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, ($context["btnLabel"] ?? null))), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 136
        $context["itemName"] = ((($context["name"] ?? null)) ? ((($context["name"] ?? null) . ".*")) : ("*"));
        // line 137
        echo "<div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(        $this->renderBlock("__internal_c4fec2b9234c5f34eba65322915f880b984d3e5fa4b55ec0505e4f3ffa1cbd88", $context, $blocks), array("   " => " ", "
" => " ")), "html_attr");
        // line 186
        echo "\"></div>

            <div style=\"display: none;\" data-collection-config=\"";
        // line 188
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
";
    }

    // line 32
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 33
        echo "        data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", array()), "html", null, true);
        echo "\"
        data-grav-disabled=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
        data-grav-default=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
        ";
    }

    // line 137
    public function block___internal_c4fec2b9234c5f34eba65322915f880b984d3e5fa4b55ec0505e4f3ffa1cbd88($context, array $blocks = array())
    {
        // line 138
        echo "<li data-collection-item=\"";
        echo twig_escape_filter($this->env, ($context["itemName"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 139
        if ( !($this->getAttribute(($context["field"] ?? null), "sort", array()) === false)) {
            // line 140
            echo "                    <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    ";
        }
        // line 142
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 144
                if (($context["childName"] == "value")) {
                    // line 145
                    $context["childKey"] = "";
                    // line 146
                    $context["childName"] = ($context["itemName"] ?? null);
                } elseif ((is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 =                 // line 147
$context["childName"]) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ".") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9)))) {
                    // line 148
                    $context["childKey"] = twig_trim_filter($context["childName"], ".");
                    // line 149
                    $context["childName"] = (($context["itemName"] ?? null) . $context["childName"]);
                } else {
                    // line 151
                    $context["childKey"] = $context["childName"];
                    // line 152
                    $context["childName"] = twig_replace_filter($context["childName"], array("*" => ($context["key"] ?? null)));
                }
                // line 154
                $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                // line 156
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 158
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/list/list.html.twig", 158)->display(array_merge($context, array("field" =>                     // line 159
$context["child"], "value" => null)));
                } elseif (($this->getAttribute(                // line 161
$context["child"], "key", array()) == true)) {
                    // line 163
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 164
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/key/key.html.twig"), "forms/fields/list/list.html.twig", 163)->display(array_merge($context, array("field" =>                     // line 166
$context["child"], "value" => null)));
                } elseif ($this->getAttribute(                // line 168
$context["child"], "type", array())) {
                    // line 170
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 171
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 170)->display(array_merge($context, array("field" =>                     // line 173
$context["child"], "value" => null)));
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                    <div class=\"item-actions\">
                        ";
            // line 178
            if (($context["collapsible"] ?? null)) {
                // line 179
                echo "                            <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                            <br />
                        ";
            }
            // line 182
            echo "                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>";
        }
        // line 185
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 185,  610 => 182,  605 => 179,  603 => 178,  600 => 177,  585 => 173,  584 => 171,  583 => 170,  581 => 168,  579 => 166,  578 => 164,  577 => 163,  575 => 161,  573 => 159,  572 => 158,  570 => 156,  568 => 154,  565 => 152,  563 => 151,  560 => 149,  558 => 148,  556 => 147,  554 => 146,  552 => 145,  550 => 144,  533 => 143,  531 => 142,  527 => 140,  525 => 139,  520 => 138,  517 => 137,  511 => 35,  507 => 34,  502 => 33,  499 => 32,  491 => 188,  487 => 186,  483 => 137,  481 => 136,  471 => 132,  468 => 131,  455 => 129,  446 => 128,  443 => 127,  434 => 125,  425 => 123,  422 => 122,  420 => 121,  417 => 120,  415 => 119,  412 => 118,  409 => 117,  392 => 113,  383 => 110,  381 => 109,  378 => 108,  364 => 107,  361 => 106,  359 => 104,  358 => 102,  357 => 101,  355 => 100,  352 => 99,  349 => 98,  347 => 96,  346 => 94,  344 => 93,  341 => 92,  339 => 90,  338 => 89,  336 => 88,  334 => 87,  331 => 86,  328 => 85,  325 => 84,  322 => 83,  319 => 82,  316 => 81,  313 => 80,  310 => 79,  307 => 78,  305 => 77,  303 => 76,  300 => 75,  297 => 74,  295 => 73,  293 => 72,  276 => 71,  266 => 69,  263 => 68,  245 => 67,  242 => 66,  240 => 65,  237 => 64,  233 => 63,  231 => 62,  220 => 61,  210 => 58,  207 => 57,  194 => 55,  185 => 54,  183 => 53,  175 => 52,  166 => 50,  160 => 48,  158 => 47,  155 => 46,  148 => 45,  141 => 44,  136 => 42,  131 => 41,  129 => 40,  125 => 39,  121 => 37,  119 => 32,  113 => 31,  106 => 28,  100 => 26,  92 => 24,  90 => 23,  85 => 22,  79 => 19,  76 => 18,  72 => 17,  67 => 16,  63 => 15,  59 => 14,  53 => 12,  51 => 11,  44 => 10,  41 => 9,  37 => 1,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
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

{% set value = (value is null ? field.default : value) %}
{% set name = field.name %}
{% set btnLabel = field.btnLabel is defined ? field.btnLabel : \"PLUGIN_ADMIN.ADD_ITEM\" %}
{% set btnSortLabel = field.btnSortLabel is defined ? field.btnSortLabel : \"PLUGIN_ADMIN.SORT_BY\" %}
{% set fieldControls = field.controls|default('bottom') %}

{% block contents %}
    <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
        {% if field.toggleable %}
            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\">
                <input type=\"checkbox\"
                       id=\"toggleable_{{ field.name }}\"
                       {% if toggleableChecked %}value=\"1\"{% endif %}
                       name=\"toggleable_{{ (scope ~ field.name)|fieldName }}\"
                       {% if toggleableChecked %}checked=\"checked\"{% endif %}
                >
                <label for=\"toggleable_{{ field.name }}\"></label>
            </span>
        {% endif %}
        <label{{ (field.toggleable ? ' class=\"toggleable\" for=\"toggleable_' ~ field.name ~ '\"')|raw }}>
            {% if field.help %}
            <span class=\"hint--bottom\" data-hint=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
            {% else %}
            {{ field.label|tu }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\"
        {% block global_attributes %}
        data-grav-field=\"{{ field.type }}\"
        data-grav-disabled=\"{{ toggleableChecked }}\"
        data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
        {% endblock %}
    >

        <div class=\"form-list-wrapper {{ field.size }}\" data-type=\"collection\"
             {% if field.selectunique %}
                 data-select-unique=\"{{ field.selectunique|json_encode|e('html_attr') }}\"
                 data-max=\"{{ field.selectunique|length }}\"
             {% endif %}
            {% if field.min is defined %}data-min=\"{{ field.min }}\"{% endif %}
            {% if field.max is defined and not field.selectunique %}data-max=\"{{ field.max }}\"{% endif %}
        >
            {% if fieldControls in ['top', 'both'] %}
                <div class=\"collection-actions{{ not value|length ? ' hidden' : '' }}\">
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|e|tu }}</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|e|tu }}</button>
                    {% if field.sortby %}
                        <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|e|tu }} '{{ field.sortby }}'</button>
                    {% endif %}
                    <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"top\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-plus\"></i> {{ btnLabel|e|tu }}</button>
                </div>
            {% endif %}
            <ul  {% if field.classes is defined %}class=\"{{ field.classes }}\"{% endif %} data-collection-holder=\"{{ name }}\"
                {% if field.sort is same as(false) %}
                    data-collection-nosort
                {% endif %}>
                {% if field.fields %}
                {% set collapsible = field.fields|length > 1 and (field.collapsible is not defined or field.collapsible)  %}
                {% for key, val in value %}
                    {% set itemName = name ? name ~ '.' ~ key : key %}
                    <li data-collection-item=\"{{ itemName }}\" data-collection-key=\"{{ key }}\" class=\"{{ collapsible and field.collapsed ? 'collection-collapsed' : '' }}\">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                        {% for childName, child in field.fields %}
                            {%- if childName == 'value' -%}
                                {% set childKey = '' %}
                                {% set childValue = val %}
                                {% set childName = itemName -%}
                            {%- elseif childName starts with '.' -%}
                                {% set childKey = childName|trim('.') %}
                                {% set childValue = val[childName[1:]] %}
                                {% set childName = itemName ~ childName %}
                            {% else %}
                                {% set childKey = childName %}
                                {% set childValue = data.value(scope ~ childName) %}
                                {% set childName = childName|replace({'*': key}) %}
                            {% endif %}
                            {% set child = child|merge({ name: childName }) %}

                            {% if child.type == 'key' %}
                                {%
                                    include 'forms/fields/key/key.html.twig'
                                    with { field: child, value: key }
                                %}
                            {% elseif child.key == true %}
                                {% include [
                                        \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                        'forms/fields/key/key.html.twig'
                                    ] with { field: child, value: key }
                                %}
                            {% elseif child.type %}
                                {% set originalValue = childValue %}
                                {%
                                    include [
                                        \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                        'forms/fields/text/text.html.twig'
                                    ] with { field: child, value: childValue }
                                %}
                            {% endif %}
                        {% endfor %}
                        <div class=\"item-actions\">
                            {% if collapsible %}
                                <i class=\"fa fa-chevron-circle-{{ field.collapsed ? 'right' : 'down' }}\" data-action=\"{{ field.collapsed ? 'expand' : 'collapse' }}\"></i>
                                <br />
                            {% endif %}
                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
                {% endfor %}
                {% endif %}
            </ul>
            {% if fieldControls in ['bottom', 'both'] %}
            <div class=\"collection-actions\">
                {% if collapsible %}
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|e|tu }}</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|e|tu }}</button>
                {% endif %}
                {% if field.sortby %}
                    <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|e|tu }} '{{ field.sortby }}'</button>
                {% endif %}
                <button class=\"button\" type=\"button\" data-action=\"add\" data-action-add=\"bottom\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-plus\"></i> {{ btnLabel|e|tu }}</button>
            </div>
            {% endif %}

            {%- set itemName = name ? name ~ '.*' : '*' -%}
            <div style=\"display: none;\" data-collection-template=\"new\" data-collection-template-html=\"{%- filter replace({'   ': ' ', '\\n': ' '})|e('html_attr') -%}
                <li data-collection-item=\"{{ itemName }}\">
                    {% if field.sort is not same as(false) %}
                    <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    {% endif %}
                    {%- if field.fields -%}
                    {%- for childName, child in field.fields -%}
                        {%- if childName == 'value' -%}
                            {%- set childKey = '' -%}
                            {%- set childName = itemName -%}
                        {%- elseif childName starts with '.' -%}
                            {%- set childKey = childName|trim('.') -%}
                            {%- set childName = itemName ~ childName -%}
                        {%- else %}
                            {%- set childKey = childName -%}
                            {%- set childName = childName|replace({'*': key}) -%}
                        {%- endif %}
                        {%- set child = child|merge({ name: childName }) -%}

                        {%- if child.type == 'key' -%}
                            {%-
                                include 'forms/fields/key/key.html.twig'
                                with { field: child, value: null }
                            -%}
                        {%- elseif child.key == true -%}
                            {%-
                            include [
                                \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                'forms/fields/key/key.html.twig'
                                ] with { field: child, value: null }
                            -%}
                        {%- elseif child.type -%}
                            {%-
                                include [
                                    \"forms/fields/#{child.type}/#{child.type}.html.twig\",
                                    'forms/fields/text/text.html.twig'
                                ] with { field: child, value: null }
                            -%}
                        {%- endif -%}
                    {%- endfor %}
                    <div class=\"item-actions\">
                        {% if collapsible %}
                            <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                            <br />
                        {% endif %}
                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>
                    {%- endif -%}
                </li>
            {%- endfilter -%}\"></div>

            <div style=\"display: none;\" data-collection-config=\"{{ name }}\"></div>
        </div>
    </div>
{% endblock %}

", "forms/fields/list/list.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/list/list.html.twig");
    }
}
