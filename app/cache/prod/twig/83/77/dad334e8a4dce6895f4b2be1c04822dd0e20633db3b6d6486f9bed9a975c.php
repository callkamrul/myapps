<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_8377dad334e8a4dce6895f4b2be1c04822dd0e20633db3b6d6486f9bed9a975c extends Twig_Template
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
        // line 2
        echo "A contact enquiry was made by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "name"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ".

Reply-To: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "email"), "html", null, true);
        echo "
Subject: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "subject"), "html", null, true);
        echo "
Body:
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "body"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  37 => 6,  70 => 21,  53 => 12,  172 => 48,  127 => 25,  120 => 22,  114 => 13,  110 => 11,  96 => 54,  76 => 21,  74 => 40,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 53,  169 => 47,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 10,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 40,  143 => 34,  135 => 27,  131 => 26,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  47 => 10,  38 => 7,  94 => 53,  89 => 25,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 14,  50 => 11,  29 => 4,  87 => 47,  72 => 20,  55 => 22,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 4,  44 => 11,  35 => 6,  31 => 5,  43 => 7,  41 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 35,  142 => 59,  138 => 54,  136 => 56,  123 => 23,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 6,  91 => 27,  69 => 25,  66 => 35,  62 => 34,  49 => 19,  24 => 4,  32 => 5,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 43,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 44,  80 => 22,  73 => 11,  64 => 17,  60 => 14,  57 => 8,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 9,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
