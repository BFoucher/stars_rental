<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bfbde24d8624bcfd6a9b4da267ed163499e4bb2ff2bbc3e1168a9fe0ad27f359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e0411878c4fb90429b53916ff85c41c980eb0ff2a9078c61535d644ceed53ce = $this->env->getExtension("native_profiler");
        $__internal_3e0411878c4fb90429b53916ff85c41c980eb0ff2a9078c61535d644ceed53ce->enter($__internal_3e0411878c4fb90429b53916ff85c41c980eb0ff2a9078c61535d644ceed53ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e0411878c4fb90429b53916ff85c41c980eb0ff2a9078c61535d644ceed53ce->leave($__internal_3e0411878c4fb90429b53916ff85c41c980eb0ff2a9078c61535d644ceed53ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec535d20d00c0c7246b5071d040f5c1ad44a59a8f078db75701e429ab4d6bf8f = $this->env->getExtension("native_profiler");
        $__internal_ec535d20d00c0c7246b5071d040f5c1ad44a59a8f078db75701e429ab4d6bf8f->enter($__internal_ec535d20d00c0c7246b5071d040f5c1ad44a59a8f078db75701e429ab4d6bf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec535d20d00c0c7246b5071d040f5c1ad44a59a8f078db75701e429ab4d6bf8f->leave($__internal_ec535d20d00c0c7246b5071d040f5c1ad44a59a8f078db75701e429ab4d6bf8f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_228f047055e0a617fa72fd95948e44da8df0bb4a2047f44be0d8518caf463ede = $this->env->getExtension("native_profiler");
        $__internal_228f047055e0a617fa72fd95948e44da8df0bb4a2047f44be0d8518caf463ede->enter($__internal_228f047055e0a617fa72fd95948e44da8df0bb4a2047f44be0d8518caf463ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_228f047055e0a617fa72fd95948e44da8df0bb4a2047f44be0d8518caf463ede->leave($__internal_228f047055e0a617fa72fd95948e44da8df0bb4a2047f44be0d8518caf463ede_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02d7a78322cee6a0a598803679923900976d2c88cdb0b943e22f9377168dd1ac = $this->env->getExtension("native_profiler");
        $__internal_02d7a78322cee6a0a598803679923900976d2c88cdb0b943e22f9377168dd1ac->enter($__internal_02d7a78322cee6a0a598803679923900976d2c88cdb0b943e22f9377168dd1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_02d7a78322cee6a0a598803679923900976d2c88cdb0b943e22f9377168dd1ac->leave($__internal_02d7a78322cee6a0a598803679923900976d2c88cdb0b943e22f9377168dd1ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
