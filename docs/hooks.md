# Hooks

- [Actions](#actions)
- [Filters](#filters)

## Actions

### `prefix_4_filter_name`

Prefix 4 description.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`first_param_prefix_4` | `string` | This is the 1st argument for prefix 4
`second_param_prefix_4` | `object` | This is the 2nd argument for prefix 4
`first_param_prefix_4` | `string` | This is the 3rd argument for prefix 4
`second_param_prefix_4` | `string` | This is the 4th argument for prefix 4
`first_param_prefix_4` | `bool` | This is the 5th argument for prefix 4
`second_param_prefix_4` | `int` | This is the 6th argument for prefix 4

Source: [test/hooks.php](hooks.php), [line 67](hooks.php#L67-L77)

### `admin_notices`

Displays an admin notice to verify checkout requirements if the setup status meets the requirements.

**Arguments**

No arguments.

Source: [test/Checkout-test.php](Checkout-test.php), [line 56](Checkout-test.php#L56-L63)

### `admin_post_Requirements_Notice::REFRESH`

Refreshes the checkout requirements status by calling the `refresh_status` method.

**Arguments**

No arguments.

Source: [test/Checkout-test.php](Checkout-test.php), [line 65](Checkout-test.php#L65-L70)

### `parse_request`

Parses incoming requests and triggers the corresponding form action
when the `bc-action` parameter is present. Dynamically fires
a `bigcommerce/form/action=<action>` hook based on the value of `bc-action`.

**Arguments**

No arguments.

Source: [test/Forms-test.php](Forms-test.php), [line 113](Forms-test.php#L113-L123)

### `bigcommerce/form/action=Delete_Address_Handler::ACTION`

Triggered when the form submission specifies `delete_address` as the `bc-action` parameter.

Handles the removal of an address from the user's account.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`submission` | `array` | The sanitized form submission data containing details for the address to be deleted.

Source: [test/Forms-test.php](Forms-test.php), [line 128](Forms-test.php#L128-L136)

### `bigcommerce/form/action=Update_Address_Handler::ACTION`

Triggered when the form submission specifies `update_address` as the `bc-action` parameter.

Handles updating an existing address in the user account by processing and validating the form data.
Developers can hook into this action to extend or customize address update behavior.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`submission` | `array` | The sanitized form submission data (typically from $_POST), containing user-provided fields for the address update.

Source: [test/Forms-test.php](Forms-test.php), [line 141](Forms-test.php#L141-L150)

### `bigcommerce/form/action=Update_Profile_Handler::ACTION`

Triggered when the form submission specifies `update_profile` as the `bc-action` parameter.

Handles updates to the user's profile details, such as name or email address.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`submission` | `array` | The sanitized form submission data containing user profile fields to be updated.

Source: [test/Forms-test.php](Forms-test.php), [line 155](Forms-test.php#L155-L163)

### `bigcommerce/form/action=Registration_Handler::ACTION`

Triggered when the form submission specifies `register` as the `bc-action` parameter.

Handles user registration by validating input data and creating a new account.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`submission` | `array` | The sanitized form submission data containing user registration details such as name, email, and password.

Source: [test/Forms-test.php](Forms-test.php), [line 168](Forms-test.php#L168-L176)

### `bigcommerce/form/action=Purchase_Gift_Certificate_Handler::ACTION`

Triggered when the form submission specifies `purchase_gift_certificate` as the `bc-action` parameter.

Handles the purchase of a gift certificate by processing user input and creating a cart item.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`submission` | `array` | The sanitized form submission data containing gift certificate purchase details.

Source: [test/Forms-test.php](Forms-test.php), [line 181](Forms-test.php#L181-L189)

### `bigcommerce/form/action=Product_Review_Handler::ACTION`

Triggered when the form submission specifies `product_review` as the `bc-action` parameter.

Processes product reviews submitted by customers and saves them to the catalog system.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`submission` | `array` | The sanitized form submission data containing customer review details such as rating and comments.

Source: [test/Forms-test.php](Forms-test.php), [line 194](Forms-test.php#L194-L202)

### `bigcommerce/form/error`

Triggered when an error occurs during a form submission. Allows developers to handle or log form submission errors.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`error` | `\WP_Error` | The error object representing the validation or processing error. Contains error codes and messages.
`submission` | `array` | The sanitized form submission data (usually $_POST).
`redirect` | `string` | The URL to redirect the user after processing the error. Defaults to the home URL.

Source: [test/Forms-test.php](Forms-test.php), [line 216](Forms-test.php#L216-L225)

## Filters

### `prefix_1_filter_name`

Prefix 1 description.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`first_param_prefix_1` | `string` | This is the first argument. Change up description!
`second_param_prefix_1` | `object` | This is the second argument for prefix 1

Source: [test/hooks.php](hooks.php), [line 19](hooks.php#L19-L25)

### `prefix_2_filter_name`

Prefix 2 description.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`first_param_prefix_2` | `array` | This is the first argument for prefix 2
`second_param_prefix_2` | `\Exampletype` | This is the second argument for prefix 2

Source: [test/hooks.php](hooks.php), [line 36](hooks.php#L36-L42)

### `prefix_3_filter_name`

Prefix 3 description.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`first_param_prefix_3` | `int` | This is the first argument for prefix 3
`second_param_prefix_3` | `bool` | This is the second argument for prefix 3

Source: [test/hooks.php](hooks.php), [line 53](hooks.php#L53-L59)

### `pre_option_BigCommerce\Settings\Sections\Cart::OPTION_EMBEDDED_CHECKOUT`

Filters the value of the "Embedded Checkout" option based on setup requirements.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`value` | `mixed` | The current option value.

Source: [test/Checkout-test.php](Checkout-test.php), [line 72](Checkout-test.php#L72-L80)

### `bigcommerce/checkout/can_embed`

Determines whether the embedded checkout can be enabled based on current requirements.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`supported` | `bool` | Indicates if embedded checkout is currently supported.

Source: [test/Checkout-test.php](Checkout-test.php), [line 82](Checkout-test.php#L82-L90)

### `bigcommerce/checkout/url`

Modifies the checkout URL by adding a login token for customer authentication.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`url` | `string` | The original checkout URL.

Source: [test/Checkout-test.php](Checkout-test.php), [line 106](Checkout-test.php#L106-L114)


<p align="center"><a href="https://github.com/pronamic/wp-documentor"><img src="https://cdn.jsdelivr.net/gh/pronamic/wp-documentor@main/logos/pronamic-wp-documentor.svgo-min.svg" alt="Pronamic WordPress Documentor" width="32" height="32"></a><br><em>Generated by <a href="https://github.com/pronamic/wp-documentor">Pronamic WordPress Documentor</a> <code>1.2.0</code></em><p>

