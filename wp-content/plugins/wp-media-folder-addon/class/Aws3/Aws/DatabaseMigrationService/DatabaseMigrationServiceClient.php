<?php
namespace WP_Media_Folder\Aws\DatabaseMigrationService;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Database Migration Service** service.
 * @method \WP_Media_Folder\Aws\Result addTagsToResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createEndpoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createEventSubscription(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createReplicationInstance(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createReplicationInstanceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createReplicationSubnetGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createReplicationSubnetGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createReplicationTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createReplicationTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteCertificate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteEndpoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteEventSubscription(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteReplicationInstance(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteReplicationInstanceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteReplicationSubnetGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteReplicationSubnetGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteReplicationTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteReplicationTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeAccountAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeCertificates(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeCertificatesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeConnections(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeConnectionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEndpointTypes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEndpointTypesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEndpoints(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEventCategories(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEventSubscriptions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEvents(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeOrderableReplicationInstances(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeOrderableReplicationInstancesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeRefreshSchemasStatus(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeRefreshSchemasStatusAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeReplicationInstanceTaskLogs(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeReplicationInstanceTaskLogsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeReplicationInstances(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeReplicationInstancesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeReplicationSubnetGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeReplicationSubnetGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeReplicationTaskAssessmentResults(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeReplicationTaskAssessmentResultsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeReplicationTasks(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeReplicationTasksAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeSchemas(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeSchemasAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTableStatistics(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTableStatisticsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result importCertificate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise importCertificateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTagsForResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyEndpoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyEndpointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyEventSubscription(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyReplicationInstance(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyReplicationInstanceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyReplicationSubnetGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyReplicationSubnetGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyReplicationTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyReplicationTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result rebootReplicationInstance(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise rebootReplicationInstanceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result refreshSchemas(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise refreshSchemasAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result reloadTables(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise reloadTablesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result removeTagsFromResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startReplicationTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startReplicationTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startReplicationTaskAssessment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startReplicationTaskAssessmentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result stopReplicationTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise stopReplicationTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result testConnection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise testConnectionAsync(array $args = [])
 */
class DatabaseMigrationServiceClient extends AwsClient {}
