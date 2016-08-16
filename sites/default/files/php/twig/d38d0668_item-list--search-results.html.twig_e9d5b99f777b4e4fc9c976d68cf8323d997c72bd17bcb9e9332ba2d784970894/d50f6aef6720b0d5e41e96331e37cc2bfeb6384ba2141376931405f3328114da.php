<?php

/* themes/blueskyboulder/templates/dataset/item-list--search-results.html.twig */
class __TwigTemplate_bf6cbf9a4e7b8bef57eedb865f3f23f7461e9766f687c7d1ad7583be16299769 extends Twig_Template
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
        $tags = array("set" => 22, "if" => 23, "for" => 27);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
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

        // line 22
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        // line 23
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 24
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "item-list", 1 => "item-list--search-results"), "method"), "html", null, true));
            echo ">";
            // line 25
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 26
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "search-results", 1 => ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "plugin", array()) . "-results")), "method"), "html", null, true));
                echo ">";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "<li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "search-results__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true));
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true));
                echo ">";
            } else {
                // line 32
                echo "<div class=\"search-results search-results--empty\">";
                // line 33
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
                // line 34
                echo "</div>";
            }
            // line 36
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/blueskyboulder/templates/dataset/item-list--search-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  81 => 34,  79 => 33,  77 => 32,  72 => 30,  62 => 28,  58 => 27,  53 => 26,  51 => 25,  47 => 24,  45 => 23,  43 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an item list.*/
/*  **/
/*  * Available variables:*/
/*  * - items: A list of items. Each item contains:*/
/*  *   - attributes: HTML attributes to be applied to each list item.*/
/*  *   - value: The content of the list element.*/
/*  * - title: The title of the list.*/
/*  * - list_type: The tag for list element ("ul" or "ol").*/
/*  * - wrapper_attributes: HTML attributes to be applied to the list wrapper.*/
/*  * - attributes: HTML attributes to be applied to the list.*/
/*  * - empty: A message to display when there are no items. Allowed value is a*/
/*  *   string or render array.*/
/*  * - context: A list of contextual data associated with the list. May contain:*/
/*  *   - list_style: The custom list style.*/
/*  **/
/*  * @see template_preprocess_item_list()*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass(classes) %}*/
/* {% if items or empty -%}*/
/*   <div{{ wrapper_attributes.addClass('item-list', 'item-list--search-results') }}>*/
/*     {%- if items -%}*/
/*       <{{ list_type }}{{ attributes.addClass('search-results', context.plugin ~ '-results') }}>*/
/*         {%- for item in items -%}*/
/*           <li{{ item.attributes.addClass('search-results__item') }}>{{ item.value }}</li>*/
/*         {%- endfor -%}*/
/*       </{{ list_type }}>*/
/*     {%- else -%}*/
/*       <div class="search-results search-results--empty">*/
/*         {{- empty -}}*/
/*       </div>*/
/*     {%- endif -%}*/
/*   </div>*/
/* {%- endif %}*/
/* */
