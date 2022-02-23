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

/* account.management.html.twig */
class __TwigTemplate_b59ebfdce0d49f3ffa447227bc59b5195a9d41721e5d9794bf89233ab7e06f70 extends \Twig\Template
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
        echo "<style type=\"text/css\">
\t#account-manage {
\t\twidth: 100%;
\t\tmargin: auto;
\t\tpadding: 10px;
\t}
\tdiv#one {
\t\twidth: 150px;
\t\tfloat: left;
\t}
\tdiv#two {
\t\tmargin-left: 150px;
\t\tpadding-left: 10px;
\t}

\t.vertical-menu a {
\t\tbackground-color: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo "; /* Grey background color */
\t\tcolor: black; /* Black text color */
\t\tdisplay: block; /* Make the links appear below each other */
\t\tpadding: 12px; /* Add some padding */
\t\ttext-decoration: none; /* Remove underline from links */
\t}

\t.vertical-menu a:hover {
\t\tbackground-color: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo "; /* Dark grey background on mouse-over */
\t}
</style>
";
        // line 28
        $context["menus"] = ["Create Character" => "account/character/create", "Delete Character" => "account/character/delete", "Change Info" => "account/info", "Change Password" => "account/password", "Change Email" => "account/email"];
        // line 32
        echo "<div id=\"account-manage\">
\t<div id=\"one\">
\t\t<div class=\"vertical-menu\">
\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/manage"]), "html", null, true);
        echo "\">My Account</a>
\t\t\t";
        // line 36
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 37
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/register"]), "html", null, true);
            echo "\">Register Account</a>
\t\t\t";
        }
        // line 39
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 40
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), [$context["link"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_name", [])) {
            // line 43
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/name"]), "html", null, true);
            echo "\">Change Name</a>
\t\t\t";
        }
        // line 45
        echo "\t\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_sex", [])) {
            // line 46
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/sex"]), "html", null, true);
            echo "\">Change Sex</a>
\t\t\t";
        }
        // line 48
        echo "\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/logout"]), "html", null, true);
        echo "\">Logout</a>
\t\t</div>
\t</div>
\t<div id=\"two\">
\t\t<h1>My account</h1>
\t\t<p>Welcome to your account page, ";
        // line 53
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "<br>
\t\t\t";
        // line 54
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "freePremium", [])) {
            // line 55
            echo "\t\t\tYou have unlimited Premium Account.
\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t";
            $context["premiumDays"] = $this->getAttribute(($context["account_logged"] ?? null), "getPremDays", [], "method");
            // line 58
            echo "\t\t\t\t";
            if ((($context["premiumDays"] ?? null) == 0)) {
                // line 59
                echo "\t\t\t\tYou don't have Premium Account
\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\tYou have ";
                echo twig_escape_filter($this->env, ($context["premiumDays"] ?? null), "html", null, true);
                echo " days remaining Premium Account.
\t\t\t\t";
            }
            // line 63
            echo "\t\t\t";
        }
        // line 64
        echo "\t\t</p>

\t\t";
        // line 67
        echo "\t\t";
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 68
            echo "\t\t<div style=\"text-align:center\">
\t\t\tYou can register your account for increased protection. Click on \"Register Account\" and get your free recovery key today!<br/>
\t\t\t<form action=\"";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/register"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t";
            // line 71
            $context["button_name"] = "Register Account";
            // line 72
            echo "\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 72)->display($context);
            // line 73
            echo "\t\t\t</form>
\t\t</div>
\t\t<br/>
\t\t";
        }
        // line 77
        echo "
\t\t";
        // line 78
        if (($context["email_request"] ?? null)) {
            // line 79
            echo "\t\t\t<div style=\"text-align:center\">
\t\t\t\tA request has been submitted to change the email address of this account to <b>";
            // line 80
            echo twig_escape_filter($this->env, ($context["email_new"] ?? null), "html", null, true);
            echo "</b>. After <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["email_new_time"] ?? null), "j F Y, G:i:s"), "html", null, true);
            echo "</b> you can accept the new email address and finish the process. Please cancel the request if you do not want your email address to be changed! Also cancel the request if you have no access to the new email address!

\t\t\t\t<form action=\"";
            // line 82
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/email"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t";
            // line 83
            $context["button_name"] = "Edit";
            // line 84
            echo "\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 84)->display($context);
            // line 85
            echo "\t\t\t\t</form>
\t\t\t</div>
\t\t<br/><br/>
\t\t";
        }
        // line 89
        echo "\t\t<a name=\"General+Information\"></a>
\t\t<h2>General Information</h2>
\t\t<table width=\"100%\">
\t\t\t<tr style=\"background-color: ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 90px;\">Account ";
        // line 93
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</td>
\t\t\t\t<td>";
        // line 94
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 90px;\">Email Address:</td>
\t\t\t\t<td>";
        // line 98
        echo twig_escape_filter($this->env, (($context["account_email"] ?? null) . ($context["email_change"] ?? null)), "html", null, true);
        echo "
\t\t\t\t\t<form action=\"";
        // line 99
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/email"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 100
        $context["button_name"] = "Change Email";
        // line 101
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 101)->display($context);
        // line 102
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t<td>Created:</td>
\t\t\t\t<td>";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["account_created"] ?? null), "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t<td>Last Login:</td>
\t\t\t\t<td>";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 114
        echo "\t\t\t<tr style=\"background-color: ";
        echo $this->getAttribute(($context["config"] ?? null), "lightborder", []);
        echo ";\" >
\t\t\t\t<td>Account Status:</td>
\t\t\t\t<td>";
        // line 116
        echo ($context["account_status"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 118
        echo $this->getAttribute(($context["config"] ?? null), "darkborder", []);
        echo ";\" >
\t\t\t\t<td>Registered:</td>
\t\t\t\t<td>";
        // line 120
        echo ($context["account_registered"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 123
        echo "\t\t</table>
\t\t<br/>
\t\t<a name=\"Public+Information\"></a>
\t\t<h2>Public Information</h2>
\t\t<table width=\"100%\">
\t\t\t<tr style=\"background-color: ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 80px;\">Real name:</td>
\t\t\t\t<td>";
        // line 130
        echo twig_escape_filter($this->env, ($context["account_rlname"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 80px;\">Location:</td>
\t\t\t\t<td >";
        // line 134
        echo twig_escape_filter($this->env, ($context["account_location"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t\t<form action=\"";
        // line 137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/info"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t";
        // line 138
        $context["button_name"] = "Change Info";
        // line 139
        echo "\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 139)->display($context);
        // line 140
        echo "\t\t</form>
\t\t<br/>
\t\t<a name=\"Account+Logs\" ></a>
\t\t<h2>Action Log</h2>
\t\t<table>
\t\t\t<tr bgcolor=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<th>Action</th><th>Date</th><th>IP</th>
\t\t\t</tr>
\t\t\t";
        // line 149
        echo "\t\t\t\t";
        $context["i"] = 0;
        // line 150
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 151
            echo "\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 152
            echo "\t\t\t\t\t<tr style=\"background-color: ";
            echo call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]);
            echo "\">
\t\t\t\t\t\t<td>";
            // line 153
            echo $this->getAttribute($context["action"], "action", []);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 154
            echo twig_date_format_filter($this->env, $this->getAttribute($context["action"], "date", []), "jS F Y H:i:s");
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 155
            echo $this->getAttribute($context["action"], "ip", []);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t";
        // line 159
        echo "\t\t</table>
\t\t<br/>
\t\t<a name=\"Characters\" ></a>
\t\t<h2>Character list: ";
        // line 162
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["players"] ?? null)), "html", null, true);
        echo " characters.</h2>
\t\t<table>
\t\t\t<tr bgcolor=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<th>Name</th><th>Level</th><th>Vocation</th><th>Town</th><th>Last login</th><th>Status</th><th>Hide</th><th>Edit</th>
\t\t\t</tr>
\t\t\t";
        // line 167
        $context["i"] = 0;
        // line 168
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 169
            echo "\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 170
            echo "\t\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t\t<td><a href=\"";
            // line 171
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), [("characters/" . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), [$this->getAttribute($context["player"], "getName", [], "method")]))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", [], "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getVocationName", [], "method"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "towns", []), $this->getAttribute($context["player"], "getTownId", [], "method"), [], "array"), "html", null, true);
            echo "</td><td>";
            if (($this->getAttribute($context["player"], "getLastLogin", [], "method") > 0)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["player"], "getLastLogin", []), "d F Y (H:i)"), "html", null, true);
            } else {
                echo "Never.";
            }
            echo "</td><td>";
            if ($this->getAttribute($context["player"], "isOnline", [], "method")) {
                echo "<span style=\"color: green\">ONLINE</span>";
            } else {
                echo "<span style=\"color: red\">Offline</span>";
            }
            echo "</td><td>";
            if ($this->getAttribute($context["player"], "isHidden", [], "method")) {
                echo "Hidden";
            } else {
                echo "Visible";
            }
            echo "</td><td>[<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), [("account/character/comment/" . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), [$this->getAttribute($context["player"], "getName", [])]))]), "html", null, true);
            echo "\" >Edit</a>]</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t</table>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
        // line 179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/create"]), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t";
        // line 180
        $context["button_name"] = "Create Character";
        // line 181
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 181)->display($context);
        // line 182
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        // line 184
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_name", [])) {
            // line 185
            echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
            // line 186
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/name"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t";
            // line 187
            $context["button_name"] = "Change Name";
            // line 188
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 188)->display($context);
            // line 189
            echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_sex", [])) {
            // line 193
            echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
            // line 194
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/sex"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t";
            // line 195
            $context["button_name"] = "Change Sex";
            // line 196
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 196)->display($context);
            // line 197
            echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        }
        // line 200
        echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
        // line 201
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/delete"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 202
        $context["button_name"] = "Delete Character";
        // line 203
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 203)->display($context);
        // line 204
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "account.management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 204,  519 => 203,  517 => 202,  513 => 201,  510 => 200,  505 => 197,  502 => 196,  500 => 195,  496 => 194,  493 => 193,  490 => 192,  485 => 189,  482 => 188,  480 => 187,  476 => 186,  473 => 185,  471 => 184,  467 => 182,  464 => 181,  462 => 180,  458 => 179,  451 => 174,  414 => 171,  409 => 170,  406 => 169,  401 => 168,  399 => 167,  393 => 164,  388 => 162,  383 => 159,  381 => 158,  372 => 155,  368 => 154,  364 => 153,  359 => 152,  356 => 151,  351 => 150,  348 => 149,  342 => 145,  335 => 140,  332 => 139,  330 => 138,  326 => 137,  320 => 134,  315 => 132,  310 => 130,  305 => 128,  298 => 123,  293 => 120,  288 => 118,  283 => 116,  277 => 114,  272 => 111,  267 => 109,  262 => 107,  257 => 105,  252 => 102,  249 => 101,  247 => 100,  243 => 99,  239 => 98,  234 => 96,  229 => 94,  221 => 93,  217 => 92,  212 => 89,  206 => 85,  203 => 84,  201 => 83,  197 => 82,  190 => 80,  187 => 79,  185 => 78,  182 => 77,  176 => 73,  173 => 72,  171 => 71,  167 => 70,  163 => 68,  160 => 67,  156 => 64,  153 => 63,  147 => 61,  143 => 59,  140 => 58,  137 => 57,  133 => 55,  131 => 54,  127 => 53,  118 => 48,  112 => 46,  109 => 45,  103 => 43,  100 => 42,  89 => 40,  84 => 39,  78 => 37,  76 => 36,  72 => 35,  67 => 32,  65 => 28,  59 => 25,  48 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "account.management.html.twig", "/var/www/html/system/templates/account.management.html.twig");
    }
}
