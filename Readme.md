# Gilded Rose API

API implementation using [API Platform](https://github.com/api-platform/api-platform) for [my solution of Gilded Rose Refactoring Kata](https://github.com/prodigeris/PHP-GildedRose-Refactoring-Kata).

It's a Restful API that uses the kata solution as a composer package.


Implementation of `GildedRose` package is performed using Dependency Injection.

The project doesn't use any database.

Container loads the items from `GildedRoseStorage` class.

Storage can be easily implemented with Doctrine, though.

## Demo

You can check the demo application [here](https://morning-cove-55301.herokuapp.com/).

Running live on Heroku magic Cloud Platform.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

You will need Docker to run this API (duhh).

[If you don't have it, here's how you can install it.](https://docs.docker.com/install/)

### Installing

Clone this repository

```
git clone https://github.com/prodigeris/gilded-rose-api
cd gilded-rose-api
```

Install composer dependencies.

```
composer install
```

[Afteward, you need to follow this guide to run the API containers.](https://api-platform.com/docs/distribution/#installing-the-framework)


## Running the tests

```
phpunit
```

## Deployment

[Read this on how to deploy API Platform](https://api-platform.com/docs/deployment/)

## Built With

* [API Platform](https://github.com/api-platform/api-platform) - The API framework used


## Authors

* **Arnas Kazlauskas** - *Initial work* - [Prodigeris](https://github.com/Prodigeris)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## Acknowledgments

* Thanks [Telesoftas](https://www.telesoftas.com/) for a great task!

