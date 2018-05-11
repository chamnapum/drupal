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
        $tags = array("include" => 4, "if" => 13);
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
<div class=\"container-fluid\">

";
        // line 4
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/custom/searchengine/page.html.twig", 4)->display($context);
        // line 5
        echo "
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 8
        echo "
    <div class=\"layout-content\">
      ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 14
            echo "      <aside class=\"layout-sidebar\" role=\"complementary\">
        ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 18
        echo "

  </main>

";
        // line 22
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/custom/searchengine/page.html.twig", 22)->display($context);
        // line 23
        echo "
</div>";
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
        return array (  84 => 23,  82 => 22,  76 => 18,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  58 => 10,  54 => 8,  50 => 5,  48 => 4,  43 => 1,);
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
