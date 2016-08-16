<?php

/* field.html.twig */
class __TwigTemplate_96263260e78128a45f084e0b95d8e0a27eacd310aeb8273dc7ec5594a97eaa0c extends Twig_Template
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
        $tags = array("set" => 39, "if" => 57, "for" => 67);
        $filters = array("clean_class" => 39, "length" => 57);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'length'),
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

        // line 39
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 41
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 43
(isset($context["entity_type"]) ? $context["entity_type"] : null))) . "--") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ((        // line 44
(isset($context["field_formatter"]) ? $context["field_formatter"] : null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass((isset($context["field_formatter"]) ? $context["field_formatter"] : null)))) : ("")), 3 => ("field-name-" .         // line 45
(isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 4 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 46
(isset($context["field_type"]) ? $context["field_type"] : null))), 5 => ("field-label-" .         // line 47
(isset($context["label_display"]) ? $context["label_display"] : null)), 6 => (((        // line 48
(isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")));
        // line 52
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 54
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 57
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 1)) {
            // line 58
            $context["count_class"] = "has-multiple";
        } else {
            // line 60
            $context["count_class"] = "has-single";
        }
        // line 62
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => (isset($context["count_class"]) ? $context["count_class"] : null)), "method"), "html", null, true));
        echo ">";
        // line 63
        if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 64
            echo "<h3";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h3>";
        }
        // line 66
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "field__items"), "method"), "html", null, true));
        echo ">";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 70,  85 => 68,  81 => 67,  77 => 66,  70 => 64,  68 => 63,  64 => 62,  61 => 60,  58 => 58,  56 => 57,  54 => 54,  53 => 52,  51 => 48,  50 => 47,  49 => 46,  48 => 45,  47 => 44,  46 => 43,  45 => 41,  43 => 39,);
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
/*  * @see template_preprocess_field()*/
/*  *//* */
/* #}*/
/* {%- set field_name_class = field_name|clean_class -%}*/
/* {%-*/
/*   set classes = [*/
/*     'field',*/
/*     'field-' ~ entity_type|clean_class ~ '--' ~ field_name_class,*/
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
/* {%- if items|length > 1 -%}*/
/*   {%- set count_class = 'has-multiple' -%}*/
/* {%- else -%}*/
/*   {%- set count_class = 'has-single' -%}*/
/* {%- endif -%}*/
/* <div{{ attributes.addClass(classes, count_class) }}>*/
/*   {%- if not label_hidden -%}*/
/*     <h3{{ title_attributes.addClass(title_classes) }}>{{- label -}}</h3>*/
/*   {%- endif -%}*/
/*   <div{{ content_attributes.addClass('field__items') }}>*/
/*     {%- for item in items -%}*/
/*       <div{{ item.attributes.addClass('field__item') }}>{{- item.content -}}</div>*/
/*     {%- endfor -%}*/
/*   </div>*/
/* </div>*/
/* */
