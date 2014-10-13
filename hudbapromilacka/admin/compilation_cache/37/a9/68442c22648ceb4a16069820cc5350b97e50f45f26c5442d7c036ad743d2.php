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
<script src=\"http://localhost/hudbapromilacka/hudbapromilacka/js/bootstrap.min.js\"></script>

</head>
<body>

\t<h1>Logy</h1>
\t<div class=\"overflow\">
\t<table class=\"table table-striped overflow\" style=\"font-size: 10px;\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>DATUM</strong></td>
\t\t<td><strong>MSG<strong></td> 
\t</tr>
\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllLogs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 21
            echo "\t\t";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "type") == "1")) {
                // line 22
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 24
                echo "\t\t\t<tr class=\"success\">
\t\t";
            }
            // line 26
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "datum"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "msg"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t</table>
</div>

\t<h1>Errory</h1>
\t<div class=\"overflow\">
\t<table class=\"table table-striped\" style=\"font-size: 10px;\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>DATUM</strong></td>
\t\t<td><strong>MSG<strong></td> 
\t</tr>
\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllErrors"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 43
            echo "\t\t";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "type") == "1")) {
                // line 44
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 46
                echo "\t\t\t<tr class=\"success\">
\t\t";
            }
            // line 48
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "datum"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "msg"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</table>
</div>
\t<h1>Skladby</h1>
\t<div class=\"overflow\">
\t<table class=\"table table-striped\" style=\"font-size: 10px\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>NÁZEV</strong></td>
\t\t<td><strong>CESTA<strong></td>
\t\t<td><strong>KOUPENO<strong></td> 
\t</tr>
\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllAudio"));
        foreach ($context['_seq'] as $context["_key"] => $context["audio"]) {
            // line 65
            echo "\t\t";
            if (($this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "koupeno") == "1")) {
                // line 66
                echo "\t\t\t<tr class=\"success\">
\t\t";
            } else {
                // line 68
                echo "\t\t\t<tr>
\t\t";
            }
            // line 70
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "nazev"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "cesta"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "koupeno"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
\t\t
\t</tr>
\t";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllOrders"));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 92
            echo "\t\t";
            if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "audio") == "0")) {
                // line 93
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 95
                echo "\t\t\t<tr>
\t\t";
            }
            // line 97
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "typ"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "datum_objednani"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "cena"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "audio"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllCustomers"));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 121
            echo "\t\t";
            if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "audio") == "0")) {
                // line 122
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 124
                echo "\t\t\t<tr>
\t\t";
            }
            // line 126
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "jmeno"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "prijmeni"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "email"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "mesto"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "ulice"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "psc"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
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
        return array (  297 => 135,  288 => 132,  284 => 131,  280 => 130,  276 => 129,  272 => 128,  268 => 127,  263 => 126,  259 => 124,  255 => 122,  252 => 121,  248 => 120,  231 => 105,  222 => 102,  218 => 101,  214 => 100,  210 => 99,  206 => 98,  201 => 97,  197 => 95,  193 => 93,  190 => 92,  186 => 91,  169 => 76,  160 => 73,  156 => 72,  152 => 71,  147 => 70,  143 => 68,  139 => 66,  136 => 65,  132 => 64,  119 => 53,  110 => 50,  106 => 49,  101 => 48,  97 => 46,  93 => 44,  90 => 43,  86 => 42,  73 => 31,  64 => 28,  60 => 27,  55 => 26,  51 => 24,  47 => 22,  44 => 21,  40 => 20,  19 => 1,);
    }
}
