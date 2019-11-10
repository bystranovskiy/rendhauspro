<?php
namespace WP_Media_Folder\Aws\DAX;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon DynamoDB Accelerator (DAX)** service.
 * @method \WP_Media_Folder\Aws\Result createCluster(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createParameterGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createParameterGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createSubnetGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createSubnetGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result decreaseReplicationFactor(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise decreaseReplicationFactorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteCluster(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteParameterGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteParameterGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteSubnetGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteSubnetGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeClusters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeDefaultParameters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeDefaultParametersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEvents(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeParameterGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeParameterGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeParameters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeSubnetGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeSubnetGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result increaseReplicationFactor(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise increaseReplicationFactorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result rebootNode(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise rebootNodeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result tagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result untagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateCluster(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateParameterGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateParameterGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateSubnetGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateSubnetGroupAsync(array $args = [])
 */
class DAXClient extends AwsClient {}
