<?php

/* ship/new.html.twig */
class __TwigTemplate_9dec67251b6229f270353449e8af951cd43c97439249c9a9bf124dcfb57bab9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ship/new.html.twig", 1);
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
        $__internal_fcb0de949306be05f59eca21e1dc8f8f373fff272b02c1a0f8330e6aaf010fa6 = $this->env->getExtension("native_profiler");
        $__internal_fcb0de949306be05f59eca21e1dc8f8f373fff272b02c1a0f8330e6aaf010fa6->enter($__internal_fcb0de949306be05f59eca21e1dc8f8f373fff272b02c1a0f8330e6aaf010fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ship/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb0de949306be05f59eca21e1dc8f8f373fff272b02c1a0f8330e6aaf010fa6->leave($__internal_fcb0de949306be05f59eca21e1dc8f8f373fff272b02c1a0f8330e6aaf010fa6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbb498fd3e12404c97ee23b5295460b925b3499e67e412f9a3a2efff52570149 = $this->env->getExtension("native_profiler");
        $__internal_bbb498fd3e12404c97ee23b5295460b925b3499e67e412f9a3a2efff52570149->enter($__internal_bbb498fd3e12404c97ee23b5295460b925b3499e67e412f9a3a2efff52570149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ship creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("ship_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bbb498fd3e12404c97ee23b5295460b925b3499e67e412f9a3a2efff52570149->leave($__internal_bbb498fd3e12404c97ee23b5295460b925b3499e67e412f9a3a2efff52570149_prof);

    }

    public function getTemplateName()
    {
        return "ship/new.html.twig";
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
/*     <h1>Ship creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ship_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
