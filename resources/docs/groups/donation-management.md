# Donation Management


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/donation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/donation"
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
    "current_page": 1,
    "data": [
        {
            "id": 2,
            "state": "lagos",
            "donor_name": "moses",
            "donation_details": "get out",
            "donation_type": "covid",
            "donation_amount": "230499",
            "source": "https:\/\/xenodochial-mestorf-b59d88.netlify.app\/donations",
            "created_at": "2020-10-25T16:07:22.000000Z",
            "updated_at": "2020-10-25T16:07:22.000000Z"
        },
        {
            "id": 3,
            "state": "lagos",
            "donor_name": "moses",
            "donation_details": "get out",
            "donation_type": "covid",
            "donation_amount": "230499",
            "source": "https:\/\/xenodochial-mestorf-b59d88.netlify.app\/donations",
            "created_at": "2020-10-25T16:07:25.000000Z",
            "updated_at": "2020-10-25T16:07:25.000000Z"
        },
        {
            "id": 4,
            "state": "lago",
            "donor_name": "moses",
            "donation_details": "get out",
            "donation_type": "covid",
            "donation_amount": "230499",
            "source": "https:\/\/xenodochial-mestorf-b59d88.netlify.app\/donations",
            "created_at": "2020-10-25T16:24:22.000000Z",
            "updated_at": "2020-10-25T16:24:22.000000Z"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/donation?page=1",
    "from": 1,
    "last_page": 2,
    "last_page_url": "http:\/\/localhost\/api\/donation?page=2",
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
            "url": "http:\/\/localhost\/api\/donation?page=2",
            "label": 2,
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/donation?page=2",
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "next_page_url": "http:\/\/localhost\/api\/donation?page=2",
    "path": "http:\/\/localhost\/api\/donation",
    "per_page": 3,
    "prev_page_url": null,
    "to": 3,
    "total": 6
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/donation`**



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
    -d '{"donor_name":"eaque","donation_details":"ad","donation_type":"natus","donation_amount":"aut","source":"ut"}'

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
    "donor_name": "eaque",
    "donation_details": "ad",
    "donation_type": "natus",
    "donation_amount": "aut",
    "source": "ut"
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
    -d '{"state":"non","donor_name":"ut","donation_details":"quia","donation_type":"aut","donation_amount":"distinctio","source":"odio"}'

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
    "state": "non",
    "donor_name": "ut",
    "donation_details": "quia",
    "donation_type": "aut",
    "donation_amount": "distinctio",
    "source": "odio"
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




