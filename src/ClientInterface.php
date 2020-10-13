<?php

namespace Avtocod\B2BApi;

use Avtocod\B2BApi\Params\BalanceParams;
use Avtocod\B2BApi\Params\DevPingParams;
use Avtocod\B2BApi\Params\DevTokenParams;
use Avtocod\B2BApi\Params\ReportParams;
use Avtocod\B2BApi\Params\ReportsParams;
use Avtocod\B2BApi\Params\ReportTypesParams;
use Avtocod\B2BApi\Params\UserParams;
use DateTime;
use Avtocod\B2BApi\Responses\UserResponse;
use Avtocod\B2BApi\Params\ReportMakeParams;
use Avtocod\B2BApi\Responses\DevPingResponse;
use Avtocod\B2BApi\Params\ReportRefreshParams;
use Avtocod\B2BApi\Responses\DevTokenResponse;
use Avtocod\B2BApi\Responses\UserReportResponse;
use Avtocod\B2BApi\Responses\UserBalanceResponse;
use Avtocod\B2BApi\Responses\UserReportsResponse;
use Avtocod\B2BApi\Exceptions\BadRequestException;
use Avtocod\B2BApi\Exceptions\BadResponseException;
use Avtocod\B2BApi\Responses\UserReportMakeResponse;
use Avtocod\B2BApi\Responses\UserReportTypesResponse;
use Avtocod\B2BApi\Responses\UserReportRefreshResponse;

interface ClientInterface
{
    /**
     * Test connection.
     *
     * @param DevPingParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return DevPingResponse
     */
    public function devPing(DevPingParams $params): DevPingResponse;

    /**
     * Debug token generation.
     *
     * @param DevTokenParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return DevTokenResponse
     */
    public function devToken(DevTokenParams $params): DevTokenResponse;

    /**
     * Retrieve information about current user.
     *
     * @param UserParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return UserResponse
     */
    public function user(UserParams $params): UserResponse;

    /**
     * Retrieve balance information for report type.
     *
     * @param BalanceParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return UserBalanceResponse
     */
    public function userBalance(BalanceParams $params): UserBalanceResponse;

    /**
     * Retrieve report types data.
     *
     * @param ReportTypesParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return UserReportTypesResponse
     */
    public function userReportTypes(ReportTypesParams $params): UserReportTypesResponse;

    /**
     * Get reports list.
     *
     * @param ReportsParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return UserReportsResponse
     */
    public function userReports(ReportsParams $params): UserReportsResponse;

    /**
     * Get report by unique report ID.
     *
     * @param ReportParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return UserReportResponse
     */
    public function userReport(ReportParams $params): UserReportResponse;

    /**
     * Make report.
     *
     * @param ReportMakeParams $params Object with data to make report
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return UserReportMakeResponse
     */
    public function userReportMake(ReportMakeParams $params): UserReportMakeResponse;

    /**
     * Refresh existing report.
     *
     * @param ReportRefreshParams $params
     *
     * @throws BadRequestException
     * @throws BadResponseException
     *
     * @return UserReportRefreshResponse
     */
    public function userReportRefresh(ReportRefreshParams $params): UserReportRefreshResponse;
}
