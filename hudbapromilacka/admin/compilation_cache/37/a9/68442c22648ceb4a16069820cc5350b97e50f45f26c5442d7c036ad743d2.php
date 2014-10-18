<?php

/* index.html */
class __TwigTemplate_37a968442c22648ceb4a16069820cc5350b97e50f45f26c5442d7c036ad743d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\"> 
<link rel=\"stylesheet\" href=\"http://localhost/hudbapromilacka/hudbapromilacka/css/bootstrap.css\">
<link rel=\"stylesheet\" href=\"templates/css/styles.css\">
<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<script src=\"http://localhost/hudbapromilacka/hudbapromilacka/js/bootstrap.min.js\"></script>

</head>
<body>

\t<h1>Logy</h1>
\t<div class=\"overflow logs\">
\t<table class=\"table table-striped overflow\" style=\"font-size: 10px;\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>DATUM</strong></td>
\t\t<td><strong>MSG<strong></td> 
\t</tr>
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllLogs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 22
            echo "\t\t";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "type") == "1")) {
                // line 23
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 25
                echo "\t\t\t<tr class=\"success\">
\t\t";
            }
            // line 27
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "datum"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "msg"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t</table>
</div>

\t
\t<div class=\"errorsoverflow\">
\t\t<h1>Errory</h1>
\t\t<table class=\"table table-striped\" style=\"font-size: 10px;\">
\t\t<tr>
\t\t\t<td><strong>ID</strong></td>
\t\t\t<td><strong>VYŘEŠIT</strong></td>
\t\t\t<td><strong>DATUM</strong></td>
\t\t\t<td><strong>MSG<strong></td> 
\t\t</tr>
\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllErrors"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 46
            echo "\t\t\t<tr class=\"danger\">
\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"?log_id=";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "\">Vyřešeno</a></td>
\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "datum"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "msg"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t</table>
\t</div>
\t
\t<h1>Skladby</h1>
\t<div class=\"overflow skladby\">
\t<table class=\"table table-striped\" style=\"font-size: 10px\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>NÁZEV</strong></td>
\t\t<td><strong>CESTA<strong></td>
\t\t<td><strong>KOUPENO<strong></td> 
\t</tr>
\t";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllAudio"));
        foreach ($context['_seq'] as $context["_key"] => $context["audio"]) {
            // line 66
            echo "\t\t";
            if (($this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "koupeno") == "1")) {
                // line 67
                echo "\t\t\t<tr class=\"success\">
\t\t";
            } else {
                // line 69
                echo "\t\t\t<tr>
\t\t";
            }
            // line 71
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "nazev"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "cesta"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "koupeno"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t</table>
</div>
<h1>Objednávky</h1>
<div class=\"overflow\">
\t<table class=\"table table-striped\" style=\"font-size: 10px;\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>TYP</strong></td>
\t\t<td><strong>DATUM_OBJEDNANI<strong></td>
\t\t<td><strong>CENA</strong></td>
\t\t<td><strong>ZAKAZNIK<strong></td> 
\t\t<td><strong>AUDIO<strong></td>
\t\t<td><strong>JMENO OSOBY<strong></td>
\t\t
\t</tr>
\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllOrders"));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 93
            echo "\t\t";
            if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "audio") == "0")) {
                // line 94
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 96
                echo "\t\t\t<tr>
\t\t";
            }
            // line 98
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "typ"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "datum_objednani"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "cena"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "audio"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "jmeno_osoby"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t</table>
</div>
\t<h1>Zákazníci</h1>
\t<div class=\"overflow\">
\t<table class=\"table table-striped\" style=\"font-size: 10px\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>JMENO</strong></td>
\t\t<td><strong>PRIJMENI<strong></td>
\t\t<td><strong>EMAIL</strong></td>
\t\t<td><strong>MESTO<strong></td> 
\t\t<td><strong>ULICE<strong></td>
\t\t<td><strong>PSČ<strong></td>
\t\t
\t</tr>
\t";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllCustomers"));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 123
            echo "\t\t";
            if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "audio") == "0")) {
                // line 124
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 126
                echo "\t\t\t<tr>
\t\t";
            }
            // line 128
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "jmeno"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "prijmeni"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "email"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "mesto"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "ulice"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "psc"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t</table>
</div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 137,  291 => 134,  287 => 133,  283 => 132,  279 => 131,  275 => 130,  271 => 129,  266 => 128,  262 => 126,  258 => 124,  255 => 123,  251 => 122,  234 => 107,  225 => 104,  221 => 103,  217 => 102,  213 => 101,  209 => 100,  205 => 99,  200 => 98,  196 => 96,  192 => 94,  189 => 93,  185 => 92,  168 => 77,  159 => 74,  155 => 73,  151 => 72,  146 => 71,  142 => 69,  138 => 67,  135 => 66,  131 => 65,  117 => 53,  108 => 50,  104 => 49,  100 => 48,  96 => 47,  93 => 46,  89 => 45,  74 => 32,  65 => 29,  61 => 28,  56 => 27,  52 => 25,  48 => 23,  45 => 22,  41 => 21,  19 => 1,);
    }
}
