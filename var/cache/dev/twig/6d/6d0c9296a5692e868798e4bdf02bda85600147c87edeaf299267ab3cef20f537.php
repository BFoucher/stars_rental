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
        $__internal_7c351857bfeaebfb9d6f20bdf12aeb73531e876966fddc250465c962a7e43dad = $this->env->getExtension("native_profiler");
        $__internal_7c351857bfeaebfb9d6f20bdf12aeb73531e876966fddc250465c962a7e43dad->enter($__internal_7c351857bfeaebfb9d6f20bdf12aeb73531e876966fddc250465c962a7e43dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "    </head>
    <body>
      <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">Stars Rental</a>
          </div>
          <ul class=\"nav navbar-nav\">
            <li><a href=";
        // line 20
        echo $this->env->getExtension('routing')->getPath("renting_index");
        echo ">Rent</a></li>
            <li><a href=";
        // line 21
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo ">Clients</a></li>
            <li><a href=";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ship_index");
        echo ">Ships</a></li>
          </ul>
        </div>
      </nav>
        <div class=\"container well\"
          ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "          ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "        </div>
    </body>
</html>
";
        
        $__internal_7c351857bfeaebfb9d6f20bdf12aeb73531e876966fddc250465c962a7e43dad->leave($__internal_7c351857bfeaebfb9d6f20bdf12aeb73531e876966fddc250465c962a7e43dad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82a9935fcd8e41f16f903384b29e9158651d658a60ed2c9f955d58eb2a9b21f6 = $this->env->getExtension("native_profiler");
        $__internal_82a9935fcd8e41f16f903384b29e9158651d658a60ed2c9f955d58eb2a9b21f6->enter($__internal_82a9935fcd8e41f16f903384b29e9158651d658a60ed2c9f955d58eb2a9b21f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82a9935fcd8e41f16f903384b29e9158651d658a60ed2c9f955d58eb2a9b21f6->leave($__internal_82a9935fcd8e41f16f903384b29e9158651d658a60ed2c9f955d58eb2a9b21f6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f73ce24d6678b0311ff441a7365b125d0f19138021c6771d7dbdc6d69605ced = $this->env->getExtension("native_profiler");
        $__internal_7f73ce24d6678b0311ff441a7365b125d0f19138021c6771d7dbdc6d69605ced->enter($__internal_7f73ce24d6678b0311ff441a7365b125d0f19138021c6771d7dbdc6d69605ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- <link rel=\"stylesheet\" href=\"https://bootswatch.com/flatly/bootstrap.min.css\"> -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/custom.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_7f73ce24d6678b0311ff441a7365b125d0f19138021c6771d7dbdc6d69605ced->leave($__internal_7f73ce24d6678b0311ff441a7365b125d0f19138021c6771d7dbdc6d69605ced_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1e62ea9852e20084d664637986aa204620c6b147cb6b19c3582ca23b88d21a1 = $this->env->getExtension("native_profiler");
        $__internal_e1e62ea9852e20084d664637986aa204620c6b147cb6b19c3582ca23b88d21a1->enter($__internal_e1e62ea9852e20084d664637986aa204620c6b147cb6b19c3582ca23b88d21a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1e62ea9852e20084d664637986aa204620c6b147cb6b19c3582ca23b88d21a1->leave($__internal_e1e62ea9852e20084d664637986aa204620c6b147cb6b19c3582ca23b88d21a1_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3dabad4b82ebe0d426389eba78e8886e33a33cd1df1827dbea037cb66c6cd15b = $this->env->getExtension("native_profiler");
        $__internal_3dabad4b82ebe0d426389eba78e8886e33a33cd1df1827dbea037cb66c6cd15b->enter($__internal_3dabad4b82ebe0d426389eba78e8886e33a33cd1df1827dbea037cb66c6cd15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3dabad4b82ebe0d426389eba78e8886e33a33cd1df1827dbea037cb66c6cd15b->leave($__internal_3dabad4b82ebe0d426389eba78e8886e33a33cd1df1827dbea037cb66c6cd15b_prof);

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
        return array (  127 => 28,  116 => 27,  107 => 10,  103 => 9,  97 => 7,  91 => 6,  79 => 5,  69 => 29,  66 => 28,  64 => 27,  56 => 22,  52 => 21,  48 => 20,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">*/
/*         <!-- <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css"> -->*/
/*         <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/custom.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% endblock %}*/
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
