<?php

/* ship/edit.html.twig */
class __TwigTemplate_5a24c44a56bfec422b0330d89b205a5f4d84d4d2986da065991c7ae539172baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ship/edit.html.twig", 1);
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
        $__internal_f610fa8736de2572cd01de80028682ec3564442b61a2aa8e353c9ae87a28e7e4 = $this->env->getExtension("native_profiler");
        $__internal_f610fa8736de2572cd01de80028682ec3564442b61a2aa8e353c9ae87a28e7e4->enter($__internal_f610fa8736de2572cd01de80028682ec3564442b61a2aa8e353c9ae87a28e7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ship/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f610fa8736de2572cd01de80028682ec3564442b61a2aa8e353c9ae87a28e7e4->leave($__internal_f610fa8736de2572cd01de80028682ec3564442b61a2aa8e353c9ae87a28e7e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8c824540062dc6c6de099ccc9c4e3f98c4b65c5ce736046cb5e8da4312f09fd = $this->env->getExtension("native_profiler");
        $__internal_d8c824540062dc6c6de099ccc9c4e3f98c4b65c5ce736046cb5e8da4312f09fd->enter($__internal_d8c824540062dc6c6de099ccc9c4e3f98c4b65c5ce736046cb5e8da4312f09fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ship edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ship_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d8c824540062dc6c6de099ccc9c4e3f98c4b65c5ce736046cb5e8da4312f09fd->leave($__internal_d8c824540062dc6c6de099ccc9c4e3f98c4b65c5ce736046cb5e8da4312f09fd_prof);

    }

    public function getTemplateName()
    {
        return "ship/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ship edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ship_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
