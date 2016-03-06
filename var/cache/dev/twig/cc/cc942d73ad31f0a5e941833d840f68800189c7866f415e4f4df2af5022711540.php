<?php

/* StarsRentalBundle:Default:index.html.twig */
class __TwigTemplate_194ef9ff95b70e240bfa94847403414f21a4a459b33d04501b061774e1f4b798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "StarsRentalBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef73071de61d25a26c6bf336284aad939f037664404696143eaf25a32e3774d3 = $this->env->getExtension("native_profiler");
        $__internal_ef73071de61d25a26c6bf336284aad939f037664404696143eaf25a32e3774d3->enter($__internal_ef73071de61d25a26c6bf336284aad939f037664404696143eaf25a32e3774d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarsRentalBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef73071de61d25a26c6bf336284aad939f037664404696143eaf25a32e3774d3->leave($__internal_ef73071de61d25a26c6bf336284aad939f037664404696143eaf25a32e3774d3_prof);

    }

    public function getTemplateName()
    {
        return "StarsRentalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
