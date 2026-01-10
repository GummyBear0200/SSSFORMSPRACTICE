<!DOCTYPE html>
<html>
<head>
<title>SSS E-1 Online Form</title>
<style>
body{
    font-family: Arial;
    background:#f4f4f4;
}
.form-box{
    width:800px;
    margin:20px auto;
    background:white;
    padding:20px;
    border:1px solid #aaa;
}
label{
    display:block;
    margin-top:10px;
    font-weight:bold;
}
input, select{
    width:100%;
    padding:8px;
    margin-top:5px;
}
.error{
    color:red;
    margin-top:10px;
}
</style>
</head>

<body>
<div class="form-box">
<h2>SSS E-1 Personal Record (Practice Only)</h2>

<form id="sssForm" method="POST" action="save.php">

<label>First Name</label>
<input type="text" name="first_name" id="first_name">

<label>Middle Name</label>
<input type="text" name="middle_name">

<label>Last Name</label>
<input type="text" name="last_name" id="last_name">

<label>Date of Birth</label>
<input type="date" name="dob" id="dob">

<label>Sex</label>
<select name="sex" id="sex">
    <option value="">Select</option>
    <option>Male</option>
    <option>Female</option>
</select>

<label>Civil Status</label>
<select name="civil_status" id="civil_status">
    <option value="">Select</option>
    <option>Single</option>
    <option>Married</option>
    <option>Widowed</option>
</select>

<label>Nationality</label>
<input type="text" name="nationality" id="nationality">

<label>Place of Birth</label>
<input type="text" name="place_of_birth" id="place_of_birth">

<input type="checkbox" id="sameAddress"> The same with Home Address

<div id="homeDiv">
<label>Home Address</label>
<input type="text" name="home_address" id="home_address">
</div>

<label>Mobile Number</label>
<input type="text" name="mobile" id="mobile">

<label>Email Address</label>
<input type="text" name="email" id="email">

<br><br>
<button type="submit">Submit</button>

<div class="error" id="errorBox"></div>

</form>
</div>

<script>
document.getElementById("sameAddress").addEventListener("change", function(){
    if(this.checked){
        document.getElementById("homeDiv").style.display="none";
    }else{
        document.getElementById("homeDiv").style.display="block";
    }
});

document.getElementById("sssForm").addEventListener("submit", function(e){
    let error = "";

    if(document.getElementById("first_name").value=="") error="First name required";
    else if(document.getElementById("last_name").value=="") error="Last name required";
    else if(document.getElementById("dob").value=="") error="DOB required";
    else if(document.getElementById("sex").value=="") error="Sex required";
    else if(document.getElementById("civil_status").value=="") error="Civil Status required";
    else if(document.getElementById("nationality").value=="") error="Nationality required";
    else if(document.getElementById("place_of_birth").value=="") error="Place of Birth required";
    else if(!document.getElementById("sameAddress").checked && document.getElementById("home_address").value=="") error="Home Address required";
    else if(document.getElementById("mobile").value=="") error="Mobile required";
    else if(document.getElementById("email").value=="") error="Email required";

    if(error!=""){
        e.preventDefault();
        document.getElementById("errorBox").innerHTML = error;
    }
});
</script>

</body>
</html>
