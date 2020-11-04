# Document Management


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/document"
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
[
    {
        "id": 1,
        "name": "moses",
        "file_name": "name.csv",
        "file_url": "file\/name.csv",
        "file_size": "19073",
        "created_at": "2020-11-04T10:37:36.000000Z",
        "updated_at": "2020-11-04T10:37:36.000000Z"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`api/document`**



## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/document/{id}?id=cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/document/{id}"
);

let params = {
    "id": "cum",
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
 **`api/document/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Document data.



## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file":"a","name":"voluptate"}'

```

```javascript
const url = new URL(
    "http://localhost/api/document"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file": "a",
    "name": "voluptate"
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
 **`api/document`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>file</b></code>&nbsp; <small>string</small>     <br>
    The uploaded file.

<code><b>name</b></code>&nbsp; <small>string</small>     <br>
    The uploaded file name given by the user.



## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/document/{id}?id=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/document/{id}"
);

let params = {
    "id": "eos",
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
 **`api/document/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Document data.




