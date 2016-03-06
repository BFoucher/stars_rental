<?php

/* client/new.html.twig */
class __TwigTemplate_41ded77ffee4a1a19c316309ab5a6bbbbabdc27f7f60fe50f7a26d8e6cc038fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84482006df77942cb235dd0e7764f0742d37f950a463e51d7bcd9489837f846c = $this->env->getExtension("native_profiler");
        $__internal_84482006df77942cb235dd0e7764f0742d37f950a463e51d7bcd9489837f846c->enter($__internal_84482006df77942cb235dd0e7764f0742d37f950a463e51d7bcd9489837f846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84482006df77942cb235dd0e7764f0742d37f950a463e51d7bcd9489837f846c->leave($__internal_84482006df77942cb235dd0e7764f0742d37f950a463e51d7bcd9489837f846c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39c37ca9bda5ff08e96361f422a4ea229d152fc884e7ba297c79de65da96c32d = $this->env->getExtension("native_profiler");
        $__internal_39c37ca9bda5ff08e96361f422a4ea229d152fc884e7ba297c79de65da96c32d->enter($__internal_39c37ca9bda5ff08e96361f422a4ea229d152fc884e7ba297c79de65da96c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_39c37ca9bda5ff08e96361f422a4ea229d152fc884e7ba297c79de65da96c32d->leave($__internal_39c37ca9bda5ff08e96361f422a4ea229d152fc884e7ba297c79de65da96c32d_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
