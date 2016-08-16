<?php

/* themes/blueskyboulder/templates/field/field--comment.html.twig */
class __TwigTemplate_053662c1c201875a2288ca9d6c818302d6efc1f57e23de6cdf36f07f523b5d96 extends Twig_Template
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
        $tags = array("set" => 28, "if" => 51);
        $filters = array("clean_class" => 28, "t" => 61);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
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

        // line 28
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 30
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 32
(isset($context["entity_type"]) ? $context["entity_type"] : null))) . "--") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ((        // line 33
(isset($context["field_formatter"]) ? $context["field_formatter"] : null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass((isset($context["field_formatter"]) ? $context["field_formatter"] : null)))) : ("")), 3 => ("field-name-" .         // line 34
(isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 4 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 35
(isset($context["field_type"]) ? $context["field_type"] : null))), 5 => ("field-label-" .         // line 36
(isset($context["label_display"]) ? $context["label_display"] : null)), 6 => (((        // line 37
(isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")), 7 => ((        // line 38
(isset($context["comment_display_mode"]) ? $context["comment_display_mode"] : null)) ? ("display-mode-threaded") : ("")), 8 => ((        // line 39
(isset($context["comment_type"]) ? $context["comment_type"] : null)) ? (("comment-bundle-" . \Drupal\Component\Utility\Html::getClass((isset($context["comment_type"]) ? $context["comment_type"] : null)))) : ("")), 9 => "comment-wrapper");
        // line 44
        $context["title_classes"] = array(0 => "comment-field__title", 1 => (((        // line 46
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 49
        echo "<section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <a name=\"comments\"></a>";
        // line 51
        if (($this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "pager", array()) &&  !(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
    <h2";
            // line 53
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
    ";
            // line 54
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        }
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true));
        // line 59
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 60
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "comment-form-wrapper"), "method"), "html", null, true));
            echo ">
      <h2 class=\"comment-form__title\">";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Add new comment")));
            echo "</h2>";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comment_form"]) ? $context["comment_form"] : null), "html", null, true));
            // line 63
            echo "</div>";
        }
        // line 65
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/blueskyboulder/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 65,  92 => 63,  90 => 62,  87 => 61,  82 => 60,  80 => 59,  78 => 57,  75 => 54,  69 => 53,  65 => 52,  63 => 51,  58 => 49,  56 => 46,  55 => 44,  53 => 39,  52 => 38,  51 => 37,  50 => 36,  49 => 35,  48 => 34,  47 => 33,  46 => 32,  45 => 30,  43 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for comment fields.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the title.*/
/*  * - label: The label for the field.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional title output populated by modules, intended to*/
/*  *   be displayed after the main title tag that appears in the template.*/
/*  * - comments: List of comments rendered through comment.html.twig.*/
/*  * - comment_form: The 'Add new comment' form.*/
/*  * - comment_display_mode: Is the comments are threaded.*/
/*  * - comment_type: The comment type bundle ID for the comment field.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see template_preprocess_field()*/
/*  * @see comment_preprocess_field()*/
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
/*     comment_display_mode ? 'display-mode-threaded',*/
/*     comment_type ? 'comment-bundle-' ~ comment_type|clean_class,*/
/*     'comment-wrapper',*/
/*   ]*/
/* -%}*/
/* {%-*/
/*   set title_classes = [*/
/*     'comment-field__title',*/
/*     label_display == 'visually_hidden' ? 'visually-hidden',*/
/*   ]*/
/* -%}*/
/* <section{{ attributes.addClass(classes) }}>*/
/*   <a name="comments"></a>*/
/*   {%- if comments.pager and not label_hidden -%}*/
/*     {{ title_prefix }}*/
/*     <h2{{ title_attributes.addClass(title_classes) }}>{{ label }}</h2>*/
/*     {{ title_suffix }}*/
/*   {%- endif -%}*/
/* */
/*   {{- comments -}}*/
/* */
/*   {%- if comment_form -%}*/
/*     <div{{ content_attributes.addClass('comment-form-wrapper') }}>*/
/*       <h2 class="comment-form__title">{{ 'Add new comment'|t }}</h2>*/
/*       {{- comment_form -}}*/
/*     </div>*/
/*   {%- endif -%}*/
/* </section>*/
/* */
