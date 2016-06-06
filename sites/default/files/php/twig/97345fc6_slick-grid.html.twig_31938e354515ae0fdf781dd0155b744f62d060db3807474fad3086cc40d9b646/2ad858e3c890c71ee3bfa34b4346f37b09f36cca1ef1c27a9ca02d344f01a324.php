<?php

/* modules/slick/templates/slick-grid.html.twig */
class __TwigTemplate_1edc8042e625c238235f15a51c15c09e0f85799b83879875a42c2587a83ab2b0 extends Twig_Template
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
        $tags = array("set" => 13, "spaceless" => 28, "for" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'spaceless', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        $context["classes"] = array(0 => (($this->getAttribute(        // line 14
(isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) ? ("slick__grid") : ("slide__content")), 1 => "block-grid", 2 => (($this->getAttribute(        // line 16
(isset($context["settings"]) ? $context["settings"] : null), "grid_small", array())) ? (("small-block-grid-" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid_small", array()))) : ("")), 3 => (($this->getAttribute(        // line 17
(isset($context["settings"]) ? $context["settings"] : null), "grid_medium", array())) ? (("medium-block-grid-" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid_medium", array()))) : ("")), 4 => (($this->getAttribute(        // line 18
(isset($context["settings"]) ? $context["settings"] : null), "grid", array())) ? (("large-block-grid-" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid", array()))) : ("")));
        // line 22
        $context["item_classes"] = array(0 => (( !$this->getAttribute(        // line 23
(isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) ? ("slide__grid") : ("")), 1 => "grid");
        // line 28
        ob_start();
        // line 29
        echo "<ul";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 31
            echo "    <li";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null), 1 => ("grid--" . $context["delta"])), "method"), "html", null, true));
            echo ">
      <div class=\"grid__content\">
        ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "slide", array()), "html", null, true));
            echo "
      </div>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 37,  69 => 33,  63 => 31,  59 => 30,  54 => 29,  52 => 28,  50 => 23,  49 => 22,  47 => 18,  46 => 17,  45 => 16,  44 => 14,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the slick-grid items template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: An array of attributes to apply to the element.*/
/*  * - items: A renderable array containing chunks of slick-slide.html.twig.*/
/*  * - settings: A renderable array containing the given settings.*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     settings.unslick ? 'slick__grid' : 'slide__content',*/
/*     'block-grid',*/
/*     settings.grid_small ? 'small-block-grid-' ~ settings.grid_small,*/
/*     settings.grid_medium ? 'medium-block-grid-' ~ settings.grid_medium,*/
/*     settings.grid ? 'large-block-grid-' ~ settings.grid*/
/*   ]*/
/* %}*/
/* {%*/
/*   set item_classes = [*/
/*     not settings.unslick ? 'slide__grid',*/
/*     'grid'*/
/*   ]*/
/* %}*/
/* {#{{ kint(settings) }}#}*/
/* {% spaceless %}*/
/* <ul{{ attributes.addClass(classes) }}>*/
/*   {% for delta, item in items %}*/
/*     <li{{ item.attributes.addClass(item_classes, 'grid--' ~ delta) }}>*/
/*       <div class="grid__content">*/
/*         {{ item.slide }}*/
/*       </div>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% endspaceless %}*/
/* */
