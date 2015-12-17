# Drinks #

### `GET` /api/drinks.{_format} ###

_Returns all drinks_

#### Requirements ####

**_format**

  - Requirement: xml|json|html


### `POST` /api/drinks.{_format} ###

_Creates new Drink_

#### Requirements ####

**_format**

  - Requirement: xml|json|html

#### Parameters ####

app_bundle_drink:

  * type: object (DrinkType)
  * required: true

app_bundle_drink[name]:

  * type: string
  * required: true

app_bundle_drink[image]:

  * type: string
  * required: true

app_bundle_drink[packagingCapacity]:

  * type: integer
  * required: true

app_bundle_drink[packagingAmount]:

  * type: integer
  * required: true

app_bundle_drink[packagingPrice]:

  * type: float
  * required: true

app_bundle_drink[alcVol]:

  * type: float
  * required: true

app_bundle_drink[rating]:

  * type: integer
  * required: true

app_bundle_drink[note]:

  * type: string
  * required: true


### `GET` /api/drinks/{id}.{_format} ###

_Returns drink by id_

#### Requirements ####

**_format**

  - Requirement: xml|json|html
**id**




# Users #

### `GET` /api/user.{_format} ###

_Returns user info_

#### Requirements ####

**_format**

  - Requirement: xml|json|html


### `POST` /api/users.{_format} ###

_Registers new user_

#### Requirements ####

**_format**

  - Requirement: xml|json|html

#### Parameters ####

fos_user_registration:

  * type: object (RegistrationFormType)
  * required: true

fos_user_registration[username]:

  * type: string
  * required: true
  * description: form.username

fos_user_registration[email]:

  * type: string
  * required: true
  * description: form.email

fos_user_registration[plainPassword]:

  * type: object (RepeatedType)
  * required: true

fos_user_registration[plainPassword][first]:

  * type: string
  * required: true
  * description: form.password

fos_user_registration[plainPassword][second]:

  * type: string
  * required: true
  * description: form.password_confirmation

# Usage examples #

### `GET` /api/drinks.{_format} ###

#### Request ####

```sh
$ curl 'http://backend.restapi.dev/api/drinks?access_token=MTM4N2RiZTlkNGQwNjU2MjZlYjJiMjZiYWFlMWZlZDkyZjUxYzFkMDA5YTNhYzEyMjc4YTM5Njk2NmFhN2NjYg'
```

#### Response ####

```json
[
  {
    "id": 1,
    "name": "\u0160vyturys Extra Draught",
    "image": "http:\/\/res.cloudinary.com\/vytacka\/image\/private\/s--lxowpYs3--\/v1450298424\/beerlogger\/figcdwjyjmprvlikrt1f.jpg",
    "created_at": "2015-12-16T21:40:52+0100",
    "packaging_capacity": 500,
    "packaging_amount": 1,
    "packaging_price": 0.82,
    "alc_vol": 5.2,
    "rating": 5,
    "note": "I bought this from my local supermarket just because I had tried several other beers from this company early in the history of the blog. I just want to complete the set. Pours a clear yellow color with a big white head. Pretty standard pilsner type smell, grass, little bit of hops and sweetness. A pretty smooth taste for a mass produced lager. Sweet taste of malt and a little adjunct weirdness with a decent but smooth bitter finish. A little too sweet for my tastes but not as bad as some other beers in this same category.",
    "user": {
      "id": 1,
      "username": "vytautas",
      "username_canonical": "vytautas",
      "email": "vytaciunas@gmail.com",
      "email_canonical": "vytaciunas@gmail.com",
      "enabled": true,
      "salt": "jf1glwjqbfccg44wwso44k0ckgcggk8",
      "password": "$2y$13$jf1glwjqbfccg44wwso44eTNZw8b54r2oOPB7If36KzkGMS0SSN9.",
      "last_login": "2015-12-17T11:39:38+0100",
      "groups": [],
      "locked": false,
      "expired": false,
      "roles": [],
      "credentials_expired": false
    }
  },
  {
    "id": 2,
    "name": "\u0160vyturys Amber",
    "image": "http:\/\/res.cloudinary.com\/vytacka\/image\/private\/s--WeV5X6hl--\/v1450366887\/beerlogger\/urgj11eivv0kjidhvuls.jpg",
    "created_at": "2015-12-17T16:41:32+0100",
    "packaging_capacity": 500,
    "packaging_amount": 1,
    "packaging_price": 0.72,
    "alc_vol": 4.6,
    "rating": 4,
    "note": "Not sure what is so amber about this beer. Pours a light yellow standard pilsner color. Small white head. Very sweet heavy malt and adjunct smell on the nose. The taste is much sweeter then I was expecting. Malt and corn syrupy sweetness with a very very light bitterness in the end. Not as watery as expected but still nothing of substance to it. All in all a pretty standard euro style lager, if a little too sweet.",
    "user": {
      "id": 1,
      "username": "vytautas",
      "username_canonical": "vytautas",
      "email": "vytaciunas@gmail.com",
      "email_canonical": "vytaciunas@gmail.com",
      "enabled": true,
      "salt": "jf1glwjqbfccg44wwso44k0ckgcggk8",
      "password": "$2y$13$jf1glwjqbfccg44wwso44eTNZw8b54r2oOPB7If36KzkGMS0SSN9.",
      "last_login": "2015-12-17T11:39:38+0100",
      "groups": [],
      "locked": false,
      "expired": false,
      "roles": [],
      "credentials_expired": false
    }
  }
]
```

### `GET` /api/drinks/{id}.{_format} ###

#### Request ####

```sh
$ curl 'http://backend.restapi.dev/api/drinks/1?access_token=MTM4N2RiZTlkNGQwNjU2MjZlYjJiMjZiYWFlMWZlZDkyZjUxYzFkMDA5YTNhYzEyMjc4YTM5Njk2NmFhN2NjYg'
```

#### Response ####

```json
{
  "id": 1,
  "name": "\u0160vyturys Extra Draught",
  "image": "http:\/\/res.cloudinary.com\/vytacka\/image\/private\/s--lxowpYs3--\/v1450298424\/beerlogger\/figcdwjyjmprvlikrt1f.jpg",
  "created_at": "2015-12-16T21:40:52+0100",
  "packaging_capacity": 500,
  "packaging_amount": 1,
  "packaging_price": 0.82,
  "alc_vol": 5.2,
  "rating": 5,
  "note": "I bought this from my local supermarket just because I had tried several other beers from this company early in the history of the blog. I just want to complete the set. Pours a clear yellow color with a big white head. Pretty standard pilsner type smell, grass, little bit of hops and sweetness. A pretty smooth taste for a mass produced lager. Sweet taste of malt and a little adjunct weirdness with a decent but smooth bitter finish. A little too sweet for my tastes but not as bad as some other beers in this same category.",
  "user": {
    "id": 1,
    "username": "vytautas",
    "username_canonical": "vytautas",
    "email": "vytaciunas@gmail.com",
    "email_canonical": "vytaciunas@gmail.com",
    "enabled": true,
    "salt": "jf1glwjqbfccg44wwso44k0ckgcggk8",
    "password": "$2y$13$jf1glwjqbfccg44wwso44eTNZw8b54r2oOPB7If36KzkGMS0SSN9.",
    "last_login": "2015-12-17T11:39:38+0100",
    "groups": [],
    "locked": false,
    "expired": false,
    "roles": [],
    "credentials_expired": false
  }
}
```

### `POST` /api/drinks.{_format} ###

#### Request ####

```sh
$ curl 'http://backend.restapi.dev/api/drinks?access_token=MTM4N2RiZTlkNGQwNjU2MjZlYjJiMjZiYWFlMWZlZDkyZjUxYzFkMDA5YTNhYzEyMjc4YTM5Njk2NmFhN2NjYg' \
  -H 'Content-Type: application/json;charset=UTF-8' \
  -d '{ "app_bundle_drink": {
          "name": "Tauras Pilsneris",
          "image": "http://res.cloudinary.com/vytacka/image/private/s--BuFO9GNa--/v1450390400/beerlogger/ovmmdc0jq406rjxuqm9q.jpg",
          "packagingCapacity": 500,
          "packagingAmount": 2,
          "packagingPrice": 0.58,
          "alcVol": 4.6,
          "note": "Not so bad",
          "rating": 6
        }
      }'
```

#### Response ####

```json
{
  "id": 3,
  "name": "Tauras Pilsneris",
  "image": "http://res.cloudinary.com/vytacka/image/private/s--BuFO9GNa--/v1450390400/beerlogger/ovmmdc0jq406rjxuqm9q.jpg",
  "created_at": "2015-12-17T23:28:42+0100",
  "packaging_capacity": 500,
  "packaging_amount": 2,
  "packaging_price": 0.58,
  "alc_vol": 4.6,
  "rating": 6,
  "note": "Not so bad",
  "user": {
    "id": 1,
    "username": "vytautas",
    "username_canonical": "vytautas",
    "email": "vytaciunas@gmail.com",
    "email_canonical": "vytaciunas@gmail.com",
    "enabled": true,
    "salt": "jf1glwjqbfccg44wwso44k0ckgcggk8",
    "password": "$2y$13$jf1glwjqbfccg44wwso44eTNZw8b54r2oOPB7If36KzkGMS0SSN9.",
    "last_login": "2015-12-17T11:39:38+0100",
    "groups": [],
    "locked": false,
    "expired": false,
    "roles": [],
    "credentials_expired": false
  }
}
```

### `GET` /api/user.{_format} ###

#### Request ####

```sh
$ curl 'http://backend.restapi.dev/api/user?access_token=MTM4N2RiZTlkNGQwNjU2MjZlYjJiMjZiYWFlMWZlZDkyZjUxYzFkMDA5YTNhYzEyMjc4YTM5Njk2NmFhN2NjYg'
```

#### Response ####

```json
{
  "id": 1,
  "username": "vytautas",
  "username_canonical": "vytautas",
  "email": "vytaciunas@gmail.com",
  "email_canonical": "vytaciunas@gmail.com",
  "enabled": true,
  "salt": "jf1glwjqbfccg44wwso44k0ckgcggk8",
  "password": "$2y$13$jf1glwjqbfccg44wwso44eTNZw8b54r2oOPB7If36KzkGMS0SSN9.",
  "last_login": "2015-12-17T11:39:38+0100",
  "groups": [],
  "locked": false,
  "expired": false,
  "roles": [],
  "credentials_expired": false
}
```

### `POST` /api/users.{_format} ###

#### Request ####

```sh
$ curl 'http://backend.restapi.dev/api/users?access_token=MTM4N2RiZTlkNGQwNjU2MjZlYjJiMjZiYWFlMWZlZDkyZjUxYzFkMDA5YTNhYzEyMjc4YTM5Njk2NmFhN2NjYg' \
  -H 'Content-Type: application/json;charset=UTF-8' \
  -d '{ "fos_user_registration": {
          "username": "vytautas",
          "email": "vytaciunas@gmail.com",
          "plainPassword": {
            "first": "12345",
            "second": "12345"
          }
        }
      }'
```

#### Response ####

```json
{
  "id": 1,
  "username": "vytautas",
  "username_canonical": "vytautas",
  "email": "vytaciunas@gmail.com",
  "email_canonical": "vytaciunas@gmail.com",
  "enabled": true,
  "salt": "jf1glwjqbfccg44wwso44k0ckgcggk8",
  "password": "$2y$13$jf1glwjqbfccg44wwso44eTNZw8b54r2oOPB7If36KzkGMS0SSN9.",
  "last_login": "2015-12-17T11:39:38+0100",
  "groups": [],
  "locked": false,
  "expired": false,
  "roles": [],
  "credentials_expired": false
}
```
