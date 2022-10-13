<?php
/*
 * File name: EarningRepository.php

 * Author: DAS360
 * Copyright (c) 2022
 */

namespace App\Repositories;

use App\Models\Earning;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EarningRepository
 * @package App\Repositories
 * @version January 30, 2021, 1:53 pm UTC
 *
 * @method Earning findWithoutFail($id, $columns = ['*'])
 * @method Earning find($id, $columns = ['*'])
 * @method Earning first($columns = ['*'])
 */
class EarningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'e_provider_id',
        'total_bookings',
        'total_earning',
        'admin_earning',
        'e_provider_earning',
        'taxes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Earning::class;
    }
}
