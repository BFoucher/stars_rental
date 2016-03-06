<?php

/* client/show.html.twig */
class __TwigTemplate_f9ca9a71f42414d6c4830a20d2c54f3d377da248862945e9c8b222411422dfeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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
        $__internal_0414c6f25c13da0896d2cc7397464eca6c219e5eec12d21159e24b5844ea2b50 = $this->env->getExtension("native_profiler");
        $__internal_0414c6f25c13da0896d2cc7397464eca6c219e5eec12d21159e24b5844ea2b50->enter($__internal_0414c6f25c13da0896d2cc7397464eca6c219e5eec12d21159e24b5844ea2b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0414c6f25c13da0896d2cc7397464eca6c219e5eec12d21159e24b5844ea2b50->leave($__internal_0414c6f25c13da0896d2cc7397464eca6c219e5eec12d21159e24b5844ea2b50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cd5e7e3bf1662ee72128ba02ee3f55836379bb1a19935b879fc16e080ca4f43 = $this->env->getExtension("native_profiler");
        $__internal_9cd5e7e3bf1662ee72128ba02ee3f55836379bb1a19935b879fc16e080ca4f43->enter($__internal_9cd5e7e3bf1662ee72128ba02ee3f55836379bb1a19935b879fc16e080ca4f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
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
        
        $__internal_9cd5e7e3bf1662ee72128ba02ee3f55836379bb1a19935b879fc16e080ca4f43->leave($__internal_9cd5e7e3bf1662ee72128ba02ee3f55836379bb1a19935b879fc16e080ca4f43_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ client.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ client.firstName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ client.lastName }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('client_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('client_edit', { 'id': client.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
