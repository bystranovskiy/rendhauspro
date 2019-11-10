<?php
namespace WP_Media_Folder\Aws\WorkSpaces;

use WP_Media_Folder\Aws\AwsClient;

/**
 * Amazon WorkSpaces client.
 *
 * @method \WP_Media_Folder\Aws\Result associateIpGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise associateIpGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result authorizeIpRules(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise authorizeIpRulesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createIpGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createIpGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createWorkspaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createWorkspacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteIpGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteIpGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteWorkspaceImage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteWorkspaceImageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeAccount(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeAccountAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeAccountModifications(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeAccountModificationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeClientProperties(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeClientPropertiesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeIpGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeIpGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeWorkspaceBundles(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeWorkspaceBundlesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeWorkspaceDirectories(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeWorkspaceDirectoriesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeWorkspaceImages(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeWorkspaceImagesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeWorkspaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeWorkspacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeWorkspacesConnectionStatus(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeWorkspacesConnectionStatusAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disassociateIpGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disassociateIpGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result importWorkspaceImage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise importWorkspaceImageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listAvailableManagementCidrRanges(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listAvailableManagementCidrRangesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyAccount(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyAccountAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyClientProperties(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyClientPropertiesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyWorkspaceProperties(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyWorkspacePropertiesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result modifyWorkspaceState(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise modifyWorkspaceStateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result rebootWorkspaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise rebootWorkspacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result rebuildWorkspaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise rebuildWorkspacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result revokeIpRules(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise revokeIpRulesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startWorkspaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startWorkspacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result stopWorkspaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise stopWorkspacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result terminateWorkspaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise terminateWorkspacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRulesOfIpGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRulesOfIpGroupAsync(array $args = [])
 */
class WorkSpacesClient extends AwsClient {}
