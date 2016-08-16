<?php

/* themes/blueskyboulder/templates/field/field--node--uid.html.twig */
class __TwigTemplate_00aff724c5940b9b8ef112b5ad6a010cb232c43e93d4be2fcf8c9be8808b8e98 extends Twig_Template
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
        $tags = array("set" => 23, "for" => 32);
        $filters = array("clean_class" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for'),
                array('clean_class'),
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

        // line 23
        $context["classes"] = array(0 => "field", 1 => ("field-name-" . \Drupal\Component\Utility\Html::getClass(        // line 25
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ((        // line 26
(isset($context["field_formatter"]) ? $context["field_formatter"] : null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass((isset($context["field_formatter"]) ? $context["field_formatter"] : null)))) : ("")), 3 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 27
(isset($context["field_type"]) ? $context["field_type"] : null))), 4 => ("field-label-" .         // line 28
(isset($context["label_display"]) ? $context["label_display"] : null)));
        // line 31
        echo "<span";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "themes/blueskyboulder/templates/field/field--node--uid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 35,  57 => 33,  53 => 32,  49 => 31,  47 => 28,  46 => 27,  45 => 26,  44 => 25,  43 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the node user field.*/
/*  **/
/*  * This is an override of field.html.twig for the node user field. See that*/
/*  * template for documentation about its details and overrides.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing span element.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see field.html.twig*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'field',*/
/*     'field-name-' ~ field_name|clean_class,*/
/*     field_formatter ? 'field-formatter-' ~ field_formatter|clean_class,*/
/*     'field-type-' ~ field_type|clean_class,*/
/*     'field-label-' ~ label_display,*/
/*   ]*/
/* %}*/
/* <span{{ attributes.addClass(classes) }}>*/
/*   {%- for item in items -%}*/
/*     {{ item.content }}*/
/*   {%- endfor -%}*/
/* </span>*/
/* */
