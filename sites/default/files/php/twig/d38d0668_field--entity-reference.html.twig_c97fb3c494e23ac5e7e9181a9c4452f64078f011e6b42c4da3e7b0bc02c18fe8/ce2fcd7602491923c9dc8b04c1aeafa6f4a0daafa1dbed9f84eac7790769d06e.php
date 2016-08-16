<?php

/* themes/blueskyboulder/templates/field/field--entity-reference.html.twig */
class __TwigTemplate_eed492f1d2aec044b923677b662e0352d4e1e4332b077abbd0715bc0b7199afe extends Twig_Template
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
        $tags = array("set" => 40, "if" => 60, "for" => 64);
        $filters = array("clean_class" => 40);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
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

        // line 40
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 42
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 44
(isset($context["entity_type"]) ? $context["entity_type"] : null))) . "-") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ((        // line 45
(isset($context["field_entity_type"]) ? $context["field_entity_type"] : null)) ? (("field-entity-reference-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["field_entity_type"]) ? $context["field_entity_type"] : null)))) : ("")), 3 => ((        // line 46
(isset($context["field_formatter"]) ? $context["field_formatter"] : null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass((isset($context["field_formatter"]) ? $context["field_formatter"] : null)))) : ("")), 4 => ("field-name-" .         // line 47
(isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 5 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 48
(isset($context["field_type"]) ? $context["field_type"] : null))), 6 => ("field-label-" .         // line 49
(isset($context["label_display"]) ? $context["label_display"] : null)), 7 => (((        // line 50
(isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")));
        // line 54
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 56
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 59
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        // line 60
        if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 61
            echo "<h3";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h3>";
        }
        // line 63
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "field__items"), "method"), "html", null, true));
        echo ">";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            $context["item_classes"] = array(0 => "field__item", 1 => (($this->getAttribute($this->getAttribute(            // line 68
$context["item"], "content", array()), "#title", array(), "array")) ? (("field__item--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#title", array(), "array")))) : ("")));
            // line 71
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
            echo ">
        <span class=\"field__item-wrapper\">";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "</span>
      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/blueskyboulder/templates/field/field--entity-reference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 75,  86 => 72,  81 => 71,  79 => 68,  78 => 66,  74 => 64,  70 => 63,  63 => 61,  61 => 60,  57 => 59,  55 => 56,  54 => 54,  52 => 50,  51 => 49,  50 => 48,  49 => 47,  48 => 46,  47 => 45,  46 => 44,  45 => 42,  43 => 40,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a field.*/
/*  **/
/*  * To override output, copy the "field.html.twig" from the templates directory*/
/*  * to your theme's directory and customize it, just like customizing other*/
/*  * Drupal templates such as page.html.twig or node.html.twig.*/
/*  **/
/*  * Instead of overriding the theming for all fields, you can also just override*/
/*  * theming for a subset of fields using*/
/*  * @link themeable Theme hook suggestions. @endlink For example,*/
/*  * here are some theme hook suggestions that can be used for a field_foo field*/
/*  * on an article node type:*/
/*  * - field--node--field-foo--article.html.twig*/
/*  * - field--node--field-foo.html.twig*/
/*  * - field--node--article.html.twig*/
/*  * - field--field-foo.html.twig*/
/*  * - field--text-with-summary.html.twig*/
/*  * - field.html.twig*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the title.*/
/*  * - label: The label for the field.*/
/*  * - multiple: TRUE if a field can contain multiple items.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item's content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  **/
/*  * @see template_preprocess_field()*/
/*  *//* */
/* #}*/
/* {%- set field_name_class = field_name|clean_class %}*/
/* {%-*/
/*   set classes = [*/
/*     'field',*/
/*     'field-' ~ entity_type|clean_class ~ '-' ~ field_name_class,*/
/*     field_entity_type ? 'field-entity-reference-type-' ~ field_entity_type|clean_class,*/
/*     field_formatter ? 'field-formatter-' ~ field_formatter|clean_class,*/
/*     'field-name-' ~ field_name_class,*/
/*     'field-type-' ~ field_type|clean_class,*/
/*     'field-label-' ~ label_display,*/
/*     label_display == 'inline' ? 'clearfix',*/
/*   ]*/
/* -%}*/
/* {%-*/
/*   set title_classes = [*/
/*     'field__label',*/
/*     label_display == 'visually_hidden' ? 'visually-hidden',*/
/*   ]*/
/* -%}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {%- if not label_hidden -%}*/
/*     <h3{{ title_attributes.addClass(title_classes) }}>{{- label -}}</h3>*/
/*   {%- endif -%}*/
/*   <div{{ content_attributes.addClass('field__items') }}>*/
/*     {%- for item in items -%}*/
/*       {%-*/
/*         set item_classes = [*/
/*           'field__item',*/
/*           item.content['#title'] ? 'field__item--' ~ item.content['#title']|clean_class,*/
/*         ]*/
/*       -%}*/
/*       <div{{ item.attributes.addClass(item_classes) }}>*/
/*         <span class="field__item-wrapper">{{- item.content -}}</span>*/
/*       </div>*/
/*     {%- endfor -%}*/
/*   </div>*/
/* </div>*/
/* */
