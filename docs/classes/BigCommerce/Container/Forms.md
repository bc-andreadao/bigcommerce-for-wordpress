***

# Forms

Provides form-related functionality for handling various form actions like user registration, address updates,
gift certificate purchases, and error handling. Registers form handlers and processes corresponding actions
based on incoming requests. This class interacts with the Pimple container for dependency injection.



* Full name: `\BigCommerce\Container\Forms`
* Parent class: [`Provider`](./Provider.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DELETE_ADDRESS`|public|string|&#039;forms.delete_address&#039;|
|`REGISTER`|public|string|&#039;forms.register&#039;|
|`REVIEW`|public|string|&#039;forms.review&#039;|
|`UPDATE_ADDRESS`|public|string|&#039;forms.update_address&#039;|
|`UPDATE_PROFILE`|public|string|&#039;forms.update_profile&#039;|
|`GIFT_CERTIFICATE`|public|string|&#039;forms.purchase_gift_certificate&#039;|
|`ERRORS`|public|string|&#039;forms.errors&#039;|
|`SUCCESS`|public|string|&#039;forms.success&#039;|
|`REDIRECTS`|public|string|&#039;forms.redirects&#039;|
|`MESSAGING`|public|string|&#039;forms.messaging&#039;|
|`SWITCH_CURRENCY`|public|string|&#039;forms.switch_currency&#039;|


## Methods


### register

Registers the form-related actions and handlers.

```php
public register(\Pimple\Container $container): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Pimple\Container** | The container instance used to inject dependencies. |





***

### actions

Registers form actions related to deleting, updating addresses, and handling user registrations.

```php
private actions(\Pimple\Container $container): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Pimple\Container** | The container instance used to inject dependencies. |





***

### errors

Registers the error handling actions for form submissions.

```php
private errors(\Pimple\Container $container): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Pimple\Container** | The container instance used to inject dependencies. |





***


***
> Automatically generated on 2024-11-21
