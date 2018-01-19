<?php
/**
 * User=> phylogram
 * Date=> 1/16/18
 * Time=> 3=>12 PM
 */


$rows =  [
    'links'=> [],
    [
      'collapse'=> false,
      'height'=> -4,
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
          'id'=> 1,
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
              'measurement'=> 'contact_donation',
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
              'tags'=> []
            ]
          ],
          'thresholds'=> '',
          'timeFrom'=> '1h',
          'timeShift'=> '1h',
          'title'=> 'Donors',
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
          'id'=> 2,
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
              'measurement'=> 'donation_type',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'donation'
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
          'title'=> 'Donations',
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
      'height'=> 272,
      'panels'=> [
        [
          'aliasColors'=> [],
          'cacheTimeout'=> null,
          'combine'=> [
          'label'=> 'Others',
            'threshold'=> 0
          ],
          'datasource'=> 'default',
          'description'=> 'Donors regular/one-off',
          'fontSize'=> '80%',
          'format'=> 'short',
          'hideTimeOverride'=> true,
          'id'=> 3,
          'interval'=> null,
          'legend'=> [
          'percentage'=> true,
            'show'=> true,
            'values'=> true
          ],
          'legendType'=> 'Under graph',
          'links'=> [],
          'maxDataPoints'=> 3,
          'nullPointMode'=> 'connected',
          'pieType'=> 'pie',
          'span'=> 4,
          'strokeWidth'=> 1,
          'targets'=> [
            [
              'alias'=> '$tag_donation',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  'donation'
                ],
                  'type'=> 'tag'
                ]
              ],
              'hide'=> false,
              'measurement'=> 'contact_donation',
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
                  'key'=> 'donation',
                  'operator'=> '=~',
                  'value'=> '/$contact_donation$/'
                ]
              ]
            ]
          ],
          'timeFrom'=> '1h',
          'timeShift'=> '1h',
          'title'=> 'Donors',
          'type'=> 'grafana-piechart-panel',
          'valueName'=> 'current'
        ],
        [
          'aliasColors'=> [],
          'bars'=> false,
          'dashLength'=> 10,
          'dashes'=> false,
          'datasource'=> 'default',
          'description'=> 'Donors by donation type one-off/regular',
          'fill'=> 0,
          'id'=> 4,
          'legend'=> [
          'alignAsTable'=> true,
            'avg'=> false,
            'current'=> true,
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
          'span'=> 8,
          'stack'=> false,
          'steppedLine'=> false,
          'targets'=> [
            [
              'alias'=> '$tag_donation',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  '1d'
                ],
                  'type'=> 'time'
                ],
                [
                  'params'=> [
                  'donation'
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
              'measurement'=> 'contact_donation',
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
                  'key'=> 'donation',
                  'operator'=> '=~',
                  'value'=> '/$contact_donation$/'
                ]
              ]
            ]
          ],
          'thresholds'=> [],
          'timeFrom'=> null,
          'timeShift'=> null,
          'title'=> 'Donors Development',
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
      'height'=> 294,
      'panels'=> [
        [
          'aliasColors'=> [],
          'cacheTimeout'=> null,
          'combine'=> [
          'label'=> 'Others',
            'threshold'=> 0
          ],
          'datasource'=> 'default',
          'description'=> 'Donations regular/one-off',
          'fontSize'=> '80%',
          'format'=> 'short',
          'hideTimeOverride'=> true,
          'id'=> 5,
          'interval'=> null,
          'legend'=> [
          'percentage'=> true,
            'show'=> true,
            'values'=> true
          ],
          'legendType'=> 'Under graph',
          'links'=> [],
          'maxDataPoints'=> 3,
          'nullPointMode'=> 'connected',
          'pieType'=> 'pie',
          'span'=> 4,
          'strokeWidth'=> 1,
          'targets'=> [
            [
              'alias'=> '$tag_type',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  'type'
                ],
                  'type'=> 'tag'
                ]
              ],
              'hide'=> false,
              'measurement'=> 'donation_type',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'donation'
                  ],
                    'type'=> 'field'
                  ]
                ]
              ],
              'tags'=> [
                [
                  'key'=> 'type',
                  'operator'=> '=~',
                  'value'=> '/$donation_type$/'
                ]
              ]
            ]
          ],
          'timeFrom'=> '1h',
          'timeShift'=> '1h',
          'title'=> 'Donations',
          'type'=> 'grafana-piechart-panel',
          'valueName'=> 'current'
        ],
        [
          'aliasColors'=> [],
          'bars'=> false,
          'dashLength'=> 10,
          'dashes'=> false,
          'datasource'=> 'default',
          'description'=> 'Donations by donation type one-off/regular',
          'fill'=> 0,
          'id'=> 6,
          'legend'=> [
          'alignAsTable'=> true,
            'avg'=> false,
            'current'=> true,
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
          'span'=> 8,
          'stack'=> false,
          'steppedLine'=> false,
          'targets'=> [
            [
              'alias'=> '$tag_type',
              'dsType'=> 'influxdb',
              'groupBy'=> [
                [
                  'params'=> [
                  '1d'
                ],
                  'type'=> 'time'
                ],
                [
                  'params'=> [
                  'type'
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
              'measurement'=> 'donation_type',
              'orderByTime'=> 'ASC',
              'policy'=> 'default',
              'refId'=> 'A',
              'resultFormat'=> 'time_series',
              'select'=> [
              [
                  [
                    'params'=> [
                    'donation'
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
                  'key'=> 'type',
                  'operator'=> '=~',
                  'value'=> '/$donation_type$/'
                ]
              ]
            ]
          ],
          'thresholds'=> [],
          'timeFrom'=> null,
          'timeShift'=> null,
          'title'=> 'Donations Development',
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
      'height'=> 250,
      'panels'=> [],
      'repeat'=> null,
      'repeatIteration'=> null,
      'repeatRowId'=> null,
      'showTitle'=> false,
      'title'=> 'Dashboard Row',
      'titleSize'=> 'h6'
    ]
  ];

$templating =  [
    'list'=> [
      [
        'allValue'=> '',
        'current'=> [
        'text'=> 'All',
          'value'=> [
          '$__all'
        ]
        ],
        'datasource'=> 'default',
        'hide'=> 0,
        'includeAll'=> true,
        'label'=> 'Donation by Contact',
        'multi'=> true,
        'name'=> 'contact_donation',
        'options'=> [
          [
            'selected'=> true,
            'text'=> 'All',
            'value'=> '$__all'
          ],
          [
            'selected'=> false,
            'text'=> 'one-off',
            'value'=> 'one-off'
          ],
          [
            'selected'=> false,
            'text'=> 'regular',
            'value'=> 'regular'
          ]
        ],
        'query'=> 'SHOW TAG VALUES FROM contact_donation WITH KEY = donation;',
        'refresh'=> 0,
        'regex'=> '',
        'sort'=> 0,
        'tagValuesQuery'=> '',
        'tags'=> [],
        'tagsQuery'=> '',
        'type'=> 'query',
        'useTags'=> false
      ],
      [
        'allValue'=> null,
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
        'label'=> 'Donation Type',
        'multi'=> true,
        'name'=> 'donation_type',
        'options'=> [
          [
            'selected'=> true,
            'text'=> 'All',
            'value'=> '$__all'
          ],
          [
            'selected'=> false,
            'text'=> 'one-off',
            'value'=> 'one-off'
          ],
          [
            'selected'=> false,
            'text'=> 'regular',
            'value'=> 'regular'
          ]
        ],
        'query'=> 'SHOW TAG VALUES FROM donation_type WITH KEY = type;',
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
  