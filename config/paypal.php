<?php
return array(
    // set your paypal credential
    'client_id' => 'AVsQrYsQ6lXoYfr-Bl8wqHmp-IsXLycdCrHU8VokVDQ40XoiLTLluFlqqqlpMjifr4ptHEAEjfS54zeX',
    'secret'    => 'EB0Vd2n_OUSfZRMhdVU-IeK5MyRPpJ4wiEZOAO9nciGqopUHrthq1E6-oyEKkRaW_rgwsNWB2ISZLo7V',

    /**
     * SDK configuration
     */
    'settings'  => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode'                   => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled'         => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName'           => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel'           => 'FINE',
    ),
);
