<?php 

$this->view('listings/default',
[
  "i18n_title" => 'displays_info.reporttitle',
  "js_link" => "module/displays_info/js/format_displays",
  "not_null_column" => "displays.vendor",
  "table" => [
    [
      "column" => "machine.computer_name",
      "i18n_header" => "listing.computername",
      "formatter" => "clientDetail",
      "tab_link" => "displays-tab",
    ],
    [
      "column" => "reportdata.serial_number",
      "i18n_header" => "displays_info.machineserial",
    ],
    [
      "column" => "displays.type",
      "i18n_header" => "type",
      "formatter" => "displayTypeFormat",
      "filter" => "displayTypeFilter"
    ],
    [
      "column" => "displays.vendor",
      "i18n_header" => "displays_info.vendor",
      "formatter" => "vendorFormat"
    ],
    ["column" => "displays.model", "i18n_header" => "displays_info.model",],
    [
      "column" => "displays.display_serial",
      "i18n_header" => "serial",
      "formatter" => "naSerialFormat",
    ],
    [
      "column" => "displays.manufactured",
      "i18n_header" => "displays_info.manufactured",
      "formatter" => "manufacturedFormat",
    ],
    ["column" => "displays.native", "i18n_header" => "displays_info.nativeresolution",],
    ["column" => "displays.current_resolution", "i18n_header" => "displays_info.current_resolution",],
    ["column" => "displays.connection_type", "i18n_header" => "displays_info.connection_type",],
    [
      "column" => "displays.display_asleep",
      "i18n_header" => "displays_info.display_asleep_short",
      "formatter" => "binaryYesNo",
    ],
    ["column" => "displays.display_type", "i18n_header" => "displays_info.display_type",],
    [
      "column" => "displays.television",
      "i18n_header" => "displays_info.television",
      "formatter" => "binaryYesNo",
    ],
    [
      "column" => "displays.timestamp",
      "i18n_header" => "displays_info.detected",
      "sort" => "desc",
      "formatter" => "timestampToMoment",
    ],
    [
      "column" => "displays.model_identifier",
      "i18n_header" => "displays_info.model_identifier",
    ],
    [
      "column" => "displays.os_version",
      "i18n_header" => "displays_info.os_version",
    ],
  ]
]);
