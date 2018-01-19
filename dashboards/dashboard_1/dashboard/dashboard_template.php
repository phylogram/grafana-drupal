
<?php
/**
 * User: phylogram
 * Date: 1/16/18
 * Time: 2:36 PM
 */

$dashboard_template = [
  'annotations'=> [
    'list'=> [
      [
        'builtIn'=> 1,
        'datasource'=> '-- Grafana --',
        'enable'=> true,
        'hide'=> true,
        'iconColor'=> 'rgba(0, 211, 255, 1)',
        'name'=> 'Annotations & Alerts',
        'type'=> 'dashboard'
      ]
    ]
  ],
  'editable'=> true,
  'gnetId'=> null,
  'graphTooltip'=> 0,
  'hideControls'=> false,
  'id'=> null,
  'links'=> [],
  'rows'=> null,
  'schemaVersion'=> 14,
  'style'=> 'light',
  'tags'=> [],
  'templating'=> null,
  'time'=> [
    'from'=> 'now-1y',
    'to'=> 'now'
  ],
  'timepicker'=> [
    'refresh_intervals'=> [
      '5s',
      '10s',
      '30s',
      '1m',
      '5m',
      '15m',
      '30m',
      '1h',
      '2h',
      '1d'
    ],
    'time_options'=> [
      '5m',
      '15m',
      '1h',
      '6h',
      '12h',
      '24h',
      '2d',
      '7d',
      '30d'
    ]
  ],
  'timezone'=> '',
  'title'=> null,
  'version'=> 3
];