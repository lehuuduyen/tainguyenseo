<?php
namespace Aws\AccessAnalyzer;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Access Analyzer** service.
 * @method \Aws\Result applyArchiveRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applyArchiveRuleAsync(array $args = [])
 * @method \Aws\Result cancelPolicyGeneration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelPolicyGenerationAsync(array $args = [])
 * @method \Aws\Result checkAccessNotGranted(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkAccessNotGrantedAsync(array $args = [])
 * @method \Aws\Result checkNoNewAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkNoNewAccessAsync(array $args = [])
 * @method \Aws\Result createAccessPreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessPreviewAsync(array $args = [])
 * @method \Aws\Result createAnalyzer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAnalyzerAsync(array $args = [])
 * @method \Aws\Result createArchiveRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createArchiveRuleAsync(array $args = [])
 * @method \Aws\Result deleteAnalyzer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAnalyzerAsync(array $args = [])
 * @method \Aws\Result deleteArchiveRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteArchiveRuleAsync(array $args = [])
 * @method \Aws\Result getAccessPreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPreviewAsync(array $args = [])
 * @method \Aws\Result getAnalyzedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAnalyzedResourceAsync(array $args = [])
 * @method \Aws\Result getAnalyzer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAnalyzerAsync(array $args = [])
 * @method \Aws\Result getArchiveRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getArchiveRuleAsync(array $args = [])
 * @method \Aws\Result getFinding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingAsync(array $args = [])
 * @method \Aws\Result getFindingV2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingV2Async(array $args = [])
 * @method \Aws\Result getGeneratedPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGeneratedPolicyAsync(array $args = [])
 * @method \Aws\Result listAccessPreviewFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessPreviewFindingsAsync(array $args = [])
 * @method \Aws\Result listAccessPreviews(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessPreviewsAsync(array $args = [])
 * @method \Aws\Result listAnalyzedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnalyzedResourcesAsync(array $args = [])
 * @method \Aws\Result listAnalyzers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnalyzersAsync(array $args = [])
 * @method \Aws\Result listArchiveRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArchiveRulesAsync(array $args = [])
 * @method \Aws\Result listFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsAsync(array $args = [])
 * @method \Aws\Result listFindingsV2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsV2Async(array $args = [])
 * @method \Aws\Result listPolicyGenerations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyGenerationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result startPolicyGeneration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPolicyGenerationAsync(array $args = [])
 * @method \Aws\Result startResourceScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startResourceScanAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateArchiveRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateArchiveRuleAsync(array $args = [])
 * @method \Aws\Result updateFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFindingsAsync(array $args = [])
 * @method \Aws\Result validatePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validatePolicyAsync(array $args = [])
 */
class AccessAnalyzerClient extends AwsClient {}
