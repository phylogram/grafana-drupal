<?php
/**
 * User=> phylogram
 * Date=> 1/16/18
 * Time=> 3=>17 PM
 */


$rows = [
    [
      'collapse'=> false,
      'height'=> 212,
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
          'description'=> 'Supporters that submitted the form',
          'format'=> 'none',
          'gauge'=> [
          'maxValue'=> 100,
            'minValue'=> 0,
            'show'=> false,
            'thresholdLabels'=> false,
            'thresholdMarkers'=> true
          ],
          'height'=> '5em',
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
          'repeat'=> 'form_table',
          'scopedVars'=> [
          'form_table'=> [
            'selected'=> true,
              'text'=> 'form_B',
              'value'=> 'form_B'
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
              'measurement'=> '/$form_table$/',
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
          'title'=> 'Supporters',
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
          'aliasColors'=> [],
          'bars'=> false,
          'dashLength'=> 10,
          'dashes'=> false,
          'datasource'=> 'default',
          'fill'=> 0,
          'height'=> '400px',
          'id'=> 2,
          'legend'=> [
          'alignAsTable'=> true,
            'avg'=> true,
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
          'repeat'=> 'form_table',
          'scopedVars'=> [
          'form_table'=> [
            'selected'=> true,
              'text'=> 'form_B',
              'value'=> 'form_B'
            ]
          ],
          'seriesOverrides'=> [],
          'spaceLength'=> 10,
          'span'=> 12,
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
              'measurement'=> '/$form_table$/',
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
                  'key'=> 'type',
                  'operator'=> '=~',
                  'value'=> '/$supporter_type$/'
                ]
              ]
            ]
          ],
          'thresholds'=> [],
          'timeFrom'=> null,
          'timeShift'=> null,
          'title'=> 'Supporters $form_table',
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
          'text'=> 'form_B',
          'value'=> 'form_B'
        ],
        'datasource'=> 'default',
        'hide'=> 0,
        'includeAll'=> false,
        'label'=> 'Form',
        'multi'=> false,
        'name'=> 'form_table',
        'options'=> [
          [
            'selected'=> false,
            'text'=> 'form_A',
            'value'=> 'form_A'
          ],
          [
            'selected'=> true,
            'text'=> 'form_B',
            'value'=> 'form_B'
          ]
        ],
        'query'=> 'SHOW MEASUREMENTS WITH MEASUREMENT =~ /form_/;',
        'refresh'=> 0,
        'regex'=> '',
        'sort'=> 1,
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
        'label'=> 'Supporters',
        'multi'=> true,
        'name'=> 'supporter_type',
        'options'=> [
          [
            'selected'=> true,
            'text'=> 'All',
            'value'=> '$__all'
          ],
          [
            'selected'=> false,
            'text'=> 'existing',
            'value'=> 'existing'
          ],
          [
            'selected'=> false,
            'text'=> 'new',
            'value'=> 'new'
          ],
          [
            'selected'=> false,
            'text'=> 'reactive',
            'value'=> 'reactive'
          ]
        ],
        'query'=> 'SHOW TAG VALUES FROM /form/  WITH KEY = \"type\";',
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