# Statistics Management


## Display a listing and total sum of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/stats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "Confirmed": 0,
    "Active": 0,
    "Recovery": 0,
    "All stats record": []
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/stats`**



## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/stats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state_id":13,"confirmed_cases":9,"active_cases":7,"recovery":20}'

```

```javascript
const url = new URL(
    "http://localhost/api/stats"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "state_id": 13,
    "confirmed_cases": 9,
    "active_cases": 7,
    "recovery": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/stats`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>state_id</b></code>&nbsp; <small>integer</small>     <br>
    The state of the Statistic data.

<code><b>confirmed_cases</b></code>&nbsp; <small>integer</small>     <br>
    The confirmed_cases of the Statistic data.

<code><b>active_cases</b></code>&nbsp; <small>integer</small>     <br>
    The active_cases of the Statistic data.

<code><b>recovery</b></code>&nbsp; <small>integer</small>     <br>
    The recovery of the Statistic data.



## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/stats/{id}?id=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "id",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-green">GET</small>
 **`api/stats/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Statistics data.



## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/stats/{id}?id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state_id":5,"confirmed_cases":14,"active_cases":5,"recovery":14}'

```

```javascript
const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "qui",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "state_id": 5,
    "confirmed_cases": 14,
    "active_cases": 5,
    "recovery": 14
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/stats/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Statistics data.

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>state_id</b></code>&nbsp; <small>integer</small>     <br>
    The state of the Statistic data.

<code><b>confirmed_cases</b></code>&nbsp; <small>integer</small>     <br>
    The confirmed_cases of the Statistic data.

<code><b>active_cases</b></code>&nbsp; <small>integer</small>     <br>
    The active_cases of the Statistic data.

<code><b>recovery</b></code>&nbsp; <small>integer</small>     <br>
    The recovery of the Statistic data.



## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/stats/{id}?id=vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "vero",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-red">DELETE</small>
 **`api/stats/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Statistics data.




