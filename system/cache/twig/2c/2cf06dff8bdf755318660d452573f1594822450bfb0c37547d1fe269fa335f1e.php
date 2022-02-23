<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* serverinfo.html.twig */
class __TwigTemplate_8d3b1acfb788680b5be087cd01f2404fbb971931630d7d4b1d3088bc83a03b91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div style=\"text-align:center\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "</h1>
    <h3>
        ";
        // line 4
        if (($context["experienceStages"] ?? null)) {
            // line 5
            echo "        Experience stages: ";
            echo twig_escape_filter($this->env, ($context["experienceStages"] ?? null), "html", null, true);
            echo "<br>
        ";
        }
        // line 7
        echo "        Commands: <a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["commands"]), "html", null, true);
        echo "\">Look here</a><br>
        Team: <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["team"]), "html", null, true);
        echo "\">Look here</a><br>
    </h3>
</div>

<ul>
    <h2>Server Info:</h2>
    <li>IP: <b>";
        // line 14
        echo twig_escape_filter($this->env, ($context["serverIp"] ?? null), "html", null, true);
        echo "</b> (Port: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "loginPort", []), "html", null, true);
        echo "</b>)</li>
    ";
        // line 15
        if (($context["clientVersion"] ?? null)) {
            // line 16
            echo "    <li>Client: <b>";
            echo twig_escape_filter($this->env, ($context["clientVersion"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 18
        echo "    <li>Online: <b>24/7</b></li>
    ";
        // line 19
        if (($context["globalSaveHour"] ?? null)) {
            // line 20
            echo "    <li>Global save: <b>";
            echo twig_escape_filter($this->env, ($context["globalSaveHour"] ?? null), "html", null, true);
            echo ":00</b></li>
    ";
        }
        // line 22
        echo "    <li>World type: <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "worldType", [])), "html", null, true);
        echo " <i>(Protection level: ";
        echo twig_escape_filter($this->env, ($context["protectionLevel"] ?? null), "html", null, true);
        echo ")</i></b></li>
    <li>House rent: ";
        // line 23
        echo twig_escape_filter($this->env, ($context["houseRent"] ?? null), "html", null, true);
        echo ".</li><br>
    ";
        // line 24
        if (($context["houseOld"] ?? null)) {
            // line 25
            echo "    <li>Houses with inactive owners are cleaned after 30 days.</li>
    ";
        }
        // line 27
        echo "
    <h2>Rates</h2>
    ";
        // line 29
        if ((isset($context["rateExp"]) || array_key_exists("rateExp", $context))) {
            // line 30
            echo "    <li>Exp Rate: <b>x";
            echo twig_escape_filter($this->env, ($context["rateExp"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 32
        echo "    ";
        if (($context["rateExpFromPlayers"] ?? null)) {
            // line 33
            echo "        <li>Exp Rate from Players: <b>x";
            echo twig_escape_filter($this->env, ($context["rateExpFromPlayers"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 35
        echo "    ";
        if ((isset($context["rateMagic"]) || array_key_exists("rateMagic", $context))) {
            // line 36
            echo "    <li>Magic Level: <b>x";
            echo twig_escape_filter($this->env, ($context["rateMagic"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 38
        echo "    ";
        if ((isset($context["rateSkill"]) || array_key_exists("rateSkill", $context))) {
            // line 39
            echo "    <li>Skills: <b>x";
            echo twig_escape_filter($this->env, ($context["rateSkill"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 41
        echo "    ";
        if ((isset($context["rateLoot"]) || array_key_exists("rateLoot", $context))) {
            // line 42
            echo "    <li>Loot: <b>x";
            echo twig_escape_filter($this->env, ($context["rateLoot"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 44
        echo "    ";
        if ((isset($context["rateSpawn"]) || array_key_exists("rateSpawn", $context))) {
            // line 45
            echo "    <li>Spawn: <b>x";
            echo twig_escape_filter($this->env, ($context["rateSpawn"] ?? null), "html", null, true);
            echo "</b></li>
    ";
        }
        // line 47
        echo "    ";
        if (($context["houseLevel"] ?? null)) {
            // line 48
            echo "    <li>Houses: <b>";
            echo twig_escape_filter($this->env, ($context["houseLevel"] ?? null), "html", null, true);
            echo " level</b></li>
    ";
        }
        // line 50
        echo "    <li>Guilds: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "guild_need_level", []), "html", null, true);
        echo " level</b> (Create via website)</li>
    <br>

    <h2>Frags & Skull system</h2>
    <li>PZ Lock: <b>";
        // line 54
        echo twig_escape_filter($this->env, (($context["pzLocked"] ?? null) / (60 * 1000)), "html", null, true);
        echo " min</b></li>
    ";
        // line 55
        if (($context["whiteSkullTime"] ?? null)) {
            // line 56
            echo "    <li>White Skull Time: <b>";
            echo twig_escape_filter($this->env, ($context["whiteSkullTime"] ?? null), "html", null, true);
            echo " min</b></li>
    ";
        }
        // line 58
        echo "    <li>Red skull length: <b>";
        echo twig_escape_filter($this->env, (($context["redSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
        echo " days</b></li>
    ";
        // line 59
        if (($context["blackSkull"] ?? null)) {
            // line 60
            echo "    <li>Black skull length: <b>";
            echo twig_escape_filter($this->env, (($context["blackSkullLength"] ?? null) / ((24 * 60) * 60)), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 62
        echo "\t";
        if ((isset($context["killsToRedSkull"]) || array_key_exists("killsToRedSkull", $context))) {
            // line 63
            echo "    <li>Kills to red skull: <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "killsToRedSkull", []), "html", null, true);
            echo "</b></li>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 64
($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToRedSkull", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "kills_per_day_red_skull", [], "any", true, true))) {
            // line 65
            echo "    <li>
        <h3>Red skull</h3>
        <ul>
            <li>";
            // line 68
            echo twig_escape_filter($this->env, ($context["dailyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags daily</li>
            <li>";
            // line 69
            echo twig_escape_filter($this->env, ($context["weeklyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags weekly</li>
            <li>";
            // line 70
            echo twig_escape_filter($this->env, ($context["monthlyFragsToRedSkull"] ?? null), "html", null, true);
            echo " frags monthly</li>
        </ul>
        ";
            // line 72
            if (((($context["blackSkull"] ?? null) && $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToBlackSkull", [], "any", true, true)) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "any", false, true), "kills_per_day_black_skull", [], "any", true, true))) {
                // line 73
                echo "        <h3>Black skull</h3>
        <ul>
            <li>";
                // line 75
                echo twig_escape_filter($this->env, ($context["dailyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags daily</li>
            <li>";
                // line 76
                echo twig_escape_filter($this->env, ($context["weeklyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags weekly</li>
            <li>";
                // line 77
                echo twig_escape_filter($this->env, ($context["monthlyFragsToBlackSkull"] ?? null), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 79
($context["config"] ?? null), "lua", [], "any", false, true), "dailyFragsToBanishment", [], "any", true, true)) {
                // line 80
                echo "        <h3>Banishment</h3>
        <ul>
            <li>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "dailyFragsToBanishment", []), "html", null, true);
                echo " frags daily</li>
            <li>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "weeklyFragsToBanishment", []), "html", null, true);
                echo " frags weekly</li>
            <li>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "monthlyFragsToBanishment", []), "html", null, true);
                echo " frags monthly</li>
        </ul>
        ";
            }
            // line 87
            echo "    </li>
    ";
        }
        // line 89
        echo "    ";
        if (($context["banishmentLength"] ?? null)) {
            // line 90
            echo "    <li>Banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["banishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 92
        echo "\t";
        if (($context["finalBanishmentLength"] ?? null)) {
            // line 93
            echo "    <li>Final banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["finalBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 95
        echo "\t";
        if (($context["ipBanishmentLength"] ?? null)) {
            // line 96
            echo "    <li>IP banishment length: <b>";
            echo twig_escape_filter($this->env, ($context["ipBanishmentLength"] ?? null), "html", null, true);
            echo " days</b></li>
    ";
        }
        // line 98
        echo "    <br>
    <h2>Other</h2>
    <li>Respect our <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["rules"]), "html", null, true);
        echo "\">rules</a>.</li>
    <li>Please report rule violations (Botters, players breaking rules etc) with <b>CTRL + R</b>.</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "serverinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 100,  299 => 98,  293 => 96,  290 => 95,  284 => 93,  281 => 92,  275 => 90,  272 => 89,  268 => 87,  262 => 84,  258 => 83,  254 => 82,  250 => 80,  248 => 79,  243 => 77,  239 => 76,  235 => 75,  231 => 73,  229 => 72,  224 => 70,  220 => 69,  216 => 68,  211 => 65,  209 => 64,  204 => 63,  201 => 62,  195 => 60,  193 => 59,  188 => 58,  182 => 56,  180 => 55,  176 => 54,  168 => 50,  162 => 48,  159 => 47,  153 => 45,  150 => 44,  144 => 42,  141 => 41,  135 => 39,  132 => 38,  126 => 36,  123 => 35,  117 => 33,  114 => 32,  108 => 30,  106 => 29,  102 => 27,  98 => 25,  96 => 24,  92 => 23,  85 => 22,  79 => 20,  77 => 19,  74 => 18,  68 => 16,  66 => 15,  60 => 14,  51 => 8,  46 => 7,  40 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "serverinfo.html.twig", "/var/www/html/system/templates/serverinfo.html.twig");
    }
}
