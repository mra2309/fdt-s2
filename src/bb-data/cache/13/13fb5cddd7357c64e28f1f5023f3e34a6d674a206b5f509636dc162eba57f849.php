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

/* mod_filemanager_editor.phtml */
class __TwigTemplate_8ce0b415477f3115f6fb840f52e6aca211d1e6ed37bcb97beaf1f3e1ca0bd51d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["mod"] = (twig_constant("BB_URL") . "bb-modules/Filemanager");
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/js/jquery.js\" type=\"text/javascript\"></script>
  <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "basename", [], "any", false, false, false, 8), "html", null, true);
        echo "</title>
  <style type=\"text/css\" media=\"screen\">
    body {
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .claer { clear: both }
    #editor { 
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0px;
        margin: 0;
        padding: 0;
    }
    #asset-info {
        color: #fff;
        position: fixed;
        top: 10px;
        right: 20px;
        text-shadow: 0px 2px 3px #666;
        background: #000;
        padding: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        z-index: 1;
        display: none;
    }
  </style>
</head>

<body>
    
<pre id=\"editor\">";
        // line 44
        echo ($context["file_content"] ?? null);
        echo "</pre>
<span id=\"asset-info\"></span>

<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/ace/ace.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/ace/theme-monokai.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["mod"] ?? null), "html", null, true);
        echo "/src/ace/";
        echo twig_escape_filter($this->env, ($context["js"] ?? null), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
\$(function(){

    var editor = ace.edit(\"editor\");
    editor.setTheme(\"ace/theme/monokai\");

    /*
    editor.getSession().on('change', function(e){
        console.log('changed');
    });
    */
    var openfile = '";
        // line 61
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo "';
    var canon = require('pilot/canon')
\t
\tcanon.addCommand({
\t    name: 'myCommand',
\t    bindKey: {
\t        win: 'Ctrl-S',
\t        mac: 'Command-S',
\t        sender: 'editor'
\t    },
\t    exec: function(env, args, request) {
\t    \tvar data = editor.getSession().getValue();
\t    \tsaveFile(openfile,data);
\t    }
\t});
\t
\tcanon.addCommand({
\t    name: 'myCommand',
\t    bindKey: {
\t        win: 'Ctrl-Shift-S',
\t        mac: 'Command-Shift-S',
\t        sender: 'editor'
\t    },
\t    exec: function(env, args, request) {
\t\t\tvar data = editor.getSession().getValue();
\t    \tsaveFile(openfile,data);
\t    }
\t});
\t
\tvar JavaScriptMode = require(\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["mode"] ?? null), "html", null, true);
        echo "\").Mode;
\teditor.getSession().setMode(new JavaScriptMode());
\teditor.setShowPrintMargin(false);
    
    \$('#save-button').click(function(){
        var data = editor.getSession().getValue();
        saveFile(openfile,data);
        return false;
    });
});

function saveFile(path,data){\t
    \$('#asset-info').text('Saving file').fadeIn();
\t\$.post('";
        // line 103
        echo twig_escape_filter($this->env, twig_constant("BB_URL_API"), "html", null, true);
        echo "admin/filemanager/save_file',{path: path, data:data},function(d){
\t\tif(d.result){
\t\t\t\$('#asset-info').text('Your file has been saved.').delay(5000).fadeOut('slow');
\t\t} else {
            \$('#asset-info').text('Unable to save file. Check file permissions.').delay(5000).fadeOut('slow');
        }
\t});
}

</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "mod_filemanager_editor.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 103,  152 => 90,  120 => 61,  103 => 49,  99 => 48,  95 => 47,  89 => 44,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mod = constant('BB_URL') ~ 'bb-modules/Filemanager' %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <script src=\"{{mod}}/src/js/jquery.js\" type=\"text/javascript\"></script>
  <title>{{ info.basename }}</title>
  <style type=\"text/css\" media=\"screen\">
    body {
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .claer { clear: both }
    #editor { 
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0px;
        margin: 0;
        padding: 0;
    }
    #asset-info {
        color: #fff;
        position: fixed;
        top: 10px;
        right: 20px;
        text-shadow: 0px 2px 3px #666;
        background: #000;
        padding: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        z-index: 1;
        display: none;
    }
  </style>
</head>

<body>
    
<pre id=\"editor\">{{ file_content|raw }}</pre>
<span id=\"asset-info\"></span>

<script src=\"{{ mod }}/src/ace/ace.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"{{ mod }}/src/ace/theme-monokai.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"{{ mod }}/src/ace/{{js}}\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\">
\$(function(){

    var editor = ace.edit(\"editor\");
    editor.setTheme(\"ace/theme/monokai\");

    /*
    editor.getSession().on('change', function(e){
        console.log('changed');
    });
    */
    var openfile = '{{file}}';
    var canon = require('pilot/canon')
\t
\tcanon.addCommand({
\t    name: 'myCommand',
\t    bindKey: {
\t        win: 'Ctrl-S',
\t        mac: 'Command-S',
\t        sender: 'editor'
\t    },
\t    exec: function(env, args, request) {
\t    \tvar data = editor.getSession().getValue();
\t    \tsaveFile(openfile,data);
\t    }
\t});
\t
\tcanon.addCommand({
\t    name: 'myCommand',
\t    bindKey: {
\t        win: 'Ctrl-Shift-S',
\t        mac: 'Command-Shift-S',
\t        sender: 'editor'
\t    },
\t    exec: function(env, args, request) {
\t\t\tvar data = editor.getSession().getValue();
\t    \tsaveFile(openfile,data);
\t    }
\t});
\t
\tvar JavaScriptMode = require(\"{{mode}}\").Mode;
\teditor.getSession().setMode(new JavaScriptMode());
\teditor.setShowPrintMargin(false);
    
    \$('#save-button').click(function(){
        var data = editor.getSession().getValue();
        saveFile(openfile,data);
        return false;
    });
});

function saveFile(path,data){\t
    \$('#asset-info').text('Saving file').fadeIn();
\t\$.post('{{ constant(\"BB_URL_API\") }}admin/filemanager/save_file',{path: path, data:data},function(d){
\t\tif(d.result){
\t\t\t\$('#asset-info').text('Your file has been saved.').delay(5000).fadeOut('slow');
\t\t} else {
            \$('#asset-info').text('Unable to save file. Check file permissions.').delay(5000).fadeOut('slow');
        }
\t});
}

</script>

</body>
</html>", "mod_filemanager_editor.phtml", "/var/www/html/bb-modules/Filemanager/html_admin/mod_filemanager_editor.phtml");
    }
}
