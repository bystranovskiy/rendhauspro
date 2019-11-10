<?php
namespace WP_Media_Folder\Aws\WafRegional;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS WAF Regional** service.
 * @method \WP_Media_Folder\Aws\Result associateWebACL(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise associateWebACLAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createByteMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createByteMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createGeoMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createGeoMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createIPSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createIPSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createRateBasedRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createRateBasedRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createRegexMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createRegexMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createRegexPatternSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createRegexPatternSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createRuleGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createRuleGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createSizeConstraintSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createSizeConstraintSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createSqlInjectionMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createSqlInjectionMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createWebACL(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createWebACLAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createXssMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createXssMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteByteMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteByteMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteGeoMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteGeoMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteIPSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteIPSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteLoggingConfiguration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteLoggingConfigurationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deletePermissionPolicy(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deletePermissionPolicyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteRateBasedRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteRateBasedRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteRegexMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteRegexMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteRegexPatternSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteRegexPatternSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteRuleGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteRuleGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteSizeConstraintSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteSizeConstraintSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteSqlInjectionMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteSqlInjectionMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteWebACL(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteWebACLAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteXssMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteXssMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disassociateWebACL(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disassociateWebACLAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getByteMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getByteMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getChangeToken(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getChangeTokenAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getChangeTokenStatus(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getChangeTokenStatusAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getGeoMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getGeoMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getIPSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getIPSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getLoggingConfiguration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getLoggingConfigurationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getPermissionPolicy(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getPermissionPolicyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRateBasedRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRateBasedRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRateBasedRuleManagedKeys(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRateBasedRuleManagedKeysAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRegexMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRegexMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRegexPatternSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRegexPatternSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRuleGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRuleGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSampledRequests(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSampledRequestsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSizeConstraintSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSizeConstraintSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSqlInjectionMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSqlInjectionMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getWebACL(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getWebACLAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getWebACLForResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getWebACLForResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getXssMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getXssMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listActivatedRulesInRuleGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listActivatedRulesInRuleGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listByteMatchSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listByteMatchSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listGeoMatchSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listGeoMatchSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listIPSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listIPSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listLoggingConfigurations(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listLoggingConfigurationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listRateBasedRules(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listRateBasedRulesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listRegexMatchSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listRegexMatchSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listRegexPatternSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listRegexPatternSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listResourcesForWebACL(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listResourcesForWebACLAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listRuleGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listRuleGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listRules(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listSizeConstraintSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listSizeConstraintSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listSqlInjectionMatchSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listSqlInjectionMatchSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listSubscribedRuleGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listSubscribedRuleGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listWebACLs(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listWebACLsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listXssMatchSets(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listXssMatchSetsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putLoggingConfiguration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putLoggingConfigurationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putPermissionPolicy(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putPermissionPolicyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateByteMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateByteMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateGeoMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateGeoMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateIPSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateIPSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRateBasedRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRateBasedRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRegexMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRegexMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRegexPatternSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRegexPatternSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRuleGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRuleGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateSizeConstraintSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateSizeConstraintSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateSqlInjectionMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateSqlInjectionMatchSetAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateWebACL(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateWebACLAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateXssMatchSet(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateXssMatchSetAsync(array $args = [])
 */
class WafRegionalClient extends AwsClient {}
