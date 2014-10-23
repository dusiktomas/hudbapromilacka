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
<link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
<link rel=\"stylesheet\" href=\"templates/css/styles.css\">
<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<script src=\"http://localhost/hudbapromilacka/hudbapromilacka/js/bootstrap.min.js\"></script>

</head>
<body>


\t<table class=\"table table-striped\" style=\"width: 250px\">
\t\t<td>Objednávky dnes</td> 
\t\t<td><b>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["orderCount"]) ? $context["orderCount"] : null), "html", null, true);
        echo "</b></td>
\t</table>
\t<h1>Logy</h1>
\t<div class=\"overflow logs\">
\t<table class=\"table table-striped overflow\" style=\"font-size: 10px;\">
\t<tr>
\t\t<td><strong>ID</strong></td>
\t\t<td><strong>DATUM</strong></td>
\t\t<td><strong>MSG<strong></td> 
\t</tr>
\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllLogs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 27
            echo "\t\t";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "type") == "1")) {
                // line 28
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 30
                echo "\t\t\t<tr class=\"success\">
\t\t";
            }
            // line 32
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "datum"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "msg"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllErrors"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 51
            echo "\t\t\t<tr class=\"danger\">
\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"?log_id=";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "\">Vyřešeno</a></td>
\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "datum"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "msg"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllAudio"));
        foreach ($context['_seq'] as $context["_key"] => $context["audio"]) {
            // line 71
            echo "\t\t";
            if (($this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "koupeno") == "1")) {
                // line 72
                echo "\t\t\t<tr class=\"success\">
\t\t";
            } else {
                // line 74
                echo "\t\t\t<tr>
\t\t";
            }
            // line 76
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "nazev"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "cesta"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["audio"]) ? $context["audio"] : null), "koupeno"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
\t\t<td><strong>POZNÁMKA<strong></td>
\t\t
\t</tr>
\t";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllOrders"));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 99
            echo "\t\t";
            if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "audio") == "0")) {
                // line 100
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 102
                echo "\t\t\t<tr>
\t\t";
            }
            // line 104
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "typ"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "datum_objednani"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "cena"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "customer"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "audio"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "jmeno_osoby"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "poznamka"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
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
\t\t<td><strong>DORUČ_JMÉNO<strong></td> 
\t\t<td><strong>DORUČ_PŘIJMENÍ<strong></td>
\t\t<td><strong>DORUČ_MESTO<strong></td> 
\t\t<td><strong>DORUČ_ULICE<strong></td>
\t\t<td><strong>DORUČ_PSČ<strong></td>
\t\t
\t</tr>
\t";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["adminer"]) ? $context["adminer"] : null), "getAllCustomers"));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 135
            echo "\t\t";
            if (($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "audio") == "0")) {
                // line 136
                echo "\t\t\t<tr class=\"danger\">
\t\t";
            } else {
                // line 138
                echo "\t\t\t<tr>
\t\t";
            }
            // line 140
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "jmeno"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "prijmeni"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "email"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "mesto"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "ulice"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "psc"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "dorucovaci_jmeno"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "dorucovaci_prijmeni"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "dorucovaci_mesto"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "dorucovaci_ulice"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "dorucovaci_psc"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
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
        return array (  338 => 154,  329 => 151,  325 => 150,  321 => 149,  317 => 148,  313 => 147,  309 => 146,  305 => 145,  301 => 144,  297 => 143,  293 => 142,  289 => 141,  284 => 140,  280 => 138,  276 => 136,  273 => 135,  269 => 134,  247 => 114,  238 => 111,  234 => 110,  230 => 109,  226 => 108,  222 => 107,  218 => 106,  214 => 105,  209 => 104,  205 => 102,  201 => 100,  198 => 99,  194 => 98,  176 => 82,  167 => 79,  163 => 78,  159 => 77,  154 => 76,  150 => 74,  146 => 72,  143 => 71,  139 => 70,  125 => 58,  116 => 55,  112 => 54,  108 => 53,  104 => 52,  101 => 51,  97 => 50,  82 => 37,  73 => 34,  69 => 33,  64 => 32,  60 => 30,  56 => 28,  53 => 27,  49 => 26,  36 => 16,  19 => 1,);
    }
}
