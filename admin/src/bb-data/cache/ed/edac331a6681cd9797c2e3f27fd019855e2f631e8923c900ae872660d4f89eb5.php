<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mod_filemanager_index.phtml */
class __TwigTemplate_99f9b4df6f7e96e5d314728b9b5932926d2f2f7628cd3c2c243b2564f1ffd8ee extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content_wide' => [$this, 'block_content_wide'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_filemanager_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_filemanager_index.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 5
        $context["hide_menu"] = "1";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Filemanager";
    }

    // line 7
    public function block_content_wide($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<iframe src=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("filemanager/ide", ["inline" => 1]);
        echo "\" width=\"100%\" height=\"700\"></iframe>
";
    }

    public function getTemplateName()
    {
        return "mod_filemanager_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  60 => 7,  53 => 3,  49 => 1,  47 => 5,  45 => 4,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}Filemanager{% endblock %}
{% set active_menu = 'system' %}
{% set hide_menu = '1' %}

{% block content_wide %}
<iframe src=\"{{ 'filemanager/ide'|alink({'inline' : 1}) }}\" width=\"100%\" height=\"700\"></iframe>
{% endblock %}
", "mod_filemanager_index.phtml", "/var/www/html/bb-modules/Filemanager/html_admin/mod_filemanager_index.phtml");
    }
}
