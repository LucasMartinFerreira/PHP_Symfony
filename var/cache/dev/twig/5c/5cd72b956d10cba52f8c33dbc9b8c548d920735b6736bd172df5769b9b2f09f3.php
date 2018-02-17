<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cbf8acf4a6969e23609f4817fe8cf730861e504661d08c32ed4f4b9a27cc58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbf8acf4a6969e23609f4817fe8cf730861e504661d08c32ed4f4b9a27cc58d->enter($__internal_0cbf8acf4a6969e23609f4817fe8cf730861e504661d08c32ed4f4b9a27cc58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_85cee27854c5407bdee7a50a1723630eff186cb6a3cb89f1b64e09211c53e427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cee27854c5407bdee7a50a1723630eff186cb6a3cb89f1b64e09211c53e427->enter($__internal_85cee27854c5407bdee7a50a1723630eff186cb6a3cb89f1b64e09211c53e427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbf8acf4a6969e23609f4817fe8cf730861e504661d08c32ed4f4b9a27cc58d->leave($__internal_0cbf8acf4a6969e23609f4817fe8cf730861e504661d08c32ed4f4b9a27cc58d_prof);

        
        $__internal_85cee27854c5407bdee7a50a1723630eff186cb6a3cb89f1b64e09211c53e427->leave($__internal_85cee27854c5407bdee7a50a1723630eff186cb6a3cb89f1b64e09211c53e427_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a32061ff2d2641b44de7fd8bd4fdcff543c130f34553172613222ed303e60790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32061ff2d2641b44de7fd8bd4fdcff543c130f34553172613222ed303e60790->enter($__internal_a32061ff2d2641b44de7fd8bd4fdcff543c130f34553172613222ed303e60790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e49b5462a4d28cb934500e9db61b2899db78a72933711bfe4bbfb71aad37ccc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49b5462a4d28cb934500e9db61b2899db78a72933711bfe4bbfb71aad37ccc5->enter($__internal_e49b5462a4d28cb934500e9db61b2899db78a72933711bfe4bbfb71aad37ccc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e49b5462a4d28cb934500e9db61b2899db78a72933711bfe4bbfb71aad37ccc5->leave($__internal_e49b5462a4d28cb934500e9db61b2899db78a72933711bfe4bbfb71aad37ccc5_prof);

        
        $__internal_a32061ff2d2641b44de7fd8bd4fdcff543c130f34553172613222ed303e60790->leave($__internal_a32061ff2d2641b44de7fd8bd4fdcff543c130f34553172613222ed303e60790_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2539ae2865412251338788203fc7cb8f7f033c604444ffea850c6882e4e0ed81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2539ae2865412251338788203fc7cb8f7f033c604444ffea850c6882e4e0ed81->enter($__internal_2539ae2865412251338788203fc7cb8f7f033c604444ffea850c6882e4e0ed81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19bcfa09cd19ea3c7fe0864cf1a936a7969e1bf32daa0152e3c25d6c6716be22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bcfa09cd19ea3c7fe0864cf1a936a7969e1bf32daa0152e3c25d6c6716be22->enter($__internal_19bcfa09cd19ea3c7fe0864cf1a936a7969e1bf32daa0152e3c25d6c6716be22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19bcfa09cd19ea3c7fe0864cf1a936a7969e1bf32daa0152e3c25d6c6716be22->leave($__internal_19bcfa09cd19ea3c7fe0864cf1a936a7969e1bf32daa0152e3c25d6c6716be22_prof);

        
        $__internal_2539ae2865412251338788203fc7cb8f7f033c604444ffea850c6882e4e0ed81->leave($__internal_2539ae2865412251338788203fc7cb8f7f033c604444ffea850c6882e4e0ed81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9760f2ff55249f1c70db6b488fb36fdfb088e9a2bec8efe12ed1dbe752c802e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9760f2ff55249f1c70db6b488fb36fdfb088e9a2bec8efe12ed1dbe752c802e->enter($__internal_d9760f2ff55249f1c70db6b488fb36fdfb088e9a2bec8efe12ed1dbe752c802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3385fb769cd667ba25f4a0cab18abfdea608afa96b163b08492bb4ba0b82abbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3385fb769cd667ba25f4a0cab18abfdea608afa96b163b08492bb4ba0b82abbf->enter($__internal_3385fb769cd667ba25f4a0cab18abfdea608afa96b163b08492bb4ba0b82abbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3385fb769cd667ba25f4a0cab18abfdea608afa96b163b08492bb4ba0b82abbf->leave($__internal_3385fb769cd667ba25f4a0cab18abfdea608afa96b163b08492bb4ba0b82abbf_prof);

        
        $__internal_d9760f2ff55249f1c70db6b488fb36fdfb088e9a2bec8efe12ed1dbe752c802e->leave($__internal_d9760f2ff55249f1c70db6b488fb36fdfb088e9a2bec8efe12ed1dbe752c802e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Curso Full Stack/Modulo 3/PHP/Practicas/php_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
