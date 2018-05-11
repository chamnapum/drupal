<?php

/* themes/custom/searchengine/partials/header.html.twig */
class __TwigTemplate_4f4fca84475cc4e1c6a9ca2cb4d28e6ad24aa474e20d809a503c74382c41163e extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<header role=\"banner\">




  <!-- Navigation -->
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-light fixed-top\">
        <div class=\"container\">
          ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_navigation", array()), "html", null, true));
        echo "


            <!-- <ul class=\"navbar-nav ml-auto\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home
                  <span class=\"sr-only\">(current)</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Services</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
              </li>
            </ul> -->


          </div>
        </div>
      </nav>





</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/searchengine/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/searchengine/partials/header.html.twig", "/var/www/html/searchengine/themes/custom/searchengine/partials/header.html.twig");
    }
}
