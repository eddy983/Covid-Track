# Donation Management


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/donation?state=dolores&count=19" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/donation"
);

let params = {
    "state": "dolores",
    "count": "19",
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


> Example response (200):

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/donation?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/donation?page=1",
    "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/donation?page=1",
            "label": 1,
            "active": true
        },
        {
            "url": null,
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/donation",
    "per_page": 19,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/donation`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>state</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    string State ID. Example lagos

<code><b>count</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    int The number of records to return. Example 10



## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/donation/{id}?id=qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/donation/{id}"
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


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-green">GET</small>
 **`api/donation/{id}`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>id</b></code>&nbsp; <small>string</small>     <br>
    The id of the Donation data.



## Store a newly created resource in storage.


@bodyParam  state string required The state of the Donation data.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/donation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"donor_name":"magnam","donation_details":"aspernatur","donation_type":"nesciunt","donation_amount":"esse","source":"consequatur"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-black">POST</small>
 **`api/donation`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>donor_name</b></code>&nbsp; <small>string</small>     <br>
    The donor_name of the Donation data.

<code><b>donation_details</b></code>&nbsp; <small>string</small>     <br>
    The donation_details of the Donation data.

<code><b>donation_type</b></code>&nbsp; <small>string</small>     <br>
    The donation_type of the Donation data.

<code><b>donation_amount</b></code>&nbsp; <small>string</small>     <br>
    The donation_amount of the Donation data.

<code><b>source</b></code>&nbsp; <small>string</small>     <br>
    The source of the Donation data.



## Update the specified resource in storage.


@queryParam  id required The id of the Donation data.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/donation/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"state":"architecto","donor_name":"laborum","donation_details":"repellat","donation_type":"officia","donation_amount":"quam","source":"ut"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/donation/{id}`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>state</b></code>&nbsp; <small>string</small>     <br>
    The state of the Donation data.

<code><b>donor_name</b></code>&nbsp; <small>string</small>     <br>
    The donor_name of the Donation data.

<code><b>donation_details</b></code>&nbsp; <small>string</small>     <br>
    The donation_details of the Donation data.

<code><b>donation_type</b></code>&nbsp; <small>string</small>     <br>
    The donation_type of the Donation data.

<code><b>donation_amount</b></code>&nbsp; <small>string</small>     <br>
    The donation_amount of the Donation data.

<code><b>source</b></code>&nbsp; <small>string</small>     <br>
    The source of the Donation data.



## Remove the specified resource from storage.


@queryParam  id required The id of the Donation data.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/donation/{id}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### Request
<small class="badge badge-red">DELETE</small>
 **`api/donation/{id}`**




