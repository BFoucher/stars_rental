<?php

/* renting/new.html.twig */
class __TwigTemplate_c87b43b55f012e9ff65be1ddcf640c93ddadbe05d6b1f64a5de630c9b2c7ae81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "renting/new.html.twig", 1);
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
        $__internal_e82a42fd34cdde986bb346fdd57194bd516d17561fefe9b18455130e31cbe820 = $this->env->getExtension("native_profiler");
        $__internal_e82a42fd34cdde986bb346fdd57194bd516d17561fefe9b18455130e31cbe820->enter($__internal_e82a42fd34cdde986bb346fdd57194bd516d17561fefe9b18455130e31cbe820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "renting/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e82a42fd34cdde986bb346fdd57194bd516d17561fefe9b18455130e31cbe820->leave($__internal_e82a42fd34cdde986bb346fdd57194bd516d17561fefe9b18455130e31cbe820_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e04e1b8d355b138d26f4373b7cc449d6fa70efe237a65baaf17e90c157d80d9 = $this->env->getExtension("native_profiler");
        $__internal_8e04e1b8d355b138d26f4373b7cc449d6fa70efe237a65baaf17e90c157d80d9->enter($__internal_8e04e1b8d355b138d26f4373b7cc449d6fa70efe237a65baaf17e90c157d80d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Renting creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("renting_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8e04e1b8d355b138d26f4373b7cc449d6fa70efe237a65baaf17e90c157d80d9->leave($__internal_8e04e1b8d355b138d26f4373b7cc449d6fa70efe237a65baaf17e90c157d80d9_prof);

    }

    public function getTemplateName()
    {
        return "renting/new.html.twig";
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
/*     <h1>Renting creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('renting_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
