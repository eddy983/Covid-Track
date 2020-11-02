<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.json") }}">View Postman Collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) Spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: November 2 2020</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Welcome to our API documentation!</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile), and you can switch the programming language of the examples with the tabs in the top right (or from the nav menu at the top left on mobile).</aside><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Donation Management</h1>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/donation?state=dolores&amp;count=19" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/donation"
);

let params = {
    "state": "dolores",
    "count": "19",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/donation?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/donation?page=1",
    "links": [
        {
            "url": null,
            "label": "&amp;laquo; Previous",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/donation?page=1",
            "label": 1,
            "active": true
        },
        {
            "url": null,
            "label": "Next &amp;raquo;",
            "active": false
        }
    ],
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/donation",
    "per_page": 19,
    "prev_page_url": null,
    "to": null,
    "total": 0
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/donation</code></strong></p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p><code><b>state</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
string State ID. Example lagos</p>
<p><code><b>count</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
int The number of records to return. Example 10</p>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/donation/{id}?id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/donation/{id}"
);

let params = {
    "id": "qui",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/donation/{id}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p><code><b>id</b></code>&nbsp; <small>string</small>     <br>
The id of the Donation data.</p>
<h2>Store a newly created resource in storage.</h2>
<p>@bodyParam  state string required The state of the Donation data.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/donation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"donor_name":"magnam","donation_details":"aspernatur","donation_type":"nesciunt","donation_amount":"esse","source":"consequatur"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/donation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "donor_name": "magnam",
    "donation_details": "aspernatur",
    "donation_type": "nesciunt",
    "donation_amount": "esse",
    "source": "consequatur"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/donation</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>donor_name</b></code>&nbsp; <small>string</small>     <br>
The donor_name of the Donation data.</p>
<p><code><b>donation_details</b></code>&nbsp; <small>string</small>     <br>
The donation_details of the Donation data.</p>
<p><code><b>donation_type</b></code>&nbsp; <small>string</small>     <br>
The donation_type of the Donation data.</p>
<p><code><b>donation_amount</b></code>&nbsp; <small>string</small>     <br>
The donation_amount of the Donation data.</p>
<p><code><b>source</b></code>&nbsp; <small>string</small>     <br>
The source of the Donation data.</p>
<h2>Update the specified resource in storage.</h2>
<p>@queryParam  id required The id of the Donation data.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/donation/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state":"architecto","donor_name":"laborum","donation_details":"repellat","donation_type":"officia","donation_amount":"quam","source":"ut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/donation/{id}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "state": "architecto",
    "donor_name": "laborum",
    "donation_details": "repellat",
    "donation_type": "officia",
    "donation_amount": "quam",
    "source": "ut"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-darkblue">PUT</small>
<strong><code>api/donation/{id}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>state</b></code>&nbsp; <small>string</small>     <br>
The state of the Donation data.</p>
<p><code><b>donor_name</b></code>&nbsp; <small>string</small>     <br>
The donor_name of the Donation data.</p>
<p><code><b>donation_details</b></code>&nbsp; <small>string</small>     <br>
The donation_details of the Donation data.</p>
<p><code><b>donation_type</b></code>&nbsp; <small>string</small>     <br>
The donation_type of the Donation data.</p>
<p><code><b>donation_amount</b></code>&nbsp; <small>string</small>     <br>
The donation_amount of the Donation data.</p>
<p><code><b>source</b></code>&nbsp; <small>string</small>     <br>
The source of the Donation data.</p>
<h2>Remove the specified resource from storage.</h2>
<p>@queryParam  id required The id of the Donation data.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/donation/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/donation/{id}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-red">DELETE</small>
<strong><code>api/donation/{id}</code></strong></p><h1>Endpoints</h1>
<h2>docs.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/docs.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/docs.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "variable": [],
    "info": {
        "name": "Laravel API",
        "_postman_id": "4603e60d-3d22-4221-ba80-8cef4532b445",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.1.0\/collection.json"
    },
    "item": [
        {
            "name": "Donation Management",
            "description": "",
            "item": [
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation\/:id",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "veniam",
                                    "description": "The id of the Donation data.",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/donation\/:id?id=veniam"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/donation"
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"donor_name\": \"repudiandae\",\n    \"donation_details\": \"dolore\",\n    \"donation_type\": \"aliquam\",\n    \"donation_amount\": \"illum\",\n    \"source\": \"recusandae\"\n}"
                        },
                        "description": "@bodyParam  state string required The state of the Donation data.",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation\/:id",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/donation\/:id"
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"state\": \"accusamus\",\n    \"donor_name\": \"explicabo\",\n    \"donation_details\": \"non\",\n    \"donation_type\": \"eum\",\n    \"donation_amount\": \"incidunt\",\n    \"source\": \"sunt\"\n}"
                        },
                        "description": "@queryParam  id required The id of the Donation data.",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation\/:id",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/donation\/:id"
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "@queryParam  id required The id of the Donation data.",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        },
        {
            "name": "Endpoints",
            "description": "",
            "item": [
                {
                    "name": "docs.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "docs.json",
                            "query": [],
                            "raw": "http:\/\/localhost\/docs.json"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "docs.openapi",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "docs.openapi",
                            "query": [],
                            "raw": "http:\/\/localhost\/docs.openapi"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "api\/user",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/user",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/user"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "api\/documentation",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/documentation",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/documentation"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation",
                            "query": [
                                {
                                    "key": "state",
                                    "value": "maxime",
                                    "description": "string State ID. Example lagos",
                                    "disabled": false
                                },
                                {
                                    "key": "count",
                                    "value": "15",
                                    "description": "int The number of records to return. Example 10\n\n @group  Donation Management",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/donation?state=maxime&amp;count=15"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "\/",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "\/",
                            "query": [],
                            "raw": "http:\/\/localhost\/\/"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        },
        {
            "name": "Media Management",
            "description": "",
            "item": [
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/media"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "@queryParam  state string State ID. Example lagos",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media\/:id",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "nihil",
                                    "description": "The id of the Media data.",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/media\/:id?id=nihil"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/media"
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"image\": \"quia\"\n}"
                        },
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media\/:id",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "quis",
                                    "description": "The id of the Media data.",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/media\/:id?id=quis"
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        }
    ],
    "auth": {
        "type": "noauth"
    }
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>docs.json</code></strong></p>
<h2>docs.openapi</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/docs.openapi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/docs.openapi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>docs.openapi</code></strong></p>
<h2>api/user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/user</code></strong></p>
<h2>api/documentation</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/documentation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"&gt;
    &lt;title&gt;API Documentation&lt;/title&gt;

    &lt;link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;display=swap" rel="stylesheet"&gt;

        &lt;link rel="stylesheet" href="http://localhost/vendor/scribe/css/style.css" media="screen" /&gt;
        &lt;link rel="stylesheet" href="http://localhost/vendor/scribe/css/print.css" media="print" /&gt;
        &lt;script src="http://localhost/vendor/scribe/js/all.js"&gt;&lt;/script&gt;

        &lt;link rel="stylesheet" href="http://localhost/vendor/scribe/css/highlight-darcula.css" media="" /&gt;
        &lt;script src="http://localhost/vendor/scribe/js/highlight.pack.js"&gt;&lt;/script&gt;
    &lt;script&gt;hljs.initHighlightingOnLoad();&lt;/script&gt;

&lt;/head&gt;

&lt;body class="" data-languages="[&amp;quot;bash&amp;quot;,&amp;quot;javascript&amp;quot;]"&gt;
&lt;a href="#" id="nav-button"&gt;
      &lt;span&gt;
        NAV
            &lt;img src="http://localhost/vendor/scribe/images/navbar.png" alt="-image" class=""/&gt;
      &lt;/span&gt;
&lt;/a&gt;
&lt;div class="tocify-wrapper"&gt;
                &lt;div class="lang-selector"&gt;
                            &lt;a href="#" data-language-name="bash"&gt;bash&lt;/a&gt;
                            &lt;a href="#" data-language-name="javascript"&gt;javascript&lt;/a&gt;
                    &lt;/div&gt;
        &lt;div class="search"&gt;
        &lt;input type="text" class="search" id="input-search" placeholder="Search"&gt;
    &lt;/div&gt;
    &lt;ul class="search-results"&gt;&lt;/ul&gt;

    &lt;ul id="toc"&gt;
    &lt;/ul&gt;

            &lt;ul class="toc-footer" id="toc-footer"&gt;
                            &lt;li&gt;&lt;a href="http://localhost/docs.json"&gt;View Postman Collection&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="http://localhost/docs.openapi"&gt;View OpenAPI (Swagger) Spec&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href='http://github.com/knuckleswtf/scribe'&gt;Documentation powered by Scribe ✍&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
            &lt;ul class="toc-footer" id="last-updated"&gt;
            &lt;li&gt;Last updated: October 30 2020&lt;/li&gt;
        &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="page-wrapper"&gt;
    &lt;div class="dark-box"&gt;&lt;/div&gt;
    &lt;div class="content"&gt;
        &lt;h1&gt;Introduction&lt;/h1&gt;
&lt;p&gt;Welcome to our API documentation!&lt;/p&gt;
&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile), and you can switch the programming language of the examples with the tabs in the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;&lt;h1&gt;Authenticating requests&lt;/h1&gt;
&lt;p&gt;This API is not authenticated.&lt;/p&gt;&lt;h1&gt;Donation Management&lt;/h1&gt;
&lt;h2&gt;Display the specified resource.&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/api/donation/{id}?id=veniam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/donation/{id}"
);

let params = {
    "id": "veniam",
};
Object.keys(params)
    .forEach(key =&amp;gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/donation/{id}&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h4 class="fancy-heading-panel"&gt;&lt;b&gt;Query Parameters&lt;/b&gt;&lt;/h4&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;id&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The id of the Donation data.&lt;/p&gt;
&lt;h2&gt;Store a newly created resource in storage.&lt;/h2&gt;
&lt;p&gt;@bodyParam    state string required The state of the Donation data.&lt;/p&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X POST \
    "http://localhost/api/donation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"donor_name":"repudiandae","donation_details":"dolore","donation_type":"aliquam","donation_amount":"illum","source":"recusandae"}'
&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/donation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "donor_name": "repudiandae",
    "donation_details": "dolore",
    "donation_type": "aliquam",
    "donation_amount": "illum",
    "source": "recusandae"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-black"&gt;POST&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/donation&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h4 class="fancy-heading-panel"&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donor_name&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donor_name of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donation_details&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donation_details of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donation_type&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donation_type of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donation_amount&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donation_amount of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;source&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The source of the Donation data.&lt;/p&gt;
&lt;h2&gt;Update the specified resource in storage.&lt;/h2&gt;
&lt;p&gt;@queryParam    id required The id of the Donation data.&lt;/p&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X PUT \
    "http://localhost/api/donation/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state":"accusamus","donor_name":"explicabo","donation_details":"non","donation_type":"eum","donation_amount":"incidunt","source":"sunt"}'
&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/donation/{id}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "state": "accusamus",
    "donor_name": "explicabo",
    "donation_details": "non",
    "donation_type": "eum",
    "donation_amount": "incidunt",
    "source": "sunt"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-darkblue"&gt;PUT&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/donation/{id}&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h4 class="fancy-heading-panel"&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;state&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The state of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donor_name&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donor_name of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donation_details&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donation_details of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donation_type&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donation_type of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;donation_amount&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The donation_amount of the Donation data.&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;source&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The source of the Donation data.&lt;/p&gt;
&lt;h2&gt;Remove the specified resource from storage.&lt;/h2&gt;
&lt;p&gt;@queryParam    id required The id of the Donation data.&lt;/p&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X DELETE \
    "http://localhost/api/donation/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/donation/{id}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-red"&gt;DELETE&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/donation/{id}&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;&lt;h1&gt;Endpoints&lt;/h1&gt;
&lt;h2&gt;docs.json&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/docs.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/docs.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;blockquote&gt;
&lt;p&gt;Example response (200):&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-json"&gt;{
    "variable": [],
    "info": {
        "name": "Laravel API",
        "_postman_id": "afd7eb11-a072-443b-8a73-4feb15edba56",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.1.0\/collection.json"
    },
    "item": [
        {
            "name": "Donation Management",
            "description": "",
            "item": [
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation\/:id",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "aliquam",
                                    "description": "The id of the Donation data.",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/donation\/:id?id=aliquam"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/donation"
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"donor_name\": \"odio\",\n    \"donation_details\": \"officia\",\n    \"donation_type\": \"occaecati\",\n    \"donation_amount\": \"molestiae\",\n    \"source\": \"alias\"\n}"
                        },
                        "description": "@bodyParam    state string required The state of the Donation data.",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation\/:id",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/donation\/:id"
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"state\": \"possimus\",\n    \"donor_name\": \"reprehenderit\",\n    \"donation_details\": \"fugiat\",\n    \"donation_type\": \"quibusdam\",\n    \"donation_amount\": \"quo\",\n    \"source\": \"non\"\n}"
                        },
                        "description": "@queryParam    id required The id of the Donation data.",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation\/:id",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/donation\/:id"
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "@queryParam    id required The id of the Donation data.",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        },
        {
            "name": "Endpoints",
            "description": "",
            "item": [
                {
                    "name": "docs.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "docs.json",
                            "query": [],
                            "raw": "http:\/\/localhost\/docs.json"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "docs.openapi",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "docs.openapi",
                            "query": [],
                            "raw": "http:\/\/localhost\/docs.openapi"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "api\/user",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/user",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/user"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "api\/documentation",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/documentation",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/documentation"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/donation",
                            "query": [
                                {
                                    "key": "state",
                                    "value": "velit",
                                    "description": "string State ID. Example lagos",
                                    "disabled": false
                                },
                                {
                                    "key": "count",
                                    "value": "11",
                                    "description": "int The number of records to return. Example 10\n\n @group    Donation Management",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/donation?state=velit&amp;amp;count=11"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "\/",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "\/",
                            "query": [],
                            "raw": "http:\/\/localhost\/\/"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        },
        {
            "name": "Media Management",
            "description": "",
            "item": [
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/media"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "@queryParam    state string State ID. Example lagos",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media\/:id",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "iste",
                                    "description": "The id of the Media data.",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/media\/:id?id=iste"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/media"
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"image\": \"dolore\"\n}"
                        },
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/media\/:id",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "qui",
                                    "description": "The id of the Media data.",
                                    "disabled": false
                                }
                            ],
                            "raw": "http:\/\/localhost\/api\/media\/:id?id=qui"
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        }
    ],
    "auth": {
        "type": "noauth"
    }
}&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;docs.json&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h2&gt;docs.openapi&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/docs.openapi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/docs.openapi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;docs.openapi&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h2&gt;api/user&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;blockquote&gt;
&lt;p&gt;Example response (401):&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-json"&gt;{
    "message": "Unauthenticated."
}&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/user&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h2&gt;api/documentation&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/api/documentation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/documentation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;blockquote&gt;
&lt;p&gt;Example response (500):&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-json"&gt;{
    "message": "View [scribe.index] not found.",
    "exception": "InvalidArgumentException",
    "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/View\/FileViewFinder.php",
    "line": 137,
    "trace": [
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/View\/FileViewFinder.php",
            "line": 79,
            "function": "findInPaths",
            "class": "Illuminate\\View\\FileViewFinder",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/View\/Factory.php",
            "line": 138,
            "function": "find",
            "class": "Illuminate\\View\\FileViewFinder",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/helpers.php",
            "line": 897,
            "function": "make",
            "class": "Illuminate\\View\\Factory",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/app\/Http\/Controllers\/DocumentationController.php",
            "line": 11,
            "function": "view"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "index",
            "class": "App\\Http\\Controllers\\DocumentationController",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 255,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 691,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 229,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 167,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 125,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/symfony\/console\/Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/symfony\/console\/Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/symfony\/console\/Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&amp;gt;"
        },
        {
            "file": "\/home\/bolarin\/Documents\/covid-tracka-api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&amp;gt;"
        }
    ]
}&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/documentation&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h2&gt;Display a listing of the resource.&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/api/donation?state=maxime&amp;amp;count=15" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/donation"
);

let params = {
    "state": "maxime",
    "count": "15",
};
Object.keys(params)
    .forEach(key =&amp;gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;blockquote&gt;
&lt;p&gt;Example response (200):&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-json"&gt;{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/donation?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/donation?page=1",
    "links": [
        {
            "url": null,
            "label": "&amp;amp;laquo; Previous",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/donation?page=1",
            "label": 1,
            "active": true
        },
        {
            "url": null,
            "label": "Next &amp;amp;raquo;",
            "active": false
        }
    ],
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/donation",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/donation&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h4 class="fancy-heading-panel"&gt;&lt;b&gt;Query Parameters&lt;/b&gt;&lt;/h4&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;state&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;         &lt;i&gt;optional&lt;/i&gt;    &lt;br&gt;
string State ID. Example lagos&lt;/p&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;count&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;         &lt;i&gt;optional&lt;/i&gt;    &lt;br&gt;
int The number of records to return. Example 10&lt;/p&gt;
&lt;p&gt;@group    Donation Management&lt;/p&gt;
&lt;h2&gt;/&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;blockquote&gt;
&lt;p&gt;Example response (200):&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-json"&gt;
&amp;lt;!DOCTYPE html&amp;gt;
&amp;lt;html lang="en"&amp;gt;
    &amp;lt;head&amp;gt;
        &amp;lt;meta charset="utf-8"&amp;gt;
        &amp;lt;meta name="viewport" content="width=device-width, initial-scale=1"&amp;gt;

        &amp;lt;title&amp;gt;Laravel&amp;lt;/title&amp;gt;

        &amp;lt;!-- Fonts --&amp;gt;
        &amp;lt;link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;amp;display=swap" rel="stylesheet"&amp;gt;

        &amp;lt;!-- Styles --&amp;gt;
        &amp;lt;style&amp;gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &amp;lt;/style&amp;gt;

        &amp;lt;style&amp;gt;
            body {
                font-family: 'Nunito';
            }
        &amp;lt;/style&amp;gt;
    &amp;lt;/head&amp;gt;
    &amp;lt;body class="antialiased"&amp;gt;
        &amp;lt;div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"&amp;gt;

            &amp;lt;div class="max-w-6xl mx-auto sm:px-6 lg:px-8"&amp;gt;
                &amp;lt;div class="flex justify-center pt-8 sm:justify-start sm:pt-0"&amp;gt;
                    &amp;lt;svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20"&amp;gt;
                        &amp;lt;g clip-path="url(#clip0)" fill="#EF3B2D"&amp;gt;
                            &amp;lt;path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/&amp;gt;
                        &amp;lt;/g&amp;gt;
                    &amp;lt;/svg&amp;gt;
                &amp;lt;/div&amp;gt;

                &amp;lt;div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg"&amp;gt;
                    &amp;lt;div class="grid grid-cols-1 md:grid-cols-2"&amp;gt;
                        &amp;lt;div class="p-6"&amp;gt;
                            &amp;lt;div class="flex items-center"&amp;gt;
                                &amp;lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&amp;gt;&amp;lt;path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"&amp;gt;&amp;lt;/path&amp;gt;&amp;lt;/svg&amp;gt;
                                &amp;lt;div class="ml-4 text-lg leading-7 font-semibold"&amp;gt;&amp;lt;a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white"&amp;gt;Documentation&amp;lt;/a&amp;gt;&amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;

                            &amp;lt;div class="ml-12"&amp;gt;
                                &amp;lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&amp;gt;
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                &amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;
                        &amp;lt;/div&amp;gt;

                        &amp;lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l"&amp;gt;
                            &amp;lt;div class="flex items-center"&amp;gt;
                                &amp;lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&amp;gt;&amp;lt;path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"&amp;gt;&amp;lt;/path&amp;gt;&amp;lt;path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"&amp;gt;&amp;lt;/path&amp;gt;&amp;lt;/svg&amp;gt;
                                &amp;lt;div class="ml-4 text-lg leading-7 font-semibold"&amp;gt;&amp;lt;a href="https://laracasts.com" class="underline text-gray-900 dark:text-white"&amp;gt;Laracasts&amp;lt;/a&amp;gt;&amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;

                            &amp;lt;div class="ml-12"&amp;gt;
                                &amp;lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&amp;gt;
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                &amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;
                        &amp;lt;/div&amp;gt;

                        &amp;lt;div class="p-6 border-t border-gray-200 dark:border-gray-700"&amp;gt;
                            &amp;lt;div class="flex items-center"&amp;gt;
                                &amp;lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&amp;gt;&amp;lt;path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"&amp;gt;&amp;lt;/path&amp;gt;&amp;lt;/svg&amp;gt;
                                &amp;lt;div class="ml-4 text-lg leading-7 font-semibold"&amp;gt;&amp;lt;a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white"&amp;gt;Laravel News&amp;lt;/a&amp;gt;&amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;

                            &amp;lt;div class="ml-12"&amp;gt;
                                &amp;lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&amp;gt;
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                &amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;
                        &amp;lt;/div&amp;gt;

                        &amp;lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l"&amp;gt;
                            &amp;lt;div class="flex items-center"&amp;gt;
                                &amp;lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&amp;gt;&amp;lt;path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"&amp;gt;&amp;lt;/path&amp;gt;&amp;lt;/svg&amp;gt;
                                &amp;lt;div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"&amp;gt;Vibrant Ecosystem&amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;

                            &amp;lt;div class="ml-12"&amp;gt;
                                &amp;lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&amp;gt;
                                    Laravel's robust library of first-party tools and libraries, such as &amp;lt;a href="https://forge.laravel.com" class="underline"&amp;gt;Forge&amp;lt;/a&amp;gt;, &amp;lt;a href="https://vapor.laravel.com" class="underline"&amp;gt;Vapor&amp;lt;/a&amp;gt;, &amp;lt;a href="https://nova.laravel.com" class="underline"&amp;gt;Nova&amp;lt;/a&amp;gt;, and &amp;lt;a href="https://envoyer.io" class="underline"&amp;gt;Envoyer&amp;lt;/a&amp;gt; help you take your projects to the next level. Pair them with powerful open source libraries like &amp;lt;a href="https://laravel.com/docs/billing" class="underline"&amp;gt;Cashier&amp;lt;/a&amp;gt;, &amp;lt;a href="https://laravel.com/docs/dusk" class="underline"&amp;gt;Dusk&amp;lt;/a&amp;gt;, &amp;lt;a href="https://laravel.com/docs/broadcasting" class="underline"&amp;gt;Echo&amp;lt;/a&amp;gt;, &amp;lt;a href="https://laravel.com/docs/horizon" class="underline"&amp;gt;Horizon&amp;lt;/a&amp;gt;, &amp;lt;a href="https://laravel.com/docs/sanctum" class="underline"&amp;gt;Sanctum&amp;lt;/a&amp;gt;, &amp;lt;a href="https://laravel.com/docs/telescope" class="underline"&amp;gt;Telescope&amp;lt;/a&amp;gt;, and more.
                                &amp;lt;/div&amp;gt;
                            &amp;lt;/div&amp;gt;
                        &amp;lt;/div&amp;gt;
                    &amp;lt;/div&amp;gt;
                &amp;lt;/div&amp;gt;

                &amp;lt;div class="flex justify-center mt-4 sm:items-center sm:justify-between"&amp;gt;
                    &amp;lt;div class="text-center text-sm text-gray-500 sm:text-left"&amp;gt;
                        &amp;lt;div class="flex items-center"&amp;gt;
                            &amp;lt;svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400"&amp;gt;
                                &amp;lt;path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"&amp;gt;&amp;lt;/path&amp;gt;
                            &amp;lt;/svg&amp;gt;

                            &amp;lt;a href="https://laravel.bigcartel.com" class="ml-1 underline"&amp;gt;
                                Shop
                            &amp;lt;/a&amp;gt;

                            &amp;lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400"&amp;gt;
                                &amp;lt;path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"&amp;gt;&amp;lt;/path&amp;gt;
                            &amp;lt;/svg&amp;gt;

                            &amp;lt;a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline"&amp;gt;
                                Sponsor
                            &amp;lt;/a&amp;gt;
                        &amp;lt;/div&amp;gt;
                    &amp;lt;/div&amp;gt;

                    &amp;lt;div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0"&amp;gt;
                        Build v8.11.2
                    &amp;lt;/div&amp;gt;
                &amp;lt;/div&amp;gt;
            &amp;lt;/div&amp;gt;
        &amp;lt;/div&amp;gt;
    &amp;lt;/body&amp;gt;
&amp;lt;/html&amp;gt;
&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;/&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;&lt;h1&gt;Media Management&lt;/h1&gt;
&lt;h2&gt;Display a listing of the resource.&lt;/h2&gt;
&lt;p&gt;@queryParam    state string State ID. Example lagos&lt;/p&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;blockquote&gt;
&lt;p&gt;Example response (200):&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-json"&gt;
[]&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/media&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h2&gt;Display the specified resource.&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X GET \
    -G "http://localhost/api/media/{id}?id=nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/media/{id}"
);

let params = {
    "id": "nihil",
};
Object.keys(params)
    .forEach(key =&amp;gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-green"&gt;GET&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/media/{id}&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h4 class="fancy-heading-panel"&gt;&lt;b&gt;Query Parameters&lt;/b&gt;&lt;/h4&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;id&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The id of the Media data.&lt;/p&gt;
&lt;h2&gt;Store a newly created resource in storage.&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X POST \
    "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"image":"quia"}'
&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "image": "quia"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-black"&gt;POST&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/media&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h4 class="fancy-heading-panel"&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;image&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The file_path of the Media data.&lt;/p&gt;
&lt;h2&gt;Remove the specified resource from storage.&lt;/h2&gt;
&lt;blockquote&gt;
&lt;p&gt;Example request:&lt;/p&gt;
&lt;/blockquote&gt;
&lt;pre&gt;&lt;code class="language-bash"&gt;curl -X DELETE \
    "http://localhost/api/media/{id}?id=quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"&lt;/code&gt;&lt;/pre&gt;
&lt;pre&gt;&lt;code class="language-javascript"&gt;const url = new URL(
    "http://localhost/api/media/{id}"
);

let params = {
    "id": "quis",
};
Object.keys(params)
    .forEach(key =&amp;gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&amp;gt; response.json())
    .then(json =&amp;gt; console.log(json));&lt;/code&gt;&lt;/pre&gt;
&lt;h3&gt;Request&lt;/h3&gt;
&lt;p&gt;&lt;small class="badge badge-red"&gt;DELETE&lt;/small&gt;
&lt;strong&gt;&lt;code&gt;api/media/{id}&lt;/code&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;h4 class="fancy-heading-panel"&gt;&lt;b&gt;Query Parameters&lt;/b&gt;&lt;/h4&gt;
&lt;p&gt;&lt;code&gt;&lt;b&gt;id&lt;/b&gt;&lt;/code&gt;&amp;nbsp; &lt;small&gt;string&lt;/small&gt;     &lt;br&gt;
The id of the Media data.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="dark-box"&gt;
                    &lt;div class="lang-selector"&gt;
                                    &lt;a href="#" data-language-name="bash"&gt;bash&lt;/a&gt;
                                    &lt;a href="#" data-language-name="javascript"&gt;javascript&lt;/a&gt;
                            &lt;/div&gt;
            &lt;/div&gt;
&lt;/div&gt;
&lt;script&gt;
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/documentation</code></strong></p>
<h2>/</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet"&gt;

        &lt;!-- Styles --&gt;
        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: 'Nunito';
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class="antialiased"&gt;
        &lt;div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"&gt;

            &lt;div class="max-w-6xl mx-auto sm:px-6 lg:px-8"&gt;
                &lt;div class="flex justify-center pt-8 sm:justify-start sm:pt-0"&gt;
                    &lt;svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20"&gt;
                        &lt;g clip-path="url(#clip0)" fill="#EF3B2D"&gt;
                            &lt;path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/&gt;
                        &lt;/g&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;

                &lt;div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg"&gt;
                    &lt;div class="grid grid-cols-1 md:grid-cols-2"&gt;
                        &lt;div class="p-6"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white"&gt;Documentation&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"&gt;&lt;/path&gt;&lt;path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laracasts.com" class="underline text-gray-900 dark:text-white"&gt;Laracasts&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold"&gt;&lt;a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white"&gt;Laravel News&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"&gt;&lt;path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"&gt;Vibrant Ecosystem&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="ml-12"&gt;
                                &lt;div class="mt-2 text-gray-600 dark:text-gray-400 text-sm"&gt;
                                    Laravel's robust library of first-party tools and libraries, such as &lt;a href="https://forge.laravel.com" class="underline"&gt;Forge&lt;/a&gt;, &lt;a href="https://vapor.laravel.com" class="underline"&gt;Vapor&lt;/a&gt;, &lt;a href="https://nova.laravel.com" class="underline"&gt;Nova&lt;/a&gt;, and &lt;a href="https://envoyer.io" class="underline"&gt;Envoyer&lt;/a&gt; help you take your projects to the next level. Pair them with powerful open source libraries like &lt;a href="https://laravel.com/docs/billing" class="underline"&gt;Cashier&lt;/a&gt;, &lt;a href="https://laravel.com/docs/dusk" class="underline"&gt;Dusk&lt;/a&gt;, &lt;a href="https://laravel.com/docs/broadcasting" class="underline"&gt;Echo&lt;/a&gt;, &lt;a href="https://laravel.com/docs/horizon" class="underline"&gt;Horizon&lt;/a&gt;, &lt;a href="https://laravel.com/docs/sanctum" class="underline"&gt;Sanctum&lt;/a&gt;, &lt;a href="https://laravel.com/docs/telescope" class="underline"&gt;Telescope&lt;/a&gt;, and more.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class="flex justify-center mt-4 sm:items-center sm:justify-between"&gt;
                    &lt;div class="text-center text-sm text-gray-500 sm:text-left"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400"&gt;
                                &lt;path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href="https://laravel.bigcartel.com" class="ml-1 underline"&gt;
                                Shop
                            &lt;/a&gt;

                            &lt;svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400"&gt;
                                &lt;path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline"&gt;
                                Sponsor
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0"&gt;
                        Build v8.11.2
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>/</code></strong></p><h1>Media Management</h1>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
[]</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/media</code></strong></p>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/media/{id}?id=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media/{id}"
);

let params = {
    "id": "in",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/media/{id}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p><code><b>id</b></code>&nbsp; <small>string</small>     <br>
The id of the Media data.</p>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"image":"molestias"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "image": "molestias"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/media</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>image</b></code>&nbsp; <small>string</small>     <br>
The file_path of the Media data.</p>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/media/{id}?id=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media/{id}"
);

let params = {
    "id": "id",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-red">DELETE</small>
<strong><code>api/media/{id}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p><code><b>id</b></code>&nbsp; <small>string</small>     <br>
The id of the Media data.</p><h1>Statistics Management</h1>
<h2>Display a listing and total sum of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/stats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stats"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "Confirmed": 4,
    "Active": 11,
    "Recovery": 4,
    "All stats record": [
        {
            "id": 1,
            "state_id": 1,
            "created_at": "2020-11-02T10:45:32.000000Z",
            "updated_at": "2020-11-02T10:45:32.000000Z",
            "confirmed_cases": 2,
            "active_cases": 9,
            "recovery": 2
        },
        {
            "id": 2,
            "state_id": 2,
            "created_at": "2020-11-02T10:45:43.000000Z",
            "updated_at": "2020-11-02T10:45:43.000000Z",
            "confirmed_cases": 2,
            "active_cases": 2,
            "recovery": 2
        }
    ]
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/stats</code></strong></p>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/stats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state_id":15,"confirmed_cases":20,"active_cases":2,"recovery":7}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stats"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "state_id": 15,
    "confirmed_cases": 20,
    "active_cases": 2,
    "recovery": 7
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/stats</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>state_id</b></code>&nbsp; <small>integer</small>     <br>
The state of the Statistic data.</p>
<p><code><b>confirmed_cases</b></code>&nbsp; <small>integer</small>     <br>
The confirmed_cases of the Statistic data.</p>
<p><code><b>active_cases</b></code>&nbsp; <small>integer</small>     <br>
The active_cases of the Statistic data.</p>
<p><code><b>recovery</b></code>&nbsp; <small>integer</small>     <br>
The recovery of the Statistic data.</p>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/stats/{id}?id=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "ea",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/stats/{id}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p><code><b>id</b></code>&nbsp; <small>string</small>     <br>
The id of the Statistics data.</p>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/stats/{id}?id=ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state_id":15,"confirmed_cases":18,"active_cases":7,"recovery":4}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "ipsum",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "state_id": 15,
    "confirmed_cases": 18,
    "active_cases": 7,
    "recovery": 4
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-darkblue">PUT</small>
<strong><code>api/stats/{id}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p><code><b>id</b></code>&nbsp; <small>string</small>     <br>
The id of the Statistics data.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>state_id</b></code>&nbsp; <small>integer</small>     <br>
The state of the Statistic data.</p>
<p><code><b>confirmed_cases</b></code>&nbsp; <small>integer</small>     <br>
The confirmed_cases of the Statistic data.</p>
<p><code><b>active_cases</b></code>&nbsp; <small>integer</small>     <br>
The active_cases of the Statistic data.</p>
<p><code><b>recovery</b></code>&nbsp; <small>integer</small>     <br>
The recovery of the Statistic data.</p>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/stats/{id}?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "et",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-red">DELETE</small>
<strong><code>api/stats/{id}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p><code><b>id</b></code>&nbsp; <small>string</small>     <br>
The id of the Statistics data.</p>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>