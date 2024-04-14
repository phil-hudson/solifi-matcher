<?php

use App\Models\SolifiVehicle;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Search Engine
    |--------------------------------------------------------------------------
    |
    | This option controls the default search connection that gets used while
    | using Laravel Scout. This connection is used when syncing all models
    | to the search service. You should adjust this based on your needs.
    |
    | Supported: "algolia", "meilisearch", "typesense",
    |            "database", "collection", "null"
    |
    */

    'driver' => env('SCOUT_DRIVER', 'typesense'),

    /*
    |--------------------------------------------------------------------------
    | Index Prefix
    |--------------------------------------------------------------------------
    |
    | Here you may specify a prefix that will be applied to all search index
    | names used by Scout. This prefix may be useful if you have multiple
    | "tenants" or applications sharing the same search infrastructure.
    |
    */

    'prefix' => env('SCOUT_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | Queue Data Syncing
    |--------------------------------------------------------------------------
    |
    | This option allows you to control if the operations that sync your data
    | with your search engines are queued. When this is set to "true" then
    | all automatic data syncing will get queued for better performance.
    |
    */

    'queue' => [
        'connection' => env('QUEUE_CONNECTION', 'redis'),
        'queue' => 'scout',
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Transactions
    |--------------------------------------------------------------------------
    |
    | This configuration option determines if your data will only be synced
    | with your search indexes after every open database transaction has
    | been committed, thus preventing any discarded data from syncing.
    |
    */

    'after_commit' => false,

    /*
    |--------------------------------------------------------------------------
    | Chunk Sizes
    |--------------------------------------------------------------------------
    |
    | These options allow you to control the maximum chunk size when you are
    | mass importing data into the search engine. This allows you to fine
    | tune each of these chunk sizes based on the power of the servers.
    |
    */

    'chunk' => [
        'searchable' => 500,
        'unsearchable' => 500,
    ],

    /*
    |--------------------------------------------------------------------------
    | Soft Deletes
    |--------------------------------------------------------------------------
    |
    | This option allows to control whether to keep soft deleted records in
    | the search indexes. Maintaining soft deleted records can be useful
    | if your application still needs to search for the records later.
    |
    */

    'soft_delete' => false,

    /*
    |--------------------------------------------------------------------------
    | Identify User
    |--------------------------------------------------------------------------
    |
    | This option allows you to control whether to notify the search engine
    | of the user performing the search. This is sometimes useful if the
    | engine supports any analytics based on this application's users.
    |
    | Supported engines: "algolia"
    |
    */

    'identify' => env('SCOUT_IDENTIFY', false),

    /*
    |--------------------------------------------------------------------------
    | Algolia Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Algolia settings. Algolia is a cloud hosted
    | search engine which works great with Scout out of the box. Just plug
    | in your application ID and admin API key to get started searching.
    |
    */

    'algolia' => [
        'id' => env('ALGOLIA_APP_ID', ''),
        'secret' => env('ALGOLIA_SECRET', ''),
    ],

    /*
    |--------------------------------------------------------------------------
    | Meilisearch Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Meilisearch settings. Meilisearch is an open
    | source search engine with minimal configuration. Below, you can state
    | the host and key information for your own Meilisearch installation.
    |
    | See: https://www.meilisearch.com/docs/learn/configuration/instance_options#all-instance-options
    |
    */

    'meilisearch' => [
        'host' => env('MEILISEARCH_HOST', 'http://localhost:7700'),
        'key' => env('MEILISEARCH_KEY'),
        'index-settings' => [
            // 'users' => [
            //     'filterableAttributes'=> ['id', 'name', 'email'],
            // ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Typesense Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Typesense settings. Typesense is an open
    | source search engine using minimal configuration. Below, you will
    | state the host, key, and schema configuration for the instance.
    |
    */

    'typesense' => [
        'client-settings' => [
            'api_key' => env('TYPESENSE_API_KEY', 'xyz'),
            'nodes' => [
                [
                    'host' => env('TYPESENSE_HOST', 'localhost'),
                    'port' => env('TYPESENSE_PORT', '8108'),
                    'path' => env('TYPESENSE_PATH', ''),
                    'protocol' => env('TYPESENSE_PROTOCOL', 'http'),
                ],
            ],
            'nearest_node' => [
                'host' => env('TYPESENSE_HOST', 'localhost'),
                'port' => env('TYPESENSE_PORT', '8108'),
                'path' => env('TYPESENSE_PATH', ''),
                'protocol' => env('TYPESENSE_PROTOCOL', 'http'),
            ],
            'connection_timeout_seconds' => env('TYPESENSE_CONNECTION_TIMEOUT_SECONDS', 2),
            'healthcheck_interval_seconds' => env('TYPESENSE_HEALTHCHECK_INTERVAL_SECONDS', 30),
            'num_retries' => env('TYPESENSE_NUM_RETRIES', 3),
            'retry_interval_seconds' => env('TYPESENSE_RETRY_INTERVAL_SECONDS', 1),
        ],
        'model-settings' => [
            SolifiVehicle::class => [
                'collection-schema' => [
                    'name' => 'solifi_vehicles_index',
                    'fields' => [
                        [
                            'name' => 'make',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                            'sortable' => true,
                        ],
                        [
                            'name' => 'model_range',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                            'sortable' => true,
                        ],
                        [
                            'name' => 'description',
                            'type' => 'string',
                            'index' => true,
                        ],
                        [
                            'name' => 'model_year',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                            'sortable' => true,
                        ],
                        [
                            'name' => 'body_style',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'fuel_type',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'ids_code',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'model_year_decimal',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'long_description',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'model_group',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'model_tree_description',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'vehicle_tree_description',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'special_edition',
                            'type' => 'bool',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'current_vehicle',
                            'type' => 'bool',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'commercial',
                            'type' => 'bool',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'reclaim_vat',
                            'type' => 'bool',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'basic_price',
                            'type' => 'float',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'mrp',
                            'type' => 'float',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'date_of_introduction',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'door',
                            'type' => 'int32',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'trim',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'transmission_type',
                            'type' => 'string',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'bhp',
                            'type' => 'int32',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'power_ps',
                            'type' => 'int32',
                            'facet' => true,
                            'index' => true,
                        ],
                        [
                            'name' => 'power_kw',
                            'type' => 'int32',
                            'facet' => true,
                            'index' => true,
                        ],
                    ],
                    'search-parameters' => [
                        'query_by' => [
                            'make',
                            'model_range',
                            'description',
                            'model_year',
                            'body_style',
                            'fuel_type',
                            'ids_code',
                            'model_year_decimal',
                            'long_description',
                            'model_group',
                            'model_tree_description',
                            'vehicle_tree_description',
                            'special_edition',
                            'current_vehicle',
                            'commercial',
                            'reclaim_vat',
                            'basic_price',
                            'mrp',
                            'date_of_introduction',
                            'trim',
                        ],
                        'filter_by' => [
                            'make',
                            'model_year',
                            'body_style',
                            'fuel_type',
                            'ids_code',
                            'model_year_decimal',
                            'long_description',
                            'model_group',
                            'model_tree_description',
                            'vehicle_tree_description',
                            'special_edition',
                            'current_vehicle',
                            'commercial',
                            'reclaim_vat',
                            'basic_price',
                            'mrp',
                            'date_of_introduction',
                            'trim',
                        ],
                        // 'sort_by' => 'id',
                    ],

                ],
            ],

        ],
    ],
];
