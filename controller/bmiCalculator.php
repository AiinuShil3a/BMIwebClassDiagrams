<?php

include_once 'model/BMIClass.php';

if(isset($_POST['Submit'])){
        $BMI_height = $_POST['Height'];
        $BMI_weight = $_POST['Weight'];

        $BMIOBJ = new Bmilndexer($BMI_height , $BMI_weight);
        $BMI = $BMIOBJ->BMI_calculator();
        $Height = $BMIOBJ->get_Height();
        $Weight = $BMIOBJ->get_Weight();
}

if(isset($BMI)){
        if($BMI <= 18.50){
                echo "<p>ส่วนสูง: {$Height} CM</p>";
                echo "<p>น้ำหนัก: {$Weight} KG</p>";
                echo "<p>BMI: {$BMI}</p>";
                echo "<p>รูปร่าง: คุณผอมเกินไป</p>";
        }else if($BMI >= 18.6 && $BMI <= 24.0){
                echo "<p>ส่วนสูง: {$Height} CM</p>";
                echo "<p>น้ำหนัก: {$Weight} KG</p>";
                echo "<p>BMI: {$BMI}</p>";
                echo "<p>รูปร่าง: คุณน้ำหนักตามมาตรฐาน</p>";
        }else if($BMI >= 25.0 && $BMI <= 29.9){
                echo "<p>ส่วนสูง: {$Height} CM</p>";
                echo "<p>น้ำหนัก: {$Weight} KG</p>";
                echo "<p>BMI: {$BMI}</p>";
                echo "<p>รูปร่าง: คุณอ้วน</p>";
        }else{
                echo "<p>ส่วนสูง: {$Height} CM</p>";
                echo "<p>น้ำหนัก: {$Weight} KG</p>";
                echo "<p>BMI: {$BMI}</p>";
                echo "<p>รูปร่าง: คุณอ้วนมาก</p>";
        }
      
}
?>