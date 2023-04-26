<?php

namespace App\Imports;

use App\Models\DietList;
use App\Models\FoodGroup;
use App\Models\ServingSize;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;

// class DietImport implements ToCollection, WithHeadingRow
class DietImport implements ToCollection,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    /**
    * @param Collection $collection
    */


    public function Collection(Collection $rows)
    {
        // return new DietList([


        //     'name'     => $row[0],
        //     'email'    => $row[1],

        // ]);

        // dd($rows);

        foreach($rows as $row){

            // dd(strval($row['name']));
            if($row['name']){

            $food = new DietList();
            $food->food_name = $row['name'];

                // For Food Group
            if($row['food_group']){

                $data = FoodGroup::where('name', 'LIKE', "%{$row['food_group']}%")->select('id','name')->first();
                // dd($data);
                if($data){
                    $food_group = $data->id;
                }else{

                    $new = new FoodGroup();
                    $new->name = strtolower($row['food_group']);
                    $new->is_active = 1;
                    $new->save();
                    $food_group = $new->id;
                }

                }else{

                    $food_group = null;

                }


                // For SERVING DESCRIPTIONS


                if($row['serving_description_1_g']){

                    $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_1_g']}%")->select('id','name')->first();


                    if($data){

                        $serving_desc_1 = $data->id;
                    }else{

                        $new = new ServingSize();
                        $new->name = strtolower($row['serving_description_1_g']);
                        $new->is_active = 1;
                        $new->save();
                        $serving_desc_1 = $new->id;
                    }

                    }else{

                        $serving_desc_1 = null;

                    }

                    if($row['serving_description_2_g']){

                        $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_2_g']}%")->select('id','name')->first();

                        if($data){
                            // dd($data->id);
                            $serving_desc_2 = $data->id;
                        }else{
                            // dd($data);
                            $new = new ServingSize();
                            $new->name = strtolower($row['serving_description_2_g']);
                            $new->is_active = 1;
                            $new->save();
                            $serving_desc_2 = $new->id;
                        }

                        }else{

                            $serving_desc_2 = null;

                        }

                        if($row['serving_description_3_g']){

                            $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_3_g']}%")->select('id','name')->first();
                            // dd($row['serving_description_3_g']);
                            // dd($data);

                            if($data){
                                $serving_desc_3 = $data->id;
                            }else{

                                $new = new ServingSize();
                                $new->name = strtolower($row['serving_description_3_g']);
                                $new->is_active = 1;
                                $new->save();
                                $serving_desc_3 = $new->id;
                            }

                            }else{

                                $serving_desc_3 = null;

                            }

                            if($row['serving_description_4_g']){

                                $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_4_g']}%")->select('id','name')->first();
                                // dd($row['serving_description_4_g']);
                                if($data){
                                    $serving_desc_4 = $data->id;
                                }else{

                                    $new = new ServingSize();
                                    $new->name = strtolower($row['serving_description_4_g']);
                                    $new->is_active = 1;
                                    $new->save();
                                    $serving_desc_4 = $new->id;
                                }

                                }else{

                                    $serving_desc_4 = null;

                                }


                                if($row['serving_description_5_g']){

                                    $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_5_g']}%")->select('id','name')->first();
                                    // dd($data);
                                    if($data){
                                        $serving_desc_5 = $data->id;
                                    }else{

                                        $new = new ServingSize();
                                        $new->name = strtolower($row['serving_description_5_g']);
                                        $new->is_active = 1;
                                        $new->save();
                                        $serving_desc_5 = $new->id;
                                    }

                                    }else{

                                        $serving_desc_5 = null;

                                    }

                                    if($row['serving_description_6_g']){

                                        $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_6_g']}%")->select('id','name')->first();
                                        // dd($data);
                                        if($data){
                                            $serving_desc_6 = $data->id;
                                        }else{

                                            $new = new ServingSize();
                                            $new->name = strtolower($row['serving_description_6_g']);
                                            $new->is_active = 1;
                                            $new->save();
                                            $serving_desc_6 = $new->id;
                                        }

                                        }else{

                                            $serving_desc_6 = null;

                                        }

                                        if($row['serving_description_7_g']){

                                            $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_7_g']}%")->select('id','name')->first();
                                            // dd($data);
                                            if($data){
                                                $serving_desc_7 = $data->id;
                                            }else{

                                                $new = new ServingSize();
                                                $new->name = strtolower($row['serving_description_7_g']);
                                                $new->is_active = 1;
                                                $new->save();
                                                $serving_desc_7 = $new->id;
                                            }

                                            }else{

                                                $serving_desc_7 = null;

                                            }


                                            if($row['serving_description_8_g']){

                                                $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_8_g']}%")->select('id','name')->first();
                                                // dd($data);
                                                if($data){
                                                    $serving_desc_8 = $data->id;
                                                }else{

                                                    $new = new ServingSize();
                                                    $new->name = strtolower($row['serving_description_8_g']);
                                                    $new->is_active = 1;
                                                    $new->save();
                                                    $serving_desc_8 = $new->id;
                                                }

                                                }else{

                                                    $serving_desc_8 = null;

                                                }


                                                if($row['serving_description_9_g']){

                                                    $data = ServingSize::where('name', 'LIKE', "%{$row['serving_description_9_g']}%")->select('id','name')->first();
                                                    // dd($data);
                                                    if($data){
                                                        $serving_desc_9 = $data->id;
                                                    }else{

                                                        $new = new ServingSize();
                                                        $new->name = strtolower($row['serving_description_9_g']);
                                                        $new->is_active = 1;
                                                        $new->save();
                                                        $serving_desc_9 = $new->id;
                                                    }

                                                    }else{

                                                        $serving_desc_9 = null;

                                                    }

                                                    if($row['serving_size']){

                                                        $data = ServingSize::where('name', 'LIKE', "%{$row['serving_size']}%")->select('id','name')->first();
                                                        // dd($data);
                                                        if($data){
                                                            $serving_size = $data->id;
                                                        }else{

                                                            $new = new ServingSize();
                                                            $new->name = strtolower($row['serving_size']);
                                                            $new->is_active = 1;
                                                            $new->save();
                                                            $serving_size = $new->id;
                                                        }

                                                        }else{

                                                            $serving_size = null;

                                                        }




            $food->calories = $row['calories'];
            $food->fat_in_g = $row['fat_g'];
            $food->protein_in_g = $row['protein_g'];
            $food->carb_in_g = $row['carbohydrate_g'];
            $food->sugar_in_g = $row['sugars_g'];
            $food->fiber_in_g = $row['fiber_g'];
            $food->sodium_in_mg = $row['sodium_mg'];
            $food->potassium_in_mg = $row['potassium_mg'];
            $food->cholestrol_in_mg = $row['cholesterol_mg'];
            $food->saturated_fat_in_g = $row['saturated_fats_g'];
            $food->trans_fat_in_g = $row['trans_fat_g'];
            $food->monounsaturated_fat_in_g = $row['monounsaturated_fat_mg'];
            $food->polyunsaturated_fat_in_g = $row['polyunsaturated_fat_mg'];
            $food->vitamin_a_iu = $row['vitamin_a_iu'];
            $food->vitamin_a_rae_mg = $row['vitamin_a_rae_mg'];
            $food->vitamin_c_in_mg = $row['vitamin_c_mg'];
            $food->vitamin_d_mg = $row['vitamin_d_mg'];
            $food->calcium_in_mg = $row['calcium_mg'];
            $food->iron_in_mg = $row['iron_mg'];
            $food->serving_weight_1 = $row['serving_weight_1_g'];
            $food->serving_desc_1 = $serving_desc_1;
            $food->serving_weight_2 = $row['serving_weight_2_g'];
            $food->serving_desc_2 = $serving_desc_2;
            $food->serving_weight_3 = $row['serving_weight_3_g'];
            $food->serving_desc_3 = $serving_desc_3;
            $food->serving_weight_4 = $row['serving_weight_4_g'];
            $food->serving_desc_4 = $serving_desc_4;
            $food->serving_weight_5 = $row['serving_weight_5_g'];
            $food->serving_desc_5 = $serving_desc_5;
            $food->serving_weight_6 = $row['serving_weight_6_g'];
            $food->serving_desc_6 = $serving_desc_6;
            $food->serving_weight_7 = $row['serving_weight_7_g'];
            $food->serving_desc_7 = $serving_desc_7;
            $food->serving_weight_8 = $row['serving_weight_8_g'];
            $food->serving_desc_8 = $serving_desc_8;
            $food->serving_weight_9 = $row['serving_weight_9_g'];
            $food->serving_desc_9 = $serving_desc_9;
            $food->cal_weight_200 = $row['200_calorie_weight_g'];
            $food->is_active = 1;
            $food->serving_size = $serving_size;
            $food->weight_in_g = $row['weight_in_g'];

            $food->food_group = $food_group ;
            $food->save();

        }
    }
    }
}
