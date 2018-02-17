<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1d16eb5436f887ac6966fb683f15bf49d6d2cbff2b03464248c8c31ce82153f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d16eb5436f887ac6966fb683f15bf49d6d2cbff2b03464248c8c31ce82153f7->enter($__internal_1d16eb5436f887ac6966fb683f15bf49d6d2cbff2b03464248c8c31ce82153f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2a3413143294a8e1960bba1d60925b1b0cc71f51cfeb828e73bd78437d0794f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3413143294a8e1960bba1d60925b1b0cc71f51cfeb828e73bd78437d0794f2->enter($__internal_2a3413143294a8e1960bba1d60925b1b0cc71f51cfeb828e73bd78437d0794f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d16eb5436f887ac6966fb683f15bf49d6d2cbff2b03464248c8c31ce82153f7->leave($__internal_1d16eb5436f887ac6966fb683f15bf49d6d2cbff2b03464248c8c31ce82153f7_prof);

        
        $__internal_2a3413143294a8e1960bba1d60925b1b0cc71f51cfeb828e73bd78437d0794f2->leave($__internal_2a3413143294a8e1960bba1d60925b1b0cc71f51cfeb828e73bd78437d0794f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69b690c8b5275798114ba52b55d7c8e7607cd64a0bd914246a8b58d841245ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b690c8b5275798114ba52b55d7c8e7607cd64a0bd914246a8b58d841245ec1->enter($__internal_69b690c8b5275798114ba52b55d7c8e7607cd64a0bd914246a8b58d841245ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7233b94486e1b8b498f0043316a98a5a8d5f64d771dd87756462ca093549596e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7233b94486e1b8b498f0043316a98a5a8d5f64d771dd87756462ca093549596e->enter($__internal_7233b94486e1b8b498f0043316a98a5a8d5f64d771dd87756462ca093549596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7233b94486e1b8b498f0043316a98a5a8d5f64d771dd87756462ca093549596e->leave($__internal_7233b94486e1b8b498f0043316a98a5a8d5f64d771dd87756462ca093549596e_prof);

        
        $__internal_69b690c8b5275798114ba52b55d7c8e7607cd64a0bd914246a8b58d841245ec1->leave($__internal_69b690c8b5275798114ba52b55d7c8e7607cd64a0bd914246a8b58d841245ec1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2304df4cb67be148e035223c2d3b80bd298a8c7df9179e0a305ccfbfca73259d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2304df4cb67be148e035223c2d3b80bd298a8c7df9179e0a305ccfbfca73259d->enter($__internal_2304df4cb67be148e035223c2d3b80bd298a8c7df9179e0a305ccfbfca73259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf279b4eadef92e10daaeeb3dcac56910cfc0ca73d0fa7da9810bc038cc2a5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf279b4eadef92e10daaeeb3dcac56910cfc0ca73d0fa7da9810bc038cc2a5e6->enter($__internal_bf279b4eadef92e10daaeeb3dcac56910cfc0ca73d0fa7da9810bc038cc2a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bf279b4eadef92e10daaeeb3dcac56910cfc0ca73d0fa7da9810bc038cc2a5e6->leave($__internal_bf279b4eadef92e10daaeeb3dcac56910cfc0ca73d0fa7da9810bc038cc2a5e6_prof);

        
        $__internal_2304df4cb67be148e035223c2d3b80bd298a8c7df9179e0a305ccfbfca73259d->leave($__internal_2304df4cb67be148e035223c2d3b80bd298a8c7df9179e0a305ccfbfca73259d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f16e9879f393e1fdb7dbbcb309c7edb25280da8c538437772c0d254930e3a75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16e9879f393e1fdb7dbbcb309c7edb25280da8c538437772c0d254930e3a75f->enter($__internal_f16e9879f393e1fdb7dbbcb309c7edb25280da8c538437772c0d254930e3a75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15d5103f16b35214c8ed14928c6908b2f7f5a8d890a8c68e1c42b82a9f8dda10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d5103f16b35214c8ed14928c6908b2f7f5a8d890a8c68e1c42b82a9f8dda10->enter($__internal_15d5103f16b35214c8ed14928c6908b2f7f5a8d890a8c68e1c42b82a9f8dda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_15d5103f16b35214c8ed14928c6908b2f7f5a8d890a8c68e1c42b82a9f8dda10->leave($__internal_15d5103f16b35214c8ed14928c6908b2f7f5a8d890a8c68e1c42b82a9f8dda10_prof);

        
        $__internal_f16e9879f393e1fdb7dbbcb309c7edb25280da8c538437772c0d254930e3a75f->leave($__internal_f16e9879f393e1fdb7dbbcb309c7edb25280da8c538437772c0d254930e3a75f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Curso Full Stack/Modulo 3/PHP/Practicas/php_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
