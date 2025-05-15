<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

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
        var tryItOutBaseUrl = "http://api-organiz.my.id";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-tasks" class="tocify-header">
                <li class="tocify-item level-1" data-unique="tasks">
                    <a href="#tasks">Tasks</a>
                </li>
                                    <ul id="tocify-subheader-tasks" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="tasks-GETapi-tasks">
                                <a href="#tasks-GETapi-tasks">List tasks</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-POSTapi-tasks">
                                <a href="#tasks-POSTapi-tasks">Store task</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-GETapi-tasks--id-">
                                <a href="#tasks-GETapi-tasks--id-">Show single task</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-PUTapi-tasks--id-">
                                <a href="#tasks-PUTapi-tasks--id-">Update task</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-DELETEapi-tasks--id-">
                                <a href="#tasks-DELETEapi-tasks--id-">Delete task</a>
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
        <li>Last updated: May 15, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://api-organiz.my.id</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-organiz.my.id/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-organiz.my.id/api/user"
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

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
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
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="tasks">Tasks</h1>

    <p>Endpoints for managing tasks</p>

                                <h2 id="tasks-GETapi-tasks">List tasks</h2>

<p>
</p>



<span id="example-requests-GETapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-organiz.my.id/api/tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-organiz.my.id/api/tasks"
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

<span id="example-responses-GETapi-tasks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 3,
        &quot;title&quot;: &quot;Plan Sprint 1&quot;,
        &quot;description&quot;: &quot;Define backlog &amp; velocity&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;title&quot;: &quot;Draft API Spec&quot;,
        &quot;description&quot;: &quot;OpenAPI /docs v1&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;title&quot;: &quot;Set Up CI Pipeline&quot;,
        &quot;description&quot;: &quot;GitHub Actions + Pint&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;title&quot;: &quot;Plan Sprint 1&quot;,
        &quot;description&quot;: &quot;Define backlog &amp; velocity&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;title&quot;: &quot;Draft API Spec&quot;,
        &quot;description&quot;: &quot;OpenAPI /docs v1&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;title&quot;: &quot;Set Up CI Pipeline&quot;,
        &quot;description&quot;: &quot;GitHub Actions + Pint&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;title&quot;: &quot;Aperiam porro quibusdam.&quot;,
        &quot;description&quot;: &quot;Define backlog &amp; velocity&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;title&quot;: &quot;Iste placeat reiciendis quia.&quot;,
        &quot;description&quot;: &quot;Vel illo earum quos necessitatibus quo rerum. Distinctio ex rerum quia corrupti dignissimos. Laborum assumenda provident ipsum neque libero. Aut voluptatibus assumenda dolores. Sunt non aut similique et.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;title&quot;: &quot;Facere ipsa magni.&quot;,
        &quot;description&quot;: &quot;Saepe tenetur nulla placeat saepe quidem aut expedita. Repellat laboriosam labore cum a voluptate. Officia dolores quasi nisi ipsam.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;title&quot;: &quot;Perferendis inventore quia.&quot;,
        &quot;description&quot;: &quot;Nesciunt sed voluptatibus aspernatur tenetur maxime. Aliquid saepe illo soluta saepe. Non qui debitis molestiae dolores dolor et. Occaecati quia sed nemo. Architecto et magnam accusamus totam voluptas repellendus.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;title&quot;: &quot;Veniam quisquam.&quot;,
        &quot;description&quot;: &quot;Aut praesentium voluptatibus reprehenderit placeat. Et sint eum recusandae sed iusto sed. Velit aut expedita quisquam. Mollitia ex animi nihil repudiandae.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;title&quot;: &quot;Odit ipsam magni mollitia.&quot;,
        &quot;description&quot;: &quot;Numquam non qui quod est. Maxime quis ipsam quia excepturi.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;title&quot;: &quot;Labore fugit voluptatum illo quasi.&quot;,
        &quot;description&quot;: &quot;Ea incidunt delectus non ad. Fugit ex rerum quaerat voluptatem earum. Perspiciatis aperiam et autem expedita dolore placeat.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;title&quot;: &quot;Esse non laborum similique labore.&quot;,
        &quot;description&quot;: &quot;Nesciunt sed voluptatibus aspernatur tenetur maxime. Aliquid saepe illo soluta saepe. Non qui debitis molestiae dolores dolor et. Occaecati quia sed nemo. Architecto et magnam accusamus totam voluptas repellendus.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;title&quot;: &quot;Enim quo repellendus repellendus.&quot;,
        &quot;description&quot;: &quot;Dolor doloribus est dicta molestiae nesciunt saepe dicta. Odit rerum rerum omnis animi voluptate magnam nemo repellat. Laudantium aut cupiditate qui sunt iure mollitia. Perspiciatis sit provident aliquid praesentium eos.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;title&quot;: &quot;Qui et ducimus.&quot;,
        &quot;description&quot;: &quot;Ea incidunt delectus non ad. Fugit ex rerum quaerat voluptatem earum. Perspiciatis aperiam et autem expedita dolore placeat.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;title&quot;: &quot;Ut animi omnis.&quot;,
        &quot;description&quot;: &quot;Quod et ipsam enim at et minus quis et. Sit id autem iure nulla corrupti quaerat. Qui consequatur alias ut blanditiis. Ipsa id itaque accusantium.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;title&quot;: &quot;Temporibus ut et ad consequuntur.&quot;,
        &quot;description&quot;: &quot;Et quidem sint et voluptas maiores cumque libero. Voluptatem quos animi vitae esse ipsam asperiores ab. Sit dolor dolor ab nesciunt consequatur velit.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;title&quot;: &quot;Delectus unde neque.&quot;,
        &quot;description&quot;: &quot;Quod et ipsam enim at et minus quis et. Sit id autem iure nulla corrupti quaerat. Qui consequatur alias ut blanditiis. Ipsa id itaque accusantium.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;title&quot;: &quot;Itaque asperiores vero quae.&quot;,
        &quot;description&quot;: &quot;Nam rerum deserunt dolores. Itaque hic eum ullam incidunt vel non excepturi. Nihil qui sit pariatur. Doloremque nisi id non possimus reiciendis atque. Illum dolore consequuntur voluptas molestiae.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;title&quot;: &quot;Aut consequuntur aperiam eos.&quot;,
        &quot;description&quot;: &quot;Iure debitis ipsum delectus tempora totam atque quod. Eum est praesentium aut corrupti autem rerum ipsa. Commodi repudiandae sed placeat debitis labore mollitia.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;title&quot;: &quot;Temporibus laborum sint.&quot;,
        &quot;description&quot;: &quot;Ea laboriosam officia aut aut atque. Unde recusandae in itaque culpa. Magnam molestiae totam sint repellendus quis a. Asperiores velit rerum omnis minus dolorem eveniet.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;title&quot;: &quot;Fugit id similique voluptatem.&quot;,
        &quot;description&quot;: &quot;Nam rerum deserunt dolores. Itaque hic eum ullam incidunt vel non excepturi. Nihil qui sit pariatur. Doloremque nisi id non possimus reiciendis atque. Illum dolore consequuntur voluptas molestiae.&quot;,
        &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tasks" data-method="GET"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks"
                    onclick="tryItOut('GETapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks"
                    onclick="cancelTryOut('GETapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tasks"
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
                              name="Accept"                data-endpoint="GETapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
 &nbsp;
<br>

        </div>
                        <h2 id="tasks-POSTapi-tasks">Store task</h2>

<p>
</p>



<span id="example-requests-POSTapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://api-organiz.my.id/api/tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"architecto\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-organiz.my.id/api/tasks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "architecto",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tasks">
</span>
<span id="execution-results-POSTapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tasks" data-method="POST"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tasks"
                    onclick="tryItOut('POSTapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tasks"
                    onclick="cancelTryOut('POSTapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tasks"
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
                              name="Accept"                data-endpoint="POSTapi-tasks"
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
                              name="title"                data-endpoint="POSTapi-tasks"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-tasks"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>nullable Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="tasks-GETapi-tasks--id-">Show single task</h2>

<p>
</p>



<span id="example-requests-GETapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api-organiz.my.id/api/tasks/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-organiz.my.id/api/tasks/3"
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

<span id="example-responses-GETapi-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;title&quot;: &quot;Plan Sprint 1&quot;,
    &quot;description&quot;: &quot;Define backlog &amp; velocity&quot;,
    &quot;created_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-05-15T14:52:31.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tasks--id-" data-method="GET"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks--id-"
                    onclick="tryItOut('GETapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks--id-"
                    onclick="cancelTryOut('GETapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tasks--id-"
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
                              name="Accept"                data-endpoint="GETapi-tasks--id-"
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
               step="any"               name="id"                data-endpoint="GETapi-tasks--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>3</code></p>
            </div>
                    </form>

                    <h2 id="tasks-PUTapi-tasks--id-">Update task</h2>

<p>
</p>



<span id="example-requests-PUTapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://api-organiz.my.id/api/tasks/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-organiz.my.id/api/tasks/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tasks--id-">
</span>
<span id="execution-results-PUTapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tasks--id-" data-method="PUT"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tasks--id-"
                    onclick="tryItOut('PUTapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tasks--id-"
                    onclick="cancelTryOut('PUTapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tasks--id-"
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
                              name="Accept"                data-endpoint="PUTapi-tasks--id-"
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
               step="any"               name="id"                data-endpoint="PUTapi-tasks--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>3</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-tasks--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 120 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-tasks--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="tasks-DELETEapi-tasks--id-">Delete task</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://api-organiz.my.id/api/tasks/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api-organiz.my.id/api/tasks/3"
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

<span id="example-responses-DELETEapi-tasks--id-">
</span>
<span id="execution-results-DELETEapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tasks--id-" data-method="DELETE"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tasks--id-"
                    onclick="tryItOut('DELETEapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tasks--id-"
                    onclick="cancelTryOut('DELETEapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tasks--id-"
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
                              name="Accept"                data-endpoint="DELETEapi-tasks--id-"
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
               step="any"               name="id"                data-endpoint="DELETEapi-tasks--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>3</code></p>
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
