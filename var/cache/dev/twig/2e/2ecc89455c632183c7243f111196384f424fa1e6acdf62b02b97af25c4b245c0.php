<?php

/* ship/show.html.twig */
class __TwigTemplate_46e4b65151fb39c20adb4826c23a875b2a9b3326a474d72af6e37725a978e4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ship/show.html.twig", 1);
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
        $__internal_0a9e020cff30cca84735139996caa252eee12ccf6ce7d406d311323d62923313 = $this->env->getExtension("native_profiler");
        $__internal_0a9e020cff30cca84735139996caa252eee12ccf6ce7d406d311323d62923313->enter($__internal_0a9e020cff30cca84735139996caa252eee12ccf6ce7d406d311323d62923313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ship/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a9e020cff30cca84735139996caa252eee12ccf6ce7d406d311323d62923313->leave($__internal_0a9e020cff30cca84735139996caa252eee12ccf6ce7d406d311323d62923313_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac691199b6028435852566fc63f8840877dfb97c4461f631d0c883dd173d9677 = $this->env->getExtension("native_profiler");
        $__internal_ac691199b6028435852566fc63f8840877dfb97c4461f631d0c883dd173d9677->enter($__internal_ac691199b6028435852566fc63f8840877dfb97c4461f631d0c883dd173d9677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ship</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ship"]) ? $context["ship"] : $this->getContext($context, "ship")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ship"]) ? $context["ship"] : $this->getContext($context, "ship")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ship"]) ? $context["ship"] : $this->getContext($context, "ship")), "category", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avalability</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["ship"]) ? $context["ship"] : $this->getContext($context, "ship")), "avalability", array())) {
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("ship_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ship_edit", array("id" => $this->getAttribute((isset($context["ship"]) ? $context["ship"] : $this->getContext($context, "ship")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ac691199b6028435852566fc63f8840877dfb97c4461f631d0c883dd173d9677->leave($__internal_ac691199b6028435852566fc63f8840877dfb97c4461f631d0c883dd173d9677_prof);

    }

    public function getTemplateName()
    {
        return "ship/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ship</h1>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ ship.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ ship.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Category</th>*/
/*                 <td>{{ ship.category }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Avalability</th>*/
/*                 <td>{% if ship.avalability %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ship_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('ship_edit', { 'id': ship.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
