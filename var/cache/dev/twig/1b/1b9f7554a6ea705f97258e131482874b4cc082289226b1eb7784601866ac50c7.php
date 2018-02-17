<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
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
        $__internal_cde931bfd28b2f791dbe1e98d293f31f801e1b468ad53b15337bf1d6cc5fcd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde931bfd28b2f791dbe1e98d293f31f801e1b468ad53b15337bf1d6cc5fcd1f->enter($__internal_cde931bfd28b2f791dbe1e98d293f31f801e1b468ad53b15337bf1d6cc5fcd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8529c7685376088fbf55e09c5df772adc8baafd093bc4f169f1005a2b714d66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8529c7685376088fbf55e09c5df772adc8baafd093bc4f169f1005a2b714d66b->enter($__internal_8529c7685376088fbf55e09c5df772adc8baafd093bc4f169f1005a2b714d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cde931bfd28b2f791dbe1e98d293f31f801e1b468ad53b15337bf1d6cc5fcd1f->leave($__internal_cde931bfd28b2f791dbe1e98d293f31f801e1b468ad53b15337bf1d6cc5fcd1f_prof);

        
        $__internal_8529c7685376088fbf55e09c5df772adc8baafd093bc4f169f1005a2b714d66b->leave($__internal_8529c7685376088fbf55e09c5df772adc8baafd093bc4f169f1005a2b714d66b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_503639c2f968b437d2fafc605cbb124530f5fd00ad937a2b5d8be7f80068062d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503639c2f968b437d2fafc605cbb124530f5fd00ad937a2b5d8be7f80068062d->enter($__internal_503639c2f968b437d2fafc605cbb124530f5fd00ad937a2b5d8be7f80068062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d53ffdc37cb7f5fade104afbe8f909bdf860645e6005b3cdd6e0b8ea054ff017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53ffdc37cb7f5fade104afbe8f909bdf860645e6005b3cdd6e0b8ea054ff017->enter($__internal_d53ffdc37cb7f5fade104afbe8f909bdf860645e6005b3cdd6e0b8ea054ff017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d53ffdc37cb7f5fade104afbe8f909bdf860645e6005b3cdd6e0b8ea054ff017->leave($__internal_d53ffdc37cb7f5fade104afbe8f909bdf860645e6005b3cdd6e0b8ea054ff017_prof);

        
        $__internal_503639c2f968b437d2fafc605cbb124530f5fd00ad937a2b5d8be7f80068062d->leave($__internal_503639c2f968b437d2fafc605cbb124530f5fd00ad937a2b5d8be7f80068062d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20a396e24965d30740a2858f2098331828fbab4bf39e024197e5bbbea0888766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a396e24965d30740a2858f2098331828fbab4bf39e024197e5bbbea0888766->enter($__internal_20a396e24965d30740a2858f2098331828fbab4bf39e024197e5bbbea0888766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a080cefeaee23db3058cfdb133ede3689f46d49c75d8e515f9c74dbaf7a8a74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a080cefeaee23db3058cfdb133ede3689f46d49c75d8e515f9c74dbaf7a8a74a->enter($__internal_a080cefeaee23db3058cfdb133ede3689f46d49c75d8e515f9c74dbaf7a8a74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a080cefeaee23db3058cfdb133ede3689f46d49c75d8e515f9c74dbaf7a8a74a->leave($__internal_a080cefeaee23db3058cfdb133ede3689f46d49c75d8e515f9c74dbaf7a8a74a_prof);

        
        $__internal_20a396e24965d30740a2858f2098331828fbab4bf39e024197e5bbbea0888766->leave($__internal_20a396e24965d30740a2858f2098331828fbab4bf39e024197e5bbbea0888766_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c48fc57f6d409516d8be264afd3f8d912975f1254267e143b6742ad19b545a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48fc57f6d409516d8be264afd3f8d912975f1254267e143b6742ad19b545a2a->enter($__internal_c48fc57f6d409516d8be264afd3f8d912975f1254267e143b6742ad19b545a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0f5e2382c93e5d46e105231f30354da35672bda51f060bd4940031c3a52ac02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f5e2382c93e5d46e105231f30354da35672bda51f060bd4940031c3a52ac02->enter($__internal_a0f5e2382c93e5d46e105231f30354da35672bda51f060bd4940031c3a52ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a0f5e2382c93e5d46e105231f30354da35672bda51f060bd4940031c3a52ac02->leave($__internal_a0f5e2382c93e5d46e105231f30354da35672bda51f060bd4940031c3a52ac02_prof);

        
        $__internal_c48fc57f6d409516d8be264afd3f8d912975f1254267e143b6742ad19b545a2a->leave($__internal_c48fc57f6d409516d8be264afd3f8d912975f1254267e143b6742ad19b545a2a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_993f355f955ae6c30c125f47cac6b05b9d97fd4816f532e718e07a09a4fd3390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993f355f955ae6c30c125f47cac6b05b9d97fd4816f532e718e07a09a4fd3390->enter($__internal_993f355f955ae6c30c125f47cac6b05b9d97fd4816f532e718e07a09a4fd3390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9dbf2a1c2ee5cb3f3ab6839c3ff436f4a3970f0824c9de63b744a3de64a3e42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbf2a1c2ee5cb3f3ab6839c3ff436f4a3970f0824c9de63b744a3de64a3e42f->enter($__internal_9dbf2a1c2ee5cb3f3ab6839c3ff436f4a3970f0824c9de63b744a3de64a3e42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9dbf2a1c2ee5cb3f3ab6839c3ff436f4a3970f0824c9de63b744a3de64a3e42f->leave($__internal_9dbf2a1c2ee5cb3f3ab6839c3ff436f4a3970f0824c9de63b744a3de64a3e42f_prof);

        
        $__internal_993f355f955ae6c30c125f47cac6b05b9d97fd4816f532e718e07a09a4fd3390->leave($__internal_993f355f955ae6c30c125f47cac6b05b9d97fd4816f532e718e07a09a4fd3390_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Curso Full Stack/Modulo 3/PHP/Practicas/php_symfony/app/Resources/views/base.html.twig");
    }
}
