<!DOCTYPE html>
<html>
<head>
  <?php
    session_start();
  ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='icon' href='img/brain.png' type='image/x-icon'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="dist/sweetalert.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">

    <script src="js/bootstrap.min.js"></script>

    <title>แบบสอบถามข้อมูลพฤติกรรมเพื่อทำนายผลสัมฤทธิ์ทางการเรียนในรายวิชา Programming</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Prompt', sans-serif;
            /* background-color: #EE6A02; */
        }
         .bg {
            background-image: url("img/bg.jpg");
            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        div.header {
          width: 75%;
          box-sizing: border-box;
          background-color: #F3F31D;;
          font-family: 'Russo One', sans-serif;
        }
        div.top {
          width: 100%;
          padding-top: 3.5%;
          box-sizing: border-box;
        }
        div.body-white
        {
          width: 75%;
          box-sizing: border-box;
          background-image: url("img/user1.png");
          background-repeat: no-repeat;
          background-position: left;

          opacity: 0.84;
        }
        .btn-success
        {
          background-color: #E9500D; !important;
          border-radius: 0px;
          color: #FFFFFF;
          font-size: 24px !important;
          font-family: 'Russo One', sans-serif;
          border-color: #EE1402;
          opacity: 1.0;
        }
        .btn-success:hover {
          background-color: #EE1402;
          color: #000000;
          border-color: #000000;
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
          opacity: 1.0;
        }
        .container{
          color: #000000;
        }
</style>
</head>
<body>
    <div class="bg">
    <div class="top">
    <div class="container header" style="background-color:#000000">
      <div class="row">
        <div class="col-10" align="right">
          <h2 style="color:#8C8C8C">Questionnaire to predict academic achievement </h2>
        </div>
        <div class="col-11" align="right">
          <h3 style="color:#EE1402">in the subjects Programming</h3>
        </div>
      </div>
    </div>
    </div>
    <center><div class="body-white" style="background-color:#FFFFFF" opacity="0.82">
      <form class="form-group" action="index.php" method="post">
      <div class="container">

        <div class="row">
          <div class="col-5" align="right"></br>
            เพศ :
          </div>
          <div class="col-md-1"  align="left"></br>
            <label class="radio-inline"><input type="radio" name="gender" value="male">ชาย</label>
          </div>
          <div class="col-md-1"  align="left"></br>
            <label class="radio-inline"><input type="radio" name="gender" value="female">หญิง</label>
          </div>
        </div>

        <div class="row">
        <div class="col-5" align="right">
          อายุขณะเข้าเรียนปี 1 :
        </div>
        <div class="col-md-2"  align="left">
          <label class="radio-inline"><input type="number" name="age" step="1" min="17" class="form-control" /></label>
        </div>
      </div>

      <div class="row">
        <div class="col-5" align="right">
          วิธีการเข้าศึกษา :
        </div>
        <div class="col"  align="left">
          <label class="radio-inline">
            <select name="examination">
              <option value="great">โควต้าเรียนดี</option>
              <option value="admission">แอดมิชชั่น</option>
              <option value="area">โควต้าพื้นที่</option>
              <option value="test">สอบตรง</option>
            </select>
          </label>
        </div>
      </div>

      <div class="row">
        <div class="col-5" align="right">
          ภูมิเลานำ :
        </div>
        <div class="col-md-2"  align="left">
          <label class="radio-inline">
            <select name="provincial">
                <option value="central">กลาง</option>
                <option value="north">เหนือ</option>
                <option value="northeast">อีสาน</option>
                <option value="southern">ใต้</option>
                <option value="east">ตะวันออก</option>
              </select></label>
        </div>
      </div>

      <div class="row">
        <div class="col-5" align="right">
          แผนการเรียนก่อนเข้าศึกษา :
        </div>
        <div class="col-md-2"  align="left">
          <label class="radio-inline">
          <select name="majority">
            <option value="science-math">วิทย์-คณิต</option>
            <option value="art-math">ศิลป์คำนวน</option>
            <option value="art-language">ศิลป์ภาษา</option>
            <option value="vocational">ปวช.</option>
          </select></label>
        </div>
        <div class="col-md-12"><hr/></div>
      </div>

        <div class="row">
          <div class="col-5" align="right">
            ตำแหน่งที่นั่งในห้องเรียน :
          </div>
          <div class="col-md-2"  align="left">
            <label class="radio-inline"><input type="radio" name="position" value="front">หน้า</label>
          </div>
          <div class="col-md-2"  align="left">
            <label class="radio-inline"><input type="radio" name="position" value="middle">กลาง</label>
          </div>
          <div class="col-md-2"  align="left">
            <label class="radio-inline"><input type="radio" name="position" value="behind">หลัง</label>
          </div>
        </div>

          <div class="row">
            <div class="col-5" align="right">
              การมาเรียนสาย :
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="late" value="often">บ่อย</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="late" value="sometimes">บางครั้ง</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="late" value="never">ไม่เคย</label>
            </div>
          </div>

          <div class="row">
            <div class="col-5" align="right">
              การจดบันทึกในห้องเรียน :
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="lecture" value="often">บ่อย</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="lecture" value="sometimes">บางครั้ง</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="lecture" value="never">ไม่เคย</label>
            </div>
          </div>

          <div class="row">
            <div class="col-5" align="right">
              การทบทวนบทเรียน :
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="repeat" value="often">บ่อย</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="repeat" value="sometimes">บางครั้ง</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="repeat" value="never">ไม่เคย</label>
            </div>
          </div>

          <div class="row">
            <div class="col-5" align="right">
              ที่อยู่ปัจจุบัน :
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="location" value="dormitory">หอใน</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="location" value="outside">หอนอก</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="location" value="house">บ้าน</label>
            </div>
          </div>

          <div class="row">
            <div class="col-5" align="right">
              เวลาเข้านอนส่วนใหญ่ :
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="timetogotobed" value="bfmid">ก่อนเที่ยงคืน</label>
            </div>
            <div class="col-md-2"  align="left">
              <label class="radio-inline"><input type="radio" name="timetogotobed" value="afmid">หลังเที่ยงคืน</label></br></br>
            </div>
            <!-- <div class="col-md-12"><hr/></div> -->
          </div>

        </div>
        <center>

          <button type="submit" name="predict" value="submit" class="btn btn-success btn-block" onclick="chkConfirm()">Predict</button>
        </center>
      </div>
    </div>
  </form>
</div></center>

<?php
    	if(isset($_POST['predict']))
      {
    		$gender = $_POST['gender'];
    		$position = $_POST['position'];
    		$late = $_POST['late'];
    		$lecture = $_POST['lecture'];
    		$repeat = $_POST['repeat'];
    		$reply = $_POST['reply'];
    		$examination = $_POST['examination'];
    		$majority = $_POST['majority'];
    		$type = "";
    		$age = $_POST['age'];
    		$location = $_POST['location'];
    		$timetogotobed = $_POST['timetogotobed'];
    		$provincial = $_POST['provincial'];

      		if($majority == 'vocational'){
      			$type = 'vocational';
      		} else $type = 'highschool';

    		$data = array ('gender,position,late,lecture,repeat,reply,entrance examination,majority,type,age,location,timetogotobed,provincial part,class',
    		'male,middle,sometimes,sometimes,sometimes,sometimes,great,science-math,highschool,17,dormitory,bfmid,east,success',
    		'male,front,never,never,sometimes,never,admission,art-math,highschool,19,dormitory,afmid,central,success',
    		'female,front,never,often,never,sometimes,area,art-math,highschool,19,dormitory,afmid,northeast,fail',
    		'female,middle,often,never,often,often,great,vocational,vocational,18,outside,bfmid,southern,success',
    		'female,behind,sometimes,often,sometimes,sometimes,test,vocational,highschool,19,house,bfmid,north,fail',
    		'male,behind,often,never,sometimes,never,test,art-language,highschool,19,outside,afmid,central,success',
    		''.$gender.','.$position.','.$late.','.$lecture.','.$repeat.','.$reply.','.$examination.','.$majority.','.$type.','.$age.','.$location.','.$timetogotobed.','.$provincial.',?'
    		);

    		$fp = fopen('balance_csv.csv', 'w');
    		  foreach($data as $line){
      			$val = explode(",",$line);
      			fputcsv($fp, $val);
    		}
    		fclose($fp);
    		// save file csv to arff-file
    		// -L last set last attribute is a normial value
    		$cmd = 'java -classpath "weka.jar" weka.core.converters.CSVLoader balance_csv.csv > balance_unseen_test.arff ';
    		exec($cmd,$output);
    		// run unseen data -p 5 is class attribute
    		$cmd1 = 'java -classpath "weka.jar" weka.classifiers.functions.SMO -T "balance_unseen_test.arff" -l "grade.model" -p 14'; // show output prediction
    		exec($cmd1,$output1);
    		for ($i=0;$i<sizeof($output1);$i++)
    		{
    			   trim($output1[$i]);
    		}
        if(substr($output1[11],25,6)==="2:fail"){
          $output1 = "Fail";
        }else{
          $output1 = "Success";
        };
          echo "<script> swal('$output1' , 'คือผลการทำนายพฤติกรรมการเรียนต่อวิชา Programming ของคุณ'); </script>";

         session_destroy();
    	}
    ?>
</body>
</html>
