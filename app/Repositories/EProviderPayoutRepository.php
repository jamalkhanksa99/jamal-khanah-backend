<?php
/*
 * File name: EProviderPayoutRepository.php

 * Author: DAS360
 * Copyright (c) 2022
 */

namespace App\Repositories;

use App\Models\EProviderPayout;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EProviderPayoutRepository
 * @package App\Repositories
 * @version January 30, 2021, 11:17 am UTC
 *
 * @method EProviderPayout findWithoutFail($id, $columns = ['*'])
 * @method EProviderPayout find($id, $columns = ['*'])
 * @method EProviderPayout first($columns = ['*'])
 */
class EProviderPayoutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'e_provider_id',
        'method',
        'amount',
        'paid_date',
        'note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EProviderPayout::class;
    }
}
