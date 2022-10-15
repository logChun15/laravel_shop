<?php

return [
    'alipay' => [
        'app_id'         => '2021000120614962',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvqxhwNpb0Uvk5G9KcUjn2l9yldu4av9vl5CbuROyrUACT9fRQevNHGV2WYwZNY5iMGP1d08t3Ek1CyWGgEYaUtSw3n0zMlAOkoSM2UMfQUPmae2eLKVX7YYUVU94ICNMHaViyaeTxLHzVWQ61U0nmurc7vq4cK/MgUjg2V1py85VPe6dCNv0k8xP2prhwCHdh7bZ+vGUr5AMT1hCa5Ar8qLAMVui88uft6CV8mFvfRdBl1GuXLjsGOrshMmeV812LbcVs7eJJYmL4w/hgJtUc2pfa6ZC9/1rW61sh/iIwp+YbEmmybXHP+hUB3JbRgx0SpjbTp53Ms6/NL9Lx4uVPQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA1hJq1zqgDy5xFPsVY7fksBOoyHPi9OPdTBtgONcfn53PVXe8/18DjmKVYJljj8/C2ut00tSAI6ocaM289ygbv9JgvX6RphWDR58FufJ5r5qJON9TwLygsS5ie3JkqDlYxVsaShUb02HOpwJQ1IqAV6NIcTjxfD0ZEdjXdQRa+LfdqsxF9ZcOSYYT/jXcJt6J745yyTx9PwKNAR9/yzKZwIER0gjSqzmvH0wFUkG2xUZWOLZWCsIBLi7MtWCgRSmP3EkksbZjTZgr/wvtLY7rsMi3hzOxcnqoGEVj3vxu2VxS+NCEQv3EbTHiPy68Dz3Z7kKv4c2R5hUEzupUSqXayQIDAQABAoIBAQCPrwTvOXY9OlrETlLo/4ELfeaHxODMpjTe5HENNbcQF4gWQawla8yjQSAqGkptOHH9JpTe/aqURZWT8qOm8NDPS5GLHuz7oOzgoafiSxHJ/9uixKMedn0U76FCYmGVWAhxTtiyaMCofLmL903xmpTSPdJdzG6piQjOpdDXxfiZfvSgX0e+TRBhjQbKmYHdM/4nf5RsD0NEpq7KZWQOx8aynRELStiDM2/xoxJQcSlTKO8lKs10IZ9TskbJcD4Ls3A3Q5X0j1OuEeY2xgKgSsVZi1iDSX0+zbiF8DcDVka/VupYZdUUzb1ytLo7E5z/kmGheBXwasICDXrN22BNUvFBAoGBAP0K/9JWr+DJBf22zdUrJxEmJ49jmiJ2Zbighnc92PdjnaCS82eMQa5iC0yw6kWZUUtHrTGlZS5wli0BjN6BDgovoh48yP9uV0P8OiijGSN6ObMK4eYiGyLd/hBgX6cRzSoGSJzeyKBvJSkt5+p8WKBerFNT9Jg+59HBR+2jY6X9AoGBANiS1S49Z9NZo63CD+PW4N2ieB2A8UBW0CnIMElcL4l8pHl2O4EPrLksUrFkrenfMWRYIJ2R2rJCNS84OI7sxHV60Cb6DYmBl7ZaUvtTj1U8Zc00rZqQ3LgeIUJjFswTphpy0iHaZv3D+qEvLfTGyb+gPsQMyMg6Eg0Qz5itDzu9AoGBANWv5DmMWxpIqHaJWWka9/LTdbTxN8jCk0RGy0cHQ6ImzYY8krBvEUhiI4iwHiaIQs5/yRKTyc5d5XQ8Sunbsi+H6i/+xP5v/+G5rqOCmEgNf4xjNEFTq/bV4SeTOzOrJMbIZ6mRuXtCYO9VhPPP7kf/qybzTysCdGH+Bu/3er9BAoGAdHh611REuwARK4gbHY/Y/Li8WjmXBN/rMR0tArbmBc2Xco7oL19rp2Yzzpzzfrv+hxVx7OucrpM2oP9eQ1cHzJpQyTVfBF1CZtoqmGj2w4MoyHQVDPPtD8N8ZYR+pR/IC59GbNhU3RKBfh+uWl5x73FRcAPkEvJP9ODelCA1+g0CgYEArFf8/ILffEqNQr5YSvYuYUtzR68k9MGKNRx9k1Civo4zR6mGbONIhpCm3SoLzOVNHddMhjG4IAtmOZ2nRBSVvFZ+rxuFQ/r2JjYXEzFPaHSqGgJzBwgXnWWEFV64Y16jn1N1lOhCxZgG/KLmUyBkanJngex2WKo45mNvPLs/hXc=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
