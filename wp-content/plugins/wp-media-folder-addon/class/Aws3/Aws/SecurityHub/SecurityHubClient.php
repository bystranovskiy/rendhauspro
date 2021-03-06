<?php
namespace WP_Media_Folder\Aws\SecurityHub;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS SecurityHub** service.
 * @method \WP_Media_Folder\Aws\Result acceptInvitation(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise acceptInvitationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result batchDisableStandards(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise batchDisableStandardsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result batchEnableStandards(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise batchEnableStandardsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result batchImportFindings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise batchImportFindingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createInsight(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createInsightAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createMembers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createMembersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result declineInvitations(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise declineInvitationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteInsight(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteInsightAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteInvitations(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteInvitationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteMembers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteMembersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disableImportFindingsForProduct(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disableImportFindingsForProductAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disableSecurityHub(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disableSecurityHubAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disassociateFromMasterAccount(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disassociateFromMasterAccountAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disassociateMembers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disassociateMembersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result enableImportFindingsForProduct(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise enableImportFindingsForProductAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result enableSecurityHub(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise enableSecurityHubAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getEnabledStandards(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getEnabledStandardsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getFindings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getFindingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getInsightResults(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getInsightResultsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getInsights(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getInsightsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getInvitationsCount(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getInvitationsCountAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getMasterAccount(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getMasterAccountAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getMembers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getMembersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result inviteMembers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise inviteMembersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listEnabledProductsForImport(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listEnabledProductsForImportAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listInvitations(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listInvitationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listMembers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateFindings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateFindingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateInsight(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateInsightAsync(array $args = [])
 */
class SecurityHubClient extends AwsClient {}
