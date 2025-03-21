<?php
include 'db_connection.php'; // Ensure you have a proper database connection file

$file_path = 'C:/xampp/mysql/data/wildfire_db/y.csv';

$sql = "LOAD DATA INFILE '" . $file_path . "' 
        INTO TABLE wildfire_data 
        FIELDS TERMINATED BY ',' 
        ENCLOSED BY '\"' 
        LINES TERMINATED BY '\\n' 
        IGNORE 1 ROWS 
        (id, objectid, damage, street_number, street_name, street_type_eg_road_drive_lane_etc, street_suffix_eg_apt_23_blding_c, 
         city, state, zip_code, cal_fire_unit, county, community, incident_name,
         incident_number, incident_start_date, hazard_type, if_affected_where_did_fire_started, if_affected_what_started_fire, 
         structure_defense_actions_taken, structure_type, structure_category, units_in_structure_if_multi_unit, of_damaged_outbuildings,
         of_non_damaged_outbuildings, roof_construction, eaves, vent_screen, exterior_siding, window_pane, deckporch_on_grade, 
         deckporch_elevated, patio_covercarport_attached_to_structure, fence_attached_to_structure, distance_propane_tank_to_structure, 
         distance_residence_to_utilitymisc_structure, assessed_improved_value_parcel, year_built_parcel, site_address_parcel, globalid, 
         latitude, longitude, x, y)";

if (mysqli_query($conn, $sql)) {
    echo "CSV imported successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>