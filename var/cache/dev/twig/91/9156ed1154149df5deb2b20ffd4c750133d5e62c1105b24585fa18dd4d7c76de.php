<?php

/* renting/index.html.twig */
class __TwigTemplate_7a49f71847217869e4e10e2249cdf13cf0d6e710f654ebde834edca074e25660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "renting/index.html.twig", 1);
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
        $__internal_9c85daf1872e2c17d13d69d763671af943784c140f4ed5d5543b55f0291c2535 = $this->env->getExtension("native_profiler");
        $__internal_9c85daf1872e2c17d13d69d763671af943784c140f4ed5d5543b55f0291c2535->enter($__internal_9c85daf1872e2c17d13d69d763671af943784c140f4ed5d5543b55f0291c2535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "renting/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c85daf1872e2c17d13d69d763671af943784c140f4ed5d5543b55f0291c2535->leave($__internal_9c85daf1872e2c17d13d69d763671af943784c140f4ed5d5543b55f0291c2535_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2498c114f7a5c238e5c1851da79dffa4c6a66fb735685d8c269ce84e090cfc50 = $this->env->getExtension("native_profiler");
        $__internal_2498c114f7a5c238e5c1851da79dffa4c6a66fb735685d8c269ce84e090cfc50->enter($__internal_2498c114f7a5c238e5c1851da79dffa4c6a66fb735685d8c269ce84e090cfc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Renting list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Number</th>
                <th>Creationdate</th>
                <th>Client</th>
                <th>Ship</th>
                <th>Outclassed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rentings"]) ? $context["rentings"] : $this->getContext($context, "rentings")));
        foreach ($context['_seq'] as $context["_key"] => $context["renting"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renting_show", array("id" => $this->getAttribute($context["renting"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["renting"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["renting"], "creationDate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["renting"], "client", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["renting"], "ship", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["renting"], "outclassed", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renting_show", array("id" => $this->getAttribute($context["renting"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renting_edit", array("id" => $this->getAttribute($context["renting"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['renting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("renting_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2498c114f7a5c238e5c1851da79dffa4c6a66fb735685d8c269ce84e090cfc50->leave($__internal_2498c114f7a5c238e5c1851da79dffa4c6a66fb735685d8c269ce84e090cfc50_prof);

    }

    public function getTemplateName()
    {
        return "renting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Renting list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Number</th>*/
/*                 <th>Creationdate</th>*/
/*                 <th>Client</th>*/
/*                 <th>Ship</th>*/
/*                 <th>Outclassed</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for renting in rentings %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('renting_show', { 'id': renting.id }) }}">{{ renting.id }}</a></td>*/
/*                 <td>{{ renting.creationDate|date('Y-m-d') }}</td>*/
/*                 <td>{{ renting.client }}</td>*/
/*                 <td>{{ renting.ship }}</td>*/
/*                 <td>{% if renting.outclassed %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('renting_show', { 'id': renting.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('renting_edit', { 'id': renting.id }) }}">edit</a>*/
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
/*             <a href="{{ path('renting_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
