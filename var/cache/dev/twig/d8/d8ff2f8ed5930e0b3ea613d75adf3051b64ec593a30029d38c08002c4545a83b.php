<?php

/* ship/index.html.twig */
class __TwigTemplate_5b312d74250407396fd604a295ee9c44aab4ecc512a6072a0275bdb1fc0090d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ship/index.html.twig", 1);
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
        $__internal_fa553a5927fbe19296f057043cecbcd4a7685e077e7bebc392c33b5db1a51053 = $this->env->getExtension("native_profiler");
        $__internal_fa553a5927fbe19296f057043cecbcd4a7685e077e7bebc392c33b5db1a51053->enter($__internal_fa553a5927fbe19296f057043cecbcd4a7685e077e7bebc392c33b5db1a51053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ship/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa553a5927fbe19296f057043cecbcd4a7685e077e7bebc392c33b5db1a51053->leave($__internal_fa553a5927fbe19296f057043cecbcd4a7685e077e7bebc392c33b5db1a51053_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6be7b69ca85ba462b674357ca365b0b27a89b8b61f02151b653f2c07e3682032 = $this->env->getExtension("native_profiler");
        $__internal_6be7b69ca85ba462b674357ca365b0b27a89b8b61f02151b653f2c07e3682032->enter($__internal_6be7b69ca85ba462b674357ca365b0b27a89b8b61f02151b653f2c07e3682032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ship list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Avalability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ships"]) ? $context["ships"] : $this->getContext($context, "ships")));
        foreach ($context['_seq'] as $context["_key"] => $context["ship"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ship_show", array("id" => $this->getAttribute($context["ship"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ship"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ship"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ship"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["ship"], "avalability", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ship_show", array("id" => $this->getAttribute($context["ship"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ship_edit", array("id" => $this->getAttribute($context["ship"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ship_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_6be7b69ca85ba462b674357ca365b0b27a89b8b61f02151b653f2c07e3682032->leave($__internal_6be7b69ca85ba462b674357ca365b0b27a89b8b61f02151b653f2c07e3682032_prof);

    }

    public function getTemplateName()
    {
        return "ship/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ship list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Category</th>*/
/*                 <th>Avalability</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ship in ships %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ship_show', { 'id': ship.id }) }}">{{ ship.id }}</a></td>*/
/*                 <td>{{ ship.name }}</td>*/
/*                 <td>{{ ship.category }}</td>*/
/*                 <td>{% if ship.avalability %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('ship_show', { 'id': ship.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('ship_edit', { 'id': ship.id }) }}">edit</a>*/
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
/*             <a href="{{ path('ship_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
