<?php
/**
 * User: phylogram
 * Date: 1/16/18
 * Time: 2:45 PM
 */

$rows =  [
  [
    'collapse'=> false,
    'height'=> 42,
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
        'datasource'=> 'default',  # null
        'format'=> 'none',
        'gauge'=> [
          'maxValue'=> 100,
          'minValue'=> 0,
          'show'=> false,
          'thresholdLabels'=> false,
          'thresholdMarkers'=> true
        ],
        'height'=> '',
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
        'span'=> 12,
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
            'measurement'=> 'action_option',
            'orderByTime'=> 'ASC',
            'policy'=> 'default',
            'refId'=> 'A',
            'resultFormat'=> 'time_series',
            'select'=> [
              [
                [
                  'params'=> [
                    'action'
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
        'title'=> 'All Actions',
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
    'height'=> 486,
    'panels'=> [
      [
        'aliasColors'=> [],
        'cacheTimeout'=> null,
        'combine'=> [
          'label'=> 'Others',
          'threshold'=> 0
        ],
        'datasource'=> 'default',  # null
        'fontSize'=> '80%',
        'format'=> 'short',
        'height'=> '',
        'hideTimeOverride'=> true,
        'id'=> 2,
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
        'span'=> 2,
        'strokeWidth'=> 1,
        'targets'=> [
          [
            'alias'=> '$tag_option',
            'dsType'=> 'influxdb',
            'groupBy'=> [
              [
                'params'=> [
                  'option'
                ],
                'type'=> 'tag'
              ]
            ],
            'measurement'=> 'action_option',
            'orderByTime'=> 'ASC',
            'policy'=> 'default',
            'refId'=> 'A',
            'resultFormat'=> 'time_series',
            'select'=> [
              [
                [
                  'params'=> [
                    'action'
                  ],
                  'type'=> 'field'
                ]
              ]
            ],
            'tags'=> [
              [
                'key'=> 'option',
                'operator'=> '=~',
                'value'=> '/$optin$/'
              ]
            ]
          ]
        ],
        'timeFrom'=> '1h',
        'timeShift'=> '1h',
        'title'=> 'By Opt-In',
        'type'=> 'grafana-piechart-panel',
        'valueName'=> 'current'
      ],
      [
        'aliasColors'=> [],
        'bars'=> false,
        'dashLength'=> 10,
        'dashes'=> false,
        'datasource'=> 'default', # null
        'description'=> '',
        'fill'=> 1,
        'id'=> 3,
        'legend'=> [
          'avg'=> false,
          'current'=> false,
          'max'=> false,
          'min'=> false,
          'show'=> true,
          'total'=> false,
          'values'=> false
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
        'span'=> 10,
        'stack'=> false,
        'steppedLine'=> false,
        'targets'=> [
          [
            'alias'=> '$tag_option',
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
                  'option'
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
            'measurement'=> 'action_option',
            'orderByTime'=> 'ASC',
            'policy'=> 'default',
            'refId'=> 'A',
            'resultFormat'=> 'time_series',
            'select'=> [
              [
                [
                  'params'=> [
                    'action'
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
                'key'=> 'option',
                'operator'=> '=~',
                'value'=> '/$optin$/'
              ]
            ]
          ]
        ],
        'thresholds'=> [],
        'timeFrom'=> null,
        'timeShift'=> null,
        'title'=> 'Development',
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
      'label'=> 'Opt-In',
      'multi'=> true,
      'name'=> 'optin',
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
      'query'=> 'SHOW TAG VALUES FROM action_option WITH KEY = option;',
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