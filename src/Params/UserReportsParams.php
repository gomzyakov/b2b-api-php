<?php

declare(strict_types = 1);

namespace Avtocod\B2BApi\Params;

final class UserReportsParams extends AbstractListParams
{
    /**
     * True, if necessary detailed information in response.
     *
     * @var bool
     */
    private $detailed = false;

    /**
     * @param bool $detailed
     *
     * @return $this
     */
    public function setDetailed(bool $detailed): UserReportsParams
    {
        $this->detailed = $detailed;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDetailed(): bool
    {
        return $this->detailed;
    }
}