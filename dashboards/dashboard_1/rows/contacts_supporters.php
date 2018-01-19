<?php
/**
 * User=> phylogram
 * Date=> 1/16/18
 * Time=> 3=>00 PM
 */
$rows = [
    [
      'collapse'=> false,
      'height'=> 35,
      'panels'=> [
        [
          'cacheTimeout'=> null,
          'colorBackground'=> false,
          'colorValue'=> false,
          'colors'=> [
          '#299c46',
          'rgba(237, 129, 40, 0.89)',
          '#d44a3a'
        ],
          'datasource'=> 'default',
          'format'=> 'none',
          'gauge'=> [
          'maxValue'=> 100,
            'minValue'=> 0,
            'show'=> false,
            'thresholdLabels'=> false,
            'thresholdMarkers'=> true
          ],
          'hideTimeOverride'=> true,
          'id'=> 3,
          'interval'=> null,
          'links'=> [],
          'mappingType'=> 1,
          'mappingTypes'=> [
            [
              'name'=> 'value to text',
              'value'=> 1
            ],
            [
              'name'=> 'range to text',
              'value'=> 2
            ]
          ],
          'maxDataPoints'=> 100,
          'nullPointMode'=> 'connected',
          'nullText'=> null,
          'postfix'=> '',
          'postfixFontSize'=> '50%',
          'prefix'=> '',
          'prefixFontSize'=> '50%',
          'rangeMaps'=> [
            [
              'from'=> 'null',
              'text'=> 'N/A',
              'to'=> 'null'
            ]
          ],
          'span'=> 6,
          'sparkline'=> [
          'fillColor'=> 'rgba(31, 118, 189, 0.18)',
            'full'=> false,
            'lineColor'=> 'rgb(31, 120, 193)',
            'show'=> false
          ],
          'tableColumn'=> '',
          'targets'=> [
            [
              'dsType'=> 'influxdb',
              'groupBy'=> [],
              'measurement'=> 'contact_subscription',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'contacts'
                  ],
                    'type'=> 'field'
                  ],
                  [
                    'params'=> [],
                    'type'=> 'sum'
                  ]
                ]
              ],
              'tags'=> []
            ]
          ],
          'thresholds'=> '',
          'timeFrom'=> '1h',
          'timeShift'=> '1h',
          'title'=> 'All Current Contacts',
          'type'=> 'singlestat',
          'valueFontSize'=> '80%',
          'valueMaps'=> [
            [
              'op'=> '=',
              'text'=> 'N/A',
              'value'=> 'null'
            ]
          ],
          'valueName'=> 'avg'
        ],
        [
          'cacheTimeout'=> null,
          'colorBackground'=> false,
          'colorValue'=> false,
          'colors'=> [
          '#299c46',
          'rgba(237, 129, 40, 0.89)',
          '#d44a3a'
        ],
          'datasource'=> 'default',
          'format'=> 'none',
          'gauge'=> [
          'maxValue'=> 100,
            'minValue'=> 0,
            'show'=> false,
            'thresholdLabels'=> false,
            'thresholdMarkers'=> true
          ],
          'hideTimeOverride'=> true,
          'id'=> 5,
          'interval'=> null,
          'links'=> [],
          'mappingType'=> 1,
          'mappingTypes'=> [
            [
              'name'=> 'value to text',
              'value'=> 1
            ],
            [
              'name'=> 'range to text',
              'value'=> 2
            ]
          ],
          'maxDataPoints'=> 100,
          'nullPointMode'=> 'connected',
          'nullText'=> null,
          'postfix'=> '',
          'postfixFontSize'=> '50%',
          'prefix'=> '',
          'prefixFontSize'=> '50%',
          'rangeMaps'=> [
            [
              'from'=> 'null',
              'text'=> 'N/A',
              'to'=> 'null'
            ]
          ],
          'span'=> 6,
          'sparkline'=> [
          'fillColor'=> 'rgba(31, 118, 189, 0.18)',
            'full'=> false,
            'lineColor'=> 'rgb(31, 120, 193)',
            'show'=> false
          ],
          'tableColumn'=> '',
          'targets'=> [
            [
              'dsType'=> 'influxdb',
              'groupBy'=> [],
              'measurement'=> 'supporters',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'supporters'
                  ],
                    'type'=> 'field'
                  ]
                ]
              ],
              'tags'=> []
            ]
          ],
          'thresholds'=> '',
          'timeFrom'=> '1h',
          'timeShift'=> '1h',
          'title'=> 'All Current Supporters',
          'type'=> 'singlestat',
          'valueFontSize'=> '80%',
          'valueMaps'=> [
            [
              'op'=> '=',
              'text'=> 'N/A',
              'value'=> 'null'
            ]
          ],
          'valueName'=> 'avg'
        ]
      ],
      'repeat'=> null,
      'repeatIteration'=> null,
      'repeatRowId'=> null,
      'showTitle'=> false,
      'title'=> 'Dashboard Row',
      'titleSize'=> 'h6'
    ],
    [
      'collapse'=> false,
      'height'=> 358,
      'panels'=> [
        [
          'aliasColors'=> [],
          'cacheTimeout'=> null,
          'combine'=> [
          'label'=> 'Others',
            'threshold'=> 0
          ],
          'datasource'=> "default",   # null
          'description'=> 'Number of current contacts grouped by subscription status',
          'fontSize'=> '80%',
          'format'=> 'short',
          'hideTimeOverride'=> true,
          'id'=> 1,
          'interval'=> null,
          'legend'=> [
          'percentage'=> true,
            'show'=> true,
            'sort'=> null,
            'sortDesc'=> null,
            'values'=> true
          ],
          'legendType'=> 'Under graph',
          'links'=> [],
          'maxDataPoints'=> 3,
          'nullPointMode'=> 'connected',
          'pieType'=> 'pie',
          'repeat'=> null,
          'span'=> 3,
          'strokeWidth'=> 1,
          'targets'=> [
            [
              'alias'=> 'Subscribed=> $tag_subscription_status',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  'subscription_status'
                ],
                  'type'=> 'tag'
                ]
              ],
              'hide'=> false,
              'measurement'=> 'contact_subscription',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'contacts'
                  ],
                    'type'=> 'field'
                  ]
                ]
              ],
              'tags'=> [
                [
                  'key'=> 'subscription_status',
                  'operator'=> '=~',
                  'value'=> '/$contact_subscription$/'
                ]
              ]
            ]
          ],
          'timeFrom'=> '1h',
          'timeShift'=> '1h',
          'title'=> 'Current Contacts',
          'type'=> 'grafana-piechart-panel',
          'valueName'=> 'current'
        ],
        [
          'aliasColors'=> [],
          'bars'=> false,
          'dashLength'=> 10,
          'dashes'=> false,
          'datasource'=> 'default',  # null
          'fill'=> 0,
          'id'=> 6,
          'legend'=> [
          'alignAsTable'=> false,
            'avg'=> false,
            'current'=> false,
            'max'=> true,
            'min'=> false,
            'show'=> true,
            'total'=> false,
            'values'=> true
          ],
          'lines'=> true,
          'linewidth'=> 1,
          'links'=> [],
          'nullPointMode'=> 'connected',
          'percentage'=> false,
          'pointradius'=> 5,
          'points'=> false,
          'renderer'=> 'flot',
          'seriesOverrides'=> [],
          'spaceLength'=> 10,
          'span'=> 9,
          'stack'=> false,
          'steppedLine'=> false,
          'targets'=> [
            [
              'alias'=> 'Subscription=> $tag_subscription_status',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  '6h'
                ],
                  'type'=> 'time'
                ],
                [
                  'params'=> [
                  'subscription_status'
                ],
                  'type'=> 'tag'
                ],
                [
                  'params'=> [
                  'null'
                ],
                  'type'=> 'fill'
                ]
              ],
              'hide'=> false,
              'measurement'=> 'contact_subscription',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'contacts'
                  ],
                    'type'=> 'field'
                  ],
                  [
                    'params'=> [],
                    'type'=> 'mean'
                  ]
                ]
              ],
              'tags'=> [
                [
                  'key'=> 'subscription_status',
                  'operator'=> '=~',
                  'value'=> '/$contact_subscription$/'
                ]
              ]
            ]
          ],
          'thresholds'=> [],
          'timeFrom'=> null,
          'timeShift'=> null,
          'title'=> 'Contacts',
          'tooltip'=> [
          'shared'=> true,
            'sort'=> 0,
            'value_type'=> 'individual'
          ],
          'type'=> 'graph',
          'xaxis'=> [
          'buckets'=> null,
            'mode'=> 'time',
            'name'=> null,
            'show'=> true,
            'values'=> []
          ],
          'yaxes'=> [
            [
              'format'=> 'short',
              'label'=> null,
              'logBase'=> 1,
              'max'=> null,
              'min'=> null,
              'show'=> true
            ],
            [
              'format'=> 'short',
              'label'=> null,
              'logBase'=> 1,
              'max'=> null,
              'min'=> null,
              'show'=> true
            ]
          ]
        ]
      ],
      'repeat'=> null,
      'repeatIteration'=> null,
      'repeatRowId'=> null,
      'showTitle'=> false,
      'title'=> 'Dashboard Row',
      'titleSize'=> 'h6'
    ],
    [
      'collapse'=> false,
      'height'=> 365,
      'panels'=> [
        [
          'aliasColors'=> [],
          'cacheTimeout'=> null,
          'combine'=> [
          'label'=> 'Others',
            'threshold'=> '0.3'
          ],
          'datasource'=> 'default',
          'description'=> 'Number of current supporters grouped by  engagement status',
          'fontSize'=> '80%',
          'format'=> 'short',
          'hideTimeOverride'=> true,
          'id'=> 4,
          'interval'=> null,
          'legend'=> [
          'percentage'=> true,
            'percentageDecimals'=> null,
            'show'=> true,
            'sort'=> null,
            'sortDesc'=> null,
            'values'=> true
          ],
          'legendType'=> 'Under graph',
          'links'=> [],
          'maxDataPoints'=> 3,
          'nullPointMode'=> 'connected',
          'pieType'=> 'pie',
          'span'=> 3,
          'strokeWidth'=> 1,
          'targets'=> [
            [
              'alias'=> 'Supporters=> $tag_engagement',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  'engagement'
                ],
                  'type'=> 'tag'
                ]
              ],
              'hide'=> false,
              'measurement'=> 'supporters',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'supporters'
                  ],
                    'type'=> 'field'
                  ]
                ]
              ],
              'tags'=> [
                [
                  'key'=> 'engagement',
                  'operator'=> '=~',
                  'value'=> '/$supporters$/'
                ]
              ]
            ]
          ],
          'timeFrom'=> '1h',
          'timeShift'=> '1h',
          'title'=> 'Current Supporters',
          'type'=> 'grafana-piechart-panel',
          'valueName'=> 'current'
        ],
        [
          'aliasColors'=> [],
          'bars'=> false,
          'dashLength'=> 10,
          'dashes'=> false,
          'datasource'=> 'default',
          'fill'=> 0,
          'id'=> 7,
          'legend'=> [
          'alignAsTable'=> false,
            'avg'=> false,
            'current'=> false,
            'max'=> true,
            'min'=> false,
            'show'=> true,
            'total'=> false,
            'values'=> true
          ],
          'lines'=> true,
          'linewidth'=> 1,
          'links'=> [],
          'nullPointMode'=> 'null',
          'percentage'=> false,
          'pointradius'=> 5,
          'points'=> false,
          'renderer'=> 'flot',
          'seriesOverrides'=> [],
          'spaceLength'=> 10,
          'span'=> 9,
          'stack'=> false,
          'steppedLine'=> false,
          'targets'=> [
            [
              'alias'=> 'Engagement=> $tag_engagement',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  '4h'
                ],
                  'type'=> 'time'
                ],
                [
                  'params'=> [
                  'engagement'
                ],
                  'type'=> 'tag'
                ],
                [
                  'params'=> [
                  'null'
                ],
                  'type'=> 'fill'
                ]
              ],
              'hide'=> false,
              'measurement'=> 'supporters',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'supporters'
                  ],
                    'type'=> 'field'
                  ],
                  [
                    'params'=> [],
                    'type'=> 'mean'
                  ]
                ]
              ],
              'tags'=> [
                [
                  'key'=> 'engagement',
                  'operator'=> '=~',
                  'value'=> '/$supporters$/'
                ]
              ]
            ]
          ],
          'thresholds'=> [],
          'timeFrom'=> null,
          'timeShift'=> null,
          'title'=> 'Supporters',
          'tooltip'=> [
          'shared'=> true,
            'sort'=> 0,
            'value_type'=> 'individual'
          ],
          'type'=> 'graph',
          'xaxis'=> [
          'buckets'=> null,
            'mode'=> 'time',
            'name'=> null,
            'show'=> true,
            'values'=> []
          ],
          'yaxes'=> [
            [
              'format'=> 'short',
              'label'=> null,
              'logBase'=> 1,
              'max'=> null,
              'min'=> null,
              'show'=> true
            ],
            [
              'format'=> 'short',
              'label'=> null,
              'logBase'=> 1,
              'max'=> null,
              'min'=> null,
              'show'=> true
            ]
          ]
        ]
      ],
      'repeat'=> null,
      'repeatIteration'=> null,
      'repeatRowId'=> null,
      'showTitle'=> false,
      'title'=> 'Dashboard Row',
      'titleSize'=> 'h6'
    ]
  ];


$templating = [
  'list'=> [
      [
        'allValue'=> '',
        'current'=> [
        'tags'=> [],
          'text'=> 'All',
          'value'=> [
          '$__all'
        ]
        ],
        'datasource'=> 'default',
        'hide'=> 0,
        'includeAll'=> true,
        'label'=> 'Supporters',
        'multi'=> true,
        'name'=> 'supporters',
        'options'=> [
          [
            'selected'=> true,
            'text'=> 'All',
            'value'=> '$__all'
          ],
          [
            'selected'=> false,
            'text'=> 'active',
            'value'=> 'active'
          ],
          [
            'selected'=> false,
            'text'=> 'inactive',
            'value'=> 'inactive'
          ],
          [
            'selected'=> false,
            'text'=> 'new',
            'value'=> 'new'
          ],
          [
            'selected'=> false,
            'text'=> 'very active',
            'value'=> 'very active'
          ]
        ],
        'query'=> 'SHOW TAG VALUES FROM supporters WITH KEY = \"engagement\";',
        'refresh'=> 0,
        'regex'=> '',
        'sort'=> 0,
        'tagValuesQuery'=> '',
        'tags'=> [],
        'tagsQuery'=> 'SHOW TAG VALUES FROM supporters WITH KEY = \"engagement\";',
        'type'=> 'query',
        'useTags'=> false
      ],
      [
        'allValue'=> '',
        'current'=> [
        'tags'=> [],
          'text'=> 'All',
          'value'=> [
          '$__all'
        ]
        ],
        'datasource'=> 'default',
        'hide'=> 0,
        'includeAll'=> true,
        'label'=> 'Subscription Type',
        'multi'=> true,
        'name'=> 'contact_subscription',
        'options'=> [
          [
            'selected'=> true,
            'text'=> 'All',
            'value'=> '$__all'
          ],
          [
            'selected'=> false,
            'text'=> 'no',
            'value'=> 'no'
          ],
          [
            'selected'=> false,
            'text'=> 'yes',
            'value'=> 'yes'
          ]
        ],
        'query'=> 'SHOW TAG VALUES FROM contact_subscription WITH KEY = \"subscription_status\";',
        'refresh'=> 0,
        'regex'=> '',
        'sort'=> 0,
        'tagValuesQuery'=> '',
        'tags'=> [],
        'tagsQuery'=> '',
        'type'=> 'query',
        'useTags'=> false
      ]
    ]
];

