# Hooks

- [Actions](#actions)
- [Filters](#filters)

## Actions

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` |  | 
`$_POST` |  | 
`home_url('/')` |  | 

Source: [src/BigCommerce/Cart/Add_To_Cart.php](BigCommerce/Cart/Add_To_Cart.php), [line 16](BigCommerce/Cart/Add_To_Cart.php#L16-L26)

### `bigcommerce/form/success`

*Triggered when a form is successfully processed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('1 item added to Cart', 'bigcommerce')` |  | 
`$_POST` |  | 
`$cart_url` |  | 
`['key' => 'add_to_cart', 'cart_id' => $cart->get_cart_id(), 'post_id' => $post_id, 'product_id' => $product_id, 'variant_id' => $variant_id]` |  | 

Source: [src/BigCommerce/Cart/Add_To_Cart.php](BigCommerce/Cart/Add_To_Cart.php), [line 90](BigCommerce/Cart/Add_To_Cart.php#L90-L104)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` |  | 
`$_POST` |  | 
`$cart->get_cart_url()` |  | 

Source: [src/BigCommerce/Cart/Add_To_Cart.php](BigCommerce/Cart/Add_To_Cart.php), [line 109](BigCommerce/Cart/Add_To_Cart.php#L109-L135)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` |  | 
`$_POST` |  | 
`$cart->get_cart_url()` |  | 

Source: [src/BigCommerce/Cart/Buy_Now.php](BigCommerce/Cart/Buy_Now.php), [line 39](BigCommerce/Cart/Buy_Now.php#L39-L65)

### `bigcommerce/do_not_cache`


Source: [src/BigCommerce/Cart/Cache_Control.php](BigCommerce/Cart/Cache_Control.php), [line 10](BigCommerce/Cart/Cache_Control.php#L10-L21)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` |  | 
`$_POST` |  | 
`$destination` |  | 

Source: [src/BigCommerce/Cart/Cart_Recovery.php](BigCommerce/Cart/Cart_Recovery.php), [line 41](BigCommerce/Cart/Cart_Recovery.php#L41-L68)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` |  | 
`$_POST` |  | 
`home_url('/')` |  | 

Source: [src/BigCommerce/Cart/Checkout.php](BigCommerce/Cart/Checkout.php), [line 24](BigCommerce/Cart/Checkout.php#L24-L34)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` |  | 
`$_POST` |  | 
`home_url('/')` |  | 

Source: [src/BigCommerce/Cart/Checkout.php](BigCommerce/Cart/Checkout.php), [line 24](BigCommerce/Cart/Checkout.php#L24-L60)

### `bigcommerce/import/task_manager/init`

*Triggered when the task manager for the import has finished initializing*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$manager` | `\BigCommerce\Import\Task_Manager` | The task manager object

Source: [src/BigCommerce/Container/Import.php](BigCommerce/Container/Import.php), [line 357](BigCommerce/Container/Import.php#L357-L362)

### `bigcommerce/import/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Container/Import.php](BigCommerce/Container/Import.php), [line 371](BigCommerce/Container/Import.php#L371-L371)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Container/Import.php](BigCommerce/Container/Import.php), [line 372](BigCommerce/Container/Import.php#L372-L372)

### `bigcommerce/form/action={$action}[bc-action]`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`stripslashes_deep($_REQUEST)` |  | 

Source: [src/BigCommerce/Container/Forms.php](BigCommerce/Container/Forms.php), [line 50](BigCommerce/Container/Forms.php#L50-L50)

### `bigcommerce/table_maker/created_table`

*Update the schema for the given table*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$updated_table` |  | 
`$table` | `string` | The name of the table to update

Source: [src/BigCommerce/Schema/Table_Maker.php](BigCommerce/Schema/Table_Maker.php), [line 52](BigCommerce/Schema/Table_Maker.php#L52-L66)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not retrieve the token', 'bigcommerce')` |  | 
`['trace' => $e->getTraceAsString()]` |  | 

Source: [src/BigCommerce/GraphQL/BaseGQL.php](BigCommerce/GraphQL/BaseGQL.php), [line 90](BigCommerce/GraphQL/BaseGQL.php#L90-L92)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not retrieve the token', 'bigcommerce')` |  | 
`['trace' => $e->getTraceAsString()]` |  | 

Source: [src/BigCommerce/GraphQL/BaseGQL.php](BigCommerce/GraphQL/BaseGQL.php), [line 116](BigCommerce/GraphQL/BaseGQL.php#L116-L118)

### `bigcommerce/import/log`

*Get the product source data cached for this product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 418](BigCommerce/Post_Types/Product/Product.php#L418-L468)

### `bigcommerce/log`

*Get the product source data cached for this product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 418](BigCommerce/Post_Types/Product/Product.php#L418-L469)

### `Webhook_Cron_Tasks::UPDATE_PRODUCT`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$product->bc_id()` |  | 

Source: [src/BigCommerce/Post_Types/Product/Single_Product_Sync.php](BigCommerce/Post_Types/Product/Single_Product_Sync.php), [line 74](BigCommerce/Post_Types/Product/Single_Product_Sync.php#L74-L110)

### `bigcommerce/query/sort`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$query` | `\WP_Query` | 

Source: [src/BigCommerce/Post_Types/Product/Query.php](BigCommerce/Post_Types/Product/Query.php), [line 34](BigCommerce/Post_Types/Product/Query.php#L34-L181)

### `bigcommerce/channel/error/could_not_fetch_listing`

*Error triggered when fetching a listing fails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$channel_id` | `int` | 
`$listing_id` | `int` | 
`$e` | `\BigCommerce\Api\v3\ApiException` | 

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 65](BigCommerce/Post_Types/Product/Channel_Sync.php#L65-L72)

### `bigcommerce/channel/error/could_not_update_listing`

*Error triggered when updating a listing fails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$channel_id` | `int` | 
`$listing_id` | `int` | 
`$e` | `\BigCommerce\Api\v3\ApiException` | 

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 91](BigCommerce/Post_Types/Product/Channel_Sync.php#L91-L98)

### `bigcommerce/channel/error/could_not_fetch_listing`

*Error triggered when fetching a listing fails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$channel_id` | `int` | 
`$listing_id` | `int` | 
`$e` | `\BigCommerce\Api\v3\ApiException` | 

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 108](BigCommerce/Post_Types/Product/Channel_Sync.php#L108-L115)

### `bigcommerce/channel/error/could_not_fetch_listing`

*Error triggered when fetching a listing fails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$channel_id` | `int` | 
`$listing_id` | `int` | 
`$e` | `\BigCommerce\Api\v3\ApiException` | 

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 214](BigCommerce/Post_Types/Product/Channel_Sync.php#L214-L221)

### `bigcommerce/channel/error/could_not_update_listing`

*Error triggered when updating a listing fails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$channel_id` | `int` | 
`$listing_id` | `int` | 
`$e` | `\BigCommerce\Api\v3\ApiException` | 

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 240](BigCommerce/Post_Types/Product/Channel_Sync.php#L240-L247)

### `bigcommerce/action_endpoint/{$endpoint}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` |  | 

Source: [src/BigCommerce/Rewrites/Action_Endpoint.php](BigCommerce/Rewrites/Action_Endpoint.php), [line 18](BigCommerce/Rewrites/Action_Endpoint.php#L18-L30)

### `bigcommerce/import/error`

*Prevent product import for non active status*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Inactive channel. Product import canceled.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/BC_Status.php](BigCommerce/Taxonomies/Channel/BC_Status.php), [line 20](BigCommerce/Taxonomies/Channel/BC_Status.php#L20-L29)

### `bigcommerce/channel/promote`

*Triggers the promotion of a channel to the "Primary" state*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$term` | `\WP_Term` | The Channel term associated with the BigCommerce channel

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Connector.php](BigCommerce/Taxonomies/Channel/Channel_Connector.php), [line 66](BigCommerce/Taxonomies/Channel/Channel_Connector.php#L66-L71)

### `bigcommerce/channel/error/could_not_create_channel`

*Create a new Channel on the BigCommerce store*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e` |  | 
`$request` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Connector.php](BigCommerce/Taxonomies/Channel/Channel_Connector.php), [line 77](BigCommerce/Taxonomies/Channel/Channel_Connector.php#L77-L109)

### `bigcommerce/channel/promote`

*Triggers the promotion of a channel to the "Primary" state*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$term` | `\WP_Term` | The Channel term associated with the BigCommerce channel

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Connector.php](BigCommerce/Taxonomies/Channel/Channel_Connector.php), [line 148](BigCommerce/Taxonomies/Channel/Channel_Connector.php#L148-L153)

### `bigcommerce/update_site_home/error`


Source: [src/BigCommerce/Taxonomies/Channel/Routes.php](BigCommerce/Taxonomies/Channel/Routes.php), [line 115](BigCommerce/Taxonomies/Channel/Routes.php#L115-L128)

### `bigcommerce/channel/error/could_not_update_route`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$route` | `\BigCommerce\Api\v3\Model\Route` | 
`$site_id` | `int` | 

Source: [src/BigCommerce/Taxonomies/Channel/Routes.php](BigCommerce/Taxonomies/Channel/Routes.php), [line 329](BigCommerce/Taxonomies/Channel/Routes.php#L329-L348)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not retrieve primary channel id', 'bigcommerce')` |  | 
`['code' => $exception->getCode(), 'message' => $exception->getMessage()]` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Connections.php](BigCommerce/Taxonomies/Channel/Connections.php), [line 92](BigCommerce/Taxonomies/Channel/Connections.php#L92-L109)

### `bigcommerce/log`

*If a Channel name is changed, push the change up to the API*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Error when updating channel name', 'bigcommerce')` |  | 
`['error' => $e->getMessage(), 'channel_id' => $channel_id, 'name' => $term->name]` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php), [line 44](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php#L44-L70)

### `bigcommerce/log`

*If a Channel name is changed, push the change up to the API*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php), [line 44](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php#L44-L71)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Unable to import channels', 'bigcommerce')` |  | 
`$e->getMessage()` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php), [line 77](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php#L77-L85)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php), [line 77](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php#L77-L86)

### `bigcommerce/log`

*Create a new WP term for a channel*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Unable to import channel', 'bigcommerce')` |  | 
`$term->get_error_message()` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php), [line 174](BigCommerce/Taxonomies/Channel/Channel_Synchronizer.php#L174-L184)

### `bigcommerce/import/error`

*Handle product creation logic*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('No channels connected. Product import canceled.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Creator.php](BigCommerce/Webhooks/Product/Product_Creator.php), [line 35](BigCommerce/Webhooks/Product/Product_Creator.php#L35-L45)

### `bigcommerce/log`

*Handle product creation logic*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Webhook product creation failed. No channels connected', 'bigcommerce')` |  | 
`[]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Creator.php](BigCommerce/Webhooks/Product/Product_Creator.php), [line 35](BigCommerce/Webhooks/Product/Product_Creator.php#L35-L46)

### `bigcommerce/import/error`

*Handle product creation logic*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Creator.php](BigCommerce/Webhooks/Product/Product_Creator.php), [line 35](BigCommerce/Webhooks/Product/Product_Creator.php#L35-L74)

### `bigcommerce/log`

*Handle product creation logic*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Creator.php](BigCommerce/Webhooks/Product/Product_Creator.php), [line 35](BigCommerce/Webhooks/Product/Product_Creator.php#L35-L75)

### `bigcommerce/import/error`

*Check if channel exists, adds listings to product and start product import*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Creator.php](BigCommerce/Webhooks/Product/Product_Creator.php), [line 83](BigCommerce/Webhooks/Product/Product_Creator.php#L83-L107)

### `bigcommerce/log`

*Check if channel exists, adds listings to product and start product import*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Creator.php](BigCommerce/Webhooks/Product/Product_Creator.php), [line 83](BigCommerce/Webhooks/Product/Product_Creator.php#L83-L108)

### `bigcommerce/import/error`

*Re-import a previously imported product.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('No channels connected. Product import canceled.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Updater.php](BigCommerce/Webhooks/Product/Product_Updater.php), [line 35](BigCommerce/Webhooks/Product/Product_Updater.php#L35-L47)

### `bigcommerce/import/error`

*Re-import a previously imported product.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Updater.php](BigCommerce/Webhooks/Product/Product_Updater.php), [line 35](BigCommerce/Webhooks/Product/Product_Updater.php#L35-L77)

### `bigcommerce/log`

*Re-import a previously imported product.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Updater.php](BigCommerce/Webhooks/Product/Product_Updater.php), [line 35](BigCommerce/Webhooks/Product/Product_Updater.php#L35-L78)

### `bigcommerce/import/update_product/skipped`

*Fires if product update import skipped.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf(__('No listing found for product ID %d. Aborting.', 'bigcommerce'), $product->getId())` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Updater.php](BigCommerce/Webhooks/Product/Product_Updater.php), [line 102](BigCommerce/Webhooks/Product/Product_Updater.php#L102-L108)

### `bigcommerce/log`

*Fires when a product has been updated in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger product update webhook', 'bigcommerce')` |  | 
`['bc_id' => $request['data']['id']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Update_Webhook.php](BigCommerce/Webhooks/Product/Product_Update_Webhook.php), [line 30](BigCommerce/Webhooks/Product/Product_Update_Webhook.php#L30-L37)

### `bigcommerce/webhooks/product_updated`

*Fires when a product has been updated in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`['product_id' => intval($request['data']['id'])]` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Update_Webhook.php](BigCommerce/Webhooks/Product/Product_Update_Webhook.php), [line 24](BigCommerce/Webhooks/Product/Product_Update_Webhook.php#L24-L38)

### `bigcommerce/log`

*Fires when a product inventory webhooks has been received from the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger inventory update webhook', 'bigcommerce')` |  | 
`['product_id' => $product_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Inventory_Update_Webhook.php](BigCommerce/Webhooks/Product/Product_Inventory_Update_Webhook.php), [line 33](BigCommerce/Webhooks/Product/Product_Inventory_Update_Webhook.php#L33-L40)

### `bigcommerce/webhooks/product_inventory_updated`

*Fires when a product inventory webhooks has been received from the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`['product_id' => $product_id]` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Inventory_Update_Webhook.php](BigCommerce/Webhooks/Product/Product_Inventory_Update_Webhook.php), [line 24](BigCommerce/Webhooks/Product/Product_Inventory_Update_Webhook.php#L24-L41)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Requested channel does not exist', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_UnAssign.php](BigCommerce/Webhooks/Product/Channels_UnAssign.php), [line 17](BigCommerce/Webhooks/Product/Channels_UnAssign.php#L17-L19)

### `bigcommerce/log`

*Fires when a product has been deleted in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger product delete webhook', 'bigcommerce')` |  | 
`['bc_id' => $request['data']['id']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Delete_Webhook.php](BigCommerce/Webhooks/Product/Product_Delete_Webhook.php), [line 30](BigCommerce/Webhooks/Product/Product_Delete_Webhook.php#L30-L37)

### `bigcommerce/webhooks/product_deleted`

*Fires when a product has been deleted in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['id'])` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Delete_Webhook.php](BigCommerce/Webhooks/Product/Product_Delete_Webhook.php), [line 24](BigCommerce/Webhooks/Product/Product_Delete_Webhook.php#L24-L38)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger channel currency update webhook', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Currency_Update.php](BigCommerce/Webhooks/Product/Channels_Currency_Update.php), [line 22](BigCommerce/Webhooks/Product/Channels_Currency_Update.php#L22-L24)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Requested channel does not exist', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Currency_Update.php](BigCommerce/Webhooks/Product/Channels_Currency_Update.php), [line 29](BigCommerce/Webhooks/Product/Channels_Currency_Update.php#L29-L31)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Unable to retrieve channel currencies', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Currency_Update.php](BigCommerce/Webhooks/Product/Channels_Currency_Update.php), [line 42](BigCommerce/Webhooks/Product/Channels_Currency_Update.php#L42-L44)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not retrieve channel currency data', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'code' => $exception->getCode(), 'message' => $exception->getMessage(), 'trace' => $exception->getTraceAsString()]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Currency_Update.php](BigCommerce/Webhooks/Product/Channels_Currency_Update.php), [line 53](BigCommerce/Webhooks/Product/Channels_Currency_Update.php#L53-L67)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Could not find the channel', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Currency_Update.php](BigCommerce/Webhooks/Product/Channels_Currency_Update.php), [line 73](BigCommerce/Webhooks/Product/Channels_Currency_Update.php#L73-L95)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Could not find the channel', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Manager.php](BigCommerce/Webhooks/Product/Channels_Manager.php), [line 42](BigCommerce/Webhooks/Product/Channels_Manager.php#L42-L44)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Requested channel does not exist', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 16](BigCommerce/Webhooks/Product/Channels_Assign.php#L16-L18)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Product is added to channel already. Start product update', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'product' => $product_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 26](BigCommerce/Webhooks/Product/Channels_Assign.php#L26-L29)

### `bigcommerce/log`

*Product does not exist in channel. Start product import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 36](BigCommerce/Webhooks/Product/Channels_Assign.php#L36-L49)

### `bigcommerce/log`

*Product does not exist in channel. Start product import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 36](BigCommerce/Webhooks/Product/Channels_Assign.php#L36-L50)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Listing not found ', 'bigcommerce')` |  | 
`['response' => $listing_response, 'product_id' => $product->getId()]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 62](BigCommerce/Webhooks/Product/Channels_Assign.php#L62-L65)

### `bigcommerce/import/update_product/skipped`

*Fires if product update import skipped.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf(__('No listing found for product ID %d. Aborting.', 'bigcommerce'), $product->bc_id())` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 82](BigCommerce/Webhooks/Product/Channels_Assign.php#L82-L88)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 100](BigCommerce/Webhooks/Product/Channels_Assign.php#L100-L103)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Assign.php](BigCommerce/Webhooks/Product/Channels_Assign.php), [line 104](BigCommerce/Webhooks/Product/Channels_Assign.php#L104-L104)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Requested channel does not exist', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channel_Updater.php](BigCommerce/Webhooks/Product/Channel_Updater.php), [line 14](BigCommerce/Webhooks/Product/Channel_Updater.php#L14-L16)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not retrieve the channel', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channel_Updater.php](BigCommerce/Webhooks/Product/Channel_Updater.php), [line 25](BigCommerce/Webhooks/Product/Channel_Updater.php#L25-L27)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not store task to queue', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'args' => $args]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channel_Updater.php](BigCommerce/Webhooks/Product/Channel_Updater.php), [line 51](BigCommerce/Webhooks/Product/Channel_Updater.php#L51-L54)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Task has been saved', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'args' => $args]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channel_Updater.php](BigCommerce/Webhooks/Product/Channel_Updater.php), [line 59](BigCommerce/Webhooks/Product/Channel_Updater.php#L59-L62)

### `bigcommerce/log`

*Fires when a change is applied to channels*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger channels webhook', 'bigcommerce')` |  | 
`['request' => $request]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 29](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L29-L37)

### `self::CHANNEL_UPDATED_HOOK`

*Fires when a change is applied to channels*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['id'])` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 29](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L29-L48)

### `bigcommerce/log`

*Fires when a change is applied to channels*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Incoming channel update', 'bigcommerce')` |  | 
`['request' => $request, 'channel_id' => $request['data']['id']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 29](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L29-L53)

### `bigcommerce/log`

*Fires when a change is applied to channels*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Webhook request does not have correct channel id', 'bigcommerce')` |  | 
`['request' => $request, 'channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 29](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L29-L62)

### `bigcommerce/log`

*Fires when a change is applied to channels*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Webhook request does not have correct action', 'bigcommerce')` |  | 
`['request' => $request, 'channel_id' => $channel_id, 'action' => $action]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 29](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L29-L74)

### `self::CHANNEL_CURRENCY_UPDATE_HOOK`

*Class Channels_Management_Webhook*

Sets up the webhook that runs on channels changes.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$channel_id` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 13](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L13-L84)

### `sprintf()`

*Class Channels_Management_Webhook*

Sets up the webhook that runs on channels changes.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['product_id'])` |  | 
`$channel_id` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 13](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L13-L90)

### `sprintf()`

*Class Channels_Management_Webhook*

Sets up the webhook that runs on channels changes.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['product_id'])` |  | 
`$channel_id` |  | 

Source: [src/BigCommerce/Webhooks/Product/Channels_Management_Webhook.php](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php), [line 13](BigCommerce/Webhooks/Product/Channels_Management_Webhook.php#L13-L95)

### `bigcommerce/log`

*Fires when a product has been created in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger product creation', 'bigcommerce')` |  | 
`['bc_id' => $request['data']['id']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Create_Webhook.php](BigCommerce/Webhooks/Product/Product_Create_Webhook.php), [line 28](BigCommerce/Webhooks/Product/Product_Create_Webhook.php#L28-L35)

### `bigcommerce/webhooks/product_created`

*Fires when a product has been created in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['id'])` |  | 

Source: [src/BigCommerce/Webhooks/Product/Product_Create_Webhook.php](BigCommerce/Webhooks/Product/Product_Create_Webhook.php), [line 22](BigCommerce/Webhooks/Product/Product_Create_Webhook.php#L22-L36)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger customer channel access update webhook', 'bigcommerce')` |  | 
`['customer_id' => $request['data']['customer_id'], 'channel_ids' => $request['data']['channel_ids']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Channel_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Channel_Webhook.php), [line 33](BigCommerce/Webhooks/Customer/Customer_Channel_Webhook.php#L33-L40)

### `self::HOOK`

*Fires when a customer channel access has been updated in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['customer_id'])` |  | 
`$request['data']['channel_ids']` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Channel_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Channel_Webhook.php), [line 27](BigCommerce/Webhooks/Customer/Customer_Channel_Webhook.php#L27-L42)

### `bigcommerce/log`

*Updates customer meta with customer API response*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('User not found', 'bigcommerce')` |  | 
`['customer_id' => $customer_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Updater.php](BigCommerce/Webhooks/Customer/Customer_Updater.php), [line 18](BigCommerce/Webhooks/Customer/Customer_Updater.php#L18-L32)

### `bigcommerce/log`

*Create new customer if it doesn't exist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('User exists, update customer id', 'bigcommerce')` |  | 
`['customer_id' => $customer_id, 'user_id' => $matching_user->ID]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Creator.php](BigCommerce/Webhooks/Customer/Customer_Creator.php), [line 17](BigCommerce/Webhooks/Customer/Customer_Creator.php#L17-L42)

### `bigcommerce/log`

*Create new customer if it doesn't exist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not create a user via webhook', 'bigcommerce')` |  | 
`['customer_id' => $customer_id, 'result' => $user_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Creator.php](BigCommerce/Webhooks/Customer/Customer_Creator.php), [line 17](BigCommerce/Webhooks/Customer/Customer_Creator.php#L17-L55)

### `bigcommerce/log`

*Updates customer meta with customer API response*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__($message, 'bigcommerce')` |  | 
`['customer_id' => $customer_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Channel_Updater.php](BigCommerce/Webhooks/Customer/Customer_Channel_Updater.php), [line 22](BigCommerce/Webhooks/Customer/Customer_Channel_Updater.php#L22-L37)

### `bigcommerce/log`

*Fires when a customer has been created in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger customer create webhook', 'bigcommerce')` |  | 
`['bc_id' => $request['data']['id']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Create_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Create_Webhook.php), [line 29](BigCommerce/Webhooks/Customer/Customer_Create_Webhook.php#L29-L36)

### `bigcommerce/webhooks/customer_created`

*Fires when a customer has been created in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['id'])` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Create_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Create_Webhook.php), [line 23](BigCommerce/Webhooks/Customer/Customer_Create_Webhook.php#L23-L37)

### `bigcommerce/log`

*Fires when a product has been updated in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger customer update webhook', 'bigcommerce')` |  | 
`['bc_id' => $request['data']['id']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Update_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Update_Webhook.php), [line 32](BigCommerce/Webhooks/Customer/Customer_Update_Webhook.php#L32-L39)

### `bigcommerce/webhooks/customer_updated`

*Fires when a product has been updated in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['id'])` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Update_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Update_Webhook.php), [line 26](BigCommerce/Webhooks/Customer/Customer_Update_Webhook.php#L26-L40)

### `bigcommerce/log`

*Fires when a customer has been deleted in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Trigger customer delete webhook', 'bigcommerce')` |  | 
`['bc_id' => $request['data']['id']]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Delete_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Delete_Webhook.php), [line 30](BigCommerce/Webhooks/Customer/Customer_Delete_Webhook.php#L30-L37)

### `bigcommerce/webhooks/customer_deleted`

*Fires when a customer has been deleted in the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($request['data']['id'])` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Delete_Webhook.php](BigCommerce/Webhooks/Customer/Customer_Delete_Webhook.php), [line 24](BigCommerce/Webhooks/Customer/Customer_Delete_Webhook.php#L24-L38)

### `bigcommerce/log`

*Get customer details via v3 API. v3 will return channels_ids that will be used later in channel aware logic*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Customer webhook failed. Could not get customer details', 'bigcommerce')` |  | 
`['customer_id' => $customer_id, 'code' => $exception->getCode(), 'message' => $exception->getMessage(), 'trace' => $exception->getTraceAsString()]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Saver.php](BigCommerce/Webhooks/Customer/Customer_Saver.php), [line 25](BigCommerce/Webhooks/Customer/Customer_Saver.php#L25-L45)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Requested user does not exist. Exit', 'bigcommerce')` |  | 
`['customer_id' => $customer_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Saver.php](BigCommerce/Webhooks/Customer/Customer_Saver.php), [line 112](BigCommerce/Webhooks/Customer/Customer_Saver.php#L112-L114)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not delete the user. Wrong customer id', 'bigcommerce')` |  | 
`['customer_id' => $customer_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Saver.php](BigCommerce/Webhooks/Customer/Customer_Saver.php), [line 123](BigCommerce/Webhooks/Customer/Customer_Saver.php#L123-L125)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Customer does not belong to the current channel. Remove customer', 'bigcommerce')` |  | 
`['customer_id' => $customer->getId(), 'channel_id' => $channel_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Saver.php](BigCommerce/Webhooks/Customer/Customer_Saver.php), [line 131](BigCommerce/Webhooks/Customer/Customer_Saver.php#L131-L155)

### `bigcommerce/webhooks/webhook_updated`

*Check if webhook exists in BigCommerce*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($existing_webhook_id)` |  | 
`static::NAME` |  | 
`$this->scope()` |  | 

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 116](BigCommerce/Webhooks/Webhook.php#L116-L126)

### `bigcommerce/webhooks/update_failed`

*Fires after webhook update failed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` |  | 
`$result` | `array` | Result.

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 146](BigCommerce/Webhooks/Webhook.php#L146-L152)

### `bigcommerce/log`

*Sends a request to the BC API to update a webhook. Creates it if it doesn't exist.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Webhook creation is failed', 'bigcommerce')` |  | 
`[]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 104](BigCommerce/Webhooks/Webhook.php#L104-L154)

### `bigcommerce/webhooks/webhook_updated`

*Fires when a webhook is added to the BigCommerce database.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`intval($result['id'])` |  | 
`static::NAME` |  | 
`$this->scope()` |  | 

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 172](BigCommerce/Webhooks/Webhook.php#L172-L179)

### `bigcommerce/webhooks/delete_failed`

*Fires after webhook delete failed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` |  | 
`$result` | `array` | Result.

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 222](BigCommerce/Webhooks/Webhook.php#L222-L228)

### `bigcommerce/log`

*Deletes a webhook from the BigCommerce database.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Delete webhook action is failed', 'bigcommerce')` |  | 
`['id' => $webhook_id]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 212](BigCommerce/Webhooks/Webhook.php#L212-L232)

### `bigcommerce/webhooks/webhook_deleted`

*Fires when a webhook is deleted from the BigCommerce database.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$result['id']` |  | 
`static::NAME` |  | 
`$this->scope()` |  | 

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 235](BigCommerce/Webhooks/Webhook.php#L235-L242)

### `bigcommerce/log`

*Validates an incoming request.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Incoming webhook password does not match', 'bigcommerce')` |  | 
`['request' => $request]` |  | 
`'webhooks'` |  | 

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 247](BigCommerce/Webhooks/Webhook.php#L247-L263)

### `bigcommerce/settings/webhoooks_updated`

*This hook is documented in src/BigCommerce/Webhooks/Webhook.php.*


Source: [src/BigCommerce/Webhooks/Status.php](BigCommerce/Webhooks/Status.php), [line 107](BigCommerce/Webhooks/Status.php#L107-L110)

### `bigcommerce/webhooks/self::NAME`

*Fires when a product inventory webhooks has been received from the BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`['cart_id' => $cart_id]` |  | 

Source: [src/BigCommerce/Webhooks/Checkout_Complete_Webhook.php](BigCommerce/Webhooks/Checkout_Complete_Webhook.php), [line 28](BigCommerce/Webhooks/Checkout_Complete_Webhook.php#L28-L33)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not proceed with current API scopes for customers', 'bigcommerce')` |  | 
`['trace' => $e->getTraceAsString()]` |  | 

Source: [src/BigCommerce/Api/Api_Scopes_Validator.php](BigCommerce/Api/Api_Scopes_Validator.php), [line 60](BigCommerce/Api/Api_Scopes_Validator.php#L60-L62)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not proceed with current API scopes for Marketing', 'bigcommerce')` |  | 
`['trace' => $e->getTraceAsString()]` |  | 

Source: [src/BigCommerce/Api/Api_Scopes_Validator.php](BigCommerce/Api/Api_Scopes_Validator.php), [line 78](BigCommerce/Api/Api_Scopes_Validator.php#L78-L80)

### `bigcommerce/proxy/request_received`

*Fires before a proxy REST request is run.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 331](BigCommerce/Proxy/Proxy_Controller.php#L331-L336)

### `bigcommerce/proxy/raw_response_received`

*Raw API response received.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$response` | `object\|array` | Response from BigCommerce API.
`$route` | `string` | Route requested.
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 363](BigCommerce/Proxy/Proxy_Controller.php#L363-L370)

### `bigcommerce/proxy/response_received`

*Do something with the response before it is returned. E.g. Import the product(s) and/or cache it.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$result` | `array\|\WP_Error` | Result from API call.
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 379](BigCommerce/Proxy/Proxy_Controller.php#L379-L385)

### `bigcommerce/proxy/cache_set`

*Fires when a result has been cached.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$result` | `array\|\WP_Error` | Result from API call.
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Cache.php](BigCommerce/Proxy/Proxy_Cache.php), [line 165](BigCommerce/Proxy/Proxy_Cache.php#L165-L171)

### `bigcommerce/proxy/cache_get`

*Result retrieved from cache.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$result` | `array` | Result returned from cache.
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Cache.php](BigCommerce/Proxy/Proxy_Cache.php), [line 220](BigCommerce/Proxy/Proxy_Cache.php#L220-L226)

### `bigcommerce/settings/render/product_reviews`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Reviews.php](BigCommerce/Settings/Sections/Reviews.php), [line 29](BigCommerce/Settings/Sections/Reviews.php#L29-L29)

### `bigcommerce/settings/render/accounts`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Account_Settings.php](BigCommerce/Settings/Sections/Account_Settings.php), [line 37](BigCommerce/Settings/Sections/Account_Settings.php#L37-L37)

### `bigcommerce/sync_global_logins`


Source: [src/BigCommerce/Settings/Sections/Account_Settings.php](BigCommerce/Settings/Sections/Account_Settings.php), [line 138](BigCommerce/Settings/Sections/Account_Settings.php#L138-L150)

### `bigcommerce/settings/render/gift_certificates`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Gift_Certificates.php](BigCommerce/Settings/Sections/Gift_Certificates.php), [line 34](BigCommerce/Settings/Sections/Gift_Certificates.php#L34-L34)

### `bigcommerce/channel/connection_changed`

*Triggered when the channel(s) connected to the site have changed*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$term` |  | 
`Channel::STATUS_CONNECTED` |  | 

Source: [src/BigCommerce/Settings/Sections/Channels.php](BigCommerce/Settings/Sections/Channels.php), [line 304](BigCommerce/Settings/Sections/Channels.php#L304-L310)

### `bigcommerce/channel/connection_changed`

*Triggered when the channel(s) connected to the site have changed*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$term` |  | 
`Channel::STATUS_DISCONNECTED` |  | 

Source: [src/BigCommerce/Settings/Sections/Channels.php](BigCommerce/Settings/Sections/Channels.php), [line 322](BigCommerce/Settings/Sections/Channels.php#L322-L328)

### `bigcommerce/channel/connection_changed`

*Triggered when the channel(s) connected to the site have changed*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$term` |  | 
`Channel::STATUS_PRIMARY` |  | 

Source: [src/BigCommerce/Settings/Sections/Channels.php](BigCommerce/Settings/Sections/Channels.php), [line 364](BigCommerce/Settings/Sections/Channels.php#L364-L370)

### `bigcommerce/settings/render/currency`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Currency.php](BigCommerce/Settings/Sections/Currency.php), [line 89](BigCommerce/Settings/Sections/Currency.php#L89-L89)

### `bigcommerce/settings/render/nav_menu_options/top`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Nav_Menu_Options.php](BigCommerce/Settings/Sections/Nav_Menu_Options.php), [line 25](BigCommerce/Settings/Sections/Nav_Menu_Options.php#L25-L25)

### `bigcommerce/settings/render/credentials`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Api_Credentials.php](BigCommerce/Settings/Sections/Api_Credentials.php), [line 31](BigCommerce/Settings/Sections/Api_Credentials.php#L31-L31)

### `bigcommerce/settings/api_credentials_updated`

*Fires (once per pageload) when an API credential setting updates.*


Source: [src/BigCommerce/Settings/Sections/Api_Credentials.php](BigCommerce/Settings/Sections/Api_Credentials.php), [line 208](BigCommerce/Settings/Sections/Api_Credentials.php#L208-L211)

### `bigcommerce/settings/render/cart`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Cart.php](BigCommerce/Settings/Sections/Cart.php), [line 149](BigCommerce/Settings/Sections/Cart.php#L149-L149)

### `bigcommerce/settings/render/channel_select`


Source: [src/BigCommerce/Settings/Sections/Channel_Select.php](BigCommerce/Settings/Sections/Channel_Select.php), [line 71](BigCommerce/Settings/Sections/Channel_Select.php#L71-L71)

### `bigcommerce/settings/accounts/before_page_field`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$page` |  | 
`$value` |  | 

Source: [src/BigCommerce/Settings/Sections/WithPages.php](BigCommerce/Settings/Sections/WithPages.php), [line 17](BigCommerce/Settings/Sections/WithPages.php#L17-L17)

### `bigcommerce/settings/accounts/before_page_field/page={$option}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$page` |  | 
`$value` |  | 

Source: [src/BigCommerce/Settings/Sections/WithPages.php](BigCommerce/Settings/Sections/WithPages.php), [line 18](BigCommerce/Settings/Sections/WithPages.php#L18-L18)

### `bigcommerce/settings/accounts/after_page_field`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$page` |  | 
`$value` |  | 

Source: [src/BigCommerce/Settings/Sections/WithPages.php](BigCommerce/Settings/Sections/WithPages.php), [line 38](BigCommerce/Settings/Sections/WithPages.php#L38-L38)

### `bigcommerce/settings/accounts/after_page_field/page={$option}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$page` |  | 
`$value` |  | 

Source: [src/BigCommerce/Settings/Sections/WithPages.php](BigCommerce/Settings/Sections/WithPages.php), [line 39](BigCommerce/Settings/Sections/WithPages.php#L39-L39)

### `bigcommerce/settings/render/analytics`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` |  | 

Source: [src/BigCommerce/Settings/Sections/Analytics.php](BigCommerce/Settings/Sections/Analytics.php), [line 50](BigCommerce/Settings/Sections/Analytics.php#L50-L50)

### `Cron_Runner::START_CRON`


Source: [src/BigCommerce/Settings/Import_Now.php](BigCommerce/Settings/Import_Now.php), [line 132](BigCommerce/Settings/Import_Now.php#L132-L144)

### `bigcommerce/settings/import/product_list_table_notice`

*Print the import button into the notices section
of the products admin list table.*


Source: [src/BigCommerce/Settings/Import_Now.php](BigCommerce/Settings/Import_Now.php), [line 166](BigCommerce/Settings/Import_Now.php#L166-L177)

### `bigcommerce/settings/after_content/page=static::NAME`

*Triggered before the settings screen form starts to render.*

The dynamic portion of the hook is the identifier of the settings screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->hook_suffix` |  | 

Source: [src/BigCommerce/Settings/Screens/Pending_Account_Screen.php](BigCommerce/Settings/Screens/Pending_Account_Screen.php), [line 47](BigCommerce/Settings/Screens/Pending_Account_Screen.php#L47-L53)

### `bigcommerce/settings/before_title/page=static::NAME`


Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 58](BigCommerce/Settings/Screens/Abstract_Screen.php#L58-L58)

### `bigcommerce/settings/register/screen=static::NAME`

*Triggered after registering a settings screen. The dynamic
portion of the hook is the name of the screen.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->hook_suffix` |  | 
`static::NAME` |  | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 91](BigCommerce/Settings/Screens/Abstract_Screen.php#L91-L98)

### `bigcommerce/settings/after_start_form/page=static::NAME`

*Triggered after the opening <form> tag on the settings screen form finishes rendering.*

The dynamic portion of the hook is the identifier of the settings screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->hook_suffix` |  | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 138](BigCommerce/Settings/Screens/Abstract_Screen.php#L138-L144)

### `bigcommerce/settings/before_end_form/page=static::NAME`

*Triggered before the closing </form> tag on the settings screen form finishes rendering.*

The dynamic portion of the hook is the identifier of the settings screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->hook_suffix` |  | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 148](BigCommerce/Settings/Screens/Abstract_Screen.php#L148-L154)

### `bigcommerce/settings/before_form/page=static::NAME`

*Triggered before the settings screen form starts to render.*

The dynamic portion of the hook is the identifier of the settings screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->hook_suffix` |  | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 183](BigCommerce/Settings/Screens/Abstract_Screen.php#L183-L189)

### `bigcommerce/settings/after_form/page=static::NAME`

*Triggered after the settings screen form finishes rendering.*

The dynamic portion of the hook is the identifier of the settings screen.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->hook_suffix` |  | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 193](BigCommerce/Settings/Screens/Abstract_Screen.php#L193-L199)

### `bigcommerce/settings/section/before/id={$section}[id]`

*Fires before rendering a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 219](BigCommerce/Settings/Screens/Abstract_Screen.php#L219-L225)

### `bigcommerce/settings/section/after/id={$section}[id]`

*Fires after rendering a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 235](BigCommerce/Settings/Screens/Abstract_Screen.php#L235-L241)

### `bigcommerce/settings/section/before_title/id={$section}[id]`

*Fires before rendering the title of a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 256](BigCommerce/Settings/Screens/Abstract_Screen.php#L256-L262)

### `bigcommerce/settings/section/after_title/id={$section}[id]`

*Fires after rendering the title of a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 268](BigCommerce/Settings/Screens/Abstract_Screen.php#L268-L274)

### `bigcommerce/settings/section/before_callback/id={$section}[id]`

*Fires before calling the callback of a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 292](BigCommerce/Settings/Screens/Abstract_Screen.php#L292-L298)

### `bigcommerce/settings/section/after_callback/id={$section}[id]`

*Fires after calling the callback of a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 304](BigCommerce/Settings/Screens/Abstract_Screen.php#L304-L310)

### `bigcommerce/settings/section/before_fields/id={$section}[id]`

*Fires before rendering the fields of a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 
`$has_fields` | `bool` | Whether the settings section has any fields to render

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 314](BigCommerce/Settings/Screens/Abstract_Screen.php#L314-L321)

### `bigcommerce/settings/section/after_fields/id={$section}[id]`

*Fires after rendering the fields of a settings section.*

The dynamic portion of the hook name is the section ID.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$section` | `array` | 
`$has_fields` | `bool` | Whether the settings section has any fields to render

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 329](BigCommerce/Settings/Screens/Abstract_Screen.php#L329-L336)

### `bigcommerce/settings/unregistered_screen`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`static::NAME` |  | 

Source: [src/BigCommerce/Settings/Screens/Abstract_Screen.php](BigCommerce/Settings/Screens/Abstract_Screen.php), [line 346](BigCommerce/Settings/Screens/Abstract_Screen.php#L346-L346)

### `bigcommerce/settings/header/import_status`

*Triggered after rendering the last import date in the settings header*


Source: [src/BigCommerce/Settings/Screens/Settings_Screen.php](BigCommerce/Settings/Screens/Settings_Screen.php), [line 64](BigCommerce/Settings/Screens/Settings_Screen.php#L64-L67)

### `bigcommerce/create_account/validate_request`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$submission` |  | 
`$errors` |  | 

Source: [src/BigCommerce/Settings/Screens/Create_Account_Screen.php](BigCommerce/Settings/Screens/Create_Account_Screen.php), [line 64](BigCommerce/Settings/Screens/Create_Account_Screen.php#L64-L79)

### `bigcommerce/create_account/submit_request`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$submission[New_Account_Section::STORE_INFO]` |  | 
`$errors` |  | 

Source: [src/BigCommerce/Settings/Screens/Create_Account_Screen.php](BigCommerce/Settings/Screens/Create_Account_Screen.php), [line 64](BigCommerce/Settings/Screens/Create_Account_Screen.php#L64-L82)

### `bigcommerce/settings/onboarding/progress`


Source: [src/BigCommerce/Settings/Screens/Onboarding_Screen.php](BigCommerce/Settings/Screens/Onboarding_Screen.php), [line 18](BigCommerce/Settings/Screens/Onboarding_Screen.php#L18-L18)

### `bigcommerce/log`

*Abort import process, make cleanup and set self::ABORT_IMPORT_OPTION option in order
to detect on next stages that import was aborted*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Import process has been aborted. Run import cleanup', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Settings/Abort_Import.php](BigCommerce/Settings/Abort_Import.php), [line 21](BigCommerce/Settings/Abort_Import.php#L21-L36)

### `bigcommerce/log`

*Get task by state. Return NULL if task is not found*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('No handler found for current import state', 'bigcommerce')` |  | 
`['state' => $state]` |  | 

Source: [src/BigCommerce/Settings/Import_Status.php](BigCommerce/Settings/Import_Status.php), [line 239](BigCommerce/Settings/Import_Status.php#L239-L252)

### `bigcommerce/log`

*Get task by state. Return NULL if task is not found*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Could not process the task', 'bigcommerce')` |  | 
`['code' => $e->getCode(), 'message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]` |  | 

Source: [src/BigCommerce/Settings/Import_Status.php](BigCommerce/Settings/Import_Status.php), [line 239](BigCommerce/Settings/Import_Status.php#L239-L257)

### `bigcommerce/log`

*Check if customer email is already owned*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Could not check if user exists.', 'bigcommerce')` |  | 
`['user_email' => $email]` |  | 

Source: [src/BigCommerce/Accounts/Register.php](BigCommerce/Accounts/Register.php), [line 67](BigCommerce/Accounts/Register.php#L67-L90)

### `bigcommerce/log`

*Check if customer email is already owned*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$exception->getMessage()` |  | 
`['trace' => $exception->getTraceAsString()]` |  | 

Source: [src/BigCommerce/Accounts/Register.php](BigCommerce/Accounts/Register.php), [line 67](BigCommerce/Accounts/Register.php#L67-L93)

### `bigcommerce/log`

*Create new customer with V3 API and associate primary channel*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Unable to create customer.', 'bigcommerce')` |  | 
`['user_id' => $user_id, 'userdata' => $userdata]` |  | 

Source: [src/BigCommerce/Accounts/Register.php](BigCommerce/Accounts/Register.php), [line 99](BigCommerce/Accounts/Register.php#L99-L145)

### `bigcommerce/log`

*Create new customer with V3 API and associate primary channel*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$exception->getMessage()` |  | 
`['trace' => $exception->getTraceAsString()]` |  | 

Source: [src/BigCommerce/Accounts/Register.php](BigCommerce/Accounts/Register.php), [line 99](BigCommerce/Accounts/Register.php#L99-L148)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Customer groups are empty', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Customer.php](BigCommerce/Accounts/Customer.php), [line 382](BigCommerce/Accounts/Customer.php#L382-L394)

### `bigcommerce/form/success`

*Update single wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Wish List updated', 'bigcommerce')` |  | 
`$submission` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Edit_Wishlist.php](BigCommerce/Accounts/Wishlists/Actions/Edit_Wishlist.php), [line 17](BigCommerce/Accounts/Wishlists/Actions/Edit_Wishlist.php#L17-L37)

### `bigcommerce/form/error`

*Update single wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new \WP_Error($e->getCode(), $e->getMessage())` |  | 
`$_POST` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Edit_Wishlist.php](BigCommerce/Accounts/Wishlists/Actions/Edit_Wishlist.php), [line 17](BigCommerce/Accounts/Wishlists/Actions/Edit_Wishlist.php#L17-L39)

### `bigcommerce/wishlist_endpoint/{$action}`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Request_Router.php](BigCommerce/Accounts/Wishlists/Actions/Request_Router.php), [line 14](BigCommerce/Accounts/Wishlists/Actions/Request_Router.php#L14-L22)

### `bigcommerce/form/success`

*Class Create_Wishlist*

Handle wishlist creation logic

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Wish List created', 'bigcommerce')` |  | 
`$submission` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Create_Wishlist.php](BigCommerce/Accounts/Wishlists/Actions/Create_Wishlist.php), [line 11](BigCommerce/Accounts/Wishlists/Actions/Create_Wishlist.php#L11-L36)

### `bigcommerce/form/error`

*Class Create_Wishlist*

Handle wishlist creation logic

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new \WP_Error($e->getCode(), $e->getMessage())` |  | 
`$_POST` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Create_Wishlist.php](BigCommerce/Accounts/Wishlists/Actions/Create_Wishlist.php), [line 11](BigCommerce/Accounts/Wishlists/Actions/Create_Wishlist.php#L11-L38)

### `bigcommerce/form/success`

*Class Add_Item*

Handle requests for adding items

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` |  | 
`$submission` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Add_Item.php](BigCommerce/Accounts/Wishlists/Actions/Add_Item.php), [line 12](BigCommerce/Accounts/Wishlists/Actions/Add_Item.php#L12-L46)

### `bigcommerce/form/error`

*Class Add_Item*

Handle requests for adding items

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new \WP_Error($e->getCode(), $e->getMessage())` |  | 
`$_POST` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Add_Item.php](BigCommerce/Accounts/Wishlists/Actions/Add_Item.php), [line 12](BigCommerce/Accounts/Wishlists/Actions/Add_Item.php#L12-L48)

### `bigcommerce/form/success`

*Delete requested wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Wish List deleted', 'bigcommerce')` |  | 
`$submission` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Delete_Wishlist.php](BigCommerce/Accounts/Wishlists/Actions/Delete_Wishlist.php), [line 16](BigCommerce/Accounts/Wishlists/Actions/Delete_Wishlist.php#L16-L28)

### `bigcommerce/form/error`

*Delete requested wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new \WP_Error($e->getCode(), $e->getMessage())` |  | 
`$_POST` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Delete_Wishlist.php](BigCommerce/Accounts/Wishlists/Actions/Delete_Wishlist.php), [line 16](BigCommerce/Accounts/Wishlists/Actions/Delete_Wishlist.php#L16-L30)

### `bigcommerce/form/success`

*Class Remove_Item*

Handle item removing request for wishlist

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` |  | 
`$submission` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Remove_Item.php](BigCommerce/Accounts/Wishlists/Actions/Remove_Item.php), [line 11](BigCommerce/Accounts/Wishlists/Actions/Remove_Item.php#L11-L49)

### `bigcommerce/form/error`

*Class Remove_Item*

Handle item removing request for wishlist

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new \WP_Error($e->getCode(), $e->getMessage())` |  | 
`$_POST` |  | 
`$redirect` |  | 
`[]` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Actions/Remove_Item.php](BigCommerce/Accounts/Wishlists/Actions/Remove_Item.php), [line 11](BigCommerce/Accounts/Wishlists/Actions/Remove_Item.php#L11-L51)

### `login_form`


Source: [src/BigCommerce/Templates/Login_Form.php](BigCommerce/Templates/Login_Form.php), [line 39](BigCommerce/Templates/Login_Form.php#L39-L39)

### `bigcommerce/log`

*Class Products_Controller*

REST controller to provide product information

Usage:

/wp-json/bigcommerce/v1/products

Query Args:
 - per_page: results per page, defaults to 10
 - page: which page of results, defaults to 1
 - search: search string to filter results
 - bigcommerce_category: Product category term IDs, accepts array or comma delimited term IDs
 - bigcommerce_brand: Product brand term IDs, accepts array or comma delimited term IDs
 - bigcommerce_flag: Product flag term IDs (e.g., featured, sale), accepts array or comma delimited term IDs
 - order: sort results by title. Valid values are 'asc' or 'desc' (case sensitive), defaults to 'asc'.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`['request' => $request_data]` |  | 
`'rest'` |  | 

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 24](BigCommerce/Rest/Products_Controller.php#L24-L132)

### `bigcommerce/log`

*Class Products_Controller*

REST controller to provide product information

Usage:

/wp-json/bigcommerce/v1/products

Query Args:
 - per_page: results per page, defaults to 10
 - page: which page of results, defaults to 1
 - search: search string to filter results
 - bigcommerce_category: Product category term IDs, accepts array or comma delimited term IDs
 - bigcommerce_brand: Product brand term IDs, accepts array or comma delimited term IDs
 - bigcommerce_flag: Product flag term IDs (e.g., featured, sale), accepts array or comma delimited term IDs
 - order: sort results by title. Valid values are 'asc' or 'desc' (case sensitive), defaults to 'asc'.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`['request' => $request_data]` |  | 
`'rest'` |  | 

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 24](BigCommerce/Rest/Products_Controller.php#L24-L251)

### `bigcommerce/log`

*Retrieves a collection of products.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Product debug', 'bigcommerce')` |  | 
`['args' => $query_args]` |  | 

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 260](BigCommerce/Rest/Products_Controller.php#L260-L307)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`['request' => $request_data]` |  | 
`'rest'` |  | 

Source: [src/BigCommerce/Rest/Terms_Controller.php](BigCommerce/Rest/Terms_Controller.php), [line 55](BigCommerce/Rest/Terms_Controller.php#L55-L82)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`['request' => $request_data]` |  | 
`'rest'` |  | 

Source: [src/BigCommerce/Rest/Terms_Controller.php](BigCommerce/Rest/Terms_Controller.php), [line 95](BigCommerce/Rest/Terms_Controller.php#L95-L95)

### `bigcommerce/form/redirect`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` |  | 

Source: [src/BigCommerce/Forms/Error_Handler.php](BigCommerce/Forms/Error_Handler.php), [line 10](BigCommerce/Forms/Error_Handler.php#L10-L33)

### `bigcommerce/form/error`

*Triggered when a form has errors that prevent completion.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | The message that will display to the user
`$submission` | `array` | The data submitted to the form

Source: [src/BigCommerce/Forms/Product_Review_Handler.php](BigCommerce/Forms/Product_Review_Handler.php), [line 38](BigCommerce/Forms/Product_Review_Handler.php#L38-L44)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Product_Review_Handler.php](BigCommerce/Forms/Product_Review_Handler.php), [line 71](BigCommerce/Forms/Product_Review_Handler.php#L71-L71)

### `bigcommerce/form/success`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` |  | 
`$submission` |  | 
`null` |  | 

Source: [src/BigCommerce/Forms/Product_Review_Handler.php](BigCommerce/Forms/Product_Review_Handler.php), [line 82](BigCommerce/Forms/Product_Review_Handler.php#L82-L82)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Update_Address_Handler.php](BigCommerce/Forms/Update_Address_Handler.php), [line 22](BigCommerce/Forms/Update_Address_Handler.php#L22-L22)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Update_Address_Handler.php](BigCommerce/Forms/Update_Address_Handler.php), [line 39](BigCommerce/Forms/Update_Address_Handler.php#L39-L39)

### `bigcommerce/form/success`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` |  | 
`$submission` |  | 
`null` |  | 
`['key' => 'address_created']` |  | 

Source: [src/BigCommerce/Forms/Update_Address_Handler.php](BigCommerce/Forms/Update_Address_Handler.php), [line 51](BigCommerce/Forms/Update_Address_Handler.php#L51-L51)

### `bigcommerce/form/success`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` |  | 
`$submission` |  | 
`null` |  | 
`['key' => 'address_saved']` |  | 

Source: [src/BigCommerce/Forms/Update_Address_Handler.php](BigCommerce/Forms/Update_Address_Handler.php), [line 59](BigCommerce/Forms/Update_Address_Handler.php#L59-L59)

### `bigcommerce/form/redirect`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` |  | 

Source: [src/BigCommerce/Forms/Success_Handler.php](BigCommerce/Forms/Success_Handler.php), [line 10](BigCommerce/Forms/Success_Handler.php#L10-L37)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Switch_Currency_Handler.php](BigCommerce/Forms/Switch_Currency_Handler.php), [line 47](BigCommerce/Forms/Switch_Currency_Handler.php#L47-L47)

### `bigcommerce/form/success`

*Triggered when a form is successfully processed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` | `string` | The message that will display to the user
`$submission` | `array` | The data submitted with the form
`$url` | `string` | The URL to redirect the user to
`['key' => 'currency_switched']` |  | 

Source: [src/BigCommerce/Forms/Switch_Currency_Handler.php](BigCommerce/Forms/Switch_Currency_Handler.php), [line 76](BigCommerce/Forms/Switch_Currency_Handler.php#L76-L84)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Delete_Address_Handler.php](BigCommerce/Forms/Delete_Address_Handler.php), [line 20](BigCommerce/Forms/Delete_Address_Handler.php#L20-L20)

### `bigcommerce/form/success`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Address deleted.', 'bigcommerce')` |  | 
`$submission` |  | 
`null` |  | 
`['key' => 'address_deleted']` |  | 

Source: [src/BigCommerce/Forms/Delete_Address_Handler.php](BigCommerce/Forms/Delete_Address_Handler.php), [line 30](BigCommerce/Forms/Delete_Address_Handler.php#L30-L30)

### `bigcommerce/form/error`

*Triggered when a form has errors that prevent completion.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | The message that will display to the user
`$submission` | `array` | The data submitted to the form

Source: [src/BigCommerce/Forms/Registration_Handler.php](BigCommerce/Forms/Registration_Handler.php), [line 56](BigCommerce/Forms/Registration_Handler.php#L56-L62)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Registration_Handler.php](BigCommerce/Forms/Registration_Handler.php), [line 92](BigCommerce/Forms/Registration_Handler.php#L92-L92)

### `bigcommerce/form/success`

*Triggered when a form is successfully processed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` | `string` | The message that will display to the user
`$submission` | `array` | The data submitted with the form
`$url` | `string` | The URL to redirect the user to
`['key' => 'account_created']` |  | 

Source: [src/BigCommerce/Forms/Registration_Handler.php](BigCommerce/Forms/Registration_Handler.php), [line 151](BigCommerce/Forms/Registration_Handler.php#L151-L159)

### `bigcommerce/form/error`

*Triggered when a form has errors that prevent completion.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | The message that will display to the user
`$submission` | `array` | The data submitted to the form

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 37](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L37-L43)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$error` |  | 
`$submission` |  | 
`$url` |  | 

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 70](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L70-L70)

### `bigcommerce/form/success`

*Triggered when a form is successfully processed.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` | `string` | The message that will display to the user
`$submission` | `array` | The data submitted with the form
`$url` | `string` | The URL to redirect the user to

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 91](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L91-L98)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Update_Profile_Handler.php](BigCommerce/Forms/Update_Profile_Handler.php), [line 28](BigCommerce/Forms/Update_Profile_Handler.php#L28-L28)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Update_Profile_Handler.php](BigCommerce/Forms/Update_Profile_Handler.php), [line 64](BigCommerce/Forms/Update_Profile_Handler.php#L64-L64)

### `bigcommerce/form/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` |  | 

Source: [src/BigCommerce/Forms/Update_Profile_Handler.php](BigCommerce/Forms/Update_Profile_Handler.php), [line 73](BigCommerce/Forms/Update_Profile_Handler.php#L73-L73)

### `bigcommerce/form/success`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$message` |  | 
`$submission` |  | 
`null` |  | 
`['key' => 'profile_updated']` |  | 

Source: [src/BigCommerce/Forms/Update_Profile_Handler.php](BigCommerce/Forms/Update_Profile_Handler.php), [line 84](BigCommerce/Forms/Update_Profile_Handler.php#L84-L84)

### `bigcommerce/form/before_redirect`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` |  | 

Source: [src/BigCommerce/Forms/Form_Redirect.php](BigCommerce/Forms/Form_Redirect.php), [line 21](BigCommerce/Forms/Form_Redirect.php#L21-L21)

### `bigcommerce/log`

*Process tasks queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Task queue is empty', 'bigcommerce')` |  | 
`[]` |  | 
`'manager'` |  | 

Source: [src/BigCommerce/Manager/Manager.php](BigCommerce/Manager/Manager.php), [line 18](BigCommerce/Manager/Manager.php#L18-L29)

### `bigcommerce/log`

*Process tasks queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Task handler is empty or does not exist', 'bigcommerce')` |  | 
`['task' => $task]` |  | 
`'manager'` |  | 

Source: [src/BigCommerce/Manager/Manager.php](BigCommerce/Manager/Manager.php), [line 18](BigCommerce/Manager/Manager.php#L18-L38)

### `bigcommerce/log`

*Process tasks queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not handle task', 'bigcommerce')` |  | 
`['task' => $task]` |  | 
`'manager'` |  | 

Source: [src/BigCommerce/Manager/Manager.php](BigCommerce/Manager/Manager.php), [line 18](BigCommerce/Manager/Manager.php#L18-L50)

### `bigcommerce/log`

*Process tasks queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Task finished', 'bigcommerce')` |  | 
`['task' => $task]` |  | 
`'manager'` |  | 

Source: [src/BigCommerce/Manager/Manager.php](BigCommerce/Manager/Manager.php), [line 18](BigCommerce/Manager/Manager.php#L18-L57)

### `bigcommerce/import/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Channel ID is not set. Product import canceled.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Import/Processors/Listing_Fetcher.php](BigCommerce/Import/Processors/Listing_Fetcher.php), [line 57](BigCommerce/Import/Processors/Listing_Fetcher.php#L57-L57)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Retrieving listings', 'bigcommerce')` |  | 
`['limit' => $this->limit, 'after' => $next ?: null]` |  | 

Source: [src/BigCommerce/Import/Processors/Listing_Fetcher.php](BigCommerce/Import/Processors/Listing_Fetcher.php), [line 84](BigCommerce/Import/Processors/Listing_Fetcher.php#L84-L87)

### `bigcommerce/import/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Listing_Fetcher.php](BigCommerce/Import/Processors/Listing_Fetcher.php), [line 96](BigCommerce/Import/Processors/Listing_Fetcher.php#L96-L99)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Listing_Fetcher.php](BigCommerce/Import/Processors/Listing_Fetcher.php), [line 100](BigCommerce/Import/Processors/Listing_Fetcher.php#L100-L100)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Ready for next page of listings', 'bigcommerce')` |  | 
`['next' => $next]` |  | 

Source: [src/BigCommerce/Import/Processors/Listing_Fetcher.php](BigCommerce/Import/Processors/Listing_Fetcher.php), [line 116](BigCommerce/Import/Processors/Listing_Fetcher.php#L116-L118)

### `bigcommerce/log`

*Purge BC products*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Could not delete product data', 'bigcommerce')` |  | 
`['post_id' => $post_id]` |  | 

Source: [src/BigCommerce/Import/Processors/ProductCleanup.php](BigCommerce/Import/Processors/ProductCleanup.php), [line 13](BigCommerce/Import/Processors/ProductCleanup.php#L13-L74)

### `bigcommerce/log`

*Purge BC products*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__(sprintf('Products data purge completed for channel %d', $term_id), 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/ProductCleanup.php](BigCommerce/Import/Processors/ProductCleanup.php), [line 13](BigCommerce/Import/Processors/ProductCleanup.php#L13-L79)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Retrieve storefront settings', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 10](BigCommerce/Import/Processors/Storefront_Processor.php#L10-L54)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Could not retrieve channels settings', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 10](BigCommerce/Import/Processors/Storefront_Processor.php#L10-L59)

### `bigcommerce/log`

*Get and save storefront product settings
/stores/{store_hash}/v3/settings/storefront/product
https://developer.bigcommerce.com/api-reference/d4a004e640c74-get-storefront-product-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Channel ID is empty. Could not get storefront product settings', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 72](BigCommerce/Import/Processors/Storefront_Processor.php#L72-L84)

### `bigcommerce/log`

*Get and save storefront product settings
/stores/{store_hash}/v3/settings/storefront/product
https://developer.bigcommerce.com/api-reference/d4a004e640c74-get-storefront-product-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Get storefront product settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 72](BigCommerce/Import/Processors/Storefront_Processor.php#L72-L91)

### `bigcommerce/log`

*Get and save storefront product settings
/stores/{store_hash}/v3/settings/storefront/product
https://developer.bigcommerce.com/api-reference/d4a004e640c74-get-storefront-product-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not get storefront product settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'code' => $exception->getCode(), 'message' => $exception->getMessage()]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 72](BigCommerce/Import/Processors/Storefront_Processor.php#L72-L114)

### `bigcommerce/log`

*Get and save storefront product settings
/stores/{store_hash}/v3/settings/storefront/product
https://developer.bigcommerce.com/api-reference/d4a004e640c74-get-storefront-product-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Save storefront product settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 72](BigCommerce/Import/Processors/Storefront_Processor.php#L72-L120)

### `bigcommerce/log`

*Get and save storefront status settings
/stores/{store_hash}/v3/settings/storefront/status
https://developer.bigcommerce.com/api-reference/9c3e93feb6a21-get-storefront-status*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Channel ID is empty. Could not get storefront status', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 127](BigCommerce/Import/Processors/Storefront_Processor.php#L127-L141)

### `bigcommerce/log`

*Get and save storefront status settings
/stores/{store_hash}/v3/settings/storefront/status
https://developer.bigcommerce.com/api-reference/9c3e93feb6a21-get-storefront-status*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Get storefront status settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 127](BigCommerce/Import/Processors/Storefront_Processor.php#L127-L148)

### `bigcommerce/log`

*Get and save storefront status settings
/stores/{store_hash}/v3/settings/storefront/status
https://developer.bigcommerce.com/api-reference/9c3e93feb6a21-get-storefront-status*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not get storefront status', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'code' => $exception->getCode(), 'message' => $exception->getMessage()]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 127](BigCommerce/Import/Processors/Storefront_Processor.php#L127-L161)

### `bigcommerce/log`

*Get and save storefront status settings
/stores/{store_hash}/v3/settings/storefront/status
https://developer.bigcommerce.com/api-reference/9c3e93feb6a21-get-storefront-status*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Save storefront status settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 127](BigCommerce/Import/Processors/Storefront_Processor.php#L127-L167)

### `bigcommerce/log`

*Get and store storefront profile settings
/stores/{store_hash}/v3/settings/storefront/profile
https://developer.bigcommerce.com/api-reference/ac86db39bc51e-get-store-profile-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Channel ID is empty. Could not get storefront profile', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 173](BigCommerce/Import/Processors/Storefront_Processor.php#L173-L185)

### `bigcommerce/log`

*Get and store storefront profile settings
/stores/{store_hash}/v3/settings/storefront/profile
https://developer.bigcommerce.com/api-reference/ac86db39bc51e-get-store-profile-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Get storefront profile settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 173](BigCommerce/Import/Processors/Storefront_Processor.php#L173-L192)

### `bigcommerce/log`

*Get and store storefront profile settings
/stores/{store_hash}/v3/settings/storefront/profile
https://developer.bigcommerce.com/api-reference/ac86db39bc51e-get-store-profile-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not get storefront profile settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'code' => $exception->getCode(), 'message' => $exception->getMessage()]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 173](BigCommerce/Import/Processors/Storefront_Processor.php#L173-L206)

### `bigcommerce/log`

*Get and store storefront profile settings
/stores/{store_hash}/v3/settings/storefront/profile
https://developer.bigcommerce.com/api-reference/ac86db39bc51e-get-store-profile-settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Save storefront profile settings', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Storefront_Processor.php](BigCommerce/Import/Processors/Storefront_Processor.php), [line 173](BigCommerce/Import/Processors/Storefront_Processor.php#L173-L212)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getMessage()` |  | 
`['response' => method_exists($e, 'getResponseBody') ? $e->getResponseBody() : $e->getTraceAsString(), 'headers' => method_exists($e, 'getResponseHeaders') ? $e->getResponseHeaders() : '']` |  | 

Source: [src/BigCommerce/Import/Processors/Brand_Import.php](BigCommerce/Import/Processors/Brand_Import.php), [line 80](BigCommerce/Import/Processors/Brand_Import.php#L80-L83)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Brand_Import.php](BigCommerce/Import/Processors/Brand_Import.php), [line 85](BigCommerce/Import/Processors/Brand_Import.php#L85-L85)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Unable to fetch categories with GraphQL. Fallback to REST API', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 28](BigCommerce/Import/Processors/Category_Import.php#L28-L28)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Current data is not an array or is empty.', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 51](BigCommerce/Import/Processors/Category_Import.php#L51-L51)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Pagination information is missing in the response meta.', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 60](BigCommerce/Import/Processors/Category_Import.php#L60-L60)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('getMeta method does not exist on the data object.', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 64](BigCommerce/Import/Processors/Category_Import.php#L64-L64)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('No data returned from get_msf_categories.', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 68](BigCommerce/Import/Processors/Category_Import.php#L68-L68)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__("Category import Page {$currentPage} of {$totalPages}", 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 72](BigCommerce/Import/Processors/Category_Import.php#L72-L72)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__("Total categories found: " . count($allCategories), 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 77](BigCommerce/Import/Processors/Category_Import.php#L77-L77)

### `bigcommerce/import/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 87](BigCommerce/Import/Processors/Category_Import.php#L87-L90)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Category_Import.php](BigCommerce/Import/Processors/Category_Import.php), [line 92](BigCommerce/Import/Processors/Category_Import.php#L92-L92)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Starting import', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Start_Import.php](BigCommerce/Import/Processors/Start_Import.php), [line 12](BigCommerce/Import/Processors/Start_Import.php#L12-L12)

### `bigcommerce/log`

*Check if the product exists*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Product entity exists. Skipping.', 'bigcommerce')` |  | 
`['product_id' => $product->getId(), 'channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 68](BigCommerce/Import/Processors/Channel_Initializer.php#L68-L84)

### `bigcommerce/import/error`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Channel ID is not set. Product import canceled.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L99)

### `bigcommerce/import/error`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L116)

### `bigcommerce/log`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L117)

### `bigcommerce/log`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Skipping channel initialization due to settings', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L126)

### `bigcommerce/log`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Retrieving products', 'bigcommerce')` |  | 
`['limit' => $this->limit, 'page' => $page]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L138)

### `bigcommerce/import/error`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L151)

### `bigcommerce/log`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L152)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Product already linked to channel. Skipping.', 'bigcommerce')` |  | 
`['product_id' => $product->getId(), 'channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 170](BigCommerce/Import/Processors/Channel_Initializer.php#L170-L173)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Product does not belong in this channel. Skipping.', 'bigcommerce')` |  | 
`['product_id' => $product->getId(), 'channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 180](BigCommerce/Import/Processors/Channel_Initializer.php#L180-L183)

### `bigcommerce/log`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Adding products to channel', 'bigcommerce')` |  | 
`['count' => count($listing_requests)]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L208)

### `bigcommerce/import/error`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L220)

### `bigcommerce/log`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L221)

### `bigcommerce/log`

*Class Channel_Initializer*

Populates an empty channel with the full product catalog

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Channel initialization ready for next page of products', 'bigcommerce')` |  | 
`['next' => $page + 1]` |  | 

Source: [src/BigCommerce/Import/Processors/Channel_Initializer.php](BigCommerce/Import/Processors/Channel_Initializer.php), [line 23](BigCommerce/Import/Processors/Channel_Initializer.php#L23-L231)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Retrieving product data', 'bigcommerce')` |  | 
`['limit' => $this->limit, 'after' => $next ?: null]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 49](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L49-L52)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('No products left to retrieve', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 60](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L60-L60)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Retrieving products found in listings', 'bigcommerce')` |  | 
`['limit' => $this->limit, 'ids' => $product_ids]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 67](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L67-L70)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`'API issue during the products data fetch'` |  | 
`['message' => $e->getCode(), 'code' => $e->getMessage(), 'response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 78](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L78-L83)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 85](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L85-L85)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 90](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L90-L90)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Chunk failed. Finish chunk processing and move to next chunk', 'bigcommerce')` |  | 
`['limit' => $this->limit, 'ids' => $product_ids]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 91](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L91-L94)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Adding products to the import queue', 'bigcommerce')` |  | 
`['count' => count($inserts)]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 127](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L127-L129)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Error adding record to import queue', 'bigcommerce')` |  | 
`['product_id' => $record['product_id'], 'error' => $task_id->get_error_message()]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 151](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L151-L154)

### `bigcommerce/import/fetched_products`

*Triggered when a batch of products have been fetched from the BigCommerce
API and stored in the import queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$count` | `int` | The number of products added to the queue
`$products_response` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 168](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L168-L175)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Ready for next page of products', 'bigcommerce')` |  | 
`['next' => $next]` |  | 

Source: [src/BigCommerce/Import/Processors/Product_Data_Fetcher.php](BigCommerce/Import/Processors/Product_Data_Fetcher.php), [line 183](BigCommerce/Import/Processors/Product_Data_Fetcher.php#L183-L185)

### `Cron_Runner::START_CRON`

*Start usual import process with storing products in WP database*


Source: [src/BigCommerce/Import/Processors/Headless.php](BigCommerce/Import/Processors/Headless.php), [line 20](BigCommerce/Import/Processors/Headless.php#L20-L28)

### `bigcommerce/log`

*Class Term_Purge*

Deletes imported terms that no longer exist in BigCommerce

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`sprintf(__('Removing deleted terms for %s taxonomy', 'bigcommerce'), $this->taxonomy())` |  | 
`['page' => $page, 'limit' => $this->batch_size, 'taxonomy' => $this->taxonomy()]` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Purge.php](BigCommerce/Import/Processors/Term_Purge.php), [line 12](BigCommerce/Import/Processors/Term_Purge.php#L12-L71)

### `bigcommerce/import/error`

*Class Term_Purge*

Deletes imported terms that no longer exist in BigCommerce

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Purge.php](BigCommerce/Import/Processors/Term_Purge.php), [line 12](BigCommerce/Import/Processors/Term_Purge.php#L12-L79)

### `bigcommerce/log`

*Class Term_Purge*

Deletes imported terms that no longer exist in BigCommerce

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Purge.php](BigCommerce/Import/Processors/Term_Purge.php), [line 12](BigCommerce/Import/Processors/Term_Purge.php#L12-L80)

### `bigcommerce/log`

*Class Term_Purge*

Deletes imported terms that no longer exist in BigCommerce

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`sprintf(__('Deleting term %s from taxonomy %s', 'bigcommerce'), $term_id, $this->taxonomy())` |  | 
`['bigcommerce_id' => $bigcommerce_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Purge.php](BigCommerce/Import/Processors/Term_Purge.php), [line 12](BigCommerce/Import/Processors/Term_Purge.php#L12-L91)

### `bigcommerce/log`

*Class Term_Purge*

Deletes imported terms that no longer exist in BigCommerce

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`sprintf(__('%s purge ready for next page of terms', 'bigcommerce'), $this->taxonomy())` |  | 
`['next' => $page + 1, 'taxonomy' => $this->taxonomy()]` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Purge.php](BigCommerce/Import/Processors/Term_Purge.php), [line 12](BigCommerce/Import/Processors/Term_Purge.php#L12-L102)

### `bigcommerce/log`

*Retrieve group_ids from Price Collection Assignments and get first default customer group*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Channel does not have price list assignments', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Default_Customer_Group.php](BigCommerce/Import/Processors/Default_Customer_Group.php), [line 35](BigCommerce/Import/Processors/Default_Customer_Group.php#L35-L52)

### `bigcommerce/log`

*Retrieve group_ids from Price Collection Assignments and get first default customer group*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Could not retrieve default group', 'bigcommerce')` |  | 
`['message' => $exception->getMessage(), 'trace' => $exception->getTraceAsString()]` |  | 

Source: [src/BigCommerce/Import/Processors/Default_Customer_Group.php](BigCommerce/Import/Processors/Default_Customer_Group.php), [line 35](BigCommerce/Import/Processors/Default_Customer_Group.php#L35-L79)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Customer groups are empty', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Default_Customer_Group.php](BigCommerce/Import/Processors/Default_Customer_Group.php), [line 84](BigCommerce/Import/Processors/Default_Customer_Group.php#L84-L91)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`sprintf(__('Importing terms for %s taxonomy', 'bigcommerce'), $this->taxonomy())` |  | 
`['limit' => $this->batch_size, 'taxonomy' => $this->taxonomy()]` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Import.php](BigCommerce/Import/Processors/Term_Import.php), [line 71](BigCommerce/Import/Processors/Term_Import.php#L71-L74)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getMessage()` |  | 
`['response' => method_exists($e, 'getResponseBody') ? $e->getResponseBody() : $e->getTraceAsString(), 'headers' => method_exists($e, 'getResponseHeaders') ? $e->getResponseHeaders() : '']` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Import.php](BigCommerce/Import/Processors/Term_Import.php), [line 86](BigCommerce/Import/Processors/Term_Import.php#L86-L89)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`sprintf(__('Could not find terms for %s. Wrapping up step and go to the next one', 'bigcommerce'), $this->taxonomy())` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Term_Import.php](BigCommerce/Import/Processors/Term_Import.php), [line 96](BigCommerce/Import/Processors/Term_Import.php#L96-L96)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Requesting store settings', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 63](BigCommerce/Import/Processors/Store_Settings.php#L63-L63)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Retrieved store settings', 'bigcommerce')` |  | 
`['settings' => $settings]` |  | 

Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 99](BigCommerce/Import/Processors/Store_Settings.php#L99-L101)

### `bigcommerce/import/fetched_currency`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$settings[Settings\Sections\Currency::CURRENCY_CODE]` |  | 

Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 117](BigCommerce/Import/Processors/Store_Settings.php#L117-L117)

### `bigcommerce/import/fetched_store_settings`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$settings` |  | 

Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 118](BigCommerce/Import/Processors/Store_Settings.php#L118-L118)

### `bigcommerce/import/could_not_fetch_store_settings`


Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 121](BigCommerce/Import/Processors/Store_Settings.php#L121-L121)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Could not retrieve legacy inventory settings', 'bigcommerce')` |  | 
`['message' => $exception->getMessage(), 'trace' => $exception->getTraceAsString()]` |  | 

Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 127](BigCommerce/Import/Processors/Store_Settings.php#L127-L139)

### `bigcommerce/log`

*Save store inventory settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Legacy settings are empty. Continue import', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 145](BigCommerce/Import/Processors/Store_Settings.php#L145-L152)

### `bigcommerce/log`

*Save store inventory settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Legacy settings saved. Continue import', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Store_Settings.php](BigCommerce/Import/Processors/Store_Settings.php), [line 145](BigCommerce/Import/Processors/Store_Settings.php#L145-L165)

### `bigcommerce/log`

*Fetch products data via GraphQL and process it*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Headless processing request is empty', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Headless_Product_Processor.php](BigCommerce/Import/Processors/Headless_Product_Processor.php), [line 57](BigCommerce/Import/Processors/Headless_Product_Processor.php#L57-L74)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Products not found. Headless processing finished', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Headless_Product_Processor.php](BigCommerce/Import/Processors/Headless_Product_Processor.php), [line 91](BigCommerce/Import/Processors/Headless_Product_Processor.php#L91-L91)

### `bigcommerce/import/error`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e->getMessage()` |  | 
`['response' => $e->getResponseBody(), 'headers' => $e->getResponseHeaders()]` |  | 

Source: [src/BigCommerce/Import/Processors/Headless_Product_Processor.php](BigCommerce/Import/Processors/Headless_Product_Processor.php), [line 132](BigCommerce/Import/Processors/Headless_Product_Processor.php#L132-L135)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Headless_Product_Processor.php](BigCommerce/Import/Processors/Headless_Product_Processor.php), [line 136](BigCommerce/Import/Processors/Headless_Product_Processor.php#L136-L136)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Skip processing. Product exists', 'bigcommerce')` |  | 
`['product_id' => $product_id, 'term_id' => $this->channel_term->term_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Headless_Product_Processor.php](BigCommerce/Import/Processors/Headless_Product_Processor.php), [line 158](BigCommerce/Import/Processors/Headless_Product_Processor.php#L158-L161)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Process single product', 'bigcommerce')` |  | 
`['product_id' => $product_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Headless_Product_Processor.php](BigCommerce/Import/Processors/Headless_Product_Processor.php), [line 166](BigCommerce/Import/Processors/Headless_Product_Processor.php#L166-L168)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Unable to create product', 'bigcommerce')` |  | 
`['product_id' => $product_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Headless_Product_Processor.php](BigCommerce/Import/Processors/Headless_Product_Processor.php), [line 177](BigCommerce/Import/Processors/Headless_Product_Processor.php#L177-L179)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Too many failed attempts to process record, aborting', 'bigcommerce')` |  | 
`['record' => $record]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 69](BigCommerce/Import/Processors/Queue_Runner.php#L69-L71)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Exception while handling record', 'bigcommerce')` |  | 
`['record_id' => $record->ID, 'error' => $e->getMessage()]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 86](BigCommerce/Import/Processors/Queue_Runner.php#L86-L89)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 90](BigCommerce/Import/Processors/Queue_Runner.php#L90-L90)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Completed import batch', 'bigcommerce')` |  | 
`['count' => count($queue_records), 'remaining' => $remaining]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 100](BigCommerce/Import/Processors/Queue_Runner.php#L100-L103)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Invalid data in queue, unable to parse', 'bigcommerce')` |  | 
`['json_last_error_msg' => json_last_error_msg(), 'record' => $record]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 110](BigCommerce/Import/Processors/Queue_Runner.php#L110-L123)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Handling record from import queue', 'bigcommerce')` |  | 
`['record_id' => $record->ID, 'name' => $record->post_title, 'attempt' => $record->menu_order, 'action' => $record->post_status]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 110](BigCommerce/Import/Processors/Queue_Runner.php#L110-L133)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Unable to parse product data, removing from queue', 'bigcommerce')` |  | 
`['product_id' => $bigcommerce_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 150](BigCommerce/Import/Processors/Queue_Runner.php#L150-L152)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('No listing found for product, removing', 'bigcommerce')` |  | 
`['product_id' => $product->getId(), 'channel' => $channel_term->term_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 162](BigCommerce/Import/Processors/Queue_Runner.php#L162-L174)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Unable to parse listing data, skipping', 'bigcommerce')` |  | 
`['product_id' => $product->getId(), 'channel' => $channel_term->term_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 162](BigCommerce/Import/Processors/Queue_Runner.php#L162-L188)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Removing product', 'bigcommerce')` |  | 
`['product_id' => $product->getId(), 'channel' => $channel_term->term_id, 'state' => $listing_state]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 162](BigCommerce/Import/Processors/Queue_Runner.php#L162-L199)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Product imported successfully', 'bigcommerce')` |  | 
`['product_id' => $product->getId(), 'channel' => $channel_term->term_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 162](BigCommerce/Import/Processors/Queue_Runner.php#L162-L213)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Removing product', 'bigcommerce')` |  | 
`['data' => $data]` |  | 

Source: [src/BigCommerce/Import/Processors/Queue_Runner.php](BigCommerce/Import/Processors/Queue_Runner.php), [line 217](BigCommerce/Import/Processors/Queue_Runner.php#L217-L226)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Import complete', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Cleanup.php](BigCommerce/Import/Processors/Cleanup.php), [line 75](BigCommerce/Import/Processors/Cleanup.php#L75-L75)

### `bigcommerce/log`

*Clean Queue_Task::NAME posts before/after import*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Clean tasks queue is empty', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Cleanup.php](BigCommerce/Import/Processors/Cleanup.php), [line 78](BigCommerce/Import/Processors/Cleanup.php#L78-L97)

### `bigcommerce/log`

*Clean Queue_Task::NAME posts before/after import*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Error is occurred in the cleanup task query', 'bigcommerce')` |  | 
`['error' => $tasks]` |  | 

Source: [src/BigCommerce/Import/Processors/Cleanup.php](BigCommerce/Import/Processors/Cleanup.php), [line 78](BigCommerce/Import/Processors/Cleanup.php#L78-L102)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`sprintf(__('Queuing %d products for deletion', 'bigcommerce'), count($posts_to_delete))` |  | 
`['post_ids' => $posts_to_delete]` |  | 

Source: [src/BigCommerce/Import/Processors/Deleted_Product_Marker.php](BigCommerce/Import/Processors/Deleted_Product_Marker.php), [line 69](BigCommerce/Import/Processors/Deleted_Product_Marker.php#L69-L71)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Error adding deletion to import queue', 'bigcommerce')` |  | 
`['post_id' => $post_id, 'error' => $task_id->get_error_message()]` |  | 

Source: [src/BigCommerce/Import/Processors/Deleted_Product_Marker.php](BigCommerce/Import/Processors/Deleted_Product_Marker.php), [line 88](BigCommerce/Import/Processors/Deleted_Product_Marker.php#L88-L91)

### `bigcommerce/import/marked_deleted`

*Triggered when a batch of posts have been marked for deletion, due
to removal from the BigCommerce store, or the disconnection of a channel*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$count` | `int` | The number of deletions added to the queue
`$posts_to_delete` | `int[]` | The IDs of the posts that will be deleted

Source: [src/BigCommerce/Import/Processors/Deleted_Product_Marker.php](BigCommerce/Import/Processors/Deleted_Product_Marker.php), [line 102](BigCommerce/Import/Processors/Deleted_Product_Marker.php#L102-L109)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('No images found requiring regeneration', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Image_Resizer.php](BigCommerce/Import/Processors/Image_Resizer.php), [line 40](BigCommerce/Import/Processors/Image_Resizer.php#L40-L40)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Found images to regenerate', 'bigcommerce')` |  | 
`['batch' => $image_ids, 'total' => $total_remaining]` |  | 

Source: [src/BigCommerce/Import/Processors/Image_Resizer.php](BigCommerce/Import/Processors/Image_Resizer.php), [line 42](BigCommerce/Import/Processors/Image_Resizer.php#L42-L45)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Image file does not exist. Skipping thumbnail regeneration.', 'bigcommerce')` |  | 
`['attachment_id' => $post_id, 'path' => $fullsizepath]` |  | 

Source: [src/BigCommerce/Import/Processors/Image_Resizer.php](BigCommerce/Import/Processors/Image_Resizer.php), [line 63](BigCommerce/Import/Processors/Image_Resizer.php#L63-L66)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::WARNING` |  | 
`__('Image regeneration failed.', 'bigcommerce')` |  | 
`['attachment_id' => $post_id, 'error' => $metadata->get_error_message()]` |  | 

Source: [src/BigCommerce/Import/Processors/Image_Resizer.php](BigCommerce/Import/Processors/Image_Resizer.php), [line 74](BigCommerce/Import/Processors/Image_Resizer.php#L74-L77)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Regenerated image thumbnails.', 'bigcommerce')` |  | 
`['attachment_id' => $post_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Image_Resizer.php](BigCommerce/Import/Processors/Image_Resizer.php), [line 83](BigCommerce/Import/Processors/Image_Resizer.php#L83-L85)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Requesting currency settings', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Currencies.php](BigCommerce/Import/Processors/Currencies.php), [line 37](BigCommerce/Import/Processors/Currencies.php#L37-L37)

### `bigcommerce/import/fetched_currencies`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$currencies` |  | 

Source: [src/BigCommerce/Import/Processors/Currencies.php](BigCommerce/Import/Processors/Currencies.php), [line 52](BigCommerce/Import/Processors/Currencies.php#L52-L52)

### `bigcommerce/import/could_not_fetch_currency_settings`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$e` |  | 

Source: [src/BigCommerce/Import/Processors/Currencies.php](BigCommerce/Import/Processors/Currencies.php), [line 54](BigCommerce/Import/Processors/Currencies.php#L54-L54)

### `bigcommerce/log`

*Retrieve currencies set for each channel and store in term meta*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Requesting currency assignments for channels', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Currencies.php](BigCommerce/Import/Processors/Currencies.php), [line 60](BigCommerce/Import/Processors/Currencies.php#L60-L70)

### `bigcommerce/log`

*Retrieve currencies set for each channel and store in term meta*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Process single channel', 'bigcommerce')` |  | 
`['channel_id' => $channel_id]` |  | 

Source: [src/BigCommerce/Import/Processors/Currencies.php](BigCommerce/Import/Processors/Currencies.php), [line 60](BigCommerce/Import/Processors/Currencies.php#L60-L75)

### `bigcommerce/log`

*Retrieve currencies set for each channel and store in term meta*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`__('Currencies assignment', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'enabled_currency' => $assignment->getEnabledCurrencies(), 'default_currency' => $assignment->getDefaultCurrency()]` |  | 

Source: [src/BigCommerce/Import/Processors/Currencies.php](BigCommerce/Import/Processors/Currencies.php), [line 60](BigCommerce/Import/Processors/Currencies.php#L60-L83)

### `bigcommerce/log`

*Retrieve currencies set for each channel and store in term meta*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::ERROR` |  | 
`__('Could not retrieve channel currencies', 'bigcommerce')` |  | 
`['channel_id' => $channel_id, 'message' => $exception->getMessage(), 'code' => $exception->getCode()]` |  | 

Source: [src/BigCommerce/Import/Processors/Currencies.php](BigCommerce/Import/Processors/Currencies.php), [line 60](BigCommerce/Import/Processors/Currencies.php#L60-L91)

### `bigcommerce/import/start`


Source: [src/BigCommerce/Import/Runner/Cron_Runner.php](BigCommerce/Import/Runner/Cron_Runner.php), [line 13](BigCommerce/Import/Runner/Cron_Runner.php#L13-L30)

### `bigcommerce/import/before`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$current['status']` |  | 

Source: [src/BigCommerce/Import/Runner/Cron_Runner.php](BigCommerce/Import/Runner/Cron_Runner.php), [line 35](BigCommerce/Import/Runner/Cron_Runner.php#L35-L52)

### `bigcommerce/import/run`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$current['status']` |  | 

Source: [src/BigCommerce/Import/Runner/Cron_Runner.php](BigCommerce/Import/Runner/Cron_Runner.php), [line 35](BigCommerce/Import/Runner/Cron_Runner.php#L35-L53)

### `bigcommerce/import/after`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$current['status']` |  | 

Source: [src/BigCommerce/Import/Runner/Cron_Runner.php](BigCommerce/Import/Runner/Cron_Runner.php), [line 35](BigCommerce/Import/Runner/Cron_Runner.php#L35-L54)

### `self::CONTINUE_CRON`

*When an ajax request to get the current import status comes in,
run the next step in the process by triggering the scheduled
cron job.*

Runs at priority 5, before the ajax response handler


Source: [src/BigCommerce/Import/Runner/Cron_Runner.php](BigCommerce/Import/Runner/Cron_Runner.php), [line 59](BigCommerce/Import/Runner/Cron_Runner.php#L59-L75)

### `bigcommerce/log`

*Allow run only for fetching listings, initializing channels, products fetch. Mentioned task are
the most time-consuming items and can be done in parallel*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Exit from 2nd thread because status is not allowed', 'bigcommerce')` |  | 
`['status' => $progress]` |  | 

Source: [src/BigCommerce/Import/Runner/AsyncProcessing_Runner.php](BigCommerce/Import/Runner/AsyncProcessing_Runner.php), [line 21](BigCommerce/Import/Runner/AsyncProcessing_Runner.php#L21-L28)

### `bigcommerce/log`

*Perform additional 'bigcommerce/import/run' action in order to speed up import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Thread busy with another process', 'bigcommerce')` |  | 
`['status' => $progress]` |  | 

Source: [src/BigCommerce/Import/Runner/AsyncProcessing_Runner.php](BigCommerce/Import/Runner/AsyncProcessing_Runner.php), [line 12](BigCommerce/Import/Runner/AsyncProcessing_Runner.php#L12-L36)

### `bigcommerce/import/before`

*Perform additional 'bigcommerce/import/run' action in order to speed up import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$progress` |  | 

Source: [src/BigCommerce/Import/Runner/AsyncProcessing_Runner.php](BigCommerce/Import/Runner/AsyncProcessing_Runner.php), [line 12](BigCommerce/Import/Runner/AsyncProcessing_Runner.php#L12-L43)

### `bigcommerce/import/run`

*Perform additional 'bigcommerce/import/run' action in order to speed up import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$progress` |  | 

Source: [src/BigCommerce/Import/Runner/AsyncProcessing_Runner.php](BigCommerce/Import/Runner/AsyncProcessing_Runner.php), [line 12](BigCommerce/Import/Runner/AsyncProcessing_Runner.php#L12-L44)

### `bigcommerce/import/after`

*Perform additional 'bigcommerce/import/run' action in order to speed up import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$progress` |  | 

Source: [src/BigCommerce/Import/Runner/AsyncProcessing_Runner.php](BigCommerce/Import/Runner/AsyncProcessing_Runner.php), [line 12](BigCommerce/Import/Runner/AsyncProcessing_Runner.php#L12-L45)

### `bigcommerce/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Releasing expired import lock', 'bigcommerce')` |  | 
`['status' => $current]` |  | 

Source: [src/BigCommerce/Import/Runner/Lock_Monitor.php](BigCommerce/Import/Runner/Lock_Monitor.php), [line 23](BigCommerce/Import/Runner/Lock_Monitor.php#L23-L44)

### `bigcommerce/import/start`


Source: [src/BigCommerce/Import/Runner/CLI_Runner.php](BigCommerce/Import/Runner/CLI_Runner.php), [line 22](BigCommerce/Import/Runner/CLI_Runner.php#L22-L22)

### `bigcommerce/import/before`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$current['status']` |  | 

Source: [src/BigCommerce/Import/Runner/CLI_Runner.php](BigCommerce/Import/Runner/CLI_Runner.php), [line 29](BigCommerce/Import/Runner/CLI_Runner.php#L29-L29)

### `bigcommerce/import/run`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$current['status']` |  | 

Source: [src/BigCommerce/Import/Runner/CLI_Runner.php](BigCommerce/Import/Runner/CLI_Runner.php), [line 30](BigCommerce/Import/Runner/CLI_Runner.php#L30-L30)

### `bigcommerce/import/after`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$current['status']` |  | 

Source: [src/BigCommerce/Import/Runner/CLI_Runner.php](BigCommerce/Import/Runner/CLI_Runner.php), [line 31](BigCommerce/Import/Runner/CLI_Runner.php#L31-L31)

### `bigcommerce/import/set_status`

*Add a status to the log for the current import. The status will be
appended to the log, even if it is the same as the current status.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$status` | `string` | 

Source: [src/BigCommerce/Import/Runner/Status.php](BigCommerce/Import/Runner/Status.php), [line 62](BigCommerce/Import/Runner/Status.php#L62-L76)

### `bigcommerce/import/logs/rotate`

*Rotate out the current log into the previous log slot*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$log` | `array` | The current log

Source: [src/BigCommerce/Import/Runner/Status.php](BigCommerce/Import/Runner/Status.php), [line 86](BigCommerce/Import/Runner/Status.php#L86-L91)

### `bigcommerce/import/logs/rotated`

*Logs have been rotated*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$log` | `array` | The previous log

Source: [src/BigCommerce/Import/Runner/Status.php](BigCommerce/Import/Runner/Status.php), [line 94](BigCommerce/Import/Runner/Status.php#L94-L99)

### `bigcommerce/import/product/skipped`

*A product has been skipped for import*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->post_id` |  | 
`$this->product` |  | 
`$this->listing` |  | 
`$this->channel_term` |  | 
`$this->catalog` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Ignorer.php](BigCommerce/Import/Importers/Products/Product_Ignorer.php), [line 54](BigCommerce/Import/Importers/Products/Product_Ignorer.php#L54-L63)

### `bigcommerce/import/product/created`

*A product has been created by the import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->post_id` |  | 
`$this->product` |  | 
`$this->listing` |  | 
`$this->catalog` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Creator.php](BigCommerce/Import/Importers/Products/Product_Creator.php), [line 41](BigCommerce/Import/Importers/Products/Product_Creator.php#L41-L49)

### `bigcommerce/import/product/updated`

*A product has been updated by the import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->post_id` |  | 
`$this->product` |  | 
`$this->catalog` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Updater.php](BigCommerce/Import/Importers/Products/Product_Updater.php), [line 12](BigCommerce/Import/Importers/Products/Product_Updater.php#L12-L20)

### `bigcommerce/import/product/saved`

*A product has been saved by the import process*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->post_id` |  | 
`$this->product` |  | 
`$this->listing` |  | 
`$this->catalog` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Saver.php](BigCommerce/Import/Importers/Products/Product_Saver.php), [line 235](BigCommerce/Import/Importers/Products/Product_Saver.php#L235-L243)

### `bigcommerce/import/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Could not create term', 'bigcommerce')` |  | 
`['term' => $bc_term, 'error' => $term->get_error_messages()]` |  | 

Source: [src/BigCommerce/Import/Importers/Terms/Term_Creator.php](BigCommerce/Import/Importers/Terms/Term_Creator.php), [line 12](BigCommerce/Import/Importers/Terms/Term_Creator.php#L12-L15)

### `bigcommerce/import/term/skipped`

*A term has been skipped for import*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->bc_term` |  | 
`$this->taxonomy` |  | 
`$this->term_id` |  | 

Source: [src/BigCommerce/Import/Importers/Terms/Term_Ignorer.php](BigCommerce/Import/Importers/Terms/Term_Ignorer.php), [line 26](BigCommerce/Import/Importers/Terms/Term_Ignorer.php#L26-L33)

### `bigcommerce/import/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Could not update term', 'bigcommerce')` |  | 
`['term' => $bc_term, 'error' => $term->get_error_messages()]` |  | 

Source: [src/BigCommerce/Import/Importers/Terms/Term_Updater.php](BigCommerce/Import/Importers/Terms/Term_Updater.php), [line 14](BigCommerce/Import/Importers/Terms/Term_Updater.php#L14-L17)

### `bigcommerce/log`

*Run the next task in the queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Running import task', 'bigcommerce')` |  | 
`['state' => $state, 'description' => $task->get_description()]` |  | 

Source: [src/BigCommerce/Import/Task_Manager.php](BigCommerce/Import/Task_Manager.php), [line 82](BigCommerce/Import/Task_Manager.php#L82-L96)

### `bigcommerce/log`

*Run the next task in the queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('No handler found for current import state', 'bigcommerce')` |  | 
`['state' => $state, 'import' => Import_Type::is_traditional_import() ? 'full' : 'headless']` |  | 

Source: [src/BigCommerce/Import/Task_Manager.php](BigCommerce/Import/Task_Manager.php), [line 82](BigCommerce/Import/Task_Manager.php#L82-L104)

### `bigcommerce/log`

*Run the next task in the queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::DEBUG` |  | 
`$e->getTraceAsString()` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Task_Manager.php](BigCommerce/Import/Task_Manager.php), [line 82](BigCommerce/Import/Task_Manager.php#L82-L105)

### `bigcommerce/log`

*Run the next task in the queue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::INFO` |  | 
`__('Import complete', 'bigcommerce')` |  | 
`[]` |  | 

Source: [src/BigCommerce/Import/Task_Manager.php](BigCommerce/Import/Task_Manager.php), [line 82](BigCommerce/Import/Task_Manager.php#L82-L129)

### `bigcommerce/import/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Failed to download image', 'bigcommerce')` |  | 
`['url' => $this->image_url, 'error' => $tmp->get_error_messages()]` |  | 

Source: [src/BigCommerce/Import/Image_Importer.php](BigCommerce/Import/Image_Importer.php), [line 54](BigCommerce/Import/Image_Importer.php#L54-L71)

### `bigcommerce/import/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Failed to sideload image', 'bigcommerce')` |  | 
`['url' => $this->image_url, 'error' => $image_id->get_error_messages()]` |  | 

Source: [src/BigCommerce/Import/Image_Importer.php](BigCommerce/Import/Image_Importer.php), [line 54](BigCommerce/Import/Image_Importer.php#L54-L92)

### `bigcommerce/import/log`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Failed to save CDN image', 'bigcommerce')` |  | 
`['url' => $this->image_url, 'error' => $exception->getMessage()]` |  | 

Source: [src/BigCommerce/Import/Image_Importer.php](BigCommerce/Import/Image_Importer.php), [line 154](BigCommerce/Import/Image_Importer.php#L154-L183)

### `bigcommerce/import/log`

*Get image mime type*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Error_Log::NOTICE` |  | 
`__('Failed to get CDN image mime type', 'bigcommerce')` |  | 
`['url' => $this->image_url, 'error' => $exception->getMessage()]` |  | 

Source: [src/BigCommerce/Import/Image_Importer.php](BigCommerce/Import/Image_Importer.php), [line 189](BigCommerce/Import/Image_Importer.php#L189-L211)

## Filters

### `bigcommerce/oauth_connector/installation_url`

*Filters oauth connector installation url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | Url.

Source: [src/BigCommerce/Merchant/Onboarding_Api.php](BigCommerce/Merchant/Onboarding_Api.php), [line 96](BigCommerce/Merchant/Onboarding_Api.php#L96-L101)

### `bigcommerce/onboarding/success_redirect`

*Filters onboarding success redirect.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Merchant/Connect_Account.php](BigCommerce/Merchant/Connect_Account.php), [line 75](BigCommerce/Merchant/Connect_Account.php#L75-L80)

### `bigcommerce/onboarding/error_redirect`

*Filters onboarding error redirect.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Merchant/Connect_Account.php](BigCommerce/Merchant/Connect_Account.php), [line 84](BigCommerce/Merchant/Connect_Account.php#L84-L89)

### `bigcommerce/onboarding/error_redirect`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Merchant/Account_Status.php](BigCommerce/Merchant/Account_Status.php), [line 73](BigCommerce/Merchant/Account_Status.php#L73-L73)

### `bigcommerce/onboarding/success_redirect`

*This filter is documented in src/BigCommerce/Merchant/Connect_Account.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Merchant/Account_Status.php](BigCommerce/Merchant/Account_Status.php), [line 119](BigCommerce/Merchant/Account_Status.php#L119-L122)

### `bigcommerce/settings/next-steps/required`

*Filter the array of next steps required for setting up the
BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$steps` |  | 

Source: [src/BigCommerce/Merchant/Setup_Status.php](BigCommerce/Merchant/Setup_Status.php), [line 212](BigCommerce/Merchant/Setup_Status.php#L212-L221)

### `bigcommerce/settings/next-steps/optional`

*Filter the array of optional next steps for setting up the
BigCommerce store.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$steps` |  | 

Source: [src/BigCommerce/Merchant/Setup_Status.php](BigCommerce/Merchant/Setup_Status.php), [line 256](BigCommerce/Merchant/Setup_Status.php#L256-L265)

### `bigcommerce/cart_mapper/map`

*Filter mapped cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cart` | `array` | Cart data.

Source: [src/BigCommerce/Cart/Cart_Mapper.php](BigCommerce/Cart/Cart_Mapper.php), [line 104](BigCommerce/Cart/Cart_Mapper.php#L104-L109)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $value)` |  | 
`$value` |  | 

Source: [src/BigCommerce/Cart/Cart_Mapper.php](BigCommerce/Cart/Cart_Mapper.php), [line 257](BigCommerce/Cart/Cart_Mapper.php#L257-L260)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $amount)` |  | 
`$amount` |  | 

Source: [src/BigCommerce/Cart/Cart_Mapper.php](BigCommerce/Cart/Cart_Mapper.php), [line 358](BigCommerce/Cart/Cart_Mapper.php#L358-L361)

### `bigcommerce/cart/cart_id`

*Filter the cart ID to use for the current request*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cart_id` | `string` | 

Source: [src/BigCommerce/Cart/Cart.php](BigCommerce/Cart/Cart.php), [line 50](BigCommerce/Cart/Cart.php#L50-L55)

### `bigcommerce/cart/cookie_lifetime`

*Filter how long the cart cookie should persist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`30 * DAY_IN_SECONDS` |  | 

Source: [src/BigCommerce/Cart/Cart.php](BigCommerce/Cart/Cart.php), [line 66](BigCommerce/Cart/Cart.php#L66-L71)

### `bigcommerce/cart/permalink`

*Filter the URL to the cart page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The URL to the cart page
`$cart_page_id` |  | 

Source: [src/BigCommerce/Cart/Cart.php](BigCommerce/Cart/Cart.php), [line 235](BigCommerce/Cart/Cart.php#L235-L241)

### `bigcommerce/checkout/url`

*Filters checkout url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$checkout_url` | `string` | The URL for checking out with the given cart.

Source: [src/BigCommerce/Cart/Cart.php](BigCommerce/Cart/Cart.php), [line 261](BigCommerce/Cart/Cart.php#L261-L266)

### `bigcommerce/checkout/url`

*Filters checkout url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$checkout_url` | `string` | The URL for checking out with the given cart.

Source: [src/BigCommerce/Cart/Cart.php](BigCommerce/Cart/Cart.php), [line 283](BigCommerce/Cart/Cart.php#L283-L288)

### `bigcommerce/currency/code`

*Class Cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'USD'` |  | 

Source: [src/BigCommerce/Cart/Cart.php](BigCommerce/Cart/Cart.php), [line 21](BigCommerce/Cart/Cart.php#L21-L305)

### `bigcommerce/checkout/url`

*This filter is documented in src/BigCommerce/Cart/Cart.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$checkout_url` |  | 

Source: [src/BigCommerce/Cart/Checkout.php](BigCommerce/Cart/Checkout.php), [line 51](BigCommerce/Cart/Checkout.php#L51-L54)

### `bigcommerce/cart/menu/show_count`

*Filter whether the site should show the cart count on the menu
item for the cart page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$show` | `bool` | Whether the cart count will be displayed

Source: [src/BigCommerce/Cart/Cart_Menu_Item.php](BigCommerce/Cart/Cart_Menu_Item.php), [line 59](BigCommerce/Cart/Cart_Menu_Item.php#L59-L65)

### `bigcommerce/cart/mini-cart-enabled`

*Filter whether the mini-cart widget should be enabled on the current page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$enabled` | `bool` | Whether the mini-cart is enabled

Source: [src/BigCommerce/Cart/Mini_Cart.php](BigCommerce/Cart/Mini_Cart.php), [line 38](BigCommerce/Cart/Mini_Cart.php#L38-L43)

### `bigcommerce/currency/format`

*Format a price for the current currency and locale*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $value)` |  | 
`$value` | `float` | The price to format

Source: [src/BigCommerce/Currency/With_Currency.php](BigCommerce/Currency/With_Currency.php), [line 20](BigCommerce/Currency/With_Currency.php#L20-L26)

### `bigcommerce/currency/cookie_lifetime`

*Filter how long the currency code cookie should persist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`30 * DAY_IN_SECONDS` |  | 

Source: [src/BigCommerce/Currency/Currency.php](BigCommerce/Currency/Currency.php), [line 82](BigCommerce/Currency/Currency.php#L82-L87)

### `bigcommerce/settings/currency/auto-format`

*Filter whether to apply auto-formatting to currency using PHP's
\NumberFormatter class from the intl extension.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`class_exists('\\NumberFormatter')` |  | 

Source: [src/BigCommerce/Currency/Formatter_Factory.php](BigCommerce/Currency/Formatter_Factory.php), [line 34](BigCommerce/Currency/Formatter_Factory.php#L34-L40)

### `bigcommerce/webhooks`

*Filter the webhooks that the plugin will register with BigCommerce*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$webhooks` | `\BigCommerce\Webhooks\Webhook[]` | 

Source: [src/BigCommerce/Container/Webhooks.php](BigCommerce/Container/Webhooks.php), [line 111](BigCommerce/Container/Webhooks.php#L111-L116)

### `bigcommerce/rest/proxy_base`

*Filters the REST base use for proxy API requests.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'bc/v3'` |  | 

Source: [src/BigCommerce/Container/Proxy.php](BigCommerce/Container/Proxy.php), [line 41](BigCommerce/Container/Proxy.php#L41-L46)

### `bigcommerce/proxy/use_cache`

*Filters whether to use the proxy cache.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [src/BigCommerce/Container/Proxy.php](BigCommerce/Container/Proxy.php), [line 97](BigCommerce/Container/Proxy.php#L97-L102)

### `bigcommerce/amp/templates/directory`

*Filter the name of the AMP template directory*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'amp'` |  | 

Source: [src/BigCommerce/Container/Amp.php](BigCommerce/Container/Amp.php), [line 46](BigCommerce/Container/Amp.php#L46-L51)

### `bigcommerce/amp/templates/enable_override`

*Toggles whether AMP template overrides will be used to render plugin templates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`function_exists('is_amp_endpoint') && is_amp_endpoint()` |  | 

Source: [src/BigCommerce/Container/Amp.php](BigCommerce/Container/Amp.php), [line 105](BigCommerce/Container/Amp.php#L105-L110)

### `bigcommerce/import/timeout`

*Filter the timeout for an import job. If a step in the import
takes more than this amount of time, it will be considered stalled
and a new job will take it over.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`5 * MINUTE_IN_SECONDS` |  | 

Source: [src/BigCommerce/Container/Import.php](BigCommerce/Container/Import.php), [line 67](BigCommerce/Container/Import.php#L67-L74)

### `bigcommerce/import/task_list`

*Filter the tasks that will be registered for the product import*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$list` | `\BigCommerce\Import\Task_Definition[]` | The list of tasks to register

Source: [src/BigCommerce/Container/Import.php](BigCommerce/Container/Import.php), [line 342](BigCommerce/Container/Import.php#L342-L347)

### `bigcommerce/countries/data_file`

*Filters countries data file.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$file` | `string` | Countries data json file path.

Source: [src/BigCommerce/Container/Accounts.php](BigCommerce/Container/Accounts.php), [line 142](BigCommerce/Container/Accounts.php#L142-L147)

### `bigcommerce/settings/credentials_notice/excluded_screens`

*Filters settings credentials notice for excluded screens.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[$container[self::WELCOME_SCREEN]->get_hook_suffix(), $container[self::CREATE_SCREEN]->get_hook_suffix(), $container[self::CHANNEL_SCREEN]->get_hook_suffix(), $container[self::STORE_TYPE_SCREEN]->get_hook_suffix(), $container[self::PENDING_SCREEN]->get_hook_suffix(), $container[self::CREDENTIALS_SCREEN]->get_hook_suffix()]` |  | 

Source: [src/BigCommerce/Container/Settings.php](BigCommerce/Container/Settings.php), [line 259](BigCommerce/Container/Settings.php#L259-L271)

### `bigcommerce/logger/path`

*Filter the path to the debug logging file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$log_path` | `string` | The full file system path to the log file

Source: [src/BigCommerce/Container/Log.php](BigCommerce/Container/Log.php), [line 27](BigCommerce/Container/Log.php#L27-L32)

### `bigcommerce/logger/custom_path`

*Filter the path to the debug logging file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$log_path` | `string` | The full file system path to the log file

Source: [src/BigCommerce/Container/Log.php](BigCommerce/Container/Log.php), [line 38](BigCommerce/Container/Log.php#L38-L43)

### `bigcommerce/rest/namespace_base`

*Filters REST namespace base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'bigcommerce'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 62](BigCommerce/Container/Rest.php#L62-L67)

### `bigcommerce/rest/version`

*Filters REST version.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->version` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 71](BigCommerce/Container/Rest.php#L71-L76)

### `bigcommerce/rest/cart_base`

*Filters REST cart base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cart'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 80](BigCommerce/Container/Rest.php#L80-L85)

### `bigcommerce/rest/products_base`

*Filters REST products base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'products'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 93](BigCommerce/Container/Rest.php#L93-L98)

### `bigcommerce/rest/storefront_base`

*Filters REST products base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'storefront'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 106](BigCommerce/Container/Rest.php#L106-L111)

### `bigcommerce/rest/products_base`

*Filters REST terms base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'terms'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 119](BigCommerce/Container/Rest.php#L119-L122)

### `bigcommerce/rest/shortcode_base`

*Filters REST shortcode base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'shortcode'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 130](BigCommerce/Container/Rest.php#L130-L135)

### `bigcommerce/rest/orders_shortcode_base`

*Filters REST orders shortcode base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'orders-shortcode'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 143](BigCommerce/Container/Rest.php#L143-L148)

### `bigcommerce/rest/product_component_shortcode_base`

*Filters REST product component shortcode base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'component-shortcode'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 156](BigCommerce/Container/Rest.php#L156-L161)

### `bigcommerce/rest/review_list_base`

*Filters REST review list base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'product-reviews'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 169](BigCommerce/Container/Rest.php#L169-L174)

### `bigcommerce/rest/pricing_base`

*Filters REST pricing base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'pricing'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 182](BigCommerce/Container/Rest.php#L182-L187)

### `bigcommerce/rest/shipping_base`

*Filters REST shipping base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'shipping'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 195](BigCommerce/Container/Rest.php#L195-L200)

### `bigcommerce/rest/coupon_code`

*Filters REST coupon code base.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'coupon-code'` |  | 

Source: [src/BigCommerce/Container/Rest.php](BigCommerce/Container/Rest.php), [line 208](BigCommerce/Container/Rest.php#L208-L213)

### `bigcommerce/oauth_connector/url`

*Filters oauth connector url*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'https://wp-login.bigcommerce.com/v1'` |  | 

Source: [src/BigCommerce/Container/Merchant.php](BigCommerce/Container/Merchant.php), [line 29](BigCommerce/Container/Merchant.php#L29-L34)

### `bigcommerce/api/config`

*Filter the API connection configuration object*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$config` | `\BigCommerce\Api\Configuration` | 

Source: [src/BigCommerce/Container/Api.php](BigCommerce/Container/Api.php), [line 67](BigCommerce/Container/Api.php#L67-L72)

### `bigcommerce/api/timeout`

*Filter the API connection timeout*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`15` |  | 

Source: [src/BigCommerce/Container/Api.php](BigCommerce/Container/Api.php), [line 104](BigCommerce/Container/Api.php#L104-L109)

### `bigcommerce/gql/query_file_path`

*Retrieve graph QL query from file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf($plugin_path, $file)` |  | 
`$file` | `string` | 

Source: [src/BigCommerce/GraphQL/GraphQL_Processor.php](BigCommerce/GraphQL/GraphQL_Processor.php), [line 181](BigCommerce/GraphQL/GraphQL_Processor.php#L181-L192)

### `bigcommerce/post_type/product/capabilities`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'post'` |  | 

Source: [src/BigCommerce/Post_Types/Product/Config.php](BigCommerce/Post_Types/Product/Config.php), [line 31](BigCommerce/Post_Types/Product/Config.php#L31-L31)

### `bigcommerce/product/price_range/data`

*Filter the price range data for a product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_post_meta($this->post_id, self::PRICE_RANGE_META_KEY, true)` |  | 
`$this` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 237](BigCommerce/Post_Types/Product/Product.php#L237-L243)

### `bigcommerce/product/price_range/formatted`

*Filter the formatted price range for a product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$range` | `string` | The formatted price range
`$this` |  | 
`$prices` | `array` | The price range meta for the product

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 259](BigCommerce/Post_Types/Product/Product.php#L259-L266)

### `bigcommerce/product/price_range/data`

*This filter is documented in src/BigCommerce/Post_Types/Product/Product.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_post_meta($this->post_id, self::PRICE_RANGE_META_KEY, true)` |  | 
`$this` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 273](BigCommerce/Post_Types/Product/Product.php#L273-L276)

### `bigcommerce/product/calculated_price_range/formatted`

*Filter the formatted calculated price range for a product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$range` | `string` | The formatted price range
`$this` |  | 
`$prices` | `array` | The price range meta for the product

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 286](BigCommerce/Post_Types/Product/Product.php#L286-L293)

### `bigcommerce/produce/retail_price/data`

*Filter the retail price of the product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`(float) $this->get_property('retail_price')` |  | 
`$this` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 302](BigCommerce/Post_Types/Product/Product.php#L302-L308)

### `bigcommerce/product/retail_price/formatted`

*Filter the formatted retail price for a product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->format_currency($price)` |  | 
`$this` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 310](BigCommerce/Post_Types/Product/Product.php#L310-L316)

### `bigcommerce/product/gallery`

*Filter the images that display in a product gallery*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$gallery` | `int[]` | The IDs of images in the gallery

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 629](BigCommerce/Post_Types/Product/Product.php#L629-L634)

### `bigcommerce/button/purchase`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$this->post_id` |  | 
`''` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 732](BigCommerce/Post_Types/Product/Product.php#L732-L732)

### `bigcommerce/button/purchase/attributes`

*Filters purchase button attributes.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 
`$this` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 740](BigCommerce/Post_Types/Product/Product.php#L740-L746)

### `bigcommerce/button/purchase`

*Filters purchase button.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$button` | `string` | Button html.
`$this->post_id` |  | 
`$label` | `string` | Label.

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 766](BigCommerce/Post_Types/Product/Product.php#L766-L773)

### `bigcommerce/product/related_products`

*This filter is documented in src/BigCommerce/Post_Types/Product/Product.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 
`$this->post_id` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 972](BigCommerce/Post_Types/Product/Product.php#L972-L975)

### `bigcommerce/product/related_products`

*This filter is documented in src/BigCommerce/Post_Types/Product/Product.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->related_products_by_category($args)` |  | 
`$this->post_id` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 981](BigCommerce/Post_Types/Product/Product.php#L981-L984)

### `bigcommerce/product/related_products`

*Filter the related products to display for the current product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$related_products` |  | 
`$this->post_id` |  | 

Source: [src/BigCommerce/Post_Types/Product/Product.php](BigCommerce/Post_Types/Product/Product.php), [line 991](BigCommerce/Post_Types/Product/Product.php#L991-L997)

### `bigcommerce/query/default_sort`

*Filter the default sort order for product archives.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Product_Archive::SORT_FEATURED` |  | 

Source: [src/BigCommerce/Post_Types/Product/Query.php](BigCommerce/Post_Types/Product/Query.php), [line 53](BigCommerce/Post_Types/Product/Query.php#L53-L58)

### `bigcommerce/query/search_post_ids`

*Filters query search post ids.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array_map('intval', $matches)` |  | 
`$search_phrase` | `string` | Search phrase.

Source: [src/BigCommerce/Post_Types/Product/Query.php](BigCommerce/Post_Types/Product/Query.php), [line 490](BigCommerce/Post_Types/Product/Query.php#L490-L496)

### `bigcommerce/channel/listing/should_update`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$post_id` |  | 

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 50](BigCommerce/Post_Types/Product/Channel_Sync.php#L50-L50)

### `bigcommerce/channel/listing/state`

*Filter the state to set on the channel listing for the product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$state` | `string` | The listing state to set
`$post_id` | `int` | The ID of the product post in WordPress
`$listing` | `\BigCommerce\Api\v3\Model\Listing` | The listing from BigCommerce that will be updated

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 146](BigCommerce/Post_Types/Product/Channel_Sync.php#L146-L153)

### `bigcommerce/channel/listing/title`

*Filter the title to set on the channel listing for the product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_post_field('post_title', $post_id)` |  | 
`$post_id` | `int` | The ID of the product post in WordPress
`$listing` | `\BigCommerce\Api\v3\Model\Listing` | The listing from BigCommerce that will be updated

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 157](BigCommerce/Post_Types/Product/Channel_Sync.php#L157-L164)

### `bigcommerce/channel/listing/description`

*Filter the description to set on the channel listing for the product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_post_field('post_content', $post_id)` |  | 
`$post_id` | `int` | The ID of the product post in WordPress
`$listing` | `\BigCommerce\Api\v3\Model\Listing` | The listing from BigCommerce that will be updated

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 168](BigCommerce/Post_Types/Product/Channel_Sync.php#L168-L175)

### `bigcommerce/channel/listing/should_delete`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$post_id` |  | 

Source: [src/BigCommerce/Post_Types/Product/Channel_Sync.php](BigCommerce/Post_Types/Product/Channel_Sync.php), [line 199](BigCommerce/Post_Types/Product/Channel_Sync.php#L199-L199)

### `bigcommerce/query/recent_days`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`2` |  | 

Source: [src/BigCommerce/Post_Types/Product/Query_Mapper.php](BigCommerce/Post_Types/Product/Query_Mapper.php), [line 133](BigCommerce/Post_Types/Product/Query_Mapper.php#L133-L133)

### `bigcommerce/shortcode/products/query_args`

*Filters shortcode products query arguments.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$query_args` | `array` | Query Arguments.
`$args` | `array` | Arguments.

Source: [src/BigCommerce/Post_Types/Product/Query_Mapper.php](BigCommerce/Post_Types/Product/Query_Mapper.php), [line 143](BigCommerce/Post_Types/Product/Query_Mapper.php#L143-L149)

### `bigcommerce/product_category/group_filter_terms_user_cache_time`

*Set the cache time for the list of term ids that a group-member user has access to.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`HOUR_IN_SECONDS` |  | 

Source: [src/BigCommerce/Taxonomies/Product_Category/Group_Filtered_Terms.php](BigCommerce/Taxonomies/Product_Category/Group_Filtered_Terms.php), [line 138](BigCommerce/Taxonomies/Product_Category/Group_Filtered_Terms.php#L138-L143)

### `bigcommerce/taxonomy/{$this->taxonomy}/capabilities`

*Filter the default capabilities for taxonomy terms.*

The dynamic portion of the hook is the name of the taxonomy.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$caps` | `array` | The capabilities array for the taxonomy

Source: [src/BigCommerce/Taxonomies/Taxonomy_Config.php](BigCommerce/Taxonomies/Taxonomy_Config.php), [line 90](BigCommerce/Taxonomies/Taxonomy_Config.php#L90-L97)

### `bigcommerce/channel/default_name`

*Filter the name given to the auto-created channel.*

Defaults to the blog's domain name.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`parse_url(home_url(), PHP_URL_HOST)` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel_Connector.php](BigCommerce/Taxonomies/Channel/Channel_Connector.php), [line 55](BigCommerce/Taxonomies/Channel/Channel_Connector.php#L55-L61)

### `bigcommerce/channel/routes`

*Filter the routes that will be set for the site*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$routes` | `\BigCommerce\Api\v3\Model\Route[]` | 

Source: [src/BigCommerce/Taxonomies/Channel/Routes.php](BigCommerce/Taxonomies/Channel/Routes.php), [line 274](BigCommerce/Taxonomies/Channel/Routes.php#L274-L279)

### `bigcommerce/channel/current`

*Filter the channel to use for the current request. This only
fires if multi-channel support is enabled.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$channel` | `\WP_Term` | The WP term associated with the BigCommerce channel

Source: [src/BigCommerce/Taxonomies/Channel/Connections.php](BigCommerce/Taxonomies/Channel/Connections.php), [line 46](BigCommerce/Taxonomies/Channel/Connections.php#L46-L54)

### `bigcommerce/channels/enable-multi-channel`

*Filter whether multi-channel support is enabled.*

Enabling this feature allows site owners to
connect to multiple channels and switch between
them based on arbitrary criteria.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel.php](BigCommerce/Taxonomies/Channel/Channel.php), [line 25](BigCommerce/Taxonomies/Channel/Channel.php#L25-L35)

### `bigcommerce/channels/map-products-to-all-channels`

*Filter whether multi-channel sync should sync to all channels.*

Enabling this feature allows site owners to
connect to sync products to all channels or
only the channel it is assigned to.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [src/BigCommerce/Taxonomies/Channel/Channel.php](BigCommerce/Taxonomies/Channel/Channel.php), [line 44](BigCommerce/Taxonomies/Channel/Channel.php#L44-L52)

### `bigcommerce/user/default_role`

*Filter the default role given to new users*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Customer_Role::NAME` |  | 

Source: [src/BigCommerce/Webhooks/Customer/Customer_Creator.php](BigCommerce/Webhooks/Customer/Customer_Creator.php), [line 62](BigCommerce/Webhooks/Customer/Customer_Creator.php#L62-L67)

### `bigcommerce/webhooks/registration_args`

*Filter the arguments sent to the BigCommerce API to register a webhook*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` |  | 
`$this` |  | 

Source: [src/BigCommerce/Webhooks/Webhook.php](BigCommerce/Webhooks/Webhook.php), [line 138](BigCommerce/Webhooks/Webhook.php#L138-L141)

### `bigcommerce/api/ttl`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ttl` |  | 
`$resourcePath` |  | 
`$method` |  | 
`$queryParams` |  | 
`$postData` |  | 

Source: [src/BigCommerce/Api/Caching_Client.php](BigCommerce/Api/Caching_Client.php), [line 108](BigCommerce/Api/Caching_Client.php#L108-L108)

### `bigcommerce/api/default_headers`

*Filters API default headers.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`parent::getDefaultHeaders()` |  | 

Source: [src/BigCommerce/Api/Configuration.php](BigCommerce/Api/Configuration.php), [line 15](BigCommerce/Api/Configuration.php#L15-L20)

### `bigcommerce/css/customizer_styles`

*Filters customizer styles css.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template` |  | 

Source: [src/BigCommerce/Customizer/Styles.php](BigCommerce/Customizer/Styles.php), [line 48](BigCommerce/Customizer/Styles.php#L48-L53)

### `bigcommerce/product/archive/sort_options`

*Filter the sorting options available in the BigCommerce catalog*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$choices` | `array` | The sorting options to use

Source: [src/BigCommerce/Customizer/Sections/Product_Archive.php](BigCommerce/Customizer/Sections/Product_Archive.php), [line 163](BigCommerce/Customizer/Sections/Product_Archive.php#L163-L168)

### `bigcommerce/product/archive/filter_options`

*Filter the filtering options available in the BigCommerce catalog*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$choices` | `array` | The filtering options to use

Source: [src/BigCommerce/Customizer/Sections/Product_Archive.php](BigCommerce/Customizer/Sections/Product_Archive.php), [line 207](BigCommerce/Customizer/Sections/Product_Archive.php#L207-L212)

### `Analytics::TRACK_BY_HOOK`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$track_data` |  | 

Source: [src/BigCommerce/Analytics/Events/Add_To_Cart.php](BigCommerce/Analytics/Events/Add_To_Cart.php), [line 19](BigCommerce/Analytics/Events/Add_To_Cart.php#L19-L45)

### `Analytics::TRACK_BY_HOOK`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$track_data` |  | 

Source: [src/BigCommerce/Analytics/Events/Add_To_Cart.php](BigCommerce/Analytics/Events/Add_To_Cart.php), [line 57](BigCommerce/Analytics/Events/Add_To_Cart.php#L57-L70)

### `Analytics::TRACK_BY_HOOK`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$track_data` |  | 

Source: [src/BigCommerce/Analytics/Events/View_Product.php](BigCommerce/Analytics/Events/View_Product.php), [line 18](BigCommerce/Analytics/Events/View_Product.php#L18-L41)

### `Analytics::TRACK_BY_HOOK`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$track_data` |  | 

Source: [src/BigCommerce/Analytics/Events/View_Product.php](BigCommerce/Analytics/Events/View_Product.php), [line 52](BigCommerce/Analytics/Events/View_Product.php#L52-L75)

### `bigcommerce/analytics/segment/settings`

*Filter the configuration object passed to Segment*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$settings` | `array` | Settings.

Source: [src/BigCommerce/Analytics/Segment.php](BigCommerce/Analytics/Segment.php), [line 60](BigCommerce/Analytics/Segment.php#L60-L65)

### `bigcommerce/products/reviews/per_page`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`12` |  | 
`$product->post_id()` |  | 

Source: [src/BigCommerce/Shortcodes/Product_Reviews.php](BigCommerce/Shortcodes/Product_Reviews.php), [line 58](BigCommerce/Shortcodes/Product_Reviews.php#L58-L58)

### `bigcommerce/product/reviews/rest_url`

*Filters product reviews REST url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$post_id` | `int` | Post id.

Source: [src/BigCommerce/Shortcodes/Product_Reviews.php](BigCommerce/Shortcodes/Product_Reviews.php), [line 91](BigCommerce/Shortcodes/Product_Reviews.php#L91-L97)

### `bigcommerce/template/gallery/image_size`

*Filter the image size used for product gallery images*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$size` | `string` | The image size to use

Source: [src/BigCommerce/Shortcodes/Product_Components.php](BigCommerce/Shortcodes/Product_Components.php), [line 134](BigCommerce/Shortcodes/Product_Components.php#L134-L139)

### `bigcommerce/checkout/config`

*Filter the config used to render the embedded checkout.*

For more details, @see https://github.com/bigcommerce/checkout-sdk-js/blob/master/docs/interfaces/embeddedcheckoutoptions.md

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$checkout_config` | `array` | 

Source: [src/BigCommerce/Shortcodes/Checkout.php](BigCommerce/Shortcodes/Checkout.php), [line 66](BigCommerce/Shortcodes/Checkout.php#L66-L72)

### `widget_title`

*This filter is documented in wp-includes/widgets/class-wp-widget-pages.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$title` |  | 
`$instance` |  | 
`$this->id_base` |  | 

Source: [src/BigCommerce/Widgets/Currency_Switcher_Widget.php](BigCommerce/Widgets/Currency_Switcher_Widget.php), [line 45](BigCommerce/Widgets/Currency_Switcher_Widget.php#L45-L46)

### `bigcommerce/currency/enabled`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$currencies` |  | 

Source: [src/BigCommerce/Widgets/Currency_Switcher_Widget.php](BigCommerce/Widgets/Currency_Switcher_Widget.php), [line 57](BigCommerce/Widgets/Currency_Switcher_Widget.php#L57-L57)

### `bigcommerce/currency/code`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'USD'` |  | 

Source: [src/BigCommerce/Widgets/Currency_Switcher_Widget.php](BigCommerce/Widgets/Currency_Switcher_Widget.php), [line 58](BigCommerce/Widgets/Currency_Switcher_Widget.php#L58-L58)

### `widget_title`

*This filter is documented in wp-includes/widgets/class-wp-widget-pages.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$title` |  | 
`$instance` |  | 
`$this->id_base` |  | 

Source: [src/BigCommerce/Widgets/Product_Category_Widget.php](BigCommerce/Widgets/Product_Category_Widget.php), [line 41](BigCommerce/Widgets/Product_Category_Widget.php#L41-L42)

### `bigcommerce/widget/categories/dropdown_args`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` |  | 
`$instance` |  | 

Source: [src/BigCommerce/Widgets/Product_Category_Widget.php](BigCommerce/Widgets/Product_Category_Widget.php), [line 120](BigCommerce/Widgets/Product_Category_Widget.php#L120-L120)

### `bigcommerce/widget/categories/list_args`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` |  | 
`$instance` |  | 

Source: [src/BigCommerce/Widgets/Product_Category_Widget.php](BigCommerce/Widgets/Product_Category_Widget.php), [line 155](BigCommerce/Widgets/Product_Category_Widget.php#L155-L155)

### `widget_title`

*This filter is documented in wp-includes/widgets/class-wp-widget-pages.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$title` |  | 
`$instance` |  | 
`$this->id_base` |  | 

Source: [src/BigCommerce/Widgets/Mini_Cart_Widget.php](BigCommerce/Widgets/Mini_Cart_Widget.php), [line 43](BigCommerce/Widgets/Mini_Cart_Widget.php#L43-L44)

### `bigcommerce/admin/js_config`

*Filters admin js config object.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->data` |  | 

Source: [src/BigCommerce/Assets/Admin/JS_Config.php](BigCommerce/Assets/Admin/JS_Config.php), [line 46](BigCommerce/Assets/Admin/JS_Config.php#L46-L51)

### `bigcommerce/gutenberg/js_config`

*Filters gutenberg js config data.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->gutenberg` |  | 

Source: [src/BigCommerce/Assets/Admin/JS_Config.php](BigCommerce/Assets/Admin/JS_Config.php), [line 61](BigCommerce/Assets/Admin/JS_Config.php#L61-L66)

### `bigcommerce/admin/js_localization`

*Filters admin js localization data.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$js_i18n_array` | `array` | Js i18n data.

Source: [src/BigCommerce/Assets/Admin/JS_Localization.php](BigCommerce/Assets/Admin/JS_Localization.php), [line 56](BigCommerce/Assets/Admin/JS_Localization.php#L56-L61)

### `bigcommerce/assets/stylesheet`

*Filters assets stylesheet file.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$debug ? 'master.css' : 'master.min.css'` |  | 

Source: [src/BigCommerce/Assets/Theme/Styles.php](BigCommerce/Assets/Theme/Styles.php), [line 32](BigCommerce/Assets/Theme/Styles.php#L32-L37)

### `bigcommerce/currency/code`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'USD'` |  | 

Source: [src/BigCommerce/Assets/Theme/JS_Config.php](BigCommerce/Assets/Theme/JS_Config.php), [line 42](BigCommerce/Assets/Theme/JS_Config.php#L42-L42)

### `bigcommerce/js_config`

*Filters Theme Js config.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->data` |  | 

Source: [src/BigCommerce/Assets/Theme/JS_Config.php](BigCommerce/Assets/Theme/JS_Config.php), [line 46](BigCommerce/Assets/Theme/JS_Config.php#L46-L51)

### `bigcommerce/js_localization`

*Filter the localization strings passed to front end scripts*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$js_i18n_array` | `array` | The localization strings

Source: [src/BigCommerce/Assets/Theme/JS_Localization.php](BigCommerce/Assets/Theme/JS_Localization.php), [line 65](BigCommerce/Assets/Theme/JS_Localization.php#L65-L70)

### `bigcommerce/logger/formatter`

*Set up the import errors log*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new \Monolog\Formatter\LineFormatter()` |  | 

Source: [src/BigCommerce/Logging/Error_Log.php](BigCommerce/Logging/Error_Log.php), [line 56](BigCommerce/Logging/Error_Log.php#L56-L71)

### `bigcommerce/logger/channel`

*Set up the import errors log*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'BigCommerce'` |  | 

Source: [src/BigCommerce/Logging/Error_Log.php](BigCommerce/Logging/Error_Log.php), [line 56](BigCommerce/Logging/Error_Log.php#L56-L74)

### `bigcommerce/logger/handler`

*Set up the import errors log*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new StreamHandler($path_to_log, $logger_level)` |  | 

Source: [src/BigCommerce/Logging/Error_Log.php](BigCommerce/Logging/Error_Log.php), [line 56](BigCommerce/Logging/Error_Log.php#L56-L85)

### `bigcommerce/logger/level`

*Filter the logging level. Defaults to 'debug'.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`self::DEBUG` |  | 

Source: [src/BigCommerce/Logging/Error_Log.php](BigCommerce/Logging/Error_Log.php), [line 104](BigCommerce/Logging/Error_Log.php#L104-L109)

### `bigcommerce/plugin/providers`

*Filter the service providers the power the plugin*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->providers` |  | 

Source: [src/BigCommerce/Plugin.php](BigCommerce/Plugin.php), [line 89](BigCommerce/Plugin.php#L89-L94)

### `bigcommerce/plugin/credentials_set`

*Filters the credentials set*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: [src/BigCommerce/Plugin.php](BigCommerce/Plugin.php), [line 126](BigCommerce/Plugin.php#L126-L131)

### `bigcommerce/proxy/request_headers`

*Filter the request headers.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`['Accept' => 'application/json', 'Content-Type' => 'application/json', 'X-Auth-Client' => $this->config['client_id'], 'X-Auth-Token' => $this->config['access_token']]` |  | 
`$route` | `string` | Route requested.
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 280](BigCommerce/Proxy/Proxy_Controller.php#L280-L297)

### `bigcommerce/proxy/response_override`

*Filters whether the REST request should run.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$request` | `\WP_REST_Request` | 

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 307](BigCommerce/Proxy/Proxy_Controller.php#L307-L312)

### `bigcommerce/proxy/request`

*Filters a proxy REST request before it is run.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$request` | `\WP_REST_Request` | Original request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 324](BigCommerce/Proxy/Proxy_Controller.php#L324-L329)

### `bigcommerce/proxy/result_pre`

*Pre-fetch results. Can be from database or from cache.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 338](BigCommerce/Proxy/Proxy_Controller.php#L338-L345)

### `bigcommerce/proxy/result`

*Filter the response results before returning it.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$result` | `array\|\WP_Error` | Result from API call.
`$route` | `string` | Route requested.
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 388](BigCommerce/Proxy/Proxy_Controller.php#L388-L395)

### `bigcommerce/proxy/rest_response`

*Filter the WordPress REST response before it gets dispatched.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$rest_response` | `\WP_REST_Response` | Response to send back to request..
`$route` | `string` | Route requested.
`$request` | `\WP_REST_Request` | API request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 399](BigCommerce/Proxy/Proxy_Controller.php#L399-L406)

### `bigcommerce/proxy/request_url`

*Filters proxy request url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$route` | `string` | Request url.
`$request` | `\WP_REST_Request` | Request.

Source: [src/BigCommerce/Proxy/Proxy_Controller.php](BigCommerce/Proxy/Proxy_Controller.php), [line 676](BigCommerce/Proxy/Proxy_Controller.php#L676-L682)

### `bigcommerce/currency/format`

*Adds additional data to a single item.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $item['sale_price'])` |  | 
`$item['sale_price']` |  | 

Source: [src/BigCommerce/Proxy/AMP_Cart_Controller.php](BigCommerce/Proxy/AMP_Cart_Controller.php), [line 34](BigCommerce/Proxy/AMP_Cart_Controller.php#L34-L79)

### `bigcommerce/currency/format`

*Returns cart data.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $data['cart_amount'])` |  | 
`$data['cart_amount']` |  | 

Source: [src/BigCommerce/Proxy/AMP_Cart_Controller.php](BigCommerce/Proxy/AMP_Cart_Controller.php), [line 105](BigCommerce/Proxy/AMP_Cart_Controller.php#L105-L145)

### `bigcommerce/currency/format`

*AMP_Cart_Controller class*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $value)` |  | 
`$value` |  | 

Source: [src/BigCommerce/Proxy/AMP_Cart_Controller.php](BigCommerce/Proxy/AMP_Cart_Controller.php), [line 15](BigCommerce/Proxy/AMP_Cart_Controller.php#L15-L204)

### `bigcommerce/cart/permalink`

*Filter the URL to the cart page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The URL to the cart page
`$cart_page_id` |  | 

Source: [src/BigCommerce/Amp/Amp_Cart.php](BigCommerce/Amp/Amp_Cart.php), [line 60](BigCommerce/Amp/Amp_Cart.php#L60-L66)

### `bigcommerce/amp/kses_allowed_html`

*Filters AMP kses allowed html from BC.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array_merge(wp_kses_allowed_html('post'), array('input' => array('type' => array(), 'name' => array(), 'value' => array(), 'placeholder' => array(), 'class' => array()), 'select' => array('name' => array(), 'id' => array(), 'on' => array(), 'class' => array()), 'option' => array('value' => array(), 'selected' => array()), 'img' => array('src' => array(), 'class' => array(), 'alt' => array(), 'srcset' => array(), 'id' => array(), 'version' => array(), 'decoding' => array()), 'amp-img' => array('src' => array(), 'width' => array(), 'height' => array(), 'layout' => array(), 'alt' => array(), 'class' => array(), 'id' => array(), 'srcset' => array()), 'i-amphtml-sizer' => array('class' => array(), 'id' => array()), 'template' => array('type' => array(), 'id' => array()), 'amp-list' => array('id' => array(), 'layout' => array(), 'height' => array(), 'width' => array(), 'src' => array(), 'single-item' => array(), 'items' => array(), 'class' => array(), 'reset-on-refresh' => array()), 'amp-state' => array('id' => array(), 'src' => array()), 'amp-lightbox' => array('on' => array(), 'id' => array(), 'scrollable' => array(), 'layout' => array()), 'button' => array('on' => array(), 'type' => array(), 'class' => array(), 'tabindex' => array(), 'aria-label' => array(), 'data-productid' => array()), 'amp-carousel' => array('id' => array(), 'class' => array(), 'width' => array(), 'height' => array(), 'layout' => array(), 'type' => array()), 'span' => array('on' => array(), 'class' => array(), 'tabindex' => array(), 'role' => array()), 'form' => array('action-xhr' => array(), 'method' => array(), 'enctype' => array(), 'class' => array(), 'target' => array())))` |  | 

Source: [src/BigCommerce/Amp/Overrides.php](BigCommerce/Amp/Overrides.php), [line 134](BigCommerce/Amp/Overrides.php#L134-L239)

### `bigcommerce/amp/https_help_url`

*Filters the URL with information about updating the current site to HTTPS.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_url('https://make.wordpress.org/support/user-manual/web-publishing/https-for-wordpress/')` |  | 

Source: [src/BigCommerce/Amp/Amp_Admin_Notices.php](BigCommerce/Amp/Amp_Admin_Notices.php), [line 92](BigCommerce/Amp/Amp_Admin_Notices.php#L92-L100)

### `bigcommerce/amp/amp_ssl_notice`

*Filters the AMP SSL notice text.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$notice` |  | 

Source: [src/BigCommerce/Amp/Amp_Admin_Notices.php](BigCommerce/Amp/Amp_Admin_Notices.php), [line 103](BigCommerce/Amp/Amp_Admin_Notices.php#L103-L108)

### `bigcommerce/amp/admin_notices`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->notices` |  | 

Source: [src/BigCommerce/Amp/Amp_Admin_Notices.php](BigCommerce/Amp/Amp_Admin_Notices.php), [line 133](BigCommerce/Amp/Amp_Admin_Notices.php#L133-L133)

### `bigcommerce/template/directory/theme`

*This filter is documented in src/BigCommerce/Templates/Controller.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$amp_relative_path` |  | 

Source: [src/BigCommerce/Amp/Amp_Template_Override.php](BigCommerce/Amp/Amp_Template_Override.php), [line 42](BigCommerce/Amp/Amp_Template_Override.php#L42-L45)

### `bigcommerce/template/directory/plugin`

*This filter is documented in src/BigCommerce/Templates/Controller.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$amp_relative_path` |  | 

Source: [src/BigCommerce/Amp/Amp_Template_Override.php](BigCommerce/Amp/Amp_Template_Override.php), [line 47](BigCommerce/Amp/Amp_Template_Override.php#L47-L50)

### `bigcommerce/diagnostics`

*Filter the list of diagnostic data*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$diagnostics` | `array` | 

Source: [src/BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php](BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php), [line 472](BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php#L472-L477)

### `bigcommerce/template/directory/theme`

*Filters template directory theme.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`''` |  | 

Source: [src/BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php](BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php), [line 565](BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php#L565-L570)

### `bigcommerce/template/directory/theme`

*This filter is documented in src/BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`''` |  | 

Source: [src/BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php](BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php), [line 658](BigCommerce/Settings/Sections/Troubleshooting_Diagnostics.php#L658-L661)

### `bigcommerce/settings/api/disabled/field={$option}`

*Filter whether to disable the API settings field*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$disabled` | `bool\|string` | Empty if the field should be enabled, a string indicating why it's disabled otherwise.

Source: [src/BigCommerce/Settings/Sections/Api_Credentials.php](BigCommerce/Settings/Sections/Api_Credentials.php), [line 124](BigCommerce/Settings/Sections/Api_Credentials.php#L124-L129)

### `bigcommerce/checkout/can_embed`

*Filters whether checkout can embed or not.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [src/BigCommerce/Settings/Sections/Cart.php](BigCommerce/Settings/Sections/Cart.php), [line 174](BigCommerce/Settings/Sections/Cart.php#L174-L179)

### `bigcommerce/address/default_state`

*This filter is documented in src/BigCommerce/Templates/Address_Form.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [src/BigCommerce/Settings/Sections/New_Account_Section.php](BigCommerce/Settings/Sections/New_Account_Section.php), [line 123](BigCommerce/Settings/Sections/New_Account_Section.php#L123-L126)

### `bigcommerce/address/default_country`

*This filter is documented in src/BigCommerce/Templates/Address_Form.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'United States'` |  | 

Source: [src/BigCommerce/Settings/Sections/New_Account_Section.php](BigCommerce/Settings/Sections/New_Account_Section.php), [line 127](BigCommerce/Settings/Sections/New_Account_Section.php#L127-L130)

### `bigcommerce/address/default_country`

*This filter is documented in src/BigCommerce/Templates/Address_Form.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'United States'` |  | 

Source: [src/BigCommerce/Settings/Sections/New_Account_Section.php](BigCommerce/Settings/Sections/New_Account_Section.php), [line 155](BigCommerce/Settings/Sections/New_Account_Section.php#L155-L158)

### `bigcommerce/countries/data`

*This filter is documented in src/BigCommerce/Templates/Address_Form.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 

Source: [src/BigCommerce/Settings/Sections/New_Account_Section.php](BigCommerce/Settings/Sections/New_Account_Section.php), [line 183](BigCommerce/Settings/Sections/New_Account_Section.php#L183-L186)

### `bigcommerce/onboarding/reset`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Settings/Start_Over.php](BigCommerce/Settings/Start_Over.php), [line 56](BigCommerce/Settings/Start_Over.php#L56-L83)

### `bigcommerce/settings/header/welcome_message`

*Filters the message that displays at the top of the settings page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Welcome back.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Settings/Screens/Settings_Screen.php](BigCommerce/Settings/Screens/Settings_Screen.php), [line 36](BigCommerce/Settings/Screens/Settings_Screen.php#L36-L41)

### `bigcommerce/settings/settings_url`

*Filters settings url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php](BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php), [line 83](BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php#L83-L88)

### `bigcommerce/settings/resources_url`

*Filters resources url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php](BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php), [line 96](BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php#L96-L101)

### `bigcommerce/documentation/url`

*Filters documentation url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'https://developer.bigcommerce.com/bigcommerce-for-wordpress/'` |  | 

Source: [src/BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php](BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php), [line 105](BigCommerce/Settings/Screens/Onboarding_Complete_Screen.php#L105-L110)

### `bigcommerce/api/timeout`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`15` |  | 

Source: [src/BigCommerce/Settings/Screens/Api_Credentials_Screen.php](BigCommerce/Settings/Screens/Api_Credentials_Screen.php), [line 87](BigCommerce/Settings/Screens/Api_Credentials_Screen.php#L87-L87)

### `bigcommerce/settings/connect_account_url`

*Filters settings connect account url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'https://www.bigcommerce.com/'` |  | 

Source: [src/BigCommerce/Settings/Screens/Welcome_Screen.php](BigCommerce/Settings/Screens/Welcome_Screen.php), [line 42](BigCommerce/Settings/Screens/Welcome_Screen.php#L42-L47)

### `bigcommerce/settings/create_account_url`

*Filters settings create account url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'https://www.bigcommerce.com/'` |  | 

Source: [src/BigCommerce/Settings/Screens/Welcome_Screen.php](BigCommerce/Settings/Screens/Welcome_Screen.php), [line 51](BigCommerce/Settings/Screens/Welcome_Screen.php#L51-L56)

### `bigcommerce/settings/credentials_url`

*Filters settings credential url.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`admin_url()` |  | 

Source: [src/BigCommerce/Settings/Screens/Welcome_Screen.php](BigCommerce/Settings/Screens/Welcome_Screen.php), [line 60](BigCommerce/Settings/Screens/Welcome_Screen.php#L60-L65)

### `bigcommerce/settings/welcome/notices`

*Filter the array of notices and promotions displayed on the plugin
welcome screen. The expected data is an array of arrays, each
with a 'title' and 'content' key. The values of those keys
should be HTML-safe strings.*

The 'title' will be output inside an h3 tag. The 'content' will
be output inside a div tag.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 

Source: [src/BigCommerce/Settings/Screens/Welcome_Screen.php](BigCommerce/Settings/Screens/Welcome_Screen.php), [line 73](BigCommerce/Settings/Screens/Welcome_Screen.php#L73-L84)

### `bigcommerce/settings/resources/url`

*Filters the URL for fetching the resource data displayed on the
admin Resources screen.*

Return an empty string to short-circuit the request and render
the default resources.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'https://storage.googleapis.com/bigcommerce-wp-connector.appspot.com/resources_v2.json'` |  | 

Source: [src/BigCommerce/Settings/Screens/Resources_Screen.php](BigCommerce/Settings/Screens/Resources_Screen.php), [line 52](BigCommerce/Settings/Screens/Resources_Screen.php#L52-L61)

### `bigcommerce/settings/resources/default`

*Filter the default resources to display on the Resources admin page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$default` | `array` | The default data array.

Source: [src/BigCommerce/Settings/Screens/Resources_Screen.php](BigCommerce/Settings/Screens/Resources_Screen.php), [line 119](BigCommerce/Settings/Screens/Resources_Screen.php#L119-L124)

### `bigcommerce/settings/default_new_menu_name`

*Filter the default name to give to an automatically generated
navigation menu when the user does not provide a value.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('BigCommerce', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Settings/Screens/Nav_Menu_Screen.php](BigCommerce/Settings/Screens/Nav_Menu_Screen.php), [line 178](BigCommerce/Settings/Screens/Nav_Menu_Screen.php#L178-L184)

### `bigcommerce/settings/import_status/current`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$status_string` |  | 
`$current['status']` |  | 
`$current['timestamp']` |  | 

Source: [src/BigCommerce/Settings/Import_Status.php](BigCommerce/Settings/Import_Status.php), [line 226](BigCommerce/Settings/Import_Status.php#L226-L226)

### `bigcommerce/settings/import_status/previous`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$status_string` |  | 
`$previous['status']` |  | 
`$previous['timestamp']` |  | 

Source: [src/BigCommerce/Settings/Import_Status.php](BigCommerce/Settings/Import_Status.php), [line 295](BigCommerce/Settings/Import_Status.php#L295-L295)

### `bigcommerce/settings/import_status/previous`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$status_string` |  | 
`$next` |  | 

Source: [src/BigCommerce/Settings/Import_Status.php](BigCommerce/Settings/Import_Status.php), [line 319](BigCommerce/Settings/Import_Status.php#L319-L319)

### `bigcommerce/settings/onboarding/steps`

*Filters the list of steps in the onboarding progress bar.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$steps` | `array[]` | The steps in the process. Properties:<br>- label  string The label for the step<br>- active bool   Whether the step is currently active
`$this->state` |  | 

Source: [src/BigCommerce/Settings/Onboarding_Progress.php](BigCommerce/Settings/Onboarding_Progress.php), [line 75](BigCommerce/Settings/Onboarding_Progress.php#L75-L83)

### `bigcommerce/nav/logout/title`

*Filter the title of the Sign Out link in the nav menu*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Sign Out', 'bigcommerce')` |  | 
`$menu_item` | `\WP_Post` | The menu item, a \WP_Post that has passed through wp_setup_nav_menu_item()

Source: [src/BigCommerce/Accounts/Nav_Menu.php](BigCommerce/Accounts/Nav_Menu.php), [line 59](BigCommerce/Accounts/Nav_Menu.php#L59-L65)

### `bigcommerce/nav/account/title`

*Filter the title of the My Account link in the nav menu*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('My Account', 'bigcommerce')` |  | 
`$menu_item` | `\WP_Post` | The menu item, a \WP_Post that has passed through wp_setup_nav_menu_item()

Source: [src/BigCommerce/Accounts/Nav_Menu.php](BigCommerce/Accounts/Nav_Menu.php), [line 83](BigCommerce/Accounts/Nav_Menu.php#L83-L89)

### `bigcommerce/account/do_subnav`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$post_id` |  | 

Source: [src/BigCommerce/Accounts/Sub_Nav.php](BigCommerce/Accounts/Sub_Nav.php), [line 42](BigCommerce/Accounts/Sub_Nav.php#L42-L42)

### `bigcommerce/account/subnav/links`

*Filter the links that show in the account subnav.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$links` | `array[]` | Each link will have the properties:<br>`url` - The URL of the link<br>`label` - The label of the link<br>`current` - Whether the link is to the current page

Source: [src/BigCommerce/Accounts/Sub_Nav.php](BigCommerce/Accounts/Sub_Nav.php), [line 87](BigCommerce/Accounts/Sub_Nav.php#L87-L95)

### `bigcommerce/customer/group_info_cache_expiration`

*Filter the duration of the group info cache.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`HOUR_IN_SECONDS` |  | 
`$group_id` | `int` | The ID of the group being cached

Source: [src/BigCommerce/Accounts/Customer_Group_Proxy.php](BigCommerce/Accounts/Customer_Group_Proxy.php), [line 66](BigCommerce/Accounts/Customer_Group_Proxy.php#L66-L72)

### `bigcommerce/customer/create/args`

*Filters customer create arguments.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$new_customer_data` | `array` | Customer data.

Source: [src/BigCommerce/Accounts/Register.php](BigCommerce/Accounts/Register.php), [line 126](BigCommerce/Accounts/Register.php#L126-L131)

### `bigcommerce/customer/create/args`

*Filters customer create arguments.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$new_customer_data` | `array` | Customer data.

Source: [src/BigCommerce/Accounts/Login.php](BigCommerce/Accounts/Login.php), [line 94](BigCommerce/Accounts/Login.php#L94-L99)

### `bigcommerce/user/default_role`

*Filter the default role given to new users*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Customer_Role::NAME` |  | 

Source: [src/BigCommerce/Accounts/Login.php](BigCommerce/Accounts/Login.php), [line 229](BigCommerce/Accounts/Login.php#L229-L234)

### `bigcommerce/account/profile/permalink`

*Filter the URL to the account profile page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The account profile page URL

Source: [src/BigCommerce/Accounts/Login.php](BigCommerce/Accounts/Login.php), [line 346](BigCommerce/Accounts/Login.php#L346-L351)

### `bigcommerce/user/default_role`

*Filter the default role given to new users*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Customer_Role::NAME` |  | 

Source: [src/BigCommerce/Accounts/Login.php](BigCommerce/Accounts/Login.php), [line 445](BigCommerce/Accounts/Login.php#L445-L450)

### `bigcommerce/accounts/login/delete_missing_user`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$user_id` |  | 
`$customer_id` |  | 

Source: [src/BigCommerce/Accounts/Login.php](BigCommerce/Accounts/Login.php), [line 531](BigCommerce/Accounts/Login.php#L531-L531)

### `bigcommerce/order/products`

*Filters order products*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$products` | `array` | Products.
`$order_id` | `int` | Order ID.
`$this` |  | 

Source: [src/BigCommerce/Accounts/Customer.php](BigCommerce/Accounts/Customer.php), [line 219](BigCommerce/Accounts/Customer.php#L219-L226)

### `bigcommerce/order/shipping_addresses`

*Filters order shipping addresses*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$addresses` | `array` | The shipping addresses.
`$order_id` | `int` | Order ID.
`$this` |  | 

Source: [src/BigCommerce/Accounts/Customer.php](BigCommerce/Accounts/Customer.php), [line 240](BigCommerce/Accounts/Customer.php#L240-L247)

### `bigcommerce/customer/empty_profile`

*Filter the base fields found in a customer profile*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`['first_name' => '', 'last_name' => '', 'company' => '', 'email' => '', 'phone' => '', 'customer_group_id' => 0]` |  | 

Source: [src/BigCommerce/Accounts/Customer.php](BigCommerce/Accounts/Customer.php), [line 267](BigCommerce/Accounts/Customer.php#L267-L279)

### `bigcommerce/customer/group_id`

*This filter is documented in src/BigCommerce/Accounts/Customer.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$default_guest_group ?: null` |  | 
`$this` |  | 

Source: [src/BigCommerce/Accounts/Customer.php](BigCommerce/Accounts/Customer.php), [line 344](BigCommerce/Accounts/Customer.php#L344-L347)

### `bigcommerce/customer/group_id`

*Filter the group ID associated with the customer*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$group_id` | `int\|null` | The customer's group ID. Null for guest users.
`$this` |  | 

Source: [src/BigCommerce/Accounts/Customer.php](BigCommerce/Accounts/Customer.php), [line 371](BigCommerce/Accounts/Customer.php#L371-L377)

### `bigcommerce/customer/group_info`

*Filters customer group info.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->get_default_group()` |  | 
`$this->group_id` |  | 

Source: [src/BigCommerce/Accounts/Customer_Group.php](BigCommerce/Accounts/Customer_Group.php), [line 30](BigCommerce/Accounts/Customer_Group.php#L30-L36)

### `bigcommerce/wishlist/items`

*Filter the product IDs in the wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$product_ids` | `int[]` | 
`$this` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 79](BigCommerce/Accounts/Wishlists/Wishlist.php#L79-L85)

### `bigcommerce/wishlist/public-url`

*Filter the URL for a public wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The wishlist URL
`$this` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 123](BigCommerce/Accounts/Wishlists/Wishlist.php#L123-L129)

### `bigcommerce/wishlist/user-url`

*Filter the URL for a user to manage a wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The wishlist URL
`$this` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 146](BigCommerce/Accounts/Wishlists/Wishlist.php#L146-L152)

### `bigcommerce/wishlist/edit-url`

*Filter the URL for posting an update to a wishlist's settings*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The form handler URL
`$this` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 163](BigCommerce/Accounts/Wishlists/Wishlist.php#L163-L169)

### `bigcommerce/wishlist/delete-url`

*Filter the URL for deleting a wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The form handler URL
`$this` |  | 

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 180](BigCommerce/Accounts/Wishlists/Wishlist.php#L180-L186)

### `bigcommerce/wishlist/add-item-url`

*Filter the URL for adding an item to a wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The form handler URL
`$this` |  | 
`$product_id` | `int` | The ID of the product to remove

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 194](BigCommerce/Accounts/Wishlists/Wishlist.php#L194-L201)

### `bigcommerce/wishlist/remove-item-url`

*Filter the URL for removing an item from a wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The form handler URL
`$this` |  | 
`$product_id` | `int` | The ID of the product to remove

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 209](BigCommerce/Accounts/Wishlists/Wishlist.php#L209-L216)

### `bigcommerce/wishlist/create-url`

*Filter the URL for creating a wishlist*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The form handler URL

Source: [src/BigCommerce/Accounts/Wishlists/Wishlist.php](BigCommerce/Accounts/Wishlists/Wishlist.php), [line 222](BigCommerce/Accounts/Wishlists/Wishlist.php#L222-L227)

### `bigcommerce/reviews/cache/per_page`

*Filter the number of product reviews to cache*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`12` |  | 
`$product_id` | `int` | The BigCommerce ID of the product;

Source: [src/BigCommerce/Reviews/Review_Cache.php](BigCommerce/Reviews/Review_Cache.php), [line 36](BigCommerce/Reviews/Review_Cache.php#L36-L42)

### `bigcommerce/template/image/fallback`

*Filter the fallback image for products without a featured image*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$image` | `string` | The fallback image HTML

Source: [src/BigCommerce/Templates/Fallback_Image.php](BigCommerce/Templates/Fallback_Image.php), [line 47](BigCommerce/Templates/Fallback_Image.php#L47-L52)

### `bigcommerce/product/reviews/show_reviews`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$product->post_id()` |  | 

Source: [src/BigCommerce/Templates/Product_Single.php](BigCommerce/Templates/Product_Single.php), [line 157](BigCommerce/Templates/Product_Single.php#L157-L157)

### `bigcommerce/product/variant_price`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$variant->calculated_price` |  | 
`$variant` |  | 
`$product` |  | 

Source: [src/BigCommerce/Templates/Product_Options.php](BigCommerce/Templates/Product_Options.php), [line 196](BigCommerce/Templates/Product_Options.php#L196-L196)

### `bigcommerce/template/gallery/image_size`

*This filter is documented in Product_Gallery.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$size` |  | 

Source: [src/BigCommerce/Templates/Product_Options.php](BigCommerce/Templates/Product_Options.php), [line 247](BigCommerce/Templates/Product_Options.php#L247-L250)

### `bigcommerce/template/gallery/zoom_size`

*his filter is documented in Product_Gallery.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Image_Sizes::BC_LARGE` |  | 

Source: [src/BigCommerce/Templates/Product_Options.php](BigCommerce/Templates/Product_Options.php), [line 254](BigCommerce/Templates/Product_Options.php#L254-L257)

### `bigcommerce/product/inventory/should_display`

*Filter whether to display inventory for a product*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$show` | `bool` | Whether to show the inventory level
`$product` | `\BigCommerce\Post_Types\Product\Product` | The product being displayed

Source: [src/BigCommerce/Templates/Inventory_Level.php](BigCommerce/Templates/Inventory_Level.php), [line 76](BigCommerce/Templates/Inventory_Level.php#L76-L82)

### `bigcommerce/template/wishlist/user/image_size`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Image_Sizes::BC_SMALL` |  | 

Source: [src/BigCommerce/Templates/Wishlist_Product.php](BigCommerce/Templates/Wishlist_Product.php), [line 46](BigCommerce/Templates/Wishlist_Product.php#L46-L46)

### `bigcommerce/address/default_state`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [src/BigCommerce/Templates/Registration_Form.php](BigCommerce/Templates/Registration_Form.php), [line 38](BigCommerce/Templates/Registration_Form.php#L38-L38)

### `bigcommerce/address/default_country`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'United States'` |  | 

Source: [src/BigCommerce/Templates/Registration_Form.php](BigCommerce/Templates/Registration_Form.php), [line 42](BigCommerce/Templates/Registration_Form.php#L42-L42)

### `bigcommerce/countries/data`

*This filter is documented in src/BigCommerce/Templates/Address_Form.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 

Source: [src/BigCommerce/Templates/Registration_Form.php](BigCommerce/Templates/Registration_Form.php), [line 49](BigCommerce/Templates/Registration_Form.php#L49-L52)

### `bigcommerce/countries/data`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 

Source: [src/BigCommerce/Templates/Shipping_Methods.php](BigCommerce/Templates/Shipping_Methods.php), [line 33](BigCommerce/Templates/Shipping_Methods.php#L33-L33)

### `bigcommerce/units/mass`

*Filters units mass.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_option(Units::MASS, 'oz')` |  | 

Source: [src/BigCommerce/Templates/Product_Specs.php](BigCommerce/Templates/Product_Specs.php), [line 40](BigCommerce/Templates/Product_Specs.php#L40-L45)

### `bigcommerce/units/length`

*Filters units mass.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_option(Units::LENGTH, 'in')` |  | 

Source: [src/BigCommerce/Templates/Product_Specs.php](BigCommerce/Templates/Product_Specs.php), [line 46](BigCommerce/Templates/Product_Specs.php#L46-L51)

### `bigcommerce/product/specs`

*Filters product specs.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$specs` | `array` | Specs.
`$product` | `\BigCommerce\Post_Types\Product\Product` | Product.

Source: [src/BigCommerce/Templates/Product_Specs.php](BigCommerce/Templates/Product_Specs.php), [line 76](BigCommerce/Templates/Product_Specs.php#L76-L82)

### `bigcommerce/product/reviews/show_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`is_user_logged_in()` |  | 
`$product->post_id()` |  | 

Source: [src/BigCommerce/Templates/Product_Reviews.php](BigCommerce/Templates/Product_Reviews.php), [line 73](BigCommerce/Templates/Product_Reviews.php#L73-L73)

### `bigcommerce/wishlist/list/actions`

*Filter the action links that are displayed on a wishlist
detail page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$actions` | `string[]` | The rendered action links
`$wishlist` | `\BigCommerce\Accounts\Wishlists\Wishlist` | The wishlist being rendered

Source: [src/BigCommerce/Templates/Wishlist_List_Row.php](BigCommerce/Templates/Wishlist_List_Row.php), [line 72](BigCommerce/Templates/Wishlist_List_Row.php#L72-L79)

### `bigcommerce/template/order_history/image_size`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Image_Sizes::BC_SMALL` |  | 

Source: [src/BigCommerce/Templates/Order_Summary.php](BigCommerce/Templates/Order_Summary.php), [line 52](BigCommerce/Templates/Order_Summary.php#L52-L52)

### `bigcommerce/template/order_history/date_format`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_option('date_format', 'F j, Y')` |  | 

Source: [src/BigCommerce/Templates/Order_Summary.php](BigCommerce/Templates/Order_Summary.php), [line 58](BigCommerce/Templates/Order_Summary.php#L58-L58)

### `bigcommerce/order/include_tax_in_subtotal`

*Filters order included tax subtotal.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$order` | `array` | Order.

Source: [src/BigCommerce/Templates/Order_Summary.php](BigCommerce/Templates/Order_Summary.php), [line 73](BigCommerce/Templates/Order_Summary.php#L73-L79)

### `bigcommerce/order/payment_method_label`

*Filter the label displayed for a payment method*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$label` | `string` | The label to display
`$method` | `string` | The payment method name

Source: [src/BigCommerce/Templates/Order_Summary.php](BigCommerce/Templates/Order_Summary.php), [line 239](BigCommerce/Templates/Order_Summary.php#L239-L245)

### `bigcommerce/order/support_email`

*Filter the support email address displayed on order detail pages.*

If empty, no email will display.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_option(Account_Settings::SUPPORT_EMAIL, '')` |  | 

Source: [src/BigCommerce/Templates/Order_Summary.php](BigCommerce/Templates/Order_Summary.php), [line 249](BigCommerce/Templates/Order_Summary.php#L249-L255)

### `bigcommerce/template/controller_factory`

*Filter the factory class that instantiates template controllers*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`new Controller_Factory()` |  | 
`static::class` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 39](BigCommerce/Templates/Controller.php#L39-L45)

### `bigcommerce/template/options`

*Filter the options passed in to a template controller*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$options` | `array` | The options for the template
`$this->template` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 61](BigCommerce/Templates/Controller.php#L61-L67)

### `bigcommerce/template={$this->template}/options`

*Filter the options passed in to a template controller*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$options` | `array` | The options for the template
`$this->template` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 68](BigCommerce/Templates/Controller.php#L68-L74)

### `bigcommerce/template/data`

*Filter the data passed in to a template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | The data for the template
`$this->template` |  | 
`$this->options` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 94](BigCommerce/Templates/Controller.php#L94-L101)

### `bigcommerce/template={$this->template}/data`

*Filter the data passed in to a template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | The data for the template
`$this->template` |  | 
`$this->options` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 102](BigCommerce/Templates/Controller.php#L102-L109)

### `bigcommerce/template={$this->template}/output`

*Filter the rendered output of the template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template->render($data)` |  | 
`$this->template` |  | 
`$data` | `array` | The data passed to the template
`$this->options` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 111](BigCommerce/Templates/Controller.php#L111-L119)

### `bigcommerce/template/directory/theme`

*Filter the path to the directory within the theme to look in for template overrides*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$relative_path` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 138](BigCommerce/Templates/Controller.php#L138-L143)

### `bigcommerce/template/directory/plugin`

*Filter the path to the plugin directory to look in for templates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$relative_path` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 144](BigCommerce/Templates/Controller.php#L144-L149)

### `bigcommerce/template/path`

*Filter the path to a template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$path` | `string` | The absolute path to the template
`$relative_path` | `string` | The relative path of the requested template

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 161](BigCommerce/Templates/Controller.php#L161-L167)

### `bigcommerce/template={$this->template}/path`

*Filter the path to a template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$path` | `string` | The absolute path to the template
`$relative_path` | `string` | The relative path of the requested template

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 168](BigCommerce/Templates/Controller.php#L168-L174)

### `bigcommerce/template/wrapper/tag`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->get_wrapper_tag()` |  | 
`$this->template` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 195](BigCommerce/Templates/Controller.php#L195-L195)

### `bigcommerce/template/wrapper/classes`

*Filter the HTML tag of the wrapper for a template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->get_wrapper_classes()` |  | 
`$this->template` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 200](BigCommerce/Templates/Controller.php#L200-L206)

### `bigcommerce/template/wrapper/attributes`

*Filter the HTML tag attributes of the wrapper for a template.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->get_wrapper_attributes()` |  | 
`$this->template` |  | 

Source: [src/BigCommerce/Templates/Controller.php](BigCommerce/Templates/Controller.php), [line 209](BigCommerce/Templates/Controller.php#L209-L215)

### `bigcommerce/wishlist/detail/actions`

*Filter the action links that are displayed on a wishlist
detail page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$actions` | `string[]` | The rendered action links
`$wishlist` | `\BigCommerce\Accounts\Wishlists\Wishlist` | The wishlist being rendered

Source: [src/BigCommerce/Templates/Wishlist_Detail_Header.php](BigCommerce/Templates/Wishlist_Detail_Header.php), [line 74](BigCommerce/Templates/Wishlist_Detail_Header.php#L74-L81)

### `bigcommerce/template/product_archive/thumbnail_size`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Image_Sizes::BC_CATEGORY_IMAGE` |  | 

Source: [src/BigCommerce/Templates/Product_Archive.php](BigCommerce/Templates/Product_Archive.php), [line 37](BigCommerce/Templates/Product_Archive.php#L37-L37)

### `bigcommerce/template/directory/theme`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [src/BigCommerce/Templates/Template_Override.php](BigCommerce/Templates/Template_Override.php), [line 164](BigCommerce/Templates/Template_Override.php#L164-L164)

### `bigcommerce/template/directory/theme`

*This filter is documented in src/BigCommerce/Templates/Controller.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$relative_path` |  | 

Source: [src/BigCommerce/Templates/Template_Override.php](BigCommerce/Templates/Template_Override.php), [line 215](BigCommerce/Templates/Template_Override.php#L215-L218)

### `bigcommerce/template/directory/plugin`

*This filter is documented in src/BigCommerce/Templates/Controller.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$relative_path` |  | 

Source: [src/BigCommerce/Templates/Template_Override.php](BigCommerce/Templates/Template_Override.php), [line 223](BigCommerce/Templates/Template_Override.php#L223-L226)

### `bigcommerce/template/path`

*Get the template path*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$path` |  | 
`$relative_path` | `string` | 

Source: [src/BigCommerce/Templates/Template_Override.php](BigCommerce/Templates/Template_Override.php), [line 206](BigCommerce/Templates/Template_Override.php#L206-L231)

### `bigcommerce/template/gallery/image_size`

*Filter the image size used for product gallery images*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$size` | `string` | The image size to use

Source: [src/BigCommerce/Templates/Product_Gallery.php](BigCommerce/Templates/Product_Gallery.php), [line 54](BigCommerce/Templates/Product_Gallery.php#L54-L59)

### `bigcommerce/template/gallery/thumbnail_size`

*Filter the image size used for product gallery image thumbnails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$size` | `string` | The image size to use

Source: [src/BigCommerce/Templates/Product_Gallery.php](BigCommerce/Templates/Product_Gallery.php), [line 77](BigCommerce/Templates/Product_Gallery.php#L77-L82)

### `bigcommerce/template/gallery/zoom_size`

*Filter the image size used for product gallery image thumbnails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Image_Sizes::BC_LARGE` |  | 

Source: [src/BigCommerce/Templates/Product_Gallery.php](BigCommerce/Templates/Product_Gallery.php), [line 86](BigCommerce/Templates/Product_Gallery.php#L86-L91)

### `bigcommerce/rest/proxy_base`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'bc/v3'` |  | 

Source: [src/BigCommerce/Templates/Amp_Cart_Summary.php](BigCommerce/Templates/Amp_Cart_Summary.php), [line 34](BigCommerce/Templates/Amp_Cart_Summary.php#L34-L34)

### `bigcommerce/template/product_list/none_option_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('None', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Templates/Option_Types/Option_Product_List.php](BigCommerce/Templates/Option_Types/Option_Product_List.php), [line 57](BigCommerce/Templates/Option_Types/Option_Product_List.php#L57-L57)

### `bigcommerce/template/featured_image/size`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Image_Sizes::BC_MEDIUM` |  | 

Source: [src/BigCommerce/Templates/Product_Featured_Image.php](BigCommerce/Templates/Product_Featured_Image.php), [line 34](BigCommerce/Templates/Product_Featured_Image.php#L34-L34)

### `bigcommerce/forms/messages`

*Filters forms messages.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [src/BigCommerce/Templates/Review_Form.php](BigCommerce/Templates/Review_Form.php), [line 101](BigCommerce/Templates/Review_Form.php#L101-L106)

### `bigcommerce/form/state/errors`

*Filters form state errors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`null` |  | 

Source: [src/BigCommerce/Templates/Form_Controller.php](BigCommerce/Templates/Form_Controller.php), [line 18](BigCommerce/Templates/Form_Controller.php#L18-L23)

### `bigcommerce/rest/proxy_base`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'bc/v3'` |  | 

Source: [src/BigCommerce/Templates/Amp_Cart_items.php](BigCommerce/Templates/Amp_Cart_items.php), [line 37](BigCommerce/Templates/Amp_Cart_items.php#L37-L37)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $balance)` |  | 
`$balance` |  | 

Source: [src/BigCommerce/Templates/Gift_Certificate_Balance_Response.php](BigCommerce/Templates/Gift_Certificate_Balance_Response.php), [line 37](BigCommerce/Templates/Gift_Certificate_Balance_Response.php#L37-L40)

### `bigcommerce/template/order_history/image_size`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Image_Sizes::BC_SMALL` |  | 

Source: [src/BigCommerce/Templates/Order_Product.php](BigCommerce/Templates/Order_Product.php), [line 41](BigCommerce/Templates/Order_Product.php#L41-L41)

### `bigcommerce/cart/continue_shopping_url`

*Filter the destination of the Continue Shopping link in an empty cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | 

Source: [src/BigCommerce/Templates/Cart_Empty.php](BigCommerce/Templates/Cart_Empty.php), [line 45](BigCommerce/Templates/Cart_Empty.php#L45-L50)

### `bigcommerce/cart/continue_shopping_text`

*Filter the wording of the Continue Shopping link in an empty cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$link_text` | `string` | 

Source: [src/BigCommerce/Templates/Cart_Empty.php](BigCommerce/Templates/Cart_Empty.php), [line 56](BigCommerce/Templates/Cart_Empty.php#L56-L61)

### `bigcommerce/query/default_sort`

*This filter is documents in src/BigCommerce/Post_Types/Product/Query.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Customizer\Sections\Product_Archive::SORT_FEATURED` |  | 

Source: [src/BigCommerce/Templates/Refinery.php](BigCommerce/Templates/Refinery.php), [line 108](BigCommerce/Templates/Refinery.php#L108-L111)

### `bigcommerce/address/default_state`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [src/BigCommerce/Templates/Address_Form.php](BigCommerce/Templates/Address_Form.php), [line 43](BigCommerce/Templates/Address_Form.php#L43-L43)

### `bigcommerce/address/default_country`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'United States'` |  | 

Source: [src/BigCommerce/Templates/Address_Form.php](BigCommerce/Templates/Address_Form.php), [line 50](BigCommerce/Templates/Address_Form.php#L50-L50)

### `bigcommerce/countries/data`

*Filters countries data.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 

Source: [src/BigCommerce/Templates/Address_Form.php](BigCommerce/Templates/Address_Form.php), [line 74](BigCommerce/Templates/Address_Form.php#L74-L79)

### `bigcommerce/gift_certificates/themes`

*Filters gift certificates themes.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`['boy' => ['name' => __('Boy', 'bigcommerce'), 'template' => 'Boy.html'], 'celebration' => ['name' => __('Celebration', 'bigcommerce'), 'template' => 'Celebration.html'], 'christmas' => ['name' => __('Christmas', 'bigcommerce'), 'template' => 'Christmas.html'], 'general' => ['name' => __('General', 'bigcommerce'), 'template' => 'General.html'], 'girl' => ['name' => __('Girl', 'bigcommerce'), 'template' => 'Girl.html'], 'birthday' => ['name' => __('Birthday', 'bigcommerce'), 'template' => 'Birthday.html']]` |  | 

Source: [src/BigCommerce/Templates/Gift_Certificate_Form.php](BigCommerce/Templates/Gift_Certificate_Form.php), [line 57](BigCommerce/Templates/Gift_Certificate_Form.php#L57-L87)

### `bigcommerce/pages/matching_page_candidates`

*Filters pages matching page candidates.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_ids` | `array` | Post ids.
`static::NAME` |  | 

Source: [src/BigCommerce/Pages/Shipping_Returns_Page.php](BigCommerce/Pages/Shipping_Returns_Page.php), [line 83](BigCommerce/Pages/Shipping_Returns_Page.php#L83-L89)

### `bigcommerce/pages/matching_page_candidates`

*This filter is documented in src/BigCommerce/Pages/Shipping_Returns_Page.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_ids` |  | 
`static::NAME` |  | 

Source: [src/BigCommerce/Pages/Required_Page.php](BigCommerce/Pages/Required_Page.php), [line 208](BigCommerce/Pages/Required_Page.php#L208-L211)

### `bigcommerce/pages/insert_post_args`

*Filters pages insert post arguments.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | Arguments.
`static::NAME` |  | 

Source: [src/BigCommerce/Pages/Required_Page.php](BigCommerce/Pages/Required_Page.php), [line 223](BigCommerce/Pages/Required_Page.php#L223-L229)

### `bigcommerce/pages/matching_page_candidates`

*This filter is documented in src/BigCommerce/Pages/Shipping_Returns_Page.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$post_ids` |  | 
`static::NAME` |  | 

Source: [src/BigCommerce/Pages/Checkout_Complete_Page.php](BigCommerce/Pages/Checkout_Complete_Page.php), [line 70](BigCommerce/Pages/Checkout_Complete_Page.php#L70-L73)

### `bigcommerce/product_description/allowed_html`

*Filters product description's allowed html*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array_merge(wp_kses_allowed_html('post'), ['iframe' => ['src' => true, 'height' => true, 'width' => true, 'frameborder' => true, 'allowfullscreen' => true]])` |  | 

Source: [src/BigCommerce/Util/Kses.php](BigCommerce/Util/Kses.php), [line 19](BigCommerce/Util/Kses.php#L19-L37)

### `bigcommerce/rest/products_query`

*Filters rest products query.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | Arguments.
`$request` | `\WP_REST_Request` | request.

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 276](BigCommerce/Rest/Products_Controller.php#L276-L282)

### `bigcommerce/rest/products/prepare_item_for_response`

*Filters the product data for a response.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$response` | `\WP_REST_Response` | The response object.
`$post` | `\WP_Post` | Post object.
`$request` | `\WP_REST_Request` | Request object.

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 487](BigCommerce/Rest/Products_Controller.php#L487-L494)

### `the_content`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$content` |  | 

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 549](BigCommerce/Rest/Products_Controller.php#L549-L556)

### `bigcommerce/rest/product/content_trim_words_length`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`15` |  | 

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 562](BigCommerce/Rest/Products_Controller.php#L562-L562)

### `bigcommerce/rest/missing_image`

*Filters rest missing image data.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`['url' => '', 'width' => '', 'height' => '']` |  | 
`$size` |  | 

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 605](BigCommerce/Rest/Products_Controller.php#L605-L614)

### `bigcommerce/rest/image_sizes`

*Filters rest image sizes.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sizes` | `array` | Sizes.

Source: [src/BigCommerce/Rest/Products_Controller.php](BigCommerce/Rest/Products_Controller.php), [line 762](BigCommerce/Rest/Products_Controller.php#L762-L767)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $price)` |  | 
`$price` |  | 

Source: [src/BigCommerce/Rest/Shipping_Controller.php](BigCommerce/Rest/Shipping_Controller.php), [line 317](BigCommerce/Rest/Shipping_Controller.php#L317-L320)

### `bigcommerce/pricing/customer_group_id`

*Filter the customer group ID passed to the BigCommerce API.*

Null to use the default guest group. 0 to use unmodified catalog pricing.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$customer->get_group_id()` |  | 

Source: [src/BigCommerce/Rest/Pricing_Controller.php](BigCommerce/Rest/Pricing_Controller.php), [line 81](BigCommerce/Rest/Pricing_Controller.php#L81-L87)

### `bigcommerce/currency/code`

*Retrieves a collection of products.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'USD'` |  | 

Source: [src/BigCommerce/Rest/Pricing_Controller.php](BigCommerce/Rest/Pricing_Controller.php), [line 71](BigCommerce/Rest/Pricing_Controller.php#L71-L88)

### `bigcommerce/pricing/request_args`

*Filters pricing request arguments.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | Arguments.
`$request` | `\WP_REST_Request` | Full details about the request.

Source: [src/BigCommerce/Rest/Pricing_Controller.php](BigCommerce/Rest/Pricing_Controller.php), [line 96](BigCommerce/Rest/Pricing_Controller.php#L96-L102)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $price)` |  | 
`$price` |  | 

Source: [src/BigCommerce/Rest/Coupon_Code_Controller.php](BigCommerce/Rest/Coupon_Code_Controller.php), [line 153](BigCommerce/Rest/Coupon_Code_Controller.php#L153-L156)

### `bigcommerce/rest/shortcode/prepare_item_for_response`

*Filters the product data for a response.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$response` | `\WP_REST_Response` | The response object.
`$shortcode` |  | 
`$request` | `\WP_REST_Request` | Request object.

Source: [src/BigCommerce/Rest/Shortcode_Controller.php](BigCommerce/Rest/Shortcode_Controller.php), [line 150](BigCommerce/Rest/Shortcode_Controller.php#L150-L157)

### `bigcommerce/rest/shortcode/selection`

*Filters rest shortcode selection.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | Arguments.
`$request` | `\WP_REST_Request` | request.

Source: [src/BigCommerce/Rest/Shortcode_Controller.php](BigCommerce/Rest/Shortcode_Controller.php), [line 199](BigCommerce/Rest/Shortcode_Controller.php#L199-L205)

### `bigcommerce/rest/shortcode/query`

*Filters rest shortcode query.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | Arguments.
`$request` | `\WP_REST_Request` | request.

Source: [src/BigCommerce/Rest/Shortcode_Controller.php](BigCommerce/Rest/Shortcode_Controller.php), [line 265](BigCommerce/Rest/Shortcode_Controller.php#L265-L271)

### `bigcommerce/form/review/status`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'pending'` |  | 
`$submission` |  | 
`$product_id` |  | 

Source: [src/BigCommerce/Forms/Product_Review_Handler.php](BigCommerce/Forms/Product_Review_Handler.php), [line 60](BigCommerce/Forms/Product_Review_Handler.php#L60-L60)

### `bigcommerce/form/review/created_message`

*Filters review form created message.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Thank you for your review! It has been successfully submitted and is pending.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Forms/Product_Review_Handler.php](BigCommerce/Forms/Product_Review_Handler.php), [line 76](BigCommerce/Forms/Product_Review_Handler.php#L76-L81)

### `bigcommerce/product/reviews/show_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`is_user_logged_in()` |  | 
`$submission['bc-review']['post_id']` |  | 

Source: [src/BigCommerce/Forms/Product_Review_Handler.php](BigCommerce/Forms/Product_Review_Handler.php), [line 96](BigCommerce/Forms/Product_Review_Handler.php#L96-L96)

### `bigcommerce/form/review/errors`

*Filters update review form errors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | WP error.
`$submission` | `array` | Submitted data.

Source: [src/BigCommerce/Forms/Product_Review_Handler.php](BigCommerce/Forms/Product_Review_Handler.php), [line 128](BigCommerce/Forms/Product_Review_Handler.php#L128-L134)

### `bigcommerce/form/address/created_message`

*Filters address form created message.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Address created.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Forms/Update_Address_Handler.php](BigCommerce/Forms/Update_Address_Handler.php), [line 45](BigCommerce/Forms/Update_Address_Handler.php#L45-L50)

### `bigcommerce/form/address/updated_message`

*Filters address form updated message.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Address saved.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Forms/Update_Address_Handler.php](BigCommerce/Forms/Update_Address_Handler.php), [line 53](BigCommerce/Forms/Update_Address_Handler.php#L53-L58)

### `bigcommerce/form/update_address/errors`

*Filters update profile address form errors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | WP error.
`$submission` | `array` | Submitted data.

Source: [src/BigCommerce/Forms/Update_Address_Handler.php](BigCommerce/Forms/Update_Address_Handler.php), [line 115](BigCommerce/Forms/Update_Address_Handler.php#L115-L121)

### `bigcommerce/forms/show_messages`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$post_id` |  | 

Source: [src/BigCommerce/Forms/Messages.php](BigCommerce/Forms/Messages.php), [line 34](BigCommerce/Forms/Messages.php#L34-L34)

### `bigcommerce/forms/messages`

*Filter the feedback messages that will be rendered.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

Source: [src/BigCommerce/Forms/Messages.php](BigCommerce/Forms/Messages.php), [line 38](BigCommerce/Forms/Messages.php#L38-L43)

### `bigcommerce/forms/show_error_messages`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$data` |  | 

Source: [src/BigCommerce/Forms/Messages.php](BigCommerce/Forms/Messages.php), [line 88](BigCommerce/Forms/Messages.php#L88-L88)

### `bigcommerce/forms/show_success_messages`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$data` |  | 

Source: [src/BigCommerce/Forms/Messages.php](BigCommerce/Forms/Messages.php), [line 130](BigCommerce/Forms/Messages.php#L130-L130)

### `bigcommerce/messages/success/arguments`

*Filter the arguments passed to the success message template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | The arguments that will be passed
`$data` | `array` | The data that was stored with the message

Source: [src/BigCommerce/Forms/Messages.php](BigCommerce/Forms/Messages.php), [line 141](BigCommerce/Forms/Messages.php#L141-L147)

### `bigcommerce/currency/code`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'USD'` |  | 

Source: [src/BigCommerce/Forms/Switch_Currency_Handler.php](BigCommerce/Forms/Switch_Currency_Handler.php), [line 52](BigCommerce/Forms/Switch_Currency_Handler.php#L52-L52)

### `bigcommerce/form/currency_switch/success_message`

*The message to display on currency switch*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Currency switched!', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Forms/Switch_Currency_Handler.php](BigCommerce/Forms/Switch_Currency_Handler.php), [line 69](BigCommerce/Forms/Switch_Currency_Handler.php#L69-L74)

### `bigcommerce/form/switch_currency/errors`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` |  | 
`$submission` | `array` | 

Source: [src/BigCommerce/Forms/Switch_Currency_Handler.php](BigCommerce/Forms/Switch_Currency_Handler.php), [line 98](BigCommerce/Forms/Switch_Currency_Handler.php#L98-L114)

### `bigcommerce/form/delete_address/errors`

*Filters delete address form errors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | WP error.
`$submission` | `array` | Submitted data.

Source: [src/BigCommerce/Forms/Delete_Address_Handler.php](BigCommerce/Forms/Delete_Address_Handler.php), [line 54](BigCommerce/Forms/Delete_Address_Handler.php#L54-L60)

### `bigcommerce/user/default_role`

*This filter is documented in src/BigCommerce/Accounts/Login.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`Customer_Role::NAME` |  | 

Source: [src/BigCommerce/Forms/Registration_Handler.php](BigCommerce/Forms/Registration_Handler.php), [line 126](BigCommerce/Forms/Registration_Handler.php#L126-L127)

### `bigcommerce/form/registration/success_message`

*The message to display when an account is created*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Account created!', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Forms/Registration_Handler.php](BigCommerce/Forms/Registration_Handler.php), [line 144](BigCommerce/Forms/Registration_Handler.php#L144-L149)

### `bigcommerce/form/registration/errors`

*Filters update registration form errors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | WP error.
`$submission` | `array` | Submitted data.

Source: [src/BigCommerce/Forms/Registration_Handler.php](BigCommerce/Forms/Registration_Handler.php), [line 248](BigCommerce/Forms/Registration_Handler.php#L248-L254)

### `bigcommerce/form/gift_certificate/success_message`

*The message to display when a gift certificate is added to the cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Gift Certificate Created!', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 75](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L75-L80)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $this->minimum)` |  | 
`$this->minimum` |  | 

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 148](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L148-L151)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $this->maximum)` |  | 
`$this->maximum` |  | 

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 152](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L152-L155)

### `bigcommerce/form/gift_certificate/errors`

*Filters update gift certificates form errors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | WP error.
`$submission` | `array` | Submitted data.

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 164](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L164-L170)

### `bigcommerce/currency/format`

*This filter is documented in src/BigCommerce/Currency/With_Currency.php.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('¤%0.2f', $amount)` |  | 
`$amount` |  | 

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 183](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L183-L186)

### `bigcommerce/gift_certificates/theme`

*Filters gift certificates theme.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$submission['theme']` |  | 

Source: [src/BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php), [line 188](BigCommerce/Forms/Purchase_Gift_Certificate_Handler.php#L188-L193)

### `bigcommerce/form/profile/success_message`

*Filters profile form success message.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Profile updated.', 'bigcommerce')` |  | 

Source: [src/BigCommerce/Forms/Update_Profile_Handler.php](BigCommerce/Forms/Update_Profile_Handler.php), [line 78](BigCommerce/Forms/Update_Profile_Handler.php#L78-L83)

### `bigcommerce/form/update_profile/errors`

*Filters update profile form errors.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$errors` | `\WP_Error` | WP error.
`$submission` | `array` | Submitted data.

Source: [src/BigCommerce/Forms/Update_Profile_Handler.php](BigCommerce/Forms/Update_Profile_Handler.php), [line 142](BigCommerce/Forms/Update_Profile_Handler.php#L142-L148)

### `bigcommerce/form/redirect_url`

*Filter the redirect URL after a form submission.*

Return `false` to abort the redirect.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The destination URL of the redirect

Source: [src/BigCommerce/Forms/Form_Redirect.php](BigCommerce/Forms/Form_Redirect.php), [line 10](BigCommerce/Forms/Form_Redirect.php#L10-L16)

### `wp_edit_nav_menu_walker`

*This filter is documented in wp-admin/includes/nav-menu.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'Walker_Nav_Menu_Edit'` |  | 
`$menu` |  | 

Source: [src/BigCommerce/Nav_Menu/Nav_Items_Meta_Box.php](BigCommerce/Nav_Menu/Nav_Items_Meta_Box.php), [line 204](BigCommerce/Nav_Menu/Nav_Items_Meta_Box.php#L204-L205)

### `bigcommerce/editor/shortcode_button/label`

*Filter the label of the Add Products button*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$label` | `string` | The button label

Source: [src/BigCommerce/Editor/Add_Products_Button.php](BigCommerce/Editor/Add_Products_Button.php), [line 13](BigCommerce/Editor/Add_Products_Button.php#L13-L18)

### `bigcommerce/gift_certificates/do_subnav`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$post_id` |  | 

Source: [src/BigCommerce/Gift_Certificates/Sub_Nav.php](BigCommerce/Gift_Certificates/Sub_Nav.php), [line 32](BigCommerce/Gift_Certificates/Sub_Nav.php#L32-L32)

### `bigcommerce/gift_certificates/subnav/links`

*Filter the links that show in the account subnav.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$links` | `array[]` | Each link will have the properties:<br>`url` - The URL of the link<br>`label` - The label of the link<br>`current` - Whether the link is to the current page

Source: [src/BigCommerce/Gift_Certificates/Sub_Nav.php](BigCommerce/Gift_Certificates/Sub_Nav.php), [line 65](BigCommerce/Gift_Certificates/Sub_Nav.php#L65-L73)

### `bigcommerce_modified_product_ids`

*Filters modified product ids.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`[]` |  | 

Source: [src/BigCommerce/Import/Processors/Listing_Fetcher.php](BigCommerce/Import/Processors/Listing_Fetcher.php), [line 65](BigCommerce/Import/Processors/Listing_Fetcher.php#L65-L70)

### `bigcommerce/import/product/menu_order`

*Filter the menu order assigned to the product, based on the
source product's sort_order property.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$sort_order` |  | 
`$this->product` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Builder.php](BigCommerce/Import/Importers/Products/Product_Builder.php), [line 153](BigCommerce/Import/Importers/Products/Product_Builder.php#L153-L160)

### `bigcommerce/import/product/import_images`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Builder.php](BigCommerce/Import/Importers/Products/Product_Builder.php), [line 251](BigCommerce/Import/Importers/Products/Product_Builder.php#L251-L251)

### `bigcommerce/sku/normalized/segment/num_of_characters`

*Filters normalized SKU segment's no of chars.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`10` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Builder.php](BigCommerce/Import/Importers/Products/Product_Builder.php), [line 419](BigCommerce/Import/Importers/Products/Product_Builder.php#L419-L424)

### `bigcommerce/sku/normalized/empty`

*Filters normalized empty SKU.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`str_repeat('z', $num_of_characters)` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Builder.php](BigCommerce/Import/Importers/Products/Product_Builder.php), [line 426](BigCommerce/Import/Importers/Products/Product_Builder.php#L426-L431)

### `bigcommerce/sku/normalized`

*Filters SKU normalized.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->normalize_sku_segments($this->segment_sku($sku), $num_of_characters)` |  | 
`$sku` | `string` | SKU.

Source: [src/BigCommerce/Import/Importers/Products/Product_Builder.php](BigCommerce/Import/Importers/Products/Product_Builder.php), [line 434](BigCommerce/Import/Importers/Products/Product_Builder.php#L434-L440)

### `bigcommerce/import/product/post_array`

*Filters import product post array.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$postarr` | `array` | Post array.

Source: [src/BigCommerce/Import/Importers/Products/Product_Saver.php](BigCommerce/Import/Importers/Products/Product_Saver.php), [line 120](BigCommerce/Import/Importers/Products/Product_Saver.php#L120-L125)

### `bigcommerce/import/strategy/needs_refresh`

*Filter whether the product should be refreshed*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$response` | `bool` | Whether the product should be refreshed
`$post_id` | `int` | The ID of the product post
`$this->product` |  | 
`$this->listing` |  | 
`$this->version` |  | 

Source: [src/BigCommerce/Import/Importers/Products/Product_Strategy_Factory.php](BigCommerce/Import/Importers/Products/Product_Strategy_Factory.php), [line 115](BigCommerce/Import/Importers/Products/Product_Strategy_Factory.php#L115-L124)

### `bigcommerce/import/term/data`

*Find a previously imported term that should be set as the parent term*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$bc_id` |  | 

Source: [src/BigCommerce/Import/Importers/Terms/Term_Saver.php](BigCommerce/Import/Importers/Terms/Term_Saver.php), [line 140](BigCommerce/Import/Importers/Terms/Term_Saver.php#L140-L168)

### `bigcommerce/import/strategy/term/needs_refresh`

*Filter whether the term should be refreshed*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$response` | `bool` | Whether the term should be refreshed
`$term_id` | `int` | The ID of the term
`$this->bc_term` |  | 
`Import_Strategy::VERSION` |  | 

Source: [src/BigCommerce/Import/Importers/Terms/Term_Strategy_Factory.php](BigCommerce/Import/Importers/Terms/Term_Strategy_Factory.php), [line 74](BigCommerce/Import/Importers/Terms/Term_Strategy_Factory.php#L74-L82)


<p align="center"><a href="https://github.com/pronamic/wp-documentor"><img src="https://cdn.jsdelivr.net/gh/pronamic/wp-documentor@main/logos/pronamic-wp-documentor.svgo-min.svg" alt="Pronamic WordPress Documentor" width="32" height="32"></a><br><em>Generated by <a href="https://github.com/pronamic/wp-documentor">Pronamic WordPress Documentor</a> <code>1.2.0</code></em><p>

