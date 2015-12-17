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
