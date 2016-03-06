<?php

/* renting/show.html.twig */
class __TwigTemplate_e9d9d358ddf5877de5498073ada666756e7b62e113285d16601e07fd7356c055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "renting/show.html.twig", 1);
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
        $__internal_f9e9b06d284eacd2f7f8df0c8a1a4425301abcb28fa0c5dc99d989820d6b0aa3 = $this->env->getExtension("native_profiler");
        $__internal_f9e9b06d284eacd2f7f8df0c8a1a4425301abcb28fa0c5dc99d989820d6b0aa3->enter($__internal_f9e9b06d284eacd2f7f8df0c8a1a4425301abcb28fa0c5dc99d989820d6b0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "renting/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9e9b06d284eacd2f7f8df0c8a1a4425301abcb28fa0c5dc99d989820d6b0aa3->leave($__internal_f9e9b06d284eacd2f7f8df0c8a1a4425301abcb28fa0c5dc99d989820d6b0aa3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6878f8a5bfef342793e2c7cd32b4dd783c38b78fa2ff1d81e8b716f4a92914b = $this->env->getExtension("native_profiler");
        $__internal_a6878f8a5bfef342793e2c7cd32b4dd783c38b78fa2ff1d81e8b716f4a92914b->enter($__internal_a6878f8a5bfef342793e2c7cd32b4dd783c38b78fa2ff1d81e8b716f4a92914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Renting</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renting"]) ? $context["renting"] : $this->getContext($context, "renting")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["renting"]) ? $context["renting"] : $this->getContext($context, "renting")), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["renting"]) ? $context["renting"] : $this->getContext($context, "renting")), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Outclassed</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["renting"]) ? $context["renting"] : $this->getContext($context, "renting")), "outclassed", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("renting_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renting_edit", array("id" => $this->getAttribute((isset($context["renting"]) ? $context["renting"] : $this->getContext($context, "renting")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a6878f8a5bfef342793e2c7cd32b4dd783c38b78fa2ff1d81e8b716f4a92914b->leave($__internal_a6878f8a5bfef342793e2c7cd32b4dd783c38b78fa2ff1d81e8b716f4a92914b_prof);

    }

    public function getTemplateName()
    {
        return "renting/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  90 => 31,  84 => 28,  78 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Renting</h1>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ renting.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Creationdate</th>*/
/*                 <td>{% if renting.creationDate %}{{ renting.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Outclassed</th>*/
/*                 <td>{% if renting.outclassed %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('renting_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('renting_edit', { 'id': renting.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
