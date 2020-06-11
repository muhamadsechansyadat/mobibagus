<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_spec".
 *
 * @property int $id
 * @property int $category_id
 * @property int $brand_id
 * @property int $model_id
 * @property int $type_id
 * @property string $trim
 * @property string $name
 * @property string $tagline
 * @property string $review
 * @property string $summary
 * @property string $year
 * @property int $cc_car
 * @property double $price_off
 * @property double $price_on
 * @property int $rating
 * @property string $mobil_tipe
 * @property string $overall_length
 * @property string $dimensi
 * @property string $overall_width
 * @property string $overall_height
 * @property string $front_tread
 * @property string $rear_tread
 * @property string $curb_weight
 * @property string $gross_veh_weight
 * @property string $ground_clearance
 * @property string $min_turning_radius
 * @property string $boot_capacity_min
 * @property string $boot_capacity_max
 * @property string $towing_limit
 * @property string $whellbase
 * @property string $type
 * @property string $type_2
 * @property string $cylinder
 * @property string $cc
 * @property string $bore_x_stroke
 * @property string $compression_ratio
 * @property string $max_power
 * @property string $max_torque
 * @property string $fuel_system
 * @property string $fuel_type
 * @property string $wheel_drive
 * @property string $max_speed_mt
 * @property string $seratus_km_mt
 * @property string $urban_km_ltr_mt
 * @property string $extra_urban_km_lt_mt
 * @property string $combined_km_lt_mt
 * @property string $max_speed_km_at
 * @property string $seratus_km_at
 * @property string $urban_km_at
 * @property string $extra_urban_km_lt_at
 * @property string $combined_km_lt_at
 * @property string $fuel_tank_capacity_lt
 * @property string $type_trans
 * @property string $gear_ratio_1
 * @property string $gear_ratio_2
 * @property string $gear_ratio_3
 * @property string $gear_ratio_4
 * @property string $gear_ratio_5
 * @property string $gear_ratio_6
 * @property string $gear_ratio_7
 * @property string $gear_ratio_8
 * @property string $gear_ratioreverse
 * @property string $final_gear_ratio
 * @property string $steering
 * @property string $front_suspension
 * @property string $rear_suspension
 * @property string $front_break
 * @property string $rear_break
 * @property string $wheel_size_front
 * @property string $alloy_wheels
 * @property string $tire_size_front
 * @property string $seating_person
 * @property string $fuel_tank_capacity_lt_cap
 * @property string $front_seat_belt_pre_tensioners
 * @property string $child_safety_lock
 * @property string $central_lock
 * @property string $alarm
 * @property string $immobiliser
 * @property string $driver_airbag
 * @property string $passenger_airbag
 * @property string $front_side_airbags
 * @property string $front_seat_belt
 * @property string $front_seat_belt_pre_tensioners_safe
 * @property string $rear_seat_belt
 * @property string $rear_reflector
 * @property string $rain_censor
 * @property string $rear_packing_sensor
 * @property string $anti_lock_braking_system
 * @property string $electronic_stability_program
 * @property string $euro_ncap_overall_rating
 * @property string $euro_ncap_occupant_protection
 * @property string $euro_ncap_child_protection
 * @property string $euro_ncap_pedestrian_protection
 * @property string $air_conditioner
 * @property string $climate_control
 * @property string $seat_material
 * @property string $power_windows
 * @property string $power_steering
 * @property string $tilt_steering
 * @property string $cruise_control
 * @property string $audio_system
 * @property string $rear_seat_entertainment_system
 * @property string $satelite_navigation
 * @property string $center_stack
 * @property string $speakers
 * @property string $seat_belt_reminder
 * @property string $light_off_key_reminder
 * @property string $rear_window_defogger
 * @property string $satellite_navigation
 * @property string $speakers_pcs
 * @property string $door_ajar_warning_lamp
 * @property string $rear_seat_3_row
 * @property string $split_fold_rear_seat
 * @property string $leather_seats
 * @property string $foldable_grip_assist
 * @property string $door_pocket
 * @property string $ashtray
 * @property string $front_head_rest
 * @property string $rear_head_rest
 * @property string $tachnometer
 * @property string $seat_back_pocket
 * @property string $front_seat_under_tray
 * @property string $accessory_socket
 * @property string $inside_rear_view_mirror
 * @property string $vanity_mirror
 * @property string $steering_wheel
 * @property string $body_color_door_handle
 * @property string $roof_rail
 * @property string $manual_sunroof
 * @property string $electric_sunroof
 * @property string $fog_lamps
 * @property string $front_wiper
 * @property string $rear_wiper
 * @property string $electric_mirrors
 * @property string $electric_front_windows
 * @property string $electric_rear_windows
 * @property string $osrvm
 * @property string $grille_chrome
 * @property string $muffler_tail_pipe_chrome
 * @property string $lips_front_bumper
 * @property string $lips_rear_bumper
 * @property string $side_skirt
 * @property string $chmsl
 * @property string $colors
 * @property int $is_deleted
 * @property int $is_update
 * @property int $car_merk
 * @property int $car_model
 * @property int $counterview
 * @property string $car_video
 * @property string $default_image
 * @property string $default_image_2
 */
class AppSpec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_spec';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'brand_id', 'model_id', 'type_id', 'cc_car', 'rating', 'is_deleted', 'is_update', 'car_merk', 'car_model', 'counterview'], 'integer'],
            [['review', 'car_video'], 'string'],
            [['year'], 'safe'],
            [['price_off', 'price_on'], 'number'],
            [['counterview'], 'required'],
            [['trim', 'name', 'tagline', 'summary', 'default_image', 'default_image_2'], 'string', 'max' => 255],
            [['mobil_tipe', 'overall_length', 'dimensi', 'overall_width', 'overall_height', 'front_tread', 'rear_tread', 'curb_weight', 'gross_veh_weight', 'ground_clearance', 'min_turning_radius', 'boot_capacity_min', 'boot_capacity_max', 'towing_limit', 'whellbase', 'type', 'type_2', 'cylinder', 'cc', 'bore_x_stroke', 'compression_ratio', 'max_power', 'max_torque', 'fuel_system', 'fuel_type', 'wheel_drive', 'max_speed_mt', 'seratus_km_mt', 'urban_km_ltr_mt', 'extra_urban_km_lt_mt', 'combined_km_lt_mt', 'max_speed_km_at', 'seratus_km_at', 'urban_km_at', 'extra_urban_km_lt_at', 'combined_km_lt_at', 'fuel_tank_capacity_lt', 'type_trans', 'gear_ratio_1', 'gear_ratio_2', 'gear_ratio_3', 'gear_ratio_4', 'gear_ratio_5', 'gear_ratio_6', 'gear_ratio_7', 'gear_ratio_8', 'gear_ratioreverse', 'final_gear_ratio', 'steering', 'front_suspension', 'rear_suspension', 'front_break', 'rear_break', 'wheel_size_front', 'alloy_wheels', 'tire_size_front', 'seating_person', 'fuel_tank_capacity_lt_cap', 'front_seat_belt_pre_tensioners', 'child_safety_lock', 'central_lock', 'alarm', 'immobiliser', 'driver_airbag', 'passenger_airbag', 'front_side_airbags', 'front_seat_belt', 'front_seat_belt_pre_tensioners_safe', 'rear_seat_belt', 'rear_reflector', 'rain_censor', 'rear_packing_sensor', 'anti_lock_braking_system', 'electronic_stability_program', 'euro_ncap_overall_rating', 'euro_ncap_occupant_protection', 'euro_ncap_child_protection', 'euro_ncap_pedestrian_protection', 'air_conditioner', 'climate_control', 'seat_material', 'power_windows', 'power_steering', 'tilt_steering', 'cruise_control', 'audio_system', 'rear_seat_entertainment_system', 'satelite_navigation', 'center_stack', 'speakers', 'seat_belt_reminder', 'light_off_key_reminder', 'rear_window_defogger', 'satellite_navigation', 'speakers_pcs', 'door_ajar_warning_lamp', 'rear_seat_3_row', 'split_fold_rear_seat', 'leather_seats', 'foldable_grip_assist', 'door_pocket', 'ashtray', 'front_head_rest', 'rear_head_rest', 'tachnometer', 'seat_back_pocket', 'front_seat_under_tray', 'accessory_socket', 'inside_rear_view_mirror', 'vanity_mirror', 'steering_wheel', 'body_color_door_handle', 'roof_rail', 'manual_sunroof', 'electric_sunroof', 'fog_lamps', 'front_wiper', 'rear_wiper', 'electric_mirrors', 'electric_front_windows', 'electric_rear_windows', 'osrvm', 'grille_chrome', 'muffler_tail_pipe_chrome', 'lips_front_bumper', 'lips_rear_bumper', 'side_skirt', 'chmsl', 'colors'], 'string', 'max' => 50],
            [['year', 'type_id'], 'unique', 'targetAttribute' => ['year', 'type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
            'model_id' => 'Model ID',
            'type_id' => 'Type ID',
            'trim' => 'Trim',
            'name' => 'Name',
            'tagline' => 'Tagline',
            'review' => 'Review',
            'summary' => 'Summary',
            'year' => 'Year',
            'cc_car' => 'Cc Car',
            'price_off' => 'Price Off',
            'price_on' => 'Price On',
            'rating' => 'Rating',
            'mobil_tipe' => 'Mobil Tipe',
            'overall_length' => 'Overall Length',
            'dimensi' => 'Dimensi',
            'overall_width' => 'Overall Width',
            'overall_height' => 'Overall Height',
            'front_tread' => 'Front Tread',
            'rear_tread' => 'Rear Tread',
            'curb_weight' => 'Curb Weight',
            'gross_veh_weight' => 'Gross Veh Weight',
            'ground_clearance' => 'Ground Clearance',
            'min_turning_radius' => 'Min Turning Radius',
            'boot_capacity_min' => 'Boot Capacity Min',
            'boot_capacity_max' => 'Boot Capacity Max',
            'towing_limit' => 'Towing Limit',
            'whellbase' => 'Whellbase',
            'type' => 'Type',
            'type_2' => 'Type 2',
            'cylinder' => 'Cylinder',
            'cc' => 'Cc',
            'bore_x_stroke' => 'Bore X Stroke',
            'compression_ratio' => 'Compression Ratio',
            'max_power' => 'Max Power',
            'max_torque' => 'Max Torque',
            'fuel_system' => 'Fuel System',
            'fuel_type' => 'Fuel Type',
            'wheel_drive' => 'Wheel Drive',
            'max_speed_mt' => 'Max Speed Mt',
            'seratus_km_mt' => 'Seratus Km Mt',
            'urban_km_ltr_mt' => 'Urban Km Ltr Mt',
            'extra_urban_km_lt_mt' => 'Extra Urban Km Lt Mt',
            'combined_km_lt_mt' => 'Combined Km Lt Mt',
            'max_speed_km_at' => 'Max Speed Km At',
            'seratus_km_at' => 'Seratus Km At',
            'urban_km_at' => 'Urban Km At',
            'extra_urban_km_lt_at' => 'Extra Urban Km Lt At',
            'combined_km_lt_at' => 'Combined Km Lt At',
            'fuel_tank_capacity_lt' => 'Fuel Tank Capacity Lt',
            'type_trans' => 'Type Trans',
            'gear_ratio_1' => 'Gear Ratio 1',
            'gear_ratio_2' => 'Gear Ratio 2',
            'gear_ratio_3' => 'Gear Ratio 3',
            'gear_ratio_4' => 'Gear Ratio 4',
            'gear_ratio_5' => 'Gear Ratio 5',
            'gear_ratio_6' => 'Gear Ratio 6',
            'gear_ratio_7' => 'Gear Ratio 7',
            'gear_ratio_8' => 'Gear Ratio 8',
            'gear_ratioreverse' => 'Gear Ratioreverse',
            'final_gear_ratio' => 'Final Gear Ratio',
            'steering' => 'Steering',
            'front_suspension' => 'Front Suspension',
            'rear_suspension' => 'Rear Suspension',
            'front_break' => 'Front Break',
            'rear_break' => 'Rear Break',
            'wheel_size_front' => 'Wheel Size Front',
            'alloy_wheels' => 'Alloy Wheels',
            'tire_size_front' => 'Tire Size Front',
            'seating_person' => 'Seating Person',
            'fuel_tank_capacity_lt_cap' => 'Fuel Tank Capacity Lt Cap',
            'front_seat_belt_pre_tensioners' => 'Front Seat Belt Pre Tensioners',
            'child_safety_lock' => 'Child Safety Lock',
            'central_lock' => 'Central Lock',
            'alarm' => 'Alarm',
            'immobiliser' => 'Immobiliser',
            'driver_airbag' => 'Driver Airbag',
            'passenger_airbag' => 'Passenger Airbag',
            'front_side_airbags' => 'Front Side Airbags',
            'front_seat_belt' => 'Front Seat Belt',
            'front_seat_belt_pre_tensioners_safe' => 'Front Seat Belt Pre Tensioners Safe',
            'rear_seat_belt' => 'Rear Seat Belt',
            'rear_reflector' => 'Rear Reflector',
            'rain_censor' => 'Rain Censor',
            'rear_packing_sensor' => 'Rear Packing Sensor',
            'anti_lock_braking_system' => 'Anti Lock Braking System',
            'electronic_stability_program' => 'Electronic Stability Program',
            'euro_ncap_overall_rating' => 'Euro Ncap Overall Rating',
            'euro_ncap_occupant_protection' => 'Euro Ncap Occupant Protection',
            'euro_ncap_child_protection' => 'Euro Ncap Child Protection',
            'euro_ncap_pedestrian_protection' => 'Euro Ncap Pedestrian Protection',
            'air_conditioner' => 'Air Conditioner',
            'climate_control' => 'Climate Control',
            'seat_material' => 'Seat Material',
            'power_windows' => 'Power Windows',
            'power_steering' => 'Power Steering',
            'tilt_steering' => 'Tilt Steering',
            'cruise_control' => 'Cruise Control',
            'audio_system' => 'Audio System',
            'rear_seat_entertainment_system' => 'Rear Seat Entertainment System',
            'satelite_navigation' => 'Satelite Navigation',
            'center_stack' => 'Center Stack',
            'speakers' => 'Speakers',
            'seat_belt_reminder' => 'Seat Belt Reminder',
            'light_off_key_reminder' => 'Light Off Key Reminder',
            'rear_window_defogger' => 'Rear Window Defogger',
            'satellite_navigation' => 'Satellite Navigation',
            'speakers_pcs' => 'Speakers Pcs',
            'door_ajar_warning_lamp' => 'Door Ajar Warning Lamp',
            'rear_seat_3_row' => 'Rear Seat 3 Row',
            'split_fold_rear_seat' => 'Split Fold Rear Seat',
            'leather_seats' => 'Leather Seats',
            'foldable_grip_assist' => 'Foldable Grip Assist',
            'door_pocket' => 'Door Pocket',
            'ashtray' => 'Ashtray',
            'front_head_rest' => 'Front Head Rest',
            'rear_head_rest' => 'Rear Head Rest',
            'tachnometer' => 'Tachnometer',
            'seat_back_pocket' => 'Seat Back Pocket',
            'front_seat_under_tray' => 'Front Seat Under Tray',
            'accessory_socket' => 'Accessory Socket',
            'inside_rear_view_mirror' => 'Inside Rear View Mirror',
            'vanity_mirror' => 'Vanity Mirror',
            'steering_wheel' => 'Steering Wheel',
            'body_color_door_handle' => 'Body Color Door Handle',
            'roof_rail' => 'Roof Rail',
            'manual_sunroof' => 'Manual Sunroof',
            'electric_sunroof' => 'Electric Sunroof',
            'fog_lamps' => 'Fog Lamps',
            'front_wiper' => 'Front Wiper',
            'rear_wiper' => 'Rear Wiper',
            'electric_mirrors' => 'Electric Mirrors',
            'electric_front_windows' => 'Electric Front Windows',
            'electric_rear_windows' => 'Electric Rear Windows',
            'osrvm' => 'Osrvm',
            'grille_chrome' => 'Grille Chrome',
            'muffler_tail_pipe_chrome' => 'Muffler Tail Pipe Chrome',
            'lips_front_bumper' => 'Lips Front Bumper',
            'lips_rear_bumper' => 'Lips Rear Bumper',
            'side_skirt' => 'Side Skirt',
            'chmsl' => 'Chmsl',
            'colors' => 'Colors',
            'is_deleted' => 'Is Deleted',
            'is_update' => 'Is Update',
            'car_merk' => 'Car Merk',
            'car_model' => 'Car Model',
            'counterview' => 'Counterview',
            'car_video' => 'Car Video',
            'default_image' => 'Default Image',
            'default_image_2' => 'Default Image 2',
        ];
    }
}
