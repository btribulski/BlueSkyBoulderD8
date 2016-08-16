<?php

/* themes/blueskyboulder/templates/navigation/pager.html.twig */
class __TwigTemplate_7f8233f6a4ed9c6263401c0910594be3e41a9669dc5803cdc185a29c1755bcd5 extends Twig_Template
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
        $tags = array("if" => 32, "for" => 63, "set" => 65);
        $filters = array("t" => 34, "default" => 45, "trim" => 73, "join" => 73);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t', 'default', 'trim', 'join'),
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

        // line 32
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 33
            echo "<nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items\">
      ";
            // line 37
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()))) {
                // line 38
                echo "<ul class=\"pager__items__first-previous\">";
            }
            // line 41
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array())) {
                // line 42
                echo "<li class=\"pager__item pager__item--first pager__item--text\">
            <a href=\"";
                // line 43
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to first page")));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 44
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("First page")));
                echo "</span>
              <span class=\"pager__first\" aria-hidden=\"true\">";
                // line 45
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array()), t("« first"))) : (t("« first"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 50
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 51
                echo "<li class=\"pager__item pager__item--previous pager__item--text\">
            <a href=\"";
                // line 52
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 53
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous page")));
                echo "</span>
              <span class=\"pager__previous\" aria-hidden=\"true\">";
                // line 54
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹ previous"))) : (t("‹ previous"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 58
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()))) {
                // line 59
                echo "</ul>";
            }
            // line 62
            echo "      <ol class=\"pager__items__num-pages\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "pages", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                $context["classes"] = array(0 => "pager__item", 1 => "pager__item--num", 2 => (($this->getAttribute(                // line 68
$context["loop"], "first", array())) ? ("pager__item--num-first") : ("")), 3 => (($this->getAttribute(                // line 69
$context["loop"], "last", array())) ? ("pager__item--num-last") : ("")), 4 => (((                // line 70
(isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? ("is-active") : ("")));
                // line 73
                echo "<li class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim(twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")), "html", null, true));
                echo "\">";
                // line 74
                if (((isset($context["current"]) ? $context["current"] : null) == $context["key"])) {
                    // line 75
                    $context["title"] = t("Current page");
                } else {
                    // line 77
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                }
                // line 79
                echo "<a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true));
                echo "\" class=\"pager__link";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" pager__link--is-active") : (""))));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (t("Current page")) : (t("Page")))));
                echo "</span>
              ";
                // line 82
                if (($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "previous", array()) && $this->getAttribute($context["loop"], "first", array()))) {
                    // line 83
                    echo "<span class=\"pager__ellipsis pager__ellipsis--before\" role=\"presentation\">&hellip;</span>";
                }
                // line 85
                echo "<span class=\"pager__key\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "</span>
              ";
                // line 87
                if (($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "next", array()) && $this->getAttribute($context["loop"], "last", array()))) {
                    // line 88
                    echo "<span class=\"pager__ellipsis pager__ellipsis--after\" role=\"presentation\">&hellip;</span>";
                }
                // line 90
                echo "</a>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "      </ol>
      ";
            // line 95
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()))) {
                // line 96
                echo "<ul class=\"pager__items__next-last\">";
            }
            // line 99
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 100
                echo "<li class=\"pager__item pager__item--next pager__item--text\">
            <a href=\"";
                // line 101
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 102
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next page")));
                echo "</span>
              <span class=\"pager__next\" aria-hidden=\"true\">";
                // line 103
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("next ›"))) : (t("next ›"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 108
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array())) {
                // line 109
                echo "<li class=\"pager__item pager__item--last pager__item--text\">
            <a href=\"";
                // line 110
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to last page")));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "attributes", array()), "html", null, true));
                echo ">
              <span class=\"visually-hidden\">";
                // line 111
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last page")));
                echo "</span>
              <span class=\"pager__last\" aria-hidden=\"true\">";
                // line 112
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array()), t("last »"))) : (t("last »"))), "html", null, true));
                echo "</span>
            </a>
          </li>";
            }
            // line 116
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()))) {
                // line 117
                echo "</ul>";
            }
            // line 119
            echo "</ul>
  </nav>";
        }
    }

    public function getTemplateName()
    {
        return "themes/blueskyboulder/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 119,  247 => 117,  245 => 116,  239 => 112,  235 => 111,  227 => 110,  224 => 109,  222 => 108,  216 => 103,  212 => 102,  204 => 101,  201 => 100,  199 => 99,  196 => 96,  194 => 95,  191 => 93,  175 => 90,  172 => 88,  170 => 87,  165 => 85,  162 => 83,  160 => 82,  156 => 80,  145 => 79,  142 => 77,  139 => 75,  137 => 74,  133 => 73,  131 => 70,  130 => 69,  129 => 68,  128 => 65,  111 => 63,  109 => 62,  106 => 59,  104 => 58,  98 => 54,  94 => 53,  86 => 52,  83 => 51,  81 => 50,  75 => 45,  71 => 44,  63 => 43,  60 => 42,  58 => 41,  55 => 38,  53 => 37,  48 => 34,  45 => 33,  43 => 32,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  *   The list is keyed by the following elements:*/
/*  *   - first: Item for the first page; not present on the first page of results.*/
/*  *   - previous: Item for the previous page; not present on the first page*/
/*  *     of results.*/
/*  *   - next: Item for the next page; not present on the last page of results.*/
/*  *   - last: Item for the last page; not present on the last page of results.*/
/*  *   - pages: List of pages, keyed by page number.*/
/*  *   Sub-sub elements:*/
/*  *   items.first, items.previous, items.next, items.last, and each item inside*/
/*  *   items.pages contain the following elements:*/
/*  *   - href: URL with appropriate query parameters for the item.*/
/*  *   - attributes: A keyed list of HTML attributes for the item.*/
/*  *   - text: The visible text used for the item link, such as "‹ Previous"*/
/*  *     or "Next ›".*/
/*  * - current: The page number of the current page.*/
/*  * - ellipses: If there are more pages than the quantity allows, then an*/
/*  *   ellipsis before or after the listed pages may be present.*/
/*  *   - previous: Present if the currently visible list of pages does not start*/
/*  *     at the first page.*/
/*  *   - next: Present if the visible list of pages ends before the last page.*/
/*  **/
/*  * @see template_preprocess_pager()*/
/*  *//* */
/* #}*/
/* {% if items -%}*/
/*   <nav class="pager pager--full" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 id="pagination-heading" class="visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pager__items">*/
/*       {# Prev/first. #}*/
/*       {%- if items.first or items.previous -%}*/
/*         <ul class="pager__items__first-previous">*/
/*       {%- endif -%}*/
/*         {# Print first item if we are not on the first page. #}*/
/*         {%- if items.first -%}*/
/*           <li class="pager__item pager__item--first pager__item--text">*/
/*             <a href="{{ items.first.href }}" class="pager__link" title="{{ 'Go to first page'|t }}"{{ items.first.attributes }}>*/
/*               <span class="visually-hidden">{{ 'First page'|t }}</span>*/
/*               <span class="pager__first" aria-hidden="true">{{ items.first.text|default('« first'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {%- endif -%}*/
/*         {# Print previous item if we are not on the first page. #}*/
/*         {%- if items.previous -%}*/
/*           <li class="pager__item pager__item--previous pager__item--text">*/
/*             <a href="{{ items.previous.href }}" class="pager__link" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes }}>*/
/*               <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*               <span class="pager__previous" aria-hidden="true">{{ items.previous.text|default('‹ previous'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {%- endif -%}*/
/*       {%- if items.first or items.previous -%}*/
/*         </ul>*/
/*       {%- endif -%}*/
/*       {# Items. #}*/
/*       <ol class="pager__items__num-pages">*/
/*         {%- for key, item in items.pages -%}*/
/*           {%-*/
/*             set classes = [*/
/*               'pager__item',*/
/*               'pager__item--num',*/
/*               loop.first ? 'pager__item--num-first',*/
/*               loop.last ? 'pager__item--num-last',*/
/*               current == key ? 'is-active' : '',*/
/*             ]*/
/*           -%}*/
/*           <li class="{{ classes|join(' ')|trim }}">*/
/*             {%- if current == key -%}*/
/*               {%- set title = 'Current page'|t -%}*/
/*             {%- else -%}*/
/*               {%- set title = 'Go to page @key'|t({'@key': key}) -%}*/
/*             {%- endif -%}*/
/*             <a href="{{ item.href }}" class="pager__link{{ current == key ? ' pager__link--is-active' : '' }}" title="{{ title }}"{{ item.attributes }}>*/
/*               <span class="visually-hidden">{{ current == key ? 'Current page'|t : 'Page'|t }}</span>*/
/*               {# Add an ellipsis if there are further previous pages. #}*/
/*               {%- if ellipses.previous and loop.first -%}*/
/*                 <span class="pager__ellipsis pager__ellipsis--before" role="presentation">&hellip;</span>*/
/*               {%- endif -%}*/
/*               <span class="pager__key">{{- key -}}</span>*/
/*               {# Add an ellipsis if there are further next pages. #}*/
/*               {%- if ellipses.next and loop.last -%}*/
/*                 <span class="pager__ellipsis pager__ellipsis--after" role="presentation">&hellip;</span>*/
/*               {%- endif -%}*/
/*             </a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ol>*/
/*       {# Next/last. #}*/
/*       {%- if items.next or items.last -%}*/
/*         <ul class="pager__items__next-last">*/
/*       {%- endif -%}*/
/*         {# Print next item if we are not on the last page. #}*/
/*         {%- if items.next -%}*/
/*           <li class="pager__item pager__item--next pager__item--text">*/
/*             <a href="{{ items.next.href }}" class="pager__link" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes }}>*/
/*               <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*               <span class="pager__next" aria-hidden="true">{{ items.next.text|default('next ›'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {%- endif -%}*/
/*         {# Print last item if we are not on the last page. #}*/
/*         {%- if items.last -%}*/
/*           <li class="pager__item pager__item--last pager__item--text">*/
/*             <a href="{{ items.last.href }}" class="pager__link" title="{{ 'Go to last page'|t }}"{{ items.last.attributes }}>*/
/*               <span class="visually-hidden">{{ 'Last page'|t }}</span>*/
/*               <span class="pager__last" aria-hidden="true">{{ items.last.text|default('last »'|t) }}</span>*/
/*             </a>*/
/*           </li>*/
/*         {%- endif -%}*/
/*       {%- if items.next or items.last -%}*/
/*         </ul>*/
/*       {%- endif -%}*/
/*     </ul>*/
/*   </nav>*/
/* {%- endif %}*/
/* */
