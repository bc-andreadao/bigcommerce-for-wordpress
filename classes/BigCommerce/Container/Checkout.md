***

# Checkout

Registers checkout-related functionality for the BigCommerce platform, including customer login and checkout requirements.

This class extends the Provider class and interacts with various BigCommerce services, such as customer login and checkout
requirements, through a Pimple container.

* Full name: `\BigCommerce\Container\Checkout`
* Parent class: [`Provider`](./Provider.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`REQUIREMENTS_NOTICE`|public|string|&#039;checkout.requirements_notice&#039;|
|`LOGIN`|public|string|&#039;checkout.customer_login&#039;|


## Methods


### register

Registers the checkout-related functionality in the container.

```php
public register(\Pimple\Container $container): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Pimple\Container** | The Pimple container to register services in. |





***

### requirements

Registers services related to the checkout requirements.

```php
private requirements(\Pimple\Container $container): void
```

This method sets up services for the requirements notice, admin actions, and filters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Pimple\Container** | The Pimple container to register services in. |





***

### customer_login

Registers services related to the customer login functionality during checkout.

```php
private customer_login(\Pimple\Container $container): void
```

This method sets up the customer login service and modifies the checkout URL to include the login token.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Pimple\Container** | The Pimple container to register services in. |





***


***
> Automatically generated on 2024-11-21
