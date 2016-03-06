<?php

/* base.html.twig */
class __TwigTemplate_5b3b53aea3548838076dbbf43cd7a02bdb8cfa65a398e5e24c019b0970950413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b30e79558d9b29163adf98dccdee72db556da75683211d604911de7e49de41c = $this->env->getExtension("native_profiler");
        $__internal_3b30e79558d9b29163adf98dccdee72db556da75683211d604911de7e49de41c->enter($__internal_3b30e79558d9b29163adf98dccdee72db556da75683211d604911de7e49de41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <!-- <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"> -->
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/flatly/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/custom.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">Stars Rental</a>
          </div>
          <ul class=\"nav navbar-nav\">
            <li><a href=";
        // line 19
        echo $this->env->getExtension('routing')->getPath("renting_index");
        echo ">Rent</a></li>
            <li><a href=";
        // line 20
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo ">Clients</a></li>
            <li><a href=";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ship_index");
        echo ">Ships</a></li>
          </ul>
        </div>
      </nav>
        <div class=\"container well\"
          ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "          ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "        </div>
    </body>
</html>
";
        
        $__internal_3b30e79558d9b29163adf98dccdee72db556da75683211d604911de7e49de41c->leave($__internal_3b30e79558d9b29163adf98dccdee72db556da75683211d604911de7e49de41c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4898d6ef09feabc45a913317324908ec021c6036970e980987b388c0738f9ea5 = $this->env->getExtension("native_profiler");
        $__internal_4898d6ef09feabc45a913317324908ec021c6036970e980987b388c0738f9ea5->enter($__internal_4898d6ef09feabc45a913317324908ec021c6036970e980987b388c0738f9ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4898d6ef09feabc45a913317324908ec021c6036970e980987b388c0738f9ea5->leave($__internal_4898d6ef09feabc45a913317324908ec021c6036970e980987b388c0738f9ea5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0987d60f9281bba80ade59ea8e91af7583a81315c4ee14c674a44d02ccdb5575 = $this->env->getExtension("native_profiler");
        $__internal_0987d60f9281bba80ade59ea8e91af7583a81315c4ee14c674a44d02ccdb5575->enter($__internal_0987d60f9281bba80ade59ea8e91af7583a81315c4ee14c674a44d02ccdb5575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0987d60f9281bba80ade59ea8e91af7583a81315c4ee14c674a44d02ccdb5575->leave($__internal_0987d60f9281bba80ade59ea8e91af7583a81315c4ee14c674a44d02ccdb5575_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de4e043e784fec21574764f8a739a8333006991213098bec1d0a04a6d86daed = $this->env->getExtension("native_profiler");
        $__internal_6de4e043e784fec21574764f8a739a8333006991213098bec1d0a04a6d86daed->enter($__internal_6de4e043e784fec21574764f8a739a8333006991213098bec1d0a04a6d86daed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6de4e043e784fec21574764f8a739a8333006991213098bec1d0a04a6d86daed->leave($__internal_6de4e043e784fec21574764f8a739a8333006991213098bec1d0a04a6d86daed_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c3b4dc3a7ae2d6823ca5c21a83e96f59f6f08c56f574eafd3df94aba4b99006 = $this->env->getExtension("native_profiler");
        $__internal_5c3b4dc3a7ae2d6823ca5c21a83e96f59f6f08c56f574eafd3df94aba4b99006->enter($__internal_5c3b4dc3a7ae2d6823ca5c21a83e96f59f6f08c56f574eafd3df94aba4b99006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c3b4dc3a7ae2d6823ca5c21a83e96f59f6f08c56f574eafd3df94aba4b99006->leave($__internal_5c3b4dc3a7ae2d6823ca5c21a83e96f59f6f08c56f574eafd3df94aba4b99006_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 27,  114 => 26,  103 => 6,  91 => 5,  81 => 28,  78 => 27,  76 => 26,  68 => 21,  64 => 20,  60 => 19,  48 => 10,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <!-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}"> -->*/
/*         <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/custom.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*       <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*           <div class="navbar-header">*/
/*             <a class="navbar-brand" href="#">Stars Rental</a>*/
/*           </div>*/
/*           <ul class="nav navbar-nav">*/
/*             <li><a href={{ path('renting_index') }}>Rent</a></li>*/
/*             <li><a href={{ path('client_index') }}>Clients</a></li>*/
/*             <li><a href={{ path('ship_index') }}>Ships</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </nav>*/
/*         <div class="container well"*/
/*           {% block body %}{% endblock %}*/
/*           {% block javascripts %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
