<?php

/* client/index.html.twig */
class __TwigTemplate_8ec750e30d29d77405a415d44ba4710e710c7a69ee2a4b005f78ba6d12b6ed32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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
        $__internal_66e4f64c7b4b622486ee89811ca6c9323fbb28c2bb0f00f3067870df7bfb6a94 = $this->env->getExtension("native_profiler");
        $__internal_66e4f64c7b4b622486ee89811ca6c9323fbb28c2bb0f00f3067870df7bfb6a94->enter($__internal_66e4f64c7b4b622486ee89811ca6c9323fbb28c2bb0f00f3067870df7bfb6a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e4f64c7b4b622486ee89811ca6c9323fbb28c2bb0f00f3067870df7bfb6a94->leave($__internal_66e4f64c7b4b622486ee89811ca6c9323fbb28c2bb0f00f3067870df7bfb6a94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a451ab7cf4ed63880c5a36ebd5617cb9aee0ee764efec827659ae855ab56951 = $this->env->getExtension("native_profiler");
        $__internal_5a451ab7cf4ed63880c5a36ebd5617cb9aee0ee764efec827659ae855ab56951->enter($__internal_5a451ab7cf4ed63880c5a36ebd5617cb9aee0ee764efec827659ae855ab56951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Number</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-primary btn-md\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("client_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_5a451ab7cf4ed63880c5a36ebd5617cb9aee0ee764efec827659ae855ab56951->leave($__internal_5a451ab7cf4ed63880c5a36ebd5617cb9aee0ee764efec827659ae855ab56951_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Client list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Number</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for client in clients %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('client_show', { 'id': client.id }) }}">{{ client.id }}</a></td>*/
/*                 <td>{{ client.firstName }}</td>*/
/*                 <td>{{ client.lastName }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('client_show', { 'id': client.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('client_edit', { 'id': client.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a class="btn btn-primary btn-md" href="{{ path('client_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
