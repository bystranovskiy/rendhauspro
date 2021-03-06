<?php
namespace WP_Media_Folder\Aws\CognitoIdentityProvider;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Identity Provider** service.
 * 
 * @method \WP_Media_Folder\Aws\Result addCustomAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addCustomAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminAddUserToGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminAddUserToGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminConfirmSignUp(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminConfirmSignUpAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminCreateUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminCreateUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminDeleteUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminDeleteUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminDeleteUserAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminDeleteUserAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminDisableProviderForUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminDisableProviderForUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminDisableUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminDisableUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminEnableUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminEnableUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminForgetDevice(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminForgetDeviceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminGetDevice(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminGetDeviceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminGetUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminGetUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminInitiateAuth(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminInitiateAuthAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminLinkProviderForUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminLinkProviderForUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminListDevices(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminListDevicesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminListGroupsForUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminListGroupsForUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminListUserAuthEvents(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminListUserAuthEventsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminRemoveUserFromGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminRemoveUserFromGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminResetUserPassword(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminResetUserPasswordAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminRespondToAuthChallenge(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminRespondToAuthChallengeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminSetUserMFAPreference(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminSetUserMFAPreferenceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminSetUserSettings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminSetUserSettingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminUpdateAuthEventFeedback(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminUpdateAuthEventFeedbackAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminUpdateDeviceStatus(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminUpdateDeviceStatusAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminUpdateUserAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminUpdateUserAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result adminUserGlobalSignOut(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise adminUserGlobalSignOutAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result associateSoftwareToken(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise associateSoftwareTokenAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result changePassword(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise changePasswordAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result confirmDevice(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise confirmDeviceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result confirmForgotPassword(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise confirmForgotPasswordAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result confirmSignUp(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise confirmSignUpAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createIdentityProvider(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createIdentityProviderAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createResourceServer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createResourceServerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createUserImportJob(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createUserImportJobAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createUserPool(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createUserPoolAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createUserPoolClient(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createUserPoolClientAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createUserPoolDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createUserPoolDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteIdentityProvider(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteIdentityProviderAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteResourceServer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteResourceServerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteUserAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteUserAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteUserPool(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteUserPoolAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteUserPoolClient(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteUserPoolClientAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteUserPoolDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteUserPoolDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeIdentityProvider(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeIdentityProviderAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeResourceServer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeResourceServerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeRiskConfiguration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeRiskConfigurationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeUserImportJob(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeUserImportJobAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeUserPool(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeUserPoolAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeUserPoolClient(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeUserPoolClientAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeUserPoolDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeUserPoolDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result forgetDevice(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise forgetDeviceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result forgotPassword(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise forgotPasswordAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getCSVHeader(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getCSVHeaderAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDevice(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getIdentityProviderByIdentifier(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getIdentityProviderByIdentifierAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSigningCertificate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSigningCertificateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUICustomization(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUICustomizationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUser(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUserAttributeVerificationCode(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUserAttributeVerificationCodeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUserPoolMfaConfig(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUserPoolMfaConfigAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result globalSignOut(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise globalSignOutAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result initiateAuth(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise initiateAuthAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listDevices(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listGroups(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listIdentityProviders(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listIdentityProvidersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listResourceServers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listResourceServersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listUserImportJobs(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listUserImportJobsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listUserPoolClients(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listUserPoolClientsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listUserPools(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listUserPoolsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listUsers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listUsersInGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listUsersInGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result resendConfirmationCode(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise resendConfirmationCodeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result respondToAuthChallenge(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise respondToAuthChallengeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setRiskConfiguration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setRiskConfigurationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setUICustomization(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setUICustomizationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setUserMFAPreference(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setUserMFAPreferenceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setUserPoolMfaConfig(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setUserPoolMfaConfigAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setUserSettings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setUserSettingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result signUp(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise signUpAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startUserImportJob(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startUserImportJobAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result stopUserImportJob(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise stopUserImportJobAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateAuthEventFeedback(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateAuthEventFeedbackAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateDeviceStatus(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateDeviceStatusAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateGroup(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateIdentityProvider(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateIdentityProviderAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateResourceServer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateResourceServerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateUserAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateUserAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateUserPool(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateUserPoolAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateUserPoolClient(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateUserPoolClientAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result verifySoftwareToken(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise verifySoftwareTokenAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result verifyUserAttribute(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise verifyUserAttributeAsync(array $args = [])
 */
class CognitoIdentityProviderClient extends AwsClient {}
