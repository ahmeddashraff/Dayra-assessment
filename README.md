# Dayra-assessment




## API Reference

### User Authentication Microservice:

#### 1. Register
**URL:** /api/register<br>
**Method:** POST<br>
**Request Body:**
```json
{
  "name":"mohamed",
  "email":"mohamed@gmail.com",
  "password":"test123",
}
```
**Response:**<br>
- Status: 200 OK
```json
"status": "success",
"user": {
    "id": 1,
    "name": "atef",
    "email": "atef@yahoo.com",
    "created_at": "2023-11-22T05:22:22.000000Z",
    "updated_at": "2023-11-22T05:22:22.000000Z"
},
"authorization": {
    "token": <access_token>,
    "type": "Bearer"
}
```


#### 2. Login
**URL:** /api/login<br>
**Method:** POST<br>
**Request Body:**
```json
{
  "email":"mohamed",
  "password":"test123"
}
```
**Response:**<br>
- Status: 200 OK (If correct)
```json
"status": "success",
    "user": {
        "id": 1,
        "name": "atef",
        "email": "atef@yahoo.com",
        "email_verified_at": null,
        "created_at": "2023-11-22T05:22:22.000000Z",
        "updated_at": "2023-11-22T05:22:22.000000Z"
    },
    "authorization": {
        "token": <access_token>,
        "type": "Bearer"
    }
```
- Status: 401 (wrong credentials)

#### 3. Authorize user
**URL:** /api/authorize<br>
**Method:** GET<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:** None

**Response:**<br>
- Status: 200 OK (If correct)
- Status: 401 (unauthenticated)


### User Authentication Microservice:

#### 1. Get All Notes
**URL:** /api/notes<br>
**Method:** GET<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:** None

**Response:**<br>
- Status: 200 OK
```json
"notes": [
        {
            "id": 1,
            "title": "ayhaga",
            "content": "hello world",
            "user_id": 1
        },
        {
            "id": 7,
            "title": "ayhaga",
            "content": "hela hoppa",
            "user_id": 1
        }
    ]
    ```
- Status: 401 (unauthenticated)

#### 2. Get Note By ID
**URL:** /api/notes/{id}<br>
**Method:** GET<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:** None

**Response:**<br>
- Status: 200 OK
```json

    "note": {
        "id": 1,
        "title": "ayhaga",
        "content": "hello world",
        "user_id": 1
    }
    ```
- Status: 401 (unauthenticated)

#### 3. Create Note
**URL:** /api/notes/{id}<br>
**Method:** GET<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:**
```json
{
    "title":"pizza recipe",
    "content":"ingredients: cheese, tomato sauce"
}
```
**Response:**<br>
- Status: 200 OK
```json
    "note": {
        "title": "ayhaga",
        "content": "hela hoppa",
        "user_id": 1,
        "id": 7
    }
```
- Status: 401 (unauthenticated)


#### 4. Update Note
**URL:** /api/notes/{id}<br>
**Method:** PUT<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:**
```json
{
    "title":"pizza recipe",
    "content":"ingredients: cheese"
}
```
**Response:**<br>
- Status: 200 OK
```json
{
    "id": 6,
    "title":"pizza recipe",
    "content":"ingredients: cheese"
    "user_id": 1
}
```
- Status: 401 (unauthenticated)


#### 5. Delete Note
**URL:** /api/notes/{id}<br>
**Method:** DELETE<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:** None
**Response:**<br>
- Status: 200 OK
```json
{
    "message": "Note deleted successfully"
}
```
- Status: 401 (unauthenticated)
