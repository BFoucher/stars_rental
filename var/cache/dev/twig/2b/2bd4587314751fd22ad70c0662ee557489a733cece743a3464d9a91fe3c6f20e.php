<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70dcdd8fe006f91133e976bd55b7b52cd19a7f942aaedb2cba966e66cfdece32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5bc2161f51b6a36d37a4fb8dbf8cc1e14fc88a74520ceb2391787c6efde4da6 = $this->env->getExtension("native_profiler");
        $__internal_e5bc2161f51b6a36d37a4fb8dbf8cc1e14fc88a74520ceb2391787c6efde4da6->enter($__internal_e5bc2161f51b6a36d37a4fb8dbf8cc1e14fc88a74520ceb2391787c6efde4da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5bc2161f51b6a36d37a4fb8dbf8cc1e14fc88a74520ceb2391787c6efde4da6->leave($__internal_e5bc2161f51b6a36d37a4fb8dbf8cc1e14fc88a74520ceb2391787c6efde4da6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7888f79248f4c6a50009c2a1e6c3161f21e0300c1db141671bdb87e5daa24e3 = $this->env->getExtension("native_profiler");
        $__internal_d7888f79248f4c6a50009c2a1e6c3161f21e0300c1db141671bdb87e5daa24e3->enter($__internal_d7888f79248f4c6a50009c2a1e6c3161f21e0300c1db141671bdb87e5daa24e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7888f79248f4c6a50009c2a1e6c3161f21e0300c1db141671bdb87e5daa24e3->leave($__internal_d7888f79248f4c6a50009c2a1e6c3161f21e0300c1db141671bdb87e5daa24e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b22ec6aa667305a2cfdab8b52988817fcb70f3685712ea7fadae1483d8e5b866 = $this->env->getExtension("native_profiler");
        $__internal_b22ec6aa667305a2cfdab8b52988817fcb70f3685712ea7fadae1483d8e5b866->enter($__internal_b22ec6aa667305a2cfdab8b52988817fcb70f3685712ea7fadae1483d8e5b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b22ec6aa667305a2cfdab8b52988817fcb70f3685712ea7fadae1483d8e5b866->leave($__internal_b22ec6aa667305a2cfdab8b52988817fcb70f3685712ea7fadae1483d8e5b866_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5f28fc0dd248dfe596547cda8602242d36770621af995e2e3f0c7d0eba64eb3 = $this->env->getExtension("native_profiler");
        $__internal_f5f28fc0dd248dfe596547cda8602242d36770621af995e2e3f0c7d0eba64eb3->enter($__internal_f5f28fc0dd248dfe596547cda8602242d36770621af995e2e3f0c7d0eba64eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f5f28fc0dd248dfe596547cda8602242d36770621af995e2e3f0c7d0eba64eb3->leave($__internal_f5f28fc0dd248dfe596547cda8602242d36770621af995e2e3f0c7d0eba64eb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
