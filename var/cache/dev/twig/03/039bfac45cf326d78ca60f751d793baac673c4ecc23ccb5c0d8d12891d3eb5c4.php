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
        $__internal_4f4a12a122aef298ab07b84bfc830fc3308e3767406e9ac16263a3de0bb55685 = $this->env->getExtension("native_profiler");
        $__internal_4f4a12a122aef298ab07b84bfc830fc3308e3767406e9ac16263a3de0bb55685->enter($__internal_4f4a12a122aef298ab07b84bfc830fc3308e3767406e9ac16263a3de0bb55685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ship/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f4a12a122aef298ab07b84bfc830fc3308e3767406e9ac16263a3de0bb55685->leave($__internal_4f4a12a122aef298ab07b84bfc830fc3308e3767406e9ac16263a3de0bb55685_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd34be0c52ddf9a89b1860efb9fa4e1787a991fab00845fc9febc4b7db4aea3b = $this->env->getExtension("native_profiler");
        $__internal_fd34be0c52ddf9a89b1860efb9fa4e1787a991fab00845fc9febc4b7db4aea3b->enter($__internal_fd34be0c52ddf9a89b1860efb9fa4e1787a991fab00845fc9febc4b7db4aea3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ship edit</h1>

    ";
        // line 6
        if (($this->getAttribute((isset($context["ship"]) ? $context["ship"] : $this->getContext($context, "ship")), "name", array()) == "Tie Fighter")) {
            // line 7
            echo "      ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_tie_form"]) ? $context["edit_tie_form"] : $this->getContext($context, "edit_tie_form")), 'form_start');
            echo "
          ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_tie_form"]) ? $context["edit_tie_form"] : $this->getContext($context, "edit_tie_form")), 'widget');
            echo "
          <input type=\"submit\" value=\"Edit\" />
      ";
            // line 10
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_tie_form"]) ? $context["edit_tie_form"] : $this->getContext($context, "edit_tie_form")), 'form_end');
            echo "
    ";
        } else {
            // line 12
            echo "      ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
            echo "
        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
            echo "
        <input type=\"submit\" value=\"Edit\" />
      ";
            // line 15
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
            echo "
    ";
        }
        // line 17
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ship_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fd34be0c52ddf9a89b1860efb9fa4e1787a991fab00845fc9febc4b7db4aea3b->leave($__internal_fd34be0c52ddf9a89b1860efb9fa4e1787a991fab00845fc9febc4b7db4aea3b_prof);

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
        return array (  92 => 25,  87 => 23,  81 => 20,  76 => 17,  71 => 15,  66 => 13,  61 => 12,  56 => 10,  51 => 8,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ship edit</h1>*/
/* */
/*     {% if ship.name == "Tie Fighter" %}*/
/*       {{ form_start(edit_tie_form) }}*/
/*           {{ form_widget(edit_tie_form) }}*/
/*           <input type="submit" value="Edit" />*/
/*       {{ form_end(edit_tie_form) }}*/
/*     {% else %}*/
/*       {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*       {{ form_end(edit_form) }}*/
/*     {% endif %}*/
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
