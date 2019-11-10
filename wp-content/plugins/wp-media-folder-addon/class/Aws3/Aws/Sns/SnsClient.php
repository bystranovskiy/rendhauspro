<?php
namespace WP_Media_Folder\Aws\Sns;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Simple Notification Service (Amazon SNS)**.
 *
 * @method \WP_Media_Folder\Aws\Result addPermission(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addPermissionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result checkIfPhoneNumberIsOptedOut(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise checkIfPhoneNumberIsOptedOutAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result confirmSubscription(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise confirmSubscriptionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createPlatformApplication(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createPlatformApplicationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createPlatformEndpoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createPlatformEndpointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createTopic(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createTopicAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteEndpoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deletePlatformApplication(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deletePlatformApplicationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteTopic(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteTopicAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getEndpointAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getEndpointAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getPlatformApplicationAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getPlatformApplicationAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSMSAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSMSAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSubscriptionAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSubscriptionAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getTopicAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getTopicAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listEndpointsByPlatformApplication(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listEndpointsByPlatformApplicationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listPhoneNumbersOptedOut(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listPhoneNumbersOptedOutAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listPlatformApplications(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listPlatformApplicationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listSubscriptions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listSubscriptionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listSubscriptionsByTopic(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listSubscriptionsByTopicAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTopics(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTopicsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result optInPhoneNumber(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise optInPhoneNumberAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result publish(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise publishAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result removePermission(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setEndpointAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setEndpointAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setPlatformApplicationAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setPlatformApplicationAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setSMSAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setSMSAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setSubscriptionAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setSubscriptionAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setTopicAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setTopicAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result subscribe(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise subscribeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result unsubscribe(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise unsubscribeAsync(array $args = [])
 */
class SnsClient extends AwsClient {}
