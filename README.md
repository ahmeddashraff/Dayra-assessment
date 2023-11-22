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


### 2. Login
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
- Status: 400 (If not correct)

### 3. Authorize user
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
- Status: 401 (unauthenticated)

#### 2. Get Note By ID
**URL:** /api/notes/{id}<br>
**Method:** GET<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:** None

**Response:**<br>
- Status: 200 OK
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
    "content":"ingredients: cheese, tomato sauce"
}
```
**Response:**<br>
- Status: 200 OK
- Status: 401 (unauthenticated)


#### 5. Delete Note
**URL:** /api/notes/{id}<br>
**Method:** DELETE<br>
**Headers:** <br>
- Authorization: <access_token> <br>
**Request Body:** None
**Response:**<br>
- Status: 200 OK
- Status: 401 (unauthenticated)
