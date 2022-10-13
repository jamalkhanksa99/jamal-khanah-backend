<?php
/*
 * File name: EarningOfEProviderCriteria.php

 * Author: DAS360
 * Copyright (c) 2022
 */

namespace App\Criteria\Earnings;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class EarningOfEProviderCriteriaCriteria.
 *
 * @package namespace App\Criteria\Earnings;
 */
class EarningOfEProviderCriteria implements CriteriaInterface
{
    private $eproviderId;

    /**
     * EarningOfEProviderCriteriaCriteria constructor.
     */
    public function __construct($eproviderId)
    {
        $this->eproviderId = $eproviderId;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where("e_provider_id", $this->eproviderId);
    }
}
