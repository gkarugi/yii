# Setup
- Run git clone this repository
- CD into the project directory and run composer install 
- Set up db config
- Run yii migrate to setup DB tables
- Run yii serve to start the php inbuilt server, the app should be running on localhost:8080


# Usage
You should ensure the following headers are set so as to use the api:-
- Content-Type:application/json
- Accept:application/json

The endpoints include the following :-

## 1. /suppliers
### GET /suppliers
this will get a list of suppliers from the DB

### GET /suppliers/<id>
this will show a single supplier from the DB by using the id of the supplier

### POST /suppliers
this create a new supplier. JSON input is expected with the following  key , values

```
{
	"name": "test update"
}
```

### PUT /suppliers/<id>
this will update a supplier with the specified ID. You should supply the following input as the body

```
{
	"name": "test update"
}
```
### DELETE /suppliers/<id>
this will delete a supplier with the specified ID.

## 2. /products
### GET /products
this will get a list of products from the DB

### GET /products/<id>
this will show a single product from the DB by using the id of the product

### POST /products
this create a new product. JSON input is expected with the following  key , values

```
{
	"name": "test update",
	"supplier_id": id (int)
}
```

### PUT /products/<id>
this will update a product with the specified ID. You should supply the following input as the body

```
{
	"name": "test update",
	"supplier_id": id (int)
}
```
### DELETE /products/<id>
this will delete a product with the specified ID.

## 3. /orders
### GET /orders
this will get a list of orders from the DB

### GET /orders/<id>
this will show a single order from the DB by using the id of the order

### POST /orders
this create a new order. JSON input is expected with the following  key , values

```
{
	"order_date": "y-m-d",
	"headquarters_id": id (int)
}
```

### PUT /orders/<id>
this will update a order with the specified ID. You should supply the following input as the body

```
{
	"order_date": "y-m-d",
	"headquarters_id": id (int)
}
```
### DELETE /orders/<id>
this will delete a order with the specified ID.
