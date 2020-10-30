# Media Management


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json

[]
```

### Request
<small class="badge badge-green">GET</small>
 **`api/media`**



## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/media/{id}?id=in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/media/{id}"
);

let params = {
    "id": "in",
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
 **`api/media/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Media data.



## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"image":"molestias"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/media`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>image</b></code>&nbsp; <small>string</small>     <br>
    The file_path of the Media data.



## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/media/{id}?id=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/media/{id}"
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
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-red">DELETE</small>
 **`api/media/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Media data.




