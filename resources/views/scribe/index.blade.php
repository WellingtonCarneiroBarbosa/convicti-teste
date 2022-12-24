<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Convict Test App Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/api-docs/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/api-docs/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .laravel-9x-example code { display: none; }
                    body .content .php-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .python-example code { display: none; }
                    body .content .ruby-example code { display: none; }
                    body .content .bash-example code { display: none; }
            </style>


    <script src="{{ asset("/vendor/api-docs/js/theme-default-4.10.1.js") }}"></script>

</head>

<body data-languages="[&quot;laravel-9x&quot;,&quot;php&quot;,&quot;javascript&quot;,&quot;python&quot;,&quot;ruby&quot;,&quot;bash&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/api-docs/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="laravel-9x">laravel-9x</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="python">python</button>
                                            <button type="button" class="lang-button" data-language-name="ruby">ruby</button>
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-auth" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth">
                    <a href="#auth">Auth</a>
                </li>
                                    <ul id="tocify-subheader-auth" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-token">
                                <a href="#auth-POSTapi-v1-token">Issuing user tokens.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-token">
                                <a href="#auth-POSTapi-v1-token">Refreshing the user token.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-token">
                                <a href="#endpoints-POSTapi-v1-token">Authorize a client to access the user's account.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authorize">
                                <a href="#endpoints-GETapi-v1-authorize">Authorize a client to access the user's account.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-token-refresh">
                                <a href="#endpoints-POSTapi-v1-token-refresh">Get a fresh transient token cookie for the authenticated user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-authorize">
                                <a href="#endpoints-POSTapi-v1-authorize">Approve the authorization request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-authorize">
                                <a href="#endpoints-DELETEapi-v1-authorize">Deny the authorization request.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-personal-access-tokens">
                                <a href="#endpoints-POSTapi-v1-personal-access-tokens">Create a new personal access token for the user.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 24, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://laravel.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {USER_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>See Auth &gt; Issuing User Tokens.</p>

        <h1 id="auth">Auth</h1>

    

                                <h2 id="auth-POSTapi-v1-token">Issuing user tokens.</h2>

<p>
</p>

<p>This endpoint allows you to issue a new bearer user token.
It will return a valid bearer token if the user credentials are correct.</p>

<span id="example-requests-POSTapi-v1-token">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$body = [
    "client_id" =&gt; "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret" =&gt; "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "username" =&gt; "johnjoe@example.com",
    "password" =&gt; "xnasj#2s2wÇDSAKms",
    "grant_type" =&gt; "password",
    "scope" =&gt; "*"
];

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;post(
'http://laravel.test/api/v1/token', $body
);

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel.test/api/v1/token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'client_id' =&gt; '96fc84ac-95ba-4f91-8cb4-9e228a7e849d',
            'client_secret' =&gt; 'SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm',
            'username' =&gt; 'johnjoe@example.com',
            'password' =&gt; 'xnasj#2s2wÇDSAKms',
            'grant_type' =&gt; 'password',
            'scope' =&gt; '*',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "client_id": "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret": "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "username": "johnjoe@example.com",
    "password": "xnasj#2s2wÇDSAKms",
    "grant_type": "password",
    "scope": "*"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/token'
payload = {
    "client_id": "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret": "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "username": "johnjoe@example.com",
    "password": "xnasj#2s2wÇDSAKms",
    "grant_type": "password",
    "scope": "*"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    body = {
    "client_id": "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret": "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "username": "johnjoe@example.com",
    "password": "xnasj#2s2wÇDSAKms",
    "grant_type": "password",
    "scope": "*"
}
    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.post(
'http://laravel.test/api/v1/token'    ,
    body
    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel.test/api/v1/token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"client_id\": \"96fc84ac-95ba-4f91-8cb4-9e228a7e849d\",
    \"client_secret\": \"SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm\",
    \"username\": \"johnjoe@example.com\",
    \"password\": \"xnasj#2s2wÇDSAKms\",
    \"grant_type\": \"password\",
    \"scope\": \"*\"
}"
</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-token">
            <blockquote>
            <p>Example response (200, 200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token_type&quot;: &quot;Bearer&quot;,
    &quot;expires_in&quot;: 1296000,
    &quot;access_token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5NmZjODRhYy05NWJhLTRmOTEtOGNiNC05ZTIyOGE3ZTg0OWQiLCJqdGkiOiI4M2YwMWY0Mzc5ZDkzY2NhYWUzZDM5ZTAzNjJiOTgwODgwYzgxYzAzNWNiMGZiZjI0ZmQwYmZiZDE0MmU1MWZiNTA1ODdhOWExY2E3NWE1ZSIsImlhdCI6MTY2MDExNjg0Mi42MTkwNzYsIm5iZiI6MTY2MDExNjg0Mi42MTkwNzgsImV4cCI6MTY2MTQxMjg0Mi42MDg4LCJzdWIiOiIzIiwic2NvcGVzIjpbIioiXX0.pCyXGtzz7ZoOM45ukE70fUtog9fyIJrDP-7Ulo81LU0Cnxhtq7hkKNLDcES9-jcwShjQMFBlRCEFBacU7ZtqoLEQw6JgGcGqPhfQVPa20PaTdmmMmvBtrYg46QFpr2tvVzEOGxy8FerxBFeG20dp7d3KkLZeVxzwRdt271TBoQ4yV4egxKDvyPX7sZ78dlKWtyxluYTkBgkKVvUJo_Vbq7fCpbSzDmqNzCGRbXDciqUafYYBcApfUPem_zRGOuwIRf4e9iOYoDfXOHcBWiZObPnBWLqDBViTvBJ8GSvTzplYB3LwKIPjkRTZDi4SeTRRbgdPBt3lOEGrQjR__yugJ-0MqKGMTZywV3y12esqXQv3Sw2SOfQRWLpbhYHak3KJMXSrPDZ5itBmZYLMpwsvaAge9RdSce7si8L7P0cbnMtbR8xdZAJiwn544MoQgtIaS2jkLT-Kirb85NRnZw0Dr14pwvDbODU67OWF9I8ozsipa0FU1oux95BpjZqUecj0Ze4X-zvRc8cXnfJRAUo12T8wkuroa6dmTd3BHQ_8kt4ZVVFXFk3Lk9g92HL_oGUkpyaJ91zea5iu_0jOvZDvJSDXU0j6cH-9gscW_Lz22F-5qjpJdiWXd8l9meeRni-GRbTMTYCtXkKGvHZyEAqqKN12RlcxkRJYm2DnXJ_AIE8&quot;,
    &quot;refresh_token&quot;: &quot;def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, 400: Invalid username or password provided):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;invalid_grant&quot;,
    &quot;error_description&quot;: &quot;The user credentials were incorrect.&quot;,
    &quot;message&quot;: &quot;The user credentials were incorrect.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, 401: Invalid client id or client secret provided):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;invalid_client&quot;,
    &quot;error_description&quot;: &quot;Client authentication failed&quot;,
    &quot;message&quot;: &quot;Client authentication failed&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-token" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-token"></code></pre>
</span>
<form id="form-POSTapi-v1-token" data-method="POST"
      data-path="api/v1/token"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/token</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="client_id"                data-endpoint="POSTapi-v1-token"
               value="96fc84ac-95ba-4f91-8cb4-9e228a7e849d"
               data-component="body">
    <br>
<p>Your app client id. Example: <code>96fc84ac-95ba-4f91-8cb4-9e228a7e849d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_secret</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="client_secret"                data-endpoint="POSTapi-v1-token"
               value="SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm"
               data-component="body">
    <br>
<p>Your app client secret. Example: <code>SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="username"                data-endpoint="POSTapi-v1-token"
               value="johnjoe@example.com"
               data-component="body">
    <br>
<p>The user's email. Example: <code>johnjoe@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-v1-token"
               value="xnasj#2s2wÇDSAKms"
               data-component="body">
    <br>
<p>The user's password. Example: <code>xnasj#2s2wÇDSAKms</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>grant_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="grant_type"                data-endpoint="POSTapi-v1-token"
               value="password"
               data-component="body">
    <br>
<p>The grant type. Example: <code>password</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>scope</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="scope"                data-endpoint="POSTapi-v1-token"
               value="*"
               data-component="body">
    <br>
<p>The scope. Example: <code>*</code></p>
        </div>
        </form>

                    <h2 id="auth-POSTapi-v1-token">Refreshing the user token.</h2>

<p>
</p>

<p>If the user's token is expired, you don't need to login the user again. Just use
this endpoint to refresh the user token throught the user refresh_token.</p>

<span id="example-requests-POSTapi-v1-token">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$body = [
    "client_id" =&gt; "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret" =&gt; "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "grant_type" =&gt; "refresh_token",
    "scope" =&gt; "*",
    "refresh_token" =&gt; "def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1"
];

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;post(
'http://laravel.test/api/v1/token', $body
);

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel.test/api/v1/token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'client_id' =&gt; '96fc84ac-95ba-4f91-8cb4-9e228a7e849d',
            'client_secret' =&gt; 'SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm',
            'grant_type' =&gt; 'refresh_token',
            'scope' =&gt; '*',
            'refresh_token' =&gt; 'def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "client_id": "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret": "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "grant_type": "refresh_token",
    "scope": "*",
    "refresh_token": "def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/token'
payload = {
    "client_id": "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret": "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "grant_type": "refresh_token",
    "scope": "*",
    "refresh_token": "def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    body = {
    "client_id": "96fc84ac-95ba-4f91-8cb4-9e228a7e849d",
    "client_secret": "SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm",
    "grant_type": "refresh_token",
    "scope": "*",
    "refresh_token": "def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1"
}
    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.post(
'http://laravel.test/api/v1/token'    ,
    body
    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel.test/api/v1/token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"client_id\": \"96fc84ac-95ba-4f91-8cb4-9e228a7e849d\",
    \"client_secret\": \"SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm\",
    \"grant_type\": \"refresh_token\",
    \"scope\": \"*\",
    \"refresh_token\": \"def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1\"
}"
</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-token">
            <blockquote>
            <p>Example response (200, 200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token_type&quot;: &quot;Bearer&quot;,
    &quot;expires_in&quot;: 1296000,
    &quot;access_token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5NmZjODRhYy05NWJhLTRmOTEtOGNiNC05ZTIyOGE3ZTg0OWQiLCJqdGkiOiI5YTM4NDg4NmJmZGNmODRlNGUxN2UxNjY4NTNlZjVmNmEzNzcwYzdiZjI0NmY0MjFkMmQwNjk4NzFiYjE2OTQ5NzE4ZWQ5ZTdlYmM0NWFkMCIsImlhdCI6MTY2MDExOTM3OS41MTI3MDgsIm5iZiI6MTY2MDExOTM3OS41MTI3MTEsImV4cCI6MTY2MTQxNTM3OS41MDQ0ODgsInN1YiI6IjMiLCJzY29wZXMiOlsiKiJdfQ.qnhAQO7eQ0ayu6RIHG2xLIwBaq8cCfLIY1jyCO3Jkex_EefCe_8S7AVRBDTUsmyhi6tVDG_k42CUgX0vpqWdS9xo3P6v50paAr6h58_s-0Mw-Q8_ZP2Alxoo9W6gikTGgWFBaKW4xSFt1zcfiegYlCjpxMcKL2DalsFohDGnppL8UzPBg-uve3tBUBlIN-d8fnpuBwLZHT7W2uVsUHAdHPdMPScXh8ymeLw4jbtXkJz9uNY_Pvyigz17g9M6kwh7UVpdpyZ8Hv0jFpR6muQ9MMpicNbsBON3nJDrQJAJxLrVjjrMLWNzGqIbW0J50t6xkzDV3Zt6OCY2CZIzjnkoqedz6JtuzjawR5l6prG0S0_LTOzu3c21mTuFIU43gXAyJnITxXEyu4_Cb6YqzNBfyzuLIzlUlZWTnTQHorME8brfCu0uemYxj6SdxIyM7hOQFIg9uBSHf39_xhcfZLcOuRz3BkEqD2RMC1qVbpTjmUAbtMEsWczTFsyVSBbqbblsXsL7EZqPNG1a-xMtcZmwMPci3j_0-qav2vV4IKzIqMBKFm7x_3QXls55N4KSS7ENr51HyskFQsaZ7gjJZh4VYTwdMJmB6CHdWQtlEZOf3o1lDJITTZ4_OnzKrUdCcsUo96V6ptp8A2uG1j-c-z1lXfxwK19YZ2VExx6q6HRn5OQ&quot;,
    &quot;refresh_token&quot;: &quot;def50200ad002c0a47f7a437acd41868dd520b76d5cc6a19c3c980bbecc20ce59bf2a88abda09f25ded15fa38e0a4fcec537f552dd2757e0461aa106d66ee8150e82ee06e39bebe1f2fb442fbc17940fc89bb9705ac083b9d50687e7b28dd95dde1fa5ec049ee12e73812a0f8cdd55017dd4309a9959668503d791e60c2565d95944ffc3b8dc6c758e73b0c5e64a3f363e21ae2cbebf79d2f429110d09a82e1e3b201b018f3623c9864807f7d6d465e9799da6fa2281d7cb2af25e2b0024bdfa0b6fe9205043045ebeff39afe2f9f8c3378506bd8d4ceb263918f8cccd78855b684a864a831291028934c15f43509ab1d12c13eb8219517762b7f257b7fedce90c37fef0b18f18206ad1c5fa11e9443b9622b378cdc410e4f9730ccfafe63747e57614faf7c3cb6e66c0c2cfd00ab6e2490141ea356def8e94d6e44bd73368edea323fe61740765cfe892f50aa18e307f2843f43a9340a3d4440049e83bff4ded499b7cc9d626aacbbf51b011b066c9bf18369d661e68de71dd2144e789c2e397895491339693b&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, 401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;invalid_request&quot;,
    &quot;error_description&quot;: &quot;The refresh token is invalid.&quot;,
    &quot;hint&quot;: &quot;Token has been revoked&quot;,
    &quot;message&quot;: &quot;The refresh token is invalid.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, 401: Invalid client id or client secret provided):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;invalid_client&quot;,
    &quot;error_description&quot;: &quot;Client authentication failed&quot;,
    &quot;message&quot;: &quot;Client authentication failed&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-token" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-token"></code></pre>
</span>
<form id="form-POSTapi-v1-token" data-method="POST"
      data-path="api/v1/token"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/token</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="client_id"                data-endpoint="POSTapi-v1-token"
               value="96fc84ac-95ba-4f91-8cb4-9e228a7e849d"
               data-component="body">
    <br>
<p>Your app client id. Example: <code>96fc84ac-95ba-4f91-8cb4-9e228a7e849d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_secret</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="client_secret"                data-endpoint="POSTapi-v1-token"
               value="SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm"
               data-component="body">
    <br>
<p>Your app client secret. Example: <code>SIlF0xFYgKe2Efdl5Y9fnxZgtQSubjRhGkPWaYKm</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>grant_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="grant_type"                data-endpoint="POSTapi-v1-token"
               value="refresh_token"
               data-component="body">
    <br>
<p>The grant type. Example: <code>refresh_token</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>scope</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="scope"                data-endpoint="POSTapi-v1-token"
               value="*"
               data-component="body">
    <br>
<p>The scope. Example: <code>*</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>refresh_token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="refresh_token"                data-endpoint="POSTapi-v1-token"
               value="def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1"
               data-component="body">
    <br>
<p>The user's refresh token. Example: <code>def5020069ca6e841cee51951834ac2f50d605c8d7cb49ccc4b88c6c28eb261b06413b969318bb851817edb4360c90f76d4a10f7e8752cf11ccdb706d959fc44b901153db6b29728a2d8a472caac2e69ee2c19306a8041d7bd9e5c4504e923ddbff3f9003044825fc24c34f2f9f69a85dda61651865d2dfb8db1c3c9bbbb189feafd6e9e299734e705896155933a5959fada25c268f2b9f8f5b68de43ddc554915332f9e88bf71ba3f35a1811afa990bb43b35cfcda29cfeafff01e14b30af676000d09d9ea22b509f86bb76d3eb4a42f913c5844b2859cbd0d72952c113ef3bcf829735b3eaec54a7aa1ac0c7f46a0da1a279328b06e1477e6e909809562269de8e8ac200251a628795c77b77401c1d8e24365721e85caa201ee9b4de2e2072817e15c8b8f18869fd29db247f0eab31e38d28317f6a2ca0c79cb1bb4c4dfa141c938034c101876ded441d075b1dc876527d928c45035b5bad896d8b886c9aff6fdfa92d030ad64b5e08161609bb65e72ef339682f329df6bb5f9f5c6afd66d54d87daf62c5db1</code></p>
        </div>
        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-token">Authorize a client to access the user&#039;s account.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-token">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;post(
'http://laravel.test/api/v1/token');

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel.test/api/v1/token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/token'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.post(
'http://laravel.test/api/v1/token'    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel.test/api/v1/token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-token">
</span>
<span id="execution-results-POSTapi-v1-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-token" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-token"></code></pre>
</span>
<form id="form-POSTapi-v1-token" data-method="POST"
      data-path="api/v1/token"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/token</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-authorize">Authorize a client to access the user&#039;s account.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-authorize">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;get(
'http://laravel.test/api/v1/authorize');

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://laravel.test/api/v1/authorize',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/authorize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.get(
'http://laravel.test/api/v1/authorize'    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel.test/api/v1/authorize" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authorize">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IllDbVpiMS9RalhjWGhtcTdBY25QQnc9PSIsInZhbHVlIjoidW9vWFBlUWFoWkkrRmk2UE84eWljc3UvNGQvNnNOWHNUTGRlNkFLdG16OFV5Rjc2emh4L2t3WE1QYWhOdTA2amlhbVZRQlFNOG5OV0FyN3R0blF0TjFwN2MzMXphalNBMU5TSlZKclA2NjcyYUtDSWxJZWRNUVRTMDVqc252VkkiLCJtYWMiOiIyNDc3N2QxYjFlN2M5Mzk2YTc0MDUwZmJiZTZlNzliNzczZGZkNmY4OGEwZWFkNjZlNDViM2M5ODhjNGFiOWFiIiwidGFnIjoiIn0%3D; expires=Sat, 24 Dec 2022 18:39:47 GMT; Max-Age=7200; path=/; samesite=lax; convict_test_app_session=gtHnuu8xEBoyIuXaok6LrWClSbVke70xgZHYYe0X; expires=Sat, 24 Dec 2022 18:39:47 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Laravel\\Passport\\Http\\Controllers\\AuthorizationController::__construct(): Argument #3 ($guard) must be of type Illuminate\\Contracts\\Auth\\StatefulGuard, Laravel\\Passport\\Guards\\TokenGuard given&quot;,
    &quot;exception&quot;: &quot;TypeError&quot;,
    &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/passport/src/Http/Controllers/AuthorizationController.php&quot;,
    &quot;line&quot;: 52,
    &quot;trace&quot;: [
        {
            &quot;function&quot;: &quot;__construct&quot;,
            &quot;class&quot;: &quot;Laravel\\Passport\\Http\\Controllers\\AuthorizationController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 915,
            &quot;function&quot;: &quot;newInstanceArgs&quot;,
            &quot;class&quot;: &quot;ReflectionClass&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 756,
            &quot;function&quot;: &quot;build&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Application.php&quot;,
            &quot;line&quot;: 860,
            &quot;function&quot;: &quot;resolve&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 692,
            &quot;function&quot;: &quot;resolve&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Application.php&quot;,
            &quot;line&quot;: 845,
            &quot;function&quot;: &quot;make&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 274,
            &quot;function&quot;: &quot;make&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 260,
            &quot;function&quot;: &quot;getController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 798,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php&quot;,
            &quot;line&quot;: 78,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php&quot;,
            &quot;line&quot;: 67,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Cookie\\Middleware\\EncryptCookies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\View\\Middleware\\ShareErrorsFromSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php&quot;,
            &quot;line&quot;: 64,
            &quot;function&quot;: &quot;handleStatefulRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Session\\Middleware\\StartSession&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 799,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 776,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 740,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 729,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 190,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 92,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 122,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 69,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 47,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 182,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 312,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 152,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 1020,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 312,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 168,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 155,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/welldev/Dev/personal/convicti-teste/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authorize" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authorize"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authorize" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authorize"></code></pre>
</span>
<form id="form-GETapi-v1-authorize" data-method="GET"
      data-path="api/v1/authorize"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authorize', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authorize</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-authorize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-authorize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-token-refresh">Get a fresh transient token cookie for the authenticated user.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-token-refresh">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;post(
'http://laravel.test/api/v1/token/refresh');

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel.test/api/v1/token/refresh',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/token/refresh"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/token/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.post(
'http://laravel.test/api/v1/token/refresh'    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel.test/api/v1/token/refresh" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-token-refresh">
</span>
<span id="execution-results-POSTapi-v1-token-refresh" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-token-refresh"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-token-refresh" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-token-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-token-refresh"></code></pre>
</span>
<form id="form-POSTapi-v1-token-refresh" data-method="POST"
      data-path="api/v1/token/refresh"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-token-refresh', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/token/refresh</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-token-refresh"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-token-refresh"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-authorize">Approve the authorization request.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-authorize">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;post(
'http://laravel.test/api/v1/authorize');

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel.test/api/v1/authorize',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/authorize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.post(
'http://laravel.test/api/v1/authorize'    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel.test/api/v1/authorize" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-authorize">
</span>
<span id="execution-results-POSTapi-v1-authorize" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-authorize"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-authorize" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-authorize"></code></pre>
</span>
<form id="form-POSTapi-v1-authorize" data-method="POST"
      data-path="api/v1/authorize"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-authorize', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/authorize</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-authorize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-authorize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-DELETEapi-v1-authorize">Deny the authorization request.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-authorize">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;delete(
'http://laravel.test/api/v1/authorize');

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://laravel.test/api/v1/authorize',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/authorize"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.delete(
'http://laravel.test/api/v1/authorize'    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laravel.test/api/v1/authorize" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-authorize">
</span>
<span id="execution-results-DELETEapi-v1-authorize" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-authorize"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-authorize" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-authorize"></code></pre>
</span>
<form id="form-DELETEapi-v1-authorize" data-method="DELETE"
      data-path="api/v1/authorize"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-authorize', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/authorize</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-authorize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-authorize"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-personal-access-tokens">Create a new personal access token for the user.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-personal-access-tokens">
<blockquote>Example request:</blockquote>


<div class="laravel-9x-example">
    <pre><code class="language-php">use Illuminate\Support\Facades\Http;

$headers = [
    "Content-Type": "application/json",
    "Accept": "application/json",
];

$response = Http::withHeaders($headers)
-&gt;post(
'http://laravel.test/api/v1/personal-access-tokens');

dd($response-&gt;json());
</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://laravel.test/api/v1/personal-access-tokens',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel.test/api/v1/personal-access-tokens"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://laravel.test/api/v1/personal-access-tokens'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre></div>


<div class="ruby-example">
    <pre><code class="language-ruby">
require 'rest-client'

    headers = {
            "Content-Type": "application/json",
            "Accept": "application/json",
        }

response = RestClient.post(
'http://laravel.test/api/v1/personal-access-tokens'    ,
    headers
)

p response.body
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel.test/api/v1/personal-access-tokens" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-personal-access-tokens">
</span>
<span id="execution-results-POSTapi-v1-personal-access-tokens" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-personal-access-tokens"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-personal-access-tokens" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-personal-access-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-personal-access-tokens"></code></pre>
</span>
<form id="form-POSTapi-v1-personal-access-tokens" data-method="POST"
      data-path="api/v1/personal-access-tokens"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-personal-access-tokens', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/personal-access-tokens</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-personal-access-tokens"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-personal-access-tokens"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="laravel-9x">laravel-9x</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="python">python</button>
                                                        <button type="button" class="lang-button" data-language-name="ruby">ruby</button>
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                            </div>
            </div>
</div>
</body>
</html>
