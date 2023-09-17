<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.24.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.24.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
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
                    <ul id="tocify-header-auth-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth-management">
                    <a href="#auth-management">Auth Management</a>
                </li>
                                    <ul id="tocify-subheader-auth-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-management-POSTapi-register">
                                <a href="#auth-management-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-management-POSTapi-login">
                                <a href="#auth-management-POSTapi-login">POST api/login</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-healthcheck">
                                <a href="#endpoints-GETapi-healthcheck">GET api/healthcheck</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movies--id--comments">
                                <a href="#endpoints-POSTapi-movies--id--comments">POST api/movies/{id}/comments</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-movie-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="movie-management">
                    <a href="#movie-management">Movie Management</a>
                </li>
                                    <ul id="tocify-subheader-movie-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="movie-management-POSTapi-movies">
                                <a href="#movie-management-POSTapi-movies">POST api/movies</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movie-management-PUTapi-movies--id-">
                                <a href="#movie-management-PUTapi-movies--id-">PUT api/movies/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movie-management-DELETEapi-movies--id-">
                                <a href="#movie-management-DELETEapi-movies--id-">DELETE api/movies/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movie-management-GETapi-movies">
                                <a href="#movie-management-GETapi-movies">Display a listing of Movies.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movie-management-GETapi-movies--id-">
                                <a href="#movie-management-GETapi-movies--id-">GET api/movies/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="movie-management-GETapi-movies--id--related">
                                <a href="#movie-management-GETapi-movies--id--related">GET api/movies/{id}/related</a>
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
        <li>Last updated: September 17, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="auth-management">Auth Management</h1>

    <p>APIs to manage the Auth resource</p>

                                <h2 id="auth-management-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"jlshuekpnpoykxugekyfsikfc\",
    \"email\": \"ibrown@example.com\",
    \"password\": \"a5mHT&gt;@W&gt;$}&gt;fH\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "jlshuekpnpoykxugekyfsikfc",
    "email": "ibrown@example.com",
    "password": "a5mHT&gt;@W&gt;$}&gt;fH"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
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
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="jlshuekpnpoykxugekyfsikfc"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>jlshuekpnpoykxugekyfsikfc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="ibrown@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>ibrown@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="a5mHT>@W>$}>fH"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>a5mHT&gt;@W&gt;$}&gt;fH</code></p>
        </div>
        </form>

                    <h2 id="auth-management-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"justina93@example.net\",
    \"password\": \"]m=lio~1508\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "justina93@example.net",
    "password": "]m=lio~1508"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
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
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="justina93@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>justina93@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="]m=lio~1508"
               data-component="body">
    <br>
<p>Example: <code>]m=lio~1508</code></p>
        </div>
        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-healthcheck">GET api/healthcheck</h2>

<p>
</p>



<span id="example-requests-GETapi-healthcheck">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/healthcheck" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/healthcheck"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-healthcheck">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;up&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;up&quot;,
        &quot;redis&quot;: &quot;up&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-healthcheck" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-healthcheck"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-healthcheck"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-healthcheck" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-healthcheck">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-healthcheck" data-method="GET"
      data-path="api/healthcheck"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-healthcheck', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-healthcheck"
                    onclick="tryItOut('GETapi-healthcheck');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-healthcheck"
                    onclick="cancelTryOut('GETapi-healthcheck');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-healthcheck"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/healthcheck</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-healthcheck"
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
                              name="Accept"                data-endpoint="GETapi-healthcheck"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-movies--id--comments">POST api/movies/{id}/comments</h2>

<p>
</p>



<span id="example-requests-POSTapi-movies--id--comments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/movies/1/comments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"obartell@example.net\",
    \"body\": \"quis\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/movies/1/comments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "obartell@example.net",
    "body": "quis"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies--id--comments">
</span>
<span id="execution-results-POSTapi-movies--id--comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies--id--comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies--id--comments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-movies--id--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies--id--comments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-movies--id--comments" data-method="POST"
      data-path="api/movies/{id}/comments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies--id--comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies--id--comments"
                    onclick="tryItOut('POSTapi-movies--id--comments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies--id--comments"
                    onclick="cancelTryOut('POSTapi-movies--id--comments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies--id--comments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies/{id}/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-movies--id--comments"
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
                              name="Accept"                data-endpoint="POSTapi-movies--id--comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-movies--id--comments"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-movies--id--comments"
               value="obartell@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>obartell@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="body"                data-endpoint="POSTapi-movies--id--comments"
               value="quis"
               data-component="body">
    <br>
<p>Example: <code>quis</code></p>
        </div>
        </form>

                <h1 id="movie-management">Movie Management</h1>

    <p>APIs to manage the movie resource</p>

                                <h2 id="movie-management-POSTapi-movies">POST api/movies</h2>

<p>
</p>



<span id="example-requests-POSTapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/movies" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=necessitatibus"\
    --form "summary=mollitia"\
    --form "genres=deleniti"\
    --form "author=explicabo"\
    --form "tags=ut"\
    --form "imdb_rating=7"\
    --form "cover_image=@C:\Users\ThanHtikeZaw\AppData\Local\Temp\php7C70.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/movies"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'necessitatibus');
body.append('summary', 'mollitia');
body.append('genres', 'deleniti');
body.append('author', 'explicabo');
body.append('tags', 'ut');
body.append('imdb_rating', '7');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-movies">
</span>
<span id="execution-results-POSTapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-movies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-movies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-movies" data-method="POST"
      data-path="api/movies"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-movies"
                    onclick="tryItOut('POSTapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-movies"
                    onclick="cancelTryOut('POSTapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-movies"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/movies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-movies"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-movies"
               value="necessitatibus"
               data-component="body">
    <br>
<p>Example: <code>necessitatibus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>summary</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="summary"                data-endpoint="POSTapi-movies"
               value="mollitia"
               data-component="body">
    <br>
<p>Example: <code>mollitia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cover_image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="cover_image"                data-endpoint="POSTapi-movies"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\ThanHtikeZaw\AppData\Local\Temp\php7C70.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genres"                data-endpoint="POSTapi-movies"
               value="deleniti"
               data-component="body">
    <br>
<p>Example: <code>deleniti</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="POSTapi-movies"
               value="explicabo"
               data-component="body">
    <br>
<p>Example: <code>explicabo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tags</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tags"                data-endpoint="POSTapi-movies"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>imdb_rating</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="imdb_rating"                data-endpoint="POSTapi-movies"
               value="7"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 10. Example: <code>7</code></p>
        </div>
        </form>

                    <h2 id="movie-management-PUTapi-movies--id-">PUT api/movies/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/movies/in" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/movies/in"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-movies--id-">
</span>
<span id="execution-results-PUTapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-movies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-movies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-movies--id-" data-method="PUT"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-movies--id-"
                    onclick="tryItOut('PUTapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-movies--id-"
                    onclick="cancelTryOut('PUTapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-movies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-movies--id-"
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
                              name="Accept"                data-endpoint="PUTapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-movies--id-"
               value="in"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>in</code></p>
            </div>
                    </form>

                    <h2 id="movie-management-DELETEapi-movies--id-">DELETE api/movies/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/movies/sed" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/movies/sed"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-movies--id-">
</span>
<span id="execution-results-DELETEapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-movies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-movies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-movies--id-" data-method="DELETE"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-movies--id-"
                    onclick="tryItOut('DELETEapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-movies--id-"
                    onclick="cancelTryOut('DELETEapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-movies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-movies--id-"
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
                              name="Accept"                data-endpoint="DELETEapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-movies--id-"
               value="sed"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>sed</code></p>
            </div>
                    </form>

                    <h2 id="movie-management-GETapi-movies">Display a listing of Movies.</h2>

<p>
</p>

<p>Get a list of movies.</p>

<span id="example-requests-GETapi-movies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/movies?page_size=20&amp;page=8" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/movies"
);

const params = {
    "page_size": "20",
    "page": "8",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-movies">
            <blockquote>
            <p>Example response (200):</p>
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
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;current_page&quot;: 8,
    &quot;data&quot;: [],
    &quot;first_page_url&quot;: &quot;http://localhost/api/movies?page=1&quot;,
    &quot;from&quot;: null,
    &quot;last_page&quot;: 2,
    &quot;last_page_url&quot;: &quot;http://localhost/api/movies?page=2&quot;,
    &quot;links&quot;: [
        {
            &quot;url&quot;: &quot;http://localhost/api/movies?page=7&quot;,
            &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/api/movies?page=1&quot;,
            &quot;label&quot;: &quot;1&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/api/movies?page=2&quot;,
            &quot;label&quot;: &quot;2&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
            &quot;active&quot;: false
        }
    ],
    &quot;next_page_url&quot;: null,
    &quot;path&quot;: &quot;http://localhost/api/movies&quot;,
    &quot;per_page&quot;: 10,
    &quot;prev_page_url&quot;: &quot;http://localhost/api/movies?page=7&quot;,
    &quot;to&quot;: null,
    &quot;total&quot;: 20
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-movies" data-method="GET"
      data-path="api/movies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies"
                    onclick="tryItOut('GETapi-movies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies"
                    onclick="cancelTryOut('GETapi-movies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-movies"
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
                              name="Accept"                data-endpoint="GETapi-movies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page_size</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="page_size"                data-endpoint="GETapi-movies"
               value="20"
               data-component="query">
    <br>
<p>Size per page. Defaults to 10. Example: <code>20</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="page"                data-endpoint="GETapi-movies"
               value="8"
               data-component="query">
    <br>
<p>Page to view. Example: <code>8</code></p>
            </div>
                </form>

                    <h2 id="movie-management-GETapi-movies--id-">GET api/movies/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/movies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/movies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;Inventore harum quisquam.&quot;,
    &quot;summary&quot;: &quot;Ullam incidunt deleniti omnis explicabo ut voluptatibus deleniti. Dolores nemo doloribus in consequatur aut ex. Ipsa laudantium qui voluptatibus omnis doloribus fuga et fugit. Voluptates ut molestias magni sed sit quis ipsa magni.&quot;,
    &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/008833?text=movies+autem&quot;,
    &quot;genres&quot;: &quot;Comedy&quot;,
    &quot;author&quot;: &quot;Michael Johnson&quot;,
    &quot;tags&quot;: &quot;Fantasy,Thriller,Mystery&quot;,
    &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
    &quot;imdb_rating&quot;: &quot;5.6&quot;,
    &quot;pdf_download_link&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-movies--id-" data-method="GET"
      data-path="api/movies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--id-"
                    onclick="tryItOut('GETapi-movies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--id-"
                    onclick="cancelTryOut('GETapi-movies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-movies--id-"
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
                              name="Accept"                data-endpoint="GETapi-movies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-movies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="movie-management-GETapi-movies--id--related">GET api/movies/{id}/related</h2>

<p>
</p>



<span id="example-requests-GETapi-movies--id--related">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/movies/1/related" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/movies/1/related"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-movies--id--related">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 6,
        &quot;title&quot;: &quot;Neque voluptas alias et.&quot;,
        &quot;summary&quot;: &quot;Eum laborum nobis officia et. Magnam molestias quia alias quae minima quae eligendi natus. Labore voluptatem necessitatibus tempore quos. Est quis est reiciendis aperiam et sequi nobis. Optio quasi quo modi laborum.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/006644?text=movies+asperiores&quot;,
        &quot;genres&quot;: &quot;Comedy&quot;,
        &quot;author&quot;: &quot;John Doe&quot;,
        &quot;tags&quot;: &quot;Fantasy,Thriller,Adventure&quot;,
        &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;imdb_rating&quot;: &quot;7.8&quot;,
        &quot;pdf_download_link&quot;: null
    },
    {
        &quot;id&quot;: 7,
        &quot;title&quot;: &quot;Qui quam in ea.&quot;,
        &quot;summary&quot;: &quot;Culpa quia et officiis dicta aut aut. Ab dolor libero est provident. Laboriosam neque in et nesciunt iusto. Blanditiis ipsa velit optio dolores sunt sequi.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/003388?text=movies+quo&quot;,
        &quot;genres&quot;: &quot;Comedy&quot;,
        &quot;author&quot;: &quot;Michael Johnson&quot;,
        &quot;tags&quot;: &quot;Fantasy,Thriller,Romance&quot;,
        &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;imdb_rating&quot;: &quot;7.3&quot;,
        &quot;pdf_download_link&quot;: null
    },
    {
        &quot;id&quot;: 10,
        &quot;title&quot;: &quot;Et aliquid dolorem assumenda.&quot;,
        &quot;summary&quot;: &quot;Impedit qui omnis consectetur quod quae. Perferendis repellendus error sed vel et velit explicabo ex. Consequatur est eum fuga.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/0077aa?text=movies+voluptatibus&quot;,
        &quot;genres&quot;: &quot;Drama&quot;,
        &quot;author&quot;: &quot;John Doe&quot;,
        &quot;tags&quot;: &quot;Adventure,Fantasy,Mystery&quot;,
        &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;imdb_rating&quot;: &quot;7.1&quot;,
        &quot;pdf_download_link&quot;: null
    },
    {
        &quot;id&quot;: 9,
        &quot;title&quot;: &quot;Autem alias eos aliquid possimus.&quot;,
        &quot;summary&quot;: &quot;Ducimus nihil consectetur neque eos eos voluptatem. Cum consequatur omnis fugiat maxime quo impedit non. Doloremque eos aut rerum assumenda et cumque.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/0066ff?text=movies+possimus&quot;,
        &quot;genres&quot;: &quot;Action&quot;,
        &quot;author&quot;: &quot;Emily Davis&quot;,
        &quot;tags&quot;: &quot;Fantasy,Thriller,Adventure&quot;,
        &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;imdb_rating&quot;: &quot;6.4&quot;,
        &quot;pdf_download_link&quot;: null
    },
    {
        &quot;id&quot;: 13,
        &quot;title&quot;: &quot;Mollitia quia voluptate delectus.&quot;,
        &quot;summary&quot;: &quot;Corporis voluptatem aut officiis molestias. Quibusdam atque laudantium corrupti id et. Rerum similique harum esse dolorem libero nulla dolorem.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/00aaee?text=movies+ut&quot;,
        &quot;genres&quot;: &quot;Comedy&quot;,
        &quot;author&quot;: &quot;Jane Smith&quot;,
        &quot;tags&quot;: &quot;Adventure,Romance,Fantasy&quot;,
        &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;imdb_rating&quot;: &quot;6.0&quot;,
        &quot;pdf_download_link&quot;: null
    },
    {
        &quot;id&quot;: 15,
        &quot;title&quot;: &quot;Nam a.&quot;,
        &quot;summary&quot;: &quot;Necessitatibus animi minus sint et possimus odio aut. Illo optio sint molestiae officia magni.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/007799?text=movies+distinctio&quot;,
        &quot;genres&quot;: &quot;Comedy&quot;,
        &quot;author&quot;: &quot;Emily Davis&quot;,
        &quot;tags&quot;: &quot;Thriller,Romance,Adventure&quot;,
        &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;imdb_rating&quot;: &quot;6.0&quot;,
        &quot;pdf_download_link&quot;: null
    },
    {
        &quot;id&quot;: 4,
        &quot;title&quot;: &quot;Quis veniam.&quot;,
        &quot;summary&quot;: &quot;Nihil tempore dicta quisquam aliquid. Quisquam ex distinctio pariatur.&quot;,
        &quot;cover_image&quot;: &quot;https://via.placeholder.com/640x480.png/000099?text=movies+et&quot;,
        &quot;genres&quot;: &quot;Action&quot;,
        &quot;author&quot;: &quot;Jane Smith&quot;,
        &quot;tags&quot;: &quot;Romance,Mystery,Thriller&quot;,
        &quot;created_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-09-17T10:42:43.000000Z&quot;,
        &quot;imdb_rating&quot;: &quot;5.7&quot;,
        &quot;pdf_download_link&quot;: null
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-movies--id--related" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-movies--id--related"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-movies--id--related"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-movies--id--related" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-movies--id--related">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-movies--id--related" data-method="GET"
      data-path="api/movies/{id}/related"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-movies--id--related', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-movies--id--related"
                    onclick="tryItOut('GETapi-movies--id--related');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-movies--id--related"
                    onclick="cancelTryOut('GETapi-movies--id--related');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-movies--id--related"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/movies/{id}/related</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-movies--id--related"
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
                              name="Accept"                data-endpoint="GETapi-movies--id--related"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-movies--id--related"
               value="1"
               data-component="url">
    <br>
<p>The ID of the movie. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
