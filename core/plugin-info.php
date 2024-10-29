<?php

class dl_b_PluginInfo {

    /**
     * Properties
     */
    public $name;
    public $displayName;
    public $smallDisplayName;
    public $tableStatsName;

    /**
     * Constructor
     */
    public function __construct() {

        $this->name = "benchmark-by-duo-leaf";
        $this->smallDisplayName = "Benchmark";
        $this->displayName = $this->smallDisplayName . " by Duo Leaf";

        global $wpdb;

        $this->tableStatsName = $wpdb->prefix . str_replace('-', '_', $this->name . '_stats');
    }

}
