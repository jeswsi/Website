<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
require_once 'demoSettings.php';

// grab the shapejs script
$shapeJsDemoScriptPath = 'shapeJsScripts/shapeJsDemo.js';
ob_start();
readfile($shapeJsDemoScriptPath);
$shapeJsDemoScript = json_encode(ob_get_clean());

// change this to not be time() if you care about caching
$scriptTag = time();
?>

<script type="text/javascript" src="sw.shapejs.creator-2.0.js?tag=<?php echo $scriptTag;?>"></script>
<script type="text/javascript" src="jquery-1.7.2.min.js?tag=<?php echo $scriptTag;?>"></script>
<script type="text/javascript" src="jquery.form.js?tag=<?php echo $scriptTag;?>"></script>

<script type="text/javascript">
  var shapeJsDemoCode = '<?php echo $shapeJsDemoScript;?>';
  var modelPath = null;
  var email = null;
  var coname = null;

    $(document).ready(function(){
        $("#email").keyup(function(){
            email = $(this).val();
        });
    
        $("#coname").keyup(function(){
            coname = $(this).val();
        });

        $("#radius").on("change", function() {
            var val = Math.abs(parseInt(this.value*100) || 1)/100;
            this.value = (val < 0.25) || (val > 1) ? 0.25 : val;
        });

        $("#height").on("change", function() {
            var val = Math.abs(parseInt(this.value*100) || 1)/100;
            this.value = (val < 2) || (val > 10) ? 4 : val;
        });

        $('#load').on('click', function() {
            var $this = $(this);
            $this.text('Please Wait');
        });
    })

    $body = $("body");

    $(document).on({
     ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
    });
  
  /**
   *  Success callback for the call to ShapeJS
   */
  function onGenerateModelSuccess(aoptOutput, modelFilePath) {
    // grab the iframe using the path to the aopt file
    aoptOutput = 'http://<?php echo DemoSettings::APP_HOST_NAME;?>/proxies/aoptFileProxy.php?aoptFilePath=' + aoptOutput + "&width=500&height=300";
    $("#x3d-iframe").attr('src',aoptOutput);
    
    // set the model path for uploading later
    modelPath = modelFilePath;

  }
  
  /**
   * Uploads a model with the Shapeways API.
   */
  function uploadModel() {
    $.post('upload.php', 
	   {modelFilePath: modelPath, 
      modelFileName: "ShapeJSDemoModel.x3db",
      coname: coname,
      email: email
     },
     function(response) {
     var modelLink = $('#model-link');
     modelLink.html('<p>'+response+'</p>');
     modelLink.css('display', 'block');

     }/*,
	   function(response) {
		 
		 // now that we have a model id, we can create a link to the model on shapeways
		 var decodedResponse = JSON.parse(response);
		 var modelId = decodedResponse.modelId;
		 var modelLink = $('#model-link');
		 modelLink.html('<a href="http://www.shapeways.com/model/upload-and-buy/' + modelId + '">Click here to see your model on shapeways.com!</a>');
		 modelLink.css('display', 'block');
	   }*/
    );
  }

  
</script>

<div id="controls" style="float: left">
  <form id='user-info'>
    Company Name:
    <input type="text" name="coname" id="coname" required>
    <br/>
    Email:
    <input type="text" name="email" id="email" required>
    <br/>
    Comments:
    <br/>
    <textarea cols="50" rows="5" name='comment'></textarea>
  </form>
  <form id="shapejs-demo-form">
    Radius: 
    <input type="text" name='param1' id='radius' value="0.25">
    <br/>
    Height: 
    <input type="text" name='param2' id='height' value="4">
    <br/>
    Magnets for table attachment?: 
    <input type="checkbox" name='param3' id='magnets'>
    <br/>
    Screw size:
    <select name='param4'>
      <option value="8-32">#8-32</option>
      <option value="M4">M4</option>
    </select>
  </form>

  <a href="#" id="generate" onclick="getShapeJsPreview(shapeJsDemoCode, 'shapejs-demo-form', onGenerateModelSuccess)">Generate Model</a>
  <a href="#" onclick="uploadModel()">Upload Model</a>
  <!-- <a href="#" onclick="upload(modelPath)">Upload Model</a> -->
  
  <br/>
  
  <div id="model-link" style="display: none">
    
  </div>
</div>

<div id="x3delement" style="float: left; border: 1px solid">
  <iframe id="x3d-iframe" x="0px" y="0px" width="500px" height="300px" frameborder="0" style="overflow:hidden;"
          src="">
  </iframe>
</div>

<div class="modal"><!-- loading animation goes here--></div>
</body>