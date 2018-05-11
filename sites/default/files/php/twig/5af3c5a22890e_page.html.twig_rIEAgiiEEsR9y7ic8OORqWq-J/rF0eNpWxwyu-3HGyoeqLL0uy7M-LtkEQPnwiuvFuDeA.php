<?php

/* themes/custom/searchengine/page.html.twig */
class __TwigTemplate_77bc0c8f50f9ed86bf9d874ad4d7fdb786529bb06f9783d73efc5ad2ccb29bb5 extends Twig_Template
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
        $tags = array("include" => 2, "if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
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
        echo "
";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/custom/searchengine/page.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"container\">



  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 10
        echo "
    <div class=\"layout-content\">
      ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 16
            echo "      <aside class=\"layout-sidebar\" role=\"complementary\">
        ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 20
        echo "

  </main>


</div>";
        // line 26
        echo "

";
        // line 28
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/custom/searchengine/page.html.twig", 28)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/searchengine/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  85 => 26,  78 => 20,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  60 => 12,  56 => 10,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/searchengine/page.html.twig", "/var/www/html/searchengine/themes/custom/searchengine/page.html.twig");
    }
}
