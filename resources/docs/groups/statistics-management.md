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
    -d '{"state_id":15,"confirmed_cases":20,"active_cases":2,"recovery":7}'

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
    -G "http://localhost/api/stats/{id}?id=ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "ea",
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
    "http://localhost/api/stats/{id}?id=ipsum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state_id":15,"confirmed_cases":18,"active_cases":7,"recovery":4}'

```

```javascript
const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "ipsum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    "http://localhost/api/stats/{id}?id=et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/stats/{id}"
);

let params = {
    "id": "et",
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




