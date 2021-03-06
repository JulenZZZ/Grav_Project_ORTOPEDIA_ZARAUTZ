<?php

/* custom.html.twig */
class __TwigTemplate_3f401df5776d1f56a04d1c90079cfda2709afe39ecbd61d74b858f57e9207c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "
</head>

";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 222
        echo "
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "custom.html.twig", 11)->display($context);
        // line 12
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
        <!-- Link de librerias y CSS-->
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css", 1 => 98), "method");
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/estiloshome.css", 1 => 96), "method");
        // line 19
        echo "            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.10/css/all.css\" integrity=\"sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg\" crossorigin=\"anonymous\">        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.css\">

        ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "    <body id=\"body\">

    <header class=\"bg-blue black-80 tc pv4 avenir\" style=\"background-color: #5bc0de\">

        <h1 class=\"mt2 mb0 baskerville i fw1 f1\">";
        // line 33
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        <h2 class=\"mt2 mb0 f6 fw4 ttu tracked\">";
        // line 34
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array());
        echo "</h2>
        <nav class=\"bt bb tc mw7 center mt4\">
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-lightest-blue dib pa3 ph4-l\" href=\"\">Home</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-green dib pa3 ph4-l\" href=\"#servicios\">Servicios</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-blue dib pa3 ph4-l\" href=\"#app\">App</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-pink dib pa3 ph4-l\" href=\"#tienda\">Tienda</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-yellow dib pa3 ph4-l\" href=\"#form-contacto\">Contacto</a>
        </nav>

    </header>


        <div class=\"parallax\" style=\"min-height:400px; \">

            <div id=\"parallaxtext\" ></div>
        </div>
        <!-- Layout principar creado con HTML y CSS-->
        <article id=\"layout2\"  style=\"height: 460px\">

            <article class=\"cf pa3 mw9 center bg-near-gray\" style=\"height: 670px\">
                <div class=\"fl w-100\">
                    <h2 id=\"servicios\" class=\"tc black\">

                        ";
        // line 57
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "services", array());
        echo "

                    </h2>
                    <div class=\"myWrapper\"></div>
                </div>
                <section class=\"fl w-100\">
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fas fa-cogs fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <p class=\"b f4 tc orange\">";
        // line 65
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "repare", array());
        echo "</p>

                        <p class=\"f6 lh-copy measure tc\">";
        // line 67
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "reparedescrip", array());
        echo "</p>
                    </div>
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fas fa-shopping-cart fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <p id=\"txt-tienda\" class=\"b f4 tc orange\">";
        // line 71
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "shop", array());
        echo "</p>
                        <p class=\"f6 lh-copy measure tc\">
                            ";
        // line 73
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "shopdescrip", array());
        echo "
                        </p>
                    </div>
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fas fa-hands-helping fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <div id=\"asesoramiento\"> <p class=\"b f4 tc orange\">";
        // line 78
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "support", array());
        echo "</p></div>
                        <div id=\"asesoramiento2\"><p class=\"f6 lh-copy measure tc\">";
        // line 79
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "supportdescrip", array());
        echo "</p></div>
                    </div>
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fa fa-map-marker fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <p class=\"b f4 tc orange\">";
        // line 83
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "shop2", array());
        echo "</p>
                        <p class=\"f6 lh-copy measure tc\">
                            ";
        // line 85
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "shopdescrip2", array());
        echo "
                        </p>
                    </div>

                </section>

                <div id=\"hello\">Hello</div>
                <hr/>
                <div id=\"world\">World</div>





            </article>
        </article>
        <!-- Segundo Parallax2 -->
        <article >
            <div id=\"app\">
                <div class=\"parallax2\" style=\"min-height:500px; \">
                    <!-- Imagen del smartphone y texto con icono encima del parallax -->
                    <section class=\"flex-ns vh-100 items-center\">
                        <div class=\"mw6 ph5 ml-100\">
                            <img src=\"https://lh3.googleusercontent.com/bY6K6fjdvjyMmKVRqp5_JNZ9YRVuK-8S9qxvUg1xjrcgpzbv20WMHXBqE_bEIW9vjLRn=h900\" alt=\"img_movil\">
                        </div>
                        <div class=\"tc tl-ns ph3\">
                            <h1 class=\"f4 f1-l fw1 mb3 mt4 mt0-ns near-white\">";
        // line 111
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "layout1", array());
        echo "</h1>
                            <h2 class=\"f5 f3-l fw1 mb4 mb5-l lh-title near-white\">";
        // line 112
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "layouts1", array());
        echo "</h2>
                            <div class=\"btn_apple\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQoSURBVGhD7ZpryBZFFMdfrdSiMsM0b2UEqaCgZKGkUCBKVxIp+lDhLRSlhCyKIAiCEg0MRcqkCKKwy4eKSFEMIdPISivogh/KslIzNdHMSu332zzwtLzQs/tcZl/wD78PM8+zM2d2Z/acObMdiXQO3ANvwU74Bs6DLqPucD/sh5M5RkGX0AD4AMLw72AR/HWq3CUGMhC+Bg3eA9PhTOh7qk4uhUqrB3wKGrsF+kHoBrB+d1aquJw+Gvsl9LaiRqvA317JShWW6+IPOAHjrahRf/gdHMg4K6qsJ0BD12al/+pV8Ld1Wani2g4aOyMr/atusASsPwyXQaV1PhwHDR5mBRoOPgHrjsHNkFwuXOf9FLgW8nd2BGiwPAzvQgzsENwKevMrYRJMhtHgW67lsuOFsA1cwGFo4Gv0ObgFdHD53+UneBY+hBhYLUfhHbANI4Gmynk9B/ZBdOj83gR2qlEOotagzozMcwQ+Ap/WetgBtdfpf8ZCU3QuaGw0/h7cCGdBXq6Fh0Dj4v95DsLzYBu9IK9L4BH4Bfz/n7AAGpLr4BOwQUOLqVCvhoIR7tOwEh6Hm6An1CPDlxchbsADUErGQhvARvTKqV6TrslYj/OsKCrvoBd/D4OtSCSn64+gLRutKCLvvnNTrrYika6CA+Ag3IQZRRfSC+DFK7JSGrno94J2uPgL60Jws6PnTTmlYn0aPZfSHWADa7JSGl0P2vAF+NIppZhWvi1SKfyWN7W0toKNXJOV2i+dpHsY9yr1+pxOFaFGqj20IYn9b85KJWXkGc6nsxCkHTIqtv/XslJJubBsRFLJGMz+38xKDSgGYrCYQjpg+/84KzWg38CGDNpSyD2PEYULvqGbaYDoQFJmNsIZ3p2VSuoNsJHahEG7dTtow+dQ2iFG1PtUVkqjM8DttHY8akUZxVvDDVVKjQGd4t9wpxVFdTbYgP6kcNjcZN0GDkRbzIVpWyFFrDMrK6WV2+PYk/wM90HdmgleaPa8CjJcehu0SQZBXfIRRurHuVoFmXwodXMjP2tYn1pGxCb2tMepVkhuNfWw7hbN2aaUeyMH8RmYLCyspWADKXeLF0OETddZUUYXQCQAPCZLoZfB/hsK69VcsCHzW32saKMiVPGJDLGiEZkRN99rg6utaJM0/FewX0+BmyIbjUN+zzpaLXPOBoz25xFdU+V5RYQLd1lRh3RkE8CDHA+FLoL/kz4swngH05JPO3zEDsQzjMegs9OlkbAYdoHG5NG4B8FT3byugDiS+AFamiB08cdnF9/CkzAbPBd5H2qNdjCuL1/fJqDjzEPMZL4OTtX58BJ4WuVvX8Hl0HKZ84qvGfJ4kLMcPBvMyxeH08wPBNzK5q916j4D+Q8LWio97ERw42PnPplpUG+o7accPkmd7jK4F+oOBk+r2uro+AeDD0DqNNESEwAAAABJRU5ErkJggg==\" alt=\"icono_apple\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQhSURBVGhD7ZpJqBRXGEafQzRqQgTdBMQBFI1xVtQ4oJuALoMriauAIFkFcadLFwpuXOhCcQ5BVKKoOCCJwY0iRFeuXBhFo2ZQYySgcToH+oeiqH5d3V3VXQ3vg8PrGl99Xbfu/f5b3TegHtFqeAR/wHYYDT2ph/AuwZ+wAQZDz+hj8OJfwYva5+AGrISe0CfgRT+D5fBvbTnJCRgPlVbSiFoGYeYluN7P/8FW+AgqqbQRpZnn4PozcADe1JYfwFoYBJVSlhG1FP4Bt+2HBfBLbVmuwmKojOoZUUsgmtZBGArejbu1dW9hH3wKXVd/RpTfepg5DENgBGwBnxvX+0xthuHQNTUyohZCmDkCmlH2ZD+Ad8Ztt+Er6IryGFE+I0/Bfb+HMKO+AMcct8llmAEdVV4jaj48Aff3TiTNmAK+gd/B7f/DLhgLHVEzRtQ8+Bs85igkzSiTwg5wDHIf7+J3YEdRqpo1oubCX+BxxyDrIifDj+A+cgtWQWlqxYiaA4ZLjz0OH0CWvHhNhKHzMAUKV6tGVNKMeWwYZMk79i3E82Wzs/kVWi60Y0TNBusYz2FTqmdG+eDvBvcVvwQ7iELKhXaNqJkQZk5BPTPmsz3gfq9rf+VXaDvuFGFEfQ6PwXOdhrQZTewFtxtIDaYOng6irnNQtUtvuVwoyoiaDpbMnu8shBmbjpnM9QZRA2nIuGO8idLB2GP8cX1TKtKI+gyidD4HI8H0HP/DIJolg6dmo1wwmBpQc6toI2oaxAgffz2/UaaRzHWWCB4jmsulMowom1mM7rb/FZBXPk/rIcLoOGioMowYWw6B5w0cCPO0e02sg7iT9yBXeVC0EU1Yt3hOM9kaiELsIvjM1NMiSDYrP0+EXCrSiCaM+J7PLGYmU5PgN3D9JUibST/oLc0LFGVEE44DaRMhv9k74HbrFc3YPW+CZNfb8kxNEUY0YaT3PMYOM1iWJkCYuQYxGEpbg6Fq14iB0CjvOYwpZq/+5DxzXLwUNpvZjhGjuxE+TMyCehoDVoxWju5vr1RYYFStGrF9G93DhMExSxHhI+47tmyDwmcsWzGiiaj+DIoGxiyliyqPsXIsRc0a0YRRPUw4gqflxZ6EMKCZL6FUNWNEE0Z09zflpk1Y8SUnHhwQbValTzyovEaSJky3ptxQTAVF6u34VJDKY0QT1hdhwnQbsutMTs79DFnNrXQ1MmJgs65wH7vMMFGp6VLVn5EPwdTqdvPPVBgFxoj0BLZ3rauqZ8TIfQHcdh80kX6lYOVXiVcKKsuIgc7IHSasD9LxulIveVTaiCaM2q6zG70CEa99Rr6GpuJ1p5Q0oomfastJKv8iVIUR37FbJ6RNGCssjCov70J0oUluQs/8WCB0HcKAKbVjsaJoWYbuhI3Qsz+oGVD31Nf3HlF3i5jr+ZCjAAAAAElFTkSuQmCC\" alt=\"icono_google\">
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </article>

        <article id=\"layout-contacto\" >
            <div id=\"tienda\"  class=\"tc baskerville f1 lh-title\" style=\"min-height:400px;\"> <p class=\"dib v-mid black\" id=\"compra_btn\">";
        // line 125
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "calltoaction", array());
        echo "</p><br><div class=\"tc baskerville f3 lh-copy\" ><p class=\"dib v-mid orange\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "calltoaction2", array());
        echo "</p><br>
            <!-- <div class=\"button raised hoverable\">
                <div class=\"anim\"></div><span class=\"f3 b helvetica\">Hover!</span>
            </div> -->
                   <a href=\"#\" class=\"btn\" >
                       <span class=\"btn-content\">Compra</span>

                       <span class=\"icon\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></span>
                   </a>


               </div>
           </div>
            <br/>
            <div id=\"hola\"></div>
            <hr/>
            <div id=\"mundo\"></div>
            <br/>
            <div id=\"form-contacto\" class=\" bg-ligth-blue br-pill\">
            <div class=\"pa4 black-80\">
                <form class=\"measure center\">
                    <fieldset  class=\"ba b--transparent ph0 mh0\">
                        <legend class=\"f4 fw6 ph0 mh0\">";
        // line 147
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "form1", array());
        echo "</legend>
                        <div class=\"mt3\">
                            <label class=\"db fw6 lh-copy f6\" >";
        // line 149
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "form2", array());
        echo "</label>
                            <input class=\"pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100\" type=\"text\" name=\"name\"  id=\"nombre\">
                        </div>
                        <div class=\"mv3\">
                            <label class=\"db fw6 lh-copy f6\">";
        // line 153
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "form3", array());
        echo "</label>
                            <input class=\"b pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100\" type=\"email\" name=\"email\"  id=\"email-address\">
                        </div>
                        <div class=\"mv3\">

                            <label for=\"comment\" class=\"f6 b db mb2\">";
        // line 158
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "form4", array());
        echo " <span class=\"normal black-60\">(opcional)</span></label>
                            <textarea id=\"comment\" name=\"comment\" class=\"db border-box hover-black w-100 measure ba b--black-20 pa2 br2 mb2\"></textarea>

                        </div>

                            <input id=\"enviar\" class=\"b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib\" type=\"button\" value=\"Enviar\">
                    </fieldset>
                </form>
            </div>
            </div>
        </article>
        ";
        // line 169
        $this->displayBlock('footer', $context, $blocks);
        // line 188
        echo "        <!-- Scripts de JS-->

        ";
        // line 190
        $this->displayBlock('javascripts', $context, $blocks);
        // line 196
        echo "        <script >
            \$(document).ready(function() {
                \$(\"#enviar\").click(function() {
                    swal(\"Gracias!\", \"Su mensaje sera leído!\", \"success\");
                });
                \$(\".btn_apple\").click(function() {
                    swal({
                        title: '<i>¡Inscríbase!</i>',

                        input: 'email',
                        inputPlaceholder: 'Enter your email address'
                    })

                });
            });


        </script>



        ";
        // line 217
        $this->displayBlock('bottom', $context, $blocks);
        // line 220
        echo "    </body>
";
    }

    // line 169
    public function block_footer($context, array $blocks = array())
    {
        // line 170
        echo "            <footer class=\"pv4 ph3 ph5-m ph6-l mid-gray\" style=\"background-color: #5bc0de\">

                <div class=\"mb4 mb0-ns fl w-100 w-50-l\" >

                    <input placeholder=\"Direccion Correo\" class=\"mw-100 w-100 w5-ns f5 input-reset ba b--black-20 pv3 ph4 border-box\">
                    <input type=\"submit\" class=\"input-reset w-100 w-auto-ns bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray\">
                </div>
                <small class=\"f6 db tc\">@ ";
        // line 177
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "year", array());
        echo " <b class=\"ttu\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo " Inc</b>., Todos los derechos reservados</small>
                <div class=\"tc mt3\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGfSURBVGhD7dnNKkVRGMbxI0n5zC2YMCRTE6YYmkqJoTtwAdyACQOkkKkrMKGYSAwocxPKx0C+/m85tVq99trOWfZap96nfpPTWm897bP3+Vg1i8XSUNowjzO84SuxR+xjGKUjJTahDUztGZMoFbkS2pBc3KMPwZxDG5CTRRRG3lY53BMh6yhMP7SNudlFYaxIxazIf/mAPE6fnNfKyKbICabRiXp6MYNTaHtcWRTZRjt+yxS0fa7kRa7gXgUtLVFEvv6Ekn2RTwxAi9wfgz8WoO13JS1yBz8dOIQ8vbQ9v0laRL6M+hmFtjYkaZFj+BmHtjbEijTiFfJTuW4DfkbgrhG30Oa5Ki1ygUayDG2eqyWKbEGb52qJIpfQ5rmyL9KNd2jzXJUWucGYYwh+euCumYM2y1dpEZ99jiisSAxWRGFFYrAiCisSgxVRBIt0QdsYQ8wiOwjmAdrmZsUssopg9qBtblbMIhMIRo6AX6ANaMY1Zj0r0NYWOULpyBGw/N2vDUpJSsgD6U+RI+AlyMHjQULyhFpD6fN1i8Xip1b7BmzB3x8v5/laAAAAAElFTkSuQmCC\" alt=\"icon_facebook\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ5SURBVGhD7dlZqFVVHMfxW1Y2UWphFBEVKSqK0UBz0EBFllAOKAriSIRYBFEU0UsPzURU1EMPQfVQREUWiVhpD0FYNhnRPFHRTCPNfb90FmzW+e99977ufZS4P/jAvfecvdY+++y91n+tOzSa/3EOwRLcg2fxGX7AP/gT3+ItPIbrcCb2xA6RCbgEm+EJN/ULHsA52AkDz/64AemKt+EVzMVAPpCdrMRXiE6mDd6WU9FZ9sNaRJ237VesQuuZgg8Rddqle7ELWskx+BpRR4PwBHbDNmUavkTUwSA9hDEYUXwmPkbU8PZwMxrH0anqwf4Nf2R/a8PPwd+SvzEbjeIQGzWWnA+/6sNxGd5B9D45ozvxRa95Me7DWdgHtvkCovfK29xJuFa8paoe7t+xM4rxYbwW7+EOnI2DUXxIPVHnh4vwNF7GdOS5HFG/yd2oFWfsqIHEq9JlliHqN7Fum4TK+LX9iKiB5Ht0GSfCqN8i55fKrEF0YG48usqNiPoscuYfh9K8hOjA3BnoKtZaUZ+50hLG9UR0QMR1R1dxwIj6zD2FMJ5cdEDuDeyKrrIAUb85lxDhebiyiw7IdVKVFuLQ/hGivnNHoS8bEb25yNnVRVXXca6I+s8tRF8+RfTmIq/UIHIpov5z16AvdZatr2MQuRhR/7mwkCy+wTLEGul9fNH7WW9iEHF2d0NDz2M9nuv9/i6+ged5F/ri/e+LY3usuSwK5QSYjHhd0CCTcXTP6XDr6LTe75YnV6H0g3wHX4zKc8sW96nclzoVXcYlxDo4n1jXlVXOuh598bbxxVswD8fiADgcWrkeCK+GQ16XWzZOzEfCO2EiUnlvNX0yFiOV+u6p9cW1sS8+ApeWL6JsmbsaXcSTjZYQVryfwOflfqT1zyz05UrkDZSxYb+1NuM37qgY9Rf5Cz7HfTkR0QFlHBwc/vbGtuZcfI6onzKvIox1S9ma2ecnjWo5T8DV4WFoEi+AdVXdajd3O0rjhnJ0kPXVDHgVoteTt/EgrsYiHATjw3oCXO+4FLYccgMjaqOuytHzeEQH+W1cgH3xWu9vVZ6Bo0+eC+EKMzqmCdf7w6ZsceW47valI4uza/QebULVzuBxqNr2qWMFhs0cRAfLK2qc4Z1dH8XD8Ja8E9ZIlUvQXq5A1H4d7kHvgVp5ElEjG9BG/MasFKI+hnMeaudQlH39S9FGbkPUfhUn68Yp25bxwfeWcjfSSTEJZ9mKzEfUfhln9jQKNs5wm3VFW9EkDp9RO5Gf4PA/4jj+P46o8ZzDcpNYAEbt5CyHGm9eR/HBdKM56qSoiw/i8qHpLVsZy3bXx2Vlitr+ID4TlvOdxH8nlG3VtPlBHJ2shjuNxd5NyFeSTT/ISSgerw/QaJ5oI0fgVqQlsht8TeLOfzp2C5Zjd2y37AXnhNplQyEzccp/P45mNDtghob+BWm8vkDPJb3BAAAAAElFTkSuQmCC\" alt=\"icon_github\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANmSURBVGhD7dpJyI1RHMfx10yUWcRCWdgQEfYoCkVJpgUZSmwkomShTAsUybSUIVFiYVgoKwvKsJFxoyxMmcsQvr96T93efue5z7n3vPfexfurz+ae8zzvPe7znPN/zqOtK11pfrphOvbhLl7jF/5l8gVPcA3rMRLZMxcP4L5AZ/mNkxiFujMAl+D+UKN8w3LUnNF4BHfyRvuLPUhOfzyGO2kzbUNSLsOdqNn+QPdrqcyBO0mreI5eKIym2IdwJ2iU7+azjjaiMDPgDmyUdeiOcdC/vOsjWgoKsxfuwEbo+OXWwvULxiIardjuoHq8R5nL5QX0a4RshesXrEI0KjvcQSnuYwvGozdCBmI2juID3LFaySdiKT62fxazC9HUUzs9wyJUpgdUYmgQlRmE/VAZ4s5VxnFE4w4o4yYGQ9GX3I570Lwf+nzCRSxAiH6h2K9TzVlE4w6o5hZ6QtEl8Q6uX6XbGANlEsrcQx1lHYimyHDZ7IRqItfPeQPdD8piuD5Fsg4k3BPLkDKIQDPVUCg34PrEZBuIZidFv0iZyynmCJQpcO0x2QaiKVbZAddelmbKEVA087k+TraBaJ1QNDu59hRroByGa3eyDUSLndaJyim2ViegqBh07U6WgbyFog0C157qChRNHq7dyTKQH1B0o7v2VBegrIBrd7JdWmH9+AzXnuIAlGqFYqVsA1F5oajscO0pZkFJOVe2gaiKVebBtZf1Cnp07YOv7Z+VkW0gKvZUICp34PqUofpM0dOha4/JNhAJ17YKQNVOrk+R01C0/ZR6fNaBaA2ZCWUCXsL1czQIrUXa8DjX/lmKrAMRXWKToQyB7p2fcH1F90S4nDSI3XD9qsk+ENH+7BKEqHZS2aGnuKs4Dz0RanYKzy7aV67llwjOIBpt7buDyrqOaShKX+jGruWeqnQQ0TyFOyiVqthD2ISFWAktdlonUqbYIpsRjS4Dd1Armo9oUufyZtEzfj9Eo2q2ni2aRtHbgqo5BXdwq9DewFRUjTbUNJ26k7QCTdmlo+eCWnZFOpsqh+FIil5Du5M1i3Yqwz5YcvTOLsczeb1U1tQ8iBC9iit66dKZdHnrnhiGLNGDzwY06j8NaJ3Q+/1Ss1Ot0Zui1dD7iWPQO40cVNKo7NBufeFi15WuNCxtbf8Bp01RYjO59oUAAAAASUVORK5CYII=\" alt=\"icon_instagram\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANfSURBVGhD7ZlZ6A5RGMbHkn0niVBkSQm5oGzZSglFcuOGJMuFIlcohRsRJblAlhBSUiSU7FuiSESEC4Qba7bwe87M65vGfPPNf2Hmq3nq1zfPme2837znzDlnvEKFCtW7GkJ7aOtcSY1A5W2cqwKpwq/gO3RSQaCZ8AsOOFcl2gaq9DznfB0GlU13rko0FlTpU855Xgv4CO+huQqqRdH0KpdWCkptKqzGoLbU2rmSb+VcBgqnVzStJsJDUNk3OAjWOYwElV90ruSPO5eBxoEqcAHCaSU+g/Z9gZ/B9gaQcheIpZcqISyteoP8C1BQekryp0HKXSCSpZewtBoI8necK/loxXMVyHhQJZRa1ltVZSA9QJV45pyvIhDnMlKaQAZBUiCjIZeBdAGVqTseBWsCfxKkESD/OtjeF/jcBSJdApWHWQpSR/gEVq7RgX4zDaQrPAZLE1NnUNd8A87BYmgApkmgc47BLNA1dkChNGoGfWBoBqij6AbRgWeNpIZ6BiyHs0QdwyboADXSfPgBcRfNkifQHVJpCOQxCOMypNJeiLuA+Ao3Y9DLL+544wPouAehsrqgtK8oDb/jThbR94XJ3ifliL7V68pqSJSmnTYRiuMlqDfRMERqAvKTIe54o74D2QmJ0nQ07sQo9mTsSVjK3Qu8ZohhHw5Es8YroD/Frif0tr8LSr9KbXQ/JKq2gZivNPLtC738TbfYoGC1/wi0A9NgUJerfXFkHohSdw9Mcc7z5oIGl7ai0h+a+pveCrD7Rck8kOEgb/P3MXDd3/QGgNrnLuc8bwbo2DgyDyQ6F5G37WGgkcRa55I7kFwHElXVBqIVywkhct1GkgKxJ/AGlGK3Ax/HPw+kH8jfcq58IOed8/01f/PPyuVR5+rY2LV6mPRmN6KBPHfOnwVuhGnO/R2Iprm7QZWUpsJbULesLji8bxGE7xlG8/yKShprGdFA9CbuqYJAtrIeDUSVDU95D4H2r3SupJZwFex+UTZDRWkNN+7kMMpjfUpYGCp7BFqZXwIagmj/MtC++4FfBSdgNujft3PFWVgHW+FpUFaOOVBRGiLHnZwX3oFSNJX0r8RdJA8oC1JLjX495GG+bmhMtgBqJX3rWA7bQV+l/jf60rUF1PZSp1OhQoUK5V2e9xt/Z0EQ+c/piQAAAABJRU5ErkJggg==\" alt=\"icon_youtube\">
                    <img src=\"data:image/png;base64,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\" alt=\"icon_salt\">
                </div>
            </footer>

        ";
    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        // line 191
        echo "            <!-- jQuery -->
            <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
            <!-- Sweet Alert -->
            <script src=\"https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.js\"></script>
        ";
    }

    // line 217
    public function block_bottom($context, array $blocks = array())
    {
        // line 218
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 218,  380 => 217,  372 => 191,  369 => 190,  352 => 177,  343 => 170,  340 => 169,  335 => 220,  333 => 217,  310 => 196,  308 => 190,  304 => 188,  302 => 169,  288 => 158,  280 => 153,  273 => 149,  268 => 147,  241 => 125,  225 => 112,  221 => 111,  192 => 85,  187 => 83,  180 => 79,  176 => 78,  168 => 73,  163 => 71,  156 => 67,  151 => 65,  140 => 57,  114 => 34,  110 => 33,  104 => 29,  101 => 28,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  78 => 23,  76 => 16,  71 => 14,  67 => 13,  64 => 12,  62 => 11,  55 => 7,  52 => 6,  49 => 5,  43 => 222,  41 => 28,  36 => 25,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{{ page.title }}</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% include 'partials/metadata.html.twig' %}

        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
        <!-- Link de librerias y CSS-->
        {% block stylesheets %}
            {% do assets.addCss(\"https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css\", 98) %}
            {% do assets.addCss('theme://css/estiloshome.css', 96) %}
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.10/css/all.css\" integrity=\"sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg\" crossorigin=\"anonymous\">        {{ assets.css() }}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.css\">

        {% endblock %}

    {% endblock head%}

</head>

{% block body %}
    <body id=\"body\">

    <header class=\"bg-blue black-80 tc pv4 avenir\" style=\"background-color: #5bc0de\">

        <h1 class=\"mt2 mb0 baskerville i fw1 f1\">{{ page.title }}</h1>
        <h2 class=\"mt2 mb0 f6 fw4 ttu tracked\">{{ page.header.description }}</h2>
        <nav class=\"bt bb tc mw7 center mt4\">
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-lightest-blue dib pa3 ph4-l\" href=\"\">Home</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-green dib pa3 ph4-l\" href=\"#servicios\">Servicios</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-blue dib pa3 ph4-l\" href=\"#app\">App</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-pink dib pa3 ph4-l\" href=\"#tienda\">Tienda</a>
            <a class=\"f6 f5-l link bg-animate black-80 hover-bg-light-yellow dib pa3 ph4-l\" href=\"#form-contacto\">Contacto</a>
        </nav>

    </header>


        <div class=\"parallax\" style=\"min-height:400px; \">

            <div id=\"parallaxtext\" ></div>
        </div>
        <!-- Layout principar creado con HTML y CSS-->
        <article id=\"layout2\"  style=\"height: 460px\">

            <article class=\"cf pa3 mw9 center bg-near-gray\" style=\"height: 670px\">
                <div class=\"fl w-100\">
                    <h2 id=\"servicios\" class=\"tc black\">

                        {{ page.header.services }}

                    </h2>
                    <div class=\"myWrapper\"></div>
                </div>
                <section class=\"fl w-100\">
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fas fa-cogs fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <p class=\"b f4 tc orange\">{{ page.header.repare }}</p>

                        <p class=\"f6 lh-copy measure tc\">{{ page.header.reparedescrip }}</p>
                    </div>
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fas fa-shopping-cart fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <p id=\"txt-tienda\" class=\"b f4 tc orange\">{{ page.header.shop }}</p>
                        <p class=\"f6 lh-copy measure tc\">
                            {{ page.header.shopdescrip }}
                        </p>
                    </div>
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fas fa-hands-helping fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <div id=\"asesoramiento\"> <p class=\"b f4 tc orange\">{{ page.header.support }}</p></div>
                        <div id=\"asesoramiento2\"><p class=\"f6 lh-copy measure tc\">{{ page.header.supportdescrip }}</p></div>
                    </div>
                    <div class=\"fl w-100 w-50-m w-25-l pa3-m pa4-l\">
                        <div class=\"tc ml-100\"><i class=\"fa fa-map-marker fa-5x text-primary blue\" aria-hidden=\"true\"></i></div>
                        <p class=\"b f4 tc orange\">{{ page.header.shop2 }}</p>
                        <p class=\"f6 lh-copy measure tc\">
                            {{ page.header.shopdescrip2 }}
                        </p>
                    </div>

                </section>

                <div id=\"hello\">Hello</div>
                <hr/>
                <div id=\"world\">World</div>





            </article>
        </article>
        <!-- Segundo Parallax2 -->
        <article >
            <div id=\"app\">
                <div class=\"parallax2\" style=\"min-height:500px; \">
                    <!-- Imagen del smartphone y texto con icono encima del parallax -->
                    <section class=\"flex-ns vh-100 items-center\">
                        <div class=\"mw6 ph5 ml-100\">
                            <img src=\"https://lh3.googleusercontent.com/bY6K6fjdvjyMmKVRqp5_JNZ9YRVuK-8S9qxvUg1xjrcgpzbv20WMHXBqE_bEIW9vjLRn=h900\" alt=\"img_movil\">
                        </div>
                        <div class=\"tc tl-ns ph3\">
                            <h1 class=\"f4 f1-l fw1 mb3 mt4 mt0-ns near-white\">{{ page.header.layout1 }}</h1>
                            <h2 class=\"f5 f3-l fw1 mb4 mb5-l lh-title near-white\">{{ page.header.layouts1 }}</h2>
                            <div class=\"btn_apple\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQoSURBVGhD7ZpryBZFFMdfrdSiMsM0b2UEqaCgZKGkUCBKVxIp+lDhLRSlhCyKIAiCEg0MRcqkCKKwy4eKSFEMIdPISivogh/KslIzNdHMSu332zzwtLzQs/tcZl/wD78PM8+zM2d2Z/acObMdiXQO3ANvwU74Bs6DLqPucD/sh5M5RkGX0AD4AMLw72AR/HWq3CUGMhC+Bg3eA9PhTOh7qk4uhUqrB3wKGrsF+kHoBrB+d1aquJw+Gvsl9LaiRqvA317JShWW6+IPOAHjrahRf/gdHMg4K6qsJ0BD12al/+pV8Ld1Wani2g4aOyMr/atusASsPwyXQaV1PhwHDR5mBRoOPgHrjsHNkFwuXOf9FLgW8nd2BGiwPAzvQgzsENwKevMrYRJMhtHgW67lsuOFsA1cwGFo4Gv0ObgFdHD53+UneBY+hBhYLUfhHbANI4Gmynk9B/ZBdOj83gR2qlEOotagzozMcwQ+Ap/WetgBtdfpf8ZCU3QuaGw0/h7cCGdBXq6Fh0Dj4v95DsLzYBu9IK9L4BH4Bfz/n7AAGpLr4BOwQUOLqVCvhoIR7tOwEh6Hm6An1CPDlxchbsADUErGQhvARvTKqV6TrslYj/OsKCrvoBd/D4OtSCSn64+gLRutKCLvvnNTrrYika6CA+Ag3IQZRRfSC+DFK7JSGrno94J2uPgL60Jws6PnTTmlYn0aPZfSHWADa7JSGl0P2vAF+NIppZhWvi1SKfyWN7W0toKNXJOV2i+dpHsY9yr1+pxOFaFGqj20IYn9b85KJWXkGc6nsxCkHTIqtv/XslJJubBsRFLJGMz+38xKDSgGYrCYQjpg+/84KzWg38CGDNpSyD2PEYULvqGbaYDoQFJmNsIZ3p2VSuoNsJHahEG7dTtow+dQ2iFG1PtUVkqjM8DttHY8akUZxVvDDVVKjQGd4t9wpxVFdTbYgP6kcNjcZN0GDkRbzIVpWyFFrDMrK6WV2+PYk/wM90HdmgleaPa8CjJcehu0SQZBXfIRRurHuVoFmXwodXMjP2tYn1pGxCb2tMepVkhuNfWw7hbN2aaUeyMH8RmYLCyspWADKXeLF0OETddZUUYXQCQAPCZLoZfB/hsK69VcsCHzW32saKMiVPGJDLGiEZkRN99rg6utaJM0/FewX0+BmyIbjUN+zzpaLXPOBoz25xFdU+V5RYQLd1lRh3RkE8CDHA+FLoL/kz4swngH05JPO3zEDsQzjMegs9OlkbAYdoHG5NG4B8FT3byugDiS+AFamiB08cdnF9/CkzAbPBd5H2qNdjCuL1/fJqDjzEPMZL4OTtX58BJ4WuVvX8Hl0HKZ84qvGfJ4kLMcPBvMyxeH08wPBNzK5q916j4D+Q8LWio97ERw42PnPplpUG+o7accPkmd7jK4F+oOBk+r2uro+AeDD0DqNNESEwAAAABJRU5ErkJggg==\" alt=\"icono_apple\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQhSURBVGhD7ZpJqBRXGEafQzRqQgTdBMQBFI1xVtQ4oJuALoMriauAIFkFcadLFwpuXOhCcQ5BVKKoOCCJwY0iRFeuXBhFo2ZQYySgcToH+oeiqH5d3V3VXQ3vg8PrGl99Xbfu/f5b3TegHtFqeAR/wHYYDT2ph/AuwZ+wAQZDz+hj8OJfwYva5+AGrISe0CfgRT+D5fBvbTnJCRgPlVbSiFoGYeYluN7P/8FW+AgqqbQRpZnn4PozcADe1JYfwFoYBJVSlhG1FP4Bt+2HBfBLbVmuwmKojOoZUUsgmtZBGArejbu1dW9hH3wKXVd/RpTfepg5DENgBGwBnxvX+0xthuHQNTUyohZCmDkCmlH2ZD+Ad8Ztt+Er6IryGFE+I0/Bfb+HMKO+AMcct8llmAEdVV4jaj48Aff3TiTNmAK+gd/B7f/DLhgLHVEzRtQ8+Bs85igkzSiTwg5wDHIf7+J3YEdRqpo1oubCX+BxxyDrIifDj+A+cgtWQWlqxYiaA4ZLjz0OH0CWvHhNhKHzMAUKV6tGVNKMeWwYZMk79i3E82Wzs/kVWi60Y0TNBusYz2FTqmdG+eDvBvcVvwQ7iELKhXaNqJkQZk5BPTPmsz3gfq9rf+VXaDvuFGFEfQ6PwXOdhrQZTewFtxtIDaYOng6irnNQtUtvuVwoyoiaDpbMnu8shBmbjpnM9QZRA2nIuGO8idLB2GP8cX1TKtKI+gyidD4HI8H0HP/DIJolg6dmo1wwmBpQc6toI2oaxAgffz2/UaaRzHWWCB4jmsulMowom1mM7rb/FZBXPk/rIcLoOGioMowYWw6B5w0cCPO0e02sg7iT9yBXeVC0EU1Yt3hOM9kaiELsIvjM1NMiSDYrP0+EXCrSiCaM+J7PLGYmU5PgN3D9JUibST/oLc0LFGVEE44DaRMhv9k74HbrFc3YPW+CZNfb8kxNEUY0YaT3PMYOM1iWJkCYuQYxGEpbg6Fq14iB0CjvOYwpZq/+5DxzXLwUNpvZjhGjuxE+TMyCehoDVoxWju5vr1RYYFStGrF9G93DhMExSxHhI+47tmyDwmcsWzGiiaj+DIoGxiyliyqPsXIsRc0a0YRRPUw4gqflxZ6EMKCZL6FUNWNEE0Z09zflpk1Y8SUnHhwQbValTzyovEaSJky3ptxQTAVF6u34VJDKY0QT1hdhwnQbsutMTs79DFnNrXQ1MmJgs65wH7vMMFGp6VLVn5EPwdTqdvPPVBgFxoj0BLZ3rauqZ8TIfQHcdh80kX6lYOVXiVcKKsuIgc7IHSasD9LxulIveVTaiCaM2q6zG70CEa99Rr6GpuJ1p5Q0oomfastJKv8iVIUR37FbJ6RNGCssjCov70J0oUluQs/8WCB0HcKAKbVjsaJoWYbuhI3Qsz+oGVD31Nf3HlF3i5jr+ZCjAAAAAElFTkSuQmCC\" alt=\"icono_google\">
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </article>

        <article id=\"layout-contacto\" >
            <div id=\"tienda\"  class=\"tc baskerville f1 lh-title\" style=\"min-height:400px;\"> <p class=\"dib v-mid black\" id=\"compra_btn\">{{ page.header.calltoaction }}</p><br><div class=\"tc baskerville f3 lh-copy\" ><p class=\"dib v-mid orange\">{{ page.header.calltoaction2 }}</p><br>
            <!-- <div class=\"button raised hoverable\">
                <div class=\"anim\"></div><span class=\"f3 b helvetica\">Hover!</span>
            </div> -->
                   <a href=\"#\" class=\"btn\" >
                       <span class=\"btn-content\">Compra</span>

                       <span class=\"icon\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i></span>
                   </a>


               </div>
           </div>
            <br/>
            <div id=\"hola\"></div>
            <hr/>
            <div id=\"mundo\"></div>
            <br/>
            <div id=\"form-contacto\" class=\" bg-ligth-blue br-pill\">
            <div class=\"pa4 black-80\">
                <form class=\"measure center\">
                    <fieldset  class=\"ba b--transparent ph0 mh0\">
                        <legend class=\"f4 fw6 ph0 mh0\">{{ page.header.form1 }}</legend>
                        <div class=\"mt3\">
                            <label class=\"db fw6 lh-copy f6\" >{{ page.header.form2 }}</label>
                            <input class=\"pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100\" type=\"text\" name=\"name\"  id=\"nombre\">
                        </div>
                        <div class=\"mv3\">
                            <label class=\"db fw6 lh-copy f6\">{{ page.header.form3 }}</label>
                            <input class=\"b pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100\" type=\"email\" name=\"email\"  id=\"email-address\">
                        </div>
                        <div class=\"mv3\">

                            <label for=\"comment\" class=\"f6 b db mb2\">{{ page.header.form4 }} <span class=\"normal black-60\">(opcional)</span></label>
                            <textarea id=\"comment\" name=\"comment\" class=\"db border-box hover-black w-100 measure ba b--black-20 pa2 br2 mb2\"></textarea>

                        </div>

                            <input id=\"enviar\" class=\"b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib\" type=\"button\" value=\"Enviar\">
                    </fieldset>
                </form>
            </div>
            </div>
        </article>
        {% block footer %}
            <footer class=\"pv4 ph3 ph5-m ph6-l mid-gray\" style=\"background-color: #5bc0de\">

                <div class=\"mb4 mb0-ns fl w-100 w-50-l\" >

                    <input placeholder=\"Direccion Correo\" class=\"mw-100 w-100 w5-ns f5 input-reset ba b--black-20 pv3 ph4 border-box\">
                    <input type=\"submit\" class=\"input-reset w-100 w-auto-ns bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray\">
                </div>
                <small class=\"f6 db tc\">@ {{ page.header.year }} <b class=\"ttu\">{{ page.title }} Inc</b>., Todos los derechos reservados</small>
                <div class=\"tc mt3\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGfSURBVGhD7dnNKkVRGMbxI0n5zC2YMCRTE6YYmkqJoTtwAdyACQOkkKkrMKGYSAwocxPKx0C+/m85tVq99trOWfZap96nfpPTWm897bP3+Vg1i8XSUNowjzO84SuxR+xjGKUjJTahDUztGZMoFbkS2pBc3KMPwZxDG5CTRRRG3lY53BMh6yhMP7SNudlFYaxIxazIf/mAPE6fnNfKyKbICabRiXp6MYNTaHtcWRTZRjt+yxS0fa7kRa7gXgUtLVFEvv6Ekn2RTwxAi9wfgz8WoO13JS1yBz8dOIQ8vbQ9v0laRL6M+hmFtjYkaZFj+BmHtjbEijTiFfJTuW4DfkbgrhG30Oa5Ki1ygUayDG2eqyWKbEGb52qJIpfQ5rmyL9KNd2jzXJUWucGYYwh+euCumYM2y1dpEZ99jiisSAxWRGFFYrAiCisSgxVRBIt0QdsYQ8wiOwjmAdrmZsUssopg9qBtblbMIhMIRo6AX6ANaMY1Zj0r0NYWOULpyBGw/N2vDUpJSsgD6U+RI+AlyMHjQULyhFpD6fN1i8Xip1b7BmzB3x8v5/laAAAAAElFTkSuQmCC\" alt=\"icon_facebook\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ5SURBVGhD7dlZqFVVHMfxW1Y2UWphFBEVKSqK0UBz0EBFllAOKAriSIRYBFEU0UsPzURU1EMPQfVQREUWiVhpD0FYNhnRPFHRTCPNfb90FmzW+e99977ufZS4P/jAvfecvdY+++y91n+tOzSa/3EOwRLcg2fxGX7AP/gT3+ItPIbrcCb2xA6RCbgEm+EJN/ULHsA52AkDz/64AemKt+EVzMVAPpCdrMRXiE6mDd6WU9FZ9sNaRJ237VesQuuZgg8Rddqle7ELWskx+BpRR4PwBHbDNmUavkTUwSA9hDEYUXwmPkbU8PZwMxrH0anqwf4Nf2R/a8PPwd+SvzEbjeIQGzWWnA+/6sNxGd5B9D45ozvxRa95Me7DWdgHtvkCovfK29xJuFa8paoe7t+xM4rxYbwW7+EOnI2DUXxIPVHnh4vwNF7GdOS5HFG/yd2oFWfsqIHEq9JlliHqN7Fum4TK+LX9iKiB5Ht0GSfCqN8i55fKrEF0YG48usqNiPoscuYfh9K8hOjA3BnoKtZaUZ+50hLG9UR0QMR1R1dxwIj6zD2FMJ5cdEDuDeyKrrIAUb85lxDhebiyiw7IdVKVFuLQ/hGivnNHoS8bEb25yNnVRVXXca6I+s8tRF8+RfTmIq/UIHIpov5z16AvdZatr2MQuRhR/7mwkCy+wTLEGul9fNH7WW9iEHF2d0NDz2M9nuv9/i6+ged5F/ri/e+LY3usuSwK5QSYjHhd0CCTcXTP6XDr6LTe75YnV6H0g3wHX4zKc8sW96nclzoVXcYlxDo4n1jXlVXOuh598bbxxVswD8fiADgcWrkeCK+GQ16XWzZOzEfCO2EiUnlvNX0yFiOV+u6p9cW1sS8+ApeWL6JsmbsaXcSTjZYQVryfwOflfqT1zyz05UrkDZSxYb+1NuM37qgY9Rf5Cz7HfTkR0QFlHBwc/vbGtuZcfI6onzKvIox1S9ma2ecnjWo5T8DV4WFoEi+AdVXdajd3O0rjhnJ0kPXVDHgVoteTt/EgrsYiHATjw3oCXO+4FLYccgMjaqOuytHzeEQH+W1cgH3xWu9vVZ6Bo0+eC+EKMzqmCdf7w6ZsceW47valI4uza/QebULVzuBxqNr2qWMFhs0cRAfLK2qc4Z1dH8XD8Ja8E9ZIlUvQXq5A1H4d7kHvgVp5ElEjG9BG/MasFKI+hnMeaudQlH39S9FGbkPUfhUn68Yp25bxwfeWcjfSSTEJZ9mKzEfUfhln9jQKNs5wm3VFW9EkDp9RO5Gf4PA/4jj+P46o8ZzDcpNYAEbt5CyHGm9eR/HBdKM56qSoiw/i8qHpLVsZy3bXx2Vlitr+ID4TlvOdxH8nlG3VtPlBHJ2shjuNxd5NyFeSTT/ISSgerw/QaJ5oI0fgVqQlsht8TeLOfzp2C5Zjd2y37AXnhNplQyEzccp/P45mNDtghob+BWm8vkDPJb3BAAAAAElFTkSuQmCC\" alt=\"icon_github\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANmSURBVGhD7dpJyI1RHMfx10yUWcRCWdgQEfYoCkVJpgUZSmwkomShTAsUybSUIVFiYVgoKwvKsJFxoyxMmcsQvr96T93efue5z7n3vPfexfurz+ae8zzvPe7znPN/zqOtK11pfrphOvbhLl7jF/5l8gVPcA3rMRLZMxcP4L5AZ/mNkxiFujMAl+D+UKN8w3LUnNF4BHfyRvuLPUhOfzyGO2kzbUNSLsOdqNn+QPdrqcyBO0mreI5eKIym2IdwJ2iU7+azjjaiMDPgDmyUdeiOcdC/vOsjWgoKsxfuwEbo+OXWwvULxiIardjuoHq8R5nL5QX0a4RshesXrEI0KjvcQSnuYwvGozdCBmI2juID3LFaySdiKT62fxazC9HUUzs9wyJUpgdUYmgQlRmE/VAZ4s5VxnFE4w4o4yYGQ9GX3I570Lwf+nzCRSxAiH6h2K9TzVlE4w6o5hZ6QtEl8Q6uX6XbGANlEsrcQx1lHYimyHDZ7IRqItfPeQPdD8piuD5Fsg4k3BPLkDKIQDPVUCg34PrEZBuIZidFv0iZyynmCJQpcO0x2QaiKVbZAddelmbKEVA087k+TraBaJ1QNDu59hRroByGa3eyDUSLndaJyim2ViegqBh07U6WgbyFog0C157qChRNHq7dyTKQH1B0o7v2VBegrIBrd7JdWmH9+AzXnuIAlGqFYqVsA1F5oajscO0pZkFJOVe2gaiKVebBtZf1Cnp07YOv7Z+VkW0gKvZUICp34PqUofpM0dOha4/JNhAJ17YKQNVOrk+R01C0/ZR6fNaBaA2ZCWUCXsL1czQIrUXa8DjX/lmKrAMRXWKToQyB7p2fcH1F90S4nDSI3XD9qsk+ENH+7BKEqHZS2aGnuKs4Dz0RanYKzy7aV67llwjOIBpt7buDyrqOaShKX+jGruWeqnQQ0TyFOyiVqthD2ISFWAktdlonUqbYIpsRjS4Dd1Armo9oUufyZtEzfj9Eo2q2ni2aRtHbgqo5BXdwq9DewFRUjTbUNJ26k7QCTdmlo+eCWnZFOpsqh+FIil5Du5M1i3Yqwz5YcvTOLsczeb1U1tQ8iBC9iit66dKZdHnrnhiGLNGDzwY06j8NaJ3Q+/1Ss1Ot0Zui1dD7iWPQO40cVNKo7NBufeFi15WuNCxtbf8Bp01RYjO59oUAAAAASUVORK5CYII=\" alt=\"icon_instagram\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANfSURBVGhD7ZlZ6A5RGMbHkn0niVBkSQm5oGzZSglFcuOGJMuFIlcohRsRJblAlhBSUiSU7FuiSESEC4Qba7bwe87M65vGfPPNf2Hmq3nq1zfPme2837znzDlnvEKFCtW7GkJ7aOtcSY1A5W2cqwKpwq/gO3RSQaCZ8AsOOFcl2gaq9DznfB0GlU13rko0FlTpU855Xgv4CO+huQqqRdH0KpdWCkptKqzGoLbU2rmSb+VcBgqnVzStJsJDUNk3OAjWOYwElV90ruSPO5eBxoEqcAHCaSU+g/Z9gZ/B9gaQcheIpZcqISyteoP8C1BQekryp0HKXSCSpZewtBoI8necK/loxXMVyHhQJZRa1ltVZSA9QJV45pyvIhDnMlKaQAZBUiCjIZeBdAGVqTseBWsCfxKkESD/OtjeF/jcBSJdApWHWQpSR/gEVq7RgX4zDaQrPAZLE1NnUNd8A87BYmgApkmgc47BLNA1dkChNGoGfWBoBqij6AbRgWeNpIZ6BiyHs0QdwyboADXSfPgBcRfNkifQHVJpCOQxCOMypNJeiLuA+Ao3Y9DLL+544wPouAehsrqgtK8oDb/jThbR94XJ3ifliL7V68pqSJSmnTYRiuMlqDfRMERqAvKTIe54o74D2QmJ0nQ07sQo9mTsSVjK3Qu8ZohhHw5Es8YroD/Frif0tr8LSr9KbXQ/JKq2gZivNPLtC738TbfYoGC1/wi0A9NgUJerfXFkHohSdw9Mcc7z5oIGl7ai0h+a+pveCrD7Rck8kOEgb/P3MXDd3/QGgNrnLuc8bwbo2DgyDyQ6F5G37WGgkcRa55I7kFwHElXVBqIVywkhct1GkgKxJ/AGlGK3Ax/HPw+kH8jfcq58IOed8/01f/PPyuVR5+rY2LV6mPRmN6KBPHfOnwVuhGnO/R2Iprm7QZWUpsJbULesLji8bxGE7xlG8/yKShprGdFA9CbuqYJAtrIeDUSVDU95D4H2r3SupJZwFex+UTZDRWkNN+7kMMpjfUpYGCp7BFqZXwIagmj/MtC++4FfBSdgNujft3PFWVgHW+FpUFaOOVBRGiLHnZwX3oFSNJX0r8RdJA8oC1JLjX495GG+bmhMtgBqJX3rWA7bQV+l/jf60rUF1PZSp1OhQoUK5V2e9xt/Z0EQ+c/piQAAAABJRU5ErkJggg==\" alt=\"icon_youtube\">
                    <img src=\"data:image/png;base64,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\" alt=\"icon_salt\">
                </div>
            </footer>

        {% endblock %}
        <!-- Scripts de JS-->

        {% block javascripts %}
            <!-- jQuery -->
            <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
            <!-- Sweet Alert -->
            <script src=\"https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.js\"></script>
        {% endblock %}
        <script >
            \$(document).ready(function() {
                \$(\"#enviar\").click(function() {
                    swal(\"Gracias!\", \"Su mensaje sera leído!\", \"success\");
                });
                \$(\".btn_apple\").click(function() {
                    swal({
                        title: '<i>¡Inscríbase!</i>',

                        input: 'email',
                        inputPlaceholder: 'Enter your email address'
                    })

                });
            });


        </script>



        {% block bottom %}
            {{ assets.js('bottom') }}
        {% endblock %}
    </body>
{% endblock %}

</html>
", "custom.html.twig", "/var/www/html/grav/user/themes/tema2/templates/custom.html.twig");
    }
}
