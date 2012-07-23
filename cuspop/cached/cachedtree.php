<?php
$tosend=array (
  0 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x04a1f',
        'u0' => '0x060cf',
        'p3' => '0x04e9f',
        'u3' => '0x055df',
        'p4' => '0x0495b',
        'u4' => '0x05a8b',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => 'c7 06 .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f0',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => 'c7 06 .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f1',
      'wop' => 'multiply(12);floor;tointeger;',
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => 'c7 06 .. ..',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f2',
      'wop' => NULL,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x00703',
        'u0' => '0x01db3',
        'p3' => '0x007d7',
        'u3' => '0x00f17',
        'p4' => '0x0079b',
        'u4' => '0x018cb',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => 'c7 06 .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f3',
      'wop' => NULL,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x013ec',
        'u0' => '0x02a9c',
        'p3' => '0x015a7',
        'u3' => '0x01ce7',
        'p4' => '0x0149e',
        'u4' => '0x025ce',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => 'a1 .. .. 40 3d',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f4',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '7e 03 b8',
    ),
    4 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f4',
      'wop' => NULL,
      'type' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => 'a3',
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x007c4',
        'u0' => '0x01e74',
        'p3' => '0x008b0',
        'u3' => '0x00ff0',
        'p4' => '0x00874',
        'u4' => '0x019a4',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'unsigned char',
      'reference' => 'f5',
      'wop' => 'subtract(1);',
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '7e .. 83 3e .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'unsigned char',
      'reference' => 'f6',
      'wop' => 'add(1);',
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => '7d ..',
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x4c9b',
        'u0' => '0x634b',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'array',
      'reference' => 'f7',
      'wop' => 'if(1,a3 92 4e a3 5c 40 a3 8e 4e a2 2a 3d a2 29 3d a3 ee 42 a2 2e 3d 98,89 26 92 4e a3 5c 40 a3 8e 4e a2 2a 3d a2 29 3d a3 ee 42 a2 2e 3d);',
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ace8',
        'u0' => '0x1c840',
        'p3' => '0x1b9ac',
        'u3' => '0x1c5c4',
        'p4' => '0x17d4a',
        'u4' => '0x18f3a',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '74 00',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f8',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f9',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f10',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f11',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f12',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f13',
      'wop' => NULL,
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f14',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f15',
      'wop' => NULL,
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f16',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f17',
      'wop' => NULL,
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f18',
      'wop' => NULL,
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f19',
      'wop' => NULL,
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f20',
      'wop' => NULL,
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f21',
      'wop' => NULL,
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f22',
      'wop' => NULL,
    ),
    17 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f23',
      'wop' => NULL,
    ),
  ),
  6 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x0a7b3',
        'u0' => '0x0be63',
        'p3' => '0x0ac5f',
        'u3' => '0x0b39f',
        'p4' => '0x0a71b',
        'u4' => '0x0b84b',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '8b 1e .. .. 38 a7 .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'unsigned char',
      'reference' => 'f24',
      'wop' => 'if(1,116,235);',
    ),
    3 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x0c513',
        'u0' => '0x0dbc3',
        'p3' => '0x0ca07',
        'u3' => '0x0d147',
        'p4' => '0x0c4c3',
        'u4' => '0x0d5f3',
      ),
    ),
    4 => 
    array (
      'action' => 'check',
      'codes' => '8b 1e .. .. 80 bf .. .. 01',
    ),
    5 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f24',
      'wop' => 'if(1,27,184);',
      'type' => NULL,
    ),
    6 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f24',
      'wop' => 'if(1,192,1);',
      'type' => NULL,
    ),
    7 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f24',
      'wop' => 'if(1,247,0);',
      'type' => NULL,
    ),
    8 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f24',
      'wop' => 'if(1,216,144);',
      'type' => NULL,
    ),
    9 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x0ac92',
        'u0' => '0x0c342',
        'p3' => '0x0b13e',
        'u3' => '0x0b87e',
        'p4' => '0x0abfa',
        'u4' => '0x0bd2a',
      ),
    ),
    10 => 
    array (
      'action' => 'check',
      'codes' => '8b 1e .. .. 80 bf .. .. 00',
    ),
    11 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f24',
      'wop' => 'if(1,116,235);',
      'type' => NULL,
    ),
  ),
  7 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b8a8',
        'u0' => '0x1d46a',
        'p3' => '0x1c6c5',
        'u3' => '0x1d35c',
        'p4' => '0x18a97',
        'u4' => '0x19d06',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f25',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f26',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f27',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f28',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f29',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f30',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f31',
      'wop' => NULL,
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f32',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f33',
      'wop' => NULL,
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f34',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f35',
      'wop' => NULL,
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f36',
      'wop' => NULL,
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f37',
      'wop' => NULL,
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f38',
      'wop' => NULL,
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f39',
      'wop' => NULL,
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f40',
      'wop' => NULL,
    ),
  ),
  8 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'u0' => '0x1c964',
        'u3' => '0x1c702',
        'u4' => '0x1905e',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f41',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f42',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f43',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f44',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f45',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f46',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f47',
      'wop' => NULL,
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f48',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f49',
      'wop' => NULL,
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f50',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f51',
      'wop' => NULL,
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f52',
      'wop' => NULL,
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f53',
      'wop' => NULL,
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f54',
      'wop' => NULL,
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f55',
      'wop' => NULL,
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'signed short int',
      'reference' => 'f56',
      'wop' => NULL,
    ),
  ),
  9 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1d141',
        'u0' => '0x1f136',
        'p3' => '0x1df5e',
        'u3' => '0x1f02a',
        'p4' => '0x1a335',
        'u4' => '0x1b9de',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f57',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f58',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f59',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f60',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f61',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f62',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f63',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f64',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f65',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f66',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f67',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f68',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f69',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f70',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f71',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f72',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    17 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f73',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    18 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f74',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    19 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f75',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    20 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f76',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    21 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f77',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    22 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f78',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    23 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f79',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    24 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f80',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    25 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f81',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    26 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f82',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    27 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f83',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    28 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f84',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    29 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f85',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    30 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f86',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    31 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f87',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    32 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f88',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    33 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f89',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    34 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f90',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    35 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f91',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    36 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f92',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    37 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f93',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    38 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f94',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    39 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f95',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    40 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f96',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    41 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f97',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    42 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f98',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    43 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f99',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    44 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f100',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    45 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f101',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    46 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f102',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    47 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f103',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
    48 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f104',
      'wop' => 'tofloat;divide(4);floor;tointeger;',
    ),
  ),
  10 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x003af',
        'u0' => '0x01a5f',
        'p3' => '0x00438',
        'u3' => '0x00b78',
        'p4' => '0x00422',
        'u4' => '0x01552',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '74',
    ),
    2 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f105',
      'wop' => 'if(off,54,48);',
      'type' => 'unsigned char',
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => 'c7 46 f8 0e 00 eb 03 ff 4e f8 83 7e f8 00 7c',
    ),
    4 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f105',
      'wop' => 'if(off,38,32);',
      'type' => 'unsigned char',
    ),
    5 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x003e1',
        'u0' => '0x01a91',
        'p3' => '0x0046a',
        'u3' => '0x00baa',
        'p4' => '0x00454',
        'u4' => '0x01584',
      ),
    ),
    6 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f105',
      'wop' => 'if(off,139,184);',
      'type' => 'unsigned char',
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f105',
      'wop' => 'if(off,63558,~);',
    ),
  ),
  11 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x00858',
        'u0' => '0x01f08',
        'p3' => '0x00951',
        'u3' => '0x01091',
        'p4' => '0x00915',
        'u4' => '0x01a45',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'unsigned char',
      'reference' => 'f106',
      'wop' => 'subtract(1);',
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '7e .. 83 3e .. .. 00 75 .. e9 .. ..',
    ),
    4 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x00894',
        'u0' => '0x01f44',
        'p3' => '0x00978',
        'u3' => '0x010b8',
        'p4' => '0x0093c',
        'u4' => '0x01a6c',
      ),
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => 'a1 .. .. 40 a3 .. .. 83 3e .. .. 00 75 .. 83 3e .. ..',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'unsigned char',
      'reference' => 'f107',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'check',
      'codes' => '7e .. c7 06 .. ..',
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f108',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'check',
      'codes' => 'c7 06 .. ..',
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f109',
      'wop' => 'multiply(12);floor;tointeger;',
    ),
  ),
  12 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1af9b',
        'p3' => '0x1bc67',
        'p4' => '0x17fcd',
        'u0' => '0x1cafa',
        'u3' => '0x1c883',
        'u4' => '0x191c1',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f110',
      'wop' => 'toupper;',
    ),
    2 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b7dd',
        'p3' => '0x1c5fa',
        'p4' => '0x189cc',
        'u0' => '0x1d391',
        'u3' => '0x1d283',
        'u4' => '0x19c2d',
      ),
    ),
    3 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f110',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    4 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b7e4',
        'p3' => '0x1c601',
        'p4' => '0x189d3',
        'u0' => '0x1d398',
        'u3' => '0x1d28a',
        'u4' => '0x19c34',
      ),
    ),
    5 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f110',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    6 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b7eb',
        'p3' => '0x1c608',
        'p4' => '0x189da',
        'u0' => '0x1d39f',
        'u3' => '0x1d291',
        'u4' => '0x19c3b',
      ),
    ),
    7 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f110',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    8 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b7f2',
        'p3' => '0x1c60f',
        'p4' => '0x189e1',
        'u0' => '0x1d3a6',
        'u3' => '0x1d298',
        'u4' => '0x19c42',
      ),
    ),
    9 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f110',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    10 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1aff3',
        'p3' => '0x1bcbf',
        'p4' => '0x18025',
        'u0' => '0x1cb52',
        'u3' => '0x1c8db',
        'u4' => '0x19219',
      ),
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f111',
      'wop' => 'toupper;',
    ),
    12 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ae28',
        'p3' => '0x1bb26',
        'p4' => '0x17eaa',
        'u0' => '0x1c984',
        'u3' => '0x1c742',
        'u4' => '0x1909e',
      ),
    ),
    13 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f111',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    14 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ae72',
        'p3' => '0x1bb70',
        'p4' => '0x17ed6',
        'u0' => '0x1c9ce',
        'u3' => '0x1c78c',
        'u4' => '0x190ca',
      ),
    ),
    15 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f111',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    16 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ae93',
        'p3' => '0x1bb91',
        'p4' => '0x17ef7',
        'u0' => '0x1c9ef',
        'u3' => '0x1c7ad',
        'u4' => '0x190eb',
      ),
    ),
    17 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f111',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    18 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afe9',
        'p3' => '0x1bcb5',
        'p4' => '0x1801b',
        'u0' => '0x1cb48',
        'u3' => '0x1c8d1',
        'u4' => '0x1920f',
      ),
    ),
    19 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f112',
      'wop' => 'toupper;',
    ),
    20 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1acd6',
        'p3' => '0x1b99a',
        'p4' => '0x17d38',
        'u0' => '0x1c82e',
        'u3' => '0x1c5b2',
        'u4' => '0x18f28',
      ),
    ),
    21 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f112',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    22 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ace0',
        'p3' => '0x1b9a4',
        'p4' => '0x17d42',
        'u0' => '0x1c838',
        'u3' => '0x1c5bc',
        'u4' => '0x18f32',
      ),
    ),
    23 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f112',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    24 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1aee2',
        'p3' => '0x1bbae',
        'p4' => '0x17f14',
        'u0' => '0x1ca41',
        'u3' => '0x1c7ca',
        'u4' => '0x19108',
      ),
    ),
    25 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f113',
      'wop' => 'toupper;',
    ),
    26 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1aab8',
        'p3' => '0x1b7dd',
        'p4' => '0x17bb5',
        'u0' => '0x1c5fb',
        'u3' => '0x1c3e0',
        'u4' => '0x18d90',
      ),
    ),
    27 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f113',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    28 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b071',
        'p3' => '0x1bd3e',
        'p4' => '0x180a4',
        'u0' => '0x1cbd0',
        'u3' => '0x1c95a',
        'u4' => '0x19298',
      ),
    ),
    29 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f112',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
  ),
  13 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1af93',
        'p3' => '0x1bc5f',
        'p4' => '0x17fc5',
        'u0' => '0x1caf2',
        'u3' => '0x1c87b',
        'u4' => '0x191b9',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f114',
      'wop' => 'toupper;',
    ),
    2 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1acc6',
        'p3' => '0x1b98a',
        'p4' => '0x17d28',
        'u0' => '0x1c81e',
        'u3' => '0x1c5a2',
        'u4' => '0x18f18',
      ),
    ),
    3 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f114',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    4 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1acce',
        'p3' => '0x1b992',
        'p4' => '0x17d30',
        'u0' => '0x1c826',
        'u3' => '0x1c5aa',
        'u4' => '0x18f20',
      ),
    ),
    5 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f114',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    6 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ae6a',
        'p3' => '0x1bb68',
        'p4' => '0x17ece',
        'u0' => '0x1c9c6',
        'u3' => '0x1c784',
        'u4' => '0x190c2',
      ),
    ),
    7 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f114',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    8 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ada2',
        'p3' => '0x1ba80',
        'p4' => '0x17e04',
        'u0' => '0x1c8fa',
        'u3' => '0x1c698',
        'u4' => '0x18ff4',
      ),
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f115',
      'wop' => 'toupper;',
    ),
    10 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afde',
        'p3' => '0x1bcaa',
        'p4' => '0x18010',
        'u0' => '0x1cb3d',
        'u3' => '0x1c8c6',
        'u4' => '0x19204',
      ),
    ),
    11 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f115',
      'wop' => 'toupper;',
      'type' => NULL,
    ),
    12 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad99',
        'p3' => '0x1ba77',
        'p4' => '0x17dfb',
        'u0' => '0x1c8f1',
        'u3' => '0x1c68f',
        'u4' => '0x18feb',
      ),
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f116',
      'wop' => 'toupper;',
    ),
    14 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afd5',
        'p3' => '0x1bca1',
        'p4' => '0x18007',
        'u0' => '0x1cb34',
        'u3' => '0x1c8bd',
        'u4' => '0x191fb',
      ),
    ),
    15 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f116',
      'wop' => 'toupper;',
      'type' => NULL,
    ),
    16 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1adad',
        'p3' => '0x1ba8b',
        'p4' => '0x17e0f',
        'u0' => '0x1c905',
        'u3' => '0x1c6a3',
        'u4' => '0x18fff',
      ),
    ),
    17 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f117',
      'wop' => 'toupper;',
    ),
    18 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afca',
        'p3' => '0x1bc96',
        'p4' => '0x17ffc',
        'u0' => '0x1cb29',
        'u3' => '0x1c8b2',
        'u4' => '0x191f0',
      ),
    ),
    19 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f117',
      'wop' => 'toupper;',
      'type' => NULL,
    ),
    20 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad91',
        'p3' => '0x1ba6f',
        'p4' => '0x17df3',
        'u0' => '0x1c8e9',
        'u3' => '0x1c687',
        'u4' => '0x18fe3',
      ),
    ),
    21 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f118',
      'wop' => 'toupper;',
    ),
    22 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afc2',
        'p3' => '0x1bc8e',
        'p4' => '0x17ff4',
        'u0' => '0x1cb21',
        'u3' => '0x1c8aa',
        'u4' => '0x191e8',
      ),
    ),
    23 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f118',
      'wop' => 'toupper;',
      'type' => NULL,
    ),
    24 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad87',
        'p3' => '0x1ba65',
        'p4' => '0x17de9',
        'u0' => '0x1c8df',
        'u3' => '0x1c67d',
        'u4' => '0x18fd9',
      ),
    ),
    25 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f119',
      'wop' => 'toupper;',
    ),
    26 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afa2',
        'p3' => '0x1bc6e',
        'p4' => '0x17fd4',
        'u0' => '0x1cb01',
        'u3' => '0x1c88a',
        'u4' => '0x191c8',
      ),
    ),
    27 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f119',
      'wop' => 'toupper;',
      'type' => NULL,
    ),
    28 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1addb',
        'p3' => '0x1bab9',
        'p4' => '0x17e3d',
        'u0' => '0x1c933',
        'u3' => '0x1c6d1',
        'u4' => '0x1902d',
      ),
    ),
    29 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f120',
      'wop' => 'toupper;',
    ),
    30 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afac',
        'p3' => '0x1bc78',
        'p4' => '0x17fde',
        'u0' => '0x1cb0b',
        'u3' => '0x1c894',
        'u4' => '0x191d2',
      ),
    ),
    31 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f120',
      'wop' => 'toupper;',
      'type' => NULL,
    ),
    32 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ade6',
        'p3' => '0x1bac4',
        'p4' => '0x17e48',
        'u0' => '0x1c93e',
        'u3' => '0x1c6dc',
        'u4' => '0x19038',
      ),
    ),
    33 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f121',
      'wop' => 'toupper;',
    ),
    34 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1afb7',
        'p3' => '0x1bc83',
        'p4' => '0x17fe9',
        'u0' => '0x1cb16',
        'u3' => '0x1c89f',
        'u4' => '0x191dd',
      ),
    ),
    35 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f121',
      'wop' => 'toupper;',
      'type' => NULL,
    ),
  ),
  14 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1af2e',
        'p3' => '0x1bbfa',
        'p4' => '0x17f60',
        'u0' => '0x1ca8d',
        'u3' => '0x1c816',
        'u4' => '0x19154',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f122',
      'wop' => 'toupper;',
    ),
    2 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad53',
        'p3' => '0x1b9fd',
        'p4' => '0x17d9b',
        'u0' => '0x1c8ab',
        'u3' => '0x1c615',
        'u4' => '0x18f8b',
      ),
    ),
    3 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f122',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    4 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1af3b',
        'p3' => '0x1bc07',
        'p4' => '0x17f6d',
        'u0' => '0x1ca9a',
        'u3' => '0x1c823',
        'u4' => '0x19161',
      ),
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f123',
      'wop' => 'toupper;',
    ),
    6 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad7a',
        'p3' => '0x1ba3e',
        'p4' => '0x17dcf',
        'u0' => '0x1c8d2',
        'u3' => '0x1c656',
        'u4' => '0x18fbf',
      ),
    ),
    7 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f123',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    8 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1af14',
        'p3' => '0x1bbe0',
        'p4' => '0x17f46',
        'u0' => '0x1ca73',
        'u3' => '0x1c7fc',
        'u4' => '0x1913a',
      ),
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f124',
      'wop' => 'toupper;',
    ),
    10 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad2c',
        'p3' => '0x1b9f0',
        'p4' => '0x17d8e',
        'u0' => '0x1c884',
        'u3' => '0x1c608',
        'u4' => '0x18f7e',
      ),
    ),
    11 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f124',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    12 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1af21',
        'p3' => '0x1bbed',
        'p4' => '0x17f53',
        'u0' => '0x1ca80',
        'u3' => '0x1c809',
        'u4' => '0x19147',
      ),
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f125',
      'wop' => 'toupper;',
    ),
    14 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad60',
        'p3' => '0x1ba31',
        'p4' => '0x17dc2',
        'u0' => '0x1c8b8',
        'u3' => '0x1c649',
        'u4' => '0x18fb2',
      ),
    ),
    15 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f125',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    16 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1aeed',
        'p3' => '0x1bbb9',
        'p4' => '0x17f1f',
        'u0' => '0x1ca4c',
        'u3' => '0x1c7d5',
        'u4' => '0x19113',
      ),
    ),
    17 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f126',
      'wop' => 'toupper;',
    ),
    18 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad39',
        'p3' => '0x1ba0a',
        'p4' => '0x17da8',
        'u0' => '0x1c891',
        'u3' => '0x1c622',
        'u4' => '0x18f98',
      ),
    ),
    19 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f126',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    20 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1aefa',
        'p3' => '0x1bbc6',
        'p4' => '0x17f2c',
        'u0' => '0x1ca59',
        'u3' => '0x1c7e2',
        'u4' => '0x19120',
      ),
    ),
    21 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f127',
      'wop' => 'toupper;',
    ),
    22 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad6d',
        'p3' => '0x1ba4b',
        'p4' => '0x17ddc',
        'u0' => '0x1c8c5',
        'u3' => '0x1c663',
        'u4' => '0x18fcc',
      ),
    ),
    23 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f127',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
    24 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1af07',
        'p3' => '0x1bbd3',
        'p4' => '0x17f39',
        'u0' => '0x1ca66',
        'u3' => '0x1c7ef',
        'u4' => '0x1912d',
      ),
    ),
    25 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f128',
      'wop' => 'toupper;',
    ),
    26 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1ad46',
        'p3' => '0x1ba17',
        'p4' => '0x17db5',
        'u0' => '0x1c89e',
        'u3' => '0x1c62f',
        'u4' => '0x18fa5',
      ),
    ),
    27 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f128',
      'wop' => 'tolower;',
      'type' => NULL,
    ),
  ),
  15 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b30a',
        'p3' => '0x1c141',
        'p4' => '0x18483',
        'u0' => '0x1cebe',
        'u3' => '0x1cdca',
        'u4' => '0x196e4',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f129',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b318',
        'p3' => '0x1c14f',
        'p4' => '0x18491',
        'u0' => '0x1cecc',
        'u3' => '0x1cdd8',
        'u4' => '0x196f2',
      ),
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f130',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b328',
        'p3' => '0x1c15f',
        'p4' => '0x184a1',
        'u0' => '0x1cedc',
        'u3' => '0x1cde8',
        'u4' => '0x19702',
      ),
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f131',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b338',
        'p3' => '0x1c16f',
        'p4' => '0x184b1',
        'u0' => '0x1ceec',
        'u3' => '0x1cdf8',
        'u4' => '0x19712',
      ),
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f132',
      'wop' => NULL,
    ),
  ),
  16 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b34a',
        'p3' => '0x1c181',
        'p4' => '0x184c3',
        'u0' => '0x1cefe',
        'u3' => '0x1ce0a',
        'u4' => '0x19724',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f133',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b354',
        'p3' => '0x1c18b',
        'p4' => '0x184cd',
        'u0' => '0x1cf08',
        'u3' => '0x1ce14',
        'u4' => '0x1972e',
      ),
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f134',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b3ce',
        'p3' => '0x1c205',
        'p4' => '0x18547',
        'u0' => '0x1cf82',
        'u3' => '0x1ce8e',
        'u4' => '0x197a8',
      ),
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f135',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b3d8',
        'p3' => '0x1c20f',
        'p4' => '0x18551',
        'u0' => '0x1cf8c',
        'u3' => '0x1ce98',
        'u4' => '0x197b2',
      ),
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f136',
      'wop' => NULL,
    ),
    8 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b3e2',
        'u0' => '0x1cf96',
      ),
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f137',
      'wop' => NULL,
    ),
    10 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b3fa',
        'p3' => '0x1c219',
        'p4' => '0x1855b',
        'u0' => '0x1cfae',
        'u3' => '0x1cea2',
        'u4' => '0x197bc',
      ),
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f138',
      'wop' => NULL,
    ),
    12 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b410',
        'p3' => '0x1c22f',
        'p4' => '0x18571',
        'u0' => '0x1cfc4',
        'u3' => '0x1ceb8',
        'u4' => '0x197d2',
      ),
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f139',
      'wop' => NULL,
    ),
    14 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b41e',
        'p3' => '0x1c23d',
        'p4' => '0x1857f',
        'u0' => '0x1cfd2',
        'u3' => '0x1cec6',
        'u4' => '0x197e0',
      ),
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f140',
      'wop' => NULL,
    ),
    16 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b432',
        'p3' => '0x1c251',
        'p4' => '0x18593',
        'u0' => '0x1cfe6',
        'u3' => '0x1ceda',
        'u4' => '0x197f4',
      ),
    ),
    17 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f141',
      'wop' => NULL,
    ),
    18 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b440',
        'p3' => '0x1c25f',
        'p4' => '0x185a1',
        'u0' => '0x1cff4',
        'u3' => '0x1cee8',
        'u4' => '0x19802',
      ),
    ),
    19 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f142',
      'wop' => NULL,
    ),
    20 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b46a',
        'p3' => '0x1c289',
        'p4' => '0x185cb',
        'u0' => '0x1d01e',
        'u3' => '0x1cf12',
        'u4' => '0x1982c',
      ),
    ),
    21 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f143',
      'wop' => NULL,
    ),
    22 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b512',
        'u0' => '0x1d0c6',
      ),
    ),
    23 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f144',
      'wop' => NULL,
    ),
    24 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1b476',
        'p3' => '0x1c295',
        'p4' => '0x185d7',
        'u0' => '0x1d02a',
        'u3' => '0x1cf1e',
        'u4' => '0x19838',
      ),
    ),
    25 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f145',
      'wop' => NULL,
    ),
  ),
  17 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p3' => '0x1bb06',
        'u3' => '0x1c722',
        'p4' => '0x17e8a',
        'u4' => '0x1907e',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f146',
      'wop' => 'if(off,0,~);',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f36',
      'wop' => 'if(off,0,~);',
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f147',
      'wop' => 'if(off,0,~);',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f148',
      'wop' => 'if(off,0,~);',
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f149',
      'wop' => 'if(off,0,~);',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f150',
      'wop' => 'if(off,0,~);',
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f151',
      'wop' => 'if(off,0,~);',
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f152',
      'wop' => 'if(off,0,~);',
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f153',
      'wop' => 'if(off,0,~);',
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f154',
      'wop' => 'if(off,0,~);',
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f155',
      'wop' => 'if(off,0,~);',
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f156',
      'wop' => 'if(off,0,~);',
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f157',
      'wop' => 'if(off,0,~);',
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f158',
      'wop' => 'if(off,0,~);',
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f159',
      'wop' => 'if(off,0,~);',
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f160',
      'wop' => 'if(off,0,~);',
    ),
  ),
  18 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'u0' => '0x2261',
      ),
    ),
    1 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f161',
      'wop' => 'if(off,148,122);',
      'type' => 'unsigned char',
    ),
    2 => 
    array (
      'action' => 'check',
      'codes' => '0c',
    ),
    3 => 
    array (
      'action' => 'duplicate',
      'reference' => 'f161',
      'wop' => 'if(off,79,223);',
      'type' => 'unsigned char',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'unsigned char',
      'reference' => 'f161',
      'wop' => 'if(off,2,26);',
    ),
  ),
  19 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'u0' => '0x1c782',
        'u3' => '0x1c4f6',
        'u4' => '0x18e70',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f162',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f163',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f164',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f165',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f166',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f167',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f168',
      'wop' => NULL,
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f169',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f170',
      'wop' => NULL,
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f171',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f172',
      'wop' => NULL,
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f173',
      'wop' => NULL,
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f174',
      'wop' => NULL,
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f175',
      'wop' => NULL,
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f176',
      'wop' => NULL,
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f177',
      'wop' => NULL,
    ),
    17 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f178',
      'wop' => NULL,
    ),
    18 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f179',
      'wop' => NULL,
    ),
    19 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f180',
      'wop' => NULL,
    ),
    20 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f181',
      'wop' => NULL,
    ),
    21 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f182',
      'wop' => NULL,
    ),
    22 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f183',
      'wop' => NULL,
    ),
    23 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f184',
      'wop' => NULL,
    ),
    24 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f185',
      'wop' => NULL,
    ),
    25 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f186',
      'wop' => NULL,
    ),
    26 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f187',
      'wop' => NULL,
    ),
    27 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f188',
      'wop' => NULL,
    ),
    28 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f189',
      'wop' => NULL,
    ),
    29 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f190',
      'wop' => NULL,
    ),
    30 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f191',
      'wop' => NULL,
    ),
    31 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f192',
      'wop' => NULL,
    ),
    32 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f193',
      'wop' => NULL,
    ),
    33 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f194',
      'wop' => NULL,
    ),
    34 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f195',
      'wop' => NULL,
    ),
    35 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f196',
      'wop' => NULL,
    ),
    36 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f197',
      'wop' => NULL,
    ),
    37 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f198',
      'wop' => NULL,
    ),
    38 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f199',
      'wop' => NULL,
    ),
    39 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f200',
      'wop' => NULL,
    ),
    40 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f201',
      'wop' => NULL,
    ),
    41 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f202',
      'wop' => NULL,
    ),
    42 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f203',
      'wop' => NULL,
    ),
    43 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f204',
      'wop' => NULL,
    ),
    44 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f205',
      'wop' => NULL,
    ),
    45 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f206',
      'wop' => NULL,
    ),
    46 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f207',
      'wop' => NULL,
    ),
    47 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f208',
      'wop' => NULL,
    ),
    48 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f209',
      'wop' => NULL,
    ),
    49 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f210',
      'wop' => NULL,
    ),
    50 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f211',
      'wop' => NULL,
    ),
    51 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f212',
      'wop' => NULL,
    ),
    52 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f213',
      'wop' => NULL,
    ),
    53 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f214',
      'wop' => NULL,
    ),
    54 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f215',
      'wop' => NULL,
    ),
    55 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f216',
      'wop' => NULL,
    ),
    56 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f217',
      'wop' => NULL,
    ),
    57 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f218',
      'wop' => NULL,
    ),
    58 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f219',
      'wop' => NULL,
    ),
    59 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f220',
      'wop' => NULL,
    ),
    60 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f221',
      'wop' => NULL,
    ),
    61 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f222',
      'wop' => NULL,
    ),
    62 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f223',
      'wop' => NULL,
    ),
    63 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f224',
      'wop' => NULL,
    ),
    64 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f225',
      'wop' => NULL,
    ),
    65 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f226',
      'wop' => NULL,
    ),
    66 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f227',
      'wop' => NULL,
    ),
    67 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f228',
      'wop' => NULL,
    ),
    68 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f229',
      'wop' => NULL,
    ),
    69 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f230',
      'wop' => NULL,
    ),
    70 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f231',
      'wop' => NULL,
    ),
    71 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f232',
      'wop' => NULL,
    ),
    72 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f233',
      'wop' => NULL,
    ),
    73 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f234',
      'wop' => NULL,
    ),
    74 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f235',
      'wop' => NULL,
    ),
    75 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f236',
      'wop' => NULL,
    ),
    76 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f237',
      'wop' => NULL,
    ),
    77 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f238',
      'wop' => NULL,
    ),
    78 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f239',
      'wop' => NULL,
    ),
    79 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f240',
      'wop' => NULL,
    ),
    80 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f241',
      'wop' => NULL,
    ),
    81 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f242',
      'wop' => NULL,
    ),
    82 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f243',
      'wop' => NULL,
    ),
    83 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f244',
      'wop' => NULL,
    ),
    84 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f245',
      'wop' => NULL,
    ),
    85 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f246',
      'wop' => NULL,
    ),
    86 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f247',
      'wop' => NULL,
    ),
    87 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f248',
      'wop' => NULL,
    ),
    88 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f249',
      'wop' => NULL,
    ),
    89 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f250',
      'wop' => NULL,
    ),
    90 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f251',
      'wop' => NULL,
    ),
    91 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f252',
      'wop' => NULL,
    ),
    92 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f253',
      'wop' => NULL,
    ),
    93 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f254',
      'wop' => NULL,
    ),
    94 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f255',
      'wop' => NULL,
    ),
    95 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f256',
      'wop' => NULL,
    ),
    96 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f257',
      'wop' => NULL,
    ),
    97 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f258',
      'wop' => NULL,
    ),
    98 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f259',
      'wop' => NULL,
    ),
    99 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f260',
      'wop' => NULL,
    ),
    100 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f261',
      'wop' => NULL,
    ),
    101 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f262',
      'wop' => NULL,
    ),
    102 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f263',
      'wop' => NULL,
    ),
    103 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f264',
      'wop' => NULL,
    ),
    104 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f265',
      'wop' => NULL,
    ),
    105 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f266',
      'wop' => NULL,
    ),
    106 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f267',
      'wop' => NULL,
    ),
    107 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f268',
      'wop' => NULL,
    ),
    108 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f269',
      'wop' => NULL,
    ),
    109 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f270',
      'wop' => NULL,
    ),
    110 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f271',
      'wop' => NULL,
    ),
    111 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f272',
      'wop' => NULL,
    ),
    112 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f273',
      'wop' => NULL,
    ),
    113 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f274',
      'wop' => NULL,
    ),
    114 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f275',
      'wop' => NULL,
    ),
    115 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f276',
      'wop' => NULL,
    ),
    116 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f277',
      'wop' => NULL,
    ),
    117 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f278',
      'wop' => NULL,
    ),
    118 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f279',
      'wop' => NULL,
    ),
    119 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f280',
      'wop' => NULL,
    ),
    120 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f281',
      'wop' => NULL,
    ),
    121 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f282',
      'wop' => NULL,
    ),
    122 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f283',
      'wop' => NULL,
    ),
    123 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f284',
      'wop' => NULL,
    ),
    124 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f285',
      'wop' => NULL,
    ),
    125 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f286',
      'wop' => NULL,
    ),
    126 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f287',
      'wop' => NULL,
    ),
    127 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f288',
      'wop' => NULL,
    ),
    128 => 
    array (
      'action' => 'read',
      'type' => 'boolean',
      'reference' => 'f289',
      'wop' => NULL,
    ),
  ),
  20 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'u0' => '0x1d530',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f290',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f291',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f292',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f293',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f294',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f295',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f296',
      'wop' => NULL,
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f297',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f298',
      'wop' => NULL,
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f299',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f300',
      'wop' => NULL,
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f301',
      'wop' => NULL,
    ),
    13 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f302',
      'wop' => NULL,
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f303',
      'wop' => NULL,
    ),
    15 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f304',
      'wop' => NULL,
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'long',
      'reference' => 'f305',
      'wop' => NULL,
    ),
  ),
  21 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x4c25',
        'u0' => '0x62d5',
        'p3' => '0x50ad',
        'u3' => '0x57ed',
        'p4' => '0x4b69',
        'u4' => '0x5c99',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => 'c7 46 fe',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'unsigned char',
      'reference' => 'f306',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '00 8b 46 fe',
    ),
  ),
  22 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0xb35',
        'u0' => '0x21e5',
        'p3' => '0xc1a',
        'u3' => '0x135a',
        'p4' => '0xbde',
        'u4' => '0x1d0e',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f307',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 26 80 3e .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f308',
      'wop' => NULL,
    ),
  ),
  23 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x4b9a',
        'u0' => '0x624a',
        'p3' => '0x5022',
        'u3' => '0x5762',
        'p4' => '0x4ade',
        'u4' => '0x5c0e',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f309',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 32 83 3e .. .. 00 74 2b c6 06 .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'signed char',
      'reference' => 'f310',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => 'c6 06 .. ..',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f311',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'check',
      'codes' => 'c6 06 .. ..',
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f312',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'check',
      'codes' => 'b8',
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f313',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'check',
      'codes' => '50 b8',
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f314',
      'wop' => NULL,
    ),
    13 => 
    array (
      'action' => 'check',
      'codes' => '00 50',
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f315',
      'wop' => NULL,
    ),
  ),
  24 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x8dc3',
        'u0' => '0xa473',
        'p3' => '0x9270',
        'u3' => '0x99b0',
        'p4' => '0x8d2c',
        'u4' => '0x9e5c',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f316',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 2a b8',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f317',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => '00 50 50',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f318',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'check',
      'codes' => '50 .. .. .. .. .. 8a 1e .. .. 2a ff 8b 36 .. .. c6 00',
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f319',
      'wop' => NULL,
    ),
  ),
  25 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x5162',
        'u0' => '0x6812',
        'p3' => '0x55f6',
        'u3' => '0x5d36',
        'p4' => '0x50b2',
        'u4' => '0x61e2',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f320',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 .. 80 3e .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f321',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => '75 .. 83 3e .. .. 00 74 .. ff 06 .. .. 81 3e .. ..',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'unsigned short int',
      'reference' => 'f322',
      'wop' => 'multiply(12);floor;tointeger;',
    ),
    7 => 
    array (
      'action' => 'check',
      'codes' => '75 .. 0e',
    ),
    8 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x54af',
        'u0' => '0x6b5f',
        'p3' => '0x5943',
        'u3' => '0x6083',
        'p4' => '0x53ff',
        'u4' => '0x652f',
      ),
    ),
    9 => 
    array (
      'action' => 'check',
      'codes' => 'c6 06 .. ..',
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f323',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'check',
      'codes' => 'c6 06 .. ..',
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f324',
      'wop' => NULL,
    ),
    13 => 
    array (
      'action' => 'check',
      'codes' => '2a c0 a2 .. .. 98',
    ),
  ),
  26 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0xb80',
        'u0' => '0x2230',
        'p3' => '0xc69',
        'u3' => '0x13a9',
        'p4' => '0xc2d',
        'u4' => '0x1d5d',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f325',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 .. 80 3e .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f326',
      'wop' => NULL,
    ),
  ),
  27 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1209',
        'u0' => '0x28b9',
        'p4' => '0x1354',
        'u4' => '0x2484',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f327',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 .. 83 3e .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f328',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => '74 .. 83 3e .. ..',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f329',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'check',
      'codes' => '75 .. a1 .. .. a3 .. .. 50 9a .. .. .. .. c6 06 .. ..',
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f330',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'check',
      'codes' => 'b8 .. .. 50 9a .. .. .. .. 2a e4 25 0f 00 f7 d8 50 9a .. .. .. .. fe 06 .. .. 80 3e .. ..',
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f331',
      'wop' => NULL,
    ),
  ),
  28 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x84af',
        'u0' => '0x9b5f',
        'p3' => '0x895f',
        'u3' => '0x909f',
        'p4' => '0x841b',
        'u4' => '0x954b',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f332',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 1d c7 06 .. .. 0f 00 c7 06 .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f333',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => 'c7 06 .. .. 01 00 c7 06',
    ),
  ),
  29 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x11d8',
        'u0' => '0x2888',
        'p3' => '0x1393',
        'u3' => '0x1ad3',
        'p4' => '0x1323',
        'u4' => '0x2453',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f334',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '75 0c 83 3e .. ..',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f335',
      'wop' => NULL,
    ),
  ),
  30 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x8bd',
        'u0' => '0x1f6d',
        'p3' => '0x9a5',
        'u3' => '0x10e5',
        'p4' => '0x969',
        'u4' => '0x1a99',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '3d',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f336',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '00 75 .. .. .. .. 3d',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f337',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => '00 74 .. 3d',
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f338',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'check',
      'codes' => '00 75 .. .. .. .. 3d',
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f339',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'check',
      'codes' => '00 75 .. .. .. .. 3d',
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f340',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'check',
      'codes' => '00',
    ),
    12 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x8e5',
        'u0' => '0x1f95',
        'p3' => '0x9ca',
        'u3' => '0x110a',
        'p4' => '0x98e',
        'u4' => '0x1abe',
      ),
    ),
    13 => 
    array (
      'action' => 'check',
      'codes' => '8b 46 fa 3d',
    ),
    14 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f341',
      'wop' => NULL,
    ),
    15 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 94 01 76 03 e9 aa 01 3d',
    ),
    16 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f342',
      'wop' => NULL,
    ),
    17 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 b0 00 3d',
    ),
    18 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f343',
      'wop' => NULL,
    ),
    19 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 8d 00 3d',
    ),
    20 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f344',
      'wop' => NULL,
    ),
    21 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 25 01 3d',
    ),
    22 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f345',
      'wop' => NULL,
    ),
    23 => 
    array (
      'action' => 'check',
      'codes' => '00 74 5e 3d',
    ),
    24 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f346',
      'wop' => NULL,
    ),
    25 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 c6 00 3d',
    ),
    26 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f347',
      'wop' => NULL,
    ),
    27 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03',
    ),
    28 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0xa9c',
        'u0' => '0x214c',
        'p3' => '0xb81',
        'u3' => '0x12c1',
        'p4' => '0xb45',
        'u4' => '0x1c75',
      ),
    ),
    29 => 
    array (
      'action' => 'check',
      'codes' => 'e9 b4 fe 3d',
    ),
    30 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f348',
      'wop' => NULL,
    ),
    31 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 5b ff 77 1b 3d',
    ),
    32 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f349',
      'wop' => NULL,
    ),
    33 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 36 ff 3d',
    ),
    34 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f350',
      'wop' => NULL,
    ),
    35 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 6b fe 3d',
    ),
    36 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f351',
      'wop' => NULL,
    ),
    37 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 2d ff e9 8f fe 3d',
    ),
    38 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f352',
      'wop' => NULL,
    ),
    39 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 04 ff 3d',
    ),
    40 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f353',
      'wop' => NULL,
    ),
    41 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 4e ff 3d',
    ),
    42 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f354',
      'wop' => NULL,
    ),
    43 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 d7 fe 3d',
    ),
    44 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f355',
      'wop' => NULL,
    ),
    45 => 
    array (
      'action' => 'check',
      'codes' => '00 75 03 e9 2e ff e9 6c fe 8b e5',
    ),
    46 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x772',
        'u0' => '0x1e22',
        'p3' => '0x846',
        'u3' => '0xf86',
        'p4' => '0x80a',
        'u4' => '0x193a',
      ),
    ),
    47 => 
    array (
      'action' => 'check',
      'codes' => '3d',
    ),
    48 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f356',
      'wop' => NULL,
    ),
    49 => 
    array (
      'action' => 'check',
      'codes' => '00 .. .. .. .. .. .. .. e9 .. .. 3d',
    ),
    50 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f357',
      'wop' => NULL,
    ),
    51 => 
    array (
      'action' => 'check',
      'codes' => '00 .. .. 3d',
    ),
    52 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f358',
      'wop' => NULL,
    ),
    53 => 
    array (
      'action' => 'check',
      'codes' => '00 .. .. 3d',
    ),
    54 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f359',
      'wop' => NULL,
    ),
    55 => 
    array (
      'action' => 'check',
      'codes' => '00 .. .. 3d',
    ),
    56 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f360',
      'wop' => NULL,
    ),
    57 => 
    array (
      'action' => 'check',
      'codes' => '00',
    ),
    58 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0xd7ce',
        'u0' => '0xee7e',
        'p3' => '0xdcbc',
        'u3' => '0xe3fc',
        'p4' => '0xd616',
        'u4' => '0xe746',
      ),
    ),
    59 => 
    array (
      'action' => 'check',
      'codes' => '89 46 fe 3d',
    ),
    60 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f361',
      'wop' => NULL,
    ),
    61 => 
    array (
      'action' => 'check',
      'codes' => '00',
    ),
  ),
  31 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x4a58',
        'u0' => '0x6108',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '75 0c 83 3e 9a 00 00',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f362',
      'wop' => NULL,
    ),
  ),
  32 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x7ba5',
        'u0' => '0x9255',
        'p3' => '0x8049',
        'u3' => '0x8789',
        'p4' => '0x7b05',
        'u4' => '0x8c35',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. .. ..',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f363',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '34 0e e8',
    ),
  ),
  33 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x3aa',
        'u0' => '0x1a5a',
        'p3' => '0x433',
        'u3' => '0xb73',
        'p4' => '0x41d',
        'u4' => '0x154d',
      ),
    ),
    1 => 
    array (
      'action' => 'check',
      'codes' => '83 3e .. .. .. 74 36 c7 46 f8',
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f364',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'check',
      'codes' => '.. eb 03 ff 4e f8 83 7e f8',
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'char',
      'reference' => 'f365',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'check',
      'codes' => '7c 26 ff 76 f8 b8',
    ),
  ),
  34 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'u0' => '0x1d452',
        'u3' => '0x1d344',
        'u4' => '0x19cee',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f366',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f367',
      'wop' => NULL,
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f368',
      'wop' => NULL,
    ),
    4 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f369',
      'wop' => NULL,
    ),
    5 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f370',
      'wop' => NULL,
    ),
    6 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f371',
      'wop' => NULL,
    ),
    7 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f372',
      'wop' => NULL,
    ),
    8 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f373',
      'wop' => NULL,
    ),
    9 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f374',
      'wop' => NULL,
    ),
    10 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f375',
      'wop' => NULL,
    ),
    11 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f376',
      'wop' => NULL,
    ),
    12 => 
    array (
      'action' => 'read',
      'type' => 'short',
      'reference' => 'f377',
      'wop' => NULL,
    ),
  ),
  35 => 
  array (
    0 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => '0x1aaca',
        'u0' => '0x1c60d',
      ),
    ),
    1 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f378',
      'wop' => NULL,
    ),
    2 => 
    array (
      'action' => 'offset',
      'info' => 
      array (
        'p0' => 'none',
        'u0' => 'none',
        'p3' => '0x1b85f',
        'u3' => '0x1c462',
        'p4' => '0x17c05',
        'u4' => '0x18de0',
      ),
    ),
    3 => 
    array (
      'action' => 'read',
      'type' => 'string',
      'reference' => 'f379',
      'wop' => NULL,
    ),
  ),
);