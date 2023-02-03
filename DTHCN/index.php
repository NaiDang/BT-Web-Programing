<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hcn.css">
    <title>HCN</title>
</head>
<body>
<?php
   {
        $dai = $_POST["dai"];
        $rong = $_POST["rong"];
    }
        $dt= $dai * $rong;
   
   ?>
    <form id="form" name="form" method="post" action="index.php">
        <table width="400"  border="0" align="center" cellpadding ="2" cellspacing="2">
            <tr>
                <td colspan="2"><span class ="style1">DIỆN TÍCH HÌNH CHỮ NHẬT</span></td>
            </tr>
            <tr>
                <td width="160"><span class ="style4">Chiều dài:</span></td>
                <td width="261"><label>
                    <input name="dai" type="text" id ="dai" value ="<?php echo !empty($dai) ? $dai : '0'; ?>" size="20" style="background-color:#F1EBD9">
                </label></td>
            </tr>
            <tr>
                <td width="125"><span class ="style4">Chiều rộng:</span></td>
                <td width="261"><label>
                    <input name="rong" type="text" id ="rong" value ="<?php echo !empty($rong) ? $rong : '0'; ?>" size="20" style="background-color:#F1EBD9">
                </label></td>
            </tr>
            <tr>
            <td><span class="style4">Diện tích:</span></td>
                <td><label >
                    <input name="dt" type="text" id="dt" value="<?php echo $dt;?>" size="20" readonly="true" style="background-color:#B9D6F3">
                </label></td>
            </tr>
            <tr> 
                <td colspan="2" align="center"> <label>
                    <input type="submit"name= "submit" value="Tính">
                </label></td>
            </tr>   
            
    </form>

</body>
</html>