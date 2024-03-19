<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title style="font-weight:bold ;">{F_GRAB APP}</title>
    
</head>
<body>
  <div> 
    <h1 style="text-align: center; font-size: 90px; margin-bottom:10px; ">{F-GRAB APP}</h1>
    <h2 style="text-align:center;">*FPT STUDENT CONNECTION NETWORK*</h2>
  </div>
    <div class="container">
      <div class="left-column" style="margin-top: 15px;">
        + + + + + + + + + + + + + + + + +
        <br><br>
        + + + &nbsp;THE F-GRAB APP  + + + + + +
        <br><br>
        + + + + + + + + + + + + + + + + +
<br><br>
<p>
RANDOM VOLUNTEER DRIVER, MAYBE...
</p>
    <div class="container2">
      <div class="text-center my-20">
        <label for="num-cards">HOW MANY DRIVER?:</label>
        <select id="num-cards">
          <option value="1">1</option>
          
        </select>
        <button id="draw-cards-button" class="px-4 py-2 bg-blue-500 text-white rounded" style="color: white;">DRAW DRIVER</button>
        <br>
      </div>

    </div>
<br><br><br>
    <div id="card-container" class="flex flex-wrap justify-center"></div>
    <br><br><br>

    
      </div>
      <div class="right-column">
        <div class="welcome-column">
          <p style="font-size: 18px;">
            WELCOME! THIS IS A F-GRAB APP FOR FINDING A RANDOM DRIVER FROM <b><font color = "red">THE FPT AI QUY NHON UNIVERSITY</font></b>, THIS APP WILL HELP YOU FIND OUT VOLUNTEER DRIVER WHO WILL HELP YOU HITCHHIKING TO FPTU QUY NHON. SEE THE FULL LIST DRIVER AND ASSIGN TO BE DRIVER||STUDENT OF THE  PROJECT <a href="../../web_mysqli/admincp/index.php" target="_blank" style="text-decoration: none; color:yellow; font-weight: bold;font-size: 35px;">HERE</a>
        </p>
        <p></p>
        <p>
            <!--INPUT DATA-->
        </p>
        
        <p>   
        <!--START FORM-->
        <!--START HTML-->
        <h1>Student Information Form (Beta) </h1>
        <h2>-Who want to hitchhiking to FPTU Quy Nhon-</h2>
        <form id="studentForm">
          <div class="form-group">
            <label for="stuID">Student ID:</label>
            <input type="text" id="stuID" name="stuID" required>
          </div>
          <div class="form-group">
            <label for="stuName">Student Name:</label>   
            <input type="text" id="stuName" name="stuName" required>
          </div>
       <div class="form-group">
            <label for="stuAddress">Student Address:</label>
            <input type="text" id="stuAddress" name="stuAddress" required>
          </div>
       <div class="form-group">
            <label for="stuPhoneNumber">Phone Number:</label>
            <input type="text" id="stuPhoneNumber" name="stuPhoneNumber" required>
       </div>
          <div class="form-group">
            <label for="stuImage">Student Image:</label>
            <input type="file" id="stuImage" name="stuImage" accept="image/*" required>
          </div>
          <div class="form-group">
            <label for="stuFPTCode">FPT Code:</label>
            <input type="text" id="stuFPTCode" name="stuFPTCode" required>
          </div>
          <button type="submit">Submit</button>
          </form>

          <!--ASSIGN DRIVER LINK-->
          <div style="margin-top: 20px;">
          <h1 style="margin-top: 20px;">******************************************</h1>
          <h1>* BECOME A GOODWILL DRIVER FOR FPT-ER ****</h1>
          <h1>******************************************</h1>
          <p style="font-size: 18px;">
            WELCOME! THIS IS VOLUNTEER DRIVER SECTION FOR STUDENT FROM <b><font color = "red">THE FPT AI QUY NHON UNIVERSITY</font></b>,IF YOU HAVE GOOWILL THIS SECTION WILL HELP YOU BECOME A VOLUNTEER DRIVER WHO WILL HELP OTHER STUDENT HITCHHIKING TO FPTU QUY NHON.IF YOU WANT TO ASSIGNT, CLICK <a href="../../web_mysqli/admincp/index.php">HERE</a>
        </p>

        <!--ASSIGN DRIVER FORM-->
          
            <!--ASSIGN DRIVER FORM-->
        </div>
          <!--ASSIGN DRIVER LINK-->

          <!--END HTML-->

          <!--START STYLE FORM-->
          <style>
            .form-group {
              margin-bottom: 20px;
            }
            label {
              display: block;      
              font-weight: bold;
            }
            input[type="text"] {
              width: 100%;
              padding: 5px;
            }
            button {
              padding: 10px 20px;
              background-color: #4CAF50;
              color: white;
              border: none;
              cursor: pointer;
            }
          </style>
          <!--END STYLE FORM-->
        
          <!--START SCRIPT-->
          <script>
            document.getElementById("studentForm").addEventListener("submit", function(event) {
              event.preventDefault(); 
        
              // Get form values
              var stuID = document.getElementById("stuID").value;
              var stuName = document.getElementById("stuName").value;
              var stuAddress = document.getElementById("stuAddress").value;
              var stuPhoneNumber = document.getElementById("stuPhoneNumber").value;
              var stuImage = document.getElementById("Image").value;
              var stuFPTCode = document.getElementById("stuFPTCode").value;
        
              // Do something with the form data (e.g., send it to a server)
              console.log("Student ID:", stuID);
              console.log("Student Name:", stuName);
              console.log("Student Address:", stuAddress);
              console.log("Phone Number:", stuPhoneNumber);
              console.log("Student Image:", stuImage);
              console.log("FPT Code:", stuFPTCode);
        
              // Reset the form
              document.getElementById("studentForm").reset();
            });
          </script>
          


        <!--END FORM-->
    <p></a>

      <script src="tensorscript.js"></script>

          <!-- Google tag (gtag.js) -->




<script async src="https://www.googletagmanager.com/gtag/js?id=G-8GL89CTJ7J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8GL89CTJ7J');
</script>
         

</body>
</html>